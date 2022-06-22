<?php

///**
// * PHP: Вывести цифры по порядку
// */
$arrayNumber = [
    [0,1,2,3,4,5,6,8,7,9,10]
];

sort(...$arrayNumber);
var_dump($arrayNumber);

/**
 * 2) MySQL: Напистать запрос для выборки данных из таблицы, где id = 10
 */

$sqlRequest = "SELECT * FROM table WHERE id = 10";

/**
 * 3) PHP Вывести ключи и значения
 */
$arrayInfo = [
  'name' => 'Ivan',
  'surname' => 'Ivanov',
  'address' => 'Petrovsk',
  'telephone' => '8 (985) 222-33-44'
];

$arrayInfoKeys = array_keys($arrayInfo);
$arrayInfoValues = array_values($arrayInfo);

var_dump($arrayInfoKeys, $arrayInfoValues);

/**
 * 4) PHP: Вывести месяца года
 */

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];

$allMonths = array_merge_recursive(...$arrayMonth);
var_dump($allMonths);

/**
 * 5) PHP: Дана информация в json формате, надо вывести ее.
 */

//информация в json формате
try {
    $jsonInfo = json_encode([
        'years' => [
            1997,
            1998,
            1999,
            2000,
            2001,
            2002,
            2003,
            2004,
            2005,
            2006,
            2007,
            2008,
            2009,
            2010
        ]
    ], JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
//информация в форме Массива
try {
    $jsonInfoDecoded = json_decode($jsonInfo, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
var_dump($jsonInfoDecoded);

/**
 * 6) PHP MySQL: Дан код, нужено ответить на вопросы аргументировав свой ответ
 */

$hostname = 'localhost';
$username = 'root';
$password = '123';
$database = 'data';

$conn = mysqli_connect($hostname,$database, $username, $password);
$sql = "SELECT * FROM users";

$resultSet = mysqli_query($conn, $sql);

/*
 * 1) Будет ли выполнен запрос ?
     *  Ответ : Нет, запрос не будет выполнен, так как аргументы функции mysqli_connect задали в непровильном парядке, должно быть в следующем  паряде :
  mysqli_connect($hostname,$username,$password,$database);
 * 2) Что делает запрос ?
 *  Ответ : получает все данные всех пользователей из таблиции users;
 * 3) Написать запрос для удаления данных, где id пользователей равен одному из данных фифр = 1,2,3,4
 */

$conn = mysqli_connect($hostname,$username,$password,$database);
$sql = "SELECT * FROM users WHERE id IN (1,2,3,4) ";

$resultSet = mysqli_query($conn, $sql);
