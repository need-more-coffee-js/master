<?php

use yii\helpers\Html;
/* @var $text \frontend\controllers\GenerateController */
echo '12';
?>
<?= Html::beginForm(['generate/index'], 'post', ['enctype' => 'multipart/form-data']) ?>
<h3>имя</h3>  <?= Html::input('text','text_input') ?>
<h3>город</h3>  <?= Html::input('text','city_input') ?>
<h3>дата рождения</h3>  <?= Html::input('date','date_input') ?>
<h3>номер телефона</h3>  <?= Html::input('tel','phone_input') ?>
<h3>аватар</h3>  <?= Html::input('file','file_input') ?>
<?= Html::input('submit','send') ?>
<?= Html::endForm() ?>

<?php
var_dump($text);
?>