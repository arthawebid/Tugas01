<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file Gambar</title>
</head>
<body>
    
    <form method="POST" action="terimafile01.php" enctype="multipart/form-data">

        File Upload<br>
        <input type="file" name="fldata" accept=".jpg, .png, .gif">
        <br>
        <button type="submit" name="kirimdata">Upload File</button>

    </form>

</body>
</html>