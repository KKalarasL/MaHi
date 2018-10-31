<?php
// Silence is golden.

Code -01- (Header Content/Navigaton Bar)
//
// <header class="site-header">
//     <div class="container">
//       <h1 class="school-logo-text float-left"><a href="#"><strong>Fictional</strong> University</a></h1>
//       <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
//       <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
//       <div class="site-header__menu group">
//         <nav class="main-navigation">
//           <ul>
//             <li><a href="#">About Us</a></li>
//             <li><a href="#">Programs</a></li>
//             <li><a href="#">Events</a></li>
//             <li><a href="#">Campuses</a></li>
//             <li><a href="#">Blog</a></li>
//           </ul>
//         </nav>
//         <div class="site-header__util">
//           <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
//           <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
//           <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
//         </div>
//       </div>
//     </div>
//   </header>

Code -02- (Footer Content)
//
// <footer class="site-footer">

//     <div class="site-footer__inner container container--narrow">

//       <div class="group">

//         <div class="site-footer__col-one">
//           <h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
//           <p><a class="site-footer__link" href="#">555.555.5555</a></p>
//         </div>

//         <div class="site-footer__col-two-three-group">
//           <div class="site-footer__col-two">
//             <h3 class="headline headline--small">Explore</h3>
//             <nav class="nav-list">
//               <ul>
//                 <li><a href="#">About Us</a></li>
//                 <li><a href="#">Programs</a></li>
//                 <li><a href="#">Events</a></li>
//                 <li><a href="#">Campuses</a></li>
//               </ul>
//             </nav>
//           </div>

//           <div class="site-footer__col-three">
//             <h3 class="headline headline--small">Learn</h3>
//             <nav class="nav-list">
//               <ul>
//                 <li><a href="#">Legal</a></li>
//                 <li><a href="#">Privacy</a></li>
//                 <li><a href="#">Careers</a></li>
//               </ul>
//             </nav>
//           </div>
//         </div>

//         <div class="site-footer__col-four">
//           <h3 class="headline headline--small">Connect With Us</h3>
//           <nav>
//             <ul class="min-list social-icons-list group">
//               <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
//               <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
//               <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
//               <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
//               <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
//             </ul>
//           </nav>
//         </div>
//       </div>

//     </div>
//   </footer>

Code -03- (Footer Social Icons/Fonts)
// wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

// wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

Code -04- (Add Banner + Add Hero Slider)
// <div class="page-banner">
//   <div class="page-banner__bg-image" style="background-image: url(images/library-hero.jpg);"></div>
//     <div class="page-banner__content container t-center c-white">
//       <h1 class="headline headline--large">Welcome!</h1>
//       <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
//       <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
//       <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
//     </div>
//   </div>

//   <div class="full-width-split group">
//     <div class="full-width-split__one">
//       <div class="full-width-split__inner">
//         <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        
//         <div class="event-summary">
//           <a class="event-summary__date t-center" href="#">
//             <span class="event-summary__month">Mar</span>
//             <span class="event-summary__day">25</span>  
//           </a>
//           <div class="event-summary__content">
//             <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
//             <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
//           </div>
//         </div>
//         <div class="event-summary">
//           <a class="event-summary__date t-center" href="#">
//             <span class="event-summary__month">Apr</span>
//             <span class="event-summary__day">02</span>  
//           </a>
//           <div class="event-summary__content">
//             <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
//             <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
//           </div>
//         </div>
        
//         <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

//       </div>
//     </div>
//     <div class="full-width-split__two">
//       <div class="full-width-split__inner">
//         <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

//         <div class="event-summary">
//           <a class="event-summary__date event-summary__date--beige t-center" href="#">
//             <span class="event-summary__month">Jan</span>
//             <span class="event-summary__day">20</span>  
//           </a>
//           <div class="event-summary__content">
//             <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
//             <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
//           </div>
//         </div>
//         <div class="event-summary">
//           <a class="event-summary__date event-summary__date--beige t-center" href="#">
//             <span class="event-summary__month">Feb</span>
//             <span class="event-summary__day">04</span>  
//           </a>
//           <div class="event-summary__content">
//             <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
//             <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
//           </div>
//         </div>
        
//         <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
//       </div>
//     </div>
//   </div>

//   <div class="hero-slider">
//   <div class="hero-slider__slide" style="background-image: url(images/bus.jpg);">
//     <div class="hero-slider__interior container">
//       <div class="hero-slider__overlay">
//         <h2 class="headline headline--medium t-center">Free Transportation</h2>
//         <p class="t-center">All students have free unlimited bus fare.</p>
//         <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
//       </div>
//     </div>
//   </div>
//   <div class="hero-slider__slide" style="background-image: url(images/apples.jpg);">
//     <div class="hero-slider__interior container">
//       <div class="hero-slider__overlay">
//         <h2 class="headline headline--medium t-center">An Apple a Day</h2>
//         <p class="t-center">Our dentistry program recommends eating apples.</p>
//         <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
//       </div>
//     </div>
//   </div>
//   <div class="hero-slider__slide" style="background-image: url(images/bread.jpg);">
//     <div class="hero-slider__interior container">
//       <div class="hero-slider__overlay">
//         <h2 class="headline headline--medium t-center">Free Food</h2>
//         <p class="t-center">Fictional University offers lunch plans for those in need.</p>
//         <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
//       </div>
//     </div>
//   </div>
// </div>

Code -05- (Interion Page Template)

// <div class="page-banner">
//     <div class="page-banner__bg-image" style="background-image: url(images/ocean.jpg);"></div>
//     <div class="page-banner__content container container--narrow">
//       <h1 class="page-banner__title">Our History</h1>
//       <div class="page-banner__intro">
//         <p>Learn how the school of your dreams got started.</p>
//       </div>
//     </div>  
//   </div>

//   <div class="container container--narrow page-section">

//     <div class="metabox metabox--position-up metabox--with-home-link">
//       <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
//     </div>
    
//     <div class="page-links">
//       <h2 class="page-links__title"><a href="#">About Us</a></h2>
//       <ul class="min-list">
//         <li class="current_page_item"><a href="#">Our History</a></li>
//         <li><a href="#">Our Goals</a></li>
//       </ul>
//     </div>

//     <div class="generic-content">
//       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
//       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
//     </div>

// </div>

Code -ZZ- (CSS Style)
//
// /* 3rd party packages */

// /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */

// /**
//  * 1. Change the default font family in all browsers (opinionated).
//  * 2. Correct the line height in all browsers.
//  * 3. Prevent adjustments of font size after orientation changes in
//  *    IE on Windows Phone and in iOS.
//  */

// /* Document
//    ========================================================================== */

