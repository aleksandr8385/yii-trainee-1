<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
// новый коммент
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>Clone<h2>
    <p>This is the About page. You may modify the following file to customize its content:</p>
    
    <code><?= __FILE__ ?></code>
</div>
