<?php get_header(); ?>

<main class="page-examination">

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current"><?php the_title(); ?></span>
		</div>
		<!-- /.breadcrumb__inner -->
	</div>
	<!-- /.breadcrumb -->


	<div class="page__tab">
		<div class="page__tab-inner">
			<a href="#anc-examination" class="page__tab-button">審査に<br class="pc-none">ついて</a>
			<a href="#anc-application" class="page__tab-button">申請の<br class="pc-none">流れ</a>
			<a href="#anc-merit" class="page__tab-button">メリット</a>
			<a href="#anc-support" class="page__tab-button">サポート</a>
		</div>
	</div>

	<div class="page__content">
		<div class="page-examination__content-box">
			<h2 class="page-examination__content-title page__content-title">PROの認定とは</h2>
			<p class="page-examination__content-text">PROは、学習者の技能習得と労働環境のバランスを安定させるために、第三者機関が提供する教育プログラムの評価ガイドラインを策定し、審査・認定を行っています。これにより、質の高い教育を提供し、学習者が必要な技能を身につけることを支援しています。</p>
		</div>
		<!-- /.page-examination__content-box -->

		<div class="page-examination__content-box" id="anc-examination">
			<h2 class="page-examination__content-title page__content-title">審査について</h2>
			<p class="page-examination__content-text">どうすれば“教育”による豊かな社会を実現できるかを考慮し、学習者、社会、環境に対する長期的かつ総合的な利益を追求するための基準を設けて審査を行います。</p>

			<h3 class="page-examination__content-subtitle page__subtitle">申請対象となる団体</h3>
			<div class="page-examination__group">
				<div class="page-examination__group-item">
					<div class="page-examination__item-heading">
						<h4 class="page-examination__group-title"><span class="page-examination__title-number">01</span>検定・資格主催団体</h4>
						<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_01.svg" alt="検定・資格主催団体のイラスト" class="page-examination__group-img" width="95" height="95">
					</div>
					<div class="page-examination__group-text-container">
						<p class="page-examination__group-text">専門知識やスキルの認定・標準化・維持を目的に、個人に対して行われる資格試験や認定プログラムを提供していること。</p>
						<p class="page-examination__group-ex"><span>＜検定・資格例＞</span>ビジネス・経営／医療・福祉／IT・情報技術／語学／教育・学術／文化・芸術／趣味・ライフスタイル／スポーツ・フィットネス　等</p>
					</div>
				</div>
				<div class="page-examination__group-item">
					<div class="page-examination__item-heading">
						<h4 class="page-examination__group-title"><span class="page-examination__title-number">02</span>企業</h4>
						<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_02.svg" alt="企業のイラスト" class="page-examination__group-img" width="95" height="95">
					</div>
					<div class="page-examination__group-text-container">
						<p class="page-examination__group-text">専門知識やスキルの認定・標準化・維持を目的に、個人に対して行われる資格試験や認定プログラムを提供していること。または、学習者がキャリア形成するための専門知識やスキル、資格を取得するための教育プログラムを提供していること。</p>
						<p class="page-examination__group-ex"><span>＜業種例＞</span>インターネット・Web／銀行・証券・保険／スポーツ・ゲーム・音楽／医療・福祉／宿泊・飲食／娯楽・生活関連サービス／人材　等</p>
					</div>
				</div>
				<div class="page-examination__group-item">
					<div class="page-examination__item-heading">
						<h4 class="page-examination__group-title"><span class="page-examination__title-number">03</span>教育事業者</h4>
						<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_03.svg" alt="教育事業者のイラスト" class="page-examination__group-img" width="95" height="95">
					</div>
					<div class="page-examination__group-text-container">
						<p class="page-examination__group-text">学習者がキャリア形成するための専門知識やスキル、資格を取得するための教育プログラムを提供していること。</p>
						<p class="page-examination__group-ex"><span>＜教育事業者例＞</span>カルチャーセンター／外国語学校／社会人スクール　等</p>
					</div>
				</div>
			</div>
			<p class="page-examination__group-caution">また、団体として下記に該当する必要があります。</p>
			<ul class="page-examination__list">
				<li class="page-examination__list-item">国内に事業場所を有していること。</li>
				<li class="page-examination__list-item">本活動を的確に遂行する組織、人員等を有していること。</li>
				<li class="page-examination__list-item">本活動の円滑な遂行に必要な経営基盤を有し、かつ、資金等について十分な管理能力を有していること。</li>
			</ul>
		</div>
		<!-- /.page-examination__content-box -->

		<div class="page-examination__content-box">
			<h3 class="page-examination__content-subtitle page__subtitle">審査基準</h3>
			<div class="page-examination__standard">
				<div class="page-examination__standard-item">
					<div class="page-examination__standard-heading">
						<h4 class="page-examination__standard-title">技能取得</h4>
						<picture>
							<source srcset="<?= get_template_directory_uri(); ?>/assets/image/sp_icon_page_examination_group_01.svg" media="(max-width: 520px)">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_standard_01.svg" alt="技能取得のイラスト" class="page-examination__standard-img" width="164" height="164">
						</picture>

					</div>
					<div class="page-examination__standard-text-wrapper">
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">時代性のある教育プログラムである</h5>
							<p class="page-examination__standard-text">教育プログラムが時代のニーズを反映し、<br class="sp-none">将来の職業や産業に求められるスキルや知識を提供していること。</p>
						</div>
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">適切なカリキュラムと教材が<br class="pc-none">提供されている</h5>
							<p class="page-examination__standard-text">カリキュラムが学習目標や職業要件に合致しており、<br class="sp-none">教材が分かりやすく理解しやすい形式で提供されていること。</p>
						</div>
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">評価とフィードバック</h5>
							<p class="page-examination__standard-text">学習者の成長を測るための適切な評価制度を導入し、フィードバックを行われること。</p>
						</div>
					</div>
				</div>
				<div class="page-examination__standard-item">
					<div class="page-examination__standard-heading">
						<h4 class="page-examination__standard-title">キャリア開発</h4>
						<picture>
							<source srcset="<?= get_template_directory_uri(); ?>/assets/image/sp_icon_page_examination_group_02.svg" media="(max-width: 520px)">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_standard_02.svg" alt="キャリア開発のイラスト" class="page-examination__standard-img" width="164" height="164">
						</picture>

					</div>
					<div class="page-examination__standard-text-wrapper">
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">適切な学習サポート</h5>
							<p class="page-examination__standard-text">学習を修了するための適切な学習サポートが用意されていること。</p>
						</div>
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">キャリアサポートの提供</h5>
							<p class="page-examination__standard-text">学習者に合わせたキャリアプランニングや目標設定の支援を提供していること。</p>
						</div>
						<div class="page-examination__standard-text-container">
							<h5 class="page-examination__standard-subtitle">雇用機会の創出</h5>
							<p class="page-examination__standard-text">学習者が自身のキャリアや技能を活用して就職・転職できるサポートが用意されていること。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.page-examination__content-box -->

		<div class="page-examination__content-box page-examination__application-content" id="anc-application">
			<h2 class="page-examination__content-title page__content-title">申請の流れ</h2>
			<p class="page-examination__application-text pc-none">どうすれば“教育”による豊かな社会を実現できるかを考慮し、学習者、社会、環境に対する長期的かつ総合的な利益を追求するための基準を設けて審査を行います。</p>
			<div class="page-examination__step-container">
				<div class="page-examination__step">
					<p class="page-examination__step-number">STEP<span>1</span></p>
					<h3 class="page-examination__step-title">申請フォームから申請</h3>
				</div>
				<div class="page-examination__step-arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_01.svg" alt="矢印のイラスト" class="page-examination__step-arrow-img01" width="37" height="145">
					<div class="page-examination__step-arrow-content">
						<p>申請フォームに必要項目を入力いただき申請してください。</p>
						<div class="page-examination__button">
							<a href="<?php home_url(); ?>/contact" class="button--primary">申請フォーム</a>
						</div>
					</div>
				</div>
				<div class="page-examination__step">
					<p class="page-examination__step-number">STEP<span>2</span></p>
					<h3 class="page-examination__step-title">審査</h3>
				</div>
				<div class="page-examination__step-arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_02.svg" alt="矢印のイラスト" class="page-examination__step-arrow-img02" width="37" height="55">
				</div>
				<div class="page-examination__step">
					<p class="page-examination__step-number">STEP<span>3</span></p>
					<h3 class="page-examination__step-title">認定</h3>
				</div>
				<div class="page-examination__step-arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_02.svg" alt="矢印のイラスト" class="page-examination__step-arrow-img02" width="37" height="55">
					<div class="page-examination__step-arrow-content">
						<p>審査完了後、認定が確定しましたらメールにてご連絡いたします。</p>
					</div>
				</div>
				<div class="page-examination__step">
					<p class="page-examination__step-number">STEP<span>4</span></p>
					<h3 class="page-examination__step-title">PRO認定として活動</h3>
				</div>
			</div>
		</div>
		<!-- /.page-examination__content-box -->

		<div class="page-examination__content-box" id="anc-merit">
			<h2 class="page-examination__content-title page__content-title">PRO認定を受けるメリット</h2>
			<p class="page-examination__merit-text-sp pc-none">どうすれば“教育”による豊かな社会を実現できるかを考慮し、学習者、社会、環境に対する長期的かつ総合的な利益を追求するための基準を設けて審査を行います。</p>
			<div class="page-examination__merit">
				<div class="page-examination__merit-item">
					<div class="page-examination__merit-wrapper">
						<h3 class="page-examination__merit-title">信頼性の向上</h3>
						<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_merit_01.svg" alt="信頼性の向上のイラスト" class="page-examination__merit-img" width="234" height="140">
					</div>
					<p class="page-examination__merit-text">PRO認定の資格・検定試験・カリキュラムとしてロゴを使用いただくことで、信頼性の向上を図ることができます。<br class="pc-none">また、会員として当HPに貴社サイトを掲載します。</p>
				</div>
				<div class="page-examination__merit-item">
					<div class="page-examination__merit-wrapper">
						<h3 class="page-examination__merit-title">社会的意義の証明</h3>
						<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_merit_02.svg" alt="社会的意義の証明のイラスト" class="page-examination__merit-img" width="234" height="140">
					</div>
					<p class="page-examination__merit-text">教育による課題解決や、人々や社会への社会還元を重視する取り組みが認められることで、貴社が社会の豊かさに貢献することの証となります。</p>
				</div>
			</div>
		</div>
		<!-- /.page-examination__content-box -->

		<div class="page-examination__content-box" id="anc-support">
			<h2 class="page-examination__content-title page__content-title">申請サポート</h2>
			<p class="page-examination__support-desc">申請にあたり、よくあるご質問を掲載しております。</p>
			<div class="page-examination__support-container">
				<div class="page-examination__support-item js_accordion">
					<div class="page-examination__support-wrapper">
						<h3 class="page-examination__support-question">申請対象について詳しく教えてください。</h3>
						<p class="page-examination__support-answer">PRO認定は、”教育”を評価・認定する仕組みです。団体の種類や教育のカテゴリを問わず、すべての教育プログラムが申請対象となります。</p>
					</div>
				</div>
				<div class="page-examination__support-item js_accordion">
					<div class="page-examination__support-wrapper">
						<h3 class="page-examination__support-question">児童向けの教育を提供していて、審査基準の「雇用機会の創出」を満たしていません。</h3>
						<p class="page-examination__support-answer">豊かな社会を実現するための、学習者の能力向上と労働市場に寄与する”質の高い教育プログラムを提供しているか”が審査基準となります。学習者によって、審査基準をすべて満たす必要はありません。</p>
					</div>
				</div>
				<div class="page-examination__support-item js_accordion">
					<div class="page-examination__support-wrapper">
						<h3 class="page-examination__support-question">PRO認定マークの効果は？</h3>
						<p class="page-examination__support-answer">PRO認定マークは、質の高い教育を提供している証となります。PRO認定された団体はこの認定マークをホームページ等に掲載し、販促活動に利用できます。</p>
					</div>
				</div>
				<div class="page-examination__support-item js_accordion">
					<div class="page-examination__support-wrapper">
						<h3 class="page-examination__support-question">申請は有料ですか？</h3>
						<p class="page-examination__support-answer">申請は無料となりますが、PRO認定は、賛助会員の中から当機構の正会員によって評価・認定されます。よってPRO認定を受けるためには賛助会員である必要があります。詳しくは<a href="#">こちら</a>をご覧ください。</p>
					</div>
				</div>
				<div class="page-examination__support-item js_accordion">
					<div class="page-examination__support-wrapper">
						<h3 class="page-examination__support-question">PRO認定を受けるのは難しいですか？</h3>
						<p class="page-examination__support-answer">立ち上げたばかりで実績が少ない団体の場合は、一度の申請で認定を受けることは難しいかもしれません。認定を見送る場合は、理由を添えて審査結果をお伝えしますので、次回の申請時に参考にしてみてください。</p>
					</div>
				</div>
			</div>
			<p class="page-examination__support-text">その他のご質問や、ご不明点があればお気軽にお問い合わせください。</p>
			<div class="page-examination__contact-button">
				<a href="#" class="button--primary" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
			</div>
		</div>
		<!-- /.page-examination__content-box -->
	</div>
	<!-- /.page-examination__content -->

</main>

<?php get_footer(); ?>
