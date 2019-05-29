<?php

namespace app\controllers;

use app\models\Books;
use yii\web\Controller;

class BooksController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        $query = Books::find();

        $books = $query->all();

        return $this->render('index', [
            'books' => $books,
        ]);
    }

    public function actionAddview()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        return $this->render('add');
    }

    public function actionAddbook()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        $request = \Yii::$app->request;
        $name = $request->post('name');
        $author = $request->post('author');
        $price = $request->post('price');
        $imgUrl = $request->post('imgUrl');
        $description = $request->post('description');

        $book = new Books;
        $book->name = $name;
        $book->author = $author;
        $book->price = $price;
        $book->imgUrl = $imgUrl;
        $book->description = $description;
        $book->insert();

        $query = Books::find();

        $books = $query->all();
        return $this->render('index', [
            'books' => $books,
        ]);
    }

    public function actionDelbook()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        $request = \Yii::$app->request;
        $bookId = $request->get('bookId');

        Books::deleteAll(" id = " . $bookId);
        $query = Books::find();

        $books = $query->all();
        return $this->render('index', [
            'books' => $books,
        ]);
    }

    public function actionEditview()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        $request = \Yii::$app->request;
        $bookId = $request->get('bookId');

        $book = Books::findOne($bookId);

        return $this->render('edit', [
            'book' => $book,
        ]);
    }

    public function actionEditbook()
    {
        if (\Yii::$app->user->isGuest) {
            return $this -> redirect(array('site/login'));
        }
        $request = \Yii::$app->request;
        $id = $request->get('id');
        $name = $request->post('name');
        $author = $request->post('author');
        $price = $request->post('price');
        $imgUrl = $request->post('imgUrl');
        $description = $request->post('description');

        $book = Books::findOne($id);
        $book->name = $name;
        $book->author = $author;
        $book->price = $price;
        $book->imgUrl = $imgUrl;
        $book->description = $description;
        $book->save();

        $query = Books::find();

        $books = $query->all();
        return $this->render('index', [
            'books' => $books,
        ]);
    }
}
