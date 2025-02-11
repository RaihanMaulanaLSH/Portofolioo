<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Skill $model */

$this->title = 'Update Skill: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skills', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skill-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
