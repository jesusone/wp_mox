<?php
/* Get Categories */
$taxonomy = 'category';
$_category = array();
if(!isset($atts['cat']) || $atts['cat']=='' && taxonomy_exists($taxonomy)){
    $terms = get_terms($taxonomy);
    foreach ($terms as $cat){
        $_category[] = $cat->term_id;
    }
} else {
    $_category  = explode(',', $atts['cat']);
}
$atts['categories'] = $_category;
?>
<div class="zo-carousel-wrap zo-carousel-style-1">
    <?php if ( $atts['filter'] == "true" && !$atts['loop'] ): ?>
        <div class="zo-carousel-filter">
            <ul>
                <li><a class="active" href="#" data-group="all">All</a></li>
                <?php foreach ($atts['categories'] as $category): ?>
                    <?php $term = get_term($category, $taxonomy); ?>
                    <li><a href="#" data-group="<?php echo esc_attr('category-' . $term->slug); ?>">
                            <?php echo esc_attr($term->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="zo-carousel-filter-hidden" style="display: none"></div>
    <?php endif; ?>
    <div class="zo-carousel <?php echo esc_attr($atts['template']); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
        <?php
        $posts = $atts['posts'];
        while ($posts->have_posts()) :
            $posts->the_post();
            $groups = array();
            $groups[] = 'zo-carousel-filter-item all';
            $post_meta = zo_post_meta_data();
            foreach (zoGetCategoriesByPostID(get_the_ID(), $taxonomy) as $category) {
                $groups[] = 'category-' . $category->slug;
            }
            ?>
            <div class="zo-carousel-item-style-1 <?php echo implode(' ', $groups);?>">
                <?php
                if (has_post_thumbnail() && !post_password_required() && !is_attachment() && wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                    $class = ' has-thumbnail';
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'medium');
                else:
                    $class = ' no-image';
                    $thumbnail = '<img src="' . ZO_IMAGES . 'no-image.jpg" alt="' . get_the_title() . '" />';
                endif;

                ?>
                <div class="zo-carousel-content">
                    <?php the_excerpt(); ?>
                </div>
                <h3 class="zo-carousel-title">
                    <?php the_title();?>
                </h3>
                <small class="zo-testimonial-position"><?php echo esc_attr($post_meta->_zo_testimonial_position); ?></small>

            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>