// html {
//   font-family: sans-serif; /* 1 */
//   line-height: 1.15; /* 2 */
//   -ms-text-size-adjust: 100%; /* 3 */
//   -webkit-text-size-adjust: 100%; /* 3 */
// }

// /* Sections
//    ========================================================================== */

// /**
//  * Remove the margin in all browsers (opinionated).
//  */

// body {
//   margin: 0;
// }

// /**
//  * Add the correct display in IE 9-.
//  */

// article,
// aside,
// footer,
// header,
// nav,
// section {
//   display: block;
// }

// /**
//  * Correct the font size and margin on `h1` elements within `section` and
//  * `article` contexts in Chrome, Firefox, and Safari.
//  */

// h1 {
//   font-size: 2em;
//   margin: 0.67em 0;
// }

// /* Grouping content
//    ========================================================================== */

// /**
//  * Add the correct display in IE 9-.
//  * 1. Add the correct display in IE.
//  */

// figcaption,
// figure,
// main { /* 1 */
//   display: block;
// }

// /**
//  * Add the correct margin in IE 8.
//  */

// figure {
//   margin: 1em 40px;
// }

// /**
//  * 1. Add the correct box sizing in Firefox.
//  * 2. Show the overflow in Edge and IE.
//  */

// hr {
//   box-sizing: content-box; /* 1 */
//   height: 0; /* 1 */
//   overflow: visible; /* 2 */
// }

// /**
//  * 1. Correct the inheritance and scaling of font size in all browsers.
//  * 2. Correct the odd `em` font sizing in all browsers.
//  */

// pre {
//   font-family: monospace, monospace; /* 1 */
//   font-size: 1em; /* 2 */
// }

// /* Text-level semantics
//    ========================================================================== */

// /**
//  * 1. Remove the gray background on active links in IE 10.
//  * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
//  */

// a {
//   background-color: transparent; /* 1 */
//   -webkit-text-decoration-skip: objects; /* 2 */
// }

// /**
//  * Remove the outline on focused links when they are also active or hovered
//  * in all browsers (opinionated).
//  */

// a:active,
// a:hover {
//   outline-width: 0;
// }

// /**
//  * 1. Remove the bottom border in Firefox 39-.
//  * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
//  */

// abbr[title] {
//   border-bottom: none; /* 1 */
//   text-decoration: underline; /* 2 */
//   text-decoration: underline dotted; /* 2 */
// }

// /**
//  * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
//  */

// b,
// strong {
//   font-weight: inherit;
// }

// /**
//  * Add the correct font weight in Chrome, Edge, and Safari.
//  */

// b,
// strong {
//   font-weight: bolder;
// }

// /**
//  * 1. Correct the inheritance and scaling of font size in all browsers.
//  * 2. Correct the odd `em` font sizing in all browsers.
//  */

// code,
// kbd,
// samp {
//   font-family: monospace, monospace; /* 1 */
//   font-size: 1em; /* 2 */
// }

// /**
//  * Add the correct font style in Android 4.3-.
//  */

// dfn {
//   font-style: italic;
// }

// /**
//  * Add the correct background and color in IE 9-.
//  */

// mark {
//   background-color: #ff0;
//   color: #000;
// }

// /**
//  * Add the correct font size in all browsers.
//  */

// small {
//   font-size: 80%;
// }

// /**
//  * Prevent `sub` and `sup` elements from affecting the line height in
//  * all browsers.
//  */

// sub,
// sup {
//   font-size: 75%;
//   line-height: 0;
//   position: relative;
//   vertical-align: baseline;
// }

// sub {
//   bottom: -0.25em;
// }

// sup {
//   top: -0.5em;
// }

// /* Embedded content
//    ========================================================================== */

// /**
//  * Add the correct display in IE 9-.
//  */

// audio,
// video {
//   display: inline-block;
// }

// /**
//  * Add the correct display in iOS 4-7.
//  */

// audio:not([controls]) {
//   display: none;
//   height: 0;
// }

// /**
//  * Remove the border on images inside links in IE 10-.
//  */

// img {
//   border-style: none;
// }

// /**
//  * Hide the overflow in IE.
//  */

// svg:not(:root) {
//   overflow: hidden;
// }

// /* Forms
//    ========================================================================== */

// /**
//  * 1. Change the font styles in all browsers (opinionated).
//  * 2. Remove the margin in Firefox and Safari.
//  */

// button,
// input,
// optgroup,
// select,
// textarea {
//   font-family: sans-serif; /* 1 */
//   font-size: 100%; /* 1 */
//   line-height: 1.15; /* 1 */
//   margin: 0; /* 2 */
// }

// /**
//  * Show the overflow in IE.
//  * 1. Show the overflow in Edge.
//  */

// button,
// input { /* 1 */
//   overflow: visible;
// }

// /**
//  * Remove the inheritance of text transform in Edge, Firefox, and IE.
//  * 1. Remove the inheritance of text transform in Firefox.
//  */

// button,
// select { /* 1 */
//   text-transform: none;
// }

// /**
//  * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
//  *    controls in Android 4.
//  * 2. Correct the inability to style clickable types in iOS and Safari.
//  */

// button,
// html [type="button"], /* 1 */
// [type="reset"],
// [type="submit"] {
//   -webkit-appearance: button; /* 2 */
// }

// /**
//  * Remove the inner border and padding in Firefox.
//  */

// button::-moz-focus-inner,
// [type="button"]::-moz-focus-inner,
// [type="reset"]::-moz-focus-inner,
// [type="submit"]::-moz-focus-inner {
//   border-style: none;
//   padding: 0;
// }

// /**
//  * Restore the focus styles unset by the previous rule.
//  */

// button:-moz-focusring,
// [type="button"]:-moz-focusring,
// [type="reset"]:-moz-focusring,
// [type="submit"]:-moz-focusring {
//   outline: 1px dotted ButtonText;
// }

// /**
//  * Change the border, margin, and padding in all browsers (opinionated).
//  */

// fieldset {
//   border: 1px solid #c0c0c0;
//   margin: 0 2px;
//   padding: 0.35em 0.625em 0.75em;
// }

// /**
//  * 1. Correct the text wrapping in Edge and IE.
//  * 2. Correct the color inheritance from `fieldset` elements in IE.
//  * 3. Remove the padding so developers are not caught out when they zero out
//  *    `fieldset` elements in all browsers.
//  */

// legend {
//   box-sizing: border-box; /* 1 */
//   color: inherit; /* 2 */
//   display: table; /* 1 */
//   max-width: 100%; /* 1 */
//   padding: 0; /* 3 */
//   white-space: normal; /* 1 */
// }

// /**
//  * 1. Add the correct display in IE 9-.
//  * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
//  */

// progress {
//   display: inline-block; /* 1 */
//   vertical-align: baseline; /* 2 */
// }

// /**
//  * Remove the default vertical scrollbar in IE.
//  */

