<?php

namespace kouosl\emergency\models;

use Yii;

/**
 * This is the model class for table "emergency".
 *
 * @property integer $TCKNO
 * @property string $ad
 * @property string $soyad
 * @property string $dogum_yeri
 * @property string $dogum_tarihi
 * @property string $anne_adi
 * @property string $baba_adi
 * @property integer $aile_sira_no
 * @property integer $cilt_no
 * @property string $adres
 * @property integer $telefon
 * @property integer $yakin_tel_1
 * @property string $yakin_durum_1
 * @property integer $yakin_tel_2
 * @property string $yakin_durum_2
 */
class Emergency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kisisel_bilgiler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TCKNO'], 'required'],
            [['TCKNO'], 'integer','max' => 11],
            [['ad'], 'string'],
            [['soyad'], 'string'],
            [['dogum_yeri'], 'string'],
            [['dogum_tarihi'], 'string'],
            [['baba_adi'], 'string'],
            [['anne_adi'], 'string'],
            [['aile_sira_no'], 'integer'],
            [['cilt_no'], 'integer'],
            [['adres'], 'string'],		
            [['telefon'],'integer','max' => 11],
            [['yakin_tel_1'],'integer','max' => 11],
            [['yakin_durum_1'], 'string'],
            [['yakin_tel_2'],'integer','max' => 11],
            [['yakin_durum_2'], 'string'],				
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TCKNO' => 'TCKNO',
            'ad' => 'AD',
            'soyad' => 'SOYAD',
            'dogum_yeri' => 'DOGUM_YERI',
            'dogum_tarihi' => 'DOGUM_TARIHI',
            'baba_adi' => 'BABA_ADI',
            'anne_adi' => 'ANNE_ADI',
            'aile_sira_no' => 'AILE_SIRA_NO',
            'cilt_no' => 'CILT_NO',
			'adres' => 'ADRES',
            'telefon' => 'TELEFON',
            'yakin_tel_1' => 'YAKIN_TEL_1',
            'yakin_durum_1' => 'YAKIN_DURUM_1',
            'yakin_tel_2' => 'YAKIN_TEL_2',
            'yakin_durum_2' => 'YAKIN_DURUM_2',
			
        ];
    }
}
