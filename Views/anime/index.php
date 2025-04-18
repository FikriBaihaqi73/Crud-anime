<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magical Anime Collection</title>
    <link rel="stylesheet" href="/tugasakhir1/Public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Magical Anime Collection</h1>
        
        <div class="magic-search-container">
            <form method="POST" action="/tugasakhir1/Public/index.php?action=search">
                <span class="magic-search-icon">🔍</span>
                <input type="text" name="keyword" placeholder="Search for magical anime..." class="magic-search-box" value="<?= isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                <button type="submit" class="magic-search-button">Search</button>
                <?php if (isset($_POST['keyword'])) : ?>
                    <a href="/tugasakhir1/Public/index.php?action=index" class="magic-search-button-cancel">Cancel</a>
                <?php endif; ?>
            </form>
        </div>
        
        <a href="/tugasakhir1/Public/index.php?action=create" class="magic-add-button">Add New Anime</a>
        
        <div class="magic-table-container">
            <div class="magic-circle"></div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Studio</th>
                        <th>Mangaka</th>
                        <th>Genre</th>
                        <th>Actions</th>
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
                                <a href="/tugasakhir1/Public/index.php?action=edit&id=<?= $anime['id']; ?>" class="magic-edit-button">Edit</a>
                                <a href="/tugasakhir1/Public/index.php?action=delete&id=<?= $anime['id']; ?>" class="magic-delete-button" onclick="return confirm('Are you sure you want to delete this magical anime?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Sparkle Effects -->
    <div class="sparkle sparkle-1"></div>
    <div class="sparkle sparkle-2"></div>
    <div class="sparkle sparkle-3"></div>
    <div class="sparkle sparkle-4"></div>
</body>
</html>