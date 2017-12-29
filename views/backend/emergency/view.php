<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\emergency\models\Emergency */

$this->title = $model->emergency;
$this->params['breadcrumbs'][] = ['label' => 'Emergencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergency-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'TCKNO' => $model->TCKNO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'TCKNO' => $model->TCKNO], [
            'class' => 'btn btn-danger',
            'Sunucu' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TCKNO',
        ],
    ]) ?>

</div>
