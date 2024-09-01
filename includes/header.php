<?php require "config/config.php" ?>

<?php

$categories_sql = "SELECT * FROM job_categories LIMIT 6";
$categories_result = mysqli_query($conn, $categories_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        name="keywords"
        content="Digital marketing agency, Digital marketing company, Digital marketing services" />
    <meta
        name="description"
        content="Jobi is a beautiful website template designed for job board websites." />
    <meta property="og:site_name" content="Jano" />
    <meta property="og:url" content="https://creativegigstf.com/" />
    <meta property="og:type" content="website" />
    <meta
        property="og:title"
        content="Jobi - Responsive Job Board HTML Template" />
    <meta name="og:image" content="assets/images/assets/ogg.png" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#244034" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#244034" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#244034" />
    <title>Jobi - Responsive Job Board HTML Template</title>
    <!-- Favicon -->
    <link
        rel="icon"
        type="image/png"
        sizes="56x56"
        href="assets/images/fav-icon/icon.png" />
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        type="text/css"
        href="assets/css/bootstrap.min.css"
        media="all" />
    <!-- Main style sheet -->
    <link
        rel="stylesheet"
        type="text/css"
        href="assets/css/style.min.css"
        media="all" />
    <!-- responsive style sheet -->
    <link
        rel="stylesheet"
        type="text/css"
        href="assets/css/responsive.css"
        media="all" />

</head>

<body>

    <div class="main-page-wrapper">
        <!-- ===================================================
				Loading Transition
			==================================================== -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="icon">
                    <img
                        src="assets/images/loader.svg"
                        alt=""
                        class="m-auto d-block"
                        width="60" />
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="j" class="letters-loading"> j </span>
                    <span data-text-preloader="o" class="letters-loading"> o </span>
                    <span data-text-preloader="b" class="letters-loading"> b </span>
                    <span data-text-preloader="i" class="letters-loading"> i </span>
                </div>
            </div>
        </div>

        <!-- 
		=============================================
				Theme Main Menu
		============================================== 
		-->
        <header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
            <div class="inner-content position-relative container">
                <div class="top-header">
                    <div class="d-flex align-items-center">
                        <div class="logo order-lg-0">
                            <a href="index.html" class="d-flex align-items-center">
                                <img src="assets/images/logo/logo_01.png" alt="" />
                            </a>
                        </div>
                        <!-- logo -->
                        <div class="right-widget ms-auto order-lg-3">
                            <ul class="d-flex align-items-center style-none">
                                <li class="d-none d-md-block">
                                    <a
                                        href="dashboard/employer-dashboard-submit-job.html"
                                        class="job-post-btn tran3s">Post Job</a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="login-btn-one"
                                        data-bs-toggle="modal"
                                        data-bs-target="#loginModal">Login</a>
                                </li>
                                <li class="d-none d-md-block ms-4">
                                    <a href="candidates-v1.html" class="btn-one">Hire Top Talents</a>
                                </li>
                            </ul>
                        </div>
                        <!--/.right-widget-->
                        <nav class="navbar navbar-expand-lg p0 ms-lg-5 ms-3 order-lg-2">
                            <button
                                class="navbar-toggler d-block d-lg-none"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarNav"
                                aria-controls="navbarNav"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav align-items-lg-center">
                                    <li class="d-block d-lg-none">
                                        <div class="logo">
                                            <a href="index.html" class="d-block"><img
                                                    src="assets/images/logo/logo_01.png"
                                                    alt=""
                                                    width="100" /></a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown category-btn mega-dropdown-sm">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false"><i class="bi bi-grid-fill"></i> Category</a>
                                        <ul class="dropdown-menu category-dropdown">
                                            <li class="row gx-0">
                                                <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
                                                    <div class="col-lg-6">
                                                        <a
                                                            href="job-list-v1.html"
                                                            class="item d-flex align-items-center">
                                                            <div
                                                                class="icon d-flex align-items-center justify-content-center rounded-circle tran3s">
                                                                <img
                                                                    src="assets/images/lazy.svg"
                                                                    data-src="<?php echo $category['category_icon'] ?>"
                                                                    alt=""
                                                                    class="lazy-img" />
                                                            </div>
                                                            <div class="ps-3 flex-fill">
                                                                <div class="fw-500 text-dark"><?php echo $category['category_name'] ?></div>
                                                                <div class="job-count">12k+ Jobs</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endwhile; ?>
                                            </li>
                                            <li>
                                                <a
                                                    href="job-list-v1.html"
                                                    class="explore-all-btn d-flex align-items-center justify-content-between tran3s">
                                                    <span class="fw-500">Explore all fields</span>
                                                    <span class="icon"><i class="bi bi-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown dashboard-menu">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false">Dashboard
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a
                                                    href="dashboard/candidate-dashboard-index.html"
                                                    class="dropdown-item"
                                                    target="_blank"><span>Candidate Dashboard</span></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="dashboard/employer-dashboard-index.html"
                                                    class="dropdown-item"
                                                    target="_blank"><span>Employer Dashboard</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false">Home
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="index.html" class="dropdown-item"><span>Home 01</span></a>
                                            </li>
                                            <li>
                                                <a href="index-2.html" class="dropdown-item"><span>Home 02</span></a>
                                            </li>
                                            <li>
                                                <a href="index-3.html" class="dropdown-item"><span>Home 03</span></a>
                                            </li>
                                            <li>
                                                <a href="index-4.html" class="dropdown-item"><span>Home 04</span></a>
                                            </li>
                                            <li>
                                                <a href="index-5.html" class="dropdown-item"><span>Home 05</span></a>
                                            </li>
                                            <li>
                                                <a href="index-6.html" class="dropdown-item"><span>Home 06</span></a>
                                            </li>
                                            <li>
                                                <a href="index-7.html" class="dropdown-item"><span>Home 07</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false">Job
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="job-list-v1.html" class="dropdown-item"><span>Job List style -1</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list-v2.html" class="dropdown-item"><span>Job List style -2</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list-v3.html" class="dropdown-item"><span>Job List style -3</span></a>
                                            </li>
                                            <li>
                                                <a href="job-grid-v1.html" class="dropdown-item"><span>Job Grid style -1</span></a>
                                            </li>
                                            <li>
                                                <a href="job-grid-v2.html" class="dropdown-item"><span>Job Grid style -2</span></a>
                                            </li>
                                            <li>
                                                <a href="job-grid-v3.html" class="dropdown-item"><span>Job Grid style -3</span></a>
                                            </li>
                                            <li>
                                                <a href="job-details-v1.html" class="dropdown-item"><span>Job Details v-1</span></a>
                                            </li>
                                            <li>
                                                <a href="job-details-v2.html" class="dropdown-item"><span>Job Details v-2</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-sm">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false">Explore
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="row gx-1">
                                                <div class="col-md-4">
                                                    <div class="menu-column">
                                                        <h6 class="mega-menu-title">Candidates</h6>
                                                        <ul class="style-none mega-dropdown-list">
                                                            <li>
                                                                <a
                                                                    href="candidates-v1.html"
                                                                    class="dropdown-item"><span>Candidates V-1</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="candidates-v2.html"
                                                                    class="dropdown-item"><span>Candidates V-2</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="candidates-v3.html"
                                                                    class="dropdown-item"><span>Candidates V-3</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="candidates-v4.html"
                                                                    class="dropdown-item"><span>Candidates V-4</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="candidate-profile-v1.html"
                                                                    class="dropdown-item"><span>Candidates Details v-1</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="candidate-profile-v2.html"
                                                                    class="dropdown-item"><span>Candidates Details v-2</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--/.menu-column -->
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="menu-column">
                                                        <h6 class="mega-menu-title">Company</h6>
                                                        <ul class="style-none mega-dropdown-list">
                                                            <li>
                                                                <a
                                                                    href="company-v1.html"
                                                                    class="dropdown-item"><span>Company V-1</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="company-v2.html"
                                                                    class="dropdown-item"><span>Company V-2</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="company-v3.html"
                                                                    class="dropdown-item"><span>Company V-3</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="company-v4.html"
                                                                    class="dropdown-item"><span>Company V-4</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="company-details.html"
                                                                    class="dropdown-item"><span>Company Details</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--/.menu-column -->
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="menu-column">
                                                        <h6 class="mega-menu-title">Essential</h6>
                                                        <ul class="style-none mega-dropdown-list">
                                                            <li>
                                                                <a href="about-us.html" class="dropdown-item"><span>About Us</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="pricing.html" class="dropdown-item"><span>Pricing</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="faq.html" class="dropdown-item"><span>Faq's</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="signup.html" class="dropdown-item"><span>Register</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="404.html" class="dropdown-item"><span>404 Error</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--/.menu-column -->
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            aria-expanded="false">Blog
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog-v1.html" class="dropdown-item"><span>Blog Standard</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-v2.html" class="dropdown-item"><span>Blog Grid</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-v3.html" class="dropdown-item"><span>Blog Full width</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" class="dropdown-item"><span>Blog Details</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html" role="button">Contact</a>
                                    </li>
                                    <li class="d-md-none">
                                        <a
                                            href="dashboard/employer-dashboard-submit-job.html"
                                            class="job-post-btn tran3s">Post Job</a>
                                    </li>
                                    <li class="d-md-none">
                                        <a href="candidates-v1.html" class="btn-one w-100">Hire Top Talents</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--/.top-header-->
            </div>
            <!-- /.inner-content -->
        </header>
        <!-- /.theme-main-menu -->