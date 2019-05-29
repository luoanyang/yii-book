# **YII 开发的简单一个图书管理系统** 

## **1.先执行mysql语句创建图书表**
```
  CREATE TABLE `db`.`books` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `price` VARCHAR(45) NULL,
    `author` VARCHAR(45) NULL,
    `imgUrl` VARCHAR(400) NOT NULL COMMENT '图书封面',
    `description` VARCHAR(300) NULL,
    PRIMARY KEY (`id`));
```

## **3.下载依赖**
在项目更目录的命令行输入：
> compose install

## **3.启动服务**
在项目更目录的命令行输入：
> php yii serve

## **4.打开浏览器**
1.打开地址： http://localhost:8080/index.php?r=site%2Flogin

2.账号：admin  密码：admin