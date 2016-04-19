<?php

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
	
	public $name;
	public $email;

	public function rules()
	{
		return [
		    [['email', 'name'], 'required'],
		    ['email', 'email'],
		    ];

	}
}
?>