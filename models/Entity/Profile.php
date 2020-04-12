<?php

namespace app\models\Entity;

use phpDocumentor\Reflection\Types\Self_;
use Yii;
use yii\db\ActiveRecord;

/**
 * Class Profile
 * @package app\models\Entity
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property boolean $sex
 * @property string $country
 * @property int $phonenumber
 * @property string $birthday
 */
class Profile extends ActiveRecord
{
    public static function tableName()
    {
        return 'user_profile';
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


}
