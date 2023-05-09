<?php
// Параметри підключення до бази даних
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'posts';

// Підключення до бази даних
$conn = new mysqli($host, $username, $password, $database);

// Перевірка наявності помилок підключення
if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}