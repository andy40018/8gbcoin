<?php
function cryptoairdrop_custom_color_fun() {
	
	//$footer_background_color = get_theme_mod('footer_background_color');
	$link_color = get_theme_mod('link_color');
	list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");

	
	if ( $link_color != '#FF4081' ) :
	?>
<style type="text/css">
/*--------------------------------------------------------------*/
/*	Slider
/*--------------------------------------------------------------*/
#particles-js {
    background-color: <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	Navbar
/*--------------------------------------------------------------*/
.main-navigation .menu>li .sub-menu>li.current-menu-ancestor>a, 
.main-navigation .menu>li .sub-menu>li.current-menu-parent>a, 
.main-navigation .menu>li .sub-menu>li.current-menu-item>a, 
.main-navigation .menu .current-menu-ancestor>a, 
.main-navigation .menu .current-menu-parent>a {
    color: <?php echo $link_color; ?>;
}
.main-navigation .menu>li .sub-menu>li>a:hover {
    background-color: <?php echo $link_color; ?>;
}
.main-navigation .menu>li .sub-menu {
    border-top: 3px solid <?php echo $link_color; ?> !important;
}
.main-navigation .menu>li .sub-menu>li.current-menu-item>a{
	background-color: <?php echo $link_color; ?>40;
}

.main-navigation .menu>li .sub-menu>li>a:hover {
	background-color: <?php echo $link_color; ?>;
}

.sticky-menu div.navigation-wrap {
	background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 50%);
}

/*--------------------------------------------------------------*/
/*	Cart Icon
/*--------------------------------------------------------------*/

.shopping-cart:hover > a { color: <?php echo $link_color; ?>; }
.shopping-cart > a .cart-total { background-color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Default Html Elements
/*--------------------------------------------------------------*/

a:hover, a:focus, a:active { color: <?php echo $link_color; ?>; }
blockquote:before { color: <?php echo $link_color; ?>; }

button, button[disabled]:hover, 
button[disabled]:focus, 
input[type="button"], 
input[type="button"][disabled]:hover, 
input[type="button"][disabled]:focus, 
input[type="reset"], 
input[type="reset"][disabled]:hover, 
input[type="reset"][disabled]:focus, 
input[type="submit"], 
input[type="submit"][disabled]:hover, 
input[type="submit"][disabled]:focus {
	background: <?php echo $link_color; ?>;
}

button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:focus {
    background: <?php echo $link_color; ?>;
}
/*--------------------------------------------------------------*/
/*	Footer Copyrights - Site Info
/*--------------------------------------------------------------*/

.site-info a:hover, .site-info a:focus { color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Header Top Info
/*--------------------------------------------------------------*/

.header-contact-info li i { color: <?php echo $link_color; ?>; }
.header-top .btn { background-color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Footer Copyright 
/*--------------------------------------------------------------*/
.site-footer ul li a:hover {
	color: <?php echo $link_color; ?>;
}
/*--------------------------------------------------------------*/
/*	Owl Carousel Next Prev 
/*--------------------------------------------------------------*/

.owl-carousel .owl-prev:hover, 
.owl-carousel .owl-next:hover { 
	background-color: <?php echo $link_color; ?>; 
}

/*--------------------------------------------------------------*/
/*	Owl Carousel Paginations / Dots
/*--------------------------------------------------------------*/

.owl-theme .owl-dots .owl-dot.active span, 
.owl-theme .owl-dots .owl-dot:hover span {
    background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 1);
}
.testimonial-one .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-one .owl-theme .owl-dots .owl-dot:hover span {
	background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 1);
}
#owl-portfolio .owl-nav button:hover {
	background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 1);
}

.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    box-shadow: 0 0 0 5px <?php echo $link_color; ?>4d;
}

/*--------------------------------------------------------------*/
/*	Section And Mixed Element Css
/*--------------------------------------------------------------*/

