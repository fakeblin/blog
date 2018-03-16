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
        <h1>My first Blog <br> Two Page(views>article.php)</h1>
        <div>
            <div class="article">
                <h3>
                    <?=$article['title']?>
                </h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
        </div>
        </div>
        <footer>
            <p>My first blog <br> Copyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>