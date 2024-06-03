<?php get_header(); ?>

<main>

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="breadcrumb page__breadcrumb">
		<div class="breadcrumb__inner about__breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link about__breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current about__breadcrumb__current"><?php the_title(); ?></span>
		</div>
		<!-- /.breadcrumb__inner -->
	</div>
	<!-- /.breadcrumb -->


	<div class="page__content">
		<section class="page-admission__content-box">
			<h2 class="page__content-title">会員について</h2>
			<p class="page-admission__membership-desc">PRO認定は、賛助会員の中から当機構の正会員によって評価・認定されます。</p>
			<div class="page-admission__membership-content">
				<h3 class="page__subtitle">賛助会員</h3>
				<table class="page-admission__membership-table">
					<thead>
						<tr class="page-admission__membership-row">
							<th class="page-admission__membership-header"></th>
							<th class="page-admission__membership-header">団体</th>
							<th class="page-admission__membership-header">個人</th>
						</tr>
					</thead>
					<tbody>
						<tr class="page-admission__membership-row">
							<td class="page-admission__membership-date">入会金</td>
							<td class="page-admission__membership-date">10,000円</td>
							<td class="page-admission__membership-date">10,000円</td>
						</tr>
						<tr class="page-admission__membership-row">
							<td class="page-admission__membership-date">年会費</td>
							<td class="page-admission__membership-date">50,000円</td>
							<td class="page-admission__membership-date">10,000円</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<!-- /.page-admission__membership -->

		<section class="page-admission__content-box">
			<h2 class="page__content-title">認定証の発行について</h2>
			<p class="page-admission__certification-desc">PRO認定された団体は、PROの認定証を発行できます。</p>
			<div class="page-admission__certification-content">
				<div class="page-admission__certification-box">
					<h4 class="page-admission__certification-title">各団体の認定証に<br>PROの署名を記載</h4>
					<div class="page-admission__certification-wrapper">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/image_admission-certification_01.jpg" alt="認定証サンプル1" class="page-admission__certification-img" width="170" height="240">
						<p class="page-admission__certification-text">各団体が発行する認定証にPROの署名を記載することができます。</p>
					</div>
				</div>
				<div class="page-admission__certification-box">
					<h4 class="page-admission__certification-title">PROから<br>PRO認定証を発行</h4>
					<div class="page-admission__certification-wrapper">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/image_admission-certification_02.jpg" alt="認定証サンプル1" class="page-admission__certification-img" width="170" height="240">
						<p class="page-admission__certification-text">PRO認定証の発行は任意となり、別途発行手数料が必要です。</p>
					</div>
				</div>
			</div>
			<div class="page-admission__certification-fees">
				<h3 class="page__subtitle">PRO認定証の発行手数料</h3>
				<p class="page-admission__fees-text">発行手数料は習得に関わる時間数、難易度等に応じて分かれます。</p>
				<table class="page-admission__certification-table">
					<tr class="page-admission__certification-row">
						<th class="page-admission__certification-header">発行手数料</th>
					</tr>
					<tr class="page-admission__certification-row certification-row__date">
						<td class="page-admission__certification-date">500円</td>
						<td class="page-admission__certification-date">1,000円</td>
						<td class="page-admission__certification-date">3,000円</td>
						<td class="page-admission__certification-date">5,000円</td>
						<td class="page-admission__certification-date">10,000円</td>
					</tr>

				</table>
			</div>
		</section>
		<!-- /.page-admission__certification -->

		<section class="page-admission__content-box">
			<h2 class="page__content-title sp-none">ロゴマークの使用について</h2>
			<div class="page-admission__logo-content">
				<div class="page-admission__logo-box">
					<h3 class="page__subtitle">団体マーク</h3>
					<p class="page-admission__logo-text">PRO認定された団体には、ウェブサイトや印刷物等で使用できる「PRO認定ロゴ」をご利用いただけます。</p>
					<div class="page-admission__logo-container">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/image_admission-logo_01.png" alt="団体マーク" class="page-admission__logo-img" width="153" height="153">
						<table class="page-admission__logo-table">
							<tr class="page-admission__logo-row">
								<th class="page-admission__logo-header">使用料</th>
								<td class="page-admission__logo-date">無料</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="page-admission__logo-box">
					<h3 class="page__subtitle">個人マーク</h3>
					<p class="page-admission__logo-text">PRO認定された教育プログラムを修了された個人の方は、名刺等で使用できる「PRO認定ロゴ」をご利用いただけます。</p>
					<div class="page-admission__logo-container">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/image_admission-logo_02.png" alt="個人マーク" class="page-admission__logo-img" width="153" height="153">
						<table class="page-admission__logo-table">
							<tr class="page-admission__logo-row">
								<th class="page-admission__logo-header">使用料</th>
								<td class="page-admission__logo-date">1,000円／人</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		<!-- /.page-admission__logo -->

		<section class="page-admission__content-box">
			<h2 class="page__content-title">規定について</h2>
			<a href="<?= get_template_directory_uri(); ?>/assets/pdf/admission-guide.pdf" class="page-admission__rule-link" target="_blank" rel="noopener noreferrer">入会及び退会規程</a>
		</section>
		<!-- /.page-admission__rule -->
	</div>

</main>

<?php get_footer(); ?>
