<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= ROOT; ?>image/favicon.png" type="image/png">
    <title>Page <?= $data['title']; ?> | <?= WEBSITE_TITLE; ?></title>
    <link rel="stylesheet" href="<?= ROOT; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ROOT; ?>css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT; ?>">Electronic Citizens Records</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT; ?>">Home</a>
                    </li>
                    <!-- dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=ROOT;?>data">Warga</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT;?>hotel">Hotel</a></li>
                        </ul>
                    </li>
                    <!-- end dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT; ?>about">About</a>
                    </li>
                    <?php if (isset($_SESSION['name'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT; ?>login/logout">logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>