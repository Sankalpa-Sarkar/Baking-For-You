<?php
 /* Template Name: InsertRecipe */?>
<?php get_header(); ?>

      <h3>Enter the Ingredients</h3>
      <br><br>
<div class="main-content" id="main-content">
<div class="main-content-inner">
<form method="POST">
			Enter Ingredient_1: <input type="text" name ="ing1">
			<br><br>
			Enter Ingredient_2: <input type="text" name ="ing2">
			<br><br>
			Enter Ingredient_3: <input type="text" name ="ing3">
			<br><br>
			Enter Ingredient_4: <input type="text" name ="ing4">
			<br><br>
			Enter Ingredient_5: <input type="text" name ="ing5">
			<br><br>
			Enter Ingredient_6: <input type="text" name ="ing6">
			<br><br>
			<input type="submit" value ="Submit" name="insert">
			<br><br>	
  </form>
<?php
if(isset($_POST['insert']))
{

    $i1=$_POST['ing1'];
    $i2=$_POST['ing2'];
    $i3=$_POST['ing3'];
    $i4=$_POST['ing4'];
    $i5=$_POST['ing5'];
    $i6=$_POST['ing6'];
    
    global $wpdb;
    $sql=$wpdb->insert("checkrecipe",array("ing1"=>$i1,"ing2"=>$i2, "ing3"=>$i3, "ing4"=>$i4, "ing5"=>$i5, "ing6"=>$i6));
    if ($sql==true)
    {
        echo "<script>alert('data inserted')</script>";
    }
    else
    {
        echo "<script>alert('data is not inserted')</script>";
    }
  }
?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_bakery_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_bakery_slider_hide_show',true) != '') { ?>

  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php $slider_page = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'vw_bakery_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $slider_page[] = $mod;
          }
        }
        if( !empty($slider_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $slider_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>     
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <div class="inner-carousel-conetnt">
                  <h2><?php the_title(); ?></h2>
                  <img class="border-width" src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/assets/images/titleline.png') ); ?>" alt="">
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_bakery_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_bakery_slider_excerpt_number','30')))); ?></p>
                  <a class="more-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','vw-bakery'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-bakery' );?></span></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
      <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Previous','vw-bakery' );?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        <span class="screen-reader-text"><?php esc_attr_e( 'Next','vw-bakery' );?></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>

  <?php } ?>

  <?php do_action( 'vw_bakery_after_slider' ); ?>

  <?php if( get_theme_mod( 'vw_bakery_opening_text') != '' || get_theme_mod( 'vw_bakery_opening_time' )!= '' || get_theme_mod( 'vw_bakery_call_us')!= '' || get_theme_mod( 'vw_bakery_call_no' )!= '' || get_theme_mod( 'vw_bakery_email_us' )!= '' || get_theme_mod( 'vw_bakery_email_address' )!= '' || get_theme_mod( 'vw_bakery_contact_link' )!= '' ) { ?>

  <section id="contact-us">
    <div class="container">
      <div class="row main-box">
        <div class="col-lg-2 col-md-6 time">
          <?php if ( get_theme_mod('vw_bakery_opening_text','') != "" ) {?>
            <i class="far fa-clock"></i><span><?php echo esc_html( get_theme_mod('vw_bakery_opening_text','') ); ?></span>
          <?php }?>
          <?php if ( get_theme_mod('vw_bakery_opening_time','') != "" ) {?>
            <p><?php echo esc_html( get_theme_mod('vw_bakery_opening_time','') ); ?></p>
          <?php }?>
        </div>
        <div class="col-lg-4 col-md-6 mid-contact">
          <?php if ( get_theme_mod('vw_bakery_call_us','') != "" ) {?>
            <span><?php echo esc_html( get_theme_mod('vw_bakery_call_us','') ); ?></span>
          <?php }?>
          <div class="row">
            <?php if ( get_theme_mod('vw_bakery_call_no','') != "" ) {?>
              <div class="col-lg-2 col-md-2 col-3 mid-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="col-lg-10 col-md-10 col-9">
                <p><?php echo esc_html( get_theme_mod('vw_bakery_call_no','') ); ?></p>            
              </div>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mid-contact">
          <?php if ( get_theme_mod('vw_bakery_email_us','') != "" ) {?>
            <span><?php echo esc_html( get_theme_mod('vw_bakery_email_us','') ); ?></span>
          <?php }?>
          <div class="row">
            <?php if ( get_theme_mod('vw_bakery_email_address','') != "" ) {?>
              <div class="col-lg-2 col-md-2 col-3 mid-icon">
                <i class="far fa-envelope"></i>
              </div>
              <div class="col-lg-10 col-md-10 col-9">
                <p><?php echo esc_html( get_theme_mod('vw_bakery_email_address','') ); ?></p>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <?php if ( get_theme_mod('vw_bakery_contact_link','') != "" ) {?>
            <div class="contact-btn">
              <a href="<?php echo esc_html( get_theme_mod('vw_bakery_contact_link','') ); ?>"><?php esc_html_e('Contact us','vw-bakery'); ?><span class="screen-reader-text"><?php esc_html_e( 'Contact us','vw-bakery' );?></span></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <?php }?>

  <section id="bakery-product">
    <div class="container">
      <?php $bakery_product_page = array();
        $mod = absint( get_theme_mod( 'vw_bakery_product_settings','vw-bakery'));
        if ( 'page-none-selected' != $mod ) {
          $bakery_product_page[] = $mod;
        }
        if( !empty($bakery_product_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $bakery_product_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <h3><?php the_title(); ?></h3>
              <img class="product-border" src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/assets/images/titleline.png') ); ?>" alt="border-image">
              <?php the_content(); ?>
            <?php $count++; endwhile; ?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;
        wp_reset_postdata()
      ?>
    </div>
  </section>

  <?php do_action( 'vw_bakery_after_bakery_product' ); ?>
  

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
    