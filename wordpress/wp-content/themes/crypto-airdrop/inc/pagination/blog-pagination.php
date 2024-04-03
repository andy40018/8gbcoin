<?php

/**
 * Pagination
 * 
 * @return hook.
 */
class Cryptoairdrop_Pagination
{
    /**
     * Blog
     * 
     * @return hook.
     */
    function Cryptoairdrop_Blog_pagination()
    {
        global $post;
        global $wp_query, $wp_rewrite,$loop;
        if (get_query_var('paged') ) { 
            $paged = get_query_var('paged'); 
        } elseif (get_query_var('page') ) { 
            $paged = get_query_var('page'); 
        } else { 
            $paged = 1; 
        }
        if ($wp_query->max_num_pages==0) {
            $wp_query = $loop;
        }
        ?>
    <br/>
    <div class="pagination">
        <?php if($paged != 1  ) : ?>
        <a href="<?php echo get_pagenum_link(($paged-1 > 0 ? $paged-1 : 1)); ?>"><i class="fa fa-angle-double-left"></i></a>    
        <?php endif; ?>
        <?php 
        for ($i=1;$i<=($wp_query->max_num_pages>1 ? $wp_query->max_num_pages : 0 );$i++) { 
            ?> 
            <a class="<?php echo ($i == $paged ? 'active ' : ''); ?>" href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a> 
        <?php } ?>
        <?php if($wp_query->max_num_pages!= $paged) : ?>
        <a href="<?php echo get_pagenum_link(($paged+1 <= $wp_query->max_num_pages ? $paged+1 : $wp_query->max_num_pages )); ?>"><i class="fa fa-angle-double-right"></i></a>
        <?php endif; ?>
    </div>
        <?php
    } 
}
?>
