<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="/wp-content/themes/atv247/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/lib/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/css/style.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/css/reponsive.css" rel="stylesheet">
	<link href="/wp-content/themes/atv247/css/editor-style.css" rel="stylesheet">
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>

</head>

<body data-rsssl=1 class="home blog">
	<header>
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="logo">
							<a class="navbar-brand" href="">
								<?php the_custom_logo() ?>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="main-nav">

							<nav class="navbar navbar-default" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

								</div>
								<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse navbar-ex1-collapse">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'     => 'nav navbar-nav navbar-left',
											'menu_id' 		 => 'menu-menu-chinh',
											'container'      => 'ul',
											'container_class'=> '',
											'depth'          => 1,
										)
									);
									?>
									<!-- <ul id="menu-menu-chinh" class="nav navbar-nav navbar-left">
										<li id="menu-item-696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-696 dropdown"><a title="Gi???i thi???u" href="#" data-toggle="dropdown"
												class="dropdown-toggle" aria-haspopup="true">Gi???i thi???u <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-695 menu-item-gioi-thieu-cong-ty "><a title="Gi???i thi???u c??ng ty"
														href="/gioi-thieu/gioi-thieu-cong-ty/">Gi???i thi???u c??ng ty</a></li>
												<li id="menu-item-699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-699 menu-item-co-cau-chuc "><a title="C?? c???u t??? ch???c" href="/gioi-thieu/co-cau-chuc/">C?? c???u t??? ch???c</a>
												</li>
												<li id="menu-item-698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-698 menu-item-thanh-tich-tieu-bieu "><a title="Th??nh t??ch ti??u bi???u"
														href="/gioi-thieu/thanh-tich-tieu-bieu/">Th??nh t??ch ti??u bi???u</a></li>
												<li id="menu-item-697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-697 menu-item-thong-diep-ct-hdqt "><a title="Th??ng ??i???p CT H??QT"
														href="/gioi-thieu/thong-diep-ct-hdqt/">Th??ng ??i???p CT H??QT</a></li>
												<li id="menu-item-700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-700 menu-item-tuyen-dung "><a title="Tuy???n d???ng" href="/gioi-thieu/tuyen-dung/">Tuy???n d???ng</a></li>
											</ul>
										</li>
										<li id="menu-item-771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-771 dropdown"><a title="Vi???c L??m" href="#" data-toggle="dropdown" class="dropdown-toggle"
												aria-haspopup="true">Vi???c L??m <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-833" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-833 menu-item- "><a title="Th???c t???p sinh Nh???t b???n" href="/donhang_cat/thuc-tap-sinh-nhat-ban/">Th???c
														t???p sinh Nh???t b???n</a></li>
												<li id="menu-item-831" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-831 menu-item- "><a title="??i???u D?????ng ??i Nh???t" href="/donhang_cat/dieu-duong-di-nhat/">??i???u D?????ng
														??i Nh???t</a></li>
												<li id="menu-item-834" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-834 menu-item- "><a title="Xu???t kh???u lao ?????ng ????i Loan"
														href="/donhang_cat/xuat-khau-lao-dong-dai-loan/">Xu???t kh???u lao ?????ng ????i Loan</a></li>
												<li id="menu-item-832" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-832 menu-item- "><a title="K??? s?? ??? K??? thu???t vi??n Nh???t B???n"
														href="/donhang_cat/ky-su-ky-thuat-vien-nhat-ban/">K??? s?? ??? K??? thu???t vi??n Nh???t B???n</a></li>
											</ul>
										</li>
										<li id="menu-item-711" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-711 dropdown"><a title="Tin t???c" href="#" data-toggle="dropdown"
												class="dropdown-toggle" aria-haspopup="true">Tin t???c <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-716" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-716 menu-item- "><a title="S??? ki???n - ho???t ?????ng" href="/tin-tuc/su-kien-hoat-dong/">S??? ki???n &#8211;
														ho???t ?????ng</a></li>
												<li id="menu-item-712" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-712 menu-item- "><a title="Ch??a kh??a th??nh c??ng" href="/tin-tuc/chia-khoa-thanh-cong/">Ch??a kh??a th??nh
														c??ng</a></li>
												<li id="menu-item-715" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-715 menu-item- "><a title="Nh???t B???n" href="/tin-tuc/nhat-ban/">Nh???t B???n</a></li>
												<li id="menu-item-714" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-714 menu-item- "><a title="????i Loan" href="/tin-tuc/dai-loan/">????i Loan</a></li>
												<li id="menu-item-713" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-713 menu-item- "><a title="Xu???t kh???u lao ?????ng" href="/tin-tuc/xuat-khau-lao-dong/">Xu???t kh???u lao
														?????ng</a></li>
												<li id="menu-item-2960" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2960 menu-item-tuyen-dung "><a title="Du h???c ????i Loan" href="/tin-tuc/du-hoc-dai-loan/">Du h???c ????i
														Loan</a></li>
											</ul>
										</li>
										<li id="menu-item-717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-717 dropdown"><a title="????o t???o" href="#" data-toggle="dropdown" class="dropdown-toggle"
												aria-haspopup="true">????o t???o <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721 menu-item-dao-tao-ngoai-ngu "><a title="????o t???o ngo???i ng???" href="/dao-tao/dao-tao-ngoai-ngu/">????o t???o
														ngo???i ng???</a></li>
												<li id="menu-item-720" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720 menu-item-du-hoc-dai-loan "><a title="Du h???c ????i Loan" href="/dao-tao/du-hoc-dai-loan/">Du h???c ????i
														Loan</a></li>
												<li id="menu-item-719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719 menu-item-du-hoc-nhat-ban "><a title="Du h???c Nh???t B???n" href="/dao-tao/du-hoc-nhat-ban/">Du h???c Nh???t
														B???n</a></li>
												<li id="menu-item-718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-718 menu-item-dao-tao-don-hang "><a title="????o t???o ????n h??ng" href="/dao-tao/dao-tao-don-hang/">????o t???o
														????n h??ng</a></li>
											</ul>
										</li>
										<li id="menu-item-722" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-722 menu-item- last-menu-item"><a title="Ch??a kh??a th??nh c??ng" href="/tin-tuc/chia-khoa-thanh-cong/">Ch??a kh??a
												th??nh c??ng</a></li>
									</ul> -->
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</div>



	</header>
