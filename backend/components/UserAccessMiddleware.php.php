<?php

namespace backend\components;

use Yii;
use yii\base\Behavior;
use yii\web\Application;

class UserAccessMiddleware extends Behavior
{
    public function events()
    {
        return [
            Application::EVENT_BEFORE_REQUEST => 'checkUserAccess',
        ];
    }

    public function checkUserAccess($event)
    {
        // Gantilah dengan logika sesuai kebutuhan
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->id != 4) {
            Yii::$app->response->redirect(['/site/login']);
            Yii::$app->end();
        }
    }
}
