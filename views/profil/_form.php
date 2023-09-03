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

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'enter a name']) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true, 'placeholder' => 'enter e-mail']) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true, 'placeholder' => 'enter phone number']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'enter address']) ?>
    <div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Back', 'javascript:history.go(-1);', ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>