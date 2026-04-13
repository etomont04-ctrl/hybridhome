<?php if (have_posts()) : ?>
	<ul class="works_list">
		<?php while (have_posts()) : the_post(); ?>
			<?php
			$card_link = get_permalink();
			$card_title = get_the_title();

			$card_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
			if (empty($card_thumb_url)) {
				$card_thumb_url = '/assets/img/common/news-dummy.jpg';
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

			<li>
				<article class="card">
					<a class="card__link" href="<?= esc_url($card_link); ?>">
						<div class="card__photo<?= !empty($card_reno_slug) ? ' ' . esc_attr($card_reno_slug) : ''; ?>">
							<img src="<?= esc_url($card_thumb_url); ?>" alt="<?= esc_attr($card_title); ?>" decoding="async" class="fit_img">
						</div>
						<div class="card__body">
							<h3 class="card__title"><?= esc_html($card_title); ?></h3>

							<div class="card__tags">
								<?php if (!empty($commitment_terms) && !is_wp_error($commitment_terms)) : ?>
									<?php foreach ($commitment_terms as $commitment_term) : ?>
										<span>#<?= esc_html($commitment_term->name); ?></span>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>

							<?php if (!empty($card_area_name)) : ?>
								<span class="card__area"><?= esc_html($card_area_name); ?></span>
							<?php endif; ?>
						</div>
					</a>
				</article>
			</li>
		<?php endwhile; ?>
	</ul>

	<?php get_template_part('inc/pagination'); ?>
	<!-- /archive-pager -->

<?php else : ?>
	<p class="no-post">記事がありません。</p>
<?php endif; ?>