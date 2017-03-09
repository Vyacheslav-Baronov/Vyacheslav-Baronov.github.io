<?php
namespace app\models;
use yii\db\ActiveRecord;

class For_list extends ActiveRecord
{
    public static function tableName()
    {
        return 'list';
    }
}