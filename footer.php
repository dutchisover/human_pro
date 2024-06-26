    <footer class="footer">
    	<div class="footer__inner">
    		<div class="footer__info">
    			<div class="footer__logo">
    				<a href="<?php home_url(); ?>">
    					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo_footer.svg" alt="PRO" width="480" height="53">
    				</a>
    			</div>
    			<address class="footer__address">特定非営利活動法人　<br class="">職業技能専門教育研究機構（PRO）<?php /*<br class="pc-none"><br>〒160-0023 東京都新宿区西新宿7-8-10 <br class="pc-none">オークラヤビル4F */ ?></address>
    		</div>

    		<div class="footer__nav">
    			<ul class="footer__nav-list">
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/examination">審査について</a></li>
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/admission">入会案内</a></li>
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/authorize">認定一覧</a></li>
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/about">法人概要</a></li>
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/news">お知らせ</a></li>
    			</ul>

    			<ul class="footer__nav-button">
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/app">PRO認定の申請</a></li>
    				<li class="footer__nav-item"><a href="<?php home_url(); ?>/contact">お問い合わせ</a></li>
    			</ul>
    		</div>

    		<div class="footer__bottom">
    			<small class="footer__copyright">© 2024 Professional training Research Organization of occupational skill All Rights Reserved.</small>

    			<div class="footer__bottom-nav">
    				<ul class="footer__bottom-nav-list">
    					<li class="footer__bottom-nav-item"><a href="<?php home_url(); ?>/privacy">個人情報利用規約</a></li>
    				</ul>
    			</div>
    		</div>
    	</div><!-- /.footer__inner -->
    </footer><!-- /.footer -->
    <?php wp_footer(); ?>
    </body>

    </html>
