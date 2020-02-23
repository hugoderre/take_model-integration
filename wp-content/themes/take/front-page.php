<?php 
get_header();
$header = get_field('header');
$section1 = get_field('section_1');

for($i = 1; $i <= 10; $i++) {
    $section_2_[$i] = get_field("section_2_$i");
}

$section3 = get_field('section_3');
$section4 = get_field('section_4');
$section5 = get_field('section_5');
?>

<header>
    <div class="container">
        <div class="header__logo-container d-flex ">
            <div class="logo-container__svg-logo"></div>
            <h2 class="logo-container__title-logo">take</h2>
        </div>
        <div class="row">
            <div class="header__main-block col-6" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="header__title"><?= $header['main_title']; ?></h1>
                <p class="header__subtitle"><?= $header['description'] ?></p>
            </div>
            <div class="col-6" data-aos="fade-down-right" data-aos-duration="2000"><img
                    src="<?php bloginfo('template_directory') ?>/img/iphone.png" alt=""></div>
        </div>
    </div>

</header>

<section class="section1 container" data-aos="fade-down" data-aos-easing="linear">
    <h2 class="col-12"><?= $section1['title_section_1']; ?></h2>
    <div class="row">
        <article class="col-6"><?= $section1['paragraph_1']; ?></article>
    </div>
    <div class="row">
        <article class="col-6"><?= $section1['paragraph_2']; ?><br /><br /><?= $section1['paragraph_3']; ?></article>
        <article class="col-6"><?= $section1['paragraph_4']; ?><br /><br /><?= $section1['paragraph_5']; ?></article>
    </div>
</section>

<section class="section2 container" data-aos="fade-zoom-in" data-aos-duration="2000">

    <div class="slider">
        <div class="section2__slide1 slide">
            <div class="row">
                <article class="col-md-4 col-sm-6 col-6">
                    <h3><?= $section_2_[1]['title']; ?></h3>
                    <p><?= $section_2_[1]['description']; ?></p>
                    <a href="<?= $section_2_[1]['link']['url']; ?>"><?= $section_2_[1]['link']['title']; ?> →</a>
                </article>
                <article class="col-md-4 col-sm-6 col-6">
                    <h3><?= $section_2_[2]['title']; ?></h3>
                    <p><?= $section_2_[2]['description']; ?></p>
                    <a href="<?= $section_2_[2]['link']['url']; ?>"><?= $section_2_[2]['link']['title']; ?> →</a>
                </article>
                <article class="col-md-4 col-12">
                    <h3><?= $section_2_[3]['title']; ?></h3>
                    <p><?= $section_2_[3]['description']; ?></p>
                    <a href="<?= $section_2_[3]['link']['url']; ?>"><?= $section_2_[3]['link']['title']; ?> →</a>
                </article>
            </div>
            <div class="row">
                <article class="col-sm-8 col-7">
                    <h3><?= $section_2_[4]['title']; ?></h3>
                    <p><?= $section_2_[4]['description']; ?></p>
                    <a href="<?= $section_2_[4]['link']['url']; ?>"><?= $section_2_[4]['link']['title']; ?> →</a>
                </article>
                <article class="col-sm-4 col-5">
                    <h3><?= $section_2_[5]['title']; ?></h3>
                    <p><?= $section_2_[5]['description']; ?></p>
                    <a href="<?= $section_2_[5]['link']['url']; ?>"><?= $section_2_[5]['link']['title']; ?> →</a>
                </article>
            </div>
        </div>

        <div class="section2__slide2 slide">
            <div class="row">
                <article class="col-md-4 col-sm-6 col-6">
                    <h3><?= $section_2_[6]['title']; ?></h3>
                    <p><?= $section_2_[6]['description']; ?></p>
                    <a href="<?= $section_2_[6]['link']['url']; ?>"><?= $section_2_[6]['link']['title']; ?> →</a>
                </article>
                <article class="col-md-4 col-sm-6 col-6">
                    <h3><?= $section_2_[7]['title']; ?></h3>
                    <p><?= $section_2_[7]['description']; ?></p>
                    <a href="<?= $section_2_[7]['link']['url']; ?>"><?= $section_2_[7]['link']['title']; ?> →</a>
                </article>
                <article class="col-md-4 col-12">
                    <h3><?= $section_2_[8]['title']; ?></h3>
                    <p><?= $section_2_[8]['description']; ?></p>
                    <a href="<?= $section_2_[8]['link']['url']; ?>"><?= $section_2_[8]['link']['title']; ?> →</a>
                </article>
            </div>
            <div class="row">
                <article class="col-sm-8 col-7">
                    <h3><?= $section_2_[9]['title']; ?></h3>
                    <p><?= $section_2_[9]['description']; ?></p>
                    <a href="<?= $section_2_[9]['link']['url']; ?>"><?= $section_2_[9]['link']['title']; ?> →</a>
                </article>
                <article class="col-sm-4 col-5">
                    <h3><?= $section_2_[10]['title']; ?></h3>
                    <p><?= $section_2_[10]['description']; ?></p>
                    <a href="<?= $section_2_[10]['link']['url']; ?>"><?= $section_2_[10]['link']['title']; ?> →</a>
                </article>
            </div>
        </div>
    </div>


