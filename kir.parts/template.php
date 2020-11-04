<?php
$root = in_array(
	$_SERVER['REQUEST_URI'],
	array("/", "/index.php")
);
?><!DOCTYPE html>
<html lang="ru"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php
	if (isset($title)) {
		echo $title;
	} else {
		echo "Каталог индустрии развлечений";
	} ?></title>
	<meta name="description" content="<?php
	if (isset($description)) {
		echo $description;
	} else {
		echo "МЕДИА-ПРОЕКТ «Каталог Индустрии Развлечений» ведущий российский информационно-аналитический журнал, посвященный индустрии развлечений и досуга. Каталог знакомит читателей с новыми тенденциями на рынке развлечений, с ассортиментом оборудования и аксессуарами для оснащения парков, развлекательных центров, аквапарков. Каждый номер журнала содержит обширную базу данных о производителях и продавцах игрового, развлекательного и сопутствующего оборудования.";
	} ?>">
	<meta name="keywords" content="<?php
	if (isset($keywords)) {
		echo $keywords;
	} else {
		echo "Кир Каталог индустрии развлечений выставки amusement industry catalogue entertainment attractions exhibitions оборудование для парков система автоматизации развлекательных центров производство аттракционов продажа аттракционов";
	} ?>">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="preload" href="/css/mainv4.css" as="style">
	<link rel="preload" href="/js/axios.min.js" as="script">
	<link rel="preload" href="/js/scriptv4.js" as="script">
	<link rel="preload" href="/img/head.png" as="image">
	<link rel="preload" href="/img/name.png" as="image">
	<script>
	if (!String.prototype.format) {
	  String.prototype.format = function() {
	    var args = arguments;
	    return this.replace(/{(\d+)}/g, function(match, number) {
	      return typeof args[number] != 'undefined'
	        ? args[number]
	        : match
	      ;
	    });
	  };
	}
	function preloadImage(href){
		var link = document.createElement("link");
		link.href = href;
		link.rel = "preload";
		link.as = "image";
		document.head.appendChild(link);
	}
	var side = <?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/side.js'); ?>;
	for (var i = 0; i < side.banners.length; i++) {
		preloadImage(side.banners[i].back);
	}
	for (var i = 0; i < side.issues.length; i++) {
		preloadImage(side.issues[i].back);
	}
	</script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136956781-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-136956781-1');
	</script>
	<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	ym(62565307, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
	});
	</script>
	<link rel="stylesheet" href="/css/main.min.css">
	<?php
		if (isset($build)) {
			echo "<script>" . $build . "</script>";
		}
	?>
