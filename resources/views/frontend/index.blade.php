<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head itemscope="" itemtype="http://schema.org/WebSite">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>IT CAREER INSTITUTE &#8211; IT CAREER COMPUTER TRAINING INSTITUTE</title>
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='http://www.google.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="IT CAREER INSTITUTE &raquo; Feed"
		href="feed/index.html" />
	<link rel="stylesheet" href="index.css">



	<script>
		function loadScript(url, callback) {
			var script = document.createElement("script");
			script.src = url;
			script.defer = true;
			script.type = "text/javascript";
			script.onload = callback;
			document.getElementsByTagName("head")[0].appendChild(script);
		}

		function loadEmojis() {
			var emojiSettings = {
				baseUrl: "https://s.w.org/images/core/emoji/14.0.0/72x72/",
				ext: ".png",
				svgUrl: "https://s.w.org/images/core/emoji/14.0.0/svg/",
				svgExt: ".svg",
				source: {
					concatemoji: "https://itcareerinstitute.org/wp-includes/js/wp-emoji-release.min.js?ver=6.2.2"
				}
			};

			function supportsEmoji(e) {
				var canvas = document.createElement("canvas");
				var context = canvas.getContext && canvas.getContext("2d");
				if (!context || !context.fillText) return false;
				var original = context.fillText;
				context.clearRect(0, 0, canvas.width, canvas.height);
				context.fillText(e, 0, 0);
				var dataURL = canvas.toDataURL();
				context.clearRect(0, 0, canvas.width, canvas.height);
				context.fillText("t", 0, 0);
				return dataURL === canvas.toDataURL();
			}

			var supportsEverything = true;
			var supportsEverythingExceptFlag = true;

			["flag", "emoji"].forEach(function (item) {
				emojiSettings.supports[item] = supportsEmoji("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f");
				supportsEverything = supportsEverything && emojiSettings.supports[item];
				if (item !== "flag") {
					supportsEverythingExceptFlag = supportsEverythingExceptFlag && emojiSettings.supports[item];
				}
			});

			emojiSettings.supports.everything = supportsEverything;
			emojiSettings.supports.everythingExceptFlag = supportsEverythingExceptFlag && !emojiSettings.supports.flag;

			loadScript(emojiSettings.source.concatemoji, function () {
				if (emojiSettings.source.wpemoji && emojiSettings.source.twemoji) {
					loadScript(emojiSettings.source.twemoji);
					loadScript(emojiSettings.source.wpemoji);
				}
			});
		}

		document.addEventListener("DOMContentLoaded", loadEmojis);
		window.addEventListener("load", loadEmojis);

	</script>
	<style id="ct-main-styles-inline-css">
		[data-header*="type-1"] .site-header [data-row="bottom"] {
			--height: 80px;
			--background-image: none;
			--background-color: var(--paletteColor5);
			--borderTop: none;
			--borderBottom: none;
			--box-shadow: none;
		}

		[data-header*="type-1"] .site-header [data-row="bottom"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="bottom"] {
			--background-image: none;
			--background-color: var(--paletteColor5);
			--borderTop: none;
			--borderBottom: none;
			--box-shadow: 0px 10px 20px rgba(62, 60, 60, 0.2);
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="bottom"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] .site-header [data-id="button"] {
			--buttonMinWidth: 164px;
			--buttonInitialColor: #2e3192;
			--buttonHoverColor: #ed1c24;
			--headerButtonBorderColor: #2e3192;
			--headerButtonBorderHoverColor: #ed1c24;
			--buttonBorderRadius: 30px;
			--headerCtaPadding: 10px 25px;
		}

		[data-header*="type-1"] .site-header [data-id="button"] .cb__button {
			--buttonTextInitialColor: var(--paletteColor5);
			--buttonTextHoverColor: var(--paletteColor5);
		}

		[data-header*="type-1"] .site-header [data-id="button"] .cb__button-ghost {
			--buttonTextInitialColor: var(--paletteColor3);
			--buttonTextHoverColor: var(--paletteColor2);
		}

		[data-header*="type-1"] .site-header [data-id="logo"] .site-logo-container {
			--LogoMaxWidth: 54px;
		}

		[data-header*="type-1"] .site-header [data-id="logo"] .site-title {
			--fontWeight: 700;
			--textTransform: none;
			--textDecoration: none;
			--fontSize: 24px;
			--lineHeight: 1.5;
			--letterSpacing: 0em;
			--linkInitialColor: var(--paletteColor2);
			--linkHoverColor: #ed1c24;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-id="logo"] .site-title {
			--linkInitialColor: var(--paletteColor2);
			--linkHoverColor: #ed1c24;
		}

		[data-header*="type-1"] .site-header [data-id="logo"] {
			--margin: 0 !important;
		}

		[data-header*="type-1"] .site-header [data-id="menu"] {
			--menu-items-spacing: 25px;
			--menu-indicator-active-color: var(--paletteColor3);
			--activeIndicatorbackgroundColor: var(--paletteColor7);
			--margin: 0 25px !important;
		}

		[data-header*="type-1"] .site-header [data-id="menu"]>ul>li>a {
			--menu-item-height: 100%;
			--fontWeight: 500;
			--textTransform: normal;
			--fontSize: 18px;
			--lineHeight: 2.25;
			--linkInitialColor: #2e3192;
			--linkHoverColor: #ed1c24;
			--colorHoverType3: var(--paletteColor5);
		}

		[data-header*="type-1"] .site-header [data-id="menu"] .sub-menu {
			--dropdown-top-offset: 41px;
			--dropdown-width: 163px;
			--dropdown-items-spacing: 15px;
			--fontWeight: 400;
			--fontSize: 16px;
			--linkInitialColor: #000000;
			--linkHoverColor: #ed1c24;
			--dropdown-divider: 1px dashed var(--paletteColor6);
			--background-color: var(--paletteColor5);
			--background-hover-color: var(--paletteColor7);
			--box-shadow: 0px 10px 20px rgba(41, 51, 61, 0.1);
			--border-radius: 0px 0px 2px 2px;
		}

		[data-header*="type-1"] .site-header [data-row="middle"] {
			--height: 136px;
			--background-image: none;
			--background-color: var(--paletteColor5);
			--borderTop: none;
			--borderBottom: 1px solid rgba(44, 62, 80, 0.2);
			--box-shadow: none;
		}

		[data-header*="type-1"] .site-header [data-row="middle"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="middle"] {
			--background-image: none;
			--background-color: var(--paletteColor5);
			--borderTop: none;
			--borderBottom: none;
			--box-shadow: none;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="middle"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] [data-id="mobile-menu"] {
			--fontWeight: 400;
			--fontSize: 30px;
			--linkInitialColor: #2e3192;
			--linkHoverColor: #ed1c23;
			--mobile_menu_child_size: 14px;
			--padding: 5px 0;
		}

		[data-header*="type-1"] #offcanvas>section {
			--background-image: none;
			--background-color: var(--paletteColor5);
		}

		[data-header*="type-1"] #offcanvas {
			--background-image: none;
			--background-color: rgba(255, 255, 255, 0);
			--side-panel-width: 500px;
		}

		[data-header*="type-1"] [data-behaviour*="side"] {
			--box-shadow: 0px 0px 70px rgba(0, 0, 0, 0.35);
		}

		[data-header*="type-1"] #offcanvas .close-button {
			--closeButtonColor: var(--paletteColor3);
			--closeButtonHoverColor: var(--paletteColor2);
			--closeButtonBackground: none;
		}

		[data-header*="type-1"] .site-header [data-id="text"] {
			--maxWidth: 100%;
			--fontWeight: 600;
			--textDecoration: none;
			--fontSize: 18px;
			--lineHeight: 1.5;
			--color: #ffffff;
			--linkInitialColor: #2e3192;
			--linkHoverColor: #ed1c24;
		}

		[data-header*="type-1"] .site-header [data-row="top"] {
			--height: 300px;
			--background-position: 50% 0%;
			--background-size: contain;
			--background-attachment: scroll;
			--background-repeat: no-repeat;
			--background-image: url(wp-content/uploads/2023/05/2.png);
			--background-color: var(--paletteColor5);
			--borderTop: none;
			--borderBottom: none;
			--box-shadow: none;
		}

		[data-header*="type-1"] .site-header [data-row="top"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="top"] {
			--background-image: none;
			--background-color: #f9f9f9;
			--borderTop: none;
			--borderBottom: none;
			--box-shadow: none;
		}

		[data-header*="type-1"] .site-header [data-sticky*="yes"] [data-row="top"]>div {
			--borderTop: none;
			--borderBottom: none;
		}

		[data-header*="type-1"] [data-id="trigger"] {
			--linkInitialColor: #ed1c24;
			--linkHoverColor: #2e3192;
			--secondColor: var(--paletteColor6);
			--secondColorHover: var(--paletteColor6);
			--fontWeight: 400;
			--fontSize: 18px;
		}

		[data-header*="type-1"] [data-sticky*="yes"] [data-id="trigger"] {
			--linkInitialColor: #ed1c24;
			--linkHoverColor: #2e3192;
		}

		[data-header*="type-1"] {
			--headerStickyHeight: 80px;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"]>div {
			--container-spacing: 20px;
			--items-gap: 60px;
			--border-top: 1px solid rgba(255, 255, 255, 0.25);
			--grid-template-colummns: repeat(2, 1fr);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"] .widget-title {
			--textTransform: uppercase;
			--fontSize: 16px;
			--lineHeight: 1.75;
			--letterSpacing: 0.4px;
			--headingColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"] .widget>*:not(.widget-title) {
			--color: var(--paletteColor5);
			--headingColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"] .widget {
			--linkInitialColor: var(--paletteColor5);
			--linkHoverColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"] [data-divider="columns"] {
			--border: none;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"] {
			--border-top: none;
			--background-image: none;
			--background-color: #2e3192;
		}

		[data-footer*="type-1"] [data-id="copyright"] {
			--fontWeight: 400;
			--fontSize: 16px;
			--lineHeight: 1.875;
			--color: var(--paletteColor5);
			--linkInitialColor: var(--paletteColor5);
			--linkHoverColor: #00aeef;
		}

		[data-footer*="type-1"] [data-column="copyright"] {
			--horizontal-alignment: left;
			--vertical-alignment: flex-start;
		}

		[data-footer*="type-1"] [data-id="socials"].cb__footer-socials {
			--icon-size: 20px;
			--spacing: 30px;
			--margin: 20px 0 0 0 !important;
		}

		[data-footer*="type-1"] [data-id="socials"].cb__footer-socials [data-color="custom"] {
			--icon-color: var(--paletteColor5);
			--icon-hover-color: var(--paletteColor3);
			--background-color: var(--paletteColor7);
			--background-hover-color: var(--paletteColor6);
		}

		[data-footer*="type-1"] [data-id="socials"].cb__footer-socials .cb__label {
			--visibility: none;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"]>div {
			--container-spacing: 30px;
			--items-gap: 60px;
			--grid-template-colummns: repeat(3, 1fr);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] .widget-title {
			--textTransform: uppercase;
			--fontSize: 16px;
			--lineHeight: 1.75;
			--letterSpacing: 0.4px;
			--headingColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] .widget>*:not(.widget-title) {
			--color: var(--paletteColor5);
			--headingColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] .widget {
			--linkInitialColor: var(--paletteColor5);
			--linkHoverColor: var(--paletteColor5);
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] [data-divider="columns"] {
			--border: none;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] {
			--background-image: none;
			--background-color: #2a3589;
		}

		:root {
			--fontFamily: 'Montserrat', Sans-Serif;
			--fontWeight: 400;
			--fontSize: 18px;
			--lineHeight: 1.666666666666667;
			--letterSpacing: 0;
			--btnFontWeight: 400;
			--btnFontSize: 18px;
			--btnLineHeight: 1.2;
			--blogCategoryDividerInitialColorFirst: var(--paletteColor1);
			--blogCategoryDividerHoverColorFirst: var(--paletteColor3);
			--blogHeadingFontSize: 28px;
			--blogDividerMarginFirst: 0 0 20px 0;
			--formBorderInitialColor: #e0e5eb;
			--formBorderFocusColor: var(--paletteColor1);
			--formBorderSize: 1px;
			--radioCheckboxInitialColor: #d5d8de;
			--radioCheckboxAccentColor: var(--paletteColor1);
			--primaryColor: var(--paletteColor1);
			--baseColor: var(--paletteColor7);
			--genheadingColor: var(--paletteColor2);
			--genLinkColor: #2e3192;
			--genLinkHoverColor: #ed1c24;
			--textSelectionColor: var(--paletteColor5);
			--textSelectionHoverColor: #2e3192;
			--genborderColor: var(--paletteColor6);
			--btnTextColor: var(--paletteColor5);
			--btnTextHoverColor: #ed1c24;
			--btnBgColor: #ed1c24;
			--btnBgHoverColor: var(--paletteColor5);
			--btnBorderColor: #ed1c24;
			--btnBorderHoverColor: #ed1c24;
			--paletteColor1: #516066;
			--paletteColor2: #171d1f;
			--paletteColor3: #ff6b42;
			--paletteColor4: #0d6c7f;
			--paletteColor5: #ffffff;
			--paletteColor6: #d7dfe0;
			--paletteColor7: #f5f9fa;
			--paletteColor8: #478f9e;
			--color: var(--paletteColor2);
			--linkInitialColor: var(--paletteColor1);
			--linkHoverColor: var(--paletteColor2);
			--selectionTextColor: var(--paletteColor5);
			--selectionBackgroundColor: var(--paletteColor1);
			--border-color: rgba(224, 229, 235, 0.9);
			--headingColor: var(--paletteColor4);
			--contentSpacing: 1.5em;
			--bottonRoundness: 30px;
			--buttonPadding: 14px 29px;
			--buttonMinHeight: 45px;
			--buttonBorderRadius: 3px;
			--buttonTextInitialColor: var(--paletteColor5);
			--buttonTextHoverColor: var(--paletteColor5);
			--buttonInitialColor: var(--paletteColor3);
			--buttonHoverColor: var(--paletteColor2);
			--container-max-width: 1290px;
			--content-vertical-spacing: 60px;
			--narrow-container-max-width: 750px;
			--wide-offset: 130px;
			--sidebarWidth: 27%;
			--sidebarWidthNoUnit: 27;
			--sidebarGap: 4%;
			--sidebarOffset: 50px;
			--contentSidebarWidth: 28%;
			--sidebarWidgetSpacing: 64px;
			--widgetsContentAreaSpacing: 0 0 20px 20px;
			--breadcrumbsColor: rgba(41, 41, 41, 0.30);
			--breadcrumbsCurrentColor: var(--paletteColor1);
			--breadcrumbsSeparatorColor: rgba(41, 41, 41, 0.30);
			--linkHighlightColor: var(--paletteColor3);
			--linkHighlightHoverColor: var(--paletteColor1);
			--linkHighlightBackgroundColor: var(--paletteColor6);
			--linkHighlightBackgroundHoverColor: var(--paletteColor3);
			--authorFontColor: var(--paletteColor2);
			--searchFontColor: var(--paletteColor2);
			--archiveFontColor: var(--paletteColor2);
			--blogFontColor: var(--paletteColor2);
			--titleColor: var(--paletteColor1);
			--relatedPostCategoryDividerInitialColor: var(--paletteColor1);
			--relatedPostCategoryDividerHoverColor: var(--paletteColor3);
			--captionOverlayColor: var(--paletteColor1);
			--captionColor: var(--paletteColor8);
			--containerWidth: 1200px;
			--containerContentMaxWidth: 728px;
			--containerVerticalMargin: 80px;
		}

		h1,
		.block-editor-page .editor-styles-wrapper h1,
		.block-editor-page .editor-post-title__block .editor-post-title__input {
			--fontWeight: 700;
			--fontSize: 48px;
			--lineHeight: 1.3;
			--letterSpacing: -0.02em;
		}

		h2 {
			--fontWeight: 700;
			--fontSize: 48px;
			--lineHeight: 1.333333333333333;
			--letterSpacing: -0.02em;
		}

		h3 {
			--fontWeight: 700;
			--fontSize: 40px;
			--lineHeight: 1.4;
			--letterSpacing: -0.02em;
		}

		h4 {
			--fontWeight: 700;
			--fontSize: 36px;
			--lineHeight: 1.33333333333;
			--letterSpacing: -0.02em;
		}

		h5 {
			--fontWeight: 700;
			--fontSize: 24px;
			--lineHeight: 1.5;
			--letterSpacing: -0.02em;
		}

		h6 {
			--fontWeight: 700;
			--fontSize: 18px;
			--lineHeight: 1.5;
		}

		.wp-block-quote.is-style-large p,
		.wp-block-pullquote p,
		.rt-quote-widget blockquote {
			--fontFamily: 'Georgia', Sans-Serif;
			--fontWeight: 600;
			--fontSize: 25px;
		}

		code,
		kbd,
		samp,
		pre {
			--fontFamily: 'monospace', Sans-Serif;
			--fontWeight: 400;
			--fontSize: 16px;
		}

		.rt-sidebar .widget-title {
			--fontSize: 18px;
		}

		.entry-summary>.product_title {
			--fontSize: 30px;
		}

		.entry-summary .price {
			--fontWeight: 700;
			--fontSize: 20px;
		}

		.rishi-breadcrumb-main-wrap .rishi-breadcrumbs {
			--fontFamily: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
			--fontWeight: 500;
			--fontSize: 14px;
		}

		.woocommerce-store-notice.demo_store {
			--fontWeight: 400;
			--fontSize: 18px;
		}

		.woocommerce-page .archive-title-wrapper .tagged-in-wrapper h1 {
			--fontWeight: 700;
			--fontSize: 40px;
			--lineHeight: 1.75;
		}

		.cb__menu-trigger .cb__label {
			--fontWeight: 400;
			--fontSize: 18px;
		}

		.rt-featured-image .rt-caption-wrap {
			--fontWeight: 400;
			--fontSize: 14px;
			--lineHeight: 1.5;
			--captionPadding: 10px;
		}

		body {
			--background-image: none;
			--background-color: var(--paletteColor5);
		}

		.entry-header .page-title {
			--fontSize: 32px;
		}

		.entry-header .entry-meta {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
			--lineHeight: 1.5;
		}

		.entry-header .rt-breadcrumbs {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
		}

		.hero-section[data-type="type-1"] {
			--margin-bottom: 50px;
		}

		.page .main-content-wrapper .entry-header {
			--margin-bottom: 50px;
		}

		.cb__pagination {
			--spacing: 80px;
		}

		.cb__pagination[data-divider] {
			--border: none;
		}

		[data-pagination="simple"] {
			--colorActive: #ffffff;
		}

		[data-prefix="blog"] .entry-card .entry-title {
			--fontSize: 20px;
			--lineHeight: 1.3;
		}

		[data-prefix="blog"] .entry-excerpt {
			--fontSize: 16px;
		}

		[data-prefix="blog"] .entry-card .entry-meta {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
		}

		[data-prefix="blog"] [data-cards="boxed"] .entry-card {
			--cardBackground: #ffffff;
			--border: none;
			--cardSpacing: 35px;
			--box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
		}

		[data-prefix="blog"] .entry-card {
			--entry-divider: 1px solid rgba(224, 229, 235, 0.8);
		}

		[data-prefix="blog"] [data-cards="simple"] .entry-card {
			--border: 1px dashed rgba(224, 229, 235, 0.8);
		}

		[data-prefix="categories"] .entry-card .entry-title {
			--fontSize: 20px;
			--lineHeight: 1.3;
		}

		[data-prefix="categories"] .entry-excerpt {
			--fontSize: 16px;
		}

		[data-prefix="categories"] .entry-card .entry-meta {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
		}

		[data-prefix="categories"] [data-cards="boxed"] .entry-card {
			--cardBackground: #ffffff;
			--border: none;
			--cardSpacing: 35px;
			--box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
		}

		[data-prefix="categories"] .entry-card {
			--entry-divider: 1px solid rgba(224, 229, 235, 0.8);
		}

		[data-prefix="categories"] [data-cards="simple"] .entry-card {
			--border: 1px dashed rgba(224, 229, 235, 0.8);
		}

		[data-prefix="author"] .entry-card .entry-title {
			--fontSize: 20px;
			--lineHeight: 1.3;
		}

		[data-prefix="author"] .entry-excerpt {
			--fontSize: 16px;
		}

		[data-prefix="author"] .entry-card .entry-meta {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
		}

		[data-prefix="author"] [data-cards="boxed"] .entry-card {
			--cardBackground: #ffffff;
			--border: none;
			--cardSpacing: 35px;
			--box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
		}

		[data-prefix="author"] .entry-card {
			--entry-divider: 1px solid rgba(224, 229, 235, 0.8);
		}

		[data-prefix="author"] [data-cards="simple"] .entry-card {
			--border: 1px dashed rgba(224, 229, 235, 0.8);
		}

		[data-prefix="search"] .entry-card .entry-title {
			--fontSize: 20px;
			--lineHeight: 1.3;
		}

		[data-prefix="search"] .entry-excerpt {
			--fontSize: 16px;
		}

		[data-prefix="search"] .entry-card .entry-meta {
			--fontWeight: 600;
			--textTransform: uppercase;
			--fontSize: 12px;
		}

		[data-prefix="search"] [data-cards="boxed"] .entry-card {
			--cardBackground: #ffffff;
			--border: none;
			--cardSpacing: 35px;
			--box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
		}

		[data-prefix="search"] .entry-card {
			--entry-divider: 1px solid rgba(224, 229, 235, 0.8);
		}

		[data-prefix="search"] [data-cards="simple"] .entry-card {
			--border: 1px dashed rgba(224, 229, 235, 0.8);
		}

		form textarea {
			--formInputHeight: 170px;
		}

		#secondary {
			--widgetsHeadingColor: var(--sidebarWidgetsTitleColor);
			--widgetsFontSize: 18px;
		}

		.widget-area>* {
			--widgetsLinkColor: var(--paletteColor1);
		}

		.widget-area {
			--widgetsLinkHoverColor: #ed1c24;
			--sidebarBackgroundColor: var(--paletteColor5);
			--border: none;
			--border: 1px solid var(--paletteColor6);
			--sidebar-widgets-spacing: 60px;
			--sidebarInnerSpacing: 35px;
			--box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
		}

		.widget>*:not(.widget-title) {
			--headingColor: var(--paletteColor2);
		}

		.rishi-breadcrumb-main-wrap {
			--alignment: left;
			--padding: 0px 0px 10px 0px;
		}

		.page .entry-header {
			--alignment: left;
			--margin-bottom: 50px;
		}

		.box-layout.page .main-content-wrapper,
		.content-box-layout.page .main-content-wrapper {
			--background-image: none;
			--background-color: var(--paletteColor5);
			--padding: 40px;
			--box-radius: 3px;
		}

		.box-layout.single .main-content-wrapper,
		.content-box-layout.single .main-content-wrapper {
			--background-image: none;
			--background-color: #ffffff;
			--padding: 40px;
			--box-radius: 3px;
		}

		.archive.author .site-content .archive-title-wrapper {
			--width: 142px;
			--margin: 78px;
			--alignment: left;
			--authorMargin: 30px;
			--background-image: none;
			--background-color: var(--paletteColor7);
		}

		.search .site-content .archive-title-wrapper {
			--alignment: left;
			--margin: 78px;
			--searchMargin: 30px;
			--background-image: none;
			--background-color: var(--paletteColor7);
		}

		.archive .site-content .archive-title-wrapper {
			--margin: 60px;
			--alignment: left;
			--archiveMargin: 30px;
			--background-image: none;
			--background-color: var(--paletteColor7);
		}

		.blog .site-content .archive-title-wrapper {
			--background-image: none;
			--background-color: var(--paletteColor7);
			--alignment: left;
			--margin: 20px;
		}

		.cb__share-box {
			--icon-size: 15px;
			--iconSpacing: 0px 10px 10px 0px;
			--alignment: left;
			--fontWeight: 500;
			--fontSize: 14px;
			--lineHeight: 1.2;
		}

		.cb__share-box[data-location="top"] {
			--margin: 10px;
		}

		.cb__share-box[data-location="bottom"] {
			--margin: 10px;
		}

		.cb__share-box[data-sticky="yes"] {
			--topOffset: 150px;
			--sideOffset: 15px;
		}

		[data-prefix="single_blog_post"] .post-navigation {
			--margin: 80px;
			--linkInitialColor: var(--color);
		}

		[data-prefix="single_blog_post"] .rt-related-posts-container {
			--padding: 70px;
			--background-image: none;
			--background-color: #eff1f5;
			--visibility: block;
		}

		[data-prefix="single_blog_post"] .rt-related-posts {
			--visibility: grid;
		}

		[data-prefix="single_blog_post"] .related-entry-title {
			--linkInitialColor: var(--color);
		}

		.to_top {
			--topButtonIconColorDefault: var(--paletteColor3);
			--topButtonIconColorHover: var(--paletteColor5);
			--topButtonShapeBackgroundDefault: rgba(41, 41, 41, 0);
			--topButtonShapeBackgroundHover: var(--paletteColor3);
			--topButtonBorderDefaultColor: var(--paletteColor3);
			--topButtonBorderHoverColor: var(--paletteColor3);
			--topButtonSize: 12px;
			--topButtonOffset: 25px;
			--sideButtonOffset: 25px;
			--top-button-border: 1px;
			--top-button-border-radius: 50px;
			--top_button_padding: 10px;
		}

		.rishi-container[data-strech="full"] {
			--streched-padding: 40px;
		}
	</style>
	<style id="ct-main-styles-tablet-inline-css" media="(max-width: 999.98px)">
		[data-header*="type-1"] .site-header [data-row="middle"] {
			--height: 70px;
		}

		[data-header*="type-1"] [data-id="mobile-menu"] {
			--fontSize: 16px;
		}

		[data-header*="type-1"] #offcanvas {
			--side-panel-width: 65vw;
		}

		[data-header*="type-1"] .site-header [data-row="top"] {
			--height: 180px;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"]>div {
			--container-spacing: 25px;
			--items-gap: 40px;
			--grid-template-colummns: initial;
		}

		[data-footer*="type-1"] [data-column="copyright"] {
			--horizontal-alignment: center;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"]>div {
			--items-gap: 40px;
			--grid-template-colummns: initial;
		}

		h1,
		.block-editor-page .editor-styles-wrapper h1,
		.block-editor-page .editor-post-title__block .editor-post-title__input {
			--lineHeight: 1.33333;
		}

		h2 {
			--fontSize: 40px;
		}

		h3 {
			--fontSize: 33px;
		}

		h4 {
			--fontSize: 30px;
		}

		.entry-header .page-title {
			--fontSize: 30px;
		}

		.hero-section[data-type="type-1"] {
			--margin-bottom: 30px;
		}

		.page .main-content-wrapper .entry-header {
			--margin-bottom: 30px;
		}

		.cb__pagination {
			--spacing: 60px;
		}

		:root {
			--sidebarWidgetSpacing: 50px;
			--containerWidth: 992px;
			--containerContentMaxWidth: 500px;
			--containerVerticalMargin: 40px;
		}

		#secondary {
			--widgetsFontSize: 16px;
		}

		.widget-area {
			--sidebar-widgets-spacing: 40px;
		}

		.page .entry-header {
			--margin-bottom: 30px;
		}

		.box-layout.page .main-content-wrapper,
		.content-box-layout.page .main-content-wrapper {
			--padding: 15px;
		}

		.box-layout.single .main-content-wrapper,
		.content-box-layout.single .main-content-wrapper {
			--padding: 15px;
		}

		.archive.author .site-content .archive-title-wrapper {
			--width: 100px;
			--margin: 30px;
		}

		.search .site-content .archive-title-wrapper {
			--margin: 30px;
		}

		.archive .site-content .archive-title-wrapper {
			--margin: 30px;
		}

		[data-prefix="single_blog_post"] .post-navigation {
			--margin: 60px;
		}

		[data-prefix="single_blog_post"] .rt-related-posts-container {
			--padding: 50px;
			--visibility: none;
		}

		[data-prefix="single_blog_post"] .rt-related-posts {
			--visibility: none;
		}

		.rishi-container[data-strech="full"] {
			--streched-padding: 30px;
		}
	</style>
	<style id="ct-main-styles-mobile-inline-css" media="(max-width: 689.98px)">
		[data-header*="type-1"] .site-header [data-row="bottom"] {
			--height: 20px;
		}

		[data-header*="type-1"] #offcanvas {
			--side-panel-width: 90vw;
		}

		[data-header*="type-1"] .site-header [data-row="top"] {
			--height: 80px;
		}

		[data-header*="type-1"] {
			--headerStickyHeight: 20px;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="bottom"]>div {
			--container-spacing: 15px;
			--items-gap: 8px;
			--grid-template-colummns: initial;
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"]>div {
			--grid-template-colummns: initial;
		}

		h2 {
			--fontSize: 35px;
		}

		h3 {
			--fontSize: 30px;
		}

		h4 {
			--fontSize: 36px;
		}

		.entry-header .page-title {
			--fontSize: 25px;
		}

		.cb__pagination {
			--spacing: 50px;
		}

		[data-prefix="blog"] .entry-card .entry-title {
			--fontSize: 18px;
		}

		[data-prefix="blog"] [data-cards="boxed"] .entry-card {
			--cardSpacing: 25px;
		}

		[data-prefix="categories"] .entry-card .entry-title {
			--fontSize: 18px;
		}

		[data-prefix="categories"] [data-cards="boxed"] .entry-card {
			--cardSpacing: 25px;
		}

		[data-prefix="author"] .entry-card .entry-title {
			--fontSize: 18px;
		}

		[data-prefix="author"] [data-cards="boxed"] .entry-card {
			--cardSpacing: 25px;
		}

		[data-prefix="search"] .entry-card .entry-title {
			--fontSize: 18px;
		}

		[data-prefix="search"] [data-cards="boxed"] .entry-card {
			--cardSpacing: 25px;
		}

		:root {
			--content-vertical-spacing: 50px;
			--sidebarWidgetSpacing: 30px;
			--containerWidth: 420px;
			--containerContentMaxWidth: 400px;
		}

		#secondary {
			--widgetsFontSize: 14px;
		}

		.archive.author .site-content .archive-title-wrapper {
			--width: 80px;
		}

		[data-prefix="single_blog_post"] .post-navigation {
			--margin: 40px;
		}

		[data-prefix="single_blog_post"] .rt-related-posts-container {
			--padding: 30px;
		}

		.rishi-container[data-strech="full"] {
			--streched-padding: 15px;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='wp-includes/css/dist/block-library/style.min3781.css?ver=6.2.2' media='all' />
	<link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.min3781.css?ver=6.2.2'
		media='all' />
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--palette-color-1: var(--paletteColor1, #516066);
			--wp--preset--color--palette-color-2: var(--paletteColor2, #171d1f);
			--wp--preset--color--palette-color-3: var(--paletteColor3, #ff6b42);
			--wp--preset--color--palette-color-4: var(--paletteColor4, #0d6c7f);
			--wp--preset--color--palette-color-5: var(--paletteColor5, #ffffff);
			--wp--preset--color--palette-color-6: var(--paletteColor6, #d7dfe0);
			--wp--preset--color--palette-color-7: var(--paletteColor7, #f5f9fa);
			--wp--preset--color--palette-color-8: var(--paletteColor8, #478f9e);
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--gradient--juicy-peach: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
			--wp--preset--gradient--young-passion: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
			--wp--preset--gradient--true-sunset: linear-gradient(to right, #fa709a 0%, #fee140 100%);
			--wp--preset--gradient--morpheus-den: linear-gradient(to top, #30cfd0 0%, #330867 100%);
			--wp--preset--gradient--plum-plate: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			--wp--preset--gradient--aqua-splash: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
			--wp--preset--gradient--love-kiss: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
			--wp--preset--gradient--new-retrowave: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
			--wp--preset--gradient--plum-bath: linear-gradient(to top, #cc208e 0%, #6713d2 100%);
			--wp--preset--gradient--high-flight: linear-gradient(to right, #0acffe 0%, #495aff 100%);
			--wp--preset--gradient--teen-party: linear-gradient(-225deg, #FF057C 0%, #8D0B93 50%, #321575 100%);
			--wp--preset--gradient--fabled-sunset: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);
			--wp--preset--gradient--arielle-smile: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%);
			--wp--preset--gradient--itmeo-branding: linear-gradient(180deg, #2af598 0%, #009efd 100%);
			--wp--preset--gradient--deep-blue: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
			--wp--preset--gradient--strong-bliss: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
			--wp--preset--gradient--sweet-period: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
			--wp--preset--gradient--purple-division: linear-gradient(to top, #7028e4 0%, #e5b2ca 100%);
			--wp--preset--gradient--cold-evening: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
			--wp--preset--gradient--mountain-rock: linear-gradient(to right, #868f96 0%, #596164 100%);
			--wp--preset--gradient--desert-hump: linear-gradient(to top, #c79081 0%, #dfa579 100%);
			--wp--preset--gradient--ethernal-constance: linear-gradient(to top, #09203f 0%, #537895 100%);
			--wp--preset--gradient--happy-memories: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
			--wp--preset--gradient--grown-early: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
			--wp--preset--gradient--morning-salad: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);
			--wp--preset--gradient--night-call: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);
			--wp--preset--gradient--mind-crawl: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);
			--wp--preset--gradient--angel-care: linear-gradient(-225deg, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
			--wp--preset--gradient--juicy-cake: linear-gradient(to top, #e14fad 0%, #f9d423 100%);
			--wp--preset--gradient--rich-metal: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
			--wp--preset--gradient--mole-hall: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);
			--wp--preset--gradient--cloudy-knoxville: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
			--wp--preset--gradient--soft-grass: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
			--wp--preset--gradient--saint-petersburg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
			--wp--preset--gradient--everlasting-sky: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
			--wp--preset--gradient--kind-steel: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
			--wp--preset--gradient--over-sun: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
			--wp--preset--gradient--premium-white: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
			--wp--preset--gradient--clean-mirror: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
			--wp--preset--gradient--wild-apple: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
			--wp--preset--gradient--snow-again: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
			--wp--preset--gradient--confident-cloud: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
			--wp--preset--gradient--glass-water: linear-gradient(to top, #dfe9f3 0%, white 100%);
			--wp--preset--gradient--perfect-white: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='dnd-upload-cf7-css'
		href='wp-content/plugins/drag-and-drop-multiple-file-upload-contact-form-7/assets/css/dnd-upload-cf7b3c5.css?ver=1.3.6.9'
		media='all' />
	<link rel='stylesheet' id='contact-form-7-css'
		href='wp-content/plugins/contact-form-7/includes/css/styles3960.css?ver=5.7.5.1' media='all' />
	<link rel='stylesheet' id='educare_results-css' href='wp-content/plugins/educare/assets/css/results5152.css?ver=1.0'
		media='all' />
	<link rel='stylesheet' id='evcf7-front-style-css'
		href='wp-content/plugins/email-verification-for-contact-form-7/assets/css/front-styled5f7.css?ver=2.0'
		media='all' />
	<link rel='stylesheet' id='rishi-companion-frontend-css'
		href='wp-content/plugins/rishi-companion/assets/build/public3781.css?ver=6.2.2' media='all' />
	<link rel='stylesheet' id='rishi-companion-blocks-public-css'
		href='wp-content/plugins/rishi-companion/assets/build/blocks3781.css?ver=6.2.2' media='all' />
	<link rel='stylesheet' id='elementor-icons-css'
		href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min3b94.css?ver=5.18.0' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='wp-content/plugins/elementor/assets/css/frontend-lite.minfb6f.css?ver=3.12.1' media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='elementor-post-2430-css'
		href='wp-content/uploads/elementor/css/post-2430728a.css?ver=1685385429' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='wp-content/plugins/pro-elements/assets/css/frontend-lite.mine56c.css?ver=3.12.2' media='all' />
	<link rel='stylesheet' id='elementor-post-6-css'
		href='wp-content/uploads/elementor/css/post-6046b.css?ver=1686118971' media='all' />
	<link rel='stylesheet' id='um_fonticons_ii-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-fonticons-iid315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_fonticons_fa-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-fonticons-fad315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='select2-css'
		href='wp-content/plugins/ultimate-member/assets/css/select2/select2.min4819.css?ver=4.0.13' media='all' />
	<link rel='stylesheet' id='um_crop-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-cropd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_modal-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-modald315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_styles-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-stylesd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_profile-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-profiled315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_account-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-accountd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_misc-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-miscd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_fileupload-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-fileuploadd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_datetime-css'
		href='wp-content/plugins/ultimate-member/assets/css/pickadate/defaultd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_datetime_date-css'
		href='wp-content/plugins/ultimate-member/assets/css/pickadate/default.dated315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_datetime_time-css'
		href='wp-content/plugins/ultimate-member/assets/css/pickadate/default.timed315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_raty-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-ratyd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_scrollbar-css'
		href='wp-content/plugins/ultimate-member/assets/css/simplebard315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_tipsy-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-tipsyd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_responsive-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-responsived315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='um_default_css-css'
		href='wp-content/plugins/ultimate-member/assets/css/um-old-defaultd315.css?ver=2.6.0' media='all' />
	<link rel='stylesheet' id='rishi-fonts-font-source-google-css'
		href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap' media='all' />
	<link rel='stylesheet' id='rishi-style-css' href='wp-content/themes/rishi/style.min1576.css?ver=1.2.1'
		media='all' />
	<style id='rishi-style-inline-css'>
		:root {
			--e-global-color-rishi1: #516066;
			--e-global-color-rishi2: #171d1f;
			--e-global-color-rishi3: #ff6b42;
			--e-global-color-rishi4: #0d6c7f;
			--e-global-color-rishi5: #ffffff;
			--e-global-color-rishi6: #d7dfe0;
			--e-global-color-rishi7: #f5f9fa;
			--e-global-color-rishi8: #478f9e;
		}
	</style>
	<link rel="stylesheet" type="text/css"
		href="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Application/Frontend/Assets/dist/smartslider.min50f6.css?ver=e5da025b"
		media="all">
	<style data-related="n2-ss-2">
		div#n2-ss-2 .n2-ss-slider-1 {
			display: grid;
			position: relative;
		}

		div#n2-ss-2 .n2-ss-slider-2 {
			display: grid;
			position: relative;
			overflow: hidden;
			padding: 0px 0px 0px 0px;
			border: 0px solid RGBA(62, 62, 62, 1);
			border-radius: 0px;
			background-clip: padding-box;
			background-repeat: repeat;
			background-position: 50% 50%;
			background-size: cover;
			background-attachment: scroll;
			z-index: 1;
		}

		div#n2-ss-2:not(.n2-ss-loaded) .n2-ss-slider-2 {
			background-image: none !important;
		}

		div#n2-ss-2 .n2-ss-slider-3 {
			display: grid;
			grid-template-areas: 'cover';
			position: relative;
			overflow: hidden;
			z-index: 10;
		}

		div#n2-ss-2 .n2-ss-slider-3>* {
			grid-area: cover;
		}

		div#n2-ss-2 .n2-ss-slide-backgrounds,
		div#n2-ss-2 .n2-ss-slider-3>.n2-ss-divider {
			position: relative;
		}

		div#n2-ss-2 .n2-ss-slide-backgrounds {
			z-index: 10;
		}

		div#n2-ss-2 .n2-ss-slide-backgrounds>* {
			overflow: hidden;
		}

		div#n2-ss-2 .n2-ss-slide-background {
			transform: translateX(-100000px);
		}

		div#n2-ss-2 .n2-ss-slider-4 {
			place-self: center;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 20;
			display: grid;
			grid-template-areas: 'slide';
		}

		div#n2-ss-2 .n2-ss-slider-4>* {
			grid-area: slide;
		}

		div#n2-ss-2.n2-ss-full-page--constrain-ratio .n2-ss-slider-4 {
			height: auto;
		}

		div#n2-ss-2 .n2-ss-slide {
			display: grid;
			place-items: center;
			grid-auto-columns: 100%;
			position: relative;
			z-index: 20;
			transform: translateX(-100000px);
		}

		div#n2-ss-2 .n2-ss-slide {
			perspective: 1500px;
		}

		div#n2-ss-2 .n2-ss-slide-active {
			z-index: 21;
		}

		.n2-ss-background-animation {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 3;
		}

		div#n2-ss-2 .nextend-arrow {
			cursor: pointer;
			overflow: hidden;
			line-height: 0 !important;
			z-index: 18;
		}

		div#n2-ss-2 .nextend-arrow img {
			position: relative;
			display: block;
		}

		div#n2-ss-2 .nextend-arrow img.n2-arrow-hover-img {
			display: none;
		}

		div#n2-ss-2 .nextend-arrow:FOCUS img.n2-arrow-hover-img,
		div#n2-ss-2 .nextend-arrow:HOVER img.n2-arrow-hover-img {
			display: inline;
		}

		div#n2-ss-2 .nextend-arrow:FOCUS img.n2-arrow-normal-img,
		div#n2-ss-2 .nextend-arrow:HOVER img.n2-arrow-normal-img {
			display: none;
		}

		div#n2-ss-2 .nextend-arrow-animated {
			overflow: hidden;
		}

		div#n2-ss-2 .nextend-arrow-animated>div {
			position: relative;
		}

		div#n2-ss-2 .nextend-arrow-animated .n2-active {
			position: absolute;
		}

		div#n2-ss-2 .nextend-arrow-animated-fade {
			transition: background 0.3s, opacity 0.4s;
		}

		div#n2-ss-2 .nextend-arrow-animated-horizontal>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-2 .nextend-arrow-animated-horizontal .n2-active {
			top: 0;
		}

		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-horizontal .n2-active {
			left: 100%;
		}

		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-horizontal .n2-active {
			right: 100%;
		}

		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(-100%);
		}

		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(100%);
		}

		div#n2-ss-2 .nextend-arrow-animated-vertical>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-2 .nextend-arrow-animated-vertical .n2-active {
			left: 0;
		}

		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-vertical .n2-active {
			top: 100%;
		}

		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-vertical .n2-active {
			bottom: 100%;
		}

		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(-100%);
		}

		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(100%);
		}

		div#n2-ss-2 .n2-ss-control-bullet {
			visibility: hidden;
			text-align: center;
			justify-content: center;
			z-index: 14;
		}

		div#n2-ss-2 .n2-ss-control-bullet--calculate-size {
			left: 0 !important;
		}

		div#n2-ss-2 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize {
			width: 100%;
		}

		div#n2-ss-2 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize {
			height: 100%;
			flex-flow: column;
		}

		div#n2-ss-2 .nextend-bullet-bar {
			display: inline-flex;
			vertical-align: top;
			visibility: visible;
			align-items: center;
			flex-wrap: wrap;
		}

		div#n2-ss-2 .n2-bar-justify-content-left {
			justify-content: flex-start;
		}

		div#n2-ss-2 .n2-bar-justify-content-center {
			justify-content: center;
		}

		div#n2-ss-2 .n2-bar-justify-content-right {
			justify-content: flex-end;
		}

		div#n2-ss-2 .n2-ss-control-bullet-vertical>.nextend-bullet-bar {
			flex-flow: column;
		}

		div#n2-ss-2 .n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			display: flex;
		}

		div#n2-ss-2 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			flex: 1 1 auto;
		}

		div#n2-ss-2 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			height: 100%;
		}

		div#n2-ss-2 .nextend-bullet-bar .n2-bullet {
			cursor: pointer;
			transition: background-color 0.4s;
		}

		div#n2-ss-2 .nextend-bullet-bar .n2-bullet.n2-active {
			cursor: default;
		}

		div#n2-ss-2 div.n2-ss-bullet-thumbnail-container {
			position: absolute;
			z-index: 10000000;
		}

		div#n2-ss-2 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}

		div#n2-ss-2 .n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot {
			background: RGBA(255, 255, 255, 0.5);
			opacity: 1;
			padding: 5px 5px 5px 5px;
			box-shadow: none;
			border: 0px solid RGBA(0, 0, 0, 1);
			border-radius: 50px;
			margin: 4px;
		}

		div#n2-ss-2 .n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot.n2-active,
		div#n2-ss-2 .n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot:HOVER,
		div#n2-ss-2 .n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot:FOCUS {
			background: RGBA(255, 255, 255, 0.8);
		}

		div#n2-ss-2 .n-uc-U6kxYglL58hn {
			padding: 0px 0px 0px 0px
		}

		div#n2-ss-2 .n-uc-9Vh2JwArauo3 {
			padding: 0px 0px 0px 0px
		}

		div#n2-ss-2 .n-uc-TVglI5dFfG7s {
			padding: 0px 0px 0px 0px
		}

		div#n2-ss-2 .n-uc-zNNT5gHmAj8p {
			padding: 0px 0px 0px 0px
		}

		div#n2-ss-2-align {
			max-width: 1920px;
		}

		div#n2-ss-2 .nextend-arrow img {
			width: 32px
		}

		@media (min-width: 1200px) {
			div#n2-ss-2 [data-hide-desktopportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 1199px) and (min-width: 901px),
		(orientation: portrait) and (max-width: 1199px) and (min-width: 701px) {
			div#n2-ss-2 [data-hide-tabletportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 900px),
		(orientation: portrait) and (max-width: 700px) {
			div#n2-ss-2 [data-hide-mobileportrait="1"] {
				display: none !important;
			}

			div#n2-ss-2 .nextend-arrow img {
				width: 16px
			}
		}
	</style>
	<style data-related="n2-ss-3">
		div#n2-ss-3 .n2-ss-slider-1 {
			display: grid;
			position: relative;
		}

		div#n2-ss-3 .n2-ss-slider-2 {
			display: grid;
			position: relative;
			overflow: hidden;
			padding: 0px 0px 0px 0px;
			border: 0px solid RGBA(62, 62, 62, 1);
			border-radius: 0px;
			background-clip: padding-box;
			background-repeat: repeat;
			background-position: 50% 50%;
			background-size: cover;
			background-attachment: scroll;
			z-index: 1;
		}

		div#n2-ss-3:not(.n2-ss-loaded) .n2-ss-slider-2 {
			background-image: none !important;
		}

		div#n2-ss-3 .n2-ss-slider-3 {
			display: grid;
			grid-template-areas: 'cover';
			position: relative;
			overflow: hidden;
			z-index: 10;
		}

		div#n2-ss-3 .n2-ss-slider-3>* {
			grid-area: cover;
		}

		div#n2-ss-3 .n2-ss-slide-backgrounds,
		div#n2-ss-3 .n2-ss-slider-3>.n2-ss-divider {
			position: relative;
		}

		div#n2-ss-3 .n2-ss-slide-backgrounds {
			z-index: 10;
		}

		div#n2-ss-3 .n2-ss-slide-backgrounds>* {
			overflow: hidden;
		}

		div#n2-ss-3 .n2-ss-slide-background {
			transform: translateX(-100000px);
		}

		div#n2-ss-3 .n2-ss-slider-4 {
			place-self: center;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 20;
			display: grid;
			grid-template-areas: 'slide';
		}

		div#n2-ss-3 .n2-ss-slider-4>* {
			grid-area: slide;
		}

		div#n2-ss-3.n2-ss-full-page--constrain-ratio .n2-ss-slider-4 {
			height: auto;
		}

		div#n2-ss-3 .n2-ss-slide {
			display: grid;
			place-items: center;
			grid-auto-columns: 100%;
			position: relative;
			z-index: 20;
			transform: translateX(-100000px);
		}

		div#n2-ss-3 .n2-ss-slide {
			perspective: 1500px;
		}

		div#n2-ss-3 .n2-ss-slide-active {
			z-index: 21;
		}

		.n2-ss-background-animation {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 3;
		}

		div#n2-ss-3 .nextend-arrow {
			cursor: pointer;
			overflow: hidden;
			line-height: 0 !important;
			z-index: 18;
		}

		div#n2-ss-3 .nextend-arrow img {
			position: relative;
			display: block;
		}

		div#n2-ss-3 .nextend-arrow img.n2-arrow-hover-img {
			display: none;
		}

		div#n2-ss-3 .nextend-arrow:FOCUS img.n2-arrow-hover-img,
		div#n2-ss-3 .nextend-arrow:HOVER img.n2-arrow-hover-img {
			display: inline;
		}

		div#n2-ss-3 .nextend-arrow:FOCUS img.n2-arrow-normal-img,
		div#n2-ss-3 .nextend-arrow:HOVER img.n2-arrow-normal-img {
			display: none;
		}

		div#n2-ss-3 .nextend-arrow-animated {
			overflow: hidden;
		}

		div#n2-ss-3 .nextend-arrow-animated>div {
			position: relative;
		}

		div#n2-ss-3 .nextend-arrow-animated .n2-active {
			position: absolute;
		}

		div#n2-ss-3 .nextend-arrow-animated-fade {
			transition: background 0.3s, opacity 0.4s;
		}

		div#n2-ss-3 .nextend-arrow-animated-horizontal>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-3 .nextend-arrow-animated-horizontal .n2-active {
			top: 0;
		}

		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-horizontal .n2-active {
			left: 100%;
		}

		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-horizontal .n2-active {
			right: 100%;
		}

		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(-100%);
		}

		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(100%);
		}

		div#n2-ss-3 .nextend-arrow-animated-vertical>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-3 .nextend-arrow-animated-vertical .n2-active {
			left: 0;
		}

		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-vertical .n2-active {
			top: 100%;
		}

		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-vertical .n2-active {
			bottom: 100%;
		}

		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-3 .nextend-arrow-previous.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(-100%);
		}

		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-3 .nextend-arrow-next.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(100%);
		}

		div#n2-ss-3 .n2-ss-control-bullet {
			visibility: hidden;
			text-align: center;
			justify-content: center;
			z-index: 14;
		}

		div#n2-ss-3 .n2-ss-control-bullet--calculate-size {
			left: 0 !important;
		}

		div#n2-ss-3 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize {
			width: 100%;
		}

		div#n2-ss-3 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize {
			height: 100%;
			flex-flow: column;
		}

		div#n2-ss-3 .nextend-bullet-bar {
			display: inline-flex;
			vertical-align: top;
			visibility: visible;
			align-items: center;
			flex-wrap: wrap;
		}

		div#n2-ss-3 .n2-bar-justify-content-left {
			justify-content: flex-start;
		}

		div#n2-ss-3 .n2-bar-justify-content-center {
			justify-content: center;
		}

		div#n2-ss-3 .n2-bar-justify-content-right {
			justify-content: flex-end;
		}

		div#n2-ss-3 .n2-ss-control-bullet-vertical>.nextend-bullet-bar {
			flex-flow: column;
		}

		div#n2-ss-3 .n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			display: flex;
		}

		div#n2-ss-3 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			flex: 1 1 auto;
		}

		div#n2-ss-3 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			height: 100%;
		}

		div#n2-ss-3 .nextend-bullet-bar .n2-bullet {
			cursor: pointer;
			transition: background-color 0.4s;
		}

		div#n2-ss-3 .nextend-bullet-bar .n2-bullet.n2-active {
			cursor: default;
		}

		div#n2-ss-3 div.n2-ss-bullet-thumbnail-container {
			position: absolute;
			z-index: 10000000;
		}

		div#n2-ss-3 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}

		div#n2-ss-3 .n2-style-785355f374be86c332d4665aae819858-dot {
			background: RGBA(0, 0, 0, 0.67);
			opacity: 1;
			padding: 5px 5px 5px 5px;
			box-shadow: none;
			border: 0px solid RGBA(0, 0, 0, 1);
			border-radius: 50px;
			margin: 4px;
		}

		div#n2-ss-3 .n2-style-785355f374be86c332d4665aae819858-dot.n2-active,
		div#n2-ss-3 .n2-style-785355f374be86c332d4665aae819858-dot:HOVER,
		div#n2-ss-3 .n2-style-785355f374be86c332d4665aae819858-dot:FOCUS {
			background: RGBA(29, 129, 249, 1);
		}

		div#n2-ss-3 .n2-ss-slide-limiter {
			max-width: 1200px;
		}

		div#n2-ss-3 .n-uc-bLc2QbDKC7J3 {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-3 .n-uc-FF2H1oytBCIV {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-3 .n-uc-4Zm9GOLbGIry {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-3 .n-uc-MzPO6EebVGYW {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-3 .nextend-arrow img {
			width: 32px
		}

		@media (min-width: 1200px) {
			div#n2-ss-3 [data-hide-desktopportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 1199px) and (min-width: 901px),
		(orientation: portrait) and (max-width: 1199px) and (min-width: 701px) {
			div#n2-ss-3 [data-hide-tabletportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 900px),
		(orientation: portrait) and (max-width: 700px) {
			div#n2-ss-3 [data-hide-mobileportrait="1"] {
				display: none !important;
			}

			div#n2-ss-3 .nextend-arrow img {
				width: 16px
			}
		}
	</style>
	<style data-related="n2-ss-4">
		div#n2-ss-4 .n2-ss-slider-1 {
			display: grid;
			position: relative;
		}

		div#n2-ss-4 .n2-ss-slider-2 {
			display: grid;
			position: relative;
			overflow: hidden;
			padding: 0px 0px 0px 0px;
			border: 0px solid RGBA(62, 62, 62, 1);
			border-radius: 0px;
			background-clip: padding-box;
			background-repeat: repeat;
			background-position: 50% 50%;
			background-size: cover;
			background-attachment: scroll;
			z-index: 1;
		}

		div#n2-ss-4:not(.n2-ss-loaded) .n2-ss-slider-2 {
			background-image: none !important;
		}

		div#n2-ss-4 .n2-ss-slider-3 {
			display: grid;
			grid-template-areas: 'cover';
			position: relative;
			overflow: hidden;
			z-index: 10;
		}

		div#n2-ss-4 .n2-ss-slider-3>* {
			grid-area: cover;
		}

		div#n2-ss-4 .n2-ss-slide-backgrounds,
		div#n2-ss-4 .n2-ss-slider-3>.n2-ss-divider {
			position: relative;
		}

		div#n2-ss-4 .n2-ss-slide-backgrounds {
			z-index: 10;
		}

		div#n2-ss-4 .n2-ss-slide-backgrounds>* {
			overflow: hidden;
		}

		div#n2-ss-4 .n2-ss-slide-background {
			transform: translateX(-100000px);
		}

		div#n2-ss-4 .n2-ss-slider-4 {
			place-self: center;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 20;
			display: grid;
			grid-template-areas: 'slide';
		}

		div#n2-ss-4 .n2-ss-slider-4>* {
			grid-area: slide;
		}

		div#n2-ss-4.n2-ss-full-page--constrain-ratio .n2-ss-slider-4 {
			height: auto;
		}

		div#n2-ss-4 .n2-ss-slide {
			display: grid;
			place-items: center;
			grid-auto-columns: 100%;
			position: relative;
			z-index: 20;
			transform: translateX(-100000px);
		}

		div#n2-ss-4 .n2-ss-slide {
			perspective: 1500px;
		}

		div#n2-ss-4 .n2-ss-slide-active {
			z-index: 21;
		}

		.n2-ss-background-animation {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 3;
		}

		div#n2-ss-4 .nextend-arrow {
			cursor: pointer;
			overflow: hidden;
			line-height: 0 !important;
			z-index: 18;
		}

		div#n2-ss-4 .nextend-arrow img {
			position: relative;
			display: block;
		}

		div#n2-ss-4 .nextend-arrow img.n2-arrow-hover-img {
			display: none;
		}

		div#n2-ss-4 .nextend-arrow:FOCUS img.n2-arrow-hover-img,
		div#n2-ss-4 .nextend-arrow:HOVER img.n2-arrow-hover-img {
			display: inline;
		}

		div#n2-ss-4 .nextend-arrow:FOCUS img.n2-arrow-normal-img,
		div#n2-ss-4 .nextend-arrow:HOVER img.n2-arrow-normal-img {
			display: none;
		}

		div#n2-ss-4 .nextend-arrow-animated {
			overflow: hidden;
		}

		div#n2-ss-4 .nextend-arrow-animated>div {
			position: relative;
		}

		div#n2-ss-4 .nextend-arrow-animated .n2-active {
			position: absolute;
		}

		div#n2-ss-4 .nextend-arrow-animated-fade {
			transition: background 0.3s, opacity 0.4s;
		}

		div#n2-ss-4 .nextend-arrow-animated-horizontal>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-4 .nextend-arrow-animated-horizontal .n2-active {
			top: 0;
		}

		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-horizontal .n2-active {
			left: 100%;
		}

		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-horizontal .n2-active {
			right: 100%;
		}

		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(-100%);
		}

		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(100%);
		}

		div#n2-ss-4 .nextend-arrow-animated-vertical>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-4 .nextend-arrow-animated-vertical .n2-active {
			left: 0;
		}

		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-vertical .n2-active {
			top: 100%;
		}

		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-vertical .n2-active {
			bottom: 100%;
		}

		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-4 .nextend-arrow-previous.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(-100%);
		}

		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-4 .nextend-arrow-next.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(100%);
		}

		div#n2-ss-4 .n2-ss-control-bullet {
			visibility: hidden;
			text-align: center;
			justify-content: center;
			z-index: 14;
		}

		div#n2-ss-4 .n2-ss-control-bullet--calculate-size {
			left: 0 !important;
		}

		div#n2-ss-4 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize {
			width: 100%;
		}

		div#n2-ss-4 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize {
			height: 100%;
			flex-flow: column;
		}

		div#n2-ss-4 .nextend-bullet-bar {
			display: inline-flex;
			vertical-align: top;
			visibility: visible;
			align-items: center;
			flex-wrap: wrap;
		}

		div#n2-ss-4 .n2-bar-justify-content-left {
			justify-content: flex-start;
		}

		div#n2-ss-4 .n2-bar-justify-content-center {
			justify-content: center;
		}

		div#n2-ss-4 .n2-bar-justify-content-right {
			justify-content: flex-end;
		}

		div#n2-ss-4 .n2-ss-control-bullet-vertical>.nextend-bullet-bar {
			flex-flow: column;
		}

		div#n2-ss-4 .n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			display: flex;
		}

		div#n2-ss-4 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			flex: 1 1 auto;
		}

		div#n2-ss-4 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			height: 100%;
		}

		div#n2-ss-4 .nextend-bullet-bar .n2-bullet {
			cursor: pointer;
			transition: background-color 0.4s;
		}

		div#n2-ss-4 .nextend-bullet-bar .n2-bullet.n2-active {
			cursor: default;
		}

		div#n2-ss-4 div.n2-ss-bullet-thumbnail-container {
			position: absolute;
			z-index: 10000000;
		}

		div#n2-ss-4 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}

		div#n2-ss-4 .n2-style-785355f374be86c332d4665aae819858-dot {
			background: RGBA(0, 0, 0, 0.67);
			opacity: 1;
			padding: 5px 5px 5px 5px;
			box-shadow: none;
			border: 0px solid RGBA(0, 0, 0, 1);
			border-radius: 50px;
			margin: 4px;
		}

		div#n2-ss-4 .n2-style-785355f374be86c332d4665aae819858-dot.n2-active,
		div#n2-ss-4 .n2-style-785355f374be86c332d4665aae819858-dot:HOVER,
		div#n2-ss-4 .n2-style-785355f374be86c332d4665aae819858-dot:FOCUS {
			background: RGBA(29, 129, 249, 1);
		}

		div#n2-ss-4 .n2-ss-slide-limiter {
			max-width: 1200px;
		}

		div#n2-ss-4 .n-uc-s4UY5tQlWZpv {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-4 .n-uc-KERnrB5Ma5K2 {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-4 .n-uc-MrjyAseI9U3O {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-4 .n-uc-8zfg0kd3rrUe {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-4 .n-uc-ouqcX9XYdVrW {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-4 .nextend-arrow img {
			width: 32px
		}

		@media (min-width: 1200px) {
			div#n2-ss-4 [data-hide-desktopportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 1199px) and (min-width: 901px),
		(orientation: portrait) and (max-width: 1199px) and (min-width: 701px) {
			div#n2-ss-4 [data-hide-tabletportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 900px),
		(orientation: portrait) and (max-width: 700px) {
			div#n2-ss-4 [data-hide-mobileportrait="1"] {
				display: none !important;
			}

			div#n2-ss-4 .nextend-arrow img {
				width: 16px
			}
		}
	</style>
	<style data-related="n2-ss-5">
		div#n2-ss-5 .n2-ss-slider-1 {
			display: grid;
			position: relative;
		}

		div#n2-ss-5 .n2-ss-slider-2 {
			display: grid;
			position: relative;
			overflow: hidden;
			padding: 0px 0px 0px 0px;
			border: 0px solid RGBA(62, 62, 62, 1);
			border-radius: 0px;
			background-clip: padding-box;
			background-repeat: repeat;
			background-position: 50% 50%;
			background-size: cover;
			background-attachment: scroll;
			z-index: 1;
		}

		div#n2-ss-5:not(.n2-ss-loaded) .n2-ss-slider-2 {
			background-image: none !important;
		}

		div#n2-ss-5 .n2-ss-slider-3 {
			display: grid;
			grid-template-areas: 'cover';
			position: relative;
			overflow: hidden;
			z-index: 10;
		}

		div#n2-ss-5 .n2-ss-slider-3>* {
			grid-area: cover;
		}

		div#n2-ss-5 .n2-ss-slide-backgrounds,
		div#n2-ss-5 .n2-ss-slider-3>.n2-ss-divider {
			position: relative;
		}

		div#n2-ss-5 .n2-ss-slide-backgrounds {
			z-index: 10;
		}

		div#n2-ss-5 .n2-ss-slide-backgrounds>* {
			overflow: hidden;
		}

		div#n2-ss-5 .n2-ss-slide-background {
			transform: translateX(-100000px);
		}

		div#n2-ss-5 .n2-ss-slider-4 {
			place-self: center;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 20;
			display: grid;
			grid-template-areas: 'slide';
		}

		div#n2-ss-5 .n2-ss-slider-4>* {
			grid-area: slide;
		}

		div#n2-ss-5.n2-ss-full-page--constrain-ratio .n2-ss-slider-4 {
			height: auto;
		}

		div#n2-ss-5 .n2-ss-slide {
			display: grid;
			place-items: center;
			grid-auto-columns: 100%;
			position: relative;
			z-index: 20;
			transform: translateX(-100000px);
		}

		div#n2-ss-5 .n2-ss-slide {
			perspective: 1500px;
		}

		div#n2-ss-5 .n2-ss-slide-active {
			z-index: 21;
		}

		.n2-ss-background-animation {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 3;
		}

		div#n2-ss-5 .nextend-arrow {
			cursor: pointer;
			overflow: hidden;
			line-height: 0 !important;
			z-index: 18;
		}

		div#n2-ss-5 .nextend-arrow img {
			position: relative;
			display: block;
		}

		div#n2-ss-5 .nextend-arrow img.n2-arrow-hover-img {
			display: none;
		}

		div#n2-ss-5 .nextend-arrow:FOCUS img.n2-arrow-hover-img,
		div#n2-ss-5 .nextend-arrow:HOVER img.n2-arrow-hover-img {
			display: inline;
		}

		div#n2-ss-5 .nextend-arrow:FOCUS img.n2-arrow-normal-img,
		div#n2-ss-5 .nextend-arrow:HOVER img.n2-arrow-normal-img {
			display: none;
		}

		div#n2-ss-5 .nextend-arrow-animated {
			overflow: hidden;
		}

		div#n2-ss-5 .nextend-arrow-animated>div {
			position: relative;
		}

		div#n2-ss-5 .nextend-arrow-animated .n2-active {
			position: absolute;
		}

		div#n2-ss-5 .nextend-arrow-animated-fade {
			transition: background 0.3s, opacity 0.4s;

		}

		div#n2-ss-5 .nextend-arrow-animated-horizontal>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-5 .nextend-arrow-animated-horizontal .n2-active {
			top: 0;
		}

		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-horizontal .n2-active {
			left: 100%;
		}

		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-horizontal .n2-active {
			right: 100%;
		}

		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(-100%);
		}

		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-horizontal:HOVER>div,
		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-horizontal:FOCUS>div {
			transform: translateX(100%);
		}

		div#n2-ss-5 .nextend-arrow-animated-vertical>div {
			transition: all 0.4s;
			transform: none;
		}

		div#n2-ss-5 .nextend-arrow-animated-vertical .n2-active {
			left: 0;
		}

		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-vertical .n2-active {
			top: 100%;
		}

		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-vertical .n2-active {
			bottom: 100%;
		}

		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-5 .nextend-arrow-previous.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(-100%);
		}

		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-vertical:HOVER>div,
		div#n2-ss-5 .nextend-arrow-next.nextend-arrow-animated-vertical:FOCUS>div {
			transform: translateY(100%);
		}

		div#n2-ss-5 .n2-ss-control-bullet {
			visibility: hidden;
			text-align: center;
			justify-content: center;
			z-index: 14;
		}

		div#n2-ss-5 .n2-ss-control-bullet--calculate-size {
			left: 0 !important;
		}

		div#n2-ss-5 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize {
			width: 100%;
		}

		div#n2-ss-5 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize {
			height: 100%;
			flex-flow: column;
		}

		div#n2-ss-5 .nextend-bullet-bar {
			display: inline-flex;
			vertical-align: top;
			visibility: visible;
			align-items: center;
			flex-wrap: wrap;
		}

		div#n2-ss-5 .n2-bar-justify-content-left {
			justify-content: flex-start;
		}

		div#n2-ss-5 .n2-bar-justify-content-center {
			justify-content: center;
		}

		div#n2-ss-5 .n2-bar-justify-content-right {
			justify-content: flex-end;
		}

		div#n2-ss-5 .n2-ss-control-bullet-vertical>.nextend-bullet-bar {
			flex-flow: column;
		}

		div#n2-ss-5 .n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			display: flex;
		}

		div#n2-ss-5 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			flex: 1 1 auto;
		}

		div#n2-ss-5 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
			height: 100%;
		}

		div#n2-ss-5 .nextend-bullet-bar .n2-bullet {
			cursor: pointer;
			transition: background-color 0.4s;
		}

		div#n2-ss-5 .nextend-bullet-bar .n2-bullet.n2-active {
			cursor: default;
		}

		div#n2-ss-5 div.n2-ss-bullet-thumbnail-container {
			position: absolute;
			z-index: 10000000;
		}

		div#n2-ss-5 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}

		div#n2-ss-5 .n2-style-785355f374be86c332d4665aae819858-dot {
			background: RGBA(0, 0, 0, 0.67);
			opacity: 1;
			padding: 5px 5px 5px 5px;
			box-shadow: none;
			border: 0px solid RGBA(0, 0, 0, 1);
			border-radius: 50px;
			margin: 4px;
		}

		div#n2-ss-5 .n2-style-785355f374be86c332d4665aae819858-dot.n2-active,
		div#n2-ss-5 .n2-style-785355f374be86c332d4665aae819858-dot:HOVER,
		div#n2-ss-5 .n2-style-785355f374be86c332d4665aae819858-dot:FOCUS {
			background: RGBA(29, 129, 249, 1);
		}

		div#n2-ss-5 .n2-ss-slide-limiter {
			max-width: 1200px;
		}

		div#n2-ss-5 .n-uc-JmYBrO9hfyt1 {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-5 .n-uc-ulkXF18JWu2h {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-5 .n-uc-MHPhFq1WO601 {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-5 .n-uc-F0xexr4jqiKc {
			padding: 10px 10px 10px 10px
		}

		div#n2-ss-5 .nextend-arrow img {
			width: 32px
		}

		@media (min-width: 1200px) {
			div#n2-ss-5 [data-hide-desktopportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 1199px) and (min-width: 901px),
		(orientation: portrait) and (max-width: 1199px) and (min-width: 701px) {
			div#n2-ss-5 [data-hide-tabletportrait="1"] {
				display: none !important;
			}
		}

		@media (orientation: landscape) and (max-width: 900px),
		(orientation: portrait) and (max-width: 700px) {
			div#n2-ss-5 [data-hide-mobileportrait="1"] {
				display: none !important;
			}

			div#n2-ss-5 .nextend-arrow img {
				width: 16px
			}
		}
	</style>
	<script src='wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4' id='jquery-core-js'></script>
	<script src='wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
	<script id='tc_csca-country-auto-script-js-extra'>
		var tc_csca_auto_ajax = { "ajax_url": "https:\/\/itcareerinstitute.org\/wp-admin\/admin-ajax.php", "nonce": "2cf1a04c8c" };
	</script>
	<script src='wp-content/plugins/country-state-city-auto-dropdown/assets/js/script3781.js?ver=6.2.2'
		id='tc_csca-country-auto-script-js'></script>
	<script src='wp-content/plugins/educare/assets/js/jquery-2.1.3.min3781.js?ver=6.2.2' id='jquery-min-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-gdpr.mind315.js?ver=2.6.0' id='um-gdpr-js'></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/6.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.2.2" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" type="application/json+oembed"
		href="wp-json/oembed/1.0/embed8551.json?url=https%3A%2F%2Fitcareerinstitute.org%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed9674?url=https%3A%2F%2Fitcareerinstitute.org%2F&amp;format=xml" />
	<style type="text/css">
		.evcf7_email_sent {
			color: #46b450;
		}

		.evcf7_error_sending_mail {
			color: #dc3232;
		}
	</style>
	<link rel="icon" href="data:,">
	<style type="text/css">
		.um_request_name {
			display: none !important;
		}
	</style>
	<meta name="generator"
		content="Elementor 3.12.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon" href="wp-content/uploads/2023/04/cropped-LOGO-01-scaled-1-32x32.jpg" sizes="32x32" />
	<link rel="icon" href="wp-content/uploads/2023/04/cropped-LOGO-01-scaled-1-192x192.jpg" sizes="192x192" />
	<link rel="apple-touch-icon" href="wp-content/uploads/2023/04/cropped-LOGO-01-scaled-1-180x180.jpg" />
	<meta name="msapplication-TileImage"
		content="https://itcareerinstitute.org/wp-content/uploads/2023/04/cropped-LOGO-01-scaled-1-270x270.jpg" />
	<style id="wp-custom-css">
		.contact-form-wrapper input,
		.contact-form-wrapper textarea {
			width: 95%;
		}

		.single-row {
			width: 100%;
			clear: both;
		}

		.single-column {
			width: 50%;
			float: left;
		}

		.single-column input {
			width: 90%;
		}


		input.wpcf7-form-control.wpcf7-submit {
			background-color: #2e3192;
			border-color: #2e3192;
		}

		input.wpcf7-form-control.wpcf7-submit:hover {
			background-color: #ed1c24;
			border-color: #ed1c24;
			color: white;
		}

		.submit,
		button,
		input[type=button],
		input[type=reset],
		input[type=submit] {
			display: inline-block;
			color: var(--btnTextColor);
			background: #2e3192;
			padding: var(--buttonPadding);
			border: #2e3192;
			border-radius: var(--bottonRoundness);
			-webkit-transition: all ease .2s;
			-moz-transition: all ease .2s;
			-ms-transition: all ease .2s;
			transition: all ease .2s;
			cursor: pointer;
			outline: 0
		}

		.button,
		.cb__button,
		.cb__button-ghost,
		.forminator-design--none .forminator-button,
		button[type=submit]:not(.qubely-block-btn-anchor) {
			color: var(--buttonTextInitialColor);
			background-color: #2e3192;
			border-color: #2e3192;
			font-family: var(--btnFontFamily);
			font-size: var(--btnFontSize);
			font-weight: var(--btnFontWeight);
			font-style: var(--btnFontStyle);
			line-height: var(--btnLineHeight);
			letter-spacing: var(--btnLetterSpacing);
			text-transform: var(--btnTextTransform);
			text-decoration: var(--btnTextDecoration);
			position: relative;
			z-index: 1
		}

		.to_top .icon-arrow-up-line svg {
			fill: none;
			height: 2em;
			stroke: #2e3192;
			width: 1em;
		}

		.to_top span {
			align-items: center;
			background: var(--topButtonShapeBackgroundDefault);
			border: var(--top-button-border) solid #2e3192;
			border-radius: var(--top-button-border-radius);
			box-shadow: var(--topButtonShadow);
			color: #2e3192;
			font-size: var(--topButtonSize);
			justify-content: center;
			padding: var(--top_button_padding);
			display: flex;
			flex-wrap: wrap;
			transition: all ease .3s;

		}

		nav[class*=menu] li a.rt-highlight,
		nav[class*=menu] li:hover>a,
		nav[class*=menu] li:hover>a .child-indicator,
		nav[class*=menu] li[class*=current-menu-]>a,
		nav[class*=menu] li[class*=current-menu-]>a .child-indicator {
			color: #ed1c24;
			--icon-color: var(--icon-hover-color, var(--linkHoverColor));
		}

		[data-footer*="type-1"] footer.cb__footer [data-row="top"] .widget>*:not(.widget-title) {
			--color: var(--paletteColor5);
			--headingColor: var(--paletteColor5);
			padding: 20px 0px 20px 0px;
		}

		.widget_type_6 .left_col .count_text {
			font-size: 16px;
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			text-transform: uppercase;
			letter-spacing: 0.8px;
			text-align: left;
			color: #b7c0cd;
			padding: 10px;
		}

		.widget_type_6 .left_col .count_num {
			float: left;
			margin-right: 5px;
			padding: 5px;
			font-size: 30px;
			font-weight: 300;
			font-style: bold;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
			text-align: left;
			color: #354052;
		}

		.cb__footer .widget {
			color: var(--color);
			margin-bottom: -40px;
		}
	</style>
	<script>(function () { this._N2 = this._N2 || { _r: [], _d: [], r: function () { this._r.push(arguments) }, d: function () { this._d.push(arguments) } } }).call(window); !function (a) { a.indexOf("Safari") > 0 && -1 === a.indexOf("Chrome") && document.documentElement.style.setProperty("--ss-safari-fix-225962", "1px") }(navigator.userAgent);</script>
	<script
		src="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Application/Frontend/Assets/dist/n2.min50f6.js?ver=e5da025b"
		defer async></script>
	<script
		src="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Application/Frontend/Assets/dist/smartslider-frontend.min50f6.js?ver=e5da025b"
		defer async></script>
	<script
		src="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Slider/SliderType/Simple/Assets/dist/ss-simple.min50f6.js?ver=e5da025b"
		defer async></script>
	<script
		src="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Widget/Arrow/ArrowImage/Assets/dist/w-arrow-image.min50f6.js?ver=e5da025b"
		defer async></script>
	<script
		src="wp-content/plugins/smart-slider-3/Public/SmartSlider3/Widget/Bullet/Assets/dist/w-bullet.min50f6.js?ver=e5da025b"
		defer async></script>
	<script>_N2.r('documentReady', function () { _N2.r(["documentReady", "smartslider-frontend", "SmartSliderWidgetArrowImage", "SmartSliderWidgetBulletTransition", "ss-simple"], function () { new _N2.SmartSliderSimple('n2-ss-2', { "admin": false, "background.video.mobile": 1, "loadingTime": 2000, "alias": { "id": 0, "smoothScroll": 0, "slideSwitch": 0, "scroll": 1 }, "align": "center", "isDelayed": 0, "responsive": { "mediaQueries": { "all": false, "desktopportrait": ["(min-width: 1200px)"], "tabletportrait": ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"], "mobileportrait": ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"] }, "base": { "slideOuterWidth": 1920, "slideOuterHeight": 500, "sliderWidth": 1920, "sliderHeight": 500, "slideWidth": 1920, "slideHeight": 500 }, "hideOn": { "desktopLandscape": false, "desktopPortrait": false, "tabletLandscape": false, "tabletPortrait": false, "mobileLandscape": false, "mobilePortrait": false }, "onResizeEnabled": true, "type": "auto", "sliderHeightBasedOn": "real", "focusUser": 1, "focusEdge": "auto", "breakpoints": [{ "device": "tabletPortrait", "type": "max-screen-width", "portraitWidth": 1199, "landscapeWidth": 1199 }, { "device": "mobilePortrait", "type": "max-screen-width", "portraitWidth": 700, "landscapeWidth": 900 }], "enabledDevices": { "desktopLandscape": 0, "desktopPortrait": 1, "tabletLandscape": 0, "tabletPortrait": 1, "mobileLandscape": 0, "mobilePortrait": 1 }, "sizes": { "desktopPortrait": { "width": 1920, "height": 500, "max": 3000, "min": 1200 }, "tabletPortrait": { "width": 701, "height": 182, "customHeight": false, "max": 1199, "min": 701 }, "mobilePortrait": { "width": 320, "height": 83, "customHeight": false, "max": 900, "min": 320 } }, "overflowHiddenPage": 0, "focus": { "offsetTop": "#wpadminbar", "offsetBottom": "" } }, "controls": { "mousewheel": 0, "touch": "horizontal", "keyboard": 1, "blockCarouselInteraction": 1 }, "playWhenVisible": 1, "playWhenVisibleAt": 0.5, "lazyLoad": 0, "lazyLoadNeighbor": 0, "blockrightclick": 0, "maintainSession": 0, "autoplay": { "enabled": 1, "start": 1, "duration": 5000, "autoplayLoop": 1, "allowReStart": 0, "pause": { "click": 1, "mouse": "0", "mediaStarted": 1 }, "resume": { "click": 0, "mouse": "0", "mediaEnded": 1, "slidechanged": 0 }, "interval": 1, "intervalModifier": "loop", "intervalSlide": "current" }, "perspective": 1500, "layerMode": { "playOnce": 0, "playFirstLayer": 1, "mode": "skippable", "inAnimation": "mainInEnd" }, "bgAnimations": 0, "mainanimation": { "type": "horizontal", "duration": 800, "delay": 0, "ease": "easeOutQuad", "shiftedBackgroundAnimation": 0 }, "carousel": 1, "initCallbacks": function () { new _N2.SmartSliderWidgetArrowImage(this); new _N2.SmartSliderWidgetBulletTransition(this, { "area": 10, "dotClasses": "n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot ", "mode": "", "action": "click" }) } }) }); _N2.r(["documentReady", "smartslider-frontend", "SmartSliderWidgetArrowImage", "SmartSliderWidgetBulletTransition", "ss-simple"], function () { new _N2.SmartSliderSimple('n2-ss-3', { "admin": false, "background.video.mobile": 1, "loadingTime": 2000, "alias": { "id": 0, "smoothScroll": 0, "slideSwitch": 0, "scroll": 1 }, "align": "normal", "isDelayed": 0, "responsive": { "mediaQueries": { "all": false, "desktopportrait": ["(min-width: 1200px)"], "tabletportrait": ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"], "mobileportrait": ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"] }, "base": { "slideOuterWidth": 1200, "slideOuterHeight": 700, "sliderWidth": 1200, "sliderHeight": 700, "slideWidth": 1200, "slideHeight": 700 }, "hideOn": { "desktopLandscape": false, "desktopPortrait": false, "tabletLandscape": false, "tabletPortrait": false, "mobileLandscape": false, "mobilePortrait": false }, "onResizeEnabled": true, "type": "auto", "sliderHeightBasedOn": "real", "focusUser": 1, "focusEdge": "auto", "breakpoints": [{ "device": "tabletPortrait", "type": "max-screen-width", "portraitWidth": 1199, "landscapeWidth": 1199 }, { "device": "mobilePortrait", "type": "max-screen-width", "portraitWidth": 700, "landscapeWidth": 900 }], "enabledDevices": { "desktopLandscape": 0, "desktopPortrait": 1, "tabletLandscape": 0, "tabletPortrait": 1, "mobileLandscape": 0, "mobilePortrait": 1 }, "sizes": { "desktopPortrait": { "width": 1200, "height": 700, "max": 3000, "min": 1200 }, "tabletPortrait": { "width": 701, "height": 408, "customHeight": false, "max": 1199, "min": 701 }, "mobilePortrait": { "width": 320, "height": 186, "customHeight": false, "max": 900, "min": 320 } }, "overflowHiddenPage": 0, "focus": { "offsetTop": "#wpadminbar", "offsetBottom": "" } }, "controls": { "mousewheel": 0, "touch": "horizontal", "keyboard": 1, "blockCarouselInteraction": 1 }, "playWhenVisible": 1, "playWhenVisibleAt": 0.5, "lazyLoad": 0, "lazyLoadNeighbor": 0, "blockrightclick": 0, "maintainSession": 0, "autoplay": { "enabled": 1, "start": 1, "duration": 5000, "autoplayLoop": 1, "allowReStart": 0, "pause": { "click": 1, "mouse": "0", "mediaStarted": 1 }, "resume": { "click": 0, "mouse": "0", "mediaEnded": 1, "slidechanged": 0 }, "interval": 1, "intervalModifier": "loop", "intervalSlide": "current" }, "perspective": 1500, "layerMode": { "playOnce": 0, "playFirstLayer": 1, "mode": "skippable", "inAnimation": "mainInEnd" }, "bgAnimations": 0, "mainanimation": { "type": "horizontal", "duration": 800, "delay": 0, "ease": "easeOutQuad", "shiftedBackgroundAnimation": 0 }, "carousel": 1, "initCallbacks": function () { new _N2.SmartSliderWidgetArrowImage(this); new _N2.SmartSliderWidgetBulletTransition(this, { "area": 10, "dotClasses": "n2-style-785355f374be86c332d4665aae819858-dot ", "mode": "", "action": "click" }) } }) }); _N2.r(["documentReady", "smartslider-frontend", "SmartSliderWidgetArrowImage", "SmartSliderWidgetBulletTransition", "ss-simple"], function () { new _N2.SmartSliderSimple('n2-ss-4', { "admin": false, "background.video.mobile": 1, "loadingTime": 2000, "alias": { "id": 0, "smoothScroll": 0, "slideSwitch": 0, "scroll": 1 }, "align": "normal", "isDelayed": 0, "responsive": { "mediaQueries": { "all": false, "desktopportrait": ["(min-width: 1200px)"], "tabletportrait": ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"], "mobileportrait": ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"] }, "base": { "slideOuterWidth": 1200, "slideOuterHeight": 800, "sliderWidth": 1200, "sliderHeight": 800, "slideWidth": 1200, "slideHeight": 800 }, "hideOn": { "desktopLandscape": false, "desktopPortrait": false, "tabletLandscape": false, "tabletPortrait": false, "mobileLandscape": false, "mobilePortrait": false }, "onResizeEnabled": true, "type": "auto", "sliderHeightBasedOn": "real", "focusUser": 1, "focusEdge": "auto", "breakpoints": [{ "device": "tabletPortrait", "type": "max-screen-width", "portraitWidth": 1199, "landscapeWidth": 1199 }, { "device": "mobilePortrait", "type": "max-screen-width", "portraitWidth": 700, "landscapeWidth": 900 }], "enabledDevices": { "desktopLandscape": 0, "desktopPortrait": 1, "tabletLandscape": 0, "tabletPortrait": 1, "mobileLandscape": 0, "mobilePortrait": 1 }, "sizes": { "desktopPortrait": { "width": 1200, "height": 800, "max": 3000, "min": 1200 }, "tabletPortrait": { "width": 701, "height": 467, "customHeight": false, "max": 1199, "min": 701 }, "mobilePortrait": { "width": 320, "height": 213, "customHeight": false, "max": 900, "min": 320 } }, "overflowHiddenPage": 0, "focus": { "offsetTop": "#wpadminbar", "offsetBottom": "" } }, "controls": { "mousewheel": 0, "touch": "horizontal", "keyboard": 1, "blockCarouselInteraction": 1 }, "playWhenVisible": 1, "playWhenVisibleAt": 0.5, "lazyLoad": 0, "lazyLoadNeighbor": 0, "blockrightclick": 0, "maintainSession": 0, "autoplay": { "enabled": 1, "start": 1, "duration": 5000, "autoplayLoop": 1, "allowReStart": 0, "pause": { "click": 1, "mouse": "0", "mediaStarted": 1 }, "resume": { "click": 0, "mouse": "0", "mediaEnded": 1, "slidechanged": 0 }, "interval": 1, "intervalModifier": "loop", "intervalSlide": "current" }, "perspective": 1500, "layerMode": { "playOnce": 0, "playFirstLayer": 1, "mode": "skippable", "inAnimation": "mainInEnd" }, "bgAnimations": 0, "mainanimation": { "type": "horizontal", "duration": 800, "delay": 0, "ease": "easeOutQuad", "shiftedBackgroundAnimation": 0 }, "carousel": 1, "initCallbacks": function () { new _N2.SmartSliderWidgetArrowImage(this); new _N2.SmartSliderWidgetBulletTransition(this, { "area": 10, "dotClasses": "n2-style-785355f374be86c332d4665aae819858-dot ", "mode": "", "action": "click" }) } }) }); _N2.r(["documentReady", "smartslider-frontend", "SmartSliderWidgetArrowImage", "SmartSliderWidgetBulletTransition", "ss-simple"], function () { new _N2.SmartSliderSimple('n2-ss-5', { "admin": false, "background.video.mobile": 1, "loadingTime": 2000, "alias": { "id": 0, "smoothScroll": 0, "slideSwitch": 0, "scroll": 1 }, "align": "normal", "isDelayed": 0, "responsive": { "mediaQueries": { "all": false, "desktopportrait": ["(min-width: 1200px)"], "tabletportrait": ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"], "mobileportrait": ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"] }, "base": { "slideOuterWidth": 1200, "slideOuterHeight": 800, "sliderWidth": 1200, "sliderHeight": 800, "slideWidth": 1200, "slideHeight": 800 }, "hideOn": { "desktopLandscape": false, "desktopPortrait": false, "tabletLandscape": false, "tabletPortrait": false, "mobileLandscape": false, "mobilePortrait": false }, "onResizeEnabled": true, "type": "auto", "sliderHeightBasedOn": "real", "focusUser": 1, "focusEdge": "auto", "breakpoints": [{ "device": "tabletPortrait", "type": "max-screen-width", "portraitWidth": 1199, "landscapeWidth": 1199 }, { "device": "mobilePortrait", "type": "max-screen-width", "portraitWidth": 700, "landscapeWidth": 900 }], "enabledDevices": { "desktopLandscape": 0, "desktopPortrait": 1, "tabletLandscape": 0, "tabletPortrait": 1, "mobileLandscape": 0, "mobilePortrait": 1 }, "sizes": { "desktopPortrait": { "width": 1200, "height": 800, "max": 3000, "min": 1200 }, "tabletPortrait": { "width": 701, "height": 467, "customHeight": false, "max": 1199, "min": 701 }, "mobilePortrait": { "width": 320, "height": 213, "customHeight": false, "max": 900, "min": 320 } }, "overflowHiddenPage": 0, "focus": { "offsetTop": "#wpadminbar", "offsetBottom": "" } }, "controls": { "mousewheel": 0, "touch": "horizontal", "keyboard": 1, "blockCarouselInteraction": 1 }, "playWhenVisible": 1, "playWhenVisibleAt": 0.5, "lazyLoad": 0, "lazyLoadNeighbor": 0, "blockrightclick": 0, "maintainSession": 0, "autoplay": { "enabled": 1, "start": 1, "duration": 5000, "autoplayLoop": 1, "allowReStart": 0, "pause": { "click": 1, "mouse": "0", "mediaStarted": 1 }, "resume": { "click": 0, "mouse": "0", "mediaEnded": 1, "slidechanged": 0 }, "interval": 1, "intervalModifier": "loop", "intervalSlide": "current" }, "perspective": 1500, "layerMode": { "playOnce": 0, "playFirstLayer": 1, "mode": "skippable", "inAnimation": "mainInEnd" }, "bgAnimations": 0, "mainanimation": { "type": "horizontal", "duration": 800, "delay": 0, "ease": "easeOutQuad", "shiftedBackgroundAnimation": 0 }, "carousel": 1, "initCallbacks": function () { new _N2.SmartSliderWidgetArrowImage(this); new _N2.SmartSliderWidgetBulletTransition(this, { "area": 10, "dotClasses": "n2-style-785355f374be86c332d4665aae819858-dot ", "mode": "", "action": "click" }) } }) }) });</script>
