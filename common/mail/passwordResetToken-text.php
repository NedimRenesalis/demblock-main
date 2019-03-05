<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManagerFrontend->createAbsoluteUrl(['site/promijeni-lozinku', 'token' => $user->password_reset_token]);
?>


<?= $resetLink ?>
