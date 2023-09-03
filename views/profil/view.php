<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Profil $model */

$this->title = $model->name;
// $this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profil-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h2>Detail</h2>
    <p>
        <!-- <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email_address:email',
            'phone_number',
            'address',
        ],
    ]) ?>
    <?= Html::a('Back', 'javascript:history.go(-1);', ['class' => 'btn btn-secondary']) ?>

</div>