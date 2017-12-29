<?php

namespace kouosl\emergency\models;

use Yii;

/**
 * This is the model class for table "emergency".
 *
 * @property integer $TCKNO
 * @property string $kan_grub
 * @property string $hastaligi
 * @property string $kullandigi_ilac
 * @property string $gecirdigi_hastalik
 * @property string $aldigi_tedaviler
 * @property string $doktor_ad_soya
 * @property string $kurum_adi
 * @property integer $telefon_num
 */
class Emergency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saglik_bilgileri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TCKNO'], 'required'],
            [['TCKNO'], 'integer','max' => 11],
            [['kan_grub'], 'string'],
            [['hastaligi'], 'string'],
            [['kullandigi_ilac'], 'string'],
            [['gecirdigi_hastalik'], 'string'],
            [['aldigi_tedaviler'], 'string'],
            [['doktor_ad_soya'], 'string'],
            [['kurum_adi'], 'string'],
            [['telefon_num'],'integer','max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TCKNO' => 'TCKNO',
            'kan_grub' => 'KAN_GRUB',
            'hastaligi' => 'HASTALIGI',
            'kullandigi_ilac' => 'KULLANDIGI_ILAC',
            'gecirdigi_hastalik' => 'GECIRDIGI_HASTALIK',
            'aldigi_tedaviler' => 'ALDIGI_TEDAVILER',
            'doktor_ad_soya' => 'DOKTOR_AD_SOYA',
            'kurum_adi' => 'KURUM_ADI',
            'telefon_num' => 'TELEFON_NUM',

        ];
    }
}