</head><body>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/62565307" style="position:absolute; left:-9999px;" alt="" />
		</div>
	</noscript>
	<header>
		<div class="wrap">
			<div id="logo" class="cell">
			<?php if ($root) { ?>
				<a href="#" title="Наверх"></a>
			<?php } else { ?>
				<a href="/" title="Вернуться на главную"></a>
			<?php } ?>
			</div>
			<div id="name" class="desktop-menu">
			<?php if ($root) { ?>
				<h1>КАТАЛОГ ИНДУСТРИИ РАЗВЛЕЧЕНИЙ</h1>
			<?php } else { ?>
				<h2>КАТАЛОГ ИНДУСТРИИ РАЗВЛЕЧЕНИЙ</h2>
			<?php } ?>
				<div
					class="cell c-2 ya-site-form ya-site-form_inited_no"
					data-bem="{&quot;action&quot;:&quot;http://kir.aaex.ru/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;en&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Search kir.aaex.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;com&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2407884,&quot;input_fg&quot;:&quot;#333333&quot;,&quot;input_bg&quot;:&quot;#cccccc&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#333333&quot;,&quot;input_borderColor&quot;:&quot;#cc0000&quot;}"
				>
					<form action="https://yandex.com/search/site/" method="get" target="_self" accept-charset="utf-8">
						<input type="hidden" name="searchid" value="2407884"/>
						<input type="hidden" name="l10n" value="ru"/>
						<input type="hidden" name="reqenc" value=""/>
						<input type="search" name="text" value=""/>
						<input type="submit" value="Поиск"/>
					</form>
				</div>
				<style type="text/css">
					.ya-page_js_yes .ya-site-form_inited_no {
						display: none;
					}
				</style>
				<script type="text/javascript">
					(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');
				</script>
			</div>
			<div class="mobile-menu-container">
				<div class="open-btn">
					<a class="icon-wrap">
						<span></span>
						<span></span>
						<span></span>
						<div class="menu-background"></div>
					</a>
				</div>
				<div class="mobile-nav-wrap">
					<h2>КАТАЛОГ ИНДУСТРИИ РАЗВЛЕЧЕНИЙ</h2>
					<div
						class="cell c-2 ya-site-form ya-site-form_inited_no"
						data-bem="{&quot;action&quot;:&quot;http://kir.aaex.ru/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;en&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Search kir.aaex.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;com&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2407884,&quot;input_fg&quot;:&quot;#333333&quot;,&quot;input_bg&quot;:&quot;#cccccc&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#333333&quot;,&quot;input_borderColor&quot;:&quot;#cc0000&quot;}"
					>
						<form action="https://yandex.com/search/site/" method="get" target="_self" accept-charset="utf-8">
							<input type="hidden" name="searchid" value="2407884"/>
							<input type="hidden" name="l10n" value="ru"/>
							<input type="hidden" name="reqenc" value=""/>
							<input type="search" name="text" value=""/>
							<input type="submit" value="Поиск"/>
						</form>
					</div>
					<div id="mobile-menu">
						<nav id="mobile-nav"></nav>
						<div id="mobile-sidelist"></div>
					</div>
				</div>
			</div>
			<script>
				(function() {
					document.querySelectorAll('.mobile-menu-container .open-btn')[0].onclick = function() {
						document.querySelectorAll('.mobile-menu-container')[0].classList.toggle('active');
						document.querySelectorAll('html')[0].classList.toggle('hidden');
					};
				})()
			</script>
		</div>
	</header>
	<div class="wrap main-content">
		<aside id="aside-menu" class="cell">
			<nav id="aside-nav"></nav>
			<div id="aside-sidelist"></div>
		</aside>
		<div id="content">
		<?php
			if (isset($body)) {
				echo $body;
			}
		?>
		</div>
	</div>
	<link rel="stylesheet" href="/css/mainv4.css">
	<script>

	// aside menu
	buildNavArticle(document.getElementById('aside-nav'));
	buildNavMenu(document.getElementById('aside-nav'));
	buildIssues(document.getElementById('aside-nav'));
	buildBanners(document.getElementById('aside-sidelist'));
	buildBannerSite(document.getElementById('aside-sidelist'));

	// mobile menu
	buildNavMenu(document.getElementById('mobile-nav'));
	buildNavArticle(document.getElementById('mobile-nav'));
	buildBannerSite(document.getElementById('mobile-sidelist'));
	buildBanners(document.getElementById('mobile-sidelist'));

	// content
	buildContent();

	function buildBannerSite(selector) {
		var link = document.createElement("a");
		var linkText = document.createElement('div');
		linkText.innerHTML = side.bannerSite.text;
		link.appendChild(linkText);
		link.href = side.bannerSite.href;
		link.classList.add(side.bannerSite.color);
		link.classList.add('menu-site-banner');
		link.target = "_blank";
		selector.parentNode.insertBefore(link, selector);
	}

	function buildNavArticle(selector) {
		for (var i = 0; i < side.issues.length; i++) {
			var link = document.createElement("a");
			var linkText = document.createElement('div');
			linkText.innerHTML = side.articles[i].text;
			link.appendChild(linkText);
			link.href = side.articles[i].href;
			link.classList.add(side.articles[i].color);
			link.classList.add('menu-article');
			link.target = "_blank";
			selector.parentNode.insertBefore(link, selector);
		}
	}

	function buildNavMenu(selector) {
		for (var i = 0; i < side.menu.length; i++) {
			var link = document.createElement("a");
			link.href = side.menu[i].href;
			link.classList.add(side.menu[i].color);
			link.innerHTML = side.menu[i].text;
			selector.appendChild(link);
		}
	}

	function buildIssues(selector) {
		for (var i = 0; i < side.issues.length; i++) {
			var link = document.createElement("a");
			link.href = side.issues[i].href;
			link.style.backgroundImage = 'url("' + side.issues[i].back + '")';
			link.target = "_blank";
			link.classList.add('menu-issues');
			selector.parentNode.insertBefore(link, selector.nextSibling);
		}
	}

	function buildBanners(selector) {
		for (var i = 0; i < side.banners.length; i++) {
			var link = document.createElement("a");
			link.style.backgroundImage = 'url("' + side.banners[i].back + '")';
			link.style.paddingTop = (side.banners[i].height / side.banners[i].width * 100) + '%';
			link.href = side.banners[i].href;
			selector.appendChild(link);
		}
	}

	</script>
	<script src="/js/axios.min.js"></script>
	<script src="/js/scriptv4.js"></script>
	<?php
		define('pops', $_SERVER["DOCUMENT_ROOT"] . '/../kir.parts/popups/');
		echo file_get_contents(pops . 'contacts.html');
	 	echo file_get_contents(pops . 'subscribe.html');
		if (isset($popup)) {
			echo $popup;
		}
	?>
</body></html>
