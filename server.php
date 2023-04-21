<?php

if (file_exists('database.json')) { //comunicare con il database json / se il database esiste allora:
    $content = file_get_contents('database.json'); // salvare il contenuto del database sulla variabile $content tramite file_get_contents
    $todoList = json_decode($content); //decodifica il data da js a php
} else {
    $todoList = []; // se il database non esiste dichiarare un data vuoto. (todolist vuota)
}

if (isset($_POST['newtask'])) {
    $todoList[] = $_POST['newtask'];
}

$myNewContent = json_encode($todoList); //salvare il data della todolist in php sulla variabile $myNewContent
file_put_contents('database.json', $myNewContent); //salvare sul database  in json il contenuto della variabile $myNewContent (database aggiornato)

header('Content-Type: application/json');
echo json_encode($todoList);

?>