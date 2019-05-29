<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdiUser */

$this->title = 'Create Prodi User';
$this->params['breadcrumbs'][] = ['label' => 'Prodi Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
