<?php
 
namespace frontend\controllers;
 
use yii\web\Controller;
use frontend\models\Tag;
use sjaakp\taggable\TagSuggestAction;
 
class TagController extends Controller  {
 
    public function actions()    {
        return [
            'suggest' => [
                'class' => TagSuggestAction::className(),
                'tagClass' => Tag::className(),
            ],
        ];
    }
}