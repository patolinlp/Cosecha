<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Empleado */

$this->title = 'Create Empleado';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="main-content">
    <div class="main-content-inner">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    Home
                </li>

                <li>
                    Empleado
                </li>
                <li class="active">Crear Empleado</li>
            </ul><!-- /.breadcrumb -->

            <!-- /section:basics/content.searchbox -->
        </div>

        <div class="page-content">
            <!-- /section:settings.box -->
            <div class="page-header">
                <h1>
                    Empleados
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Crear Empleados
                    </small>
                </h1>
            </div><!-- /.page-header -->



			<div class="empleado-create">

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>

			</div>

		</div>
	</div>
</div>
