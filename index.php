<?php require "includes/header.php" ?>

<?php

$companies_sql = "SELECT * FROM companies LIMIT 4";

$locations_sql = "SELECT * FROM locations";

?>

<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
<div class="hero-banner-one position-relative">
  <div class="container">
    <div
      class="position-relative pt-200 md-pt-150 pb-150 xl-pb-120 md-pb-80">
      <div class="row">
        <div class="col-lg-6">
          <h1>Find & Hire <span>Top 3% of expert on jobi.</span></h1>
          <p class="text-lg text-white mt-40 md-mt-30 mb-50 md-mb-30">
            We delivered blazing fast & striking work solution
          </p>
        </div>
      </div>
      <div class="position-relative">
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="job-search-one position-relative me-xl-5">
              <form
                action="https://html.creativegigstf.com/jobi/jobi/job-grid-v1.html">
                <div class="row">
                  <div class="col-md-5">
                    <div class="input-box">
                      <div class="label">What are you looking for?</div>
                      <select class="nice-select lg">
                        <?php $categories_result = mysqli_query($conn, $categories_sql);
                        while ($category = mysqli_fetch_assoc($categories_result)): ?>
                          <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-box border-left">
                      <div class="label">Location</div>
                      <select class="nice-select lg">
                        <?php $locations_result = mysqli_query($conn, $locations_sql);
                        while ($location = mysqli_fetch_assoc($locations_result)): ?>
                          <option value="<?php echo $location['location_id'] ?>"><?php echo $location['location_name'] ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <button
                      class="fw-500 text-uppercase h-100 tran3s search-btn">
                      Search
                    </button>
                  </div>
                </div>
              </form>
              <ul class="tags d-flex flex-wrap style-none mt-20">
                <li class="fw-500 text-white me-2">Populer:</li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Video Editing</a></li>
              </ul>
            </div>
            <!-- /.job-search-one -->
          </div>
        </div>
      </div>

      <div class="img-box">
        <img
          src="assets/images/lazy.svg"
          data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_01.svg"
          alt=""
          class="lazy-img shapes" />
        <img
          src="assets/images/lazy.svg"
          data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/img_01.jpg"
          alt=""
          class="lazy-img w-100" />
      </div>
      <!-- /.img-box -->
    </div>
  </div>
  <img
    src="assets/images/lazy.svg"
    data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_02.svg"
    alt=""
    class="lazy-img shapes shape_01" />
  <img
    src="assets/images/lazy.svg"
    data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_03.svg"
    alt=""
    class="lazy-img shapes shape_02" />
</div>
<!-- /.hero-banner-one -->

<!-- 
		=============================================
			Category Section One
		============================================== 
		-->
<section
  class="category-section-one bg-color position-relative pt-180 xl-pt-150 lg-pt-80 pb-140 xl-pb-120 lg-pb-60">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="title-one">
          <h2>
            Most
            <span class="position-relative">Demanding
              <img
                src="assets/images/lazy.svg"
                data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_04.svg"
                alt=""
                class="lazy-img shapes shape" /></span>
            Categories.
          </h2>
        </div>
      </div>
      <div class="col-xxl-5 col-lg-6">
        <p class="text-md mb-25 lg-mb-10 md-mt-20">
          Together with useful notifications, collaboration, insights, and
          improvement tip lorem etc.
        </p>
        <a
          href="job-grid-v1.html"
          class="btn-two d-none d-lg-inline-block">Explore all fields</a>
      </div>
    </div>
    <div
      class="card-wrapper row justify-content-center mt-75 lg-mt-40 md-mt-10">
      <?php
      $categories_result = mysqli_query($conn, $categories_sql);
      while ($category = mysqli_fetch_assoc($categories_result)): ?>
        <div class="card-style-one text-center mt-20 wow fadeInUp">
          <a href="job-grid-v1.html" class="bg wrapper">
            <div
              class="icon d-flex align-items-center justify-content-center">
              <img
                src="assets/images/lazy.svg"
                data-src="<?php echo $category['category_icon'] ?>"
                alt=""
                class="lazy-img" />
            </div>
            <div class="title fw-500 text-dark"><?php echo $category['category_name'] ?></div>
            <div class="total-job">12k+ Jobs</div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
    <!-- /.card-wrapper -->
    <div class="text-center mt-40 d-lg-none">
      <a href="job-grid-v1.html" class="btn-two">Explore all fields</a>
    </div>
  </div>
  <img
    src="assets/images/lazy.svg"
    data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_05.svg"
    alt=""
    class="lazy-img shapes shape_01" />
