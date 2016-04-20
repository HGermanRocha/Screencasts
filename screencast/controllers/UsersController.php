<?php

namespace app\controllers;

use yii\web\controller;
use app\models\Users;

class UsersController extends controller
{
	public function actionIndex()
	{
		$users = Users::find()->all();
		print_r($users);
	}
}
?>