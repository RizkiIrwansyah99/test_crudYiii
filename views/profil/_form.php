<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use web\css\site;

/** @var yii\web\View $this */
/** @var app\models\Profil $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerCssFile(Yii::getAlias('@web/css/style.css'));
?>

<div class="profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>