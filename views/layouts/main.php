<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/Комфорт.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        body, h1, h2, h3, h4, h5, h6, input, textarea, button {
            font-family: 'Candara', sans-serif!important;
            background-color: #FFFFFF;

        }
        .navbar { color: }
    </style>

</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/Комфорт.png', ['alt' => 'Логотип', 'style' => 'height:30px;']) . ' ' . Yii::$app->name,

        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-primary fixed-top'],

    ]);
    $menuItems = [];

    if (Yii::$app->user->isGuest) {

    } else {
        $menuItems[] = ['label' => 'Фабрика "Комфорт"', 'url' => ['/site/index']];
        $menuItems[] = ['label' => 'Продукция', 'url' => ['/product/index']];
        $menuItems[] = ['label' => 'Цехи', 'url' => ['/workshop/index']];
        $menuItems[] = ['label' => 'Продукция мастерской', 'url' => ['/product-workshop/index']];
        $menuItems[] = ['label' => 'Тип продукции', 'url' => ['/product-type/index']];
        $menuItems[] = ['label' => 'Тип материалов', 'url' => ['/material-type/index']];
        $menuItems[] = ['label' => 'Типы цехов', 'url' => ['/workshop-type/index']];
        $menuItems[] = '<li class="nav-item">'

            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-primary">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start" style="color: #FFFFFF">&copy; Developed by xolensens <?= date('Y') ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
