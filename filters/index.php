<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter | page</title>
</head>
<body>
    <form action="controller/register.php" method="POST">
        <div>
            <label for="Full name">Full Name</label>
            <input type="text" name="full_name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="height">height</label>
            <input type="number" name="height" min="5" max="20">
        </div>
        <div>
            <button name="submit" type="submit">submit</button>
        </div>
    </form>
</body>
</html>