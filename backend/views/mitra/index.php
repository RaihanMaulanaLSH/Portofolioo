<?php

use backend\models\Mitra;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\MitraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mitras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitra-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mitra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProvider->models as $index => $model): ?>
            <tr>
                <td><?= $model->id ?></td>
                <td>
                    <?php
                        $basePath = 'skydash'; // Awalan yang ingin Anda tambahkan
                        $imageUrl = Yii::getAlias('@web/' . $basePath . $model->gambar);
                        echo Html::img($imageUrl, ['width' => '800']);
                    ?>
                </td>
                <td>
                    <?php
                        echo Html::a('View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']);
                        echo ' ';
                        echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
                        echo ' ';
                        echo Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>








</div>



</div>
