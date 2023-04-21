<?php

if (file_exists('database.json')) { //comunicare con il database json / se il database esiste allora:
    $content = file_get_contents('database.json'); // salvare il contenuto del database sulla variabile $content tramite file_get_contents
    $todoList = json_decode($content); //decodifica il data da js a php
} else {
    $todoList = []; // se il database non esiste dichiarare un data vuoto. (todolist vuota)
}

if (isset($_POST['newtask'])) {
    $todoList[] = [
        'name' => $_POST['newtask'],
        'status' => false
    ];
}

$myNewContent = json_encode($todoList);
file_put_contents('database.json', $myNewContent);

header('Content-Type: application/json');
echo json_encode($todoList);

?>