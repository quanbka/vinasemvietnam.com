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
										<li id="menu-item-696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-696 dropdown"><a title="Giới thiệu" href="#" data-toggle="dropdown"
												class="dropdown-toggle" aria-haspopup="true">Giới thiệu <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-695 menu-item-gioi-thieu-cong-ty "><a title="Giới thiệu công ty"
														href="/gioi-thieu/gioi-thieu-cong-ty/">Giới thiệu công ty</a></li>
												<li id="menu-item-699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-699 menu-item-co-cau-chuc "><a title="Cơ cấu tổ chức" href="/gioi-thieu/co-cau-chuc/">Cơ cấu tổ chức</a>
												</li>
												<li id="menu-item-698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-698 menu-item-thanh-tich-tieu-bieu "><a title="Thành tích tiêu biểu"
														href="/gioi-thieu/thanh-tich-tieu-bieu/">Thành tích tiêu biểu</a></li>
												<li id="menu-item-697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-697 menu-item-thong-diep-ct-hdqt "><a title="Thông điệp CT HĐQT"
														href="/gioi-thieu/thong-diep-ct-hdqt/">Thông điệp CT HĐQT</a></li>
												<li id="menu-item-700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-700 menu-item-tuyen-dung "><a title="Tuyển dụng" href="/gioi-thieu/tuyen-dung/">Tuyển dụng</a></li>
											</ul>
										</li>
										<li id="menu-item-771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-771 dropdown"><a title="Việc Làm" href="#" data-toggle="dropdown" class="dropdown-toggle"
												aria-haspopup="true">Việc Làm <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-833" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-833 menu-item- "><a title="Thực tập sinh Nhật bản" href="/donhang_cat/thuc-tap-sinh-nhat-ban/">Thực
														tập sinh Nhật bản</a></li>
												<li id="menu-item-831" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-831 menu-item- "><a title="Điều Dưỡng Đi Nhật" href="/donhang_cat/dieu-duong-di-nhat/">Điều Dưỡng
														Đi Nhật</a></li>
												<li id="menu-item-834" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-834 menu-item- "><a title="Xuất khẩu lao động Đài Loan"
														href="/donhang_cat/xuat-khau-lao-dong-dai-loan/">Xuất khẩu lao động Đài Loan</a></li>
												<li id="menu-item-832" class="menu-item menu-item-type-taxonomy menu-item-object-donhang_cat menu-item-832 menu-item- "><a title="Kỹ sư – Kỹ thuật viên Nhật Bản"
														href="/donhang_cat/ky-su-ky-thuat-vien-nhat-ban/">Kỹ sư – Kỹ thuật viên Nhật Bản</a></li>
											</ul>
										</li>
										<li id="menu-item-711" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-711 dropdown"><a title="Tin tức" href="#" data-toggle="dropdown"
												class="dropdown-toggle" aria-haspopup="true">Tin tức <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-716" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-716 menu-item- "><a title="Sự kiện - hoạt động" href="/tin-tuc/su-kien-hoat-dong/">Sự kiện &#8211;
														hoạt động</a></li>
												<li id="menu-item-712" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-712 menu-item- "><a title="Chìa khóa thành công" href="/tin-tuc/chia-khoa-thanh-cong/">Chìa khóa thành
														công</a></li>
												<li id="menu-item-715" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-715 menu-item- "><a title="Nhật Bản" href="/tin-tuc/nhat-ban/">Nhật Bản</a></li>
												<li id="menu-item-714" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-714 menu-item- "><a title="Đài Loan" href="/tin-tuc/dai-loan/">Đài Loan</a></li>
												<li id="menu-item-713" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-713 menu-item- "><a title="Xuất khẩu lao động" href="/tin-tuc/xuat-khau-lao-dong/">Xuất khẩu lao
														động</a></li>
												<li id="menu-item-2960" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2960 menu-item-tuyen-dung "><a title="Du học Đài Loan" href="/tin-tuc/du-hoc-dai-loan/">Du học Đài
														Loan</a></li>
											</ul>
										</li>
										<li id="menu-item-717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-717 dropdown"><a title="Đào tạo" href="#" data-toggle="dropdown" class="dropdown-toggle"
												aria-haspopup="true">Đào tạo <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721 menu-item-dao-tao-ngoai-ngu "><a title="Đào tạo ngoại ngữ" href="/dao-tao/dao-tao-ngoai-ngu/">Đào tạo
														ngoại ngữ</a></li>
												<li id="menu-item-720" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720 menu-item-du-hoc-dai-loan "><a title="Du học Đài Loan" href="/dao-tao/du-hoc-dai-loan/">Du học Đài
														Loan</a></li>
												<li id="menu-item-719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719 menu-item-du-hoc-nhat-ban "><a title="Du học Nhật Bản" href="/dao-tao/du-hoc-nhat-ban/">Du học Nhật
														Bản</a></li>
												<li id="menu-item-718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-718 menu-item-dao-tao-don-hang "><a title="Đào tạo đơn hàng" href="/dao-tao/dao-tao-don-hang/">Đào tạo
														đơn hàng</a></li>
											</ul>
										</li>
										<li id="menu-item-722" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-722 menu-item- last-menu-item"><a title="Chìa khóa thành công" href="/tin-tuc/chia-khoa-thanh-cong/">Chìa khóa
												thành công</a></li>
									</ul> -->
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</div>



	</header>
