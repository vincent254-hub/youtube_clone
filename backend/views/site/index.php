<?php

/* @var $this yii\web\View */
/* @var $latestVideo \common\models\Video */
/* @var $numberOfView integer */
/* @var $numberOfSubscribers integer */
/* @var $subscribers \common\models\Subscriber [] */

$this->title = 'studio.youtube.test';
?>
<div class="site-index d-flex">
    <div class="card m-2" style="width:14rem;">
        <?php if($latestVideo): ?>
        <div class="embed-responsive embed-responsive-16by9 mb-3">
            <video class="embed-responsive-item"
                   poster ="<?php echo $latestVideo->getThumbnailLink()?>"
                   src="<?php echo $latestVideo->getVideoLink()?>"></video>
        </div>
        <div class="card-body">
            <h6><?php echo $latestVideo->title ?></h6>
            <p>
                Likes: <?php echo $latestVideo->getLikes()->count() ?>
                Views: <?php echo $latestVideo->getViews()->count() ?>
            </p>
            <a href="<?php echo \yii\helpers\Url::to(['/video/update', 'id' => $latestVideo->video_id]) ?>" class="btn btn-primary">Edit</a>
        </div>
        <?php else: ?>
        <div class="card-body">
           Hello, You don't have any uploaded videos yet.
        </div>
        <?php endif; ?>
    </div>
    <div class="card m-2" style="width:14rem;">

        <div class="card-body">
            <h6>Total Views</h6>
            <p class="card-text " style="font-size:48px;">
                <?php echo $numberOfView ?>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width:14rem;">

        <div class="card-body">
            <h6>Total Subscribers</h6>
            <p class="card-text " style="font-size:48px;">
                <?php echo $numberOfSubscribers ?>
            </p>
        </div>
    </div>

    <div class="card m-2" style="width:14rem;">

        <div class="card-body">
            <h6>Latest Subscribers</h6>
                <?php foreach($subscribers as $subscriber): ?>
                    <div>
                        <?php echo $subscriber->user->username ?>
                    </div>
                 <?php endforeach; ?>

        </div>
    </div>

</div>
