<?php

namespace common\models\query;

use Yii;

/**
 * This is the model class for table "{{%autok}}".
 *
 * @property int $auto_id
 * @property string $gyarto
 * @property string $tipus
 * @property string $rendszam
 * @property int $gyartasi_ev
 * @property string $created_at
 *
 * @property Matricak $matricak
 */
class Autok extends \yii\db\ActiveRecord
{
    public $gyartasi_ev = 2020;
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
            [['gyarto', 'tipus', 'rendszam', 'gyartasi_ev'], 'required'],
            [['gyartasi_ev'], 'integer','min' => 1900, 'max' => date('Y')],
            [['created_at'], 'safe'],
            [['gyarto', 'tipus'], 'string', 'max' => 128],
            [['rendszam'], 'string', 'max' => 32],
            [['rendszam'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'auto_id' => 'Auto ID',
            'gyarto' => 'Gyartó',
            'tipus' => 'Kocsi Tipus',
            'rendszam' => 'Rendszám',
            'gyartasi_ev' => 'Gyártási Év',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Matricak]].
     *
     * @return \yii\db\ActiveQuery|MatricakQuery
     */
    public function getMatricak()
    {
        return $this->hasOne(Matricak::class, ['auto_id' => 'auto_id']);
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
