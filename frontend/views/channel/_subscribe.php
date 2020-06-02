<?php
/**
 * User: vincent254-hub
 * Date: 5/28/2020
 * Time: 9:58 AM
 */

use yii\helpers\Url;

/** @var $channel \common\models\User */
?>

<a class="btn <?php echo $channel->isSubscribed(Yii::$app->user->id)
    ? 'btn-secondary' : 'btn-danger' ?>"
   href="<?php echo Url::to(['channel/subscribe', 'username' => $channel->username]) ?>"
   data-method="post" data-pjax="1">

    <?php echo $channel->isSubscribed(Yii::$app->user->id)
        ? 'subscribed' : 'subscribe' ?>

    <i class="far fa-bell"></i>
</a> <?php echo $channel->getSubscribers()->count() ?>
