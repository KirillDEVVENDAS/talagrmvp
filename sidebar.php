<?php


if ( ! is_active_sidebar( 'sidebar_widgets' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar_widgets' ); ?>
</aside><!-- #secondary -->
