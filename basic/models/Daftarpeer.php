<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftarpeer".
 *
 * @property int $TugasKe
 * @property string $NamaMatkul
 * @property string $Tugas
 * @property string $Deadline
 */
class Daftarpeer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftarpeer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaMatkul', 'Tugas', 'Deadline'], 'required'],
            [['NamaMatkul', 'Tugas', 'Deadline'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TugasKe' => 'Tugas Ke',
            'NamaMatkul' => 'Nama Matkul',
            'Tugas' => 'Tugas',
            'Deadline' => 'Deadline',
        ];
    }
}
