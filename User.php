<?php

require_once 'model.php';

class User extends model
{
	protected static $table = 'users';
}
var_dump (User::getTableName());