// textarea {
//   overflow: auto;
// }

// /**
//  * 1. Add the correct box sizing in IE 10-.
//  * 2. Remove the padding in IE 10-.
//  */

// [type="checkbox"],
// [type="radio"] {
//   box-sizing: border-box; /* 1 */
//   padding: 0; /* 2 */
// }

// /**
//  * Correct the cursor style of increment and decrement buttons in Chrome.
//  */

// [type="number"]::-webkit-inner-spin-button,
// [type="number"]::-webkit-outer-spin-button {
//   height: auto;
// }

// /**
//  * 1. Correct the odd appearance in Chrome and Safari.
//  * 2. Correct the outline style in Safari.
//  */

// [type="search"] {
//   -webkit-appearance: textfield; /* 1 */
//   outline-offset: -2px; /* 2 */
// }

// /**
//  * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
//  */

// [type="search"]::-webkit-search-cancel-button,
// [type="search"]::-webkit-search-decoration {
//   -webkit-appearance: none;
// }

// /**
//  * 1. Correct the inability to style clickable types in iOS and Safari.
//  * 2. Change font properties to `inherit` in Safari.
//  */

// ::-webkit-file-upload-button {
//   -webkit-appearance: button; /* 1 */
//   font: inherit; /* 2 */
// }

// /* Interactive
//    ========================================================================== */

// /*
//  * Add the correct display in IE 9-.
//  * 1. Add the correct display in Edge, IE, and Firefox.
//  */

// details, /* 1 */
// menu {
//   display: block;
// }

// /*
//  * Add the correct display in all browsers.
//  */

// summary {
//   display: list-item;
// }

// /* Scripting
//    ========================================================================== */

// /**
//  * Add the correct display in IE 9-.
//  */

// canvas {
//   display: inline-block;
// }

// /**
//  * Add the correct display in IE.
//  */

// template {
//   display: none;
// }

// /* Hidden
//    ========================================================================== */

// /**
//  * Add the correct display in IE 10-.
//  */

// [hidden] {
//   display: none;
// }

// /* Slider */

// .slick-slider
// {
//     position: relative;

//     display: block;
//     box-sizing: border-box;

//     -webkit-user-select: none;
//        -moz-user-select: none;
//         -ms-user-select: none;
//             user-select: none;

//     -webkit-touch-callout: none;
//     -khtml-user-select: none;
//     -ms-touch-action: pan-y;
//         touch-action: pan-y;
//     -webkit-tap-highlight-color: transparent;
// }

// .slick-list
// {
//     position: relative;

//     display: block;
//     overflow: hidden;

//     margin: 0;
//     padding: 0;
// }

// .slick-list:focus
// {
//     outline: none;
// }

// .slick-list.dragging
// {
//     cursor: pointer;
//     cursor: hand;
// }

// .slick-slider .slick-track,
// .slick-slider .slick-list
// {
//     -webkit-transform: translate3d(0, 0, 0);
//             transform: translate3d(0, 0, 0);
// }

// .slick-track
// {
//     position: relative;
//     top: 0;
//     left: 0;

//     display: block;
// }

// .slick-track:before,
// .slick-track:after
// {
//     display: table;

//     content: '';
// }

// .slick-track:after
// {
//     clear: both;
// }

// .slick-loading .slick-track
// {
//     visibility: hidden;
// }

// .slick-slide
// {
//     display: none;
//     float: left;

//     height: 100%;
//     min-height: 1px;
// }

// [dir='rtl'] .slick-slide
// {
//     float: right;
// }

// .slick-slide img
// {
//     display: block;
// }

// .slick-slide.slick-loading img
// {
//     display: none;
// }

// .slick-slide.dragging img
// {
//     pointer-events: none;
// }

// .slick-initialized .slick-slide
// {
//     display: block;
// }

// .slick-loading .slick-slide
// {
//     visibility: hidden;
// }

// .slick-vertical .slick-slide
// {
//     display: block;

//     height: auto;

//     border: 1px solid transparent;
// }

// .slick-arrow.slick-hidden {
//     display: none;
// }

// /* SASS and Global'ish Stuff */

// body {
//   color: #333;
//   font-family: 'Roboto', sans-serif;
//   overflow-x: hidden;
//   position: relative;
// }

// img {
//   max-width: 100%;
//   height: auto;
// }

// a {
//   color: #0D3B66;
// }

// a:hover {
//   text-decoration: none;
// }

// p, ul, ol {
//   margin: 0 0 1.65em 0;
// }

// p, li {
//   line-height: 1.65;
// }

// .container {
//   max-width: 1300px;
//   margin: 0 auto;
//   padding: 0 16px;
//   position: relative;
// }

// .container--narrow {
//   max-width: 960px;
// }

// .section-break {
//   border: none;
//   border-top: 1px solid #DDD;
//   margin: 2.5rem 0;
// }

// .min-list {
//   padding: 0;
//   margin: 0;
// }

// .min-list li {
//   list-style: none;
// }

// .p-top-small {padding-top: 1rem}

// .p-top-large {padding-top: 1.6rem}

// .p-bottom-large {padding-bottom: 1.6rem}

// @media (min-width: 530px) {

//   .p-top-large {
//     padding-top: 3.5rem;
//   }

//   .p-bottom-large {
//     padding-bottom: 3.5rem;
//   }
// }

// .no-margin {margin: 0}

// .nu {text-decoration: none}

// .nu:hover {text-decoration: underline}

// .t-left {text-align: left}

// .t-right {text-align: right}

// .t-center {text-align: center}

// .t-small {font-size: .85rem}

// .float-left {float: left}

// .float-right {float: right}

// .push-right {margin-right: 20px}

// .container:before,
// .container:after,
// .group:before,
// .group:after {
//   content: " ";
//   display: table;
// }

// .container:after,
// .group:after {
//   clear: both;
// }

// .hide {
//   display: none;
// }

// /* BEM Blocks */

// .remove-favorite {
//   display: inline-block;
//   transition: all .3s;
//   color: #999;
//   font-size: .9rem;
//   cursor: pointer;
//   padding: 4px 6px;
//   border-radius: 3px;
// }

// .remove-favorite:hover {
//   background-color: #DEDEDE;
// }

// .page-section {
//   padding-top: 1.6rem;
//   padding-bottom: 1.6rem;
// }

// @media (min-width: 530px) {

//   .page-section {
//     padding-top: 3.5rem;
//     padding-bottom: 3.5rem;
//   }
// }

// .page-section--white {
//   background-color: #FFF;
// }

// .page-section--beige {
//   background-color: #FAF0CA;
// }

// .page-section p:last-of-type {
//   margin-bottom: 0;
// }

