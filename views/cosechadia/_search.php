<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CosechadiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cosechadia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cosechadia_id') ?>

    <?= $form->field($model, 'empleado_id') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'pagado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