.divider-main::before { background: <?php echo $link_color; ?>; }
.theme-default { background-color: <?php echo $link_color; ?>; }
.text-default { color: <?php echo $link_color; ?> !important; }
.btn-animation { background-color: <?php echo $link_color; ?>; }
.section-header { border-left: 4px solid <?php echo $link_color; ?>; }
.next.page-numbers, .prev.page-numbers { background-color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Slider
/*--------------------------------------------------------------*/

.btn-skin:hover,
.btn-skin:focus {
    background-color: <?php echo $link_color; ?>;
}
.btn:hover {
    background: <?php echo $link_color; ?>;
}

.feature:nth-child(2) {
    background: <?php echo $link_color; ?>;
}
.scroll-down:hover {
    background: <?php echo $link_color; ?>;
}
/*--------------------------------------------------------------*/
/*	Service Section
/*--------------------------------------------------------------*/

.icon-bg::after {
    background: <?php echo $link_color; ?> !important;
}
.icon-bg {
    color: <?php echo $link_color; ?> !important;
}

.service .more-link {
    color: <?php echo $link_color; ?>;
}
	
/*--------------------------------------------------------------*/
/*	Portfolio Section
/*--------------------------------------------------------------*/
	
.portfolio-thumbnail i {
    background: <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	Portfolio Single
/*--------------------------------------------------------------*/

.project-info-list li i {
	color: <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	Section Header
/*--------------------------------------------------------------*/

.entry-header .entry-title > a:hover, 
.entry-header .entry-title > a:focus, 
.entry-header .entry-title > a:active { color: <?php echo $link_color; ?> !important; }

/*--------------------------------------------------------------*/
/*	Page Title Section
/*--------------------------------------------------------------*/

.page-breadcrumb > li a:hover, .page-breadcrumb > li a:focus, 
.page-breadcrumb > li.active { color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Funfact Section
/*--------------------------------------------------------------*/

.funfact .funfact-icon {
    color: <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	About Us
/*--------------------------------------------------------------*/

.about-img-holder img {
    border-radius: 2px;
    -webkit-box-shadow: -30px -30px 0px 0px <?php echo $link_color; ?>;
    -moz-box-shadow: -30px -30px 0px 0px <?php echo $link_color; ?>;
    box-shadow: -30px -30px 0px 0px <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	Team Section
/*--------------------------------------------------------------*/

.team-module:hover .team-caption { border-bottom: 2px solid <?php echo $link_color; ?> !important; }
.team-overlay { background: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 0.7); }
.team .member .social a { color: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 0.7); }

/*--------------------------------------------------------------*/
/*	Blog Section 
/*--------------------------------------------------------------*/

.inner-header .inner-title > a:hover, .inner-header .inner-title > a:focus, .inner-header .inner-title > a:active {
    color: <?php echo $link_color; ?>;
}
.more-link:hover, .more-link:focus {
    color: <?php echo $link_color; ?>;
}
.post .post-meta span:first-child {
    color: <?php echo $link_color; ?>;
}
.home-blog {
    background: <?php echo $link_color; ?>;
}
.inner-content:after{
	background: <?php echo $link_color; ?>;
}


/*--------------------------------------------------------------*/
/*	Road Map Section 
/*--------------------------------------------------------------*/

.content h3 { background: linear-gradient(135deg, #020202, <?php echo $link_color; ?>); }
.road-map-tl-event::after{ background: <?php echo $link_color; ?> }

/*--------------------------------------------------------------*/
/*	Comments
/*--------------------------------------------------------------*/

.comments-area .form-submit .submit:hover,
.comments-area .form-submit .submit:focus {
	background-color: <?php echo $link_color; ?>;
	box-shadow: 0px 0px 9px 0 rgb(0 0 0 / 62%)
}
.comment-body .reply-btn a,
.comment-body .edit-btn a {
	background-color: <?php echo $link_color; ?>;
}

.wp-block-search .wp-block-search__button:focus,
.wp-block-search .wp-block-search__button:hover{
	background-color: <?php echo $link_color; ?>;
}

/*--------------------------------------------------------------*/
/*	Author
/*--------------------------------------------------------------*/

.blog-author img{ border: 2px solid <?php echo $link_color; ?>; }

.prev-post-title span:hover,
.next-post-title span:hover { 
	color: <?php echo $link_color; ?>; 
}

/*--------------------------------------------------------------*/
/*	Sidebars & Widgets Section
/*--------------------------------------------------------------*/

.sidebar .widget .widget-title {
    background: <?php echo $link_color; ?>;
}
.sidebar ul li a:hover {
	color: <?php echo $link_color; ?> !important;
}

.widget .tagcloud a:hover {
    background: <?php echo $link_color; ?> !important;
}
.widget .widget-title .rsswidget {
	color: #fff;
}
/*--------------------------------------------------------------*/
/*	404 Error Page
/*--------------------------------------------------------------*/

.error-404 i { color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Contact Page
/*--------------------------------------------------------------*/

.contact-area:before { 
	border-top-color: <?php echo $link_color; ?>; 
	border-bottom-color: <?php echo $link_color; ?>;
} 
.contact-area:after {
	border-left-color: <?php echo $link_color; ?>;
	border-right-color: <?php echo $link_color; ?>;
} 
.contact-area i.fa { color: <?php echo $link_color; ?>; }

/*--------------------------------------------------------------*/
/*	Page Scroll Up
/*--------------------------------------------------------------*/

.page-scroll-up {
	background-color: <?php echo $link_color; ?>;	
}
.page-scroll-up:hover, .page-scroll-up:focus {
	background-color: <?php echo $link_color; ?>; 
}

.sponsors img:hover {
	border: 1px solid <?php echo $link_color; ?> !important;
}
.team-caption .designation {
    color: <?php echo $link_color; ?> !important;
}
.blog .post:before { 
	background-color: <?php echo $link_color; ?> !important;
}
.service-2 .post:before {
	background-color: <?php echo $link_color; ?> !important;
}
.service-one .post { 
	border-bottom: 4px solid <?php echo $link_color; ?> !important;
}
.footer { 
	/*border-top: 3px solid <?php echo $link_color; ?> !important;*/
	background-color: <?php echo $link_color; ?> !important;
}
.contact-info-module:hover .contact-icon { 
	border: 3px solid <?php echo $link_color; ?> !important;
}
.team-avatar .team-social-icons a:hover {
	color: <?php echo $link_color; ?> !important;
}

.testimonial-one .review:before {
	background-color: <?php echo $link_color; ?> !important;
}

.team-module-two:before {
	background-color: <?php echo $link_color; ?> !important;
}

.team-module-two .team-social-icons a:hover{
	color: <?php echo $link_color; ?> !important;
}
figure.portfolio-snipone:before {
    background-color:  <?php echo $link_color; ?> !important;
	border-right: 1px solid  <?php echo $link_color; ?> !important;
}
figure.portfolio-snipone i:hover{
	color:  <?php echo $link_color; ?> !important;
}

.portfolio-snipone a:hover{
	color: <?php echo $link_color; ?> !important;
}


/*--------------------------------------------------------------*/
/*	Woocommerce Custom CSS
/*--------------------------------------------------------------*/
.shop .add-to-cart a {
    background-color: <?php echo $link_color; ?>;
	color: #fff;
}
.shop .product-sale {
    color: <?php echo $link_color; ?>;
}
.shop .inner-content ins {
    background-color: <?php echo $link_color; ?>;
	color: #fff;
}
.woocommerce span.onsale {
	color: <?php echo $link_color; ?>;
}
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
    background-color: <?php echo $link_color; ?>;
}
.woocommerce .commentlist .star-rating {
    color: <?php echo $link_color; ?>;
}
.woocommerce #reviews #comments ol.commentlist li img.avatar {
	background-color: <?php echo $link_color; ?>;
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
    color: <?php echo $link_color; ?>;
    border: none;
}
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
	background-color: <?php echo $link_color; ?>;
}
p.stars .star-1,
p.stars .star-2,
p.stars .star-3,
p.stars .star-4,
p.stars .star-5 {
	color: <?php echo $link_color; ?>;
}

</style>
<?php endif; } ?>