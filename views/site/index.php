<?php

/* @var $this yii\web\View */

$this->title = '首页';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>HOME</h1>
        <p class="lead">这就是一个主页...</p>
    </div>

    <div class="body-content">

        <div class="row">
        <?php foreach ($books as $book): ?>
            
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?= $book->imgUrl ?>" alt="...">
                </a>
                <h3><?=$book->name ?></h3>
                <h5>作者：<?=$book->author ?></h5>
                <p>描述：<br/> <?=$book->description ?></p>
                <p>价格：<b><?= $book->price ?> ¥</b></p>
            </div>
        <?php endforeach; ?>
        </div>

    </div>
</div>
