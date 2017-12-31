<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Emergency\models\emergency */

$this->title = 'Update Emergency: ' . $model->emergency;
$this->params['breadcrumbs'][] = ['label' => 'Emergencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sunucu, 'url' => ['view', 'TCKNO' => $model->TCKNO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emergency-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
