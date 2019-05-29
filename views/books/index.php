<?php

/* @var $this yii\web\View */

$this->title = '图书管理';
?>
<div class="site-index">

    <div class="body-content">
        <div class="page-header">
            <h1>图书列表 <a class="btn btn-primary" href="index.php?r=books/addview" style="float:right">添加</a></h1>

        </div>
        <div class="row">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>名称</th>
                        <th>作者</th>
                        <th>价格</th>
                        <th>封面</th>
                        <th>描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?=$book->id?></td>
                            <td><?=$book->name?></td>
                            <td><?=$book->author?></td>
                            <td><?=$book->price?>¥</td>
                            <td><p style="max-width:200px;overflow:auto;"><?=$book->imgUrl?></p></td>
                            <td><?=$book->description?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="index.php?r=books/editview&bookId=<?=$book->id?>">编辑</a>
                                <a class="btn btn-danger btn-xs" href="index.php?r=books/delbook&bookId=<?=$book->id?>">删除</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
        </table>
    </div>

</div>
</div>