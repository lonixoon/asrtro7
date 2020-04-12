<?php

/* @var $this yii\web\View */
/* @var $thisUser \app\models\Entity\User */

$this->title = 'Asrtro7';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations<?= $thisUser ? ' <b class="text-info">' . $thisUser->profile->first_name . ' ' . $thisUser->profile->last_name . '</b>' : null ?>!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
</div>
