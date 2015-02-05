<?php
require_once 'classes/DB.php';

// echo '<pre>', print_r(DB::getInstance()->query('SELECT * FROM users')->results()), '</pre>';

$users = DB::getInstance()->query('SELECT * FROM users');
if($users->count()){
	// echo 'Users exists';
	foreach($users->results() as $user){
		echo $user->name, '<br>';
	}
}
?>