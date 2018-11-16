<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="http://localhost:81/wordpress/wp-content/themes/sydney/funcs.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="favicon.ico">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
		<?php if ( get_theme_mod('site_favicon') ) : ?>
			<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
		<?php endif; ?>
	<?php endif; ?>
	<?php wp_head(); ?>
	<script>

		window.fbAsyncInit = function() {
			// ■■■■■■ 초기화 !! ■■■■
	    FB.init({
				// 여기서는 객체를 함수의 인자로 전달 !
	      appId      : '542365036224572',
	      cookie     : true,  // enable cookies to allow the server to access
	                          // the session
	      xfbml      : true,  // parse social plugins on this page
	      version    : 'v3.2' // use graph api version 3.2
				// 구글에서 facebook API change log 검색해서 버전 체크
	    });

	    // Now that we've initialized the JavaScript SDK, we call
	    // FB.getLoginStatus().  This function gets the state of the
	    // person visiting this page and can return one of three states to
	    // the callback you provide.  They can be:
	    //
	    // 1. Logged into your app ('connected')
	    // 2. Logged into Facebook, but not your app ('not_authorized')
	    // 3. Not logged into Facebook and can't tell if they are logged into
	    //    your app or not.
	    //
	    // These three cases are handled in the callback function.

			// 로그인 되어있는지 아닌지 상태를 체크 !

	    FB.getLoginStatus(checkLoginStatus);
	  };
			// ■■■■■■■ 페이스북 로그인 SDK 로드 Load the SDK asynchronously
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>



<!-- 페이스북 공유키트로 워드프레스에서 SUPER SOCILIZER 사용할거면 없어애도됨 다만 페이스북꺼만 따로 코드로할꺼면 필요
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		// 페이스북 공유하기 키트
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.2&appId=165661117553584&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
-->

</head>

<body <?php body_class(); ?>>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12" style="display: grid; grid-template-columns: 1fr 2fr 1fr">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<div></div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<div style="margin: 10px; margin-bottom: 20px; text-align: right">
							<a href= "https://www.instagram.com/_football_dor/?hl=ko">
								<img src = "http://localhost:81/wordpress/wp-content/uploads/icon/instagram_black.png" style="max-width : 20%; margin-right: 5px">
							</a>
							<!-- 이메일
							<a href = "mailto:bigear.news@example.com">
								<img src = "http://localhost:81/wordpress/wp-content/uploads/icon/gmail_black.png" style="max-width : 20%">
							</a>
						-->
					</div>

					<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		        <?php endif; ?>
				</div>

				<!-- 원래 네비메뉴 위치하던곳 -->

				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="col-md-8 col-sm-4 col-xs-12">
		<div class="navi_wrap">
			<div class="btn-menu"></div>
			<nav id="mainnav" class="mainnav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</div>

	<?php do_action('sydney_after_header'); ?>
	<div class="clear"> </div>



	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">
