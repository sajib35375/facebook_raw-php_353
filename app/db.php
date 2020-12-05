<?php


    session_start();
    /**
     * Database connection
     */

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'facebook';

    $connection = new mysqli($host, $user, $pass, $db);

