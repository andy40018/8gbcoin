<?php
/**
 *    Content Page Template
 *
 * @package Crypto_AirDrop
 */
 
    /* Defaults */
    $cryptoairdrop_blog_date = get_theme_mod('cryptoairdrop_blog_date', 'true');
    $cryptoairdrop_blog_user = get_theme_mod('cryptoairdrop_blog_user', 'true');
    $cryptoairdrop_blog_comments = get_theme_mod('cryptoairdrop_blog_comments', 'true');

    $cryptoairdrop_comment_zero_comment_text = get_theme_mod('cryptoairdrop_comment_zero_comment_text', 'No Comments');
    $cryptoairdrop_comment_one_comment_text = get_theme_mod('cryptoairdrop_comment_one_comment_text', '1 Comment');
    $cryptoairdrop_comment_multiple_comment_text = get_theme_mod('cryptoairdrop_comment_multiple_comment_text', '% Comments So far');    

    $cryptoairdrop_blog_content_ordering = get_theme_mod('cryptoairdrop_blog_content_ordering', array( 'title', 'meta-one', 'meta-two', 'image', ));
?>

        <!--Blog Posts content-single.php-->
        <article class="post border-0">
            <div class="post-body">
                <?php foreach ( $cryptoairdrop_blog_content_ordering as $cryptoairdrop_blog_content_order ) : ?>
                
                    <?php if ('image' === $cryptoairdrop_blog_content_order ) :
                        if (has_post_thumbnail() ) { ?>
                        <figure class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            </a>
                        </figure>
                            <?php 
                        } ?> 
                
                <?php elseif ('meta-two' === $cryptoairdrop_blog_content_order ) : ?>
                

                    <ul class="post-category">
                        
                    <?php 
                    $cryptoairdrop_cat_list = get_the_category_list();
                    if (!empty($cryptoairdrop_cat_list)) { ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_category(' | '); ?></a></li>
                    <?php } ?>
                    </ul>

                    
                <?php elseif ('title' === $cryptoairdrop_blog_content_order ) : ?>
                    <div class="inner-header">
                        <h3 class="inner-title mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    
                <?php elseif ('meta-one' === $cryptoairdrop_blog_content_order ) : ?>
                    <ul class="post-widget">
                    <?php if ($cryptoairdrop_blog_user == 'true') { ?>
                            <li>
                                <img class="avatar" alt="" src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" class="avatar avatar-50 photo" height="50" width="50">  
                                <span>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?><a/>
                                </span>
                            </li>
                    <?php } ?>
                    <?php if ($cryptoairdrop_blog_date == 'true' ) { ?>
                            <li>
                                <a href="<?php echo esc_url(get_month_link(esc_html(get_post_time('Y')), esc_html(get_post_time('m')))); ?>">
                                    <time datetime=""><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                                </a>
                            </li>
                    <?php } ?>
                    <?php if ($cryptoairdrop_blog_comments == 'true') { ?>
                            <li><?php comments_number($cryptoairdrop_comment_zero_comment_text, $cryptoairdrop_comment_one_comment_text, $cryptoairdrop_comment_multiple_comment_text); ?></li>
                    <?php } ?>
                        
                    <?php
                    $cryptoairdrop_tag_list = get_the_tag_list();
                    if (!empty($cryptoairdrop_tag_list)) { ?>
                            <i class="fas fa-tag"></i>
                            <li><a href="<?php the_permalink(); ?>"> <?php  the_tags('', ', ', ''); ?></a></li>
                    <?php }    ?>

                    </ul>
                    
                <?php endif; 
                endforeach; ?>

                <div class="excerpt">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <span class="blog_border"></span>
        <!--Blog Posts-->