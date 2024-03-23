<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\backend\controllers;
use dosamigos\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var backend\models\About $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="about-form">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


<?= $form->field($model, 'deskripsi')->textarea(['rows' => 10]) ?>
<?= $form->field($model, 'quotes')->textarea(['rows' => 4]) ?>
    <?= $form->field($model, 'gambar')->fileInput()->label('gambar') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

