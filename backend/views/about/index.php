<?php

use backend\models\About;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\AboutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create About', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Deskripsi</th>
            <th>Quotes</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProvider->models as $index => $model): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $model->id ?></td>
                <td><?= strlen($model->deskripsi) > 20 ? substr($model->deskripsi, 0, 20) . '...' : $model->deskripsi ?></td>
                <td><?= $model->quotes ?></td>
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
