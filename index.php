<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcycle</title>

    <link href="images/Logo Title.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main class="container mt-5">
        <?php
        if (!isset($_GET['target'])) {
            require('pages/home.php');
        } elseif ($_GET['target'] == 'motorcycle') {
            require('pages/motorcycle.php');
        } elseif ($_GET['target'] == 'purchase') {
            require('pages/purchase.php');
        } elseif ($_GET['target'] == 'gallery') {
            require('pages/gallery.php');
        } elseif ($_GET['target'] == 'simulation') {
            require('pages/simulation.php');
        } else {
            echo "<h1>Page not found</h1>";
        }
        ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> <!-- Pastikan file ini ada di direktori js -->
</body>
</body>
</html>
