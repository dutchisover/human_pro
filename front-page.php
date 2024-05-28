<?php get_header(); ?>

<main>
	<section class="hero">
		<div class="hero__inner">
			<h1 class="hero__title">
				<span class="fade-in-text hero__title-line-01" data-delay="0" data-speed="250">職業技能の</span><br>
				<span class="fade-in-text hero__title-line-02" data-delay="500" data-speed="250">評価・承認を通して</span><br>
				<span class="fade-in-text hero__title-line-03 sp-none" data-delay="1000" data-speed="250">豊かな社会を実現する。</span>
				<span class="fade-in-text hero__title-line-03 pc-none" data-delay="1000" data-speed="250">豊かな社会を</span><br>
				<span class="fade-in-text hero__title-line-04 pc-none" data-delay="1500" data-speed="250">実現する。</span>
			</h1>
			<p class="hero__subtitle">Skill × Education = Enriched Society</p>
			<div class="hero__button">
				<a href="#" class="button" target="_blank" rel="noopener noreferrer">PRO認定の申請</a>
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

		<div class="about__inner">
			<div class="about__info">
				<h2 class="about__title section__title">ABOUT</h2>
				<p class="about__subtitle">PROは、<br>“教育”で豊かな社会を<br>実現するための<br>活動をしています。</p>
				<p class="about__text">私たちは、職業技能と専門教育の関係を研究し、<br>企業と教育機関における技能評価のガイドラインを策定し、<br class="sp-none">それをもとに“教育”の評価・認証を行っています。</p>
				<p class="about__text">技能習得と労働環境のバランスを安定化する取り組みを<br class="sp-none">通じて、”教育”によって豊かな社会を実現します。</p>
				<a href="<?php home_url(); ?>/examination" class="about__button button--primary">審査について</a>
			</div>

			<div class="about__illust">
				<picture>
					<source media=" (max-width:768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/illust_about_sp.svg">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/illust_about.svg" alt="【仕事のハードスキル習得評価基準】・専門知識と技術力・コミュニケーションスキル・問題解決能力・プロジェクト管理スキル・学習意欲と柔軟性　【就業者の労働環境 評価基準】・労働時間とワークライフバランス・職場のコミュニケーションと協力・ダイバーシティとインクルージョン・キャリア開発のサポート・福利厚生と健康管理" class="about__image" width="532" height="514">
				</picture>
			</div>
		</div>

		<div class="apply top-section">
			<h2 class="apply__title top-section__title">申請いただける対象</h2>
			<div class="apply__categories">
				<div class="apply__category">
					<p class="apply__name">検定・資格<br class="pc-none">主催団体</p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_01.svg" alt="検定・資格主催団体">
				</div>
				<div class="apply__category">
					<p class="apply__name">人材会社</p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_02.svg" alt="人材会社">
				</div>
				<div class="apply__category">
					<p class="apply__name">教育機関<span>（専門学校、技能スクール）</span></p>
					<img class="apply__image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon_top-apply_03.svg" alt="教育機関（専門学校、技能スクール）">
				</div>
			</div><!-- /.apply__categories -->
		</div><!-- /.apply -->

		<!-- mark -->
		<div class="mark top-section">
			<h2 class="mark__title top-section__title">PRO認定マーク</h2>
			<div class="mark__list">
				<div class="mark__item">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_01.png" alt="正会員マーク" width="306" height="306">
					<p class="mark__item-title">正会員<br class="pc-none">マーク</p>
				</div>
				<div class="mark__item">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_02.png" alt="賛助会員マーク" width="306" height="306">
					<p class="mark__item-title">賛助会員<br class="pc-none">マーク</p>
				</div>
				<div class="mark__item">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_mark_03.png" alt="個人マーク" width="306" height="306">
					<p class="mark__item-title">個人<br class="pc-none">マーク</p>
				</div>
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
				<a href="#" class="button--primary" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
			</div>
		</div>
	</section><!-- /.contact -->
</main>

<?php get_footer(); ?>
