<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<main class="main">
	<h2 class=" page__title"><?php the_title(); ?></h2>

	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt;
			<span class="breadcrumb__current"><?php the_title(); ?></span>
		</div>
	</div>
	<!-- /.breadcrumb -->

	<?php if (is_page(array('contact', 'app'))) { ?>
		<!-- フォーム -->
		<div class="page-form">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			endif;
			?>
		</div>
	<?php
	} else {
		echo '<div class="page-' . esc_attr($slug) . '">';
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;
		echo '</div>';
	}
	?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
