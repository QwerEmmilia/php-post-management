<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Отримати обраний формат файлу
    $fileFormat = isset($_GET['file_format']) ? $_GET['file_format'] : 'json';

    if (isset($_GET['post_id'])) {
        $post_id = $_GET['post_id'];

        if (!empty($post_id)) {
            // Вигрузка конкретного поста за ідентифікатором
            $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
            $stmt->bind_param("i", $post_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $post = array(
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'created_at' => $row['created_at']
                );

                $json = json_encode($post, JSON_PRETTY_PRINT);

                $filename = 'post_' . $post_id . '_' . date('Y-m-d') . '.' . $fileFormat;
                file_put_contents($filename, $json);

                echo "Файл '$filename' успішно сформовано та збережено.<br>";
                echo "Вас автоматично поверне назад через 3 секунди.";
                header("refresh:3;url=page/download_page.php");
                exit;
            } else {
                echo "Пост з вказаним ідентифікатором не знайдено.";
            }

            $stmt->close();
        } elseif (isset($_GET['from_date']) && isset($_GET['to_date'])) {
            $fromDate = $_GET['from_date'];
            $toDate = $_GET['to_date'];

            if (!empty($fromDate) && !empty($toDate)) {
                // Вигрузка постів за датами
                $stmt = $conn->prepare("SELECT * FROM posts WHERE created_at BETWEEN ? AND ?");
                $stmt->bind_param("ss", $fromDate, $toDate);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $posts = array();

                    while ($row = $result->fetch_assoc()) {
                        $post = array(
                            'title' => $row['title'],
                            'content' => $row['content'],
                            'created_at' => $row['created_at']
                        );

                        $posts[] = $post;
                    }

                    $json = json_encode($posts, JSON_PRETTY_PRINT);

                    $filename = 'posts_' . $fromDate . '_to_' . $toDate . '.' . $fileFormat;
                    file_put_contents($filename, $json);

                    echo "Файл '$filename' успішно сформовано та збережено.<br>";
                    echo "Вас автоматично поверне назад через 3 секунди.";
                    header("refresh:3;url=page/download_page.php");
                    exit;
                } else {
                    echo "Постів за вказаними датами не знайдено.";
                }

                $stmt->close();
            }
        }
    }
}
