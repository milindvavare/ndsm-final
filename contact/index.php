<?php 
include('../db/db.php');
$sql_social_media = "SELECT * FROM social_media";
$result = mysqli_query($conn, $sql_social_media);
if (mysqli_num_rows($result) > 0) {
   foreach ($result as $row) {
      $facebook = $row['facebook'];
      $instagram = $row['instagram'];
      $twitter = $row['twitter'];
      $linkedin = $row['linkedin'];
   }
}

$sql_information = "SELECT * FROM pc_information";
$result_info = mysqli_query($conn, $sql_information);
if (mysqli_num_rows($result_info) > 0) {
   foreach ($result_info as $row) {
      $address_pc = $row['address'];
      $email_pc_id = $row['email'];
      $contact_no_pc = $row['contact'];
      $alternative_contact_pc = $row['alternative_contact'];
   }
}

?>
<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
   <title>NDSM</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
<link rel="alternate" type="application/rss+xml" title="Main Demo &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Main Demo &raquo; Comments Feed" href="../comments/feed/index.html" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.omexer.com\/main\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min6a4d.css?ver=6.1.1' type='text/css' media='all' />
<style id='wp-block-library-theme-inline-css' type='text/css'>
.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:"0 0 1em 0"}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
</style>
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style8caf.css?ver=8.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style8caf.css?ver=8.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='../wp-includes/css/classic-themes.min68b3.css?ver=1' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--strong-violet: #302e4e;--wp--preset--color--lighter-violet: #7974b5;--wp--preset--color--strong-blue: #0862a2;--wp--preset--color--lighter-blue: #189bf8;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<style id='extendify-gutenberg-patterns-and-templates-utilities-inline-css' type='text/css'>
.ext-absolute {
  position: absolute !important;
}

.ext-relative {
  position: relative !important;
}

