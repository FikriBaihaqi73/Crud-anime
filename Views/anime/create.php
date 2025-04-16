<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anime</title>
    <link rel="stylesheet" href="/tugasakhir1/Public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Anime Baru</h1>
        <form method="POST" action="/tugasakhir1/Public/index.php?action=create">
            <div class="form-group">
                <label>Nama Anime:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Tahun:</label>
                <input type="number" name="tahun" required>
            </div>
            <div class="form-group">
                <label>Studio:</label>
                <input type="text" name="studio" required>
            </div>
            <div class="form-group">
                <label>Mangaka:</label>
                <input type="text" name="mangaka" required>
            </div>
            <div class="form-group">
                <label>Genre:</label>
                <input type="text" name="genre" required>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="/tugasakhir1/Public/index.php?action=index" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>
</html>