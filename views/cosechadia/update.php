<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cosechadia */

$this->title = 'Update Cosechadia: ' . ' ' . $model->cosechadia_id;
$this->params['breadcrumbs'][] = ['label' => 'Cosechadias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cosechadia_id, 'url' => ['view', 'id' => $model->cosechadia_id]];
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
                    Cosecha Diaria
                </li>
                <li class="active">Editar Cosecha Diaria</li>
            </ul><!-- /.breadcrumb -->

            <!-- /section:basics/content.searchbox -->
        </div>

        <div class="page-content">
            <!-- /section:settings.box -->
            <div class="page-header">
                <h1>
                    Cosecha Diaria
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Editar Cosecha Diaria
                    </small>
                </h1>
            </div><!-- /.page-header -->
			<div class="cosechadia-update">

			    <?= $this->render('_form', [
			        'model' => $model,
                    'data' => $data,
			    ]) ?>

			</div>
		</div>
	</div>
</div>
