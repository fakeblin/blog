<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <div>
                <form method="POST" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название<br>
                    <input type="text" name="title" value="<?=$articles['title']?>" class="form-item" autofocus required>
                </label><br>
                <label>
                    Дата<br>
                    <input type="date" name="date" value="<?=$articles['date']?>" class="form-item" required>
                </label><br>
                <label>
                    Содержимое<br>
                    <textarea name="content" class="form-item" required><?=$articles['content']?></textarea>
                </label><br>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
            <footer>
                <p>Мой первый блог<br>Copyright © 2016</p>
            </footer>
        </div>
    </body>
</html>