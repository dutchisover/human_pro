<?php get_header(); ?>

<main class="main page404 page__main">
	<div class="inner">
		<section class="page404_section">
			<h2 class="page404_title page__title">
				404 Not Found
				<span>お探しのページが見つかりません。</span>
			</h2>

			<div class="page__content">
				<p class="section_text text page404_text">ページが「移動」もしくは「削除」されたか「一時的にアクセスできない」可能性があります。<br>恐れ入りますが、再度トップページからアクセスをお願いいたします。</p>

				<div class="button_area">
					<div class="button">
						<a href="<?= home_url(); ?>" class="button_link">トップページへ戻る</a>
					</div>
				</div>

			</div>

		</section>
	</div>
</main>


<?php get_footer(); ?>
