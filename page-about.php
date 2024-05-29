<?php get_header(); ?>

<main>

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="page__wrapper">

		<div class="breadcrumb page__breadcrumb">
			<div class="breadcrumb__inner about__breadcrumb__inner">
				<a href="<?php echo home_url(); ?>" class="breadcrumb__link about__breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current about__breadcrumb__current"><?php the_title(); ?></span>
			</div>
			<!-- /.breadcrumb__inner -->
		</div>
		<!-- /.breadcrumb -->

		<div class="page__about">
			<div class="page__box page__vision">
				<h2 class="page-content__title">理念</h2>
				<p class="page__box__content page__box__vision-text">
					職業技能教育の普及と評価・承認を通して、<br>安心して働き続けられる社会の実現を目指します。
				</p>
			</div>
			<!-- /.page__box -->

			<div class="page__box page__message">
				<h2 class="page-content__title">メッセージ</h2>
				<p class="page__box__content page__box__message-text">
					<!-- メッセージ本文 -->
					AIやロボティクスの急速な進化は、労働環境に変化をもたらすとともに労働者のワークスタイルや求められるスキルにも大きな影響を与えています。例えば、ICT化により業務効率の改善やリモートワークなどの多様な働き方が実現できる一方、雇用の多くが代替リスクに直面し、フリーランスや契約労働者といった雇用の不安定化をつくり出しています。また、継続的なキャリアアップを実現するためには、常に最新のテクノロジーに対応できる既存スキルのアップデートやスキルセットが求められるようになりました。<br>私たちは、時代が変化する中でも一人ひとりの状況やニーズに応じて安心して働き続けられる社会を実現するためには、さまざまな労働者の問題を国や地方自治体だけに任せるのではなく、民間の力によって「職業能力の開発・向上支援」や「雇用機会の拡充」を推し進めることが大切だと考えています。<br><br>PROでは、職業技能及び専門教育についての調査・分析・研究をはじめ、希望する職業に就くために必要な職業技能の習得支援や人材育成、また、リカレント教育を目的としたプログラムの開発、就職希望者に対しての就職情報の提供など、幅広い活動によりあらゆる人が安定的に働ける職業機会の提供を目指しています。<br>さらに、他の教育機関が行う「職業能力の開発・向上」活動についても、第三者の立場から評価基準を設けて公正に評価。改善のための助言や指導を行うことで、関連団体の能力を向上し、雇用状況の改善に貢献します。
				</p>
			</div>
			<!-- /.page__box -->

			<div class="page__box page__activity">
				<h2 class="page-content__title">活動内容</h2>
				<ul class="page__activity-list page__box__content">
					<li class="page__activity-list-item"><span class="page__activity-list-item-circle">●</span>職業技能の分析とそれに対応する専門教育の研究</li>
					<li class="page__activity-list-item"><span class="page__activity-list-item-circle">●</span>職業技能専門教育の標準教育プログラムの開発と普及</li>
					<li class="page__activity-list-item"><span class="page__activity-list-item-circle">●</span>職業技能専門教育の修了認定</li>
					<li class="page__activity-list-item"><span class="page__activity-list-item-circle">●</span>機構が認定した修了者雇用企業の開拓</li>
					<li class="page__activity-list-item"><span class="page__activity-list-item-circle">●</span>各教育機関の職業訓練支援</li>
				</ul>
			</div>
			<!-- /.page__box -->

			<div class="page__box page__overview">
				<h2 class="page-content__title">概要</h2>
				<table class="page__overview-table">
					<tr>
						<th class="page__table-header">法人名</th>
						<td class="page__table-data">特定非営利活動法人 職業技能専門教育研究機構（PRO）</td>
					</tr>
					<tr>
						<th class="page__table-header">英語表記</th>
						<td class="page__table-data">Professional training Research Organization of occupational skill</td>
					</tr>
					<tr>
						<th class="page__table-header">所在地</th>
						<td class="page__table-data">〒160-0023 東京都新宿区西新宿7-8-10 オークラヤビル4F</td>
					</tr>
					<tr>
						<th class="page__table-header">TEL</th>
						<td class="page__table-data">03-6863-5641</td>
					</tr>
				</table>
				<div class="page__overview-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5473750123913!2d139.69511565071545!3d35.69251678009764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cfc5b04f4ef%3A0x9512170e9ecbda67!2z44CSMTYwLTAwMjMg5p2x5Lqs6YO95paw5a6_5Yy65pys55Sw5Yy65ZyS77yR5LiB55uu77yT4oiS77yT!5e0!3m2!1sja!2sjp!4v1622781441236!5m2!1sja!2sjp" width="1060" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			<!-- /.page__box -->
		</div>
	</div>


</main>

<?php get_footer(); ?>