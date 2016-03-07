<?php $sizeimg = get_query_var('zo_image_style'); ?>
<div class="zo-blog-classic <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                    <div class="zo-grid-media zo-gallery">
                    <?php echo zo_archive_gallery('full'); ?>
                    </div>  
                     <div class="zo-detail-post">
                    <div class="zo-meta">
                        <span>  <?php echo get_the_term_list( get_the_ID(), 'category', '', ', ', '' ); ?> <?php echo esc_html__( '|', 'mox' );  the_time(' d-M-Y');?></span>
                    </div>
                    <div class="zo-grid-title">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                     </div>
                     <div class="zo-blog-content"><?php  echo zo_limit_words(strip_tags( get_the_excerpt()),44); ?></div>
                    <a href="<?php the_permalink() ?>" title="" class="btn btn-primary border-radius"><?php echo esc_html_e( 'Read More', 'mox' ); ?></a>
                </div>
              
</div>    