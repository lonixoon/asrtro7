<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\Form\LoginForm */

use yii\helpers\Html;
\app\assets\MergedAsset::register($this);

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="b-reg-form b-reg-form--one client-reg-block">
        <form action="<?= \yii\helpers\Url::to(['site/registration']) ?>" method="post">
            <?= Html::input("hidden", "_csrf", Yii::$app->request->getCsrfToken()); ?>
            <span class="reg-error-list"></span>

            <label class="g-label">Ваше имя</label>
            <dl class="l-row-wrap l-row-wrap--one">
                <dt class="l-row">
                    <input type="text" id="reg-first-name" class="g-input g-input--one b-reg-form_input " value=""
                           name="tx_dbusers_pi1[first_name]" placeholder="Имя"/>
                </dt>
                <dt class="l-row">
                    <input type="text" id="reg-last-name" class="g-input g-input--one b-reg-form_input " value=""
                           name="tx_dbusers_pi1[last_name]" placeholder="Фамилия"/>
                </dt>
            </dl>
            <div class="l-row info-field">
                <label class="g-label">Пол</label>
                <label class="g-radio g-radio--one b-reg-form_radio">
                    <input id="radio-01" class="g-radio_input " type="radio" name="tx_dbusers_pi1[sex]" value="Female"
                           checked>
                    <span class="g-radio_skin"></span>
                    <span class="g-radio_text">женщина</span>
                </label>
                <label class="g-radio g-radio--one b-reg-form_radio">
                    <input id="radio-02" class="g-radio_input " type="radio" name="tx_dbusers_pi1[sex]" value="Male">
                    <span class="g-radio_skin"></span>
                    <span class="g-radio_text">мужчина</span>
                </label>
            </div>
            <div class="l-row birth-date">
                <label class="g-label">Дата рождения</label>
                <dl class="l-row-wrap l-row-wrap--two">
                    <dt class="l-row">
                        <select class="js-sod sod-select" id="birth-day" name="tx_dbusers_pi1[birthday_day]"
                                data-custom-class="sod_select--one b-reg-form_date js-date js-date-day" data-size="5">
                            <option value="" selected>день</option>

                            <option value="1">1</option>

                            <option value="2">2</option>

                            <option value="3">3</option>

                            <option value="4">4</option>

                            <option value="5">5</option>

                            <option value="6">6</option>

                            <option value="7">7</option>

                            <option value="8">8</option>

                            <option value="9">9</option>

                            <option value="10">10</option>

                            <option value="11">11</option>

                            <option value="12">12</option>

                            <option value="13">13</option>

                            <option value="14">14</option>

                            <option value="15">15</option>

                            <option value="16">16</option>

                            <option value="17">17</option>

                            <option value="18">18</option>

                            <option value="19">19</option>

                            <option value="20">20</option>

                            <option value="21">21</option>

                            <option value="22">22</option>

                            <option value="23">23</option>

                            <option value="24">24</option>

                            <option value="25">25</option>

                            <option value="26">26</option>

                            <option value="27">27</option>

                            <option value="28">28</option>

                            <option value="29">29</option>

                            <option value="30">30</option>

                            <option value="31">31</option>

                        </select>
                    </dt>
                    <dt class="l-row">
                        <select class="js-sod sod-select" id="birth-month" name="tx_dbusers_pi1[birthday_month]"
                                data-custom-class="sod_select--one b-reg-form_date js-date js-date-month" data-size="5">
                            <option value="" selected>месяц</option>

                            <option value="1">Январь</option>

                            <option value="2">Февраль</option>

                            <option value="3">Март</option>

                            <option value="4">Апрель</option>

                            <option value="5">Май</option>

                            <option value="6">Июнь</option>

                            <option value="7">Июль</option>

                            <option value="8">Август</option>

                            <option value="9">Сентябрь</option>

                            <option value="10">Октябрь</option>

                            <option value="11">Ноябрь</option>

                            <option value="12">Декабрь</option>

                        </select>
                    </dt>
                    <dt class="l-row">
                        <select class="js-sod sod-select" id="birth-year" name="tx_dbusers_pi1[birthday_year]"
                                data-custom-class="sod_select--one b-reg-form_date js-date js-date-year" data-size="5">
                            <option value="" selected>год</option>

                            <option value="2002">2002</option>

                            <option value="2001">2001</option>

                            <option value="2000">2000</option>

                            <option value="1999">1999</option>

                            <option value="1998">1998</option>

                            <option value="1997">1997</option>

                            <option value="1996">1996</option>

                            <option value="1995">1995</option>

                            <option value="1994">1994</option>

                            <option value="1993">1993</option>

                            <option value="1992">1992</option>

                            <option value="1991">1991</option>

                            <option value="1990">1990</option>

                            <option value="1989">1989</option>

                            <option value="1988">1988</option>

                            <option value="1987">1987</option>

                            <option value="1986">1986</option>

                            <option value="1985">1985</option>

                            <option value="1984">1984</option>

                            <option value="1983">1983</option>

                            <option value="1982">1982</option>

                            <option value="1981">1981</option>

                            <option value="1980">1980</option>

                            <option value="1979">1979</option>

                            <option value="1978">1978</option>

                            <option value="1977">1977</option>

                            <option value="1976">1976</option>

                            <option value="1975">1975</option>

                            <option value="1974">1974</option>

                            <option value="1973">1973</option>

                            <option value="1972">1972</option>

                            <option value="1971">1971</option>

                            <option value="1970">1970</option>

                            <option value="1969">1969</option>

                            <option value="1968">1968</option>

                            <option value="1967">1967</option>

                            <option value="1966">1966</option>

                            <option value="1965">1965</option>

                            <option value="1964">1964</option>

                            <option value="1963">1963</option>

                            <option value="1962">1962</option>

                            <option value="1961">1961</option>

                            <option value="1960">1960</option>

                            <option value="1959">1959</option>

                            <option value="1958">1958</option>

                            <option value="1957">1957</option>

                            <option value="1956">1956</option>

                            <option value="1955">1955</option>

                            <option value="1954">1954</option>

                            <option value="1953">1953</option>

                            <option value="1952">1952</option>

                            <option value="1951">1951</option>

                            <option value="1950">1950</option>

                            <option value="1949">1949</option>

                            <option value="1948">1948</option>

                            <option value="1947">1947</option>

                            <option value="1946">1946</option>

                            <option value="1945">1945</option>

                            <option value="1944">1944</option>

                            <option value="1943">1943</option>

                            <option value="1942">1942</option>

                            <option value="1941">1941</option>

                            <option value="1940">1940</option>

                            <option value="1939">1939</option>

                            <option value="1938">1938</option>

                            <option value="1937">1937</option>

                            <option value="1936">1936</option>

                            <option value="1935">1935</option>

                            <option value="1934">1934</option>

                            <option value="1933">1933</option>

                            <option value="1932">1932</option>

                            <option value="1931">1931</option>

                            <option value="1930">1930</option>

                            <option value="1929">1929</option>

                            <option value="1928">1928</option>

                            <option value="1927">1927</option>

                            <option value="1926">1926</option>

                            <option value="1925">1925</option>

                            <option value="1924">1924</option>

                            <option value="1923">1923</option>

                            <option value="1922">1922</option>

                            <option value="1921">1921</option>

                        </select>
                    </dt>
                </dl>
            </div>
            <div class="l-row">
                <label class="g-label">Номер телефона</label>
                <div class="b-reg-form_phone b-number">
                    <select class="js-sod-phone js-region | sod-select" id="country" name="tx_dbusers_pi1[country]"
                            data-custom-class="sod_select--one b-reg-form_prefix region-select js-region-select b-number_select"
                            data-size="5">

                        <option value="ru" data="ru;7" selected="selected">Россия</option>

                        <option value="ua" data="ua;380">Украина</option>

                        <option value="au" data="au;61">Австралия</option>

                        <option value="at" data="at;43">Австрия</option>

                        <option value="az" data="az;994">Азербайджан</option>

                        <option value="al" data="al;355">Албания</option>

                        <option value="dz" data="dz;213">Алжир</option>

                        <option value="ad" data="ad;376">Андорра</option>

                        <option value="ar" data="ar;54">Аргентина</option>

                        <option value="am" data="am;374">Армения</option>

                        <option value="af" data="af;93">Афганистан</option>

                        <option value="bs" data="bs;1242">Багамы</option>

                        <option value="bh" data="bh;973">Бахрейн</option>

                        <option value="by" data="by;375">Беларусь</option>

                        <option value="be" data="be;32">Бельгия</option>

                        <option value="bg" data="bg;359">Болгария</option>

                        <option value="ba" data="ba;387">Босния и Герцеговина</option>

                        <option value="br" data="br;55">Бразилия</option>

                        <option value="va" data="va;3906682">Ватикан</option>

                        <option value="gb" data="gb;44">Великобритания</option>

                        <option value="hu" data="hu;36">Венгрия</option>

                        <option value="vn" data="vn;84">Вьетнам</option>

                        <option value="de" data="de;49">Германия</option>

                        <option value="gi" data="gi;350">Гибралтар</option>

                        <option value="hk" data="hk;852">Гонконг</option>

                        <option value="gl" data="gl;299">Гренландия</option>

                        <option value="gr" data="gr;30">Греция</option>

                        <option value="ge" data="ge;995">Грузия</option>

                        <option value="dk" data="dk;45">Дания</option>

                        <option value="do" data="do;1">Доминиканская Республика</option>

                        <option value="eg" data="eg;20">Египет</option>

                        <option value="il" data="il;972">Израиль</option>

                        <option value="in" data="in;91">Индия</option>

                        <option value="id" data="id;62">Индонезия</option>

                        <option value="iq" data="iq;964">Ирак</option>

                        <option value="ir" data="ir;98">Иран, Исламская Республика</option>

                        <option value="ie" data="ie;353">Ирландия</option>

                        <option value="is" data="is;354">Исландия</option>

                        <option value="es" data="es;34">Испания</option>

                        <option value="it" data="it;39">Италия</option>

                        <option value="kz" data="kz;77">Казахстан</option>

                        <option value="ca" data="ca;1">Канада</option>

                        <option value="cy" data="cy;357">Кипр</option>

                        <option value="cn" data="cn;86">Китай</option>

                        <option value="kp" data="kp;850">Корейская Народно-Демократическая Республика</option>

                        <option value="kg" data="kg;996">Киргизия</option>

                        <option value="la" data="la;856">Лаос</option>

                        <option value="lb" data="lb;961">Ливан</option>

                        <option value="ly" data="ly;218">Ливийская Арабская Джамахирия</option>

                        <option value="lv" data="lv;371">Латвия</option>

                        <option value="lt" data="lt;370">Литва</option>

                        <option value="li" data="li;423">Лихтенштейн</option>

                        <option value="lu" data="lu;352">Люксембург</option>

                        <option value="mk" data="mk;389">Македония</option>

                        <option value="mv" data="mv;960">Мальдивы</option>

                        <option value="ma" data="ma;212">Марокко</option>

                        <option value="mt" data="mt;356">Мальта</option>

                        <option value="md" data="md;373">Молдова</option>

                        <option value="mc" data="mc;377">Монако</option>

                        <option value="mn" data="mn;976">Монголия</option>

                        <option value="nl" data="nl;31">Нидерланды</option>

                        <option value="no" data="no;47">Норвегия</option>

                        <option value="ae" data="ae;971">ОАЭ</option>

                        <option value="pl" data="pl;48">Польша</option>

                        <option value="pt" data="pt;351">Португалия</option>

                        <option value="ro" data="ro;40">Румыния</option>

                        <option value="sv" data="sv;503">Сальвадор</option>

                        <option value="sm" data="sm;378">Сан-Марино</option>

                        <option value="sl" data="sl;232">Сьерра-Леоне</option>

                        <option value="sg" data="sg;65">Сингапур</option>

                        <option value="rs" data="rs;381">Сербия</option>

                        <option value="sk" data="sk;421">Словакия</option>

                        <option value="si" data="si;386">Словения</option>

                        <option value="us" data="us;1">США</option>

                        <option value="tj" data="tj;992">Таджикистан</option>

                        <option value="th" data="th;66">Таиланд</option>

                        <option value="tn" data="tn;216">Тунис</option>

                        <option value="tm" data="tm;993">Туркмения</option>

                        <option value="tr" data="tr;90">Турция</option>

                        <option value="uz" data="uz;998">Узбекистан</option>

                        <option value="fi" data="fi;358">Финляндия</option>

                        <option value="fr" data="fr;33">Франция</option>

                        <option value="hr" data="hr;385">Хорватия</option>

                        <option value="me" data="me;382">Черногория</option>

                        <option value="cz" data="cz;420">Чехия</option>

                        <option value="ch" data="ch;41">Швейцария</option>

                        <option value="se" data="se;46">Швеция</option>

                        <option value="ec" data="ec;593">Эквадор</option>

                        <option value="ee" data="ee;372">Эстония</option>

                        <option value="ss" data="ss;211">Южный Судан</option>

                        <option value="jm" data="jm;1876">Ямайка</option>

                        <option value="jp" data="jp;81">Япония</option>

                    </select>
                    <input class="js-number | g-input g-input--one | b-reg-form_number b-number_input" id="phone-num"
                           type="text" value="" name="tx_dbusers_pi1[phonenumber]">
                </div>
            </div>
            <div class="l-row with-suggestion">
                <label class="g-label">Ваш e-mail</label>
                <input type="text" id="reg-email" class="g-input g-input--one b-reg-form_input " value=""
                       name="tx_dbusers_pi1[email]" placeholder="На этот адрес мы отправим пароль пароль"/>
            </div>

            <label class="g-checkbox g-checkbox--one b-reg-form_checkbox  fake-checkbox-label" for="check-01">
                <input id="check-01" class="g-checkbox_input hidden-input" type="checkbox" name="tx_dbusers_pi1[tos]"
                       value="on" checked="checked">
                <span class="g-checkbox_skin"></span>
                <span class="g-checkbox_text">
        Я принимаю условия пользовательского <a href="https://astro7.ru/info/public-agreement/" id="agreement_link" target="_blank">соглашения</a>
      </span>
            </label>

            <a class="g-btn g-btn--m g-btn--one g-btn--rubber js-ga" href="javascript:void();"
               onclick="RegistrationFormSubmit(); return false;" data-event="gtm.generalEvent"
               data-event-category="user" data-event-action="sign_up" data-event-label="first_step" data-event-value="">Зарегистрироваться</a>
            <div class="b-reg-form_safe">
                Astro7.ru заботится о безопасности. Наши серверы надёжно защищены.
                Данные вашей регистрации являются строго конфиденциальными,
                не передаются третьим лицам и не публикуются.
            </div>
        </form>
    </div>
</div>
