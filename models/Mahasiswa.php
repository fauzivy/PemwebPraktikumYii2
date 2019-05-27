<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim N I M
 * @property string $nama_mhs Nama Mahasiswa
 * @property string $alamat_mhs Alamat Mahasiswa
 * @property string $kode_prodi Program Studi
 *
 * @property Prodi $kodeProdi
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_mhs', 'alamat_mhs', 'kode_prodi'], 'required'],
            [['nim'], 'string', 'max' => 10],
            [['nama_mhs'], 'string', 'max' => 100],
            [['alamat_mhs'], 'string', 'max' => 200],
            [['kode_prodi'], 'string', 'max' => 3],
            [['nim'], 'unique'],
            [['kode_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['kode_prodi' => 'kode_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'N I M',
            'nama_mhs' => 'Nama Mahasiswa',
            'alamat_mhs' => 'Alamat Mahasiswa',
            'kode_prodi' => 'Program Studi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProdi()
    {
        return $this->hasOne(Prodi::className(), ['kode_prodi' => 'kode_prodi']);
    }
}
