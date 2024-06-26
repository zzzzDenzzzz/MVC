<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/tooplate-kool-form-pack.css" rel="stylesheet">
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
                        <!-- PHP -->
                        <?php if (isset($data["user"])): ?>
                            <li>
                                <a href="<?= ROOT ?>/userPage">User Page</a>
                            </li>
                            <li>
                                <a href="<?= ROOT ?>/logout">Logout</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?= ROOT ?>/login">Login Form</a>
                            </li>
                            <li>
                                <a href="<?= ROOT ?>/register">Create an account</a>
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
                    <div class="col-lg-6 col-12 mx-auto">
                        <small>
                            <a rel="nofollow" target="_blank" href="<?= ROOT ?>/assets/videos/planet-earth.mp4">just a video
                            </a>
                        </small>
                        <h1 class="text-white mt-2 mb-4 pb-2">
                            Find out the population of your city
                        </h1>
                        <h3 class="text-white mt-2 mb-4 pb-2">
                            The site will be updated in...
                        </h3>
                        <ul class="countdown d-flex flex-wrap align-items-center">
                            <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                <h2 class="countdown-title days">0</h2>
                                <span class="countdown-text">Days</span>
                            </li>
                            <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                <h2 class="countdown-title hours">0</h2>
                                <span class="countdown-text">Hours</span>
                            </li>
                            <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                <h2 class="countdown-title minutes">0</h2>
                                <span class="countdown-text">Minutes</span>
                            </li>
                            <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                <h2 class="countdown-title seconds">0</h2>
                                <span class="countdown-text">Seconds</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="<?= ROOT ?>/assets/videos/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
    </main>
    <!-- JAVASCRIPT FILES -->
    <script src="<?= ROOT ?>/assets/js/jquery.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/countdown.js"></script>
    <script src="<?= ROOT ?>/assets/js/init.js"></script>
</body>

</html>