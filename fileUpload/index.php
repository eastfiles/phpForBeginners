<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file | upload</title>
</head>
<body>
    <form action="controller/uploadFile.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="image">Upload image</label>
            <input type="file" name="image">
        </div>
        <div>
            <button type="submit" name="send">submit</button>
        </div>
    </form>
</body>
</html>