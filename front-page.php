<?php get_header(); ?>

<main>
	<section class="hero">
		<div class="hero__inner">
			<h1 class="hero__title">
				<span class="fade-in-text hero__title-line-01" data-delay="0" data-speed="1300">職業技能の</span><br>
				<span class="fade-in-text hero__title-line-02" data-delay="700" data-speed="1300">評価・承認を通して</span><br>
				<span class="fade-in-text hero__title-line-03 sp-none" data-delay="1500" data-speed="1300">豊かな社会を実現する。</span>
				<span class="fade-in-text hero__title-line-03 pc-none" data-delay="1500" data-speed="1300">豊かな社会を</span><br>
				<span class="fade-in-text hero__title-line-04 pc-none" data-delay="2200" data-speed="1300">実現する。</span>
			</h1>
			<p class="hero__subtitle">Skill × Education = Enriched Society</p>
			<div class="hero__button">
				<a href="<?php home_url(); ?>/app" class="button">PRO認定の申請</a>
			</div>
		</div><!-- /.hero__inner -->

		<div class="hero__logo">
			<img src="<?= get_template_directory_uri(); ?>/assets/image/text_mv-top.svg" alt="PRO" width="1078" height="352">
		</div>

		<div class="hero__bg"></div>
	</section><!-- /.hero -->

	<section class="news section">
		<div class="section__line news__line"></div>

		<div class="news__info">
			<h2 class="news__title section__title">NEWS</h2>
			<a href="<?php home_url(); ?>/news" class="news__more">一覧を見る</a>
		</div>

		<?php
		$args = array(
			'post_type'      => 'news',
			'posts_per_page' => 3,
			'orderby'        => 'menu_order',
			'order'          => 'ASC'
		);
		$news_query = new WP_Query($args);

		if ($news_query->have_posts()) :
		?>
			<div class="news__list">
				<?php
				while ($news_query->have_posts()) : $news_query->the_post();
				?>

					<article class="news__item">
						<a href="<?php the_permalink(); ?>" class="news__link">
							<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="news__date"><?php echo get_the_date('Y.m.d'); ?></time>
							<p class="news__text"><?php the_title(); ?></p>
						</a>
					</article>

				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		<?php
		else :
		?>
			<div class="news__list">
				<article class="news__item">
					<p class="news__text">お知らせはありません</p>
				</article>
			</div>
		<?php
		endif;
		?>
		<!-- /.news__list -->
	</section><!-- /.news -->

	<section class="about section">
		<div class="section__line about__line">
			<picture>
				<source media=" (max-width:768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/line_about-top_sp.svg">
				<img src="<?= get_template_directory_uri(); ?>/assets/image/line_about-top.svg" alt="" class="section__line-image" width="1400" height="638">
			</picture>
		</div>

		<h2 class="about__title section__title">ABOUT</h2>
		<p class="about__subtitle">PROは、”教育”で<br class="pc-none">豊かな社会を実現します。</p>
		<p class="about__text">PRO（職業技能専門教育研究機構）は、職業技能や専門教育の調査、研究、人材の育成、教育プログラムの認定等を通じて、学習者の職業能力の向上と雇用機会の創出を目指し、広く公益に貢献することを目的に活動を行っています。</p>

		<div class="about__inner">
			<div class="about__info">
				<h3 class="top-section__title">PRO認定とは？</h3>
				<p class="top-section__text">PROは、学習者の技能習得と労働環境のバランスを安定させるために、第三者機関が提供する教育プログラムの評価ガイドラインを策定し、審査・認定を行っています。これにより、質の高い教育を提供し、学習者が必要な技能を身につけることを支援しています。</p>
				<a href="<?php home_url(); ?>/examination" class="about__button button--primary">審査について</a>
			</div>

			<div class="about__illust">
				<picture>
					<source media=" (max-width:768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/illust_about_sp.svg">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/illust_about.svg" alt="【技能取得】・時代性のある教育プログラムである　・適切なカリキュラムと教材が提供されている　・評価とフィードバック　【キャリア開発】・適切な学習サポート　・キャリアサポートの提供　・雇用機会の創出" class="about__image" width="482" height="466">
				</picture>
			</div>
		</div>

		<div class="apply top-section">
			<h2 class="apply__title top-section__title">申請対象となる団体</h2>
			<p class="top-section__text">各種団体が提供している教育プログラム（検定、資格、講座等）について、審査を行います。</p>
			<div class="apply__categories">
				<div class="apply__category">
					<p class="apply__name">検定・資格<br class="pc-none">主催団体</p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_01.svg" alt="検定・資格主催団体">
				</div>
				<div class="apply__category">
					<p class="apply__name">企業</p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_02.svg" alt="企業">
				</div>
				<div class="apply__category">
					<p class="apply__name">教育事業者</p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_03.svg" alt="教育機関（専門学校、技能スクール）">
				</div>
			</div><!-- /.apply__categories -->

			<div class="apply__button">
				<a href="<?php home_url(); ?>/examination" class="about__button button--primary">申請対象について</a>
			</div>
		</div><!-- /.apply -->

		<!-- mark -->
		<div class="mark top-section">
			<h2 class="mark__title top-section__title">PRO認定マーク</h2>
			<p class="top-section__text">PRO認定された団体は団体マーク、PRO認定の教育プログラムを修了された個人の方は個人マークを各種活動に使用いただけます。</p>
			<div class="mark__list">
				<div class="mark__item">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_01.png" alt="正会員マーク" width="306" height="306">
					<p class="mark__item-title">団体マーク</p>
				</div>
				<div class="mark__container">
					<div class="mark__info">
						<p class="mark__info-title">PRO認定の教育プログラムを<br>修了された個人の方へ</p>
						<p class="mark__info-text">名刺等に使用いただける個人マークを提供しています。詳しくはお問い合わせください。</p>
					</div>
					<div class="mark__info-image">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_02.png" alt="個人マーク" width="306" height="306">
						<p class="mark__info-caption">個人マーク</p>
					</div>
				</div>

				<!-- <div class="mark__item">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_03.png" alt="個人マーク" width="306" height="306">
					<p class="mark__item-title">個人<br class="pc-none">マーク</p>
				</div> -->
			</div>
			<div class="mark__button">
				<a href="<?php home_url(); ?>admission/" class="button--primary">入会案内</a>
			</div>

			<div class="section">
				<div class="section__line mark__line">
					<picture>
						<source media=" (max-width:768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/line_mark-top_sp.svg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/line_mark-top.svg" alt="" class="section__line-image" width="1400" height="638">
					</picture>

					<div class="section__title"></div>
				</div>
			</div>
		</div><!-- /.mark -->


		<!-- member -->
		<div class="member">
			<div class="member__inner">
				<h3 class="member__title">PRO認定</h3>

				<div class="member__banner">
					<div class="member__banner-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_02.png" alt="会員ロゴ1"></div>

					<div class="member__banner-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_11.png" alt="会員ロゴ1"></div>
				</div>

				<?php /*
				<h3 class="member__title">正会員</h3>
				<div class="swiper-container js__member-swiper">
					<div class="swiper-wrapper member__list">
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_01.png" alt="会員ロゴ1"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_02.png" alt="会員ロゴ2"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_03.png" alt="会員ロゴ3"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_04.png" alt="会員ロゴ4"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_05.png" alt="会員ロゴ5"></div>

						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_01.png" alt="会員ロゴ1"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_02.png" alt="会員ロゴ2"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_03.png" alt="会員ロゴ3"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_04.png" alt="会員ロゴ4"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_05.png" alt="会員ロゴ5"></div>
					</div><!-- /.member__list -->
				</div><!-- /.swiper-container -->

				<h3 class="member__title">賛助会員</h3>
				<div class="swiper-container js__member-swiper-reverse">
					<div class="swiper-wrapper member__list">
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_06.png" alt="会員ロゴ1"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_07.png" alt="会員ロゴ2"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_08.png" alt="会員ロゴ3"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_09.png" alt="会員ロゴ4"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_10.png" alt="会員ロゴ5"></div>

						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_06.png" alt="会員ロゴ1"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_07.png" alt="会員ロゴ2"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_08.png" alt="会員ロゴ3"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_09.png" alt="会員ロゴ4"></div>
						<div class="swiper-slide member__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_member_10.png" alt="会員ロゴ5"></div>
					</div><!-- /.member__list -->
				</div><!-- /.swiper-container -->
				*/ ?>

				<div class="member__button">
					<a href="<?php home_url(); ?>/authorize" class="button">認定一覧</a>
				</div>
			</div><!-- /.member__inner -->
		</div><!-- /.member -->

	</section><!-- /.about -->



	<section class="contact section">
		<div class="section__line contact__line">
			<picture>
				<source media=" (max-width:768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/line_contact-top_sp.svg">
				<img src="<?= get_template_directory_uri(); ?>/assets/image/line_contact-top.svg" alt="" class="section__line-image" width="1400" height="638">
			</picture>
		</div>

		<div class="contact__inner">
			<h2 class="contact__title section__title">CONTACT</h2>

			<div class="contact__info">
				<p class="contact__subtitle">PRO申請をご検討中の方へ</p>
				<p class="contact__text">ご不明点があればお気軽にお問い合わせください。</p>
			</div>
			<div class="contact__button">
				<a href="<?php home_url(); ?>/contact" class="button--primary">お問い合わせ</a>
			</div>
		</div>
	</section><!-- /.contact -->
</main>

<?php get_footer(); ?>
