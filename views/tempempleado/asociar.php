<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use fedemotta\datatables\DataTables;
use yii\widgets\ActiveForm;
use app\models\TemporadaSearch;


/* @var $this yii\web\View */
/* @var $searchModel app\models\TemporadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Temporadas';
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
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Temporada</a>
                </li>
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
                        Asociar empleado a una temporada
                    </small>
                </h1>   
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form>
                        <?php $form = ActiveForm::begin([
                                'id' => 'Asociar-form',
                                'options' => ['class' => 'form-horizontal'],
                        ]) ?>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

                            <div class="col-xs-10 col-sm-5">
                                <?= $form->field($searchModel, 'temporada_id')->dropdownList($data, array('prompt' => 'Seleccione una temporada') ) 
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

                            <div class="col-xs-10 col-sm-5">
                                
                            </div>
                        </div>

                    <form>
                </div>
            </div>

    </div>
</div>