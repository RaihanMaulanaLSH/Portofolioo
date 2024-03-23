<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Testi $model */

$this->title = 'Create Testi';
$this->params['breadcrumbs'][] = ['label' => 'Testis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
