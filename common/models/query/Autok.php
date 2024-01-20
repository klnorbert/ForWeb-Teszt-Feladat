<?php

namespace common\models\query;

use Yii;

/**
 * This is the model class for table "{{%autok}}".
 *
 * @property string $auto_id
 * @property string $gyarto
 * @property string $tipus
 * @property string $rendszam
 * @property int $gyartasi_ev
 * @property string $created_at
 */
class Autok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%autok}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auto_id', 'gyarto', 'tipus', 'rendszam', 'gyartasi_ev'], 'required'],
            [['gyartasi_ev'], 'integer'],
            [['created_at'], 'safe'],
            [['auto_id', 'rendszam'], 'string', 'max' => 32],
            [['gyarto', 'tipus'], 'string', 'max' => 128],
            [['auto_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'auto_id' => 'Auto ID',
            'gyarto' => 'Gyarto',
            'tipus' => 'Tipus',
            'rendszam' => 'Rendszam',
            'gyartasi_ev' => 'Gyartasi Ev',
            'created_at' => 'Created At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AutokQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AutokQuery(get_called_class());
    }
}
