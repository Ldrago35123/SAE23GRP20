<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'upload de fichier</title>
</head>
<body>
    <h2>Upload de fichiers</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="Upload" />
    </form>
</body>
</html>