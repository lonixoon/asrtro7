<?php

namespace app\models\Form;

use app\models\Entity\Profile;
use app\models\Entity\User;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegistrationForm extends Model
{
    public $first_name;
    public $last_name;
    public $sex;
    public $birthday_day;
    public $birthday_month;
    public $birthday_year;
    public $phonenumber;
    public $country;
    public $tos;
    public $email;
    public $password;


    public function formName()
    {
        return 'tx_dbusers_pi1';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'sex', 'birthday_day', 'birthday_month', 'birthday_year', 'email', 'phonenumber', 'tos'], 'required'],
            [['birthday_day', 'birthday_month', 'birthday_year', 'phonenumber'], 'integer', 'min' => 1, 'max' => 99999999999],
            [['sex', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['first_name', 'last_name'], 'trim'],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => 'app\models\Entity\User', 'message' => 'Пользователь с такой почтой уже зарегистрирован'],

        ];
    }

    /**
     * @return bool
     * @throws \Throwable
     * @throws \yii\base\Exception
     * @throws \yii\db\StaleObjectException
     */
    public function saveUser(): ?bool
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->email;
        $user->email = $this->email;
        $user->generateAuthKey();
        $this->password = 123;
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->created_at = time();
        $user->updated_at = time();
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        if ($user->save()) {
            $dbUser = User::findByEmail($this->email);
            $profile = new Profile();
            $profile->user_id = $dbUser->id;;
            $profile->first_name = $this->first_name;
            $profile->last_name = $this->last_name;
            $profile->phonenumber = $this->phonenumber;
            $profile->country = $this->country;
            $profile->sex = $this->sex === 'Female' ? 1 : 0;
            $profile->birthday = $this->birthdayToDateFormat();
            if ($profile->save()) {
                Yii::$app->session->setFlash('success', "Логин: $dbUser->email и пароль: $this->password для входа");
                return Yii::$app->user->login($dbUser, 3600 * 24 * 30);
            } else {
                $user->delete();
            }
        };
        return null;
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function birthdayToDateFormat(): string
    {
        $day = str_pad($this->birthday_day, 2, 0, STR_PAD_LEFT);
        $month = str_pad($this->birthday_month, 2, 0, STR_PAD_LEFT);
        $this->birthday_year;

        return (new \DateTime("$this->birthday_year-$month-$day"))->format('Y-m-d');
    }
}