.ext-top-base {
  top: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-top-lg {
  top: var(--extendify--spacing--large, 3rem) !important;
}

.ext--top-base {
  top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--top-lg {
  top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-right-base {
  right: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-right-lg {
  right: var(--extendify--spacing--large, 3rem) !important;
}

.ext--right-base {
  right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--right-lg {
  right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-bottom-base {
  bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-bottom-lg {
  bottom: var(--extendify--spacing--large, 3rem) !important;
}

.ext--bottom-base {
  bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--bottom-lg {
  bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-left-base {
  left: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-left-lg {
  left: var(--extendify--spacing--large, 3rem) !important;
}

.ext--left-base {
  left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--left-lg {
  left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-order-1 {
  order: 1 !important;
}

.ext-order-2 {
  order: 2 !important;
}

.ext-col-auto {
  grid-column: auto !important;
}

.ext-col-span-1 {
  grid-column: span 1 / span 1 !important;
}

.ext-col-span-2 {
  grid-column: span 2 / span 2 !important;
}

.ext-col-span-3 {
  grid-column: span 3 / span 3 !important;
}

.ext-col-span-4 {
  grid-column: span 4 / span 4 !important;
}

.ext-col-span-5 {
  grid-column: span 5 / span 5 !important;
}

.ext-col-span-6 {
  grid-column: span 6 / span 6 !important;
}

.ext-col-span-7 {
  grid-column: span 7 / span 7 !important;
}

.ext-col-span-8 {
  grid-column: span 8 / span 8 !important;
}

.ext-col-span-9 {
  grid-column: span 9 / span 9 !important;
}

.ext-col-span-10 {
  grid-column: span 10 / span 10 !important;
}

.ext-col-span-11 {
  grid-column: span 11 / span 11 !important;
}

.ext-col-span-12 {
  grid-column: span 12 / span 12 !important;
}

.ext-col-span-full {
  grid-column: 1 / -1 !important;
}

.ext-col-start-1 {
  grid-column-start: 1 !important;
}

.ext-col-start-2 {
  grid-column-start: 2 !important;
}

.ext-col-start-3 {
  grid-column-start: 3 !important;
}

.ext-col-start-4 {
  grid-column-start: 4 !important;
}

.ext-col-start-5 {
  grid-column-start: 5 !important;
}

.ext-col-start-6 {
  grid-column-start: 6 !important;
}

.ext-col-start-7 {
  grid-column-start: 7 !important;
}

.ext-col-start-8 {
  grid-column-start: 8 !important;
}

.ext-col-start-9 {
  grid-column-start: 9 !important;
}

.ext-col-start-10 {
  grid-column-start: 10 !important;
}

.ext-col-start-11 {
  grid-column-start: 11 !important;
}

.ext-col-start-12 {
  grid-column-start: 12 !important;
}

.ext-col-start-13 {
  grid-column-start: 13 !important;
}

.ext-col-start-auto {
  grid-column-start: auto !important;
}

.ext-col-end-1 {
  grid-column-end: 1 !important;
}

.ext-col-end-2 {
  grid-column-end: 2 !important;
}

.ext-col-end-3 {
  grid-column-end: 3 !important;
}

.ext-col-end-4 {
  grid-column-end: 4 !important;
}

.ext-col-end-5 {
  grid-column-end: 5 !important;
}

.ext-col-end-6 {
  grid-column-end: 6 !important;
}

.ext-col-end-7 {
  grid-column-end: 7 !important;
}

.ext-col-end-8 {
  grid-column-end: 8 !important;
}

.ext-col-end-9 {
  grid-column-end: 9 !important;
}

.ext-col-end-10 {
  grid-column-end: 10 !important;
}

.ext-col-end-11 {
  grid-column-end: 11 !important;
}

.ext-col-end-12 {
  grid-column-end: 12 !important;
}

.ext-col-end-13 {
  grid-column-end: 13 !important;
}

.ext-col-end-auto {
  grid-column-end: auto !important;
}

.ext-row-auto {
  grid-row: auto !important;
}

.ext-row-span-1 {
  grid-row: span 1 / span 1 !important;
}

.ext-row-span-2 {
  grid-row: span 2 / span 2 !important;
}

.ext-row-span-3 {
  grid-row: span 3 / span 3 !important;
}

.ext-row-span-4 {
  grid-row: span 4 / span 4 !important;
}

.ext-row-span-5 {
  grid-row: span 5 / span 5 !important;
}

.ext-row-span-6 {
  grid-row: span 6 / span 6 !important;
}

.ext-row-span-full {
  grid-row: 1 / -1 !important;
}

.ext-row-start-1 {
  grid-row-start: 1 !important;
}

.ext-row-start-2 {
  grid-row-start: 2 !important;
}

.ext-row-start-3 {
  grid-row-start: 3 !important;
}

.ext-row-start-4 {
  grid-row-start: 4 !important;
}

.ext-row-start-5 {
  grid-row-start: 5 !important;
}

.ext-row-start-6 {
  grid-row-start: 6 !important;
}

.ext-row-start-7 {
  grid-row-start: 7 !important;
}

.ext-row-start-auto {
  grid-row-start: auto !important;
}

.ext-row-end-1 {
  grid-row-end: 1 !important;
}

.ext-row-end-2 {
  grid-row-end: 2 !important;
}

.ext-row-end-3 {
  grid-row-end: 3 !important;
}

.ext-row-end-4 {
  grid-row-end: 4 !important;
}

.ext-row-end-5 {
  grid-row-end: 5 !important;
}

.ext-row-end-6 {
  grid-row-end: 6 !important;
}

.ext-row-end-7 {
  grid-row-end: 7 !important;
}

.ext-row-end-auto {
  grid-row-end: auto !important;
}

.ext-m-0:not([style*="margin"]) {
  margin: 0 !important;
}

.ext-m-auto:not([style*="margin"]) {
  margin: auto !important;
}

.ext-m-base:not([style*="margin"]) {
  margin: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-m-lg:not([style*="margin"]) {
  margin: var(--extendify--spacing--large, 3rem) !important;
}

.ext--m-base:not([style*="margin"]) {
  margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--m-lg:not([style*="margin"]) {
  margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-mx-0:not([style*="margin"]) {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.ext-mx-auto:not([style*="margin"]) {
  margin-left: auto !important;
  margin-right: auto !important;
}

.ext-mx-base:not([style*="margin"]) {
  margin-left: var(--wp--style--block-gap, 1.75rem) !important;
  margin-right: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-mx-lg:not([style*="margin"]) {
  margin-left: var(--extendify--spacing--large, 3rem) !important;
  margin-right: var(--extendify--spacing--large, 3rem) !important;
}

.ext--mx-base:not([style*="margin"]) {
  margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--mx-lg:not([style*="margin"]) {
  margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-my-0:not([style*="margin"]) {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.ext-my-auto:not([style*="margin"]) {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.ext-my-base:not([style*="margin"]) {
  margin-top: var(--wp--style--block-gap, 1.75rem) !important;
  margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-my-lg:not([style*="margin"]) {
  margin-top: var(--extendify--spacing--large, 3rem) !important;
  margin-bottom: var(--extendify--spacing--large, 3rem) !important;
}

.ext--my-base:not([style*="margin"]) {
  margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--my-lg:not([style*="margin"]) {
  margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-mt-0:not([style*="margin"]) {
  margin-top: 0 !important;
}

.ext-mt-auto:not([style*="margin"]) {
  margin-top: auto !important;
}

.ext-mt-base:not([style*="margin"]) {
  margin-top: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-mt-lg:not([style*="margin"]) {
  margin-top: var(--extendify--spacing--large, 3rem) !important;
}

.ext--mt-base:not([style*="margin"]) {
  margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--mt-lg:not([style*="margin"]) {
  margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-mr-0:not([style*="margin"]) {
  margin-right: 0 !important;
}

.ext-mr-auto:not([style*="margin"]) {
  margin-right: auto !important;
}

.ext-mr-base:not([style*="margin"]) {
  margin-right: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-mr-lg:not([style*="margin"]) {
  margin-right: var(--extendify--spacing--large, 3rem) !important;
}

.ext--mr-base:not([style*="margin"]) {
  margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--mr-lg:not([style*="margin"]) {
  margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-mb-0:not([style*="margin"]) {
  margin-bottom: 0 !important;
}

.ext-mb-auto:not([style*="margin"]) {
  margin-bottom: auto !important;
}

.ext-mb-base:not([style*="margin"]) {
  margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-mb-lg:not([style*="margin"]) {
  margin-bottom: var(--extendify--spacing--large, 3rem) !important;
}

.ext--mb-base:not([style*="margin"]) {
  margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--mb-lg:not([style*="margin"]) {
  margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-ml-0:not([style*="margin"]) {
  margin-left: 0 !important;
}

.ext-ml-auto:not([style*="margin"]) {
  margin-left: auto !important;
}

.ext-ml-base:not([style*="margin"]) {
  margin-left: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-ml-lg:not([style*="margin"]) {
  margin-left: var(--extendify--spacing--large, 3rem) !important;
}

.ext--ml-base:not([style*="margin"]) {
  margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
}

.ext--ml-lg:not([style*="margin"]) {
  margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
}

.ext-block {
  display: block !important;
}

.ext-inline-block {
  display: inline-block !important;
}

.ext-inline {
  display: inline !important;
}

.ext-flex {
  display: flex !important;
}

.ext-inline-flex {
  display: inline-flex !important;
}

.ext-grid {
  display: grid !important;
}

.ext-inline-grid {
  display: inline-grid !important;
}

.ext-hidden {
  display: none !important;
}

.ext-w-auto {
  width: auto !important;
}

.ext-w-full {
  width: 100% !important;
}

.ext-max-w-full {
  max-width: 100% !important;
}

.ext-flex-1 {
  flex: 1 1 0% !important;
}

.ext-flex-auto {
  flex: 1 1 auto !important;
}

.ext-flex-initial {
  flex: 0 1 auto !important;
}

.ext-flex-none {
  flex: none !important;
}

.ext-flex-shrink-0 {
  flex-shrink: 0 !important;
}

.ext-flex-shrink {
  flex-shrink: 1 !important;
}

.ext-flex-grow-0 {
  flex-grow: 0 !important;
}

.ext-flex-grow {
  flex-grow: 1 !important;
}

.ext-list-none {
  list-style-type: none !important;
}

.ext-grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
}

.ext-grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
}

.ext-grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
}

.ext-grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
}

.ext-grid-cols-5 {
  grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
}

.ext-grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
}

.ext-grid-cols-7 {
  grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
}

.ext-grid-cols-8 {
  grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
}

.ext-grid-cols-9 {
  grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
}

.ext-grid-cols-10 {
  grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
}

.ext-grid-cols-11 {
  grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
}

.ext-grid-cols-12 {
  grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
}

.ext-grid-cols-none {
  grid-template-columns: none !important;
}

.ext-grid-rows-1 {
  grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
}

.ext-grid-rows-2 {
  grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
}

.ext-grid-rows-3 {
  grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
}

.ext-grid-rows-4 {
  grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
}

.ext-grid-rows-5 {
  grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
}

.ext-grid-rows-6 {
  grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
}

.ext-grid-rows-none {
  grid-template-rows: none !important;
}

.ext-flex-row {
  flex-direction: row !important;
}

.ext-flex-row-reverse {
  flex-direction: row-reverse !important;
}

.ext-flex-col {
  flex-direction: column !important;
}

.ext-flex-col-reverse {
  flex-direction: column-reverse !important;
}

.ext-flex-wrap {
  flex-wrap: wrap !important;
}

.ext-flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.ext-flex-nowrap {
  flex-wrap: nowrap !important;
}

.ext-items-start {
  align-items: flex-start !important;
}

.ext-items-end {
  align-items: flex-end !important;
}

.ext-items-center {
  align-items: center !important;
}

.ext-items-baseline {
  align-items: baseline !important;
}

.ext-items-stretch {
  align-items: stretch !important;
}

.ext-justify-start {
  justify-content: flex-start !important;
}

.ext-justify-end {
  justify-content: flex-end !important;
}

.ext-justify-center {
  justify-content: center !important;
}

.ext-justify-between {
  justify-content: space-between !important;
}

.ext-justify-around {
  justify-content: space-around !important;
}

.ext-justify-evenly {
  justify-content: space-evenly !important;
}

.ext-justify-items-start {
  justify-items: start !important;
}

.ext-justify-items-end {
  justify-items: end !important;
}

.ext-justify-items-center {
  justify-items: center !important;
}

.ext-justify-items-stretch {
  justify-items: stretch !important;
}

.ext-gap-0 {
  gap: 0 !important;
}

.ext-gap-base {
  gap: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-gap-lg {
  gap: var(--extendify--spacing--large, 3rem) !important;
}

.ext-gap-x-0 {
  -moz-column-gap: 0 !important;
       column-gap: 0 !important;
}

.ext-gap-x-base {
  -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
       column-gap: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-gap-x-lg {
  -moz-column-gap: var(--extendify--spacing--large, 3rem) !important;
       column-gap: var(--extendify--spacing--large, 3rem) !important;
}

.ext-gap-y-0 {
  row-gap: 0 !important;
}

.ext-gap-y-base {
  row-gap: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-gap-y-lg {
  row-gap: var(--extendify--spacing--large, 3rem) !important;
}

.ext-justify-self-auto {
  justify-self: auto !important;
}

.ext-justify-self-start {
  justify-self: start !important;
}

.ext-justify-self-end {
  justify-self: end !important;
}

.ext-justify-self-center {
  justify-self: center !important;
}

.ext-justify-self-stretch {
  justify-self: stretch !important;
}

.ext-rounded-none {
  border-radius: 0px !important;
}

.ext-rounded-full {
  border-radius: 9999px !important;
}

.ext-rounded-t-none {
  border-top-left-radius: 0px !important;
  border-top-right-radius: 0px !important;
}

.ext-rounded-t-full {
  border-top-left-radius: 9999px !important;
  border-top-right-radius: 9999px !important;
}

.ext-rounded-r-none {
  border-top-right-radius: 0px !important;
  border-bottom-right-radius: 0px !important;
}

.ext-rounded-r-full {
  border-top-right-radius: 9999px !important;
  border-bottom-right-radius: 9999px !important;
}

.ext-rounded-b-none {
  border-bottom-right-radius: 0px !important;
  border-bottom-left-radius: 0px !important;
}

.ext-rounded-b-full {
  border-bottom-right-radius: 9999px !important;
  border-bottom-left-radius: 9999px !important;
}

.ext-rounded-l-none {
  border-top-left-radius: 0px !important;
  border-bottom-left-radius: 0px !important;
}

.ext-rounded-l-full {
  border-top-left-radius: 9999px !important;
  border-bottom-left-radius: 9999px !important;
}

.ext-rounded-tl-none {
  border-top-left-radius: 0px !important;
}

.ext-rounded-tl-full {
  border-top-left-radius: 9999px !important;
}

.ext-rounded-tr-none {
  border-top-right-radius: 0px !important;
}

.ext-rounded-tr-full {
  border-top-right-radius: 9999px !important;
}

.ext-rounded-br-none {
  border-bottom-right-radius: 0px !important;
}

.ext-rounded-br-full {
  border-bottom-right-radius: 9999px !important;
}

.ext-rounded-bl-none {
  border-bottom-left-radius: 0px !important;
}

.ext-rounded-bl-full {
  border-bottom-left-radius: 9999px !important;
}

.ext-border-0 {
  border-width: 0px !important;
}

.ext-border-t-0 {
  border-top-width: 0px !important;
}

.ext-border-r-0 {
  border-right-width: 0px !important;
}

.ext-border-b-0 {
  border-bottom-width: 0px !important;
}

.ext-border-l-0 {
  border-left-width: 0px !important;
}

.ext-p-0:not([style*="padding"]) {
  padding: 0 !important;
}

.ext-p-base:not([style*="padding"]) {
  padding: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-p-lg:not([style*="padding"]) {
  padding: var(--extendify--spacing--large, 3rem) !important;
}

.ext-px-0:not([style*="padding"]) {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.ext-px-base:not([style*="padding"]) {
  padding-left: var(--wp--style--block-gap, 1.75rem) !important;
  padding-right: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-px-lg:not([style*="padding"]) {
  padding-left: var(--extendify--spacing--large, 3rem) !important;
  padding-right: var(--extendify--spacing--large, 3rem) !important;
}

.ext-py-0:not([style*="padding"]) {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.ext-py-base:not([style*="padding"]) {
  padding-top: var(--wp--style--block-gap, 1.75rem) !important;
  padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-py-lg:not([style*="padding"]) {
  padding-top: var(--extendify--spacing--large, 3rem) !important;
  padding-bottom: var(--extendify--spacing--large, 3rem) !important;
}

.ext-pt-0:not([style*="padding"]) {
  padding-top: 0 !important;
}

.ext-pt-base:not([style*="padding"]) {
  padding-top: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-pt-lg:not([style*="padding"]) {
  padding-top: var(--extendify--spacing--large, 3rem) !important;
}

.ext-pr-0:not([style*="padding"]) {
  padding-right: 0 !important;
}

.ext-pr-base:not([style*="padding"]) {
  padding-right: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-pr-lg:not([style*="padding"]) {
  padding-right: var(--extendify--spacing--large, 3rem) !important;
}

.ext-pb-0:not([style*="padding"]) {
  padding-bottom: 0 !important;
}

.ext-pb-base:not([style*="padding"]) {
  padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-pb-lg:not([style*="padding"]) {
  padding-bottom: var(--extendify--spacing--large, 3rem) !important;
}

.ext-pl-0:not([style*="padding"]) {
  padding-left: 0 !important;
}

.ext-pl-base:not([style*="padding"]) {
  padding-left: var(--wp--style--block-gap, 1.75rem) !important;
}

.ext-pl-lg:not([style*="padding"]) {
  padding-left: var(--extendify--spacing--large, 3rem) !important;
}

.ext-text-left {
  text-align: left !important;
}

.ext-text-center {
  text-align: center !important;
}

.ext-text-right {
  text-align: right !important;
}

.ext-leading-none {
  line-height: 1 !important;
}

.ext-leading-tight {
  line-height: 1.25 !important;
}

.ext-leading-snug {
  line-height: 1.375 !important;
}

.ext-leading-normal {
  line-height: 1.5 !important;
}

.ext-leading-relaxed {
  line-height: 1.625 !important;
}

.ext-leading-loose {
  line-height: 2 !important;
}

.ext-aspect-square img {
  aspect-ratio: 1 / 1 !important;
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.ext-aspect-landscape img {
  aspect-ratio: 4 / 3 !important;
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.ext-aspect-landscape-wide img {
  aspect-ratio: 16 / 9 !important;
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.ext-aspect-portrait img {
  aspect-ratio: 3 / 4 !important;
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.ext-aspect-square .components-resizable-box__container,
.ext-aspect-landscape .components-resizable-box__container,
.ext-aspect-landscape-wide .components-resizable-box__container,
.ext-aspect-portrait .components-resizable-box__container {
  height: auto !important;
}

.clip-path--rhombus img {
  -webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%) !important;
          clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%) !important;
}

.clip-path--diamond img {
  -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
          clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
}

.clip-path--rhombus-alt img {
  -webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%) !important;
          clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%) !important;
}

/*
The .ext utility is a top-level class that we use to target contents within our patterns.
We use it here to ensure columns blocks display well across themes.
*/

.wp-block-columns[class*="fullwidth-cols"] {
  /* no suggestion */
  margin-bottom: unset !important;
}

.wp-block-column.editor\:pointer-events-none {
  /* no suggestion */
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.is-root-container.block-editor-block-list__layout
    > [data-align="full"]:not(:first-of-type)
    > .wp-block-column.editor\:pointer-events-none,
.is-root-container.block-editor-block-list__layout
    > [data-align="wide"]
    > .wp-block-column.editor\:pointer-events-none {
  /* no suggestion */
  margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
}

.is-root-container.block-editor-block-list__layout
    > [data-align="full"]:not(:first-of-type)
    > .ext-my-0,
.is-root-container.block-editor-block-list__layout
    > [data-align="wide"]
    > .ext-my-0:not([style*="margin"]) {
  /* no suggestion */
  margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
}

/* Some popular themes use padding instead of core margin for columns; remove it */

.ext .wp-block-columns .wp-block-column[style*="padding"] {
  /* no suggestion */
  padding-left: 0 !important;
  padding-right: 0 !important;
}

/* Some popular themes add double spacing between columns; remove it */

.ext
    .wp-block-columns
    + .wp-block-columns:not([class*="mt-"]):not([class*="my-"]):not([style*="margin"]) {
  /* no suggestion */
  margin-top: 0 !important;
}

[class*="fullwidth-cols"] .wp-block-column:first-child,
[class*="fullwidth-cols"] .wp-block-group:first-child {
  /* no suggestion */
}

[class*="fullwidth-cols"] .wp-block-column:first-child, [class*="fullwidth-cols"] .wp-block-group:first-child {
  margin-top: 0 !important;
}

[class*="fullwidth-cols"] .wp-block-column:last-child,
[class*="fullwidth-cols"] .wp-block-group:last-child {
  /* no suggestion */
}

[class*="fullwidth-cols"] .wp-block-column:last-child, [class*="fullwidth-cols"] .wp-block-group:last-child {
  margin-bottom: 0 !important;
}

[class*="fullwidth-cols"] .wp-block-column:first-child > * {
  /* no suggestion */
  margin-top: 0 !important;
}

[class*="fullwidth-cols"] .wp-block-column > *:first-child {
  /* no suggestion */
  margin-top: 0 !important;
}

[class*="fullwidth-cols"] .wp-block-column > *:last-child {
  /* no suggestion */
  margin-bottom: 0 !important;
}

.ext .is-not-stacked-on-mobile .wp-block-column {
  /* no suggestion */
  margin-bottom: 0 !important;
}

/* Add base margin bottom to all columns */

.wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)
    > .wp-block-column:not(:last-child) {
  /* no suggestion */
  margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

@media (min-width: 782px) {
  .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)
        > .wp-block-column:not(:last-child) {
    /* no suggestion */
    margin-bottom: 0 !important;
  }
}

/* Remove margin bottom from "not-stacked" columns */

.wp-block-columns[class*="fullwidth-cols"].is-not-stacked-on-mobile
    > .wp-block-column {
  /* no suggestion */
  margin-bottom: 0 !important;
}

@media (min-width: 600px) and (max-width: 781px) {
  .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)
        > .wp-block-column:nth-child(even) {
    /* no suggestion */
    margin-left: var(--wp--style--block-gap, 2em) !important;
  }
}

/*
    The `tablet:fullwidth-cols` and `desktop:fullwidth-cols` utilities are used
    to counter the core/columns responsive for at our breakpoints.
*/

@media (max-width: 781px) {
  .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
    flex-wrap: wrap !important;
  }

  .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column {
    margin-left: 0 !important;
  }

  .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column:not([style*="margin"]) {
    /* no suggestion */
    margin-left: 0 !important;
  }

  .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column {
    flex-basis: 100% !important; /* Required to negate core/columns flex-basis */
  }
}

@media (max-width: 1079px) {
  .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
    flex-wrap: wrap !important;
  }

  .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column {
    margin-left: 0 !important;
  }

  .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column:not([style*="margin"]) {
    /* no suggestion */
    margin-left: 0 !important;
  }

  .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column {
    flex-basis: 100% !important; /* Required to negate core/columns flex-basis */
  }

  .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)
        > .wp-block-column:not(:last-child) {
    margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }
}

.direction-rtl {
  direction: rtl !important;
}

.direction-ltr {
  direction: ltr !important;
}

/* Use "is-style-" prefix to support adding this style to the core/list block */

.is-style-inline-list {
  padding-left: 0 !important;
}

.is-style-inline-list li {
  /* no suggestion */
  list-style-type: none !important;
}

@media (min-width: 782px) {
  .is-style-inline-list li {
    margin-right: var(--wp--style--block-gap, 1.75rem) !important;
    display: inline !important;
  }
}

.is-style-inline-list li:first-child {
  /* no suggestion */
}

@media (min-width: 782px) {
  .is-style-inline-list li:first-child {
    margin-left: 0 !important;
  }
}

.is-style-inline-list li:last-child {
  /* no suggestion */
}

@media (min-width: 782px) {
  .is-style-inline-list li:last-child {
    margin-right: 0 !important;
  }
}

.bring-to-front {
  position: relative !important;
  z-index: 10 !important;
}

.text-stroke {
  -webkit-text-stroke-width: var(
        --wp--custom--typography--text-stroke-width,
        2px
    ) !important;
  -webkit-text-stroke-color: var(--wp--preset--color--background) !important;
}

.text-stroke--primary {
  -webkit-text-stroke-width: var(
        --wp--custom--typography--text-stroke-width,
        2px
    ) !important;
  -webkit-text-stroke-color: var(--wp--preset--color--primary) !important;
}

.text-stroke--secondary {
  -webkit-text-stroke-width: var(
        --wp--custom--typography--text-stroke-width,
        2px
    ) !important;
  -webkit-text-stroke-color: var(--wp--preset--color--secondary) !important;
}

.editor\:no-caption .block-editor-rich-text__editable {
  display: none !important;
}

.editor\:no-inserter > .block-list-appender,
.editor\:no-inserter .wp-block-group__inner-container > .block-list-appender {
  display: none !important;
}

.editor\:no-inserter .wp-block-cover__inner-container > .block-list-appender {
  display: none !important;
}

.editor\:no-inserter .wp-block-column:not(.is-selected) > .block-list-appender {
  display: none !important;
}

.editor\:no-resize .components-resizable-box__handle::after,
.editor\:no-resize .components-resizable-box__side-handle::before,
.editor\:no-resize .components-resizable-box__handle {
  display: none !important;
  pointer-events: none !important;
}

.editor\:no-resize .components-resizable-box__container {
  display: block !important;
}

.editor\:pointer-events-none {
  pointer-events: none !important;
}

.is-style-angled {
  /* no suggestion */
  align-items: center !important;
  justify-content: flex-end !important;
}

.ext .is-style-angled > [class*="_inner-container"] {
  align-items: center !important;
}

.is-style-angled .wp-block-cover__image-background,
.is-style-angled .wp-block-cover__video-background {
  /* no suggestion */
  -webkit-clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
          clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
  z-index: 1 !important;
}

@media (min-width: 782px) {
  .is-style-angled .wp-block-cover__image-background,
    .is-style-angled .wp-block-cover__video-background {
    /* no suggestion */
    -webkit-clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
            clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
  }
}

.has-foreground-color {
  /* no suggestion */
  color: var(--wp--preset--color--foreground, #000) !important;
}

.has-foreground-background-color {
  /* no suggestion */
  background-color: var(--wp--preset--color--foreground, #000) !important;
}

.has-background-color {
  /* no suggestion */
  color: var(--wp--preset--color--background, #fff) !important;
}

.has-background-background-color {
  /* no suggestion */
  background-color: var(--wp--preset--color--background, #fff) !important;
}

.has-primary-color {
  /* no suggestion */
  color: var(--wp--preset--color--primary, #4b5563) !important;
}

.has-primary-background-color {
  /* no suggestion */
  background-color: var(--wp--preset--color--primary, #4b5563) !important;
}

.has-secondary-color {
  /* no suggestion */
  color: var(--wp--preset--color--secondary, #9ca3af) !important;
}

.has-secondary-background-color {
  /* no suggestion */
  background-color: var(--wp--preset--color--secondary, #9ca3af) !important;
}

/* Ensure themes that target specific elements use the right colors */

.ext.has-text-color p,
.ext.has-text-color h1,
.ext.has-text-color h2,
.ext.has-text-color h3,
.ext.has-text-color h4,
.ext.has-text-color h5,
.ext.has-text-color h6 {
  /* no suggestion */
  color: currentColor !important;
}

.has-white-color {
  /* no suggestion */
  color: var(--wp--preset--color--white, #fff) !important;
}

.has-black-color {
  /* no suggestion */
  color: var(--wp--preset--color--black, #000) !important;
}

.has-ext-foreground-background-color {
  /* no suggestion */
  background-color: var(
        --wp--preset--color--foreground,
        var(--wp--preset--color--black, #000)
    ) !important;
}

.has-ext-primary-background-color {
  /* no suggestion */
  background-color: var(
        --wp--preset--color--primary,
        var(--wp--preset--color--cyan-bluish-gray, #000)
    ) !important;
}

/* Fix button borders with specified background colors */

.wp-block-button__link.has-black-background-color {
  /* no suggestion */
  border-color: var(--wp--preset--color--black, #000) !important;
}

.wp-block-button__link.has-white-background-color {
  /* no suggestion */
  border-color: var(--wp--preset--color--white, #fff) !important;
}

.has-ext-small-font-size {
  /* no suggestion */
  font-size: var(--wp--preset--font-size--ext-small) !important;
}

.has-ext-medium-font-size {
  /* no suggestion */
  font-size: var(--wp--preset--font-size--ext-medium) !important;
}

.has-ext-large-font-size {
  /* no suggestion */
  font-size: var(--wp--preset--font-size--ext-large) !important;
  line-height: 1.2 !important;
}

.has-ext-x-large-font-size {
  /* no suggestion */
  font-size: var(--wp--preset--font-size--ext-x-large) !important;
  line-height: 1 !important;
}

.has-ext-xx-large-font-size {
  /* no suggestion */
  font-size: var(--wp--preset--font-size--ext-xx-large) !important;
  line-height: 1 !important;
}

/* Line height */

.has-ext-x-large-font-size:not([style*="line-height"]) {
  /* no suggestion */
  line-height: 1.1 !important;
}

.has-ext-xx-large-font-size:not([style*="line-height"]) {
  /* no suggestion */
  line-height: 1.1 !important;
}

.ext .wp-block-group > * {
  /* Line height */
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.ext .wp-block-group > * + * {
  margin-top: var(--wp--style--block-gap, 1.75rem) !important;
  margin-bottom: 0 !important;
}

.ext h2 {
  margin-top: var(--wp--style--block-gap, 1.75rem) !important;
  margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
}

.has-ext-x-large-font-size + p,
.has-ext-x-large-font-size + h3 {
  margin-top: 0.5rem !important;
}

.ext .wp-block-buttons > .wp-block-button.wp-block-button__width-25 {
  width: calc(25% - var(--wp--style--block-gap, 0.5em) * 0.75) !important;
  min-width: 12rem !important;
}

/* Classic themes use an inner [class*="_inner-container"] that our utilities cannot directly target, so we need to do so with a few */

.ext .ext-grid > [class*="_inner-container"] {
  /* no suggestion */
  display: grid !important;
}

/* Unhinge grid for container blocks in classic themes, and < 5.9 */

.ext > [class*="_inner-container"] > .ext-grid:not([class*="columns"]),
.ext
    > [class*="_inner-container"]
    > .wp-block
    > .ext-grid:not([class*="columns"]) {
  /* no suggestion */
  display: initial !important;
}

/* Grid Columns */

.ext .ext-grid-cols-1 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-2 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-3 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-4 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-5 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-6 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-7 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-8 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-9 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-10 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-11 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-12 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-13 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: repeat(13, minmax(0, 1fr)) !important;
}

.ext .ext-grid-cols-none > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-columns: none !important;
}

/* Grid Rows */

.ext .ext-grid-rows-1 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-2 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-3 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-4 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-5 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-6 > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
}

.ext .ext-grid-rows-none > [class*="_inner-container"] {
  /* no suggestion */
  grid-template-rows: none !important;
}

/* Align */

.ext .ext-items-start > [class*="_inner-container"] {
  align-items: flex-start !important;
}

.ext .ext-items-end > [class*="_inner-container"] {
  align-items: flex-end !important;
}

.ext .ext-items-center > [class*="_inner-container"] {
  align-items: center !important;
}

.ext .ext-items-baseline > [class*="_inner-container"] {
  align-items: baseline !important;
}

.ext .ext-items-stretch > [class*="_inner-container"] {
  align-items: stretch !important;
}

.ext.wp-block-group > *:last-child {
  /* no suggestion */
  margin-bottom: 0 !important;
}

/* For <5.9 */

.ext .wp-block-group__inner-container {
  /* no suggestion */
  padding: 0 !important;
}

.ext.has-background {
  /* no suggestion */
  padding-left: var(--wp--style--block-gap, 1.75rem) !important;
  padding-right: var(--wp--style--block-gap, 1.75rem) !important;
}

/* Fallback for classic theme group blocks */

.ext *[class*="inner-container"] > .alignwide *[class*="inner-container"],
.ext
    *[class*="inner-container"]
    > [data-align="wide"]
    *[class*="inner-container"] {
  /* no suggestion */
  max-width: var(--responsive--alignwide-width, 120rem) !important;
}

.ext *[class*="inner-container"] > .alignwide *[class*="inner-container"] > *,
.ext
    *[class*="inner-container"]
    > [data-align="wide"]
    *[class*="inner-container"]
    > * {
  /* no suggestion */
}

.ext *[class*="inner-container"] > .alignwide *[class*="inner-container"] > *, .ext
    *[class*="inner-container"]
    > [data-align="wide"]
    *[class*="inner-container"]
    > * {
  max-width: 100% !important;
}

/* Ensure image block display is standardized */

.ext .wp-block-image {
  /* no suggestion */
  position: relative !important;
  text-align: center !important;
}

.ext .wp-block-image img {
  /* no suggestion */
  display: inline-block !important;
  vertical-align: middle !important;
}

body {
  /* no suggestion */
  /* We need to abstract this out of tailwind.config because clamp doesnt translate with negative margins */
  --extendify--spacing--large: var(
        --wp--custom--spacing--large,
        clamp(2em, 8vw, 8em)
    ) !important;
  /* Add pattern preset font sizes */
  --wp--preset--font-size--ext-small: 1rem !important;
  --wp--preset--font-size--ext-medium: 1.125rem !important;
  --wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem) !important;
  --wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem) !important;
  --wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem) !important;
  /* Fallbacks for pre 5.9 themes */
  --wp--preset--color--black: #000 !important;
  --wp--preset--color--white: #fff !important;
}

.ext * {
  box-sizing: border-box !important;
}

/* Astra: Remove spacer block visuals in the library */

.block-editor-block-preview__content-iframe
    .ext
    [data-type="core/spacer"]
    .components-resizable-box__container {
  /* no suggestion */
  background: transparent !important;
}

.block-editor-block-preview__content-iframe
    .ext
    [data-type="core/spacer"]
    .block-library-spacer__resize-container::before {
  /* no suggestion */
  display: none !important;
}

/* Twenty Twenty adds a lot of margin automatically to blocks. We only want our own margin added to our patterns. */

.ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
  /* no suggestion */
  margin-top: unset !important;
  margin-bottom: unset !important;
}

/* Ensure no funky business is assigned to alignwide */

.ext .alignwide {
  /* no suggestion */
  margin-left: auto !important;
  margin-right: auto !important;
}

/* Negate blockGap being inappropriately assigned in the editor */

.is-root-container.block-editor-block-list__layout
    > [data-align="full"]:not(:first-of-type)
    > .ext-my-0,
.is-root-container.block-editor-block-list__layout
    > [data-align="wide"]
    > .ext-my-0:not([style*="margin"]) {
  /* no suggestion */
  margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
}

/* Ensure vh content in previews looks taller */

.block-editor-block-preview__content-iframe .preview\:min-h-50 {
  /* no suggestion */
  min-height: 50vw !important;
}

.block-editor-block-preview__content-iframe .preview\:min-h-60 {
  /* no suggestion */
  min-height: 60vw !important;
}

.block-editor-block-preview__content-iframe .preview\:min-h-70 {
  /* no suggestion */
  min-height: 70vw !important;
}

.block-editor-block-preview__content-iframe .preview\:min-h-80 {
  /* no suggestion */
  min-height: 80vw !important;
}

.block-editor-block-preview__content-iframe .preview\:min-h-100 {
  /* no suggestion */
  min-height: 100vw !important;
}

/*  Removes excess margin when applied to the alignfull parent div in Block Themes */

.ext-mr-0.alignfull:not([style*="margin"]):not([style*="margin"]) {
  /* no suggestion */
  margin-right: 0 !important;
}

.ext-ml-0:not([style*="margin"]):not([style*="margin"]) {
  /* no suggestion */
  margin-left: 0 !important;
}

/*  Ensures fullwidth blocks display properly in the editor when margin is zeroed out */

.is-root-container
    .wp-block[data-align="full"]
    > .ext-mx-0:not([style*="margin"]):not([style*="margin"]) {
  /* no suggestion */
  margin-right: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
  margin-left: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
  overflow: hidden !important;
  width: unset !important;
}

@media (min-width: 782px) {
  .tablet\:ext-absolute {
    position: absolute !important;
  }

  .tablet\:ext-relative {
    position: relative !important;
  }

  .tablet\:ext-top-base {
    top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-top-lg {
    top: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--top-base {
    top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--top-lg {
    top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-right-base {
    right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-right-lg {
    right: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--right-base {
    right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--right-lg {
    right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-bottom-base {
    bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-bottom-lg {
    bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--bottom-base {
    bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--bottom-lg {
    bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-left-base {
    left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-left-lg {
    left: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--left-base {
    left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--left-lg {
    left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-order-1 {
    order: 1 !important;
  }

  .tablet\:ext-order-2 {
    order: 2 !important;
  }

  .tablet\:ext-m-0:not([style*="margin"]) {
    margin: 0 !important;
  }

  .tablet\:ext-m-auto:not([style*="margin"]) {
    margin: auto !important;
  }

  .tablet\:ext-m-base:not([style*="margin"]) {
    margin: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-m-lg:not([style*="margin"]) {
    margin: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--m-base:not([style*="margin"]) {
    margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--m-lg:not([style*="margin"]) {
    margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-mx-0:not([style*="margin"]) {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .tablet\:ext-mx-auto:not([style*="margin"]) {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  .tablet\:ext-mx-base:not([style*="margin"]) {
    margin-left: var(--wp--style--block-gap, 1.75rem) !important;
    margin-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-mx-lg:not([style*="margin"]) {
    margin-left: var(--extendify--spacing--large, 3rem) !important;
    margin-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--mx-base:not([style*="margin"]) {
    margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--mx-lg:not([style*="margin"]) {
    margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-my-0:not([style*="margin"]) {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .tablet\:ext-my-auto:not([style*="margin"]) {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .tablet\:ext-my-base:not([style*="margin"]) {
    margin-top: var(--wp--style--block-gap, 1.75rem) !important;
    margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-my-lg:not([style*="margin"]) {
    margin-top: var(--extendify--spacing--large, 3rem) !important;
    margin-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--my-base:not([style*="margin"]) {
    margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--my-lg:not([style*="margin"]) {
    margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-mt-0:not([style*="margin"]) {
    margin-top: 0 !important;
  }

  .tablet\:ext-mt-auto:not([style*="margin"]) {
    margin-top: auto !important;
  }

  .tablet\:ext-mt-base:not([style*="margin"]) {
    margin-top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-mt-lg:not([style*="margin"]) {
    margin-top: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--mt-base:not([style*="margin"]) {
    margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--mt-lg:not([style*="margin"]) {
    margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-mr-0:not([style*="margin"]) {
    margin-right: 0 !important;
  }

  .tablet\:ext-mr-auto:not([style*="margin"]) {
    margin-right: auto !important;
  }

  .tablet\:ext-mr-base:not([style*="margin"]) {
    margin-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-mr-lg:not([style*="margin"]) {
    margin-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--mr-base:not([style*="margin"]) {
    margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--mr-lg:not([style*="margin"]) {
    margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-mb-0:not([style*="margin"]) {
    margin-bottom: 0 !important;
  }

  .tablet\:ext-mb-auto:not([style*="margin"]) {
    margin-bottom: auto !important;
  }

  .tablet\:ext-mb-base:not([style*="margin"]) {
    margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-mb-lg:not([style*="margin"]) {
    margin-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--mb-base:not([style*="margin"]) {
    margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--mb-lg:not([style*="margin"]) {
    margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-ml-0:not([style*="margin"]) {
    margin-left: 0 !important;
  }

  .tablet\:ext-ml-auto:not([style*="margin"]) {
    margin-left: auto !important;
  }

  .tablet\:ext-ml-base:not([style*="margin"]) {
    margin-left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-ml-lg:not([style*="margin"]) {
    margin-left: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext--ml-base:not([style*="margin"]) {
    margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .tablet\:ext--ml-lg:not([style*="margin"]) {
    margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .tablet\:ext-block {
    display: block !important;
  }

  .tablet\:ext-inline-block {
    display: inline-block !important;
  }

  .tablet\:ext-inline {
    display: inline !important;
  }

  .tablet\:ext-flex {
    display: flex !important;
  }

  .tablet\:ext-inline-flex {
    display: inline-flex !important;
  }

  .tablet\:ext-grid {
    display: grid !important;
  }

  .tablet\:ext-inline-grid {
    display: inline-grid !important;
  }

  .tablet\:ext-hidden {
    display: none !important;
  }

  .tablet\:ext-w-auto {
    width: auto !important;
  }

  .tablet\:ext-w-full {
    width: 100% !important;
  }

  .tablet\:ext-max-w-full {
    max-width: 100% !important;
  }

  .tablet\:ext-flex-1 {
    flex: 1 1 0% !important;
  }

  .tablet\:ext-flex-auto {
    flex: 1 1 auto !important;
  }

  .tablet\:ext-flex-initial {
    flex: 0 1 auto !important;
  }

  .tablet\:ext-flex-none {
    flex: none !important;
  }

  .tablet\:ext-flex-shrink-0 {
    flex-shrink: 0 !important;
  }

  .tablet\:ext-flex-shrink {
    flex-shrink: 1 !important;
  }

  .tablet\:ext-flex-grow-0 {
    flex-grow: 0 !important;
  }

  .tablet\:ext-flex-grow {
    flex-grow: 1 !important;
  }

  .tablet\:ext-list-none {
    list-style-type: none !important;
  }

  .tablet\:ext-grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-5 {
    grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-7 {
    grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-8 {
    grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-9 {
    grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-10 {
    grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-11 {
    grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-12 {
    grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
  }

  .tablet\:ext-grid-cols-none {
    grid-template-columns: none !important;
  }

  .tablet\:ext-flex-row {
    flex-direction: row !important;
  }

  .tablet\:ext-flex-row-reverse {
    flex-direction: row-reverse !important;
  }

  .tablet\:ext-flex-col {
    flex-direction: column !important;
  }

  .tablet\:ext-flex-col-reverse {
    flex-direction: column-reverse !important;
  }

  .tablet\:ext-flex-wrap {
    flex-wrap: wrap !important;
  }

  .tablet\:ext-flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .tablet\:ext-flex-nowrap {
    flex-wrap: nowrap !important;
  }

  .tablet\:ext-items-start {
    align-items: flex-start !important;
  }

  .tablet\:ext-items-end {
    align-items: flex-end !important;
  }

  .tablet\:ext-items-center {
    align-items: center !important;
  }

  .tablet\:ext-items-baseline {
    align-items: baseline !important;
  }

  .tablet\:ext-items-stretch {
    align-items: stretch !important;
  }

  .tablet\:ext-justify-start {
    justify-content: flex-start !important;
  }

  .tablet\:ext-justify-end {
    justify-content: flex-end !important;
  }

  .tablet\:ext-justify-center {
    justify-content: center !important;
  }

  .tablet\:ext-justify-between {
    justify-content: space-between !important;
  }

  .tablet\:ext-justify-around {
    justify-content: space-around !important;
  }

  .tablet\:ext-justify-evenly {
    justify-content: space-evenly !important;
  }

  .tablet\:ext-justify-items-start {
    justify-items: start !important;
  }

  .tablet\:ext-justify-items-end {
    justify-items: end !important;
  }

  .tablet\:ext-justify-items-center {
    justify-items: center !important;
  }

  .tablet\:ext-justify-items-stretch {
    justify-items: stretch !important;
  }

  .tablet\:ext-justify-self-auto {
    justify-self: auto !important;
  }

  .tablet\:ext-justify-self-start {
    justify-self: start !important;
  }

  .tablet\:ext-justify-self-end {
    justify-self: end !important;
  }

  .tablet\:ext-justify-self-center {
    justify-self: center !important;
  }

  .tablet\:ext-justify-self-stretch {
    justify-self: stretch !important;
  }

  .tablet\:ext-p-0:not([style*="padding"]) {
    padding: 0 !important;
  }

  .tablet\:ext-p-base:not([style*="padding"]) {
    padding: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-p-lg:not([style*="padding"]) {
    padding: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-px-0:not([style*="padding"]) {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  .tablet\:ext-px-base:not([style*="padding"]) {
    padding-left: var(--wp--style--block-gap, 1.75rem) !important;
    padding-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-px-lg:not([style*="padding"]) {
    padding-left: var(--extendify--spacing--large, 3rem) !important;
    padding-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-py-0:not([style*="padding"]) {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .tablet\:ext-py-base:not([style*="padding"]) {
    padding-top: var(--wp--style--block-gap, 1.75rem) !important;
    padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-py-lg:not([style*="padding"]) {
    padding-top: var(--extendify--spacing--large, 3rem) !important;
    padding-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-pt-0:not([style*="padding"]) {
    padding-top: 0 !important;
  }

  .tablet\:ext-pt-base:not([style*="padding"]) {
    padding-top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-pt-lg:not([style*="padding"]) {
    padding-top: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-pr-0:not([style*="padding"]) {
    padding-right: 0 !important;
  }

  .tablet\:ext-pr-base:not([style*="padding"]) {
    padding-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-pr-lg:not([style*="padding"]) {
    padding-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-pb-0:not([style*="padding"]) {
    padding-bottom: 0 !important;
  }

  .tablet\:ext-pb-base:not([style*="padding"]) {
    padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-pb-lg:not([style*="padding"]) {
    padding-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-pl-0:not([style*="padding"]) {
    padding-left: 0 !important;
  }

  .tablet\:ext-pl-base:not([style*="padding"]) {
    padding-left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .tablet\:ext-pl-lg:not([style*="padding"]) {
    padding-left: var(--extendify--spacing--large, 3rem) !important;
  }

  .tablet\:ext-text-left {
    text-align: left !important;
  }

  .tablet\:ext-text-center {
    text-align: center !important;
  }

  .tablet\:ext-text-right {
    text-align: right !important;
  }
}

@media (min-width: 1080px) {
  .desktop\:ext-absolute {
    position: absolute !important;
  }

  .desktop\:ext-relative {
    position: relative !important;
  }

  .desktop\:ext-top-base {
    top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-top-lg {
    top: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--top-base {
    top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--top-lg {
    top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-right-base {
    right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-right-lg {
    right: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--right-base {
    right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--right-lg {
    right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-bottom-base {
    bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-bottom-lg {
    bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--bottom-base {
    bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--bottom-lg {
    bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-left-base {
    left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-left-lg {
    left: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--left-base {
    left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--left-lg {
    left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-order-1 {
    order: 1 !important;
  }

  .desktop\:ext-order-2 {
    order: 2 !important;
  }

  .desktop\:ext-m-0:not([style*="margin"]) {
    margin: 0 !important;
  }

  .desktop\:ext-m-auto:not([style*="margin"]) {
    margin: auto !important;
  }

  .desktop\:ext-m-base:not([style*="margin"]) {
    margin: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-m-lg:not([style*="margin"]) {
    margin: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--m-base:not([style*="margin"]) {
    margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--m-lg:not([style*="margin"]) {
    margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-mx-0:not([style*="margin"]) {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .desktop\:ext-mx-auto:not([style*="margin"]) {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  .desktop\:ext-mx-base:not([style*="margin"]) {
    margin-left: var(--wp--style--block-gap, 1.75rem) !important;
    margin-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-mx-lg:not([style*="margin"]) {
    margin-left: var(--extendify--spacing--large, 3rem) !important;
    margin-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--mx-base:not([style*="margin"]) {
    margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--mx-lg:not([style*="margin"]) {
    margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-my-0:not([style*="margin"]) {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .desktop\:ext-my-auto:not([style*="margin"]) {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .desktop\:ext-my-base:not([style*="margin"]) {
    margin-top: var(--wp--style--block-gap, 1.75rem) !important;
    margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-my-lg:not([style*="margin"]) {
    margin-top: var(--extendify--spacing--large, 3rem) !important;
    margin-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--my-base:not([style*="margin"]) {
    margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
    margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--my-lg:not([style*="margin"]) {
    margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
    margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-mt-0:not([style*="margin"]) {
    margin-top: 0 !important;
  }

  .desktop\:ext-mt-auto:not([style*="margin"]) {
    margin-top: auto !important;
  }

  .desktop\:ext-mt-base:not([style*="margin"]) {
    margin-top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-mt-lg:not([style*="margin"]) {
    margin-top: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--mt-base:not([style*="margin"]) {
    margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--mt-lg:not([style*="margin"]) {
    margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-mr-0:not([style*="margin"]) {
    margin-right: 0 !important;
  }

  .desktop\:ext-mr-auto:not([style*="margin"]) {
    margin-right: auto !important;
  }

  .desktop\:ext-mr-base:not([style*="margin"]) {
    margin-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-mr-lg:not([style*="margin"]) {
    margin-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--mr-base:not([style*="margin"]) {
    margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--mr-lg:not([style*="margin"]) {
    margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-mb-0:not([style*="margin"]) {
    margin-bottom: 0 !important;
  }

  .desktop\:ext-mb-auto:not([style*="margin"]) {
    margin-bottom: auto !important;
  }

  .desktop\:ext-mb-base:not([style*="margin"]) {
    margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-mb-lg:not([style*="margin"]) {
    margin-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--mb-base:not([style*="margin"]) {
    margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--mb-lg:not([style*="margin"]) {
    margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-ml-0:not([style*="margin"]) {
    margin-left: 0 !important;
  }

  .desktop\:ext-ml-auto:not([style*="margin"]) {
    margin-left: auto !important;
  }

  .desktop\:ext-ml-base:not([style*="margin"]) {
    margin-left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-ml-lg:not([style*="margin"]) {
    margin-left: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext--ml-base:not([style*="margin"]) {
    margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
  }

  .desktop\:ext--ml-lg:not([style*="margin"]) {
    margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
  }

  .desktop\:ext-block {
    display: block !important;
  }

  .desktop\:ext-inline-block {
    display: inline-block !important;
  }

  .desktop\:ext-inline {
    display: inline !important;
  }

  .desktop\:ext-flex {
    display: flex !important;
  }

  .desktop\:ext-inline-flex {
    display: inline-flex !important;
  }

  .desktop\:ext-grid {
    display: grid !important;
  }

  .desktop\:ext-inline-grid {
    display: inline-grid !important;
  }

  .desktop\:ext-hidden {
    display: none !important;
  }

  .desktop\:ext-w-auto {
    width: auto !important;
  }

  .desktop\:ext-w-full {
    width: 100% !important;
  }

  .desktop\:ext-max-w-full {
    max-width: 100% !important;
  }

  .desktop\:ext-flex-1 {
    flex: 1 1 0% !important;
  }

  .desktop\:ext-flex-auto {
    flex: 1 1 auto !important;
  }

  .desktop\:ext-flex-initial {
    flex: 0 1 auto !important;
  }

  .desktop\:ext-flex-none {
    flex: none !important;
  }

  .desktop\:ext-flex-shrink-0 {
    flex-shrink: 0 !important;
  }

  .desktop\:ext-flex-shrink {
    flex-shrink: 1 !important;
  }

  .desktop\:ext-flex-grow-0 {
    flex-grow: 0 !important;
  }

  .desktop\:ext-flex-grow {
    flex-grow: 1 !important;
  }

  .desktop\:ext-list-none {
    list-style-type: none !important;
  }

  .desktop\:ext-grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-5 {
    grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-7 {
    grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-8 {
    grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-9 {
    grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-10 {
    grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-11 {
    grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-12 {
    grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
  }

  .desktop\:ext-grid-cols-none {
    grid-template-columns: none !important;
  }

  .desktop\:ext-flex-row {
    flex-direction: row !important;
  }

  .desktop\:ext-flex-row-reverse {
    flex-direction: row-reverse !important;
  }

  .desktop\:ext-flex-col {
    flex-direction: column !important;
  }

  .desktop\:ext-flex-col-reverse {
    flex-direction: column-reverse !important;
  }

  .desktop\:ext-flex-wrap {
    flex-wrap: wrap !important;
  }

  .desktop\:ext-flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .desktop\:ext-flex-nowrap {
    flex-wrap: nowrap !important;
  }

  .desktop\:ext-items-start {
    align-items: flex-start !important;
  }

  .desktop\:ext-items-end {
    align-items: flex-end !important;
  }

  .desktop\:ext-items-center {
    align-items: center !important;
  }

  .desktop\:ext-items-baseline {
    align-items: baseline !important;
  }

  .desktop\:ext-items-stretch {
    align-items: stretch !important;
  }

  .desktop\:ext-justify-start {
    justify-content: flex-start !important;
  }

  .desktop\:ext-justify-end {
    justify-content: flex-end !important;
  }

  .desktop\:ext-justify-center {
    justify-content: center !important;
  }

  .desktop\:ext-justify-between {
    justify-content: space-between !important;
  }

  .desktop\:ext-justify-around {
    justify-content: space-around !important;
  }

  .desktop\:ext-justify-evenly {
    justify-content: space-evenly !important;
  }

  .desktop\:ext-justify-items-start {
    justify-items: start !important;
  }

  .desktop\:ext-justify-items-end {
    justify-items: end !important;
  }

  .desktop\:ext-justify-items-center {
    justify-items: center !important;
  }

  .desktop\:ext-justify-items-stretch {
    justify-items: stretch !important;
  }

  .desktop\:ext-justify-self-auto {
    justify-self: auto !important;
  }

  .desktop\:ext-justify-self-start {
    justify-self: start !important;
  }

  .desktop\:ext-justify-self-end {
    justify-self: end !important;
  }

  .desktop\:ext-justify-self-center {
    justify-self: center !important;
  }

  .desktop\:ext-justify-self-stretch {
    justify-self: stretch !important;
  }

  .desktop\:ext-p-0:not([style*="padding"]) {
    padding: 0 !important;
  }

  .desktop\:ext-p-base:not([style*="padding"]) {
    padding: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-p-lg:not([style*="padding"]) {
    padding: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-px-0:not([style*="padding"]) {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  .desktop\:ext-px-base:not([style*="padding"]) {
    padding-left: var(--wp--style--block-gap, 1.75rem) !important;
    padding-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-px-lg:not([style*="padding"]) {
    padding-left: var(--extendify--spacing--large, 3rem) !important;
    padding-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-py-0:not([style*="padding"]) {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .desktop\:ext-py-base:not([style*="padding"]) {
    padding-top: var(--wp--style--block-gap, 1.75rem) !important;
    padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-py-lg:not([style*="padding"]) {
    padding-top: var(--extendify--spacing--large, 3rem) !important;
    padding-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-pt-0:not([style*="padding"]) {
    padding-top: 0 !important;
  }

  .desktop\:ext-pt-base:not([style*="padding"]) {
    padding-top: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-pt-lg:not([style*="padding"]) {
    padding-top: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-pr-0:not([style*="padding"]) {
    padding-right: 0 !important;
  }

  .desktop\:ext-pr-base:not([style*="padding"]) {
    padding-right: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-pr-lg:not([style*="padding"]) {
    padding-right: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-pb-0:not([style*="padding"]) {
    padding-bottom: 0 !important;
  }

  .desktop\:ext-pb-base:not([style*="padding"]) {
    padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-pb-lg:not([style*="padding"]) {
    padding-bottom: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-pl-0:not([style*="padding"]) {
    padding-left: 0 !important;
  }

  .desktop\:ext-pl-base:not([style*="padding"]) {
    padding-left: var(--wp--style--block-gap, 1.75rem) !important;
  }

  .desktop\:ext-pl-lg:not([style*="padding"]) {
    padding-left: var(--extendify--spacing--large, 3rem) !important;
  }

  .desktop\:ext-text-left {
    text-align: left !important;
  }

  .desktop\:ext-text-center {
    text-align: center !important;
  }

  .desktop\:ext-text-right {
    text-align: right !important;
  }
}

</style>
<link rel='stylesheet' id='tutor-icon-css' href='../wp-content/plugins/tutor/assets/css/tutor-icon.min431f.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='tutor-css' href='../wp-content/plugins/tutor/assets/css/tutor.min431f.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='tutor-frontend-css' href='../wp-content/plugins/tutor/assets/css/tutor-front.min431f.css?ver=2.1.2' type='text/css' media='all' />

<link rel='stylesheet' id='woocommerce-layout-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout9d27.css?ver=7.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen9d27.css?ver=7.1.0' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce9d27.css?ver=7.1.0' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='omexo-google-fonts-css' href='https://fonts.googleapis.com/css?family=Rajdhani%3A400%2C500%2C600%2C700%7CRubik%3A400%2C500%2C600%2C700&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='../wp-content/themes/omexo/assets/css/bootstrap.mincce7.css?ver=4.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='slicknav-css' href='../wp-content/themes/omexo/assets/css/slicknav.min1c96.css?ver=1.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='omexo-main-style-css' href='../wp-content/themes/omexo/assets/css/maincd2f.css?ver=52' type='text/css' media='all' />
<link rel='stylesheet' id='omexo-dynamic-style-css' href='../wp-content/themes/omexo/assets/css/dynamic-style8a54.css?ver=1.0.0' type='text/css' media='all' />
<style id='omexo-dynamic-style-inline-css' type='text/css'>

        .main-navigation ul .sub-menu .current-menu-item > a, .main-navigation ul .sub-menu .current-menu-ancestor > a, .header-top-social ul li a:hover, .footer-top-area .footer-widget.widget_nav_menu li a:before, .footer-top-area .widget.widget_archive li a:hover, .footer-top-area .widget.widget_categories li a:hover, .footer-top-area .widget.widget_pages li a:hover, .footer-top-area .widget.widget_meta li a:hover, .footer-top-area .widget.widget_recent_comments li a:hover, .footer-top-area .widget.widget_recent_entries li a:hover, .footer-top-area .widget.widget_rss li a:hover, .address-widget-list i, .footer-social-icons li a:hover, .footer-top-area .footer-widget.widget_nav_menu li a:hover, .footer-widget.widget_omexer-insight-latest-post .recent-post-wid-cont h6 a:hover, .woocommerce p.stars a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce table.shop_table td a:hover, .woocommerce ul.products li.product .woocommerce-loop-product__title a:hover, .woocommerce ul.products li.product .price, .woocommerce-info .showcoupon, .woocommerce-privacy-policy-text p a, .woocommerce div.product p.price, .woocommerce div.product span.price, .tutor-price-preview-box .price, .tutor-custom-list-style li:before, .tutor-course-topics-contents .tutor-active .tutor-course-title h4, .course-categories-widget-wrap li a:hover, .tutor-course-enrolled-wrap p span, .tutor-course-enrolled-wrap p i, .tutor-course-loop-title h2 a:hover, .course-categories-widget-wrap li a:before, .tutor-form-register-wrap a:hover, .tutor-login-rememeber-wrap a:hover, .tutor-login-rememeber-wrap label:hover, .widget.widget_archive li a:before, .widget.widget_categories li a:before, .widget.widget_pages li a:before, .widget.widget_meta li a:before, .widget.widget_recent_comments li:before, .widget.widget_recent_entries li a:before, .widget.widget_rss li a:before, .widget.widget_nav_menu li a:before, aside.sidebar-area li a:hover, .blog-posts-meta li i, .blog-posts-meta li a:hover, .wp-block-quote cite, .wp-block-archives-list.extraclass.wp-block-archives li a:hover, .wp-block-latest-comments__comment footer.wp-block-latest-comments__comment-meta a:hover, ul.wp-block-latest-posts__list.is-grid.columns-3.wp-block-latest-posts li a:hover, .wp-block-rss .wp-block-rss__item .wp-block-rss__item-title a:hover, .wp-block-tag-cloud a:hover, .wp-block-latest-posts__list.has-dates.wp-block-latest-posts a:hover, .blog-posts .entry-title a:hover, .entry-footer .post-tags a:hover, .single-blog-post-navigation .nav-links a, .header-cart .cart-btn a:hover, .main-navigation.navigation ul li a:hover, .tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a:hover, .tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a::before, .tutor-course-filter-wrapper>div:first-child .tutor-course-search-field i, .woocommerce-checkout #payment .payment_method_paypal .about_paypal, .shop-widget .woocommerce-widget-layered-nav-list li a:before, .shop-widget .product-categories a:before, .shop-widget.woocommerce.widget_rating_filter .wc-layered-nav-rating a, .tutor-dashboard-info-table tbody tr td a:hover, .tutor-dashboard-permalinks a:before, .tutor-dashboard-header-button .tutor-btn.bordered-btn,.tutor-dashboard .tutor-dashboard-left-menu .tutor-dashboard-menu-item-icon,.accordion-list .accordion-single .accordion-title:before,.wp-block-latest-posts__list.wp-block-latest-posts li a:before,.wp-block-archives-list.wp-block-archives li a:before,.wp-block-categories-list.wp-block-categories li a:before,.tutor-course-list .tutor-card-body .tutor-course-name a:hover,.tutor-course-details-widget-list li [class^="tutor-icon-"],.tutor-nav-link.is-active,.tutor-nav-link:hover, .slicknav_nav .slicknav_row:hover > a,.tutor-accordion-item-header::after,.tutor-accordion-item-header:hover {
            color: #FF630E !important;
        }
          
        .search-form button[type="submit"].search-submit, .header-cart .cart-btn a span, .header-log-reg ul, .footer-subscribe-form input[type="submit"], .omexo-footer-newsletter button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt:hover, .woocommerce .woocommerce-cart-form__contents .coupon .button, .woocommerce .woocommerce-cart-form__contents .coupon input.button, .woocommerce .woocommerce-cart-form__contents .actions button[type=submit], .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled], .woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce ul.products li.product .omexo-wc-product-info .button, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce span.onsale, #review_form .comment-btn, .woocommerce-message .button.wc-forward, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .price_slider_amount button.button:hover, .wc-search-form .wc-search-btn, .wc-search-form .wc-search-btn:hover, .tutor-pagination-wrap .page-numbers.current, .tutor-pagination-wrap a:hover, .tutor-lead-info-btn-group .tutor-course-compelte-form-wrap button:hover, .omexo-social-share button:hover, .tutor-single-add-to-cart-box .tutor-enroll-form .tutor-course-enroll-wrap button, .tutor-course-tags a:hover, .tutor-progress-bar .tutor-progress-filled, .tutor-course-enrolled-review-wrap .write-course-review-link-btn, .tutor-button.tutor-success, .tutor-button.tutor-success:hover, .tutor-course-enrolled-review-wrap .write-course-review-link-btn:hover, .tutor-single-add-to-cart-box .tutor-enroll-form .tutor-course-enroll-wrap button:hover, .footer-subscribe-form input[type="submit"]:hover, .tutor-login-form-wrap input[type="submit"], .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-btn, .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-btn, .widget.widget_tag_cloud a:hover, #commentform .comment-btn, nav.navigation.pagination ul li a:hover, nav.navigation.pagination span.current, .omexo-post-read-more a, .single-blog-post-navigation .nav-links a:hover, .wp-block-button__link:hover, .wp-block-button.is-style-outline .wp-block-button__link:hover, .wp-block-search .wp-block-search__button:hover, .tutor-dashboard-permalinks li.active a, .tutor-dashboard-header-button a.tutor-btn.bordered-btn:hover, .tutor-dashboard-header-button .tutor-btn.bordered-btn:hover,.tutor-forgot-password-form .tutor-btn,.tutor-card.tutor-course-card .tutor-card-footer .list-item-button a:hover, .tutor-btn:not(.tutor-is-outline).tutor-btn-primary,.tutor-btn-outline-primary:hover,.tutor-form-check-input[type="checkbox"]:checked, .tutor-modal-body button[type="submit"],.tutor-ui-pagination ul.tutor-pagination-numbers .page-numbers.current,.tutor-pagination ul.tutor-pagination-numbers .page-numbers.current, .tutor-login-wrap.omexo-login .login-form-submit,#tutor-registration-from button[type="submit"], #instructor-registration-form button[type="submit"],.tutor-pagination ul.tutor-pagination-numbers .page-numbers.prev:hover,.tutor-pagination ul.tutor-pagination-numbers .page-numbers.next:hover,.tutor-pagination ul.tutor-pagination-numbers .page-numbers:hover,.tutor-course-sidebar-card-body .tutor-btn.tutor-btn-tertiary, .tutor-course-sidebar-card-body > .tutor-btn,.header-log-reg-mobile .no-list-style > li > span,.slicknav_menu .slicknav_icon-bar {
            background-color: #FF630E !important;
        }

        .omexo-post-read-more a:hover, .search-form button[type="submit"].search-submit:hover, #commentform .comment-btn:hover, .tutor-single-add-to-cart-box .tutor-enroll-form .tutor-course-enroll-wrap button:hover, .wc-search-form .wc-search-btn:hover,.woocommerce .woocommerce-cart-form__contents .coupon .button:hover, .woocommerce .woocommerce-cart-form__contents .actions button[type=submit]:hover, .woocommerce a.button.alt:hover, .woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:hover, .woocommerce button.button.alt:hover, .woocommerce button.button.alt:hover {
            background-color: #130F40 !important;
        }

        .tutor-single-add-to-cart-box .tutor-enroll-form .tutor-course-enroll-wrap button:hover, .tutor-dashboard-header-button .tutor-btn.bordered-btn:hover {
            border-color: #130F40 !important;
        }
        
        .main-navigation .sub-menu, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .tutor-pagination-wrap .page-numbers.current, .tutor-pagination-wrap a:hover, .tutor-lead-info-btn-group .tutor-course-compelte-form-wrap button:hover, .omexo-social-share button:hover, .tutor-single-add-to-cart-box .tutor-enroll-form .tutor-course-enroll-wrap button, .tutor-course-tags a:hover, .tutor-progress-bar .tutor-progress-filled:after, .tutor-wrap nav.course-enrolled-nav ul li.active a, .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-button, .omexo-tutor-register-form-wrap .tutor-btn, .omexo-tutor-register-form-wrap .tutor-option-field textarea:focus, .omexo-tutor-register-form-wrap .tutor-option-field select:focus, .omexo-tutor-register-form-wrap .tutor-option-field input[type="text"]:focus, .omexo-tutor-register-form-wrap .tutor-option-field input[type="number"]:focus, .omexo-tutor-register-form-wrap .tutor-option-field input[type="pas.tutor-dashboard-content-innersword"]:focus, .omexo-tutor-register-form-wrap .tutor-form-group textarea:focus, .omexo-tutor-register-form-wrap .tutor-form-group select:focus, .omexo-tutor-register-form-wrap .tutor-form-group input[type="text"]:focus, .omexo-tutor-register-form-wrap .tutor-form-group input[type="number"]:focus, .omexo-tutor-register-form-wrap .tutor-form-group input[type="password"]:focus, .tutor-login-form-wrap input[type="password"]:focus, .tutor-login-form-wrap input[type="text"]:focus, .widget.widget_tag_cloud a:hover, .nav-links a:hover, nav.navigation.pagination ul li a:hover, nav.navigation.pagination span.current, .wp-block-button.is-style-outline .wp-block-button__link:hover, .tutor-dashboard-header-button .tutor-btn.bordered-btn, .tutor-dashboard-header-button .tutor-btn.bordered-btn:hover,.tutor-card.tutor-course-card .tutor-card-footer .list-item-button a:hover,.tutor-btn:not(.tutor-is-outline).tutor-btn-primary,input.tutor-form-control:focus,input.tutor-form-check-input[type="checkbox"]:checked, .tutor-nav:not(.tutor-nav-pills):not(.tutor-nav-tabs) .tutor-nav-link.is-active,.slicknav_btn {
            border-color: #FF630E !important;
        }

        .single-blog-post-navigation .nav-links a:hover{
            color: #fff !important;
        }
        
    
        body,.tutor-course-summery, .tutor-course-content-content p,.tutor-custom-list-style li,.course-categories-widget-wrap li a,.tutor-custom-list-style li,.instructor-bio,.tutor-review-individual-item p,.tutor-course-lesson h5,.omexo-social-share span,.omexo-course-info-meta li,.omexo-course-info-meta li span{
            color: #696969 !important;
        } 
    
        h1, .h1, h2, .h2, h3, .h3, h4, .h4, .tutor-course-header-h1{
            color: #130f40;
        } 
    
        .footer-widget{
            width: 25%%;
        } 
        .footer-widget:first-child{
            width: 25%;
        } 
        .footer-widget:nth-child(2){
            width: 20%;
        } 
        .footer-widget:nth-child(3){
            width: 30%;
        } 
        .footer-widget:nth-child(4){
            width: 25%;
        } 
    
</style>
<link rel='stylesheet' id='omexo-style-css' href='../wp-content/themes/omexo/style6a4d.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.min9e95.css?ver=3.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4-css' href='../wp-content/uploads/sites/3/elementor/css/post-4684a.css?ver=1667970934' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css' href='../wp-content/plugins/omexer-insight/assets/css/owl.carousel.minc64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css' href='../wp-content/plugins/omexer-insight/assets/css/magnific-popupc64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='omexer-insight-css' href='../wp-content/plugins/omexer-insight/assets/css/omexer-insightc64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min9e95.css?ver=3.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min9e95.css?ver=3.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='../wp-content/uploads/sites/3/elementor/css/global684a.css?ver=1667970934' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-913-css' href='../wp-content/uploads/sites/3/elementor/css/post-913ab9d.css?ver=1667983350' type='text/css' media='all' />
<link rel='stylesheet' id='fluentform-elementor-widget-css' href='../wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widgetc5af.css?ver=4.3.21' type='text/css' media='all' />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Rubik:400%7CRajdhani:700&amp;display=swap&amp;ver=1667970453" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400%7CRajdhani:700&amp;display=swap&amp;ver=1667970453" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400%7CRajdhani:700&amp;display=swap&amp;ver=1667970453" /></noscript><link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRajdhani%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-1-css' href='../wp-content/plugins/omexer-insight/assets/css/omexer-insight-iconsc64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-omexer-insight-icons-css' href='../wp-content/plugins/omexer-insight/assets/css/omexer-insight-iconsc64e.css?ver=1.1.1' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1' id='jquery-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min9e95.js?ver=3.8.0' id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/913.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.1.1" />
<meta name="generator" content="TutorLMS 2.1.2" />
<meta name="generator" content="WooCommerce 7.1.0" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../index15f1.html?p=913' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed17df.json?url=https%3A%2F%2Fdemo.omexer.com%2Fmain%2Fcontact%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed21d2?url=https%3A%2F%2Fdemo.omexer.com%2Fmain%2Fcontact%2F&amp;format=xml" />
<meta name="generator" content="Redux 4.3.20" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>



 <link rel="icon" href="../images/logo_tran2.png" sizes="32x32" />
      <link rel="icon" href="../images/logo_tran2.png" sizes="192x192" />


<link rel="apple-touch-icon" href="../images/logo_tran2.png" />
<meta name="msapplication-TileImage" content="../images/logo_tran2.png" />
		<style type="text/css" id="wp-custom-css">
			.tutor-review-individual-item .tutor-review-user-info a {
    color: #130f40;
    font-weight: 700;
}		</style>
		<style id="omexo_opt-dynamic-css" title="dynamic-css" class="redux-options-output">.preloader{background-color:#130f40;}.header-btm-area{background-color:#ffffff;}.header-cart .cart-btn a{color:#130f40;}.header-cart .cart-btn a:hover{color:#FF630E;}.header-cart .cart-btn a:active{color:#FF630E;}.header-cart .cart-btn a span{background-color:#FF630E;}.header-log-reg ul{background-color:#FF630E;}.header-log-reg ul li a{color:#ffffff;}.header-log-reg ul li a:hover{color:#130f40;}.header-log-reg ul li a:active{color:#130f40;}.header-top-area{background-color:#0e0a38;}.header-contact-info li{color:#ffffff;}.header-contact-info li i{color:#ffffff;}.header-top-social li a{color:#ffffff;}.header-top-social li a:hover{color:#FF630E;}.header-top-social li a:active{color:#FF630E;}.main-navigation ul li a{font-weight:700;font-style:normal;font-size:19px;font-display:swap;}.main-navigation ul .sub-menu a{font-weight:700;font-style:normal;font-size:17px;font-display:swap;}.main-navigation ul li a{padding-top:14px;padding-right:10px;padding-bottom:14px;padding-left:10px;}.main-menu-area:before, .slicknav_menu{background-color:#ffffff;}.navigation ul li a{color:#130f40;}.navigation ul li a:hover{color:#FF630E;}.main-navigation ul li.current-menu-item > a{color:#FF630E;}.main-navigation ul .sub-menu a{color:#130f40;}.main-navigation ul .sub-menu a:hover{color:#FF630E;}.main-navigation ul .sub-menu a:active{color:#FF630E;}.main-navigation .sub-menu{background-color:#fff;}.main-navigation .sub-menu{border-top:2px solid #FF630E;}.page-banner-area{background-repeat:no-repeat;background-position:center center;background-image:url('../wp-content/uploads/sites/3/2021/04/banner-3.jpg');background-size:cover;}.page-banner-area:before{background-color:rgba(19,15,64,0.8);}body, p, li, a,.blog-posts-meta li a,.tutor-course-content-list-item-title{font-family:Rubik;line-height:28px;font-weight:400;font-style:normal;font-size:16px;font-display:swap;}h1, .h1, h2, .h2, h3, .h3, h4, .h4, button, .tutor-course-enroll-wrap button,.blog-posts .entry-title a,.tutor-lead-info-btn-group .tutor-course-compelte-form-wrap button,
                    .tutor-lead-info-btn-group a.tutor-button,.tutor-course-enrolled-review-wrap .write-course-review-link-btn,
                    .tutor-button.tutor-success,.tutor-course-loop-title h2 a,.omexo-post-read-more a,.sidebar-area .widget-title, .widget.widget_block .wp-block-group__inner-container h2,.widget.widget_block.widget_search .wp-block-search__label,.recent-post-wid-cont h6 a,.widget_omexer_insight_about_widget h6{font-family:Rajdhani;font-weight:700;font-display:swap;}.footer-top-area{background-color:#0e0a38;}.footer-bottom-area{background-color:#0e0a38;}</style>
</head>

<body class="page-template page-template-elementor_header_footer page page-id-913 wp-custom-logo theme-omexo tutor-lms woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-4 elementor-page elementor-page-913">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
    <div id="page" class="site">
                <!-- Preeloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell align-middle">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        



    
   <header class="site-header enable-sticky">
            <!-- start header top area -->
            <div class="header-top-area">
               <div class="container">
                  <div class="header-top-wrap">
                     <!-- start header search -->
                     <div class="header-course-search">
                        <!-- <form method="get" action="https://demo.omexer.com/main/courses/">
                           <input type="hidden" name="ref" value="course">
                           <input type="text" value="" name="s" placeholder="Search Courses" class="form-control" />
                           <button type="submit"><i class="fa fa-search"></i></button>      
                        </form> -->
                     </div>
                     <!-- end header search -->
                     <!-- start contact info -->
                     <div class="header-contact-info text-right">
                        <ul class="no-list-style">
                           <li><span><i class="fa fa-envelope"></i></span>
                              <a href="" class="__cf_email__" data-cfemail="24575154544b565064415c45495448410a474b49"><?=$email_pc_id?></a>
                           </li>
                           <li><span><i class="fa fa-phone-alt"></i></span>
                              <?=$contact_no_pc?>
                           </li>
                        </ul>
                     </div>
                     <div class="header-top-social text-right">
                        <ul class="no-list-style">
                           <li><a href="<?=$facebook?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="<?=$twitter?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="<?=$linkedin?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                          
                        </ul>
                     </div>
                     <!-- end contact info -->
                  </div>
               </div>
            </div>
            <!-- end header top area-->
            <!-- start header bottom area -->
            <div class="header-btm-area">
               <div class="header-sticky-menu">
                  <div class="container">
                     <div class="main-menu-area">
                        <div  class="site-branding">
                           <a href="../" class="custom-logo-link" rel="home" aria-current="page"><img style="width: 60px;height: 40px;" src="../images/logo_tran2.png" class="custom-logo" alt="ndsm logo" decoding="async" srcset="../images/logo_tran2.png 354w, ../images/logo_tran2.png 300w" sizes="(max-width: 354px) 100vw, 354px" /></a>     
                        </div>
                        <div class="main-menu text-right ">
                           <nav id="site-navigation" class="main-navigation navigation no-list-style text-right">
                              <div class="menu-main-menu-container">
                                  <ul id="primary-menu" class="menu">
                                    <li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="../" onClick="return true">Home</a></li>
                                    <li id="menu-item-920" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-920">
                                       <a href="javascript:void(0);" onClick="return true">Courses</a>
                                       <ul class="sub-menu">
                                          <li id="menu-item-4372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4372">
                                             <a href="../course-category/makeup/" onClick="return true">Makeup</a>
                                          </li>
                                          <li id="menu-item-4372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4372">
                                             <a href="../course-category/acting/" onClick="return true">Acting</a>
                                          </li>
                                          <li id="menu-item-917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-917"><a href="../course-category/photography/" onClick="return true">Photography</a></li>
                                       </ul>
                                    </li>
                                    <li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="../about-us/" onClick="return true">About us</a></li>

                                     <!-- <li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="../enquiry/" onClick="return true">Enquiry</a></li> -->


                                    <li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="../contact/" onClick="return true">Contact</a></li>
                                 </ul>

                              </div>
                           </nav>
                           <!-- #site-navigation -->
                        </div>

                        <div class="header-log-reg text-right">
                           <ul class="no-list-style">
                              <li><a href="javascript:void(0);">Login</a></li>
                           </ul>
                        </div>
                        <div class="header-log-reg-mobile">
                           <ul class="no-list-style">
                              <li>
                                 <span class="user-log-reg-icon"><i class="fa fa-user"></i></span>
                                 <ul class="user-log-reg-menu">
                                    <li><a href="javascript:void(0);">Login</a></li>
                                    <!-- <li><a href="student-registration/index.html">Register</a></li> -->
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div id="mobile-menu-wrap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header bottom area -->                    
         </header>















        
                
<div class="page-banner-area " style="background-image: url('https://www.aaft.com/assets/Images/Updated/cinema(2).jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div
                    class="banner-content text-center">
                    <h1>Contact</h1>                    <div class="breadcrum-container">
                        <!-- Breadcrumb NavXT 7.1.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Main Demo." href="../" class="home" ><span property="name">Main Demo</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">Contact</span><meta property="url" content="index.html"><meta property="position" content="2"></span>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>















                <div id="content" class="site-content">
		<div data-elementor-type="wp-page" data-elementor-id="913" class="elementor elementor-913">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-2e9bb30 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2e9bb30" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f156cce" data-id="f156cce" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1474613 elementor-widget elementor-widget-heading" data-id="1474613" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.8.0 - 30-10-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Leave Us A Message</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-4635334 elementor-widget elementor-widget-text-editor" data-id="4635334" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.8.0 - 30-10-2022 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p> </p>						</div>
				</div>
				<div class="elementor-element elementor-element-8e7b7af elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="8e7b7af" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="../wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">		<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<i aria-hidden="true" class="icon icon-email-1"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Email Address :					</span>
				</h3>
									<p class="elementor-icon-box-description">
						<a href="javascript:void(0);" class="__cf_email__" data-cfemail="ed9e989d9d829f99ad88958c809d8188c38e8280"><?=$email_pc_id?></a>					</p>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-40a563d elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="40a563d" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<i aria-hidden="true" class="icon icon-telephone"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Phone Number :					</span>
				</h3>
									<p class="elementor-icon-box-description">
						<?=$contact_no_pc?>					</p>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b6abdcb elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="b6abdcb" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<i aria-hidden="true" class="icon icon-map"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Our Location					</span>
				</h3>
									<p class="elementor-icon-box-description">
						<?=$address_pc?>					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8ab4acc" data-id="8ab4acc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-22ee71e fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget" data-id="22ee71e" data-element_type="widget" data-widget_type="fluent-form-widget.default">
				<div class="elementor-widget-container">
			
            <div class="fluentform-widget-wrapper hide-fluent-form-labels fluentform-widget-align-default">

            
            <div class='fluentform fluentform_wrapper_3'>



               <form  id="fluentform_3" class="frm-fluent-form fluent_form_3 ff-el-form-top ff_form_instance_3_1 ff-form-loading" data-form_instance="ff_form_instance_3_1" method="POST" >


            

<div class='ff-t-container'>
   <div class='ff-t-cell '><div class='ff-el-group  ff-el-form-hide_label'><div class='ff-el-input--label asterisk-right'><label for='ff_3_names_first_name_'>First Name</label> </div><div class='ff-el-input--content'>


               <input type="text" name="names[first_name]" id="ff_3_names_first_name_" class="ff-el-form-control your_name" placeholder="Your Name" >

            </div></div></div></div></div>

            <div class='ff-el-group ff-el-form-hide_label'><div class='ff-el-input--label ff-el-is-required asterisk-right'>


               <label for='ff_3_email'>Email</label> </div><div class='ff-el-input--content'>

               <input type="email" name="email" class="ff-el-form-control email_address" placeholder="Email Address" >


            </div></div><div class='ff-el-group ff-el-form-hide_label'><div class='ff-el-input--label asterisk-right'><label for='ff_3_subject'>Subject</label> </div><div class='ff-el-input--content'>


               <input type="text" name="subject" class="ff-el-form-control subject_text" placeholder="Subject" data-name="subject" id="ff_3_subject" >

            </div></div><div class='ff-el-group ff-el-form-hide_label'><div class='ff-el-input--label ff-el-is-required asterisk-right'><label for='ff_3_message'>Your Message</label> </div><div class='ff-el-input--content'>


               <textarea name="message" id="ff_3_message" class="ff-el-form-control message_text" placeholder="Write Your Message" rows="4" cols="2" data-name="message" ></textarea>


            </div></div><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'>

               <button type="submit" class="ff-btn ff-btn-submit ff-btn-lg ff_btn_style submit-contact-form" >Submit Now</button>



            </div></form>


         


         </div>        



                    </div>

            		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
							</div>
		
</div><!-- #content -->













         <footer id="colophon" class="site-footer">
            <div class="footer-top-area">
               <div class="container">
                  <div class="row">
                     <div id="omexer_insight_about_widget-1" class="footer-widget widget_omexer_insight_about_widget">
                        <a class="footer-widget-logo" href="../../"><img class="img-responsive" src="../images/logo_tran2.png" alt="logo"></a>
                        <div class="footer-widget-about-description">
                           <p>We are providing high-quality online courses for about ten years. Our all instructors expert and highly experienced. We provide all kinds of course materials to our students</p>
                        </div>
                        <h6>Follow Us</h6>
                        <ul class="footer-social-icons">
                           <li><a class="facebook" href="<?=$facebook?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="<?=$twitter?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="linkedin" href="<?=$linkedin?>" target="_blank"><i class="fa  fa-linkedin"></i></a></li>
                           
                           <li><a class="instagram" href="<?=$instagram?>" target="_blank"><i class="fa  fa-instagram"></i></a></li>
                        </ul>
                     </div>
                     <div id="nav_menu-1" class="footer-widget widget_nav_menu">
                        <!-- <h4 class="widget-title">Courses</h4> -->
                        <div class="menu-course-categories-container">
                           <!-- <ul id="menu-course-categories" class="menu">
                              <li id="menu-item-6457" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6457"><a href="category/business/index.html" onClick="return true">Makeup</a></li>
                              <li id="menu-item-6459" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6459"><a href="category/education/index.html" onClick="return true">Acting</a></li>
                              <li id="menu-item-6460" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6460"><a href="category/graphics-design/index.html" onClick="return true">Photography</a></li>
                           </ul> -->
                        </div>
                     </div>
                     <div id="omexer-insight-latest-post-2" class="footer-widget widget_omexer-insight-latest-post">
                        <!-- <h4 class="widget-title"> Recent Posts</h4> -->
                       <!--  <ul class="recent-post-widget">
                           <li>
                              <div class="recent-post-wid-thumb" style="background-image: url('../../wp-content/uploads/sites/3/2021/04/blog-5.jpg');"></div>
                              <div class="recent-post-wid-cont">
                                 <h6>
                                    <a class="recent-news-title" href="learn-webs-applications-development-from-experts/index.html">Learn Webs Applications Development from Experts</a>
                                 </h6>
                                 <span class="recent-post-widget-date">
                                 April 1, 2021                        </span>
                              </div>
                           </li>
                           <li>
                              <div class="recent-post-wid-thumb" style="background-image: url('../../wp-content/uploads/sites/3/2021/04/blog-4.jpg');"></div>
                              <div class="recent-post-wid-cont">
                                 <h6>
                                    <a class="recent-news-title" href="expand-your-career-opportunities-with-python/index.html">Expand Your Career Opportunities With Python</a>
                                 </h6>
                                 <span class="recent-post-widget-date">
                                 April 1, 2021                        </span>
                              </div>
                           </li>
                        </ul> -->
                     </div>
                     <div id="omexer_insight_contact_widget-1" class="footer-widget widget_omexer_insight_contact_widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="address-widget-list">
                           <li class="footer-address-desc">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                              <p><?=$address_pc?></p>
                           </li>
                           <li class="footer-mail-address">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <p><a href="https://demo.omexer.com/cdn-cgi/l/email-protection#374442474758454377524f565a475b521954585a"><span class="__cf_email__" data-cfemail="a2d1d7d2d2cdd0d6e2c7dac3cfd2cec78cc1cdcf"><?=$email_pc_id?></span></a></p>
                           </li>
                           <li class="footer-mobile-number">
                              <p><i class="fa fa-phone-alt" aria-hidden="true"></i><?=$contact_no_pc?></p>
                           </li>
                        </ul>
                        <div class="footer-subscribe-form">
                           Feel free to contact us                
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom-area">
               <div class="container">
                  <div class="site-info text-center">
                     © Copy 2022. All Rights Reserved            
                  </div>
                  <!-- .site-info -->
               </div>
            </div>
         </footer>



</div><!-- #page -->

	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<style>form.fluent_form_3 .ff-btn-submit { background-color: #409EFF; color: #ffffff; }</style><link rel='stylesheet' id='fluent-form-styles-css' href='../wp-content/plugins/fluentform/public/css/fluent-forms-publicc5af.css?ver=4.3.21' type='text/css' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='../wp-content/plugins/fluentform/public/css/fluentform-public-defaultc5af.css?ver=4.3.21' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script type='text/javascript' src='../wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>

<script type='text/javascript' src='../wp-content/plugins/tutor/assets/js/tutor.min431f.js?ver=2.1.2' id='tutor-script-js'></script>

<script type='text/javascript' src='../wp-includes/js/quicktags.min6a4d.js?ver=6.1.1' id='quicktags-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/mouse.min3f14.js?ver=1.13.2' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/sortable.min3f14.js?ver=1.13.2' id='jquery-ui-sortable-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.ui.touch-punchc682.js?ver=0.2.2' id='jquery-touch-punch-js'></script>
<script type='text/javascript' src='../wp-content/plugins/tutor/assets/packages/SocialShare/SocialShare.min431f.js?ver=2.1.2' id='tutor-social-share-js'></script>

<script type='text/javascript' src='../wp-content/plugins/tutor/assets/js/tutor-front.min431f.js?ver=2.1.2' id='tutor-frontend-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min53ec.js?ver=2.7.0-wc.7.1.0' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/main\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/main\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.omexer.com\/main\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min9d27.js?ver=7.1.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min8b1a.js?ver=2.1.4-wc.7.1.0' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/main\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/main\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min9d27.js?ver=7.1.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/main\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/main\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_35c2908e40925ee4d7fdf90772f7e67b","fragment_name":"wc_fragments_35c2908e40925ee4d7fdf90772f7e67b","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min9d27.js?ver=7.1.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='../wp-content/themes/omexo/assets/js/popper.mind57f.js?ver=1.12.9' id='popper-js'></script>
<script type='text/javascript' src='../wp-content/themes/omexo/assets/js/slicknav.min1c96.js?ver=1.0.10' id='slicknav-js'></script>
<script type='text/javascript' src='../wp-content/themes/omexo/assets/js/custom8a54.js?ver=1.0.0' id='omexo-custom-js'></script>
<script type='text/javascript' id='fluent-form-submission-js-extra'>
/* <![CDATA[ */
var fluentFormVars = {"ajaxUrl":"https:\/\/demo.omexer.com\/main\/wp-admin\/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year"},"pro_version":"","fluentform_version":"4.3.21","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemText":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false}};
/* ]]> */
</script>

<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/webpack.runtime.min9e95.js?ver=3.8.0' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend-modules.min9e95.js?ver=3.8.0' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>

<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.min9e95.js?ver=3.8.0' id='elementor-frontend-js'></script>
<script type='text/javascript' src='../wp-content/plugins/omexer-insight/assets/js/omexer-insightc64e.js?ver=1.1.1' id='omexer-insight-js'></script>
<script type='text/javascript' src='../wp-content/plugins/omexer-insight/assets/js/countdownc64e.js?ver=1.1.1' id='countdown-js'></script>
<script type='text/javascript' src='../wp-content/plugins/omexer-insight/assets/js/owl.carousel.minc64e.js?ver=1.1.1' id='owl-carousel-js'></script>
<script type='text/javascript' src='../wp-content/plugins/omexer-insight/assets/js/magnific-popup.minc64e.js?ver=1.1.1' id='magnific-popup-js'></script>

</body>

</html>
<script>
   jQuery('.submit-contact-form').click(function(){
      var your_name = jQuery('.your_name').val();
      var email_address = jQuery('.email_address').val();
      var subject_text = jQuery('.subject_text').val();
      var message_text = jQuery('.message_text').val();
      jQuery.ajax({
         url:'../php/contact_us.php',
         method:'POST',
         data:{your_name:your_name, email_address:email_address, subject_text:subject_text, message_text:message_text},
         success:function(data){
            //alert(data);
            if (data == 1) {
               alert("Contact form submited! we will contact you soon!");
            }
            else{
               alert("Try again later!");
            }
         }
      })

   })
</script>