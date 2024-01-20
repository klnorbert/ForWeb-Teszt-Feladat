<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[Autok]].
 *
 * @see Autok
 */
class AutokQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Autok[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Autok|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
