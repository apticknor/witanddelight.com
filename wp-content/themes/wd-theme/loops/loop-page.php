        <div class="content">
            <div class="gridRow">
                <div class="gridRow-col gridRow-col_size3of4" role="main">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="box">
                            <div class="feature feature_condensed">
                                <div class="feature-hd isHidden">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="feature-bd">
                                    <div class="user-content">
                                        <?php
                                            the_content();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="gridRow-col gridRow-col_size1of4" role="complementary">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
