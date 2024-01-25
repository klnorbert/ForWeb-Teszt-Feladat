<?php

use common\models\query\Matricak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matricák';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matricak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Matrica Feltöltés', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'matrica_id',
            [
                'label' => 'Autó',
                'attribute' => 'auto_id',
                'value' => function ($model) {
                    $auto = \common\models\query\Autok::findOne($model->auto_id);

                    return $auto ? $auto->rendszam . " - " . $auto->gyarto : null;
                },
            ],
            'lejarat_idopont',
            'matrica_tipus',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {delete}',
                'urlCreator' => function ($action, Matricak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'matrica_id' => $model->matrica_id]);
                 }
            ],
        ],
    ]); ?>

</div>