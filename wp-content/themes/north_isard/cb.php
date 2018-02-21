<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/******************************************************/
/***************   PRONTO  ***************************/
/******************************************************/
/******************************************************/
/******************************************************/


a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, caption, canvas, center, cite, code, dd, del, details, dfn, dialog, div, dl, dt, em, embed, fieldset, figcaption, figure, form, footer, header, hgroup, h1, h2, h3, h4, h5, h6, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, strong, sub, summary, sup, tt, table, tbody, textarea, tfoot, thead, time, tr, th, td, u, ul, var, video { font-family: inherit; font-size: 100%; font-weight: inherit; font-style: inherit; vertical-align: baseline; white-space: normal; margin: 0; padding: 0; border: 0; outline: 0; background: transparent; }
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }
ol, ul { list-style: none }
blockquote, q { quotes: none }
:focus { outline: 0 }
table { border-collapse: collapse; border-spacing: 0; }
img { max-width: 100%; height: auto; }
.row:after, .col:after, .clr:after, .group:after { content: ""; display: block; height: 0; clear: both; visibility: hidden; }
.row { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
.col { margin-bottom: 1.5em; display: block; float: left; width: 100%; margin-bottom: 1.5em; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
@media (min-width:768px) { 
    .col { margin-left: 2% }
}
@media (min-width:768px) { 
    .span_1{width:2.25%}.span_2{width:6.5%}.span_3{width:10.75%}.span_4{width:15.0%}.span_5{width:19.25%}.span_6{width:23.5%}.span_7{width:27.75%}.span_8{width:32.0%}.span_9{width:36.25%}.span_10{width:40.5%}.span_11{width:44.75%}.span_12{width:49.0%}.span_13{width:53.25%}.span_14{width:57.5%}.span_15{width:61.75%}.span_16{width:66.0%}.span_17{width:70.25%}.span_18{width:74.5%}.span_19{width:78.75%}.span_20{width:83.0%}.span_21{width:87.25%}.span_22{width:91.5%}.span_23{width:95.75%}.span_24{width:100%}
}
/*clear left margin*/
.clr-margin { margin-left: 0 }
/* Lists
----------------------------------------------------------- */
.entry ul, .entry ol { margin: 30px 0 30px 30px }
.entry ul { list-style: disc }
.entry ol { list-style: decimal }
/* Forms
----------------------------------------------------------- */
/*reset search styling*/
input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-results-button, input[type="search"]::-webkit-search-results-decoration { display: none }
/*inputs*/
input[type=search], input[type="text"], input[type="password"], input[type="email"], input[type="tel"], input[type="url"], textarea { font-family: inherit; border: 1px solid #ccc; background: #fff;color: #505050; display: block; font-size: 13px; font-weight: normal; margin: 0 0 5px; padding: 7px 10px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; width: 100%; -webkit-appearance: none; -webkit-transition: all 0.1s ease-in-out; -moz-transition: all 0.1s ease-in-out; -o-transition: all 0.1s ease-in-out; box-shadow: 0 1px 1px rgba(0,0,0,0.06);  max-width: 80%; width: 240px;  }
textarea { width: 100%; max-width: 100%; padding: 15px; -webkit-appearance: none;border-radius: 0; }
input[type=search] { font-size: 12px; font-weight: normal; }
#sidebar #searchsubmit, #footer #searchsubmit { display: none }
#sidebar input[type=search] { width: 100% }
input[type="search"]:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="url"]:focus, textarea:focus { outline: none; }
/*buttons*/
button, input[type="button"], input[type="submit"], input[type="submit"] { font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; font-size: 12px; cursor: pointer; display: inline-block; background: #F5F5F5 ;background: -webkit-gradient(linear, left bottom, left top, from(#F5F5F5), to(#FFF)), #FFF;background: -moz-linear-gradient(90deg, #F5F5F5 0%, #FFF 100%), #FFF;border: 1px solid #bbb;color: #444;font-weight: bold;line-height: 1.4em;padding: 8px 10px;width: auto; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); }
button:hover, input[type="button"]:hover, input[type="submit"]:hover, #commentsbox input[type="submit"]:hover { text-decoration: none; border-color: #aaa; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); }
button:active, input[type="button"]:active, input[type="submit"]:active, #commentsbox input[type="submit"]:active { background: #fff; }
/* WordPress Styles
----------------------------------------------------------- */
/*aligns*/
.aligncenter { display: block; margin: 0 auto; }
.alignright { float: right; margin: 0 0 10px 20px; }
.alignleft { float: left; margin: 0 20px 10px 0; }
/*floats*/
.floatleft { float: left }
.floatright { float: right }
/*text style*/
.textcenter { text-align: center }
.textright { text-align: right }
.textleft { text-align: left }
/*captions*/
.wp-caption { text-align: center; max-width: 100%; }
.wp-caption { border: 1px solid #ddd; text-align: center; background-color: #f3f3f3; padding-top: 4px; margin: 10px; -moz-border-radius: 3px; -khtml-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; }
.wp-caption img { display: block; margin: 0 auto; padding: 0; border: 0 none; }
.wp-caption p.wp-caption-text { font-size: 12px; padding: 4px; margin: 0; text-align: center; }
/*smiley reset*/
.wp-smiley { margin: 0; max-height: 1em; }
/*blockquote*/
blockquote.left { margin-right: 20px; text-align: right; margin-left: 0; width: 33%; float: left; }
blockquote.right { margin-left: 20px; text-align: left; margin-right: 0; width: 33%; float: right; }
/*img attachment*/
#img-attch-page { text-align: center; overflow: hidden; }
#img-attch-page img { display: inline-block; margin: 0 auto; max-width: 100%; margin-bottom: 20px; }
/*gallery shortcode*/
.gallery-item img { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
/* Site Widths & Core Layout
----------------------------------------------------------- */
.container { margin: 0 auto; padding: 40px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
.container-left { position: absolute; left: 40px; top: 40px; width: 200px; }
.container-right { padding-left: 240px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
.single .container-right,
.page .container-right { max-width: 1120px; min-width: 500px; }
.boxed { background: #fff; padding: 30px; box-shadow: 0 1px 1px rgba(0,0,0,0.15); }
/* Body, Main & Commons
----------------------------------------------------------- */
body { background: #f9f9f9 url("images/bg.png"); nowhitespace: afterproperty; font: 14px/1.8 'Raleway', Helvetica Neue, Helvetica, Arial, sans-serif; color: #444; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; }
//body a { color: #14B694 }
body a:hover { color: #000; text-decoration: underline; }
img { max-width: 100% }
.entry-footer { clear: both; margin: 20px 0 0; }
.full-width { width: 100% !important }
#grid { position: relative; }

/* Commons
----------------------------------------------------------- */
/*read more*/
a.read-more:hover { color: #000; text-decoration: none; }
blockquote { background: #eee; border-left: 10px solid #ddd; margin: 20px 0; padding: 20px; padding-left: 20px; font-family: Georgia, Times New Roman, Times, serif; font-style: italic; font-size: 16px; color: #666; line-height: 1.4em; }
blockquote p:last-child { margin: 0 }
pre { background: #eee; margin: 20px 0px; padding: 20px; border: 1px solid #ddd; white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word; text-shadow: 1px 1px 1px rgba(255,255,255,0.85); }
address { letter-spacing: 1px; margin: 20px 0; }
#page-featured-image img { display: block; width: 100%; }
.bypostauthor { }
/* Typography
----------------------------------------------------------- */
h1, h2, h3, h4, h5, h6 { font-weight: bold; color: #000 }
h1, h2, h3, h4, h5, h6 {  }
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: #000; text-decoration: none; }
h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { color: #000; }
h2, h3, h4, h5, h6 { margin: 30px 0 20px; font-weight: 600; }
h1 { font-size: 24px; margin: 0 0 20px; }
h2 { font-size: 18px }
h3 { font-size: 16px }
h4 { font-size: 14px }
h5 { font-size: 12px }
h6 { font-size: 11px }
.subheader { color: #777 }
p { margin: 0 0 20px }
p img { margin: 0 }
p.lead { font-size: 21px; line-height: 27px; color: #777; }
em { font-style: italic }
strong { font-weight: bold }
small { font-size: 80% }
hr { border: solid #eee; border-width: 1px 0 0; clear: both; margin: 40px 0 40px; height: 0; }
p a, p a:visited { line-height: inherit }
a:link { text-decoration: none }
a:focus { outline: 0 }
a { outline: 0 }
p a, p a:visited { line-height: inherit }
a:focus { outline: 0 }
/* Headings
----------------------------------------------------------- */
/*page heading*/
//.page-header { position: relative; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.6); }
//.page-header:after { display: block; content: ""; height: 1px; width: 100%; background: #ddd; margin-top: 20px; }
//.page-header h1, .page-header h2 { font-size: 24px; line-height: 1.2em; color: #000; margin: 0px; }
.archive-meta { font-size: 14px; margin-top: 5px; }
.archive-meta p:last-child { margin: 0 }
.post-header { margin-bottom: 30px; }
.post-header h1 { margin: 0; line-height: 1.3em; }
/*heading class*/
.heading { margin: 0 0 30px; font-size: 16px; text-transform: uppercase; padding-bottom: 10px; border-bottom: double #eee; }
/* Header
----------------------------------------------------------- */
#masthead { position: relative; margin-bottom: 30px; }
.logo { float: left }
.logo a { padding: 0px; margin: 0px; text-decoration: none; display: inline-block; }
.logo h1 a, #logo h2 a { color: #000 }
.logo h1 a:hover, .logo h2 a:hover { color: #14B694; text-decoration: none; }
.logo img { display: block; max-width: 100%; }
.logo h1, .logo h2 { font-size: 32px; text-transform: uppercase; margin: 0; line-height: 1.3em; font-weight: bold; }
p.site-description { font-size: 12px; margin: 0; line-height: 1.35em; color: #444; }
/* Main Navigation
----------------------------------------------------------- */
.dropdown-menu { margin-bottom: 30px; font-size: 12px; }
.dropdown-menu:before { content: ""; display: block; height: 1px; width: 25px; background: #bbb; margin: 20px 0; }
.dropdown-menu li ul { margin-left: 10px; }
.dropdown-menu li li:before { content: "\2013"; margin-right: 6px; color: #999; }
/* Posts
----------------------------------------------------------- */
/*entry*/
/**/.loop-entry { width: 240px; float: left; text-align: center; box-shadow: 0 1px 1px rgba(0,0,0,0.15); font-size: 12px; }
/**/.loop-entry { background: #fff; margin-bottom: 30px; }
/**/.loop-entry h2 { font-size: 14px; margin: 0 0 10px; line-height: 1.25em; }
/**/.loop-entry-img-link { display: block; }
/**/.loop-entry-img-link img { display: block; width: 100%; }
/**/.loop-entry-img-link img:hover { opacity: 0.8; -moz-opacity: 0.8; -webkit-opacity: 0.8; }
/**/.loop-entry-details { padding: 10px 15px; }
/**/.loop-entry-excerpt { font-family: 'Georgia', Times New Roman, Times, serif; line-height: 1.6em; color: #666; }
/**/.loop-entry p:last-child { margin: 0 }
/*post-thumbnail*/
#post-thumbnail img { width: 100%; display: block; }
/*tags*/
/**/.post-tags { margin-top: 40px }
/**/.post-tags a { font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; display: block; float: left; margin-right: 5px; margin-bottom: 5px; background: #F5F5F5 ;background: -webkit-gradient(linear, left bottom, left top, from(#F5F5F5), to(#FFF)), #FFF;background: -moz-linear-gradient(90deg, #F5F5F5 0%, #FFF 100%), #FFF;border: 1px solid #bbb;color: #444;font-size: 11px;font-weight: bold;line-height: 1.4em;padding: 6px 10px;width: auto; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); }
/**/.post-tags a:hover { text-decoration: none; border-color: #aaa; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2); }
/**/.post-tags a:active { background: #fff; }
/* Meta
----------------------------------------------------------- */
.meta { display: block; float: none; font-size: 12px; color: #999; margin: 10px 0 0; padding-bottom: 10px; border-bottom: double #eee; }
.meta a { color: #999 }
.meta a:hover { color: #000; }
.meta li { float: left; margin-right: 20px; margin-bottom: 5px; }
.meta li i { margin-right: 5px }
/* Pagination
----------------------------------------------------------- */
ul.page-numbers { list-style: none; margin: 0; }
.page-numbers:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
ul.page-numbers li { display: block; float: left; margin: 0 3px 3px 0; text-align: center; }
.page-numbers a, .page-numbers span { font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; display: block; padding: 6px 8px; text-decoration: none; font-weight: bold; cursor: pointer; background: #F5F5F5 ;background: -webkit-gradient(linear, left bottom, left top, from(#F5F5F5), to(#FFF)), #FFF;background: -moz-linear-gradient(90deg, #F5F5F5 0%, #FFF 100%), #FFF;border: 1px solid #bbb;color: #444;font-size: 11px;font-weight: bold;line-height: 1.4em;padding: 5px 10px;width: auto; border-radius: 3px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); }
.page-numbers a:hover, .page-numbers.current, .page-numbers.current:hover { background: #fff; text-decoration: none; border-color: #ccc; box-shadow: none; }
/*infinite scroll*/
.infinite-scroll-loader { position: absolute; bottom: -20px; left: 50%; margin-left: -8px; height: 16px; line-height: 16px; width: 30px; background: url("images/preloaders/loader.gif") center center no-repeat; text-indent: -9999px; }
#infscr-loading img { display: none !important }
.infinite-scroll-nav { display: none }
/*Add some padding*/
.infinite-scroll-wrap { position: relative; padding-bottom: 20px; }
/* Page Links
----------------------------------------------------------- */
.page-links { margin-top: 20px }
.page-links span { float: left; display: block; padding: 4px 10px; margin: 0 3px 3px 0; text-decoration: none; font-size: 11px; color: #fff; background: #444; border: 1px solid #444; border-radius: 3px; }
.page-links a { float: left; display: block; padding: 4px 10px; margin: 0 3px 3px 0; text-decoration: none; display: block; color: #666; background: #eee; text-shadow: 0; border-radius: 3px; }
.page-links a:hover { background: #444; border-color: #444; }
.page-links a span { background: none; padding: 0; margin: 0; border: none; color: #666; }
.page-links a:hover span { color: #fff }
/* Single Nav
----------------------------------------------------------- */
.single-nav { margin-top: 30px; }
.single-nav a { font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; }
.single-nav a { color: #666; }
.single-nav a:hover { color: #000; }
.single-nav-left a i { margin-right: 10px; }
.single-nav-right { text-align: right; float: right; }
.single-nav-right a i { margin-left: 10px; }
/* Yoast Breadcrumbs
----------------------------------------------------------- */
#breadcrumbs { font-size: 12px; margin-top: -10px; padding-bottom: 15px; border-bottom: 1px solid #eee; color: #777; }
/* Sidebar
----------------------------------------------------------- */
.sidebar-container { font-size: 12px; }
.sidebar-box { margin-bottom: 30px }
.sidebar-container h4 { margin: 0 0 5px; font-size: 12px; color: #222; text-shadow: 1px 1px 1px #fff; }
.sidebar-container a,
.navbar a { color: #666; }
.sidebar-container a:hover,
.navbar a:hover { color: #000; }
.sidebar-box:before { content: ""; display: block; height: 1px; width: 20px; background: #bbb; margin: 20px 0; }
/* Widgets
----------------------------------------------------------- */
/*tagcloud*/
.tagcloud a { display: block; float: left; font-size: 12px !important; line-height: 1.3em !important; background: #14B694; color: #fff; padding: 4px 10px; margin-right: 3px; margin-bottom: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15); }
.tagcloud a:hover { text-decoration: none; color: #fff; background: #444; }
/*calendar*/
#wp-calendar { width: 100% }
/* Footer
----------------------------------------------------------- */
#copyright { width: 200px;
             position: fixed; left: 40px; bottom: 40px; }

/* Form 7
----------------------------------------------------------- */
div.wpcf7 .wpcf7-not-valid { border-color: #F00; border-width: 2px; }
div.wpcf7 p { font-size: 13px; font-weight: bold; color: #666; }
span.wpcf7-not-valid-tip { display: none !important }
div.wpcf7-validation-errors { margin: 0; padding: 10px; color: #c4690e; background: #fffdf3; text-align: center; border: 1px solid #e6bf4a; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
div.wpcf7-mail-sent-ng { margin: 0; padding: 10px; background: #ffe9e9; color: #d04544; border: 1px solid #e7a9a9; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
/* Comments
----------------------------------------------------------- */
#comments { margin-top: 40px; font-size: 13px; }
.comment-notes { font-size: 12px; color: #666; font-family: 'Noto Serif', Georgia, Times New Roman, Times, serif; }
.comment-list .children { margin-left: 20px }
.comment-list li article { position: relative }
.comment-author { position: absolute; top: 0; left: 0; }
.comment-author .avatar { border-radius: 3px; display: block; }
.comment-details { margin-left: 90px; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee; }
.comment-meta { margin-bottom: 5px }
.comment-meta .fn { font-weight: bold; font-size: 14px; }
.comment-date a { font-size: 11px; color: #999; }
.comment-reply-link { font-weight: bold; color: #888; font-size: 12px; }
.comment-reply-link:hover { text-decoration: none; color: #000; }
#cancel-comment-reply-link { float: right; background: #fff; color: #F00; padding-left: 10px; }
#respond h3 { font-size: 21px; height: 35px; line-height: 35px; margin: 0; }
#commentform label { font-size: 12px; font-weight: bold; }
#commentform .comment-form-author,
#commentform .comment-form-email,
#commentform .comment-form-url { width: 240px; max-width: 70%; }
.comment-navigation { font-size: 12px }
.nav-next { text-align: right }
.form-allowed-tags { display: none }
span.required { color: #F00 }
/*WP JetPack*/
.comment-subscription-form { margin: 0px; }
.comment-subscription-form:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.comment-subscription-form input, .comment-subscription-form label { float: left; margin: 0px !important; margin-right: 5px !important; font-size: 11px; }
/* 404 Page
----------------------------------------------------------- */
#error-page-title { font-size: 32px; text-align: center; font-weight: bold; background: none; line-height: 1em; border: none; margin: 0 0 10px; color: #777; }
#error-page-title span { margin-right: 7px }
#error-page-text { text-align: center; font-size: 11px; }