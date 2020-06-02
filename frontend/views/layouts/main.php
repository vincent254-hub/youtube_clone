<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;




$this->beginContent('@frontend/views/layouts/base.php');
?>
<body>
<?php $this->beginBody() ?>

    <main class="d-flex" style="flex:1;">
        <?php echo $this ->render('_sidebar') ?>

        <div class="content-wrapper p-3">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>

    </main>


<?php $this->endContent() ?>

