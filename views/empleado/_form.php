<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
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
	    		<?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
	    	</div>
	    </div>

	    <div class="form-group">
	        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

	        <div class="col-xs-10 col-sm-5">
			    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>
			</div>
	    </div>

	    <div class="form-group">
	        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

	        <div class="col-xs-10 col-sm-5">
	    		<?= $form->field($model, 'rut')->textInput() ?>
			</div>
	    </div>		

	    <div class="form-group">
	        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

	        <div class="col-xs-10 col-sm-5">
	    		<?= $form->field($model, 'telefono')->textInput() ?>
	    	</div>
	    </div>

	    <div class="clearfix form-actions">
	        <div class="col-md-offset-3 col-md-9">
	        	<?= Html::submitButton($model->isNewRecord ? 'Crear Empleado' : 'Editar Empleado', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	        </div>
	    </div>

	    <?php ActiveForm::end(); ?>
	</div>
</div>
