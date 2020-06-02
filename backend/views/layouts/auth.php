<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;



AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>
<?php $this->beginBody() ?>

    <main class="d-flex" style="flex:1;">

        <div class="content-wrapper p-3">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>

    </main>

<?php $this->endContent() ?>

