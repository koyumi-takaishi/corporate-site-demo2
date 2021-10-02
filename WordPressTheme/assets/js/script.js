// ローディング判定
jQuery(function ($) {
	jQuery(window).on("load", function () {
		jQuery("body").attr("data-loading", "true");
	});

	//ナビバートグル
	$('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('open')) {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
			$(this).removeClass('open');
		} else {
			$('.js-drawer-menu').fadeIn();
			$('.js-overlay').fadeIn();
			$(this).addClass('open');
		}
	});

	$('.js-overlay').on('click', function () {
		$('.js-drawer-menu').fadeOut();
		$('.js-overlay').fadeOut();
		$('.js-hamburger').removeClass('open');
	});

	// スクロール判定
	jQuery(window).on("scroll", function () {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function (e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function () {
		let header = jQuery(".js-top-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function (e) {
				e.preventDefault();
			});
	}

	// ヘッダー過ぎたら背景色を付与する
	let header = $('.js-top-header');
	let headerHeight = $('.js-top-header').outerHeight(); //ヘッダーコンテンツ
	let imgHeight = $('.js-mv').outerHeight() - headerHeight; //画像の高さを取得。これがイベント発火位置になる。

	$(window).on('load scroll', function () {
		if ($(window).scrollTop() < imgHeight) {
			//メインビジュアル内にいるので、クラスを外す。
			header.removeClass('headerColor');
		} else {
			//メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
			header.addClass('headerColor');
		}
	});
	// ヘッダー過ぎたら背景色を付与する
	let subHeader = $('.js-sub-header');
	let headerHeightSub = $('.js-sub-header').outerHeight(); //ヘッダーコンテンツ
	let imgHeightSub = $('.js-sub-mv').outerHeight() - headerHeightSub; //画像の高さを取得。これがイベント発火位置になる。

	$(window).on('load scroll', function () {
		if ($(window).scrollTop() < imgHeightSub) {
			//メインビジュアル内にいるので、クラスを外す。
			subHeader.removeClass('headerColor');
		} else {
			//メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
			subHeader.addClass('headerColor');
		}
	});
});
