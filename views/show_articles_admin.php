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
        <div>
        <a href="../index.php?action=add"> ADD Title</a>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Control</th>
                    <th>Del</th>
                </tr>
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="../index.php?action=edit&id=<?=$a['id']?>">Edit</a></td>
                    <td><a href="../index.php?action=delete&id=<?=$a['id']?>">Delete</a></td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
        <footer>
            <p>My first blog <br> Copyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>