// .school-logo-text {
//   position: relative;
//   z-index: 20;
//   margin: 0;
//   font-size: 1.75rem;
//   font-weight: 100;
// }

// .school-logo-text strong {
//   font-weight: 400;
// }

// .school-logo-text a {
//   color: #FFF;
//   text-decoration: none;
// }

// .school-logo-text--alt-color a {
//   color: #666;
// }

// .school-logo-text--alt-color a:hover {
//   color: #0D3B66;
//   text-decoration: underline;
// }

// @-webkit-keyframes spin {
//   0% {
//     -webkit-transform: rotate(0deg);
//             transform: rotate(0deg);
//   }
//   100% {
//     -webkit-transform: rotate(360deg);
//             transform: rotate(360deg);
//   }
// }

// @keyframes spin {
//   0% {
//     -webkit-transform: rotate(0deg);
//             transform: rotate(0deg);
//   }
//   100% {
//     -webkit-transform: rotate(360deg);
//             transform: rotate(360deg);
//   }
// }

// .spinner-loader {
//   margin-top: 45px;
//   border-radius: 50%;
//   width: 24px;
//   height: 24px;
//   border: 0.25rem solid rgba(0, 0, 0, 0.2);
//   border-top-color: black;
//   -webkit-animation: spin 1s infinite linear;
//           animation: spin 1s infinite linear;
// }

// .c-orange {color: #F95738}

// .c-blue {color: #0D3B66}

// .c-white {color: #FFF}

// .c-dark {color: #333}

// .gray {color: #999999}

// .search-trigger {
//   display: none;
//   color: #FFF;
//   position: relative;
//   cursor: pointer;
//   top: 1px;
//   margin-left: 20px;
// }

// @media (min-width: 960px) {

//   .search-trigger {
//     display: inline-block;
//     top: 6px;
//   }
// }

// .search-trigger:hover {
//   opacity: .65;
// }

// .social-icons-list {
//   display: -webkit-box;
//   display: -ms-flexbox;
//   display: flex;
//   margin: 0 -8px;
// }

// .social-icons-list li {
//   -webkit-box-flex: 1;
//       -ms-flex: 1;
//           flex: 1;
//   margin: 0 8px;
// }

// .social-icons-list li a {
//   display: block;
//   text-align: center;
//   color: #FFF;
//   font-size: 1.25rem;
// }

// .social-icons-list li a:hover {
//   opacity: .75;
// }

// .social-color-facebook {background-color: #4862a3}

// .social-color-twitter {background-color: #55acee}

// .social-color-youtube {background-color: #cc1e1f}

// .social-color-linkedin {background-color: #0077b5}

// .social-color-instagram {background-color: #d8226b}

// .nav-list ul {
//   padding: 0;
//   margin: 0;
// }

// .nav-list li {
//   list-style: none;
// }

// .nav-list a {
//   font-size: .9rem;
//   color: #999;
//   text-decoration: none;
// }

// .nav-list a:hover {
//   color: #0D3B66;
//   text-decoration: underline;
// }

// .one-half,
// .one-third,
// .one-fourth,
// .one-fifth,
// .one-sixth {
//   padding-bottom: 1.6rem;
// }

// @media (min-width: 960px) {

//   .row {
//     margin-right: -50px;
//   }

//   .one-half,
//   .one-third,
//   .two-thirds,
//   .one-fourth,
//   .one-fifth,
//   .one-sixth {
//     padding-bottom: 0;
//     float: left;
//     box-sizing: border-box;
//     padding-right: 50px;
//   }

//   .two-thirds {
//     width: 66.66%;
//   }

//   .one-half {
//     width: 50%;
//   }

//   .one-third {
//     width: 33.33%;
//   }

//   .one-quarter {
//     width: 25%;
//   }

//   .one-fifth {
//     width: 20%;
//   }

//   .one-sixth {
//     width: 16.66%;
//   }
// }

// /* Make Top WP Admin Bar Fixed on Mobile */

// @media screen and (max-width: 600px) {
//   #wpadminbar {
//     position: fixed;
//   }
// }

// /* Seach Form */

// .search-form {
//   background-color: #DEDEDE;
//   padding: 20px;
//   text-align: center;
// }

// .search-form label {
//   display: block;
// }

// .search-form-row {
//   display: -webkit-box;
//   display: -ms-flexbox;
//   display: flex;
// }

// .search-form .s {
//   min-width: 20px;
//   -ms-flex-preferred-size: auto;
//       flex-basis: auto;
//   -webkit-box-flex: 1;
//       -ms-flex-positive: 1;
//           flex-grow: 1;
//   border: none;
//   font-family: 'Roboto', sans-serif;
//   padding: 10px;
// }

// @media (min-width: 530px) {

//   .search-form .s {
//     font-size: 1.4rem;
//   }
// }

// .search-submit {
//   color: #FFF;
//   border: none;
//   border-radius: 4px;
//   outline: none;
//   background-color: #0D3B66;
//   font-family: 'Roboto', sans-serif;
//   padding: 0 20px;
//   margin-left: 10px;
// }

// .note-limit-message {
//   visibility: hidden;
//   opacity: 0;
//   transition: all .3s ease-out;
//   color: #c32929;
//   font-weight: bold;
// }

// .note-limit-message.active {
//   visibility: visible;
//   opacity: 1;
// }

// /* Like Box */

// .generic-content .like-box {
//   float: right;
//   font-size: 1rem;
//   background-color: #EDEDED;
//   box-shadow: 1px 1px 1px rgba(0, 0, 0, .25);
//   color: red;
//   padding: 10px 10px 10px 25px;
//   border-radius: 4px;
//   cursor: pointer;
//   margin: 0 0 30px 30px;
//   position: relative;
// }

// .generic-content .like-box:hover {
//   background-color: #DEDEDE;
// }

// .like-count {
//   padding-left: 10px;
// }

// .like-box .fa-heart-o {
//   transition: all .35s ease-out;
//   position: absolute;
//   left: 10px;
// }

// .like-box .fa-heart {
//   left: 10px;
//   transition: all .4s ease-out;
//   position: absolute;
//   visibility: hidden;
//   -webkit-transform: scale(.2);
//           transform: scale(.2);
//   opacity: 0;
// }

// .like-box[data-exists="yes"] .fa-heart {
//   -webkit-transform: scale(1);
//           transform: scale(1);
//   visibility: visible;
//   opacity: 1;
// }

// .like-box[data-exists="yes"] .fa-heart-o {
//   visibility: hidden;
//   opacity: 0;
// }

// /* Customize Login Screen */

// body.login .button-primary {
//   background-color: #F95738;
//   border-color: rgb(224, 84, 56);
//   text-shadow: 0 -1px 1px rgb(212, 82, 56),1px 0 1px rgb(212, 82, 56),0 1px 1px rgb(212, 82, 56),-1px 0 1px rgb(212, 82, 56);
//   box-shadow: 0 1px 0 rgb(199, 80, 56);
// }

