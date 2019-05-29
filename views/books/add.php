<?php

/* @var $this yii\web\View */
$this->title = '图书管理';
?>
<div class="site-index">

    <div class="body-content">
        <div class="page-header">
            <h1>添加图书</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <form action="/index.php?r=books/addbook" method="post">
              <div class="form-group">
                <label for="name">名称</label>
                <input type="text" required class="form-control" name="name" id="name" placeholder="请输入名称">
              </div>
              <div class="form-group">
                <label for="author">作者</label>
                <input type="text" required class="form-control" name="author" id="author" placeholder="请输入作者">
              </div>
              <div class="form-group">
                <label for="price">价格</label>
                <input type="text" required class="form-control" name="price" id="price" placeholder="请输入价格">
              </div>
              <div class="form-group">
                <label for="imgUrl">封面</label>
                <input type="text" class="form-control" name="imgUrl" id="imgUrl" placeholder="请输入作者">
              </div>
              <div class="form-group">
                <label for="description">描述</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="请输入描述">
              </div>
              <a href="index.php?r=books" class="btn btn-default">返回</a>
              <button type="submit" class="btn btn-primary">提交</button>
            </form>
          </div>
        </div>
    </div>

</div>
</div>
