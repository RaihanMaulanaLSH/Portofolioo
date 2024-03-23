<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Testi $model */

$this->title = 'Update Testi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Testis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
