<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tempempleado */

$this->title = 'Create Tempempleado';
$this->params['breadcrumbs'][] = ['label' => 'Tempempleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempempleado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
