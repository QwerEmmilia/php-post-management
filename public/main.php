<?php
include 'config.php';

// Налаштування пагінації
$itemsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $itemsPerPage;

// Запит до бази даних для отримання кількості постів
$countQuery = "SELECT COUNT(*) as total FROM posts";
$countResult = $conn->query($countQuery);
$totalItems = $countResult->fetch_assoc()['total'];

// Запит до бази даних для отримання списку постів з пагінацією
$query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($query);

// Виведення списку постів
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post-container'>";
        echo "<h2 class='post-title'>" . $row['id'] . " - " . $row['title'] . "</h2>";
        echo "<p class='post-content'>" . $row['content'] . "</p>";
        echo "<p class='post-time'>" . $row['created_at'] . "</p>";
        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "<p class='no-posts'>Немає завантажених постів.</p>";
}

// Виведення посилань на пагінацію
$totalPages = ceil($totalItems / $itemsPerPage);

// Закриття з'єднання з базою даних
$conn->close();

