<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileType = $_FILES['post_file']['type'];

    // Перевірка типу файлу (дозволені формати: JSON і XML)
    if ($fileType === 'application/json' || $fileType === 'text/xml') {
        $tempFile = $_FILES['post_file']['tmp_name'];
        $fileContent = file_get_contents($tempFile);

        // Збереження завантаженого посту в базі даних
        $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $content);

        if ($fileType === 'application/json') {
            // Розбір JSON-файлу
            $post = json_decode($fileContent, true);
            $title = $post['title'];
            $content = $post['content'];
        } else {
            // Розбір XML-файлу
            $xml = simplexml_load_string($fileContent);
            $title = $xml->title;
            $content = $xml->content;
        }

        if ($stmt->execute()) {
            echo "Пост успішно завантажено в базу даних.<br>";
            echo "Вас автоматично поверне назад через 3 секунди.";
            header("refresh:3;url=page/add_post_page.php");
            exit;
        } else {
            echo "Помилка під час завантаження посту: " . $stmt->error;
            echo "Вас автоматично поверне назад через 3 секунди.";
            header("refresh:3;url=page/download_page.php");
        }

        $stmt->close();
    } else {
        echo "Дозволені формати файлів: JSON і XML.";
        echo "Вас автоматично поверне назад через 3 секунди.";
        header("refresh:3;url=page/download_page.php");
    }
}
