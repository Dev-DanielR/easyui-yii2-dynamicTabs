<?php

namespace app\components;

use Yii;
use yii\base\BootstrapInterface;

class ThemeSelector implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $theme = Yii::$app->request->queryParams['theme'] ?? Yii::$app->session->get('user.theme') ?? 'default';
        Yii::$app->session->set('user.theme', $theme);
    }
}