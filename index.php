<?php 

$url = home_url( '/' );

$current_user = wp_get_current_user(); 
$current_user_login = $current_user->user_login;
$current_user_email = $current_user->user_email;
$current_user_firstname = $current_user->user_firstname;
$current_user_lastname = $current_user->user_lastname;
$current_user_ID = $current_user->ID;

/*
$user = new WP_User( $current_user_ID );

if ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'Some_role', $user->roles ) ) 
{
    return true;
}

$current_user_roles = $user->roles;
*/

$current_user_roles = $current_user->roles;


/**/

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title><?php bloginfo( 'name' ); ?></title>
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.html">
                    Edmin
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                

                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->



    <div class="wrapper">
        <div class="container">


            <?php the_content(); ?>


            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/common.js" type="text/javascript"></script>
      
    </body>