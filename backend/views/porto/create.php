<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Porto $model */

$this->title = 'Create Porto';
$this->params['breadcrumbs'][] = ['label' => 'Portos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
