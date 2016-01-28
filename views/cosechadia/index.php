<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CosechadiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cosechadias';
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
                        Historial de Cosechas Agregadas
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="cosechadia-index">

                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Cosechadia', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <!--?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'cosechadia_id',
                        'empleado_id',
                        'fecha',
                        'cantidad',
                        'total',
                        // 'pagado',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?-->

                <?= DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'cosechadia_id',
                        'empleado_id',
                        'fecha',
                        'cantidad',
                        'total',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);?>

            </div>
        </div>
    </div>
</div>
