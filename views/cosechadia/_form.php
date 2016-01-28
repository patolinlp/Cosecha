<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Cosechadia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-xs-12">

        <?php $form = ActiveForm::begin([
            'options' => ['class' => 'form-horizontal'],
        ]); ?>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

            <div class="col-xs-10 col-sm-5">
                <?= $form->field($model, 'empleado_id')->dropdownList($data, array('prompt'=>'Seleccione una empleado')) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

            <div class="col-xs-10 col-sm-5">
                <?=  '<label class="control-label">Fecha</label>'; ?>
                <?=
                DatePicker::widget([
                    'model' => $model,
                    'name' => 'check_issue_date', 
                    'value' => date('Y-m-d'),
                    'options' => ['placeholder' => 'Presione para seleccionar una Fecha ...'],
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true
                    ]
                ]);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

            <div class="col-xs-10 col-sm-5">
                <?= $form->field($model, 'cantidad')->textInput() ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

            <div class="col-xs-10 col-sm-5">
                <?= $form->field($model, 'total')->textInput() ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

            <div class="col-xs-10 col-sm-5">
                <?= $form->field($model, 'pagado')->textInput() ?>
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <?= Html::submitButton($model->isNewRecord ? 'Crear Cosecha' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>