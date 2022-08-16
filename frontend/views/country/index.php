<?php 

use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

?>

<h1>countries</h1>

<ul>
    <?php foreach($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->code}  ({$country->name})") ?> :
            <?= $country->population ?>
        </li>
    <?php endforeach ?>
</ul>

<?php echo LinkPager::widget(['pagination'=>$pagination]) ?>