<?php

namespace common\models\query;

use Yii;

/**
 * This is the model class for table "{{%matricak}}".
 *
 * @property int $matrica_id
 * @property int $auto_id
 * @property string $lejarat_idopont
 * @property string $matrica_tipus
 *
 * @property Autok $auto
 */
class Matricak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%matricak}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auto_id', 'matrica_tipus'], 'required'],
            [['auto_id'], 'integer'],
            [['lejarat_idopont'], 'safe'],
            [['matrica_tipus'], 'string', 'max' => 16],
            [['auto_id'], 'unique'],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autok::class, 'targetAttribute' => ['auto_id' => 'auto_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'matrica_id' => 'Matrica ID',
            'auto_id' => 'Auto ID',
            'lejarat_idopont' => 'Lejarat Idopont',
            'matrica_tipus' => 'Matrica Tipus',
        ];
    }

    /**
     * Gets query for [[Auto]].
     *
     * @return \yii\db\ActiveQuery|AutokQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Autok::class, ['auto_id' => 'auto_id']);
    }

    /**
     * {@inheritdoc}
     * @return MatricakQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MatricakQuery(get_called_class());
    }
}
