<?php

/**
 * Plugin Name: Elementor Addon By Kamrul Hasan
 * Description: Simple widget for sourceit project.
 * Version:     1.0.0
 * Author:      Kamrul Hasan
 * Author URI:  www.bengalcoder.com
 * Text Domain: sourceit
 */

function widget_styles()
{
  // // Enqueue the styles from the original code
  // wp_enqueue_style('template-style', get_template_directory_uri() . '/asset/css/style.css');
  // wp_enqueue_style('template-responsive', get_template_directory_uri() . '/asset/css/responsive.css');
  // wp_enqueue_style('template-copilot', get_template_directory_uri() . '/asset/css/copilot.css');
  // wp_enqueue_style('template-preloader', get_template_directory_uri() . '/asset/css/preloader.css');
  // wp_enqueue_style('template-sticky-banner', get_template_directory_uri() . '/asset/css/sticky-banner.css');
  // wp_enqueue_style('template-job-listings', get_template_directory_uri() . '/asset/css/job-listings.css');

  // // Enqueue the scripts from the original code
  // wp_enqueue_script('jquery', get_template_directory_uri() . '/asset/js/jquery.js', array('jquery'), '', true);
  // wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/asset/js/bootstrap.bundle.min.js', array('jquery'), '', true);
  // wp_enqueue_script('isotope', get_template_directory_uri() . '/asset/js/isotope.js', array('jquery'), '', true);
  // wp_enqueue_script('swiper', get_template_directory_uri() . '/asset/js/swiper.min.js', array('jquery'), '', true);
  // wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/asset/js/owl.carousel.min.js', array('jquery'), '', true);
  // wp_enqueue_script('theme-js', get_template_directory_uri() . '/asset/js/theme.js', array('jquery'), '', true);

  // // Inline script
  // wp_add_inline_script('theme-js', '
  // 	jQuery(function($) {
  // 		$(".banner__cross").on("click", function() {
  // 			$(this).parent().slideUp();
  // 		});
  // 	});
  // ');


  // Enqueue the styles from the original code
  wp_enqueue_style('template-style', plugins_url('/asset/css/style.css', __FILE__));
  wp_enqueue_style('template-responsive', plugins_url('/asset/css/responsive.css', __FILE__));
  wp_enqueue_style('template-copilot', plugins_url('/asset/css/copilot.css', __FILE__));
  wp_enqueue_style('template-preloader', plugins_url('/asset/css/preloader.css', __FILE__));
  wp_enqueue_style('template-sticky-banner', plugins_url('/asset/css/sticky-banner.css', __FILE__));
  wp_enqueue_style('template-job-listings', plugins_url('/asset/css/job-listings.css', __FILE__));

  // Enqueue the scripts from the original code
  wp_enqueue_script('jquery', plugins_url('/asset/js/jquery.js', __FILE__), array('jquery'), '', true);
  wp_enqueue_script('bootstrap-bundle', plugins_url('/asset/js/bootstrap.bundle.min.js', __FILE__), array('jquery'), '', true);
  wp_enqueue_script('isotope', plugins_url('/asset/js/isotope.js', __FILE__), array('jquery'), '', true);
  wp_enqueue_script('swiper', plugins_url('/asset/js/swiper.min.js', __FILE__), array('jquery'), '', true);
  wp_enqueue_script('owl-carousel', plugins_url('/asset/js/owl.carousel.min.js', __FILE__), array('jquery'), '', true);
  wp_enqueue_script('theme-js', plugins_url('/asset/js/theme.js', __FILE__), array('jquery'), '', true);

  // Inline script
  wp_add_inline_script('theme-js', '
    jQuery(function($) {
        $(".banner__cross").on("click", function() {
            $(this).parent().slideUp();
        });
    });
');
}

add_action('elementor/frontend/after_enqueue_styles', 'widget_styles');










// the function for register wodgets 

function register_hello_world_widget($widgets_manager)
{
  require_once(__DIR__ . '/widgets/banner.php');
  require_once(__DIR__ . '/widgets/main_content.php');


  $widgets_manager->register(new \Banner());
  $widgets_manager->register(new \Main_Content());
}
add_action('elementor/widgets/register', 'register_hello_world_widget');





// register new categories                
function add_elementor_widget_categories($elements_manager)
{


  $elements_manager->add_category(
    'custom-theme-agency',
    [
      'title' => esc_html__('Theme Section', 'textdomain'),
      'icon' => 'fa fa-plug',
    ]
  );

  $elements_manager->add_category(
    'custom-theme-category',
    [
      'title' => esc_html__('Custom Theme', 'textdomain'),
      'icon' => 'fa fa-plug',
    ]
  );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');



function add_code_to_footer()
{

?>




  <style>
    .custom-model-main-kh {
      text-align: center;
      overflow: hidden;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      /* z-index: 1050; */
      -webkit-overflow-scrolling: touch;
      outline: 0;
      opacity: 0;
      -webkit-transition: opacity 0.15s linear, z-index 0.15;
      -o-transition: opacity 0.15s linear, z-index 0.15;
      transition: opacity 0.15s linear, z-index 0.15;
      z-index: -1;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .model-open-kh {
      z-index: 99999;
      opacity: 1;
      overflow: hidden;
    }

    .custom-model-inner {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform 0.3s ease-out;
      -o-transition: -o-transform 0.3s ease-out;
      transition: -webkit-transform 0.3s ease-out;
      -o-transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
      display: inline-block;
      vertical-align: middle;
      width: 600px;
      margin: 30px auto;
      max-width: 97%;
    }

    .custom-model-wrap {
      display: block;
      width: 100%;
      position: relative;
      background-color: #fff;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
      background-clip: padding-box;
      outline: 0;
      text-align: left;
      padding: 20px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      max-height: calc(100vh - 70px);
      overflow-y: auto;
    }

    .model-open-kh .custom-model-inner {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      transform: translate(0, 0);
      position: relative;
      z-index: 999;
    }

    .model-open-kh .bg-overlay {
      background: rgba(0, 0, 0, 0.6);
      z-index: 99;
    }

    .bg-overlay {
      /* background: rgba(0, 0, 0, 0); */
      background: rgba(255,255,255,0);
      height: 100vh;
      width: 100%;
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      -webkit-transition: background 0.15s linear;
      -o-transition: background 0.15s linear;
      transition: background 0.15s linear;
    }

    .close-btn {
      position: absolute;
      right: 0;
      top: 0;

      cursor: pointer;
      z-index: 99;
      font-size: 30px;
      color: #32363b;
    }



    @media screen and (min-width:800px) {
      .custom-model-main-kh:before {
        content: "";
        display: inline-block;
        height: auto;
        vertical-align: middle;
        margin-right: -0px;
        height: 100%;
      }
    }

    @media screen and (max-width:799px) {
      .custom-model-inner {
        margin-top: 45px;
      }
    }





    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');

    /* body {
      font-family: 'Poppins', sans-serif;
    } */

    .job-listing {
      /* background-color: #f6f4f4; */
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .main-content {
      background-color: white;
    }

    .job-image {
      text-align: center;
      /* margin-bottom: 20px; */
    }


    .job-image img {
      display: inline-block;
      width: 100%;
      height: 350px !important;
    }


    .job-listing {
      padding-left: 40px;
      padding-right: 40px;
    }

    .job-details {
      display: flex;
      justify-content: space-between;
    }

    .job-title,
    .job-salary {
      font-size: 16px;
      font-weight: bold;
      line-height: 22px;
      color: rgb(17, 17, 17);
    }

    .job-buttons {
      display: flex;
      margin-top: 10px;
      justify-content: space-around;

    }

    .apply-button-kh,
    .learn-more-button-kh {
      background-color: #11c12e;
      color: white;
      border-radius: 24px;
      border-color: rgba(255, 255, 255, 0);
      width: 100%;
      font-size: 15px;
      font-weight: bold;
    }

    .apply-button-kh {
      margin-right: 10px;
    }

    .learn-more-button-kh {
      margin-left: 10px;
    }

    a.apply-button-kh {
      text-align: center;
    }


    a.apply-button-kh:hover {
      color: white !important;
    }

    .job-full-desc {
      margin-top: 10px;
    }
  </style>

  <script>
    jQuery(document).ready(function($) {
      // alert('jeeee');
      $(".my-model-kh").on('click', function() {


        // Get the clicked job data
        var jobTitle = $(this).closest('.job-card-kh').find('.job-title').text();
        var jobSalary = $(this).closest('.job-card-kh').find('.job-salary').text();
        var jobLocation = $(this).closest('.job-card-kh').find('.job-location').text();
        var jobImageSrc = $(this).closest('.job-card-kh').find('.job-image img').attr('src');

        var jobFullDesc = $(this).closest('.job-card-kh').find('.job-full-desc').html(); // Change text() to html()

        // Populate the modal with dynamic data
        $(".custom-model-main-kh .job-title").text(jobTitle);
        $(".custom-model-main-kh .job-salary").text(jobSalary);
        $(".custom-model-main-kh .job-location").text(jobLocation);
        $(".custom-model-main-kh .job-image img").attr('src', jobImageSrc);

        $(".custom-model-main-kh .job-full-desc").html(jobFullDesc); // Change text() to html()




        $(".custom-model-main-kh").addClass('model-open-kh');
      });
      $(".close-btn, .bg-overlay").click(function() {
        $(".custom-model-main-kh").removeClass('model-open-kh');
      });
    });
  </script>



<?php

}
add_action('wp_footer', 'add_code_to_footer');
