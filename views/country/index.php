<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
    <h1>Countries</h1>
    <ul>
        <?php
        foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name}") ?>:
                <?= $country->population ?>
            </li>
        <?php
        endforeach; ?>
    </ul>

<?php
try {
    LinkPager::widget(['pagination' => $pagination]);
} catch (Exception $e) {
    echo $e;
} ?>