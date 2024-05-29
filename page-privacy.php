<?php get_header(); ?>

<main>

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="page__wrapper">

		<div class="breadcrumb">
			<div class="breadcrumb__inner">
				<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current"><?php the_title(); ?></span>
			</div>
			<!-- /.breadcrumb__inner -->
		</div>
		<!-- /.breadcrumb -->

		<div class="page__privacy">

			<p class="page__privacy-desc">職業技能専門教育研究機構（以下「当機構」という）は、個人情報を取り扱う団体として、当機構に提供されるすべての個人情報について、その保護ならびに適切な管理が重要な社会的責務であると認識し、その取り扱いについて下記のとおり定め、個人情報の保護に努めます。</p>

			<h2 class="page__privacy-title page__privacy-title_01">1. 個人情報収集の目的</h2>
			<p class="page__privacy-box">当機構では、個人情報（個人に関する情報であって、特定の個人を識別できるもの、または他の情報と容易に照合することができるものをいう）については、当機構の各事業を運営するにあたってのご連絡・ご確認・ご送付、お問い合わせへのご回答、当機構からのお知らせ・ご案内、各事業に関する調査等、正当な事業遂行の範囲内で利用いたします。</p>

			<h2 class="page__privacy-title">2. 収集する個人情報の種類</h2>
			<p class="page__privacy-box">当機構が管理する個人情報は、氏名・住所・電話番号・職業・メールアドレス・受講修了履歴など広範囲に渡ります。</p>

			<h2 class="page__privacy-title">3. 個人情報の開示または提供</h2>
			<p class="page__privacy-box">当機構が収集した個人情報は、下記の場合を除いて第三者に開示または提供することはありません。</p>
			<ul class="page__privacy-policy-list">
				<li class="page__privacy-policy-list-item"><span class="page__privacy-policy-list-item-circle">●</span>ご本人が同意されている場合</li>
				<li class="page__privacy-policy-list-item"><span class="page__privacy-policy-list-item-circle">●</span>法令の規定に基づいて、司法、行政、またはこれに類する機関から情報の提出要請を受けた場合</li>
				<li class="page__privacy-policy-list-item"><span class="page__privacy-policy-list-item-circle">●</span>上記1．「個人情報収集の目的」の利用目的のために、個人情報保護に関する覚書を締結している外部業者に業務の一部を委託する場合</li>
				<li class="page__privacy-policy-list-item"><span class="page__privacy-policy-list-item-circle">●</span>警察などの官公署からの要請を受けた場合</li>
				<li class="page__privacy-policy-list-item"><span class="page__privacy-policy-list-item-circle">●</span>人の生命、身体または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難である場合</li>
			</ul>

			<h2 class="page__privacy-title">4. 個人情報の管理と保護</h2>
			<p class="page__privacy-box">個人情報を適切に管理することとともに、外部への個人情報が流出しないよう厳重に管理します。</p>

			<h2 class="page__privacy-title">5. 個人情報の開示・訂正・削除について</h2>
			<p class="page__privacy-box">ご本人よりご自身の個人情報の開示・訂正・削除等のご希望がある場合には、所定の手続きにより行うことができます。</p>

			<div class="page__privacy-signature">
				<p>職業技能専門教育研究機構</p>
				<p>理事長　今里 健治</p>
			</div>

			<p class="page__privacy-revision-date">[最終改訂日：2024年4月1日]</p>
			
			<div class="page__privacy-contact-info">
				<h3 class="page__privacy-contact-info-heading">【個人情報に関するお問い合わせ先】</h3>
				<p>職業技能専門教育研究機構　事務局</p>
				<p>Eメール　<a href="mailto:info@inyo-shikaku.jp" class="page__privacy-email">info@inyo-shikaku.jp</a></p>
			</div>
		</div>

	</div>
	<!-- /.page__privacy -->

</main>

<?php get_footer(); ?>
