<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="matricak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $autok = (new \yii\db\Query())
        ->select(['auto_id', 'gyarto', 'rendszam'])
        ->from('autok')
        ->all();

    $autokMapped = \yii\helpers\ArrayHelper::map($autok, 'auto_id', function ($autok) {
        return $autok['rendszam'] . ' - ' . $autok['gyarto'];
    });

    echo $form->field($model, 'auto_id')->dropDownList(
        $autokMapped,
        ['prompt' => 'Válassz autót...']
    );
    ?>

    <?= $form->field($model, 'lejarat_idopont')->input('datetime-local', ['value' => date('Y-m-d\TH:i:s')]) ?>


    <?= $form->field($model, 'matrica_tipus')->dropDownList(
        ['10 napos' => '10 napos', '1 hónapos' => '1 hónapos', '1 éves' => '1 éves'],
        ['prompt' => 'Válasszon matrica típust']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Mentés', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>