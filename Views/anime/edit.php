<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anime</title>
    <link rel="stylesheet" href="/tugasakhir1/Public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Anime</h1>
        <?php if(isset($anime) && is_array($anime)): ?>
            <form method="POST" action="/tugasakhir1/Public/index.php?action=edit&id=<?= $anime['id']; ?>">
                <div class="form-group">
                    <label>Nama Anime:</label>
                    <input type="text" name="nama" value="<?= $anime['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tahun:</label>
                    <input type="number" name="tahun" value="<?= $anime['tahun']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Studio:</label>
                    <input type="text" name="studio" value="<?= $anime['studio']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Mangaka:</label>
                    <input type="text" name="mangaka" value="<?= $anime['mangaka']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Genre:</label>
                    <input type="text" name="genre" value="<?= $anime['genre']; ?>" required>
                </div>
                <button type="submit" class="btn-submit">Update</button>
                <a href="/tugasakhir1/Public/index.php?action=index" class="btn-cancel">Batal</a>
            </form>
        <?php else: ?>
            <p>Data anime tidak ditemukan.</p>
            <a href="/tugasakhir1/Public/index.php?action=index" class="btn-cancel">Kembali</a>
        <?php endif; ?>
    </div>
</body>
</html>