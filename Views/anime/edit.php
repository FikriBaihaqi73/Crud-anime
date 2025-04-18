<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Magical Anime</title>
    <link rel="stylesheet" href="/tugasakhir1/Public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Modify Magical Anime Scroll</h1>
        
        <div class="spellbook-container floating">
    <div class="magic-sparkle sparkle-1"></div>
    <div class="magic-sparkle sparkle-2"></div>
    <div class="magic-sparkle sparkle-3"></div>
    <div class="magic-sparkle sparkle-4"></div>
    <div class="magic-sparkle sparkle-5"></div>
    <div class="book">
        <div class="book-cover"></div>
        <div class="book-pages"></div>
        <div class="book-content">
                    <form class="magic-form" method="POST" action="/tugasakhir1/Public/index.php?action=edit&id=<?= $anime['id']; ?>">
                        <h2 class="form-title">Alter Magical Properties</h2>
                        
                        <input class="magic-input" type="text" name="nama" value="<?= $anime['nama']; ?>" placeholder="Anime Name" required>
                        <input class="magic-input" type="number" name="tahun" value="<?= $anime['tahun']; ?>" placeholder="Year of Magic" required>
                        <input class="magic-input" type="text" name="studio" value="<?= $anime['studio']; ?>" placeholder="Magical Studio" required>
                        <input class="magic-input" type="text" name="mangaka" value="<?= $anime['mangaka']; ?>" placeholder="Great Mangaka" required>
                        <input class="magic-input" type="text" name="genre" value="<?= $anime['genre']; ?>" placeholder="Magical Genre" required>
                        
                        <button type="submit" class="magic-button magic-glow">Update Enchantment</button>
                        <a href="/tugasakhir1/Public/index.php?action=index" class="magic-button-cancel">Cancel Spell</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>