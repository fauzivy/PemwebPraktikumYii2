<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
?>
<div class="mahasiswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama_mhs',
            'alamat_mhs',
            'kode_prodi',
        ],
    ]) ?>

</div>