// body.login .button-primary:hover,
// body.login .button-primary:active,
// body.login .button-primary:focus {
//   background-color: rgb(232, 85, 56);
//   border-color: rgb(212, 82, 56);
//   text-shadow: 0 -1px 1px rgb(199, 80, 56),1px 0 1px rgb(199, 80, 56),0 1px 1px rgb(199, 80, 56),-1px 0 1px rgb(199, 80, 56);
//   box-shadow: 0 1px 0 rgb(186, 78, 56);
// }

// body.login {
//   background-color: #FAF0CA;
// }

// .login h1 a {
//   color: #0D3B66;
//   font-size: 30px;
//   font-weight: 300;
//   background-image: none;
//   width: auto;
//   height: auto;
//   text-indent: 0;
// }

// .btn {
//   display: inline-block;
//   cursor: pointer;
//   border-radius: 4px;
//   overflow: hidden;
//   text-decoration: none;
//   color: #FFF;
//   font-size: 1.19rem;
//   padding: 12px 24px;
//   border: none;
//   outline: none;
// }

// .btn--small {
//   font-size: .88rem;
//   padding: 7px 13px;
//   font-weight: 300;
// }

// .btn--with-photo {
//   padding-left: 40px;
//   position: relative;
// }

// .btn--orange {
//   background-color: #EE964B;
// }

// .btn--orange:hover {
//   background: linear-gradient(#EE964B, rgb(235, 109, 0));
// }

// .btn--dark-orange {
//   background-color: #F95738;
// }

// .btn--dark-orange:hover {
//   background: linear-gradient(#F95738, rgb(204, 34, 0));
// }

// .btn--blue {
//   background-color: #0D3B66;
// }

// .btn--blue:hover {
//   background: linear-gradient(rgb(13, 80, 143), #0D3B66);
// }

// .btn--yellow {
//   background-color: #F4D35E;
//   text-shadow: 1px 1px 1px rgba(0, 0, 0, .22);
// }

// .btn--yellow:hover {
//   background: linear-gradient(#F4D35E, rgb(240, 188, 0));
// }

// .btn--beige {
//   background-color: #FAF0CA;
//   color: #173f58;
// }

// .btn--beige:hover {
//   background-color: #F4D35E;
// }

// .btn--gray {
//   background-color: #222;
// }

// .btn--white {
//   background-color: #FFF;
//   color: #173f58;
// }

// .btn--white:hover {
//   background-color: #DDD;
// }

// .btn--large {
//   font-size: 1.3rem;
//   padding: 16px 34px;
//   border-radius: 7px;
// }

// @media (min-width: 530px) {

//   .btn--large {
//     font-size: 1.9rem;
//   }
// }

// .btn--inactive {
//   background-color: transparent;
//   cursor: default;
//   color: #333;
// }

// /* My Notes */

// .edit-note,
// .delete-note,
// .submit-note {
//   font-size: .9rem;
//   background-color: #EEE;
//   padding: 8px 16px;
//   display: inline-block;
//   margin-right: 7px;
//   border-radius: 4px;
//   cursor: pointer;
// }

// .submit-note {
//   color: #FFF;
//   border: none;
//   background-color: #F95738;
//   line-height: 1.65;
// }

// .submit-note:hover {
//   background-color: rgb(235, 77, 45);
// }

// @media (min-width: 635px) {

//   .edit-note, .delete-note {
//     position: relative;
//     top: -12px;
//   }
// }

// .edit-note:hover, .delete-note:hover {
//   background-color: #DDD;
// }

// .delete-note {
//   color: red;
// }

// .update-note {
//   visibility: hidden;
// }

// .update-note--visible {
//   visibility: visible;
// }

// .note-title-field {
//   width: 40%;
//   font-size: 1.85rem;
//   font-family: 'Roboto Condensed', sans-serif;
//   font-weight: 300;
//   color: #0D3B66;
//   border: 1px solid transparent;
//   padding: 7px;
//   outline: none;
//   position: relative;
//   top: 1px;
// }

// @media (max-width: 400px) {

//   .note-title-field {
//     width: 100%;
//   }
// }

// @media (min-width: 635px) {

//   .note-title-field {
//     width: 65%;
//     font-size: 3.125rem;
//   }
// }

// .note-body-field {
//   color: #333;
//   font-family: 'Roboto', sans-serif;
//   resize: none;
//   display: block;
//   width: 100%;
//   line-height: 1.65;
//   font-size: 1.15rem;
//   padding: 7px;
//   border: 1px solid transparent;
//   height: 175px;
//   outline: none;
// }

// .note-active-field {
//   border: 1px solid #DDD;
//   -webkit-animation: pulseBorder .75s alternate infinite;
//           animation: pulseBorder .75s alternate infinite;
// }

// @-webkit-keyframes pulseBorder {
//   0% {
//     border: 1px solid #FFF;
//   }

//   100% {
//     border: 1px solid #CCC;
//   }
// }

// @keyframes pulseBorder {
//   0% {
//     border: 1px solid #FFF;
//   }

//   100% {
//     border: 1px solid #CCC;
//   }
// }

// /* Create Note */

// .create-note {
//   background-color: #DDD;
//   padding: 20px;
//   margin-bottom: 20px;
// }

// .new-note-title {
//   width: 100%;
//   padding: 10px;
//   font-family: 'Roboto', sans-serif;
//   border: none;
//   margin-bottom: 10px;
//   font-size: 1.15rem;
//   box-sizing: border-box;
// }

// .new-note-body {
//   width: 100%;
//   box-sizing: border-box;
//   resize: none;
//   padding: 10px;
//   font-family: 'Roboto', sans-serif;
//   border: none;
//   margin-bottom: 10px;
//   height: 170px;
//   font-size: 1.15rem;
//   line-height: 1.65;
// }

// .site-header {
//   z-index: 3;
//   position: absolute;
//   top: 0;
//   left: 0;
//   right: 0;
//   padding: 20px 0;
// }

// .site-header__avatar {
//   position: absolute;
//   top: 0;
//   left: 0;
// }

// .site-header__avatar img {
//   display: block;
//   width: 30px;
//   height: 30px;
// }

// .site-header__menu {
//   visibility: hidden;
//   position: absolute;
//   background-color: rgba(13, 55, 94, 0.89);
//   left: 0;
//   right: 0;
//   top: -20px;
//   padding-top: 58px;
//   opacity: 0;
//   -webkit-transform: translateY(-20%);
//           transform: translateY(-20%);
//   transition: opacity .3s ease-out, visibility .3s ease-out, -webkit-transform .3s ease-out;
//   transition: opacity .3s ease-out, visibility .3s ease-out, transform .3s ease-out;
//   transition: opacity .3s ease-out, visibility .3s ease-out, transform .3s ease-out, -webkit-transform .3s ease-out;
//   padding-bottom: 20px;
// }