</section>
<!-- ./category-section-one -->

<!-- 
		=============================================
			Text Feature One
		============================================== 
		-->
<section
  class="text-feature-one position-relative pt-180 xl-pt-150 lg-pt-100 md-pt-80 pb-180 xl-pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 order-lg-last">
        <div class="ps-xxl-4 wow fadeInRight">
          <div class="title-one">
            <h2>Get over 50.000+ talented experts in jobi.</h2>
          </div>
          <p class="mt-40 md-mt-20 mb-40 md-mb-20">
            A full hybrid workforce management tools are yours to use, as
            well as access to our top 1% of talent.
          </p>
          <ul class="list-style-one style-none">
            <li>Seamless searching</li>
            <li>Get top 3% experts for your project</li>
            <li>Protected payments system</li>
          </ul>
          <a href="signup.html" class="btn-one lg mt-50 md-mt-30">Post a Job</a>
        </div>
      </div>
      <div class="col-lg-7 col-md-11 m-auto order-lg-first">
        <div class="img-data position-relative pe-xl-5 me-xl-5 md-mt-50">
          <div class="row">
            <div class="col-md-6 col-sm-8 col-10">
              <img
                src="assets/images/lazy.svg"
                data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/img_02.jpg"
                alt=""
                class="lazy-img img01" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-5">
              <img
                src="assets/images/lazy.svg"
                data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/img_03.jpg"
                alt=""
                class="lazy-img img02 mt-35" />
            </div>
            <div class="col-md-6 col-7">
              <img
                src="assets/images/lazy.svg"
                data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/img_04.jpg"
                alt=""
                class="lazy-img img01 mt-35" />
            </div>
          </div>
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/screen_01.png"
            alt=""
            class="lazy-img shapes screen01 wow fadeInRight" />
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/screen_02.png"
            alt=""
            class="lazy-img shapes screen02 wow fadeInUp" />
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/screen_03.png"
            alt=""
            class="lazy-img shapes screen03 wow fadeInUp" />
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_06.svg"
            alt=""
            class="lazy-img shapes shape_01" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.text-feature-one -->

<!--
		=====================================================
			How It Works
		=====================================================
		-->
<section
  class="how-it-works position-relative bg-color pt-110 lg-pt-80 pb-110 lg-pb-70">
  <div class="container">
    <div class="title-one text-center mb-65 lg-mb-40">
      <h2 class="text-white">
        How it’s
        <span class="position-relative">work?
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_07.svg"
            alt=""
            class="lazy-img shapes shape" /></span>
      </h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-xxl-3 col-lg-4 col-md-6">
        <div class="card-style-two text-center mt-25 wow fadeInUp">
          <div
            class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/icon/icon_08.svg"
              alt=""
              class="lazy-img" />
          </div>
          <div class="title fw-500 text-white">Create Account</div>
          <p>It’s very easy to open an account and start your journey.</p>
        </div>
        <!-- /.card-style-two -->
      </div>
      <div class="col-xxl-3 col-lg-4 col-md-6 m-auto">
        <div
          class="card-style-two text-center position-relative arrow mt-25 wow fadeInUp"
          data-wow-delay="0.1s">
          <div
            class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/icon/icon_09.svg"
              alt=""
              class="lazy-img" />
          </div>
          <div class="title fw-500 text-white">Complete your profile</div>
          <p>
            Complete your profile with all the info to get attention of
            client.
          </p>
        </div>
        <!-- /.card-style-two -->
      </div>
      <div class="col-xxl-3 col-lg-4 col-md-6">
        <div
          class="card-style-two text-center mt-25 wow fadeInUp"
          data-wow-delay="0.19s">
          <div
            class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/icon/icon_10.svg"
              alt=""
              class="lazy-img" />
          </div>
          <div class="title fw-500 text-white">Apply job or hire</div>
          <p>
            Apply & get your preferable jobs with all the requirements and
            get it.
          </p>
        </div>
        <!-- /.card-style-two -->
      </div>
    </div>
  </div>
  <img
    src="assets/images/lazy.svg"
    data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_08.svg"
    alt=""
    class="lazy-img shapes shape_01" />
  <img
    src="assets/images/lazy.svg"
    data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_09.svg"
    alt=""
    class="lazy-img shapes shape_02" />
