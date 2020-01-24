<?php

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare("select * from todos");

    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    return $tasks;
}

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}