</head>

<body
	class="home page-template page-template-elementor_header_footer page page-id-6 wp-custom-logo wp-embed-responsive box-layout rishi-has-blocks full-width rt-loading elementor-default elementor-template-full-width elementor-kit-2430 elementor-page elementor-page-6"
	itemscope="" itemtype="http://schema.org/WebPage" data-link="type-2" data-forms="classic" data-prefix="single_page"
	data-header="type-1:sticky" data-footer="type-1" itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div id="main-container" class="site">
		<a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
		<header id="header" class="site-header" data-id="type-1" itemscope="" itemtype="https://schema.org/WPHeader">
			<div data-device="desktop">
				<div data-row="top" data-column-set="1">
					<div class="customizer_builder__container">
						<div data-column="middle">
							<div data-items="">
								<div class="cb__header-text " data-id="text" data-header-style="no">
									<div class="html-content"
										style="background-color: white; height: 350px; width: 1000px; background-image: url(wp-content/uploads/2023/05/2.png); background-repeat: no-repeat; background-size: contain;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rt-sticky-container fixed-top" style="	position: -webkit-sticky;
	position: sticky;
	top: 0;">
					<div data-sticky="shrink" style="margin-top: -76px;">
						<div data-row="bottom" data-column-set="1">
							<div class="customizer_builder__container">
								<div data-column="middle">
									<div data-items="">
										<nav id="header-menu-1 " class="header-menu-1 fixed-top" data-id="menu"
											data-menu="type-2:default" data-dropdown="type-1:simple"
											data-responsive="yes" itemscope=""
											itemtype="http://schema.org/SiteNavigationElement">
											<ul id="menu-primary" class="menu">
												<li id="menu-item-1117"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-1117">
													<a href="/" aria-current="page"><B>HOME</B></a>
												</li>
												<li id="menu-item-1124"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1124">
													<a href="{{route('course.index')}}"><B>COURSES</B></a>
												</li>
												<li id="menu-item-3412"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3412">
													<a href="{{route('franchise.index')}}"><B>FRANCHISE</B></a>
												</li>
												<li id="menu-item-3413"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3413">
													<a href="{{route('form.index')}}"><B>FORM</B></a>
												</li>
												<li id="menu-item-3414"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3414">
													<a href="{{route('exam.index')}}"><B>EXAM</B></a>
												</li>
												<li id="menu-item-1125"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1125">
													<a href="{{route('about.index')}}"><B>ABOUT US</B></a>
												</li>
												<li id="menu-item-3416"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3416">
													<a href="{{route('contact.index')}}"><B>CONTACT US</B></a>
												</li>
												<li id="menu-item-3417"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3417">
													<a href="{{route('admin.home')}}"><B>LOGIN</B></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-device="mobile">
				<div data-row="top" data-column-set="1">
					<div class="customizer_builder__container">
						<div data-column="middle">
							<div data-items="">
								<div class="cb__header-text " data-id="text" data-header-style="no">
									<div class="html-content"
										style="background-color: white; height: auto; width: 1000px; background-image: url(wp-content/uploads/2023/05/2.png); background-repeat: no-repeat; background-size: contain;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rt-sticky-container">
					<div data-sticky="shrink">
						<div data-row="bottom" data-column-set="2">
							<div class="customizer_builder__container">
								<div data-column="start" data-placements="1">
									<div data-items="primary">
										<div class="site-branding" data-id="logo" data-logo="top" itemscope="itemscope"
											itemtype="https://schema.org/Organization">
											<a href="index.html" class="site-logo-container" rel="home"><img width="150"
													height="150" src="wp-content/uploads/2023/05/78-e1685385265265.jpg"
													class="default-logo" alt="IT CAREER INSTITUTE" loading="lazy" /></a>
											<span class="screen-reader-text site-title " itemprop="name">
												<a href="index.html" rel="home" itemprop="url"></a>
											</span>
										</div>
									</div>
								</div>
								<div data-column="end" data-placements="1">
									<div data-items="primary">
										<a href="#offcanvas" class="cb__header-trigger toggle-btn"
											data-toggle-target=".main-menu-modal"
											data-toggle-body-class="showing-main-menu-modal" aria-expanded="false"
											data-set-focus=".close-main-nav-toggle" data-design="simple"
											aria-label="Menu" data-id="trigger">
											<span class="cb__menu-trigger" data-type="type-1">
												<span></span>
											</span>
											<span class="cb__label" hidden>
												Menu
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="cb__drawer-header-canvas">
			<div id="offcanvas" class="cb__panel site-header" data-behaviour="right-side" data-device="mobile">
				<section class="mobile-menu-list main-menu-modal cover-modal">
					<div class="mobile-menus" aria-label=Mobile>
						<div class="cb__panel-actions">
							<button class="close-button close close-main-nav-toggle"
								data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal"
								aria-expanded="false" data-set-focus=".main-menu-modal">
								<span class="cb__menu-trigger closed">
									<span></span>
								</span>
							</button>
						</div>
						<div class="cb__panel_content" data-device="desktop"></div>
						<div class="cb__panel_content" data-device="mobile">
							<nav class="mobile-menu" data-id="mobile-menu" data-type="type-1">
								<ul id="menu-primary-1" class="">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-1117">
										<a href="index.html" aria-current="page"><B>HOME</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1124">
										<a href="courses/index.html"><B>COURSES</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3412">
										<a href="franchise/index.html"><B>FRANCHISE</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3413">
										<a href="form/index.html"><B>FORM</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3414">
										<a href="exam/index.html"><B>EXAM</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1125">
										<a href="about/index.html"><B>ABOUT US</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3416">
										<a href="contact/index.html"><B>CONTACT US</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3417">
										<a href="user-login/index.html"><B>LOGIN</B></a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="site-content reveal_none_desktop reveal_none_tablet reveal_none_mobile">
			<div class="rishi-container" data-strech=none>
				<div class="main-content-wrapper clear" data-v-spacing="none" data-page-spacing="none">
					<div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6">
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-1f09cb5 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="1f09cb5" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-extended">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b4d245c elementor-hidden-mobile"
									data-id="b4d245c" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-6d45b3e elementor-invisible elementor-widget elementor-widget-shortcode"
											data-id="6d45b3e" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInUp&quot;}"
											data-widget_type="shortcode.default">
											<div class="elementor-widget-container">
												<div class="elementor-shortcode">
													<div class="n2-section-smartslider fitvidsignore  n2_clear"
														data-ssid="2" tabindex="0" role="region" aria-label="Slider">
														<div id="n2-ss-2-align" class="n2-ss-align"
															style="margin: 0 auto; max-width: 1920px;">
															<div class="n2-padding">
																<div id="n2-ss-2" data-creator="Smart Slider 3"
																	data-responsive="auto"
																	class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">
																	<div class="n2-ss-slider-wrapper-inside">
																		<div
																			class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
																			<div class="n2-ss-slider-2 n2-ow">
																				<div class="n2-ss-slider-3 n2-ow">
																					<div
																						class="n2-ss-slide-backgrounds n2-ow-all">
																						<div class="n2-ss-slide-background"
																							data-public-id="1"
																							data-mode="fit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="89" data-y="28"
																								data-alt="slide 1"
																								data-title=""
																								style="--ss-o-pos-x:89%;--ss-o-pos-y:28%">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/slider/cache/bb1d9f0bc7f2ba98d41b2722fabdc092/01-1.jpg"
																										alt="slide 1"
																										title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0.5)"
																								style="background-color: RGBA(255,255,255,0.5);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="2"
																							data-mode="stretch">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/slider/cache/5f658061df3b2c77b58d485d1b0dad5a/02-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="3"
																							data-mode="stretch">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/slider/cache/90b3d693d18d86901f6671d9798790d4/03-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="4"
																							data-mode="stretch">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/slider/cache/2acc8347c3fb0c1417d45a3f449bbc67/04-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																					</div>
																					<div class="n2-ss-slider-4 n2-ow">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							viewBox="0 0 1920 500"
																							data-related-device="desktopPortrait"
																							class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter"></svg>
																						<div data-slide-duration="0"
																							data-id="3"
																							data-slide-public-id="1"
																							data-title="Image Slide 2"
																							class="n2-ss-slide n2-ow  n2-ss-slide-3">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">Image
																								Slide 2</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-U6kxYglL58hn"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-first="1"
																							data-slide-duration="0"
																							data-id="4"
																							data-slide-public-id="2"
																							data-title="Image Slide 1"
																							class="n2-ss-slide n2-ow  n2-ss-slide-4">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">Image
																								Slide 1</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-9Vh2JwArauo3"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="21"
																							data-slide-public-id="3"
																							data-title="Image Slide 1"
																							class="n2-ss-slide n2-ow  n2-ss-slide-21">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">Image
																								Slide 1</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-TVglI5dFfG7s"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="22"
																							data-slide-public-id="4"
																							data-title="Image Slide 1"
																							class="n2-ss-slide n2-ow  n2-ss-slide-22">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">Image
																								Slide 1</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-zNNT5gHmAj8p"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-left-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-previous  nextend-arrow-animated-fade"
																				id="n2-ss-2-arrow-previous"
																				role="button"
																				aria-label="previous arrow"
																				tabindex="0"><img decoding="async"
																					width="32" height="32"
																					class="n2-arrow-normal-img skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMS40MzMgMTUuOTkyTDIyLjY5IDUuNzEyYy4zOTMtLjM5LjM5My0xLjAzIDAtMS40Mi0uMzkzLS4zOS0xLjAzLS4zOS0xLjQyMyAwbC0xMS45OCAxMC45NGMtLjIxLjIxLS4zLjQ5LS4yODUuNzYtLjAxNS4yOC4wNzUuNTYuMjg0Ljc3bDExLjk4IDEwLjk0Yy4zOTMuMzkgMS4wMy4zOSAxLjQyNCAwIC4zOTMtLjQuMzkzLTEuMDMgMC0xLjQybC0xMS4yNTctMTAuMjkiCiAgICAgICAgICBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIwLjgiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgo8L3N2Zz4="
																					alt="previous arrow"><img
																					decoding="async" loading="lazy"
																					width="32" height="32"
																					class="n2-arrow-hover-img skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMS40MzMgMTUuOTkyTDIyLjY5IDUuNzEyYy4zOTMtLjM5LjM5My0xLjAzIDAtMS40Mi0uMzkzLS4zOS0xLjAzLS4zOS0xLjQyMyAwbC0xMS45OCAxMC45NGMtLjIxLjIxLS4zLjQ5LS4yODUuNzYtLjAxNS4yOC4wNzUuNTYuMjg0Ljc3bDExLjk4IDEwLjk0Yy4zOTMuMzkgMS4wMy4zOSAxLjQyNCAwIC4zOTMtLjQuMzkzLTEuMDMgMC0xLjQybC0xMS4yNTctMTAuMjkiCiAgICAgICAgICBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIxIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz4KPC9zdmc+"
																					alt="previous arrow"></div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-right-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-next  nextend-arrow-animated-fade"
																				id="n2-ss-2-arrow-next" role="button"
																				aria-label="next arrow" tabindex="0">
																				<img decoding="async" loading="lazy"
																					width="32" height="32"
																					class="n2-arrow-normal-img skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMC43MjIgNC4yOTNjLS4zOTQtLjM5LTEuMDMyLS4zOS0xLjQyNyAwLS4zOTMuMzktLjM5MyAxLjAzIDAgMS40MmwxMS4yODMgMTAuMjgtMTEuMjgzIDEwLjI5Yy0uMzkzLjM5LS4zOTMgMS4wMiAwIDEuNDIuMzk1LjM5IDEuMDMzLjM5IDEuNDI3IDBsMTIuMDA3LTEwLjk0Yy4yMS0uMjEuMy0uNDkuMjg0LS43Ny4wMTQtLjI3LS4wNzYtLjU1LS4yODYtLjc2TDEwLjcyIDQuMjkzeiIKICAgICAgICAgIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuOCIgZmlsbC1ydWxlPSJldmVub2RkIi8+Cjwvc3ZnPg=="
																					alt="next arrow"><img
																					decoding="async" loading="lazy"
																					width="32" height="32"
																					class="n2-arrow-hover-img skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMC43MjIgNC4yOTNjLS4zOTQtLjM5LTEuMDMyLS4zOS0xLjQyNyAwLS4zOTMuMzktLjM5MyAxLjAzIDAgMS40MmwxMS4yODMgMTAuMjgtMTEuMjgzIDEwLjI5Yy0uMzkzLjM5LS4zOTMgMS4wMiAwIDEuNDIuMzk1LjM5IDEuMDMzLjM5IDEuNDI3IDBsMTIuMDA3LTEwLjk0Yy4yMS0uMjEuMy0uNDkuMjg0LS43Ny4wMTQtLjI3LS4wNzYtLjU1LS4yODYtLjc2TDEwLjcyIDQuMjkzeiIKICAgICAgICAgIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjEiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgo8L3N2Zz4="
																					alt="next arrow">
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-center-bottom">
																			<div style="--widget-offset:10px;"
																				class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
																				<div
																					class=" nextend-bullet-bar n2-bar-justify-content-center">
																					<div class="n2-bullet n2-style-13586a9834f840c6e3b0e8ac4aa4b69c-dot "
																						style="visibility:hidden;">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div><ss3-loader></ss3-loader>
															</div>
														</div>
														<div class="n2_clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-096ecbc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="096ecbc" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-0631116"
									data-id="0631116" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-c97b677 elementor-invisible elementor-widget elementor-widget-text-editor"
											data-id="c97b677" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}"
											data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<h6><strong>Success Foundation Reg. No.E/23334/Ahd and IT Career is one
														part of this Project under Success Foundation</strong></h6>
												<p>We aim to provide India&#8217;s best Computer Training Institute in
													which people learn Computer Courses as per their requirements. IT
													Career is registered under the government act. Our main aim is to
													establish IT Career Centers in various cities and towns. Our future
													aim is to provide free of cost Computer Education through the Govt.
													Projects as per government rules &amp; regulations. We also give
													free of cost Computer Education to physically Disable Persons. At
													this time every Computer Class charges high training fees to
													students, and due so lower and middle-class families may be unable e
													to afford it. IT Career is providing professional Computer Education
													at nominal fees. IT Career is run under the Success Foundation and
													Success Foundation is under the Gov. Of Gujarat.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-72fcb4b"
									data-id="72fcb4b" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-69c8fab elementor-invisible elementor-widget elementor-widget-heading"
											data-id="69c8fab" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">OUR COURSE
												</h4>
											</div>
										</div>
										<div class="elementor-element elementor-element-fed78b1 elementor-invisible elementor-widget elementor-widget-html"
											data-id="fed78b1" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInRight&quot;}"
											data-widget_type="html.default">
											<div class="elementor-widget-container">
												<div class="holder">
													<ul id="ticker01">
														<B>
															<li><a href="#">The first thing that most Javascript
																	programmers</a></li>
															<li><a href="#">End up doing is adding some code</a></li>
															<li><a href="#">The code that you want to run</a></li>
															<li><a href="#">Inside of which is the code that you want to
																	run</a></li>
															<li><a href="#">Right when the page is loaded</a></li>
															<li><a href="#">Problematically, however, the Javascript
																	code</a></li>
															<li><a href="#">The first thing that most Javascript
																	programmers</a></li>
															<li><a href="#">End up doing is adding some code</a></li>
															<li><a href="#">The code that you want to run</a></li>
															<li><a href="#">Inside of which is the code that you want to
																	run</a></li>
															<li><a href="#">Right when the page is loaded</a></li>
															<li><B><a href="#">Problematically, however, the Javascript
																		code</a></B></li>
														</B>
													</ul>
												</div>
												<script>
													jQuery.fn.liScroll = function (settings) {
														settings = jQuery.extend(
															{
																travelocity: 0.03
															},
															settings
														);
														return this.each(function () {
															var $strip = jQuery(this);
															$strip.addClass("newsticker");
															var stripHeight = 1;
															$strip.find("li").each(function (i) {
																stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
															});
															var $mask = $strip.wrap("<div class='mask'></div>");
															var $tickercontainer = $strip
																.parent()
																.wrap("<div class='tickercontainer'></div>");
															var containerHeight = $strip.parent().parent().height(); //a.k.a. 'mask' width
															$strip.height(stripHeight);
															var totalTravel = stripHeight;
															var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye
															function scrollnews(spazio, tempo) {
																$strip.animate({ top: "-=" + spazio }, tempo, "linear", function () {
																	$strip.css("top", containerHeight);
																	scrollnews(totalTravel, defTiming);
																});
															}
															scrollnews(totalTravel, defTiming);
															$strip.hover(
																function () {
																	jQuery(this).stop();
																},
																function () {
																	var offset = jQuery(this).offset();
																	var residualSpace = offset.top + stripHeight;
																	var residualTime = residualSpace / settings.travelocity;
																	scrollnews(residualSpace, residualTime);
																}
															);
														});
													};
													$(function () {
														$("ul#ticker01").liScroll();
													});
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-225c1cc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="225c1cc" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-20b87d9"
									data-id="20b87d9" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-8e6df60 elementor-widget elementor-widget-shortcode"
											data-id="8e6df60" data-element_type="widget"
											data-widget_type="shortcode.default">
											<div class="elementor-widget-container">
												<div class="elementor-shortcode">
													<div class="n2-section-smartslider fitvidsignore  n2_clear"
														data-ssid="3">
														<div id="n2-ss-3-align" class="n2-ss-align">
															<div class="n2-padding">
																<div id="n2-ss-3" data-creator="Smart Slider 3"
																	data-responsive="auto"
																	class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">



																	<div class="n2-ss-slider-wrapper-inside">
																		<div
																			class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
																			<div class="n2-ss-slider-2 n2-ow">
																				<div class="n2-ss-slider-3 n2-ow">

																					<div
																						class="n2-ss-slide-backgrounds n2-ow-all">
																						<div class="n2-ss-slide-background"
																							data-public-id="1"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="2"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.12-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.12-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="3"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="4"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-04-28-at-11.37.11-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																					</div>
																					<div class="n2-ss-slider-4 n2-ow">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							viewBox="0 0 1200 700"
																							data-related-device="desktopPortrait"
																							class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter"></svg>
																						<div data-first="1"
																							data-slide-duration="0"
																							data-id="7"
																							data-slide-public-id="1"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-7">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-bLc2QbDKC7J3"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="8"
																							data-slide-public-id="2"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.12 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-8">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.12 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-FF2H1oytBCIV"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="9"
																							data-slide-public-id="3"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (2)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-9">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (2)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-4Zm9GOLbGIry"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="10"
																							data-slide-public-id="4"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (1)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-10">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (1)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-MzPO6EebVGYW"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- <div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-left-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-previous  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-3-arrow-previous"
																				role="button"
																				aria-label="previous arrow"
																				tabindex="0"><img decoding="async"
																					loading="lazy" width="32"
																					height="32" class="skip-lazy"
																					data-skip-lazy="1"
																					alt="previous arrow"></div>
																		</div> -->
																		<!-- <div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-right-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-next  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-3-arrow-next" role="button"
																				aria-label="next arrow" tabindex="0">
																				<img decoding="async" loading="lazy"
																					width="32" height="32"
																					class="skip-lazy" data-skip-lazy="1"
																					alt="next arrow">
																			</div>
																		</div> -->
																		<!-- <div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-center-bottom">
																			<div style="--widget-offset:10px;"
																				class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
																				<div
																					class=" nextend-bullet-bar n2-bar-justify-content-center">
																					<div class="n2-bullet n2-style-785355f374be86c332d4665aae819858-dot "
																						style="visibility:hidden;">
																					</div>
																				</div>
																			</div>
																		</div> -->
																	</div>
																</div><ss3-loader></ss3-loader>
															</div>
														</div>
														<div class="n2_clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0259405"
									data-id="0259405" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5e7903a elementor-invisible elementor-widget elementor-widget-heading"
											data-id="5e7903a" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">FORM'S</h4>
											</div>
										</div>
										<div class="elementor-element elementor-element-98fd802 elementor-invisible elementor-widget elementor-widget-html"
											data-id="98fd802" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;bounceInRight&quot;}"
											data-widget_type="html.default">
											<div class="elementor-widget-container">
												<div class="holder">
													<ul id="ticker01">
														<B>
															<li><a href="#">The first thing that most Javascript
																	programmers</a></li>
															<li><a href="#">End up doing is adding some code</a></li>
															<li><a href="#">The code that you want to run</a></li>
															<li><a href="#">Inside of which is the code that you want to
																	run</a></li>
															<li><a href="#">Right when the page is loaded</a></li>
															<li><a href="#">Problematically, however, the Javascript
																	code</a></li>
															<li><a href="#">The first thing that most Javascript
																	programmers</a></li>
															<li><a href="#">End up doing is adding some code</a></li>
															<li><a href="#">The code that you want to run</a></li>
															<li><a href="#">Inside of which is the code that you want to
																	run</a></li>
															<li><a href="#">Right when the page is loaded</a></li>
															<li><B><a href="#">Problematically, however, the Javascript
																		code</a></B></li>
														</B>
													</ul>
												</div>




												<script>
													jQuery.fn.liScroll = function (settings) {
														settings = jQuery.extend(
															{
																travelocity: 0.03
															},
															settings
														);
														return this.each(function () {
															var $strip = jQuery(this);
															$strip.addClass("newsticker");
															var stripHeight = 1;
															$strip.find("li").each(function (i) {
																stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
															});
															var $mask = $strip.wrap("<div class='mask'></div>");
															var $tickercontainer = $strip
																.parent()
																.wrap("<div class='tickercontainer'></div>");
															var containerHeight = $strip.parent().parent().height(); //a.k.a. 'mask' width
															$strip.height(stripHeight);
															var totalTravel = stripHeight;
															var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye
															function scrollnews(spazio, tempo) {
																$strip.animate({ top: "-=" + spazio }, tempo, "linear", function () {
																	$strip.css("top", containerHeight);
																	scrollnews(totalTravel, defTiming);
																});
															}
															scrollnews(totalTravel, defTiming);
															$strip.hover(
																function () {
																	jQuery(this).stop();
																},
																function () {
																	var offset = jQuery(this).offset();
																	var residualSpace = offset.top + stripHeight;
																	var residualTime = residualSpace / settings.travelocity;
																	scrollnews(residualSpace, residualTime);
																}
															);
														});
													};
													$(function () { $("ul#ticker01").liScroll(); });
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-537fdd3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="537fdd3" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-05ca9e0"
									data-id="05ca9e0" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-8226f5f elementor-widget elementor-widget-heading"
											data-id="8226f5f" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">FOUNDER</h4>
											</div>
										</div>
										<div class="elementor-element elementor-element-f379fb9 e-transform elementor-widget elementor-widget-image"
											data-id="f379fb9" data-element_type="widget"
											data-settings="{&quot;_transform_scale_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.8,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
											data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="502" height="709"
													src="wp-content/uploads/2023/05/Santosh-Sir.jpg"
													class="attachment-full size-full wp-image-3813" alt=""
													loading="lazy"
													srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Santosh-Sir.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Santosh-Sir-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Santosh-Sir-197x278.jpg 197w"
													sizes="(max-width: 502px) 100vw, 502px" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-b886b56 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="b886b56" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2635f01"
									data-id="2635f01" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-84403cd elementor-widget elementor-widget-heading"
											data-id="84403cd" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">OUR TEAM</h4>
											</div>
										</div>
										<div class="elementor-element elementor-element-da443e9 elementor-widget elementor-widget-meafe-clients"
											data-id="da443e9" data-element_type="widget"
											data-settings="{&quot;bccgs_clients_show_carousel_auto&quot;:&quot;yes&quot;,&quot;bccgs_clients_carousel_autoplay_speed&quot;:1000,&quot;bccgs_clients_show_carousel_loop&quot;:&quot;yes&quot;,&quot;bccgs_clients_per_line&quot;:&quot;4&quot;,&quot;bccgs_clients_per_line_tablet&quot;:&quot;3&quot;,&quot;bccgs_clients_per_line_mobile&quot;:&quot;2&quot;,&quot;bccgs_clients_show_carousel_dots&quot;:&quot;yes&quot;}"
											data-widget_type="meafe-clients.default">
											<div class="elementor-widget-container">
												<div class="meafe-clients meafe-gapless-grid">
													<div
														class="meafe-grid-container meafe-grid-desktop-4 meafe-grid-tablet-3 meafe-grid-mobile-2 owl-carousel">
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Vipin.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Vipin.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Vipin-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Vipin-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Rahul-Sharma.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Rahul-Sharma.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Rahul-Sharma-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Rahul-Sharma-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Anand.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Anand.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Anand-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Anand-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Shivam.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Shivam.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Shivam-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Shivam-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Nishita.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Nishita.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Nishita-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Nishita-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Ankit.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Ankit.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Ankit-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Ankit-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Manoj.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Manoj.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Manoj-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Manoj-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Kinjal.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Kinjal.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Kinjal-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Kinjal-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Kashish.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Kashish.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Kashish-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Kashish-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Akash-1.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Akash-1.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Akash-1-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Akash-1-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="709"
																src="wp-content/uploads/2023/05/Bhim-Rajput.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/Bhim-Rajput.jpg 502w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Bhim-Rajput-212x300.jpg 212w, https://itcareerinstitute.org/wp-content/uploads/2023/05/Bhim-Rajput-197x278.jpg 197w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
													</div>
												</div><!-- .meafe-clients -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-c8cec67 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="c8cec67" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9c4b62"
									data-id="f9c4b62" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-28c2809 elementor-widget elementor-widget-heading"
											data-id="28c2809" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">OUR BRANCHES
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-c3ff2f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="c3ff2f7" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ccdc677"
									data-id="ccdc677" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-99f80df elementor-invisible elementor-widget elementor-widget-shortcode"
											data-id="99f80df" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;shake&quot;}"
											data-widget_type="shortcode.default">
											<div class="elementor-widget-container">
												<div class="elementor-shortcode">
													<div class="n2-section-smartslider fitvidsignore  n2_clear"
														data-ssid="4">
														<div id="n2-ss-4-align" class="n2-ss-align">
															<div class="n2-padding">
																<div id="n2-ss-4" data-creator="Smart Slider 3"
																	data-responsive="auto"
																	class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">
																	<div class="n2-ss-slider-wrapper-inside">
																		<div
																			class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
																			<div class="n2-ss-slider-2 n2-ow">
																				<div class="n2-ss-slider-3 n2-ow">
																					<div
																						class="n2-ss-slide-backgrounds n2-ow-all">
																						<div class="n2-ss-slide-background"
																							data-public-id="1"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.01-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.01-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="2"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="3"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="4"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.02-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="5"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.03-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.03-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																					</div>
																					<div class="n2-ss-slider-4 n2-ow">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							viewBox="0 0 1200 800"
																							data-related-device="desktopPortrait"
																							class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter"></svg>
																						<div data-first="1"
																							data-slide-duration="0"
																							data-id="11"
																							data-slide-public-id="1"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-11">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-s4UY5tQlWZpv"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="12"
																							data-slide-public-id="2"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.12 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-12">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.12 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-KERnrB5Ma5K2"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="13"
																							data-slide-public-id="3"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (2)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-13">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (2)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-MrjyAseI9U3O"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="14"
																							data-slide-public-id="4"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (1)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-14">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (1)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-8zfg0kd3rrUe"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="15"
																							data-slide-public-id="5"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (1)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-15">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (1)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-ouqcX9XYdVrW"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-left-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-previous  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-4-arrow-previous"
																				role="button"
																				aria-label="previous arrow"
																				tabindex="0"><img decoding="async"
																					loading="lazy" width="32"
																					height="32" class="skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMS40MzMgMTUuOTkyTDIyLjY5IDUuNzEyYy4zOTMtLjM5LjM5My0xLjAzIDAtMS40Mi0uMzkzLS4zOS0xLjAzLS4zOS0xLjQyMyAwbC0xMS45OCAxMC45NGMtLjIxLjIxLS4zLjQ5LS4yODUuNzYtLjAxNS4yOC4wNzUuNTYuMjg0Ljc3bDExLjk4IDEwLjk0Yy4zOTMuMzkgMS4wMy4zOSAxLjQyNCAwIC4zOTMtLjQuMzkzLTEuMDMgMC0xLjQybC0xMS4yNTctMTAuMjkiCiAgICAgICAgICBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIwLjgiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgo8L3N2Zz4="
																					alt="previous arrow"></div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-right-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-next  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-4-arrow-next" role="button"
																				aria-label="next arrow" tabindex="0">
																				<img decoding="async" loading="lazy"
																					width="32" height="32"
																					class="skip-lazy" data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMC43MjIgNC4yOTNjLS4zOTQtLjM5LTEuMDMyLS4zOS0xLjQyNyAwLS4zOTMuMzktLjM5MyAxLjAzIDAgMS40MmwxMS4yODMgMTAuMjgtMTEuMjgzIDEwLjI5Yy0uMzkzLjM5LS4zOTMgMS4wMiAwIDEuNDIuMzk1LjM5IDEuMDMzLjM5IDEuNDI3IDBsMTIuMDA3LTEwLjk0Yy4yMS0uMjEuMy0uNDkuMjg0LS43Ny4wMTQtLjI3LS4wNzYtLjU1LS4yODYtLjc2TDEwLjcyIDQuMjkzeiIKICAgICAgICAgIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuOCIgZmlsbC1ydWxlPSJldmVub2RkIi8+Cjwvc3ZnPg=="
																					alt="next arrow">
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-center-bottom">
																			<div style="--widget-offset:10px;"
																				class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
																				<div
																					class=" nextend-bullet-bar n2-bar-justify-content-center">
																					<div class="n2-bullet n2-style-785355f374be86c332d4665aae819858-dot "
																						style="visibility:hidden;">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div><ss3-loader></ss3-loader>
															</div>
														</div>
														<div class="n2_clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-28686c4 elementor-widget elementor-widget-heading"
											data-id="28686c4" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">Bhargav
													Branch </h4>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0e19950"
									data-id="0e19950" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-e321abd elementor-invisible elementor-widget elementor-widget-shortcode"
											data-id="e321abd" data-element_type="widget"
											data-settings="{&quot;_animation&quot;:&quot;shake&quot;}"
											data-widget_type="shortcode.default">
											<div class="elementor-widget-container">
												<div class="elementor-shortcode">
													<div class="n2-section-smartslider fitvidsignore  n2_clear"
														data-ssid="5">
														<div id="n2-ss-5-align" class="n2-ss-align">
															<div class="n2-padding">
																<div id="n2-ss-5" data-creator="Smart Slider 3"
																	data-responsive="auto"
																	class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">



																	<div class="n2-ss-slider-wrapper-inside">
																		<div
																			class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
																			<div class="n2-ss-slider-2 n2-ow">
																				<div class="n2-ss-slider-3 n2-ow">

																					<div
																						class="n2-ss-slide-backgrounds n2-ow-all">
																						<div class="n2-ss-slide-background"
																							data-public-id="1"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.48-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.48-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="2"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="3"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM-1.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																						<div class="n2-ss-slide-background"
																							data-public-id="4"
																							data-mode="blurfit">
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title=""
																								style="margin:-14px;padding:14px"
																								data-globalblur="7"
																								data-bgblur="7">
																								<picture
																									style="filter:blur(7px)"
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div class="n2-ss-slide-background-image"
																								data-blur="0"
																								data-opacity="100"
																								data-x="50" data-y="50"
																								data-alt=""
																								data-title="">
																								<picture
																									class="skip-lazy"
																									data-skip-lazy="1">
																									<img decoding="async"
																										src="wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-10.59.49-AM-2.jpg"
																										alt="" title=""
																										loading="lazy"
																										class="skip-lazy"
																										data-skip-lazy="1">
																								</picture>
																							</div>
																							<div data-color="RGBA(255,255,255,0)"
																								style="background-color: RGBA(255,255,255,0);"
																								class="n2-ss-slide-background-color">
																							</div>
																						</div>
																					</div>
																					<div class="n2-ss-slider-4 n2-ow">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							viewBox="0 0 1200 800"
																							data-related-device="desktopPortrait"
																							class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter"></svg>
																						<div data-first="1"
																							data-slide-duration="0"
																							data-id="16"
																							data-slide-public-id="1"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-16">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-JmYBrO9hfyt1"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="17"
																							data-slide-public-id="2"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.12 AM"
																							class="n2-ss-slide n2-ow  n2-ss-slide-17">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.12 AM</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-ulkXF18JWu2h"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="18"
																							data-slide-public-id="3"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (2)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-18">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (2)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-MHPhFq1WO601"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																						<div data-slide-duration="0"
																							data-id="19"
																							data-slide-public-id="4"
																							data-title="WhatsApp Image 2023-04-28 at 11.37.11 AM (1)"
																							class="n2-ss-slide n2-ow  n2-ss-slide-19">
																							<div role="note"
																								class="n2-ss-slide--focus"
																								tabindex="-1">WhatsApp
																								Image 2023-04-28 at
																								11.37.11 AM (1)</div>
																							<div
																								class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
																								<div class="n2-ss-layer n2-ow n-uc-F0xexr4jqiKc"
																									data-sstype="slide"
																									data-pm="default">
																								</div>
																							</div>
																						</div>
																					</div>

																				</div>
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-left-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-previous  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-5-arrow-previous"
																				role="button"
																				aria-label="previous arrow"
																				tabindex="0"><img decoding="async"
																					loading="lazy" width="32"
																					height="32" class="skip-lazy"
																					data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMS40MzMgMTUuOTkyTDIyLjY5IDUuNzEyYy4zOTMtLjM5LjM5My0xLjAzIDAtMS40Mi0uMzkzLS4zOS0xLjAzLS4zOS0xLjQyMyAwbC0xMS45OCAxMC45NGMtLjIxLjIxLS4zLjQ5LS4yODUuNzYtLjAxNS4yOC4wNzUuNTYuMjg0Ljc3bDExLjk4IDEwLjk0Yy4zOTMuMzkgMS4wMy4zOSAxLjQyNCAwIC4zOTMtLjQuMzkzLTEuMDMgMC0xLjQybC0xMS4yNTctMTAuMjkiCiAgICAgICAgICBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIwLjgiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPgo8L3N2Zz4="
																					alt="previous arrow"></div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-right-center">
																			<div style="--widget-offset:15px;"
																				class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-next  nextend-arrow-animated-fade"
																				data-hide-mobileportrait="1"
																				id="n2-ss-5-arrow-next" role="button"
																				aria-label="next arrow" tabindex="0">
																				<img decoding="async" loading="lazy"
																					width="32" height="32"
																					class="skip-lazy" data-skip-lazy="1"
																					src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMC43MjIgNC4yOTNjLS4zOTQtLjM5LTEuMDMyLS4zOS0xLjQyNyAwLS4zOTMuMzktLjM5MyAxLjAzIDAgMS40MmwxMS4yODMgMTAuMjgtMTEuMjgzIDEwLjI5Yy0uMzkzLjM5LS4zOTMgMS4wMiAwIDEuNDIuMzk1LjM5IDEuMDMzLjM5IDEuNDI3IDBsMTIuMDA3LTEwLjk0Yy4yMS0uMjEuMy0uNDkuMjg0LS43Ny4wMTQtLjI3LS4wNzYtLjU1LS4yODYtLjc2TDEwLjcyIDQuMjkzeiIKICAgICAgICAgIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuOCIgZmlsbC1ydWxlPSJldmVub2RkIi8+Cjwvc3ZnPg=="
																					alt="next arrow">
																			</div>
																		</div>
																		<div
																			class="n2-ss-slider-controls n2-ss-slider-controls-absolute-center-bottom">
																			<div style="--widget-offset:10px;"
																				class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
																				<div
																					class=" nextend-bullet-bar n2-bar-justify-content-center">
																					<div class="n2-bullet n2-style-785355f374be86c332d4665aae819858-dot "
																						style="visibility:hidden;">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div><ss3-loader></ss3-loader>
															</div>
														</div>
														<div class="n2_clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-0bd4602 elementor-widget elementor-widget-heading"
											data-id="0bd4602" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">Noblenagar
													Branch</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-34bcf4c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="34bcf4c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-55d63a8"
									data-id="55d63a8" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-f781339 elementor-position-top elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
											data-id="f781339" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<link rel="stylesheet"
													href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<a class="elementor-icon elementor-animation-"
															href="{{route('studentverify.index')}}">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
																data-name="Layer 1" viewBox="0 0 1080 1080">
																<title>STUDENT VERIFICATION</title>
																<image
																	xlink:href="wp-content/uploads/2023/05/Student verification.jpg"
																	width="1600" height="1600"
																	transform="scale(0.68)" />
															</svg>
														</a>

													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
															<a href="{{route('studentverify.index')}}">
																STUDENT VERIFICATION </a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7e7d154"
									data-id="7e7d154" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-f820beb elementor-position-top elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
											data-id="f820beb" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<a class="elementor-icon elementor-animation-" href="#">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
																data-name="Layer 1" viewBox="0 0 360 240">
																<title>ENQUIRY</title>
																<image
																	xlink:href="wp-content/uploads/2023/05/Student Enquery.jpg"
																	style="max-width: 100%; max-height: 100%;" />
															</svg>
														</a>

													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
															<a href="#">
																STUDENT INQUIRY </a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c22e95b"
									data-id="c22e95b" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-bdc7534 elementor-position-top elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
											data-id="bdc7534" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<a class="elementor-icon elementor-animation-" href="#">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
																data-name="Layer 1" viewBox="0 0 626 626">
																<defs>

																</defs>
																<title>ADMISSION FORM</title>
																<image
																	xlink:href="wp-content/uploads/2023/05/Admission form.jpg"
																	width="1600" height="1600"
																	transform="scale(0.40)" />

																<rect class="cls-1" x="220.6" y="585.54" width="179.23"
																	height="21.45"></rect>
															</svg> </a>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
															<a href="#">
																ADMISSION FORM </a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-9d1bf9b"
									data-id="9d1bf9b" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-b3176c5 elementor-position-top elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
											data-id="b3176c5" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<a class="elementor-icon elementor-animation-" href="#">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
																data-name="Layer 1" viewBox="0 0 382.5 234">
																<title>DEMAND</title>
																<image
																	xlink:href="wp-content/uploads/2023/05/ON DEMAND FORM.jpg"
																	width="2000" height="1600"
																	transform="scale(0.20)" />
															</svg>
														</a>

													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
															<a href="#">
																ON DEMAND FORM </a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1b5a884"
									data-id="1b5a884" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-fa6353a elementor-position-top elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
											data-id="fa6353a" data-element_type="widget"
											data-widget_type="icon-box.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-box-wrapper">
													<div class="elementor-icon-box-icon">
														<a class="elementor-icon elementor-animation-" href="#">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
																data-name="Layer 1" viewBox="0 0 626 626">
																<title>V</title>
																<image
																	xlink:href="wp-content/uploads/2023/05/ONLINE.jpg"
																	width="1200" height="1600"
																	transform="scale(0.50)" />

															</svg> </a>
													</div>
													<div class="elementor-icon-box-content">
														<h5 class="elementor-icon-box-title">
															<a href="#">
																ONLINE <BR>EXAM </a>
														</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-393aaf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="393aaf4" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b42ca76"
									data-id="b42ca76" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-32ff9d2 elementor-widget elementor-widget-heading"
											data-id="32ff9d2" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h4 class="elementor-heading-title elementor-size-default">OUR PARTNERS
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-a1adae0 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="a1adae0" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72d32dd"
									data-id="72d32dd" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-3291586 elementor-widget elementor-widget-meafe-clients"
											data-id="3291586" data-element_type="widget"
											data-settings="{&quot;bccgs_clients_show_carousel_auto&quot;:&quot;yes&quot;,&quot;bccgs_clients_carousel_autoplay_speed&quot;:2000,&quot;bccgs_clients_show_carousel_loop&quot;:&quot;yes&quot;,&quot;bccgs_clients_per_line&quot;:&quot;5&quot;,&quot;bccgs_clients_per_line_tablet&quot;:&quot;3&quot;,&quot;bccgs_clients_per_line_mobile&quot;:&quot;2&quot;,&quot;bccgs_clients_show_carousel_dots&quot;:&quot;yes&quot;}"
											data-widget_type="meafe-clients.default">
											<div class="elementor-widget-container">
												<div class="meafe-clients meafe-gapless-grid">
													<div
														class="meafe-grid-container meafe-grid-desktop-5 meafe-grid-tablet-3 meafe-grid-mobile-2 owl-carousel">
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/09.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/09.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/08.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/08.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/03.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/03.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/05.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/05.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/07.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/07.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/06.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/06.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/04.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/04.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/02.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/02.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/01.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/01.jpg 502w"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
													</div>
												</div><!-- .meafe-clients -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-4b279b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="4b279b6" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ea0ced9"
									data-id="ea0ced9" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-9c9e63c elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-meafe-clients"
											data-id="9c9e63c" data-element_type="widget"
											data-settings="{&quot;bccgs_clients_carousel_autoplay_speed&quot;:2000,&quot;bccgs_clients_per_line&quot;:&quot;5&quot;,&quot;bccgs_clients_per_line_tablet&quot;:&quot;3&quot;,&quot;bccgs_clients_per_line_mobile&quot;:&quot;2&quot;}"
											data-widget_type="meafe-clients.default">
											<div class="elementor-widget-container">
												<div class="meafe-clients meafe-gapless-grid">
													<div
														class="meafe-grid-container meafe-grid-desktop-5 meafe-grid-tablet-3 meafe-grid-mobile-2">
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/09.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/08.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/03.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/05.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/07.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/06.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/04.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/02.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
														<div class="meafe-grid-item meafe-client">
															<img width="502" height="355"
																src="wp-content/uploads/2023/05/01.jpg"
																class="meafe-image full" alt="" decoding="async"
																loading="lazy"
																sizes="(max-width: 502px) 100vw, 502px" />
														</div><!-- .meafe-client -->
													</div>
												</div><!-- .meafe-clients -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section
							class="elementor-section elementor-top-section elementor-element elementor-element-54876ba elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
							data-id="54876ba" data-element_type="section"
							data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-22377fa"
									data-id="22377fa" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7a6ec00 elementor-widget elementor-widget-image"
											data-id="7a6ec00" data-element_type="widget"
											data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="150" height="150"
													src="wp-content/uploads/2023/05/eeee-150x150.png"
													class="attachment-thumbnail size-thumbnail wp-image-3907" alt=""
													loading="lazy"
													srcset="https://itcareerinstitute.org/wp-content/uploads/2023/05/eeee-2048x2048.png 2048w"
													sizes="(max-width: 150px) 100vw, 150px" />
											</div>
										</div>
										<div class="elementor-element elementor-element-33bfd50 elementor-widget elementor-widget-counter"
											data-id="33bfd50" data-element_type="widget"
											data-widget_type="counter.default">
											<div class="elementor-widget-container">

												<div class="elementor-counter">
													<div class="elementor-counter-number-wrapper">
														<span class="elementor-counter-number-prefix"></span>
														<span class="elementor-counter-number" data-duration="2000"
															data-to-value="3000" data-from-value="0"
															data-delimiter=",">0</span>
														<span class="elementor-counter-number-suffix"></span>
													</div>
													<div class="elementor-counter-title">Students Enrolled</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4705fdf"
									data-id="4705fdf" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-f8dfad9 elementor-widget elementor-widget-image"
											data-id="f8dfad9" data-element_type="widget"
											data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="150" height="150"
													src="wp-content/uploads/2023/05/eeeee-150x150.png"
													class="attachment-thumbnail size-thumbnail wp-image-3908" alt=""
													loading="lazy" sizes="(max-width: 150px) 100vw, 150px" />
											</div>
										</div>
										<div class="elementor-element elementor-element-effdc80 elementor-widget elementor-widget-counter"
											data-id="effdc80" data-element_type="widget"
											data-widget_type="counter.default">
											<div class="elementor-widget-container">
												<div class="elementor-counter">
													<div class="elementor-counter-number-wrapper">
														<span class="elementor-counter-number-prefix"></span>
														<span class="elementor-counter-number" data-duration="2000"
															data-to-value="2700" data-from-value="0"
															data-delimiter=",">0</span>
														<span class="elementor-counter-number-suffix"></span>
													</div>
													<div class="elementor-counter-title">Students Trained</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1afd528"
									data-id="1afd528" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5cba741 elementor-widget elementor-widget-image"
											data-id="5cba741" data-element_type="widget"
											data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="150" height="150"
													src="wp-content/uploads/2023/05/eeeeee-150x150.png"
													class="attachment-thumbnail size-thumbnail wp-image-3909" alt=""
													loading="lazy" sizes="(max-width: 150px) 100vw, 150px" />
											</div>
										</div>
										<div class="elementor-element elementor-element-aea801f elementor-widget elementor-widget-counter"
											data-id="aea801f" data-element_type="widget"
											data-widget_type="counter.default">
											<div class="elementor-widget-container">
												<div class="elementor-counter">
													<div class="elementor-counter-number-wrapper">
														<span class="elementor-counter-number-prefix"></span>
														<span class="elementor-counter-number" data-duration="2000"
															data-to-value="2650" data-from-value="0"
															data-delimiter=",">0</span>
														<span class="elementor-counter-number-suffix"></span>
													</div>
													<div class="elementor-counter-title">Students Certified</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div><!-- .main-content-wrapper -->
			</div><!-- .rishi-container-->
		</div><!-- .site-content -->
		<footer class="cb__footer" data-id="type-1" itemscope="" itemtype="https://schema.org/WPFooter">
			<div data-row="top">
				<div class="cb__container" data-stack="tablet:mobile">
					<div data-column="widget-area-5">
						<section id="block-9" class="widget hide_widget_title widget_block widget_media_image">
							<figure class="wp-block-image size-large is-resized"><img decoding="async" loading="lazy"
									src="wp-content/uploads/2023/05/fgghjhgj_page-0001-1024x1024.png" alt=""
									class="wp-image-4008" width="193" height="193">

						</section>
						<section id="block-53" class="widget hide_widget_title widget_block">
							<h5 class="wp-block-heading has-text-align-left">OUR VISITORS</h5>
						</section>
						<section id="block-57" class="widget hide_widget_title widget_block">
							<!-- Start of CuterCounter Code -->
							<a href="https://www.cutercounter.com/" target="_blank">
								<img src="https://www.cutercounter.com/hits.php?id=hexnodcd&nd=7&style=59" border="0"
									alt="website counter">
							</a>
							<!-- End of CuterCounter Code -->
						</section>
					</div>
					<div data-column="widget-area-1">
						<section id="nav_menu-5" class="widget hide_widget_title widget_nav_menu">
							<h2 class="widget-title" itemprop="name">Menus</h2>
							<div class="menu-primary-container">
								<ul id="menu-primary-2" class="widget-menu">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-1117">
										<a href="/" aria-current="page"><B>HOME</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1124">
										<a href="{{route('course.index')}}"><B>COURSES</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3412">
										<a href="{{route('franchise.index')}}"><B>FRANCHISE</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3413">
										<a href="{{route('form.index')}}"><B>FORM</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3414">
										<a href="{{route('exam.index')}}"><B>EXAM</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1125">
										<a href="{{route('about.index')}}"><B>ABOUT US</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3416">
										<a href="{{route('contact.index')}}"><B>CONTACT US</B></a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3417">
										<a href="{{route('admin.home')}}"><B>LOGIN</B></a>
									</li>
								</ul>
							</div>
						</section>
					</div>
					<div data-column="widget-area-2">
						<section id="block-12" class="widget hide_widget_title widget_block">
							<h5 class="wp-block-heading" id="contact">ADDRESS: </h5>
						</section>
						<section id="block-45" class="widget hide_widget_title widget_block">
							<h6 class="wp-block-heading">Nr-Bhagwati School, Opp Pushpanagar, Bhargav Road, Kubernagar,
								Ahmedabad - 382340</h6>
						</section>
						<section id="block-44" class="widget hide_widget_title widget_block">
							<h4 class="wp-block-heading">CONTACT US: </h4>
						</section>
						<section id="block-42" class="widget hide_widget_title widget_block">
							<h6 class="wp-block-heading"><strong>81409 71624, 93755 22224</strong></h6>
						</section>
						<section id="block-43" class="widget hide_widget_title widget_block">
							<h6 class="wp-block-heading"><a
									href="mailto:itcareer.help4you@gmail.com"><strong>itcareer.help4you@gmail.com</strong></a>
							</h6>
						</section>
						<section id="block-47" class="widget hide_widget_title widget_block"><iframe
								src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3670.915080424383!2d72.62713691496857!3d23.063574684932288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDAzJzQ4LjkiTiA3MsKwMzcnNDUuNiJF!5e0!3m2!1sen!2sin!4v1684765883292!5m2!1sen!2sin"
								width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe></section>
					</div>
				</div>
			</div>
			<div data-row="bottom">
				<div class="cb__container" data-stack="tablet:mobile">
					<div data-column="copyright">
						<div class="cb__footer-copyright" data-id="copyright">
							IT CAREER INSTITUTE © 2023. ALL RIGHTS RESERVED - DESIGNED AND DEVELOPED BY <a
								href="https://weblictechnology.com/">WEBLIC TECHNOLOGY</a></div>
					</div>
					<div data-column="socials">
						<div class="cb__footer-socials" data-id="socials">
							<div class="cb__social-box" data-icon-size="custom" data-color="custom"
								data-icons-type="simple">
								<a href="https://www.facebook.com/people/It-Career-Computer-Training-Institute/100086700579785/?mibextid=ZbWKwL"
									target="_blank" rel="" data-network="facebook" aria-label="Facebook">
									<span class="cb__icon-container">
										<svg class="rt-icon" width="20" height="20" viewBox="0 0 24 24">
											<path
												d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" />
										</svg>
									</span>
									<span class="cb__label">Facebook</span>
								</a>
								<a href="https://www.instagram.com/_it_career_computer_class_/?igshid=MzNlNGNkZWQ4Mg%3D%3D"
									target="_blank" rel="" data-network="instagram" aria-label="Instagram">
									<span class="cb__icon-container">
										<svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z">
											</path>
											<path
												d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z">
											</path>
											<path
												d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z">
											</path>
										</svg>
									</span>
									<span class="cb__label">Instagram</span>
								</a>
								<a href="https://www.youtube.com/@It_career" target="_blank" rel=""
									data-network="youtube" aria-label="YouTube">
									<span class="cb__icon-container">
										<svg width="46" height="46" fill="currentColor" viewBox="0 0 24 24"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M23.843 6.975c0-2.11-1.552-3.807-3.469-3.807A170.465 170.465 0 0 0 12.422 3h-.844c-2.7 0-5.353.047-7.95.169-1.912 0-3.464 1.706-3.464 3.815A69.732 69.732 0 0 0 0 11.99a72.582 72.582 0 0 0 .16 5.011c0 2.11 1.551 3.82 3.464 3.82 2.728.127 5.526.183 8.372.178 2.85.01 5.64-.05 8.371-.178 1.918 0 3.47-1.71 3.47-3.82a72.41 72.41 0 0 0 .159-5.016 68.19 68.19 0 0 0-.153-5.01Zm-14.14 9.614V7.378L16.5 11.98l-6.797 4.608Z">
											</path>
										</svg>
									</span>
									<span class="cb__label">YouTube</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div><!-- #page -->
	<div class="to_top " data-button-type="type-1" data-icon-shape="square" data-button-alignment="right"
		data-scroll-style="filled">
		<span class="icon-arrow-up-line"><svg xmlns="http://www.w3.org/2000/svg" width="15.666" height="18.898"
				viewBox="0 0 15.666 18.898">
				<g id="Group_5608" data-name="Group 5608" transform="translate(-1264.471 -499.965)">
					<path id="Path_26460" data-name="Path 26460" d="M-12476,4373.384l6.419-6.419,6.419,6.419"
						transform="translate(13741.885 -3866)"></path>
					<path id="Path_26461" data-name="Path 26461" d="M-12469.8,4367.851v15.98"
						transform="translate(13742.106 -3865.969)"></path>
				</g>
			</svg></span>
	</div>
	</div>
	<div id="um_upload_single" style="display:none"></div>
	<div id="um_view_photo" style="display:none">
		<a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
			aria-label="Close view photo modal">
			<i class="um-faicon-times"></i>
		</a>

		<div class="um-modal-body photo">
			<div class="um-modal-photo"></div>
		</div>
	</div>
	<div class="cb__drawer-canvas"></div>
	<link rel='stylesheet' id='meafe-clients-css'
		href='wp-content/plugins/mega-elements-addons-for-elementor/includes/widgets/meafe-clients/clientsd279.css?ver=1.1.5'
		media='all' />
	<link rel='stylesheet' id='owl-carousel-css'
		href='wp-content/plugins/mega-elements-addons-for-elementor/assets/frontend/css/owl.carouseld279.css?ver=1.1.5'
		media='all' />
	<link rel='stylesheet' id='e-animations-css'
		href='wp-content/plugins/elementor/assets/lib/animations/animations.minfb6f.css?ver=3.12.1' media='all' />
	<script src='wp-content/plugins/mega-elements-addons-for-elementor/assets/frontend/js/owl.carouseld279.js?ver=1.1.5'
		id='owl-carousel-js'></script>
	<script src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script src='wp-includes/js/masonry.min3a05.js?ver=4.2.2' id='masonry-js'></script>
	<script src='wp-content/plugins/contact-form-7/includes/swv/js/index3960.js?ver=5.7.5.1' id='swv-js'></script>
	<script id='contact-form-7-js-extra'>
		var wpcf7 = { "api": { "root": "https:\/\/itcareerinstitute.org\/index.php\/wp-json\/", "namespace": "contact-form-7\/v1" }, "cached": "1" };
	</script>
	<script src='wp-content/plugins/contact-form-7/includes/js/index3960.js?ver=5.7.5.1'
		id='contact-form-7-js'></script>
	<script
		src='wp-content/plugins/drag-and-drop-multiple-file-upload-contact-form-7/assets/js/codedropz-uploader-minb3c5.js?ver=1.3.6.9'
		id='codedropz-uploader-js'></script>
	<script id='dnd-upload-cf7-js-extra'>
		var dnd_cf7_uploader = { "ajax_url": "https:\/\/itcareerinstitute.org\/wp-admin\/admin-ajax.php", "ajax_nonce": "f9da1791da", "drag_n_drop_upload": { "tag": "h3", "text": "Drag & Drop Files Here", "or_separator": "or", "browse": "Browse Files", "server_max_error": "The uploaded file exceeds the maximum upload size of your server.", "large_file": "Uploaded file is too large", "inavalid_type": "Uploaded file is not allowed for file type", "max_file_limit": "Note : Some of the files are not uploaded ( Only %count% files allowed )", "required": "This field is required.", "delete": { "text": "deleting", "title": "Remove" } }, "dnd_text_counter": "of", "disable_btn": "" };
	</script>
	<script
		src='wp-content/plugins/drag-and-drop-multiple-file-upload-contact-form-7/assets/js/dnd-upload-cf7b3c5.js?ver=1.3.6.9'
		id='dnd-upload-cf7-js'></script>
	<script src='../www.google.com/recaptcha/api.js' id='recaptcha-v2-js' async defer></script>
	<script id='evcf7-front-script-js-extra'>
		var custom_call = { "ajaxurl": "https:\/\/itcareerinstitute.org\/wp-admin\/admin-ajax.php", "evcf7_options": { "verify_button_text": "Click here to verify your mail", "invalid_format_message": "Please enter a valid Email Address. E.g:abc@abc.abc", "success_otp_message": "A One Time Passcode has been sent to {email} Please enter the OTP below to verify your Email Address. If you cannot see the email in your inbox, make sure to check your SPAM folder.", "error_otp_message": "There was an error in sending the OTP. Please verify your email address or contact site Admin.", "invalid_otp_message": "Invalid OTP. Please enter a valid OTP.", "email_subject": "{site_title} - Your OTP", "email_content": "Dear Customer, Your OTP is {otp} Use this Passcode to complete your transaction. Thank you.", "success_message_color": "#46b450", "error_message_color": "#dc3232" } };
	</script>
	<script src='wp-content/plugins/email-verification-for-contact-form-7/assets/js/front-scriptd5f7.js?ver=2.0'
		id='evcf7-front-script-js'></script>
	<script src='wp-content/themes/rishi/customizer-builder/dist/events/eventse6d1.js?ver=59a24f64cd691af21048'
		id='rt-custom-events-js'></script>
	<script id='rishi-companion-frontend-js-extra'>
		var rishi_companion_data = { "public_url": "https:\/\/itcareerinstitute.org\/wp-content\/plugins\/rishi-companion\/\/assets\/build\/" };
	</script>
	<script src='wp-content/plugins/rishi-companion/assets/build/public0088.js?ver=d1abcedefa88b5c01467'
		id='rishi-companion-frontend-js'></script>
	<script src='wp-content/plugins/rishi-companion/assets/build/postsTab0088.js?ver=d1abcedefa88b5c01467'
		id='rishi-companion-custom-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/select2/select2.full.min4819.js?ver=4.0.13'
		id='select2-js'></script>
	<script src='wp-includes/js/underscore.mind584.js?ver=1.13.4' id='underscore-js'></script>
	<script id='wp-util-js-extra'>
		var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
	</script>
	<script src='wp-includes/js/wp-util.min3781.js?ver=6.2.2' id='wp-util-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-crop.mind315.js?ver=2.6.0' id='um_crop-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-modal.mind315.js?ver=2.6.0' id='um_modal-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-jquery-form.mind315.js?ver=2.6.0'
		id='um_jquery_form-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-fileuploadd315.js?ver=2.6.0'
		id='um_fileupload-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/pickadate/pickerd315.js?ver=2.6.0'
		id='um_datetime-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/pickadate/picker.dated315.js?ver=2.6.0'
		id='um_datetime_date-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/pickadate/picker.timed315.js?ver=2.6.0'
		id='um_datetime_time-js'></script>
	<script src='wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
	<script src='wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11'
		id='regenerator-runtime-js'></script>
	<script src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script src='wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
	<script src='wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
	<script id='wp-i18n-js-after'>
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
	</script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-raty.mind315.js?ver=2.6.0' id='um_raty-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-tipsy.mind315.js?ver=2.6.0' id='um_tipsy-js'></script>
	<script src='wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b' id='jquery-masonry-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/simplebar.mind315.js?ver=2.6.0'
		id='um_scrollbar-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-functions.mind315.js?ver=2.6.0'
		id='um_functions-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-responsive.mind315.js?ver=2.6.0'
		id='um_responsive-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-conditional.mind315.js?ver=2.6.0'
		id='um_conditional-js'></script>
	<script id='um_scripts-js-extra'>var um_scripts = { "max_upload_size": "1610612736", "nonce": "2a29858d5d" };
	</script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-scripts.mind315.js?ver=2.6.0'
		id='um_scripts-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-profile.mind315.js?ver=2.6.0'
		id='um_profile-js'></script>
	<script src='wp-content/plugins/ultimate-member/assets/js/um-account.mind315.js?ver=2.6.0'
		id='um_account-js'></script>
	</script>
	<script src='wp-content/themes/rishi/customizer-builder/dist/main/main3ee2.js?ver=d9cac948e8423f40c789'
		id='rishi__cb_main-js'></script>
	<script src='wp-content
		/plugins/mega-elements-addons-for-elementor/includes/widgets/meafe-clients/clientsd279.js?ver=1.1.5'id='meafe-clients-js'>
		</script>
		<script src='wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1'
			id='jquery-numerator-js'></script>
		<script src='wp-content/plugins/pro-elements/assets/js/webpack-pro.runtime.mine56c.js?ver=3.12.2'
			id='elementor-pro-webpack-runtime-js'></script>
		<script src='wp-content/plugins/elementor/assets/js/webpack.runtime.minfb6f.js?ver=3.12.1'
			id='elementor-webpack-runtime-js'></script>
		<script src='wp-content/plugins/elementor/assets/js/frontend-modules.minfb6f.js?ver=3.12.1'
			id='elementor-frontend-modules-js'></script>
		<script id='elementor-pro-frontend-js-before'>var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/itcareerinstitute.org\/wp-admin\/admin-ajax.php", "nonce": "7e2617fe77", "urls": { "assets": "https:\/\/itcareerinstitute.org\/wp-content\/plugins\/pro-elements\/assets\/", "rest": "https:\/\/itcareerinstitute.org\/index.php\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/itcareerinstitute.org\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json" } };
		</script>
		<script src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
			id='elementor-waypoints-js'></script>
		<script src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
		<script id='elementor-frontend-js-before'>var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.12.1", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "additional_custom_breakpoints": true, "e_swiper_latest": true, "theme_builder_v2": true, "landing-pages": true, "page-transitions": true, "notes": true, "loop": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/itcareerinstitute.org\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 6, "title": "IT%20CAREER%20INSTITUTE%20%E2%80%93%20IT%20CAREER%20COMPUTER%20TRAINING%20INSTITUTE", "excerpt": "", "featuredImage": false } };
		</script>
		<script src='wp-content/plugins/elementor/assets/js/frontend.minfb6f.js?ver=3.12.1'
			id='elementor-frontend-js'></script>
		<script src='wp-content/plugins/pro-elements/assets/js/elements-handlers.mine56c.js?ver=3.12.2'
			id='pro-elements-handlers-js'></script>
</body>

</html>