</section>
<!-- /.how-it-works -->

<!--
		=====================================================
			Expert Section
		=====================================================
		-->
<section
  class="expert-section-one position-relative mt-180 xl-mt-150 lg-mt-100">
  <div class="container position-relative">
    <div class="row">
      <div class="col-md-7">
        <div class="title-one text-center text-md-start mb-65 md-mb-50">
          <h2>
            Discover top
            <span class="position-relative">opportunities
              <img
                src="assets/images/lazy.svg"
                data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_04.svg"
                alt=""
                class="lazy-img shapes shape" /></span>
            in your area.
          </h2>
        </div>
      </div>
    </div>

    <div class="expert-slider-one">
      <?php $locations_result = mysqli_query($conn, $locations_sql);
      while ($location = mysqli_fetch_assoc($locations_result)): ?>
        <div class="item">
          <div class="card-style-three text-center">
            <div class="img-meta mb-40 lg-mb-20">
              <img
                src="<?php echo $location['location_image'] ?>"
                alt=""
                class="m-auto" />
            </div>
            <a href="#" class="name text-md fw-500 text-dark"><?php echo $location['location_name'] ?></a>
            <div class="post">12k+ Jobs</div>
          </div>
          <!-- /.card-style-three -->
        </div>
      <?php endwhile; ?>
      <!-- /.item -->
    </div>
    <ul
      class="slider-arrows slick-arrow-one d-flex justify-content-center style-none sm-mt-30">
      <li class="prev_a slick-arrow"><i class="bi bi-arrow-left"></i></li>
      <li class="next_a slick-arrow">
        <i class="bi bi-arrow-right"></i>
      </li>
    </ul>
  </div>
</section>
<!-- /.expert-section-one -->

<!--
		=====================================================
			FeedBack Section One
		=====================================================
		-->
<section class="feedback-section-one pt-180 xl-pt-150 lg-pt-100">
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="title-one text-center text-md-start mb-65 md-mb-50">
          <h2>Trusted by leading startups.</h2>
        </div>
      </div>
    </div>

    <div class="row feedback-slider-one">
      <div class="item">
        <div class="feedback-block-one">
          <div class="logo">
            <img src="assets/images/logo/media_01.png" alt="" />
          </div>
          <blockquote class="fw-500 mt-50 md-mt-30 mb-50 md-mb-30">
            “Seattle opera simplifies Performance planning with jobi
            eSignature.”
          </blockquote>
          <div class="name text-dark">
            <span class="fw-500">Rashed kabir,</span> Lead Designer
          </div>
          <div
            class="review pt-40 md-pt-20 mt-40 md-mt-30 d-flex justify-content-between align-items-center">
            <div class="text-md fw-500 text-dark">4.5 Excellent</div>
            <ul class="style-none d-flex">
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.feedback-block-one -->
      </div>
      <div class="item">
        <div class="feedback-block-one">
          <div class="logo">
            <img src="assets/images/logo/media_02.png" alt="" />
          </div>
          <blockquote class="fw-500 mt-50 md-mt-30 mb-50 md-mb-30">
            “How DocuSign CLM helps Celonis scale its global business.”
          </blockquote>
          <div class="name text-dark">
            <span class="fw-500">Mark Joge,</span> Marketing Chief
          </div>
          <div
            class="review pt-40 md-pt-20 mt-40 md-mt-30 d-flex justify-content-between align-items-center">
            <div class="text-md fw-500 text-dark">4.8 Awesome</div>
            <ul class="style-none d-flex">
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.feedback-block-one -->
      </div>
      <div class="item">
        <div class="feedback-block-one">
          <div class="logo">
            <img src="assets/images/logo/media_01.png" alt="" />
          </div>
          <blockquote class="fw-500 mt-50 md-mt-30 mb-50 md-mb-30">
            “Seattle opera simplifies Performance planning with jobi
            eSignature.”
          </blockquote>
          <div class="name text-dark">
            <span class="fw-500">Rashed kabir,</span> Lead Designer
          </div>
          <div
            class="review pt-40 md-pt-20 mt-40 md-mt-30 d-flex justify-content-between align-items-center">
            <div class="text-md fw-500 text-dark">4.5 Excellent</div>
            <ul class="style-none d-flex">
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="bi bi-star"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.feedback-block-one -->
      </div>
    </div>
    <ul
      class="slider-arrows slick-arrow-one d-flex justify-content-center style-none sm-mt-30">
      <li class="prev_b slick-arrow"><i class="bi bi-arrow-left"></i></li>
      <li class="next_b slick-arrow">
        <i class="bi bi-arrow-right"></i>
      </li>
    </ul>
  </div>
