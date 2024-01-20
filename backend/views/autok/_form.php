<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\query\Autok $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="autok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'auto_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gyarto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rendszam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gyartasi_ev')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
