<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="no-skin">
<?php $this->beginBody() ?>
    <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try { ace.settings.check('navbar', 'fixed') } catch (e) { }
            </script>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            Cosecha
                        </small>
                    </a>
            </div>
    </div>
    <div class="main-container" id="main-container">
            <script type="text/javascript">
                try { ace.settings.check('main-container', 'fixed') } catch (e) { }
            </script>

            <!-- #section:basics/sidebar -->
            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try { ace.settings.check('sidebar', 'fixed') } catch (e) { }
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <!-- /section:basics/sidebar.layout.shortcuts -->
                    </div>
                </div><!-- /.sidebar-shortcuts -->
                <ul class="nav nav-list">


                    <li class="">
                        <a href= "#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> Cosecha Diaria </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?= Url::to(['cosechadia/create']) ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Agregar Cosecha
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?= Url::to(['cosechadia/index']) ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Historial de Cosecha
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-truck"></i>
                            <span class="menu-text"> Temporada </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?= Url::to(['temporada/index']) ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Crear Temporadas
                                </a>

                                <b class="arrow"></b>
                            </li>
                        
                            <li class="">
                                <a href="<?= Url::to(['tempempleado/asociar']) ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Asociar Empleados
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?= Url::to(['empleado/index']) ?>">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text"> Empleado </span>
                        </a>
                        <b class="arrow"></b>
                    </li>

                </ul>
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
                <script type="text/javascript">
                    try { ace.settings.check('sidebar', 'collapsed') } catch (e) { }
                </script>
            </div>
            
            <?= $content ?>
            
            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Cosecha &copy; 2016 -</span>
                        </span>
                        <span class="bigger-120">
                            <span class="blue bolder"> P&amp;P Develop </span>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
