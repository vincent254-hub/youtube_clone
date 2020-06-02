<?php

?>
<!---->
<!--<div class="container ml-2 mt-2" style="width:20rem;">-->
<!--    --><?php //echo \yii\bootstrap4\Nav::widget([
//
//        'options' => [
//            'class' => 'd-flex flex-column nav-pills'
//        ],
//        'items' => [
//            [
//                'label' => 'Dashboard',
//                'url' => ['/site/index']
//            ],
//            [
//                'label' => 'Videos',
//                'url' => ['/video/index']
//            ]
//        ]
//    ]) ?>
<!--</div>-->

<aside class="shadow" style="min-width: 200px; ">
    <?php echo \yii\bootstrap4\Nav::widget([

        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/video/index']
            ]
        ]
    ]) ?>
</aside>
