<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */

$this->title = $model->empleado_id;
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
                <li class="active">Revisar Empleado</li>
            </ul><!-- /.breadcrumb -->

            <!-- /section:basics/content.searchbox -->
        </div>

        <div class="page-content">
            <!-- /section:settings.box -->
            <div class="page-header">
                <h1>
                    Empleado
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Revisar Empleado
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="empleado-view">

                <p>
                    <?= Html::a('Editar', ['update', 'id' => $model->empleado_id], ['class' => 'btn btn-primary']) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'empleado_id',
                        'nombre',
                        'apellido',
                        'rut',
                        'telefono',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>