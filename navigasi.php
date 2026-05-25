<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi</title>
</head>
<body>
    <nav class="navbar">
        <span class="open-slide">       
                    <a href="#" onclick="openSlideMenu()">
                        <svg width="30" height="30">
                            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                        </svg>
                    </a>
        </span>
        <ul class="navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="mahasiswa.php">Mahasiswa</a></li>
            <li><a href="prodi.php">Prodi</a></li>
            <li class="logout"><a href="logout.php">(<?php echo $_SESSION['user']; ?>) Logout</a></li>
        </ul>
    </nav>

        <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
            <a href="home.php">Home</a>
            <a href="mahasiswa.php">Mahasiswa</a>
            <a href="prodi.php">Prodi</a>
            <a href="logout.php">(<?php echo $_SESSION['user']; ?>) Logout</a>
        </div>
</body>
</html>