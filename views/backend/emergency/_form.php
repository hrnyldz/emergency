<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Havadurumu;

/* @var $this yii\web\View */
/* @var $model kouosl\emergency\models\Emergency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emergency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TCKNO')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
