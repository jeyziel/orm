<?php


require __DIR__ . '/vendor/autoload.php';

use Gama\ORM\Model;
use App\Models\Users;
use Gama\ORM\Drivers\MysqlPdo;


$pdo = new \PDO("mysql:host=localhost;dbname=orm_php",'root', 'root');

$driver = new MysqlPdo($pdo);

$model = new Users;
$model->setDriver($driver);

//inserção de registro
$model->name = 'jeyziel Gamaaa';
$model->age = 19;
$model->email = 'jeyzielgato@gmail.com';
$model->save();

//busca os dados

// var_dump($model->findAll());
// var_dump($model->findFirst(1));

// //update

// $model->id = 1;
// $model->age = 20;
// $model->save();

//delete
// $model->id = 2;
// $model->delete();
