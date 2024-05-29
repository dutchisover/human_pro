<?php get_header(); ?>

<main>

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="page__examination-header">
		<div class="breadcrumb page__examination-breadcrumb">
			<div class="breadcrumb__inner">
				<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current"><?php the_title(); ?></span>
			</div>
			<!-- /.breadcrumb__inner -->
		</div>
		<!-- /.breadcrumb -->
		<div class="page-tab">
			<a href="#examination" class="page-tab__button">審査について</a>
			<a href="#application" class="page-tab__button">申請の流れ</a>
			<a href="#merit" class="page-tab__button">メリット</a>
			<a href="#support" class="page-tab__button">サポート</a>
		</div>
	</div>

	<div class="page__wrapper">
		<div class="page__examination">
			<div class="page__examination-content">
				<div class="page__examination-content__box about__pro">
					<h2 class="page__examination-content__title page-content__title">PROの認定とは</h2>
					<p class="page__examination-content__text">PROは、学習者の技能習得と労働環境のバランスを安定させるために、第三者機関が提供する教育プログラムの評価ガイドラインを策定し、審査・認定を行っています。これにより、質の高い教育を提供し、学習者が必要な技能を身につけることを支援しています。</p>
				</div>
				<!-- /.page__examination-content__box -->

				<div class="page__examination-content__box" id="examination">
					<h2 class="page__examination-content__title page-content__title">審査について</h2>
					<p class="page__examination-content__text">どうすれば“教育”による豊かな社会を実現できるかを考慮し、学習者、社会、環境に対する長期的かつ総合的な利益を追求するための基準を設けて審査を行います。</p>

					<h3 class="page__examination-content__subtitle examination__application-desc_01">申請対象となる団体</h3>
					<div class="page__examination-group">
						<div class="page__examination-group__item">
							<div class="page__examination-group__item__heading">
								<h4 class="page__examination-group__title"><span class="page__examination-group__title-number">01</span>検定・資格主催団体</h4>
								<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_01.svg" alt="検定・資格主催団体のイラスト" class="page__examination-group__img" width="95" height="95">
							</div>
							<div class="page__examination-group__text-container">
								<p class="page__examination-group__text">専門知識やスキルの認定・標準化・維持を目的に、個人に対して行われる資格試験や認定プログラムを提供していること。</p>
								<p class="page__examination-group__text-ex"><span>＜検定・資格例＞</span>ビジネス・経営／医療・福祉／IT・情報技術／語学／教育・学術／文化・芸術／趣味・ライフスタイル／スポーツ・フィットネス　等</p>
							</div>
						</div>
						<div class="page__examination-group__item">
							<div class="page__examination-group__item__heading">
								<h4 class="page__examination-group__title"><span class="page__examination-group__title-number">02</span>企業</h4>
								<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_02.svg" alt="企業のイラスト" class="page__examination-group__img" width="95" height="95">
							</div>
							<div class="page__examination-group__text-container">
								<p class="page__examination-group__text">専門知識やスキルの認定・標準化・維持を目的に、個人に対して行われる資格試験や認定プログラムを提供していること。または、学習者がキャリア形成するための専門知識やスキル、資格を取得するための教育プログラムを提供していること。</p>
								<p class="page__examination-group__text-ex"><span>＜業種例＞</span>インターネット・Web／銀行・証券・保険／スポーツ・ゲーム・音楽／医療・福祉／宿泊・飲食／娯楽・生活関連サービス／人材　等</p>
							</div>
						</div>
						<div class="page__examination-group__item">
							<div class="page__examination-group__item__heading">
								<h4 class="page__examination-group__title"><span class="page__examination-group__title-number">03</span>教育事業者</h4>
								<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_group_03.svg" alt="教育事業者のイラスト" class="page__examination-group__img" width="95" height="95">
							</div>
							<div class="page__examination-group__text-container">
								<p class="page__examination-group__text">学習者がキャリア形成するための専門知識やスキル、資格を取得するための教育プログラムを提供していること。</p>
								<p class="page__examination-group__text-ex"><span>＜教育事業者例＞</span>カルチャーセンター／外国語学校／社会人スクール　等</p>
							</div>
						</div>
					</div>
					<p class="page__examination-group-caution">また、団体として下記に該当する必要があります。</p>
					<ul class="page__examination-group-caution__li">
						<li><span>●</span>国内に事業場所を有していること。</li>
						<li><span>●</span>本活動を的確に遂行する組織、人員等を有していること。</li>
						<li><span>●</span>本活動の円滑な遂行に必要な経営基盤を有し、かつ、資金等について十分な管理能力を有していること。</li>
					</ul>
				</div>
				<!-- /.page__examination-content__box -->

				<div class="page__examination-content__box">
					<h3 class="page__examination-content__subtitle examination__application-desc_02">審査基準</h3>
					<div class="page__examination-standard">
						<div class="page__examination-standard__item">
							<div class="page__examination-standard__item__heading">
								<h4 class="page__examination-standard__title">技能取得</h4>
								<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_standard_01.svg" alt="技能取得のイラスト" class="page__examination-standard__item__img01">
							</div>
							<div class="page__examination-standard__text-wrapper">
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">時代性のある教育プログラムである</h5>
									<p class="page__examination-standard__text">教育プログラムが時代のニーズを反映し、<br>将来の職業や産業に求められるスキルや知識を提供していること。</p>
								</div>
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">適切なカリキュラムと教材が提供されている</h5>
									<p class="page__examination-standard__text">カリキュラムが学習目標や職業要件に合致しており、<br>教材が分かりやすく理解しやすい形式で提供されていること。</p>
								</div>
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">評価とフィードバック</h5>
									<p class="page__examination-standard__text">学習者の成長を測るための適切な評価制度を導入し、フィードバックを行われること。</p>
								</div>
							</div>
						</div>
						<div class="page__examination-standard__item">
							<div class="page__examination-standard__item__heading">
								<h4 class="page__examination-standard__title">キャリア開発</h4>
								<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_standard_02.svg" alt="キャリア開発のイラスト" class="page__examination-standard__item__img02">
							</div>
							<div class="page__examination-standard__text-wrapper">
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">適切な学習サポート</h5>
									<p class="page__examination-standard__text">学習を修了するための適切な学習サポートが用意されていること。</p>
								</div>
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">キャリアサポートの提供</h5>
									<p class="page__examination-standard__text">学習者に合わせたキャリアプランニングや目標設定の支援を提供していること。</p>
								</div>
								<div class="page__examination-standard__text-container">
									<h5 class="page__examination-standard__text-heading">雇用機会の創出</h5>
									<p class="page__examination-standard__text">学習者が自身のキャリアや技能を活用して就職・転職できるサポートが用意されていること。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.page__examination-content__box -->

				<div class="page__examination-content__box">
					<h2 class="page__examination-content__title page-content__title">申請の流れ</h2>
					<div class="page__examination-step__container">
						<div class="page__examination-step">
							<p class="page__examination-step__number">STEP<span>1</span></p>
							<h3 class="page__examination-step__title">申請フォームから申請</h3>
						</div>
						<div class="page__examination-step__arrow">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_01.svg" alt="矢印のイラスト" class="page__examination-step__arrow__img">
							<div class="page__examination-step__arrow-content">
								<p>申請フォームに必要項目を入力いただき申請してください。</p>
								<div class="contact__button page__examination-step-contact__button">
									<a href="#" class="button--primary" target="_blank" rel="noopener noreferrer">申請フォーム</a>
								</div>
							</div>
						</div>
						<div class="page__examination-step">
							<p class="page__examination-step__number">STEP<span>2</span></p>
							<h3 class="page__examination-step__title">審査</h3>
						</div>
						<div class="page__examination-step__arrow">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_02.svg" alt="矢印のイラスト" class="page__examination-step__arrow__img">
						</div>
						<div class="page__examination-step">
							<p class="page__examination-step__number">STEP<span>3</span></p>
							<h3 class="page__examination-step__title">認定</h3>
						</div>
						<div class="page__examination-step__arrow">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_arrow_02.svg" alt="矢印のイラスト" class="page__examination-step__arrow__img">
							<div class="page__examination-step__arrow-content">
								<p>審査完了後、認定が確定しましたらメールにてご連絡いたします。</p>
							</div>
						</div>
						<div class="page__examination-step page__examination-step__blue">
							<p class="page__examination-step__number">STEP<span>4</span></p>
							<h3 class="page__examination-step__title">PRO認定として活動</h3>
						</div>
					</div>
				</div>
				<!-- /.page__examination-content__box -->

				<div class="page__examination-content__box">
					<h2 class="page__examination-content__title page-content__title">PROの認定を受けるメリット</h2>
					<div class="page__examination-merit">
						<div class="page__examination-merit__item">
							<h3 class="page__examination-merit__title">信頼性の向上</h3>
							<img src="./assets/image/icon_page_examination_merit_01.svg" alt="信頼性の向上のイラスト" class="page__examination-merit__img01">
							<p class="page__examination-merit__text">PRO認定の資格・検定試験・カリキュラムとしてロゴを使用いただくことで、信頼性の向上を図ることができます。また、会員として当HPに貴社サイトを掲載します。</p>
						</div>
						<div class="page__examination-merit__item">
							<h3 class="page__examination-merit__title">社会的意義の証明</h3>
							<img src="<?= get_template_directory_uri(); ?>/assets/image/icon_page_examination_merit_02.svg" alt="社会的意義の証明のイラスト" class="page__examination-merit__img02">
							<p class="page__examination-merit__text">教育による課題解決や、人々や社会への社会還元を重視する取り組みが認められることで、貴社が社会の豊かさに貢献することの証となります。</p>
						</div>
					</div>
				</div>
				<!-- /.page__examination-content__box -->

				<div class="page__examination-content__box">
					<h2 class="page__examination-content__title page-content__title">申請サポート</h2>
					<p class="page__examination-support__desc">申請にあたり、よくあるご質問を掲載しております。</p>
					<div class="page__examination-support__container">		
						<div class="page__examination-support__item">
							<h3 class="page__examination-support__question">申請対象について詳しく教えてください。</h3>
							<p class="page__examination-support__answer">PRO認定は、”教育”を評価・認定する仕組みです。団体の種類や教育のカテゴリを問わず、すべての教育プログラムが申請対象となります。</p>
						</div>
						<div class="page__examination-support__item">
							<h3 class="page__examination-support__question">児童向けの教育を提供していて、審査基準の「雇用機会の創出」を満たしていません。</h3>
							<p class="page__examination-support__answer">豊かな社会を実現するための、学習者の能力向上と労働市場に寄与する”質の高い教育プログラムを提供しているか”が審査基準となります。学習者によって、審査基準をすべて満たす必要はありません。</p>
						</div>
						<div class="page__examination-support__item">
							<h3 class="page__examination-support__question">PRO認定マークの効果は？</h3>
							<p class="page__examination-support__answer">PRO認定マークは、質の高い教育を提供している証となります。PRO認定された団体はこの認定マークをホームページ等に掲載し、販促活動に利用できます。</p>
						</div>
						<div class="page__examination-support__item">
							<h3 class="page__examination-support__question">申請は有料ですか？</h3>
							<p class="page__examination-support__answer">申請は無料となりますが、PRO認定は、賛助会員の中から当機構の正会員によって評価・認定されます。よってPRO認定を受けるためには賛助会員である必要があります。詳しくは<a href="#">こちら</a>をご覧ください。</p>
						</div>
						<div class="page__examination-support__item">
							<h3 class="page__examination-support__question">PRO認定を受けるのは難しいですか？</h3>
							<p class="page__examination-support__answer">立ち上げたばかりで実績が少ない団体の場合は、一度の申請で認定を受けることは難しいかもしれません。認定を見送る場合は、理由を添えて審査結果をお伝えしますので、次回の申請時に参考にしてみてください。</p>
						</div>
					</div>
					<p class="page__examination-support__text">その他のご質問や、ご不明点があればお気軽にお問い合わせください。</p>
					<div class="contact__button page__examination-support-contact__button">
						<a href="#" class="button--primary" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
					</div>
				</div>
				<!-- /.page__examination-content__box -->
			</div>
			<!-- /.page__examination-content -->
		</div>
		<!-- /.about__inner -->

	</div>
	<!-- /.page__examination-about -->

</main>

<?php get_footer(); ?>
