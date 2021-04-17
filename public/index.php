<?php

$pdo = new PDO("pgsql:host=pgsql;port=5432;dbname=db;user=root;password=secret");

var_dump($pdo);