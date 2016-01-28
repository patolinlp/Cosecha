<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Temporada */

$this->title = 'Update Temporada: ' . ' ' . $model->temporada_id;
$this->params['breadcrumbs'][] = ['label' => 'Temporadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->temporada_id, 'url' => ['view', 'id' => $model->temporada_id]];
$this->params['breadcrumbs'][] = 'Update';
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
                    Temporada
                </li>
                <li class="active">Editar Temporada</li>
            </ul><!-- /.breadcrumb -->

            <!-- /section:basics/content.searchbox -->
        </div>

        <div class="page-content">
            <!-- /section:settings.box -->
            <div class="page-header">
                <h1>
                    Temporada
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Editar Temporada
                    </small>
                </h1>
            </div><!-- /.page-header -->

			<div class="temporada-update">

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>

			</div>
		</div>
	</div>
</div>