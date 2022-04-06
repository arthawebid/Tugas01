<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Multi file</title>
</head>
<body>
    
    <form method="POST" enctype="multipart/form-data" action="terimafile02.php">
        Upload File<br>
        <input type="file" name="fldata[]" multiple>
        <br><br>
        <button type="submit" name="kirimfile">Upload File</button>

    </form>

</body>
</html>