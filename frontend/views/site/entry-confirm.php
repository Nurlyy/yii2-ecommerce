<?php

use yii\helpers\Html;

?>


<p>You have entered the following information: </p>

<ul>
    <li><label><?php echo Html::encode($model->name) ?></label></li>
    <li><label><?php echo Html::encode($model->email)?> </label></li>
</ul>