</section>

<section class="section3 container">

    <div class="row">
        <h2 class="col-12" data-aos="fade-down" data-aos-easing="linear"><?= $section3['title']; ?></h2>
        <?php $d = 200; for($i = 1; $i <= 4; $i++) : ?>
        <article class="col-lg-3 col-6" data-aos="fade-down" data-aos-delay="<?= $d; ?>">
            <h5><?= $section3["$i"]['title']; ?></h5>
            <p><?= $section3["$i"]['description']; ?></p>
        </article>
        <?php $d += 200; endfor; ?>
    </div>
</section>

<section class="section4">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
        <h2><?= $section4['title']; ?></h2>
        <p><?= $section4['description']; ?></p>
        <a href="<?= $section4['link']['url']; ?>"><?= $section4['link']['title']; ?> →</a>
    </div>
</section>

<section class="section5">
    <div class="container">
        <div class="row">
            <h2 class="col-12" data-aos="fade-down" data-aos-easing="linear"><?= $section5['title']; ?></h2>
            <?php $d = 200; for($i = 1; $i <= 3; $i++) : ?>
            <article class="col-md-4 col-12" data-aos="fade-down" data-aos-delay="<?= $d; ?>">
                <h5><?= $section5["$i"]['title']; ?></h5>
                <p><?= $section5["$i"]['description']; ?></p>
            </article>
            <?php $d += 200; endfor; ?>
        </div>
    </div>
</section>

<section class="section6">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 section6__princing-box" data-aos="zoom-in-down">
                <span class="section6__badge">Legacy</span>
                <h3>Go it solo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                <a href="#" class="btn btn-buy">Buy now $9</a>
                <div class="d-flex">
                    <div class="apple"></div>
                    <div class="windows"></div>
                </div>
            </div>
            <div class="col-md-6 col-12 section6__princing-box" data-aos="zoom-in-down">
                <span class="section6__badge">Most popular</span>
                <h3>Team Plan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                <a href="#" class="btn btn-buy">Buy now $18</a>
                <div class="d-flex">
                    <div class="apple"></div>
                    <div class="windows"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 footer__section">
                <h5>Get in touch</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-md-5 offset-md-1 col-12 footer__section">
                <h5>Stay in touch</h5>
                <form action="#" method="POST">
                    <div class="d-flex footer__input-container">
                        <input type="email" name="email" id="email" required>
                        <button type="submit" class="btn"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="18px">
                                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                    d="M23.217,-0.000 L6.522,16.457 L0.783,10.800 L-0.000,11.571 L6.522,18.000 L24.000,0.771 L23.217,-0.000 Z" />
                            </svg></button>
                    </div>
                    <p class="footer__sub-input">We don’t send spam. Actually, who are we kiding, we’ll spam
                        the shit out of you’r inbox</p>
                </form>
            </div>
            <div class="col-lg-6 col-12 footer__links-container">
                <div class="row">
                    <div class="col-4">
                        <h5>Resources</h5>
                        <ul>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Pricing and Plans</a></li>
                            <li><a href="#">New Features</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>Features</h5>
                        <ul>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Pricing and Plans</a></li>
                            <li><a href="#">New Features</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>How To's</h5>
                        <ul>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Pricing and Plans</a></li>
                            <li><a href="#">New Features</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12 mt-5">
                <p>
                    Thanks to Blaz for his model :)</p>
                <p>His website : <a
                        href="https://blazrobar.com/free-psd-website-templates/take-a-free-mobile-app-landing-page-psd-template/"
                        class="credit-link">www.blazrobar.com</a></p>
                <p>Integrator : Hugo Derré</p>
            </div>
        </div>
    </div>
</footer>



<?php get_footer(); ?>
</div>

</div>