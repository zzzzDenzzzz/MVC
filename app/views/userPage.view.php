<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/tooplate-kool-form-pack.css" rel="stylesheet">
    <style>
        #loader {
            background: rgba(255, 255, 255, 0.7);
            text-align: center;
            position: absolute;
            top: 150px;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: none;
        }

        #loader img {
            width: 100px;
        }

        #clear-search {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <main>
        <header class="site-header">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-12 col-12 d-flex align-items-center">
                        <a class="site-header-text d-flex justify-content-center align-items-center me-auto"
                            href="<?= ROOT ?>">
                            <i class="bi-box"></i>
                            <span>
                                <?= APP_NAME ?>
                            </span>
                        </a>
                        <span class="text-white me-4 d-none d-lg-block">Hi, <?= $username ?>!</span>
                        <span>
                            <div class="input-group mb-3">
                                <input type="text" id="search" class="form-control bg-transparent text-white"
                                    placeholder="Search...">
                                <span class="input-group-text bg-transparent text-white" id="clear-search">
                                    <a href="<?= ROOT ?>/userPage">&times;</a>
                                </span>
                            </div>
                        </span>
                        <a class="bi-list offcanvas-icon" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button"
                            aria-controls="offcanvasMenu">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu"
            aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
                <nav>
                    <ul>
                        <li>
                            <a href="<?= ROOT ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= ROOT ?>/logout">Logout</a>
                        </li>
                        <!-- PHP -->
                        <?php if (isset($data["user"]) && $data["user"] == "admin"): ?>
                            <li>
                                <a href="<?= ROOT ?>/adminPage">Admin</a>
                            </li>
                        <?php endif; ?>
                        <!-- PHP -->
                    </ul>
                </nav>
            </div>
        </div>
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div id="loader">
                        <img src="<?= ROOT ?>/assets/images/ripple.svg" alt="">
                    </div>
                    <div class="table-responsive my-3">
                        <?php require_once "userPage-content.view.php" ?>
                    </div>
                </div>
            </div>
            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="<?= ROOT ?>/assets/videos/map.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
    </main>
    <!-- JAVASCRIPT FILES -->
    <script src="<?= ROOT ?>/assets/js/jquery.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/user.js"></script>
    <script src="<?= ROOT ?>/assets/js/mark.min.js"></script>
</body>

</html>