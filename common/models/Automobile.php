<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "automobile".
 *
 * @property int $id
 * @property string $mark
 * @property string $model
 * @property string $number
 * @property string $color
 * @property int $parking
 * @property string $comment
 */
class Automobile extends \yii\db\ActiveRecord
{
    const STATUS_PAID = 1;
    const STATUS_UNPAID = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'automobile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parking'], 'integer'],
            [['comment'], 'string'],
            [['mark', 'model', 'number', 'color'], 'string', 'max' => 255],
        ];
    }

    public static function getStatusText()
    {
        return [
            self::STATUS_PAID => 'Оплачено',
            self::STATUS_UNPAID => 'Неоплачено'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mark' => 'Марка',
            'model' => 'Модель',
            'number' => 'Номер',
            'color' => 'Цвет',
            'parking' => 'Статус парковки',
            'comment' => 'Комментарий',
        ];
    }
}
