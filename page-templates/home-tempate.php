<?php
/*
Template Name: home page
*/
get_header();
?>

<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img class="innerSlideImg" src="<?php bloginfo('template_directory') ?>/img/hero.png" alt="">
      <duv class="mainView">
      <div class="title" data-swiper-parallax="-300"><span>درمان دیابت</span> فقط با <br>دمنوش های آرشیدابست</div>
      <div class="subtitle" data-swiper-parallax="-200">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</div>
      <div class="text sliderButton" data-swiper-parallax="-100">
        <a class="generalButton noArrowButton" href="#">ثبت سفارش</a>
        <a class="generalButton outlineButton noArrowButton" href="#">اطلاعات بیشتر</a>
      </div>
      </duv>
    </div>
    <div class="swiper-slide">
      <img class="innerSlideImg" src="<?php bloginfo('template_directory') ?>/img/hero.png" alt="">
      <duv class="mainView">
      <div class="title" data-swiper-parallax="-300"><span>درمان دیابت</span> فقط با <br>دمنوش های آرشیدابست</div>
      <div class="subtitle" data-swiper-parallax="-200">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</div>
      <div class="text sliderButton" data-swiper-parallax="-100">
        <a class="generalButton noArrowButton" href="#">ثبت سفارش</a>
        <a class="generalButton outlineButton noArrowButton" href="#">اطلاعات بیشتر</a>
      </div>
      </duv>
    </div>
    <div class="swiper-slide">
      <img class="innerSlideImg" src="<?php bloginfo('template_directory') ?>/img/hero.png" alt="">
      <duv class="mainView">
      <div class="title" data-swiper-parallax="-300"><span>درمان دیابت</span> فقط با <br>دمنوش های آرشیدابست</div>
      <div class="subtitle" data-swiper-parallax="-200">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</div>
      <div class="text sliderButton" data-swiper-parallax="-100">
        <a class="generalButton noArrowButton" href="#">ثبت سفارش</a>
        <a class="generalButton outlineButton noArrowButton" href="#">اطلاعات بیشتر</a>
      </div>
      </duv>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<div class="productCatContainer sectionPadding">
  <div class="productCat mainView">
    <div class="generalHeading highMargined">
        <h2>دسته بندی ها</h2>
    </div>
    <div class="innerProductCat">
      <a href="#" class="homeProductCatCard">
        <img src="<?php bloginfo('template_directory') ?>/img/Product.png" alt="">
        <h3>دمنوش گیاهی</h3>
      </a>
      <a href="#" class="homeProductCatCard">
        <img src="<?php bloginfo('template_directory') ?>/img/Product.png" alt="">
        <h3>دمنوش گیاهی</h3>
      </a>
      <a href="#" class="homeProductCatCard">
        <img src="<?php bloginfo('template_directory') ?>/img/Product.png" alt="">
        <h3>دمنوش گیاهی</h3>
      </a>
    </div>
  </div>
</div>
<div class="homeCtaBannerContainer sectionPadding">
  <div class="homeCtaBanner mainView">
    <a href="#">
      <img src="<?php bloginfo('template_directory') ?>/img/Baner.png" alt="">
    </a>
  </div>
</div>
<div class="homePopularProductContainer sectionPadding">
  <div class="homePopularProduct mainView">
    <div class="generalHeading highMargined">
        <h2>محبوب ترین محصولات</h2>
    </div>
    <div class="popularProductCatPart">
      <span class="generalCatsItem activeCat">دمنوش های گیاهی</span>
      <span class="generalCatsItem">محصولات بهداشتی</span>
      <span class="generalCatsItem">محصولات پزشکی</span>
    </div>
    <div class="sectionProductContainer Swiper homeSwiper">
      <ul class="swiper-wrapper">
    <?php  
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 10,
        );

        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            
            wc_get_template_part( 'content', 'sproduct' );
        endwhile;

        wp_reset_query();
    ?>
  </ul>
  <div class="swiper-pagination"></div>

    </div>
  </div>
</div>
<?php get_footer(); ?>