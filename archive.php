<?php get_header(); ?>

<main class="main page__main">
	<h1 class="page__title"><?php post_type_archive_title(); ?></h1>

	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current"><?php post_type_archive_title(); ?></span>
		</div>

		<!-- /.breadcrumb__inner -->
	</div>
	<!-- /.breadcrumb -->

	<section class="notice">
		<div class="notice__inner">

			<ul class="notice__list">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'news',
					'posts_per_page' => 12,
					'paged' => $paged
				);
				$news_query = new WP_Query($args);
				if ($news_query->have_posts()) :
					while ($news_query->have_posts()) : $news_query->the_post(); ?>
						<li class="notice__item">
							<a href="<?php the_permalink(); ?>">
								<p class="notice__date"><?php the_time('Y.m.d'); ?></p>
								<p class="notice__text"><?php the_title(); ?></p>
							</a>
						</li>
						<!-- /.notice__item -->
					<?php endwhile;
					wp_reset_postdata();
				else : ?>
					<p>お知らせはありません。</p>
				<?php endif; ?>
			</ul>
			<!-- /.notice__list -->

			<div class="pagination">
				<?php custom_pagination($news_query->max_num_pages, "", $paged); ?>
			</div>
			<!-- /.pagination -->

		</div>
		<!-- /.notice__inner -->

	</section>
	<!-- /.notice -->

</main>
<!-- /.main -->

<?php get_footer(); ?>