</section>
<!-- /.feedback-section-one -->

<!-- 
		=============================================
			Top Company
		============================================== 
		-->

<section class="top-company-section pt-100 lg-pt-60 pb-130 lg-pb-80 mt-200 xl-mt-150">
  <div class="container">
    <div class="row justify-content-between align-items-center pb-40 lg-pb-10">
      <div class="col-sm-7">
        <div class="title-one">
          <h2 class="main-font">Top Companies</h2>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="d-flex justify-content-sm-end">
          <a href="companies.php" class="btn-six d-none d-sm-inline-block">Explore More</a>
        </div>
      </div>
    </div>
    <div class="row">
      <?php $companies_result = mysqli_query($conn, $companies_sql);
      while ($company = mysqli_fetch_assoc($companies_result)): ?>
        <div class="col-lg-3 col-sm-6">
          <div class="card-style-ten text-center tran3s mt-25 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="<?php echo $company['company_icon'] ?>" alt="" class="lazy-img m-auto">
            <div class="text-lg fw-500 text-dark mt-15 mb-30"><?php echo $company['company_name'] ?></div>
            <p class="mb-20"><?php echo $company['company_location'] ?>...</p>
            <a href="company.php?company-id=<?php echo $company['company_id'] ?>" class="btn-one fw-500 tran3s">3 open job</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="text-center mt-30 d-sm-none">
      <a href="company-v1.html" class="btn-six">Explore More</a>
    </div>
  </div>
</section>

<!-- 
		=============================================
			Text Feature Two
		============================================== 
		-->
<section
  class="text-feature-two position-relative pt-180 xl-pt-150 lg-pt-100 pb-180 xl-pb-150 lg-pb-120">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 order-lg-last">
        <div class="wow fadeInRight">
          <div class="title-one">
            <div class="sub-title">TOP BRAND</div>
            <h2>Collaboration with Top Brands.</h2>
          </div>
          <p class="text-lg mt-40 lg-mt-20 mb-40 lg-mb-30">
            We collaborate with a number of top tier companies on
            imagining the future of work, have a look.
          </p>
          <a
            href="about-us.html"
            class="btn-nine tran3s d-flex align-items-center">
            <span class="fw-500 me-2">Learn More</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-7 order-lg-first">
        <div
          class="big-circle rounded-circle position-relative d-flex align-items-center justify-content-center ms-lg-5 wow fadeInLeft">
          <div
            class="inner-circle rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/logo_02.png"
              alt=""
              class="lazy-img" />
          </div>
          <!-- /.inner-circle -->
          <div
            class="brand-icon icon_01 rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/media_09.png"
              alt=""
              class="lazy-img" />
          </div>
          <div
            class="brand-icon icon_02 rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/media_10.png"
              alt=""
              class="lazy-img" />
          </div>
          <div
            class="brand-icon icon_03 rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/media_11.png"
              alt=""
              class="lazy-img" />
          </div>
          <div
            class="brand-icon icon_04 rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/media_12.png"
              alt=""
              class="lazy-img" />
          </div>
          <div
            class="brand-icon icon_05 rounded-circle d-flex align-items-center justify-content-center">
            <img
              src="assets/images/lazy.svg"
              data-src="https://html.creativegigstf.com/jobi/jobi/images/logo/media_13.png"
              alt=""
              class="lazy-img" />
          </div>
          <img
            src="assets/images/lazy.svg"
            data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_10.svg"
            alt=""
            class="lazy-img shapes shape_01" />
        </div>
        <!-- /.big-circle -->
      </div>
    </div>

    <div
      class="partner-logos pt-150 xl-pt-120 md-pt-80 sm-pt-40 pb-80 md-pb-40">
      <div class="partner-slider">
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_03.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_04.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_05.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_06.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_07.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_08.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="logo d-flex align-items-center">
            <img src="assets/images/logo/media_05.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- /.partner-logos -->
  </div>
