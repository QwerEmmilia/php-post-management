<!DOCTYPE html>
<html>
<head>
    <title>Вигрузка постів</title>
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

<h1 class="page-title">Вигрузка постів</h1>
<form action="../download.php" method="GET" class="container upload-form">
    <div class="mt-3 mb-2 section-title"><h5>Вивантажити всі пости в конкретний період:</h5> </div>
    <div class="form-group">
        <label for="from_date">Початкова дата:</label>
        <input type="date" name="from_date" id="from_date" class="form-control" style="width: 20%;">
    </div>
    <div class="form-group">
        <label for="to_date">Кінцева дата:</label>
        <input type="date" name="to_date" id="to_date" class="form-control" style="width: 20%;">
    </div>
    <div class="mt-3 mb-2 section-title"><h5>Вивантажити конкретний пост:</h5> </div>
    <div class="form-group">
        <label for="post_id">Ідентифікатор поста:</label>
        <input type="text" name="post_id" id="post_id" class="form-control" style="width: 10%;">
    </div>
    <div class="mt-3 mb-2 section-title"><h5>Оберід формат та вигрузіть:</h5> </div>
    <div class="form-group">
        <label for="file_format">Формат файлу:</label>
        <select name="file_format" id="file_format" class="form-control" style="width: 20%;">
            <option value="json">JSON</option>
            <option value="xml">XML</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Вигрузити</button>
</form>
</body>
</html>
