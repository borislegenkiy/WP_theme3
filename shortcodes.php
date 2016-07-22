<?

//function for box attention (red box) - future shotrcode
function box_attention($atts) {
		extract(shortcode_atts(array(
			   'text_header' => '',
			   'text_full' => ''
			), $atts));
		return "
			<div class='box_attention'>
				<div class='box_header'>
					<div class='box_img f_left'><img src='/wp-content/themes/prodavec_okon/img/attention.png'></div>
					<div class='box_text f_left'>
						<div class='box_text_header'>".$text_header."</div>
					</div>
				</div>
				<div class='box_text_full'>".$text_full."</div>
			</div>
		";
}

//function for box_question (~green box) - future shotrcode
function box_question($atts) {
		extract(shortcode_atts(array(
			   'text_header' => '',
			   'text_full' => ''
			), $atts));
		return "
			<div class='box_question'>
					<div class='box_header'>
						<div class='box_img f_left'><img src='/wp-content/themes/prodavec_okon/img/question.png'></div>
						<div class='box_text f_left'>
							<div class='box_text_header'>".$text_header."</div>
						</div>
					</div>
					<div class='box_text_full'>".$text_full."</div>
				</div>
		";
}

//function for box_exclamation (~yellow box) - future shotrcode
function box_exclamation($atts) {
		extract(shortcode_atts(array(
			   'text_header' => '',
			   'text_full' => ''
			), $atts));
		return "
			<div class='box_exclamation'>
					<div class='box_header'>
						<div class='box_img f_left'><img src='/wp-content/themes/prodavec_okon/img/exclamation.png'></div>
						<div class='box_text f_left'>
							<div class='box_text_header'>".$text_header."</div>
						</div>
					</div>
					<div class='box_text_full'>".$text_full."</div>
				</div>

		";
}

//function for box_close (~gray box) - future shotrcode
function box_close($atts) {
		extract(shortcode_atts(array(
			   'text_header' => '',
			   'text_full' => ''
			), $atts));
		return "
			<div class='box_close'>
					<div class='box_header'>
						<div class='box_img f_left'><img src='/wp-content/themes/prodavec_okon/img/close.png'></div>
						<div class='box_text f_left'>
							<div class='box_text_header'>".$text_header."</div>
						</div>
					</div>
					<div class='box_text_full'>".$text_full."</div>
				</div>

		";
}

//function for newspaper - future shotrcode
function newspaper($atts) {
		extract(shortcode_atts(array(
			   'text_h2' => '',
			   'text_header' => '',
			   'text_full' => ''
			), $atts));
		return "
				<div class='text'>
					<div class='text_left f_left'>
						<h2>".$text_h2."</h2>
						<p class='text_25pt'>".$text_header."</p>
					</div>
					<div class='text_right f_right'>
						<p class='text_12px'>".$text_full."</p>
					</div>
				</div>

		";
}

//function for logo_text - future shotrcode
function logo_text($atts) {
		extract(shortcode_atts(array(
			   'text_full' => ''
			), $atts));
		return "
				<div class='logo_text'>
						<div class='logo_post f_left'>
							<img src='/wp-content/themes/prodavec_okon/img/logo_picture.png'>
						</div>
						<div class='text_post f_right'>
							<p>".$text_full."</p>
						</div>
					</div>

		";
}


//function for logo_text_vertical - future shotrcode
function logo_text_vertical($atts) {
		extract(shortcode_atts(array(
			   'text_full1' => '',
			   'text_full2' => '',
			   'text_full3' => ''

			), $atts));
		return "
				<div class='text'>
					<div class='logo_text_vertical f_left'>
						<div class='place_img_vertical'>
							<img src='/wp-content/themes/prodavec_okon/img/img_content3.png'>
						</div>
						<div class='place_text_vertical'>
							<p>".$text_full1."</p>
						</div>
					</div>
					<div class='logo_text_vertical f_left'>
						<div class='place_img_vertical'>
							<img src='/wp-content/themes/prodavec_okon/img/img_content2.png'>
						</div>
						<div class='place_text_vertical'>
							<p>".$text_full2."</p>
						</div>
					</div>
					<div class='logo_text_vertical f_left'>
						<div class='place_img_vertical'>
							<img src='/wp-content/themes/prodavec_okon/img/img_content1.png'>
						</div>
						<div class='place_text_vertical'>
							<p>".$text_full3."</p>
						</div>
					</div>
				</div>
		";
}

//function for citation - future shotrcode
function citation($atts) {
		extract(shortcode_atts(array(
			   'text_full' => ''
			), $atts));
		return "
				<div class='citation'>
					<div class='citation_left f_left'></div>
					<div class='citation_text f_left'>".$text_full."</div>
					<div class='citation_right f_left'></div>
				</div>
		";
}

// instruction for use this technology https://tech.yandex.ru/share/doc/dg/tasks/how-to-add-button-docpage/
// function for smm likes buttons from Yandex - future shotrcode
function smm_buttons ($atts) {
	 extract(shortcode_atts(array(
	      'smm_url' => '',
	      'smm_title' => '',
	      'smm_image' => '',
	      'smm_desc' => ''

	   ), $atts));

	$smm_class_id = "ya_share_" . rand(1000,9999);
	
	$smm_code =
	"<script type='text/javascript' src='https://yastatic.net/share/share.js' charset='utf-8'></script>
	<script type='text/javascript'>
	new Ya.share({
		theme: 'counter', 
	        element: '" . $smm_class_id . "'";

	if($smm_url !="") $smm_code = $smm_code . ", link: '" . $smm_url . "'";
	if($smm_title !="") $smm_code = $smm_code . ", title: '" . $smm_title . "'";
	if($smm_url_img !="") $smm_code = $smm_code . ", image: '" . $smm_title . "'";
	if($smm_description !="") $smm_code = $smm_code . ", description: '" . $smm_description . "'";

	$smm_code = $smm_code . 
	"});
	</script>
	<span id='" . $smm_class_id . "'></span>";

	return $smm_code;
}
// function for book post advert
function boxs_advert ($atts) {
	 extract(shortcode_atts(array(
	      'href' => '',
	      'image' => '',
	      'desc_small' => '',
	      'desc_full' => '',
		  'price' => ''

	   ), $atts));



	$boxs_advert =
	"
		<div class='product_current_place f_left' onclick='window.open('".$href."','_blank');'>
				<div class='product_box_place'>
					<div class='popular_box_img'><img src='".$image."'></div>
					<div class='popular_box_text'>
						<div class='popular_box_text_name1'>".$desc_full."</div>
						<div class='popular_box_text_name2'>".$desc_small."</div>
						<div class='popular_box_text_cost_place'>
							<div class='popular_box_text_cost_place1 f_left'>".$price."</div>
							<div class='popular_box_text_cost_place2 buy_button f_left'><a href='#'>Подробнее</a></div>
						</div>
					</div>
				</div>
			</div>
	";

	return $boxs_advert;
}

// function for create new line
function new_line () {
	return "<div class='clear'></div>";
}

?>