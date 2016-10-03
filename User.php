<?php

require_once 'Model.php';

/*************
* User Class *
**************/
class User extends Model
{
	protected static $table = 'users';
}

var_dump(User::getTableName());