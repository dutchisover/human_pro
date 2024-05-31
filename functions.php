<?php


// SSLリダイレクト
if (empty($_SERVER['HTTPS'])) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
	exit;
}



////////////////// JS・CSSファイルを読み込む //////////////////
function add_files()
{
	//キャッシュ無効（開発時はこちらをコメント解除）
	// $cache = date('YmdHis');
	//キャッシュ有効（公開後はこちらをコメント解除）
	$cache = 1.0;

	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', "", $cache, false);

	// スクロール固定読み込み
	// wp_enqueue_script('bodyScrollLock', get_template_directory_uri() . '/js/bodyScrollLock.min.js', array(), $cache, true);


	// GSAP
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true);
	wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array('gsap'), '3.10.4', true);


	// MicroModal
	// wp_enqueue_script('micromodal', 'https://cdn.jsdelivr.net/npm/micromodal@0.4.10/dist/micromodal.min.js', array(), '0.4.10', true);


	// サイト共通（CSS、JS）
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', "", $cache);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), $cache, true);
}
add_action('wp_enqueue_scripts', 'add_files');



////////////////// SwiperのCDNを追加 //////////////////
function enqueue_swiper_assets()
{
	// SwiperのCSSを追加
	wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);

	// SwiperのJSを追加
	wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

	// Swiperの初期化スクリプトを追加
	wp_enqueue_script('custom-swiper-init', get_template_directory_uri() . '/assets/js/swiper-init.js', array('swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');




////////////////// 【表示カスタマイズ】 //////////////////

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

// 段落で行間追加
add_theme_support('custom-line-height');

// 画像カバーで単位追加
add_theme_support('custom-units', 'px', 'em', 'rem', 'vh', 'vw');






// カスタム投稿タイプのURLを「日付-記事ID」に変更
function customize_news_permalink($post_link, $post)
{
	if ($post->post_type == 'news') {
		$post_date = get_the_date('Ymd', $post->ID);
		return home_url('news/' . $post_date . '-' . $post->ID . '/');
	} else {
		return $post_link;
	}
}
add_filter('post_type_link', 'customize_news_permalink', 1, 2);

function news_rewrite_rules()
{
	add_rewrite_rule(
		'news/([0-9]{8})-([0-9]+)/?$',
		'index.php?post_type=news&p=$matches[2]',
		'top'
	);
}
add_action('init', 'news_rewrite_rules');



////////////////// ページネーション関数 //////////////////
function custom_pagination($max_num_pages, $range = 2, $paged)
{
	$big = 3; // need an unlikely integer
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, $paged),
		'total' => $max_num_pages,
		'prev_text' => __('←'),
		'next_text' => __('→'),
		'type' => 'list',
		'end_size' => 3,
		'mid_size' => $range
	));
}



function register_custom_image_block()
{
	// ACF ブロックを登録
	acf_register_block_type(array(
		'name'              => 'custom-image-block',
		'title'             => __('Custom Image Block'),
		'description'       => __('PCとスマホの画像を切り替えるブロックです。'),
		'render_callback'   => 'render_custom_image_block',
		'category'          => 'formatting',
		'icon'              => 'format-image',
		'keywords'          => array('image', 'responsive', 'custom'),
		'supports'          => array(
			'align' => false
		),
	));
}

// レンダリングコールバック関数を読み込み
require get_template_directory() . '/template-parts/blocks/image-switcher.php';

add_action('acf/init', 'register_custom_image_block');



////////////////// SVGファイルをアップロード可能にする //////////////////
function add_svg_to_upload_mimes($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

function fix_svg()
{
	echo '<style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg');

function check_for_svg($file)
{
	$filetype = wp_check_filetype($file['name']);
	if ($filetype['ext'] === 'svg') {
		$file['type'] = 'image/svg+xml';
	}
	return $file;
}
add_filter('wp_check_filetype_and_ext', 'check_for_svg', 10, 4);
