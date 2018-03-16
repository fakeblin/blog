<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first BLOG</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>My first Blog</h1>
        <a href="../admin"> Admin Panel</a>
        <div>
            <?php foreach($articles as $a): ?>
            <div class="article">
                <h3>
                    <a href="watch_article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                </h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=$a['content']?></p>
            </div>
            <?php endforeach ?>
        </div>
        <footer>
            <p>My first blog <br> Copyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>

