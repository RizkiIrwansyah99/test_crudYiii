<?php

use app\models\Profil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

function renderName($model)
{
    return Html::encode($model->name);
}

/** @var yii\web\View $this */
/** @var app\models\ProfilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    <?php if ($model->hasErrors()) : ?>
        <div class="alert alert-danger">
            <?php foreach ($model->getErrors() as $attributeErrors) : ?>
                <?php foreach ($attributeErrors as $error) : ?>
                    <?= $error ?><br>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'header' => 'Nama',
                'attribute' => 'name',
                'contentOptions' => ['align' => 'center'],
                'headerOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'header' => "Email Address",
                'attribute' => 'email_address',
                'contentOptions' => ['align' => 'center'],
                'headerOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'header' => 'Phone Number',
                'attribute' => 'phone_number',
                'contentOptions' => ['align' => 'center'],
                'headerOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'header' => 'Address',
                'attribute' => 'address',
                'contentOptions' => ['align' => 'center'],
                'headerOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'class' => ActionColumn::className(),
                'header' => 'Action',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],

                'urlCreator' => function ($action, Profil $model, $key, $index, $column) {

                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>