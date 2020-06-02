<?php

?>


<aside class="shadow" style="min-width: 200px; ">
    <?php echo \yii\bootstrap4\Nav::widget([

        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="fas fa-home"> Home',
                'url' => ['/video/index']
            ],
            [
                'label' => '<i class="fas fa-history"> History',
                'url' => ['/video/history']
            ]
        ]
    ]) ?>
</aside>
