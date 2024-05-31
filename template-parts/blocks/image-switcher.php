<?php
function render_custom_image_block($block)
{
	// ACF フィールドの値を取得
	$pc_image = get_field('pc_image');
	$mobile_image = get_field('mobile_image');
	$breakpoint = get_field('breakpoint');

	// 画像 URL を取得
	$pc_image_url = $pc_image['url'];
	$mobile_image_url = $mobile_image['url'];

	// ブロックのクラス名を取得
	$class_name = $block['className'] ?? '';

	if ($pc_image && $mobile_image && $breakpoint) {
?>
		<picture class="<?php echo esc_attr($class_name); ?>">
			<source media="(max-width: <?php echo esc_attr($breakpoint); ?>px)" srcset="<?php echo esc_url($mobile_image_url); ?>">
			<img src="<?php echo esc_url($pc_image_url); ?>" alt="<?php echo esc_attr($pc_image['alt']); ?>">
		</picture>
<?php
	} else {
		echo '<p>画像とブレイクポイントを設定してください。</p>';
	}
}
?>