// .site-header__menu--active {
//   opacity: 1;
//   -webkit-transform: translateY(0);
//           transform: translateY(0);
//   visibility: visible;
// }

// @media (min-width: 960px) {

//   .site-header__menu {
//     visibility: visible;
//     opacity: 1;
//     -webkit-transform: translateY(0) scale(1);
//             transform: translateY(0) scale(1);
//     position: static;
//     background-color: transparent;
//     float: right;
//     padding-top: 0;
//     padding-bottom: 0;
//     top: 0;
//   }
// }

// .site-header__search-trigger {
//   cursor: pointer;
//   color: #FFF;
//   font-size: 1.2rem;
//   position: absolute;
//   top: 6px;
//   right: 16px;
// }

// @media (min-width: 530px) {

//   .site-header__search-trigger {
//     top: 4px;
//     font-size: 1.4rem;
//   }
// }

// @media (min-width: 960px) {

//   .site-header__search-trigger {
//     display: none;
//   }
// }

// .site-header__menu-trigger {
//   color: #FFF;
//   cursor: pointer;
//   font-size: 1.2rem;
//   position: absolute;
//   z-index: 10;
//   top: 7px;
//   right: 46px;
// }

// @media (min-width: 530px) {

//   .site-header__menu-trigger {
//     top: 5px;
//     font-size: 1.4rem;
//   }
// }

// @media (min-width: 960px) {

//   .site-header__menu-trigger {
//     display: none;
//   }
// }

// .site-header__util {
//   padding: 0 0 0 20px;
// }

// @media (min-width: 960px) {

//   .site-header__util {
//     padding: 0;
//     float: right;
//   }
// }

// .site-header__btn {
//   margin-right: 20px;
// }

// @media (min-width: 960px) {

//   .site-header__btn {
//     float: left;
//   }
// }

// .site-header .btn--with-photo {
//   margin-right: 0;
// }

// .site-footer {
//   padding: 2rem 0 3.5rem 0;
//   background-image: linear-gradient(#FFF, #ECECEC);
// }

// .site-footer p {
//   font-size: .9rem;
// }

// .site-footer .headline {
//   color: #666;
//   margin-bottom: .33rem;
// }

// .site-footer__link {
//   color: #999;
//   text-decoration: none;
// }

// .site-footer__link:hover {
//   color: #0D3B66;
//   text-decoration: underline;
// }

// .site-footer__inner {
//   border-top: 1px dotted #DEDEDE;
//   padding-top: 3.5rem;
// }

// .site-footer__col-one {
//   text-align: center;
// }

// @media (min-width: 960px) {

//   .site-footer__col-one {
//     text-align: left;
//     width: 33%;
//     float: left;
//   }
// }

// .site-footer__col-two-three-group {
//   text-align: center;
//   width: 85%;
//   margin: 0 auto;
// }

// @media (min-width: 960px) {

//   .site-footer__col-two-three-group {
//     text-align: left;
//     float: left;
//     width: 42%;
//     margin: 0;
//   }
// }

// .site-footer__col-two {
//   width: 50%;
//   float: left;
// }

// .site-footer__col-three {
//   width: 50%;
//   float: left;
// }

// .site-footer__col-four {
//   padding-top: 20px;
//   width: 85%;
//   margin: 0 auto;
//   clear: both;
//   text-align: center;
// }

// @media (min-width: 960px) {

//   .site-footer__col-four {
//     padding-top: 0;
//     margin: 0;
//     clear: none;
//     text-align: left;
//     width: 25%;
//     float: right;
//   }
// }

// .main-navigation {
//   padding-top: 2px;
// }

// .main-navigation ul {
//   padding: 0;
//   margin: 0;
// }

// .main-navigation ul:before,
//   .main-navigation ul:after {
//   content: " ";
//   display: table;
// }

// .main-navigation ul:after {
//   clear: both;
// }

// @media (min-width: 960px) {

//   .main-navigation {
//     float: left;
//     margin-right: 20px;
//   }
// }

// .main-navigation li {
//   list-style: none;
// }

// @media (min-width: 960px) {

//   .main-navigation li {
//     float: left;
//     padding-left: 20px;
//   }
// }

// .main-navigation a {
//   display: block;
//   padding: 10px 20px;
//   color: #FFF;
//   text-decoration: none;
//   font-weight: 300;
// }

// @media (min-width: 960px) {

//   .main-navigation a {
//     display: inline-block;
//     padding: 0;
//   }
// }

// .main-navigation .current-menu-item a,
// .main-navigation a:hover {
//   color: #FAF0CA;
// }

// .page-banner {
//   background-color: #000;
//   padding: 80px 0 40px 0;
//   position: relative;
// }

// @media (min-width: 530px) {

//   .page-banner {
//     padding: 130px 0 60px 0;
//   }
// }

// .page-banner__content {
//   position: relative;
//   z-index: 2;
// }

// .page-banner__title {
//   font-family: 'Roboto Condensed', sans-serif;
//   font-weight: 300;
//   font-size: 3.6rem;
//   margin: 0 0 1rem 0;
//   color: #FFF;
// }

// @media (min-width: 530px) {

//   .page-banner__title {
//     font-size: 5rem;
//   }
// }

// .page-banner__bg-image {
//   opacity: .33;
//   background-size: cover;
//   position: absolute;
//   top: 0;
//   bottom: 0;
//   left: 0;
//   right: 0;
// }

// .page-banner__intro {
//   font-weight: 300;
//   font-size: 1.2rem;
//   line-height: 1.3;
//   color: #EDEDED;
// }

// @media (min-width: 530px) {

//   .page-banner__intro {
//     font-size: 1.65rem;
//   }
// }

// .page-banner__intro p {
//   margin: 0;
// }

// .hero-slider {
//   position: relative;

// }

// .hero-slider div {
//   outline: none;
// }

// .hero-slider__interior {
//   padding-top: 60px;
//   padding-bottom: 60px;
// }

// @media (min-width: 960px) {

//   .hero-slider__interior {
//     padding-top: 130px;
//     padding-bottom: 130px;
//   }
// }

// .hero-slider__slide {
//   background-size: cover;
//   background-repeat: no-repeat;
// }

// .hero-slider__overlay {
//   margin: 0 auto;
//   background-color: rgba(0, 0, 0, .68);
//   padding: 40px;
//   color: #FFF;
// }

// @media (min-width: 960px) {

//   .hero-slider__overlay {
//     width: 50%;
//   }
// }

