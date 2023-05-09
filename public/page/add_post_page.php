<!DOCTYPE html>
<html>
<head>
    <title>Завантаження посту</title>
    <link rel="stylesheet" href="../../style/css/style.css">
</head>
<body>
<nav class="navigation-menu navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="main_page.php">Головна сторінка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add_post_page.php">Додати пост</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="download_page.php">Вигрузити пост</a>
        </li>
    </ul>
</nav>

<h1>Завантаження посту</h1>

<form action="../add_post.php" method="POST" enctype="multipart/form-data" class="container">
    <div class="mt-3 mb-2"><h5>Завантажити пост в форматі json/xml:</h5> </div>
    <div class="form-group">
        <label for="post_file">Оберіть файл:</label>
        <input type="file" name="post_file" id="post_file" required accept=".json,.xml" class="form-control-file">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Завантажити</button>
</form>

<?php include '../add_post.php'; ?>
</body>
</html>
