<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login page</title>
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
                    <div class="col-lg-12 col-12 d-flex">
                        <a class="site-header-text d-flex justify-content-center align-items-center me-auto"
                            href="<?= ROOT ?>">
                            <i class="bi-box"></i>
                            <span>
                                <?= APP_NAME ?>
                            </span>
                        </a>
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
                            <a href="<?= ROOT ?>/register">Create an account</a>
                        </li>
                        <!-- PHP -->
                        <?php if (isset($data["user"])): ?>
                            <li>
                                <a href="<?= ROOT ?>/userPage">User Page</a>
                            </li>
                        <?php endif; ?>
                        <!-- PHP -->
                    </ul>
                </nav>
            </div>
        </div>
        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto">
                        <!-- FORM -->
                        <form class="custom-form login-form" role="form" method="post">
                            <!-- PHP -->
                            <?php if (!empty($errors)): ?>
                                <div class="alert alert-danger text-center">
                                    <?= implode("<br>", $errors) ?>
                                </div>
                            <?php endif; ?>
                            <!-- PHP -->
                            <h2 class="hero-title text-center mb-4 pb-2">Login Form</h2>
                            <div class="form-floating mb-4 p-0">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="Email address" required="">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating p-0">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" required="">
                                <label for="password">Password</label>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-12">
                                    <button type="submit" class="form-control">Login</button>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <a href="<?= ROOT ?>/register" class="btn custom-btn custom-border-btn">Register</a>
                                </div>
                            </div>
                        </form>
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