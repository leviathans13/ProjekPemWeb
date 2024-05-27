<?php
// Dapatkan URL saat ini
$current_page = basename($_SERVER['PHP_SELF']);
$target = isset($_GET['target']) ? $_GET['target'] : '';
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="images/Marcy.png" alt="Logo"> Marcycle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?php echo ($current_page == 'index.php' && $target == '') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item <?php echo ($target == 'motorcycle') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?target=motorcycle">Marcycle</a>
            </li>
            <li class="nav-item <?php echo ($target == 'purchase') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?target=purchase">Purchase</a>
            </li>
            <li class="nav-item <?php echo ($target == 'gallery') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?target=gallery">Gallery</a>
            </li>
            <li class="nav-item <?php echo ($target == 'simulation') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?target=simulation">Simulation</a>
            </li>
        </ul>
    </div>
</nav>
