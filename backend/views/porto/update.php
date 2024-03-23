<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Porto $model */

$this->title = 'Update Porto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Portos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="porto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
