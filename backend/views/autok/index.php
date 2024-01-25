<?php

use common\models\query\Autok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Autók';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Autó Feltöltés', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'auto_id',
            'gyarto',
            'tipus',
            'rendszam',
            'gyartasi_ev',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Autok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'auto_id' => $model->auto_id]);
                 }
            ],
        ],
    ]); ?>


</div>
