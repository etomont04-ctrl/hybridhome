<?php
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else if ($host == 'as-check.jp') {
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else {
	include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/root.php');
}
$uri = "works";
$this_img_path = $img_path . "works/";
$pickup_query = new WP_Query(array(
	'post_type' => 'works',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'DESC',
	'tax_query' => array(
		array(
			'taxonomy' => 'pickup',
			'field' => 'slug',
			'terms' => array('pickup'),
		),
	),
));
?>
<?php if ($pickup_query->have_posts()) : ?>
	<section class="pickup">
		<div class="inr -w1300">
			<div class="splide pickup-slider">
				<div class="splide__track">
					<ul class="splide__list">
						<?php while ($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
							<?php
							$card_link = get_permalink();
							$card_title = get_the_title();

							$card_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
							if (empty($card_thumb_url)) {
								$card_thumb_url = $img_path . 'common/news-dummy.jpp';
							}

							$renovation_terms = get_the_terms(get_the_ID(), 'renovation');
							$card_reno_slug = '';
							if (!empty($renovation_terms) && !is_wp_error($renovation_terms)) {
								$card_reno_slug = $renovation_terms[0]->slug;
							}

							$commitment_terms = get_the_terms(get_the_ID(), 'commitment');
							$area_terms = get_the_terms(get_the_ID(), 'area');
							$card_area_name = '';

							if (!empty($area_terms) && !is_wp_error($area_terms)) {
								$card_area_name = $area_terms[0]->name;
							}
							?>

							<li class="splide__slide">
								<article class="pick-card">
									<a class="pick-card__link" href="<?= esc_url($card_link); ?>">
										<div class="pick-card__photo<?= !empty($card_reno_slug) ? ' ' . esc_attr($card_reno_slug) : ''; ?>">
											<img src="<?= esc_url($card_thumb_url); ?>" alt="<?= esc_attr($card_title); ?>" decoding="async" class="fit_img">
										</div>
										<div class="pick-card__body">
											<h3 class="pick-card__title"><?= esc_html($card_title); ?></h3>

											<div class="pick-card__tags">
												<?php if (!empty($commitment_terms) && !is_wp_error($commitment_terms)) : ?>
													<?php foreach ($commitment_terms as $commitment_term) : ?>
														<span>#<?= esc_html($commitment_term->name); ?></span>
													<?php endforeach; ?>
												<?php endif; ?>
											</div>

											<?php if (!empty($card_area_name)) : ?>
												<span class="pick-card__area"><?= esc_html($card_area_name); ?></span>
											<?php endif; ?>
										</div>
									</a>
								</article>
							</li><!-- /splide__slide -->
						<?php endwhile; ?>
					</ul><!-- /splide__list -->
				</div><!-- /splide__track -->
			</div><!-- /splide -->
		</div><!-- /inr -->

		<div class="pickup-loop">
			<div class="pickup-loop__track">
				<div class="pickup-loop__unit">
					<img src="<?= $this_img_path; ?>pickup-loop_txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="pickup-loop__img">
				</div>
				<div class="pickup-loop__unit">
					<img src="<?= $this_img_path; ?>pickup-loop_txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="pickup-loop__img">
				</div>
			</div>
		</div><!-- /pickup-loop -->
	</section>

	<?php wp_reset_postdata(); ?>
<?php endif; ?>