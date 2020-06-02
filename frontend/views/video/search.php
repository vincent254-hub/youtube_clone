<?php
/**
 * User: vincent254-hub
 * Date: 5/29/2020
 * Time: 8:56 PM
 */
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<h1>Found videos</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>
