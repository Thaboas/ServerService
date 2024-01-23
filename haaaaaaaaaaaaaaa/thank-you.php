<!-- thank-you.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #d3f5d3; /* Light green background color */
            font-family: 'Arial', sans-serif; /* Default font */
        }
    </style>
    <title>Thank You!</title>
</head>
<body>
    <header>
        <h1>Thank You!</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="services.html">Services</a></li>
            </ul>
        </nav>
        <button id="menu-button">Toggle Menu</button>
    </header>

    <section>
        <?php displayThankYouMessage(); ?>
    </section>

    <footer>
        <p>&copy; 2024 Server Services</p>
    </footer>

    <script src="ToggleMenu.js"></script>
    <script src="ImageSlider.js"></script>
    <script src="FormValidation.js"></script>
</body>
</html>
