<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman utama</h1>
    <p><?= $result['tes'] ?></p>
    <form method="POST" action="/halo">
        <input type="text" name="sadam">
        <button type="submit" >gas</button>
    </form>
</body>
</html>