</section>
<!-- /.text-feature-two -->

<!--
		=====================================================
			Blog Section One
		=====================================================
		-->
<section class="blog-section-one">
  <div class="container">
    <div class="position-relative">
      <div class="title-one mb-30 lg-mb-10">
        <h2>Jobi Guides</h2>
      </div>

      <div class="row gx-xxl-5">
        <div class="col-lg-4 col-md-6">
          <article class="blog-meta-one mt-35 wow fadeInUp">
            <figure class="post-img m0">
              <a href="blog-details.html" class="w-100 d-block"><img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/blog/blog_img_01.jpg"
                  alt=""
                  class="lazy-img w-100 tran4s" /></a>
            </figure>
            <div class="post-data mt-30 lg-mt-20">
              <ul class="tags style-none d-flex">
                <li><a href="#">Developer</a></li>
                <li><a href="#">Code</a></li>
              </ul>
              <a href="blog-details.html" class="mt-10 mb-10">
                <h4 class="tran3s blog-title">
                  Print, publishing qui visual layout mockups.
                </h4>
              </a>
              <div class="author">
                By <a href="#" class="text-dark fw-500">Rashed Kabir</a>
              </div>
            </div>
          </article>
          <!-- /.blog-meta-one -->
        </div>
        <div class="col-lg-4 col-md-6">
          <article
            class="blog-meta-one mt-35 wow fadeInUp"
            data-wow-delay="0.1s">
            <figure class="post-img m0">
              <a href="blog-details.html" class="w-100 d-block"><img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/blog/blog_img_02.jpg"
                  alt=""
                  class="lazy-img w-100 tran4s" /></a>
            </figure>
            <div class="post-data mt-30 lg-mt-20">
              <ul class="tags style-none d-flex">
                <li><a href="#">Design</a></li>
                <li><a href="#">Art</a></li>
              </ul>
              <a href="blog-details.html" class="mt-10 mb-10">
                <h4 class="tran3s blog-title">
                  Designer’s checklist for every UX/UI project.
                </h4>
              </a>
              <div class="author">
                By <a href="#" class="text-dark fw-500">Julie Margot</a>
              </div>
            </div>
          </article>
          <!-- /.blog-meta-one -->
        </div>
        <div class="col-lg-4 col-md-6 d-none d-lg-block">
          <article
            class="blog-meta-one mt-35 wow fadeInUp"
            data-wow-delay="0.19s">
            <figure class="post-img m0">
              <a href="blog-details.html" class="w-100 d-block"><img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/blog/blog_img_03.jpg"
                  alt=""
                  class="lazy-img w-100 tran4s" /></a>
            </figure>
            <div class="post-data mt-30 lg-mt-20">
              <ul class="tags style-none d-flex">
                <li><a href="#">Solution</a></li>
                <li><a href="#">Work</a></li>
              </ul>
              <a href="blog-details.html" class="mt-10 mb-10">
                <h4 class="tran3s blog-title">
                  Make more productive work flow in few steps.
                </h4>
              </a>
              <div class="author">
                By
                <a href="#" class="text-dark fw-500">Jubayer Al Hasan</a>
              </div>
            </div>
          </article>
          <!-- /.blog-meta-one -->
        </div>
      </div>

      <div class="text-center explore-btn sm-mt-30">
        <a href="blog-v1.html" class="btn-one">Explore More</a>
      </div>
    </div>
  </div>
</section>
<!-- /.blog-section-one -->

<!--
		=====================================================
			Fancy Banner One
		=====================================================
		-->
