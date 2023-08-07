<?php

function connect()
{
    return new PDO("mysql:host=localhost;dbname=udemyphp", 'root', 'etec', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}

function create($table, $fields)
{
    if (!is_array($fields)) {
        $fields = (array) $fields;
    }

    $sql = "INSERT INTO {$table} ";
    $sql .= "(" . implode(",", $fields) . ")";
    $sql .= "VALUES (:" . implode(", :", $fields) . ")";

    $pdo = connect();
    $create = $pdo->prepare($sql);
    return $create->execute($fields);
}

function find($table, $field, $value)
{
    $sql = "SELECT * FROM {$table} WHERE {$field} = :{$field}";
    $pdo = connect();
    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();

    return $find->fetch();
}

function findAll($table)
{
    $sql = "SELECT * FROM {$table}";
    $pdo = connect();
    $find = $pdo->prepare($sql);
    $find->execute();

    return $find->fetchAll();
}
