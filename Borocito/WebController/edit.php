<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editor.php" method="post">
        <input type="text" name="filePath" id="filePath">
        <textarea name="text">
            <?php
                echo htmlspecialchars($text)
            ?>
        </textarea>
        <input type="submit" />
        <input type="reset" />
    </form>
</body>
</html>