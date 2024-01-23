<?php
namespace common\models;

use yii\db\ActiveRecord;

class MatricaModel extends \yii\db\ActiveRecord
{

    const TIPUS_1 = '10 napos';
    const TIPUS_2 = '1 hónapos';
    const TIPUS_3 = '1 éves';

    public static function tipusok()
    {
        return [
            self::TIPUS_1 => '10 napos',
            self::TIPUS_2 => '1 hónapos',
            self::TIPUS_3 => '1 éves',
        ];
    }
    
}