// .slick-dots {
//   z-index: 100;
//   position: absolute;
//   left: 0;
//   right: 0;
//   padding: 0;
//   margin: 0;
//   text-align: center;
//   top: 15px;
// }

// @media (min-width: 960px) {

//   .slick-dots {
//     top: 50px;
//   }
// }

// .slick-dots li {
//   list-style: none;
//   display: inline;
// }

// .slick-dots li button {
//   display: inline-block;
//   text-indent: -9999px;
//   font-size: 0;
//   line-height: 0;
//   width: 10px;
//   height: 10px;
//   background-color: rgba(255, 255, 255, .5);
//   box-shadow: 1px 1px 1px rgba(0, 0, 0, .25);
//   border-radius: 50%;
//   border: none;
//   margin: 0 4px;
//   padding: 0;
//   outline: none;
//   transition: background-color .3s ease-out;
//   cursor: pointer;
// }

// .slick-dots .slick-active button {
//   background-color: #FFF;
// }

// .search-overlay {
//   overflow-y: auto;
//   overflow-x: hidden;
//   z-index: 110;
//   position: fixed;
//   top: 0;
//   left: 0;
//   right: 0;
//   bottom: 0;
//   background-color: rgba(255, 255, 255, .96);
//   visibility: hidden;
//   opacity: 0;
//   -webkit-transform: scale(1.09);
//           transform: scale(1.09);
//   transition: opacity .3s, visibility .3s, -webkit-transform .3s;
//   transition: opacity .3s, transform .3s, visibility .3s;
//   transition: opacity .3s, transform .3s, visibility .3s, -webkit-transform .3s;
//   box-sizing: border-box;
// }

// .search-overlay p {
//   padding-top: 15px;
// }

// .search-overlay .event-summary p {
//   padding-top: 0;
// }

// .search-overlay .event-summary {
//   margin-bottom: 0;
//   margin-top: 20px;
// }

// body.admin-bar .search-overlay {
//   top: 32px;
// }

// .search-overlay__top {
//   background-color: rgba(0, 0, 0, .12);
// }

// .search-overlay__icon {
//   margin-right: 10px;
//   font-size: 1.8rem;
//   color: #F95738;
// }

// @media (min-width: 960px) {

//   .search-overlay__icon {
//     font-size: 2.5rem;
//   }
// }

// .search-overlay--active {
//   visibility: visible;
//   opacity: 1;
//   -webkit-transform: scale(1);
//           transform: scale(1);
// }

// .search-overlay__section-title {
//   margin: 30px 0 1px 0;
//   font-weight: 400;
//   color: #0D3B66;
//   font-size: 2rem;
//   padding: 15px 0;
//   border-bottom: 1px solid #CCC;
// }

// .search-overlay__close {
//   position: absolute;
//   top: 13px;
//   right: 16px;
//   font-size: 2.1rem;
//   cursor: pointer;
//   transition: all .3s;
//   background-color: #FFF;
//   color: #F95738;
//   line-height: .7;
// }

// @media (min-width: 530px) {

//   .search-overlay__close {
//     top: 18px;
//     font-size: 2.1rem;
//   }
// }

// @media (min-width: 960px) {

//   .search-overlay__close {
//     top: 26px;
//     font-size: 2.8rem;
//   }
// }

// .search-overlay__close:hover {
//   opacity: 1;
// }

// .search-overlay .one-half {
//   padding-bottom: 0;
// }

// .search-term {
//   width: 75%;
//   box-sizing: border-box;
//   border: none;
//   padding: 15px 0;
//   margin: 0;
//   background-color: transparent;
//   font-size: 1rem;
//   font-weight: 300;
//   outline: none;
//   color: #F95738;

// }

// @media (min-width: 530px) {

//   .search-term {
//     font-size: 1.5rem;
//   }
// }

// @media (min-width: 960px) {

//   .search-term {
//     width: 80%;
//     font-size: 3rem;
//   }
// }

// .body-no-scroll {
//   overflow: hidden;
// }

// .professor-cards {
//   margin: 0;
//   padding: 0;
// }

// .search-overlay .professor-cards {
//   padding-top: 21px;
// }

// .professor-card {
//   position: relative;
//   display: inline-block;
//   width: 200px;
//   margin-right: 15px;
//   background-color: #F95738;
//   overflow: hidden;
// }

// .search-overlay .professor-card {
//   width: 180px;
// }

// .professor-card__image {
//   display: block;
//   transition: opacity .3s ease-out, -webkit-transform .3s ease-out;
//   transition: opacity .3s ease-out, transform .3s ease-out;
//   transition: opacity .3s ease-out, transform .3s ease-out, -webkit-transform .3s ease-out;
// }

// .professor-card:hover .professor-card__image {
//   opacity: .80;
//   -webkit-transform: scale(1.1) rotate(4deg);
//           transform: scale(1.1) rotate(4deg);
// }

// .professor-card__name {
//   font-weight: 300;
//   font-size: .9rem;
//   position: absolute;
//   bottom: 0;
//   color: #FFF;
//   left: 0;
//   right: 0;
//   padding: 3px 10px;
//   background-color: rgba(236, 68, 34, 0.85);
// }

// .professor-card:hover .professor-card__name {
//   background-color: rgba(213, 62, 32, 0.85);
// }

// .professor-card__list-item {
//   display: inline-block;
//   list-style: none;
// }

// .headline {
//   margin: 0;
//   font-family: 'Roboto Condensed', sans-serif;
//   font-weight: 300;

// }

// .headline--large {
//   font-size: 3.6rem;
// }

// @media (min-width: 530px) {

//   .headline--large {
//     font-size: 6.25rem;
//   }
// }

// .headline--large-medium {
//   font-size: 5rem;
//   margin: 0 0 1rem 0;
// }

// .headline--medium {
//   font-size: 1.9rem;
//   margin-bottom: .75rem;
// }

// @media (min-width: 530px) {

//   .headline--medium {
//     font-size: 3.125rem;
//   }
// }

// .headline--small-plus {
//   font-family: 'Roboto', sans-serif;
//   font-size: 1.6875rem;
//   font-weight: 400;
//   margin-bottom: 1.9rem;
// }

// .headline--small {
//   font-size: 1.2rem;
//   margin-bottom: 1.9rem;
// }

// @media (min-width: 530px) {

//   .headline--small {
//     font-size: 1.6875rem;
//   }
// }

// .headline--smaller {
//   font-size: 1.5rem;
// }

// .headline--tiny {
//   font-family: 'Roboto', sans-serif;
//   font-size: 1.3875rem;
//   margin-bottom: .25rem;
// }

// .headline--post-title a {
//   color: #0D3B66;
//   text-decoration: none;
// }

// .headline--post-title a:hover {
//   text-decoration: underline;
// }

// .generic-content p, .generic-content li {
//   font-size: 1.15rem;
// }

