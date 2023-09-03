<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil $model */

// $this->title = 'Update Profil: ' . $model->name;
// $this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = 'Update';   
?>
<h2>Update</h2>
<div class="profil-update" style="margin-top: 30px;">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>