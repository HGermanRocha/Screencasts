<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
	public $email;
	public $name;
	
	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
}

$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if($model->validate()) {
	//Good!
}
else{
	//Failure!
	//Use $model->getErrors()
}