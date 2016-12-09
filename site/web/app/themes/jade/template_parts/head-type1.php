<?php 
/**
 * Header type 1 for Jade
 *
 * Displays The Header type 1. This file is imported in header.php
 *
 * @package Jade
 * 
 * @since Jade 1.0.0
 */
global $optimizer;?>

<!--HEADER STARTS-->
    <div class="header">

        <div class="center">
            <div class="head_inner">
            <!--LOGO START-->
            	<?php if(!empty($optimizer['hide_tagline'])){ $hidedesc='hide_sitetagline'; }else{ $hidedesc=''; } ?>
                <div class="logo <?php echo $hidedesc; ?>">
                    <?php if(!empty($optimizer['logo_image_id']['url'])){   ?>
                        <?php if ( is_home() ) { ?>                         
                            <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="jade-logo-home" src="<?php $logo = $optimizer['logo_image_id']; echo $logo['url']; ?>" /></a>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                        <?php }else{ ?>
                            <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo home_url( '/' )?>app/themes/jade/assets/images/jade-logo2.svg" /></a>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                        <?php } ?>
                    <?php }else{ ?>
                            <?php if ( is_home() ) { ?>   
                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php }else{ ?>
                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php } ?>
                    
                    <?php } ?>
                </div>
            <!--LOGO END-->
            
            <!--MENU START--> 
                <!--MOBILE MENU START-->
                <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
                <!--MOBILE MENU END--> 
                
                <div id="topmenu" class="<?php if ('header' == $optimizer['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                <!--LOAD THE HEADR SOCIAL LINKS-->
					<div class="head_soc">
						<?php if ($optimizer['social_bookmark_pos'] == 'header') { ?><?php get_template_part('framework/core','social'); ?><?php } ?>
                    </div>
                </div>
            <!--MENU END-->
            
            </div>
    </div>
    </div>
<!--HEADER ENDS-->