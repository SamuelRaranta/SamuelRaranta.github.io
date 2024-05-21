
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1>Home</h1>
        <p>Sepak bola, yang sering disebut sebagai "the beautiful game," telah menjadi salah satu olahraga paling populer...</p>
    </section>
    <section id="gallery" class="gallery">
        <h2>Gallery</h2>
        <img src="https://th.bing.com/th/id/OIP.p0-g24eOeESuGPoRJEs7NwHaHa?w=179&h=180&c=7&r=0&o=5&pid=1.7" alt="Image 1">
        <img src="https://th.bing.com/th/id/OIP.U8cW9b-z22w57hPCfGYK7AHaEj?w=260&h=180&c=7&r=0&o=5&pid=1.7" alt="Image 2">
        <img src="https://th.bing.com/th/id/OIP.fz-ZyQv-XEJ1vES4L2U7AwHaEL?w=300&h=180&c=7&r=0&o=5&pid=1.7" alt="Image 3">
    </section>
    <section id="blog">
        <h3>Blog</h3>
        <?php include 'fetch_articles.php'; ?>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <strong><?php echo htmlspecialchars($article['title']); ?></strong>
                <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
            </div>
        <?php endforeach; ?>
    </section>
    <section id="contact">
        <h3>Contact</h3>
    </section>
    <footer>
        <div class="social-links">
            <a href="https://wa.me/6285756561838" target="_blank" rel="noopener noreferrer"><img src="https://th.bing.com/th?id=ODLS.6dc06748-5aec-4fb5-9d7e-beb178226b84&w=32&h=32&qlt=90&pcl=fffffa&o=6&pid=1.2Q==" alt="WhatsApp"></a>
            <a href="https://www.facebook.com/gideon.raranta/" target="_blank" rel="noopener noreferrer"><img src="https://goodies.icons8.com/web/common/social/social_facebook.svg" alt="Facebook"></a>
            <a href="https://www.instagram.com/samwhy111/" target="_blank" rel="noopener noreferrer"><img src="https://th.bing.com/th?id=ODLS.bc2285e6-18ab-4eac-80d8-28a552192970&w=32&h=32&qlt=95&pcl=fffffa&o=6&pid=1.2" alt="Instagram"></a>
        </div>
        <p>&copy; 2024 My Website</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
