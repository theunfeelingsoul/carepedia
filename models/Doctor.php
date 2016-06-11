<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property integer $id
 * @property string $biz_name
 * @property string $dr_name
 * @property string $spec
 * @property string $available
 * @property string $area
 * @property string $desc
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['biz_name', 'dr_name', 'spec', 'available', 'area'], 'required'],
            [['desc'], 'string'],
            [['biz_name', 'dr_name', 'spec', 'available', 'area'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'biz_name' => 'Biz Name',
            'dr_name' => 'Dr Name',
            'spec' => 'Spec',
            'available' => 'Date Available',
            'area' => 'Area',
            'desc' => 'Desc',
        ];
    }
}
