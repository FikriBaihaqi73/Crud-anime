<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime</title>
    <link rel="stylesheet" href="/tugasakhir1/Public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Anime</h1>
        <a href="/tugasakhir1/Public/index.php?action=create" class="btn-add">Tambah Anime</a>
    </div>

    <div class="container">
        <form method="POST" action="/tugasakhir1/Public/index.php?action=search">
            <input type="text" name="keyword" placeholder="Cari anime" class="search-input" value="<?= isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
            <button type="submit" class="search-button">Cari</button>
            <?php if (isset($_POST['keyword'])) : ?>
                <a href="/tugasakhir1/Public/index.php?action=index" class="search-button-cancel">Batal</a>
            <?php endif; ?>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tahun</th>
                <th>Studio</th>
                <th>Mangaka</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr> 
        </thead>
        <tbody>
                <?php foreach ($animes as $index => $anime) : ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $anime['nama']; ?></td>
                        <td><?= $anime['tahun']; ?></td>
                        <td><?= $anime['studio']; ?></td>
                        <td><?= $anime['mangaka']; ?></td>
                        <td><?= $anime['genre']; ?></td>
                        <td>
                            <a href="/tugasakhir1/Public/index.php?action=edit&id=<?= $anime['id']; ?>" class="btn-edit">Edit</a>
                            <a href="/tugasakhir1/Public/index.php?action=delete&id=<?= $anime['id']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>