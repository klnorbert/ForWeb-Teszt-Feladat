<?php

use common\models\MatricaModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var common\models\Matricak $model */
/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="matricak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $autok = (new \yii\db\Query())
        ->select(['auto_id', 'gyarto', 'tipus', 'rendszam'])
        ->from('autok')
        ->all();

    // Cseréld le az auto_id-t a rendszámra és tipusra
    $autokMapped = \yii\helpers\ArrayHelper::map($autok, 'auto_id', function ($autok) {
        return $autok['rendszam'] . ' - ' . $autok['tipus'];
    });

    // Dropdown lista létrehozása
    echo $form->field($model, 'auto_id')->dropDownList(
        $autokMapped,
        ['prompt' => 'Válassz autót...']
    );
    ?>

    <?= $form->field($model, 'lejarat_idopont')->textInput() ?>

    <?= $form->field($model, 'matrica_tipus')->dropDownList(
        MatricaModel::tipusok(),
        ['prompt' => 'Válasszon matrica típust']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
