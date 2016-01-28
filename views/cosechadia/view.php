<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cosechadia */

$this->title = $model->cosechadia_id;
$this->params['breadcrumbs'][] = ['label' => 'Cosechadias', 'url' => ['index']];
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
                    Cosecha Diaria
                </li>
                <li class="active">Revisar Cosecha Diaria</li>
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
                        Revisar Cosecha Diaria
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="cosechadia-view">

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->cosechadia_id], ['class' => 'btn btn-primary']) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'cosechadia_id',
                        'empleado_id',
                        'fecha',
                        'cantidad',
                        'total',
                        'pagado',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>