// .generic-content blockquote, .generic-content blockquote p {
//   font-size: 1.5rem;
//   font-style: italic;
// }

// .generic-content h1, .generic-content h2, .generic-content h3, .generic-content h4, .generic-content h5, .generic-content h6 {
//   font-family: 'Roboto Condensed', sans-serif;
//   font-weight: 300;
//   margin-top: 0;
//   margin-bottom: 1rem;
// }

// .generic-content h1 {
//   font-size: 3.6rem
// }

// .generic-content h2 {
//   font-size: 3.1rem
// }

// .generic-content h3 {
//   font-size: 2.6rem
// }

// .generic-content h4 {
//   font-size: 2.1rem
// }

// .generic-content h5 {
//   font-size: 1.6rem
// }

// .generic-content h6 {
//   font-size: 1.15rem
// }

// @media (min-width: 530px) {

//   .generic-content h1 {
//     font-size: 6.25rem;
//   }

//   .generic-content h2 {
//     font-size: 5rem;
//   }

//   .generic-content h3 {
//     font-size: 3.125rem;
//   }

//   .generic-content h4 {
//     font-size: 2.4rem;
//   }

//   .generic-content h5 {
//     font-size: 1.9rem;
//   }

//   .generic-content h6 {
//     font-size: 1.15rem;
//   }
// }

// @media (min-width: 960px) {

//   .full-width-split {
//     display: -webkit-box;
//     display: -ms-flexbox;
//     display: flex;
//   }
// }

// .full-width-split__one {
//   -webkit-box-flex: 1;
//       -ms-flex: 1;
//           flex: 1;
//   padding: 1.6rem 16px;
// }

// @media (min-width: 960px) {

//   .full-width-split__one {
//     padding: 40px;
//   }
// }

// @media (min-width: 960px) {

//   .full-width-split__one .full-width-split__inner {
//     float: right;
//   }
// }

// .full-width-split__two {
//   -webkit-box-flex: 1;
//       -ms-flex: 1;
//           flex: 1;
//   background-color: #FAF0CA;
//   padding: 1.6rem 16px;
// }

// @media (min-width: 960px) {

//   .full-width-split__two {
//     padding: 40px;
//   }
// }

// @media (min-width: 1350px) {

//   .full-width-split__inner {
//     width: 610px;
//   }
// }

// .event-summary {
//   position: relative;
//   padding-left: 107px;
//   min-height: 77px;
//   padding-bottom: 1px;
//   margin-bottom: 20px;
// }

// .event-summary__title a {
//   color: #173f58;
// }

// .event-summary__date {
//   text-decoration: none;
//   display: block;
//   top: 0;
//   left: 0;
//   position: absolute;
//   padding: 14px 0 11px 0;
//   color: #FFF;
//   border-radius: 50%;
//   background-color: #0D3B66;
//   width: 80px;
//   line-height: 1;
//   transition: opacity .33s;
//   text-shadow: 1px 1px 1px rgba(0, 0, 0, .22);
// }

// .event-summary__date:hover {
//   opacity: .75;
// }

// .event-summary__date--beige {
//   background-color: #F4D35E;
// }

// .event-summary__month {
//   display: block;
//   font-size: 1.5rem;
//   font-weight: 300;
//   text-transform: uppercase;
// }

// .event-summary__day {
//   display: block;
//   font-size: 2.02rem;
//   font-weight: 700;
// }

// .page-links {
//   position: relative;
//   z-index: 1;
//   background-color: #FAF0CA;
//   margin: 0 0 40px 0;
// }

// @media (min-width: 767px) {

//   .page-links {
//     margin: 0 0 40px 20px;
//     width: 300px;
//     float: right;
//   }
// }

// .page-links__title {
//   margin: 0;
//   font-weight: normal;
//   text-align: center;
//   padding: 20px 0;
//   background-color: #0D3B66;
//   color: #FFF;
// }

// .page-links__title a {
//   color: #FFF;
//   text-decoration: none;
//   background-color: #0D3B66;
// }

// .page-links li {
//   border-top: 1px solid rgb(244, 223, 138);
// }

// .page-links li:first-child {
//   border-top: none;
// }

// .page-links__active,
//   .page-links .current_page_item {
//   text-align: center;
//   background-color: rgb(244, 231, 180);
//   color: #0D3B66;
//   font-weight: bold;
// }

// .page-links li a {
//   display: block;
//   text-align: center;
//   padding: 17px 10px;
//   text-decoration: none;
//   color: #0D3B66;
//   transition: all .3s;
// }

// .page-links li a:hover {
//   color: rgb(13, 51, 87);
//   background-color: rgb(238, 225, 170);
// }

// .acf-map {
// width: 100%;
// height: 400px;
// border: #ccc solid 1px;
// margin: 20px 0;
// }

// /* fixes potential theme css conflict */

// .acf-map img {
//  max-width: inherit !important;
// }

// .link-list li {
//   padding: 1rem 0;
//   font-size: 1.5rem;
//   border-bottom: 1px dotted #DEDEDE;
// }

// .search-overlay .link-list li {
//   font-size: 1.3rem;
// }

// .link-list li:last-child {
//   border-bottom: none;
// }

// .link-list a {
//   color: #F95738;
// }

// .metabox {
//   background-color: #FAF0CA;
//   border-radius: 3px;
//   padding: 10px 15px;
//   display: inline-block;
//   margin-bottom: 30px;
//   box-shadow: 2px 2px 1px rgba(0, 0, 0, .07);

// }

// .metabox--position-up {
//   position: absolute;
//   top: 0;
//   -webkit-transform: translateY(-50%);
//           transform: translateY(-50%);
// }

// .metabox--with-home-link {
//   padding: 0;
// }

// .metabox__main {
//   padding: 10px 15px 10px 11px;
// }

// .metabox p {
//   margin: 0;
//   font-size: .9rem;
//   color: rgb(168, 146, 56);
// }

// .metabox a {
//   color: rgb(168, 146, 56);
//   text-decoration: none;
//   font-weight: bold;
// }

// .metabox a:hover {
//   text-decoration: underline;
// }

// .metabox .metabox__blog-home-link {
//   background-color: #0D3B66;
//   color: #FFF;
//   display: inline-block;
//   padding: 10px 15px;
//   border-radius: 3px 0 0 3px;
//   font-weight: normal;
// }

// .metabox .metabox__blog-home-link:hover {
//   text-decoration: none;
//   background-color: rgb(11, 47, 81);
// }

// .post-item {
//   border-bottom: 1px dotted #DEDEDE;
//   padding-bottom: 1.7rem;
//   margin-bottom: 1.7rem;
// }

// .post-item:last-of-type {
//   border-bottom: none;
//   margin-bottom: 0;
// }