<section class="fancy-banner-one mt-150 xl-mt-120 lg-mt-100">
  <div class="container">
    <div
      class="bg-wrapper position-relative ps-4 pe-4 pt-55 wow fadeInUp">
      <div class="row">
        <div class="col-xxl-11 m-auto">
          <div class="row">
            <div class="col-xl-5 col-lg-6 order-lg-last">
              <div class="text-wrapper">
                <div class="title-two">
                  <h2 class="text-white">
                    Get your <br />
                    <span>Matched Jobs</span> in a few minutes.
                  </h2>
                </div>
                <p class="text-md mt-25 lg-mt-20 mb-45 lg-mb-30">
                  Find your dream job & earn from world leading brands.
                  Upload your CV now.
                </p>
                <form
                  action="#"
                  class="upload-btn position-relative d-flex align-items-center justify-content-center">
                  <img
                    src="assets/images/lazy.svg"
                    data-src="https://html.creativegigstf.com/jobi/jobi/images/icon/icon_11.svg"
                    alt=""
                    class="lazy-img" />
                  <span class="fw-500 ms-2 text-dark">Upload your CV</span>
                  <input type="file" id="uploadCV" name="uploadCV" />
                </form>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6 order-lg-first">
              <div class="img-meta md-mt-20 position-relative">
                <img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/assets/img_09.png"
                  alt=""
                  class="lazy-img m-auto" />
                <img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_12.svg"
                  alt=""
                  class="lazy-img shapes shape_01" />
                <img
                  src="assets/images/lazy.svg"
                  data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_13.svg"
                  alt=""
                  class="lazy-img shapes shape_02" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <img
        src="assets/images/lazy.svg"
        data-src="https://html.creativegigstf.com/jobi/jobi/images/shape/shape_14.svg"
        alt=""
        class="lazy-img shapes shape_03" />
    </div>
  </div>
  <!-- /.bg-wrapper -->
</section>
<!-- /.fancy-banner-one -->

<!--
		=====================================================
			Job Portal Intro
		=====================================================
		-->
<section class="job-portal-intro">
  <div class="container">
    <div
      class="wrapper bottom-border pt-100 lg-pt-80 md-pt-50 pb-65 md-pb-50">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="text-center text-lg-start">
            <h2>Most complete job portal.</h2>
            <p class="text-md m0 md-pb-20">
              Signup and start find your job or talents.
            </p>
          </div>
        </div>
        <div class="col-lg-5">
          <ul
            class="btn-group style-none d-flex flex-wrap justify-content-center justify-content-lg-end">
            <li class="me-2">
              <a href="job-list-v1.html" class="btn-three">Looking for job?</a>
            </li>
            <li class="ms-2">
              <a href="signup.html" class="btn-four">Post a job</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.job-portal-intro -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-dialog-centered">
    <div class="container">
      <div class="user-data-form modal-content">
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
        <div class="text-center">
          <h2>Hi, Welcome Back!</h2>
          <p>
            Still don't have an account? <a href="signup.html">Sign up</a>
          </p>
        </div>
        <div class="form-wrapper m-auto">
          <form action="#" class="mt-10">
            <div class="row">
              <div class="col-12">
                <div class="input-group-meta position-relative mb-25">
                  <label>Email*</label>
                  <input type="email" placeholder="rshdkabir@gmail.com" />
                </div>
              </div>
              <div class="col-12">
                <div class="input-group-meta position-relative mb-20">
                  <label>Password*</label>
                  <input
                    type="password"
                    placeholder="Enter Password"
                    class="pass_log_id" />
                  <span class="placeholder_icon"><span class="passVicon"><img
                        src="assets/images/icon/icon_60.svg"
                        alt="" /></span></span>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="agreement-checkbox d-flex justify-content-between align-items-center">
                  <div>
                    <input type="checkbox" id="remember" />
                    <label for="remember">Keep me logged in</label>
                  </div>
                  <a href="#">Forget Password?</a>
                </div>
                <!-- /.agreement-checkbox -->
              </div>
              <div class="col-12">
                <button class="btn-eleven fw-500 tran3s d-block mt-20">
                  Login
                </button>
              </div>
            </div>
          </form>
          <div class="d-flex align-items-center mt-30 mb-10">
            <div class="line"></div>
            <span class="pe-3 ps-3">OR</span>
            <div class="line"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a
                href="#"
                class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                <img src="assets/images/icon/google.png" alt="" />
                <span class="ps-2">Login with Google</span>
              </a>
            </div>
            <div class="col-md-6">
              <a
                href="#"
                class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                <img src="assets/images/icon/facebook.png" alt="" />
                <span class="ps-2">Login with Facebook</span>
              </a>
            </div>
          </div>
          <p class="text-center mt-10">
            Don't have an account?
            <a href="signup.html" class="fw-500">Sign up</a>
          </p>
        </div>
        <!-- /.form-wrapper -->
      </div>
      <!-- /.user-data-form -->
    </div>
  </div>
</div>

<?php require "includes/footer.php" ?>