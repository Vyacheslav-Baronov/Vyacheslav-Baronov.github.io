<?php
namespace app\controllers;
use app\models\For_list;

class PostController extends AppController
{
    public function actionIndex(){
        $posts=For_list::find()->select('id, title, intro_text')->all();
        return $this->render('index', compact('posts'));
    }
    public function actionView(){
        $id = \Yii::$app->request->get('id');
        $post = For_list::findOne($id);
        if(empty($post)) throw new \yii\web\HttpException(404, 'Нет такой страницы...');
        return $this-> render('view', compact('post'));
    }
}