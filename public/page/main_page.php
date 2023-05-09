<!DOCTYPE html>
<html>
<head>
    <title>Список постів</title>
    <link rel="stylesheet" href="../../style/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../js/pagination.js"></script>
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

<h1>Список постів</h1>

<div id="postsContainer">
    <?php include '../main.php'; ?>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div id="paginationContainer">
                <?php
                // Виведення посилань на пагінацію
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<a href='#' class='pagination-link' data-page='$i'>$i</a> ";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
