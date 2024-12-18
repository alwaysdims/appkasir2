<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
	<!-- BEGIN: Mobile Menu -->
	<div class="mobile-menu md:hidden">
		<div class="mobile-menu-bar">
			<a href="" class="flex mr-auto">
				<img alt="Midone - HTML Admin Template" class="w-6"
					src="<?= base_url('assets/template/Compiled') ?>/dist/images/logo.svg">
			</a>
			<a href="javascript:;" class="mobile-menu-toggler">
				<i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
			</a>
		</div>
		<div class="scrollable">
			<a href="javascript:;" class="mobile-menu-toggler">
				<i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i>
			</a>
			<ul class="scrollable__content py-2">
				<li>
					<a href="javascript:;.html" class="menu menu--active">
						<div class="menu__icon">
							<i data-lucide="home"></i>
						</div>
						<div class="menu__title">
							Dashboard
							<i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i>
						</div>
					</a>

				</li>
				<li>
					<a href="javascript:;" class="menu">
						<div class="menu__icon">
							<i data-lucide="box"></i>
						</div>
						<div class="menu__title">
							Menu Layout
							<i data-lucide="chevron-down" class="menu__sub-icon "></i>
						</div>
					</a>

				</li>
				<li>
					<a href="javascript:;" class="menu">
						<div class="menu__icon">
							<i data-lucide="shopping-bag"></i>
						</div>
						<div class="menu__title">
							E-Commerce
							<i data-lucide="chevron-down" class="menu__sub-icon "></i>
						</div>
					</a>

				</li>

				<li>
					<a href="side-menu-light-point-of-sale.html" class="menu">
						<div class="menu__icon">
							<i data-lucide="credit-card"></i>
						</div>
						<div class="menu__title">
							Point of Sale
						</div>
					</a>
				</li>
				<li>
					<a href="side-menu-light-chat.html" class="menu">
						<div class="menu__icon">
							<i data-lucide="message-square"></i>
						</div>
						<div class="menu__title">
							Chat
						</div>
					</a>
				</li>

				<li>
					<a href="javascript:;" class="menu">
						<div class="menu__icon">
							<i data-lucide="users"></i>
						</div>
						<div class="menu__title">
							Users
							<i data-lucide="chevron-down" class="menu__sub-icon "></i>
						</div>
					</a>
					<ul class="">
				</li>
				<li>
					<a href="javascript:;" class="menu">
						<div class="menu__icon">
							<i data-lucide="trello"></i>
						</div>
						<div class="menu__title">
							Profile
							<i data-lucide="chevron-down" class="menu__sub-icon "></i>
						</div>
					</a>
					< </li> <li class="menu__devider my-6">
				</li>
				<li>
					<a href="javascript:;" class="menu">
						<div class="menu__icon">
							<i data-lucide="inbox"></i>
						</div>
						<div class="menu__title">
							Components
							<i data-lucide="chevron-down" class="menu__sub-icon "></i>
						</div>
					</a>

				</li>

			</ul>
		</div>
	</div>
	<!-- END: Mobile Menu -->
	<!-- BEGIN: Top Bar -->
	<div
		class="top-bar-boxed border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:mx-0 px-3 sm:px-8 md:px-6 mb-10 md:mb-8">
		<div class="h-full flex items-center">
			<!-- BEGIN: Logo -->
			<a href="" class="-intro-x hidden md:flex">
				<img alt="Midone - HTML Admin Template" class="w-6"
					src="<?= base_url('assets/template/Compiled') ?>/dist/images/logo.svg">
				<span class="text-white text-lg ml-3">
					AppKasir
				</span>
			</a>

			<!-- END: Logo -->
			<!-- BEGIN: Breadcrumb -->
			<nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
				<ol class="breadcrumb breadcrumb-light">
					<li class="breadcrumb-item">
						<a href="#">Application</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= $judul ?></li>
				</ol>
			</nav>
			<!-- END: Breadcrumb -->

			<!-- BEGIN: Search -->
			<!-- <div class="intro-x relative mr-3 sm:mr-6">
				<div class="search hidden sm:block">
					<input type="text" class="search__input form-control border-transparent" placeholder="Search...">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						icon-name="search" data-lucide="search"
						class="lucide lucide-search search__icon dark:text-slate-500">
						<circle cx="11" cy="11" r="8"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
					</svg>
				</div>
				<a class="notification notification--light sm:hidden" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						icon-name="search" data-lucide="search"
						class="lucide lucide-search notification__icon dark:text-slate-500">
						<circle cx="11" cy="11" r="8"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
					</svg>
				</a>

			</div> -->
			<!-- END: Search -->
			<!-- BEGIN: Notifications -->
			 
			<!-- END: Notifications -->
			<!-- BEGIN: Account Menu -->
			<div class="intro-x dropdown w-8 h-8">
				<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110 tems-center justify-center "
					role="button" aria-expanded="false" data-tw-toggle="dropdown">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user block mx-auto">
						<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
						<circle cx="12" cy="7" r="4"></circle>
					</svg>
				</div>

				<div class="dropdown-menu w-56">
					<ul
						class="dropdown-content bg-primary/70 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
						<li class="p-2">
							<div class="font-medium"><?= $this->session->userdata('nama') ?></div>
							<div class="text-xs text-white/60 mt-0.5 dark:text-slate-500"><?= $this->session->userdata('role') ?></div>
						</li>
						<li>
							<hr class="dropdown-divider border-white/[0.08]">
						</li>
						<li>
							<a href="<?= base_url('konfigurasi') ?>" class="dropdown-item hover:bg-white/5">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" icon-name="user" data-lucide="user"
									class="lucide lucide-user w-4 h-4 mr-2">
									<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
								Profile
							</a>
						</li>
						<li>
							<hr class="dropdown-divider border-white/[0.08]">
						</li>
						<li>
							<a href="<?= base_url('auth/logout') ?>" class="dropdown-item hover:bg-white/5">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right"
									class="lucide lucide-toggle-right w-4 h-4 mr-2">
									<rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
									<circle cx="16" cy="12" r="3"></circle>
								</svg>
								Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- END: Account Menu -->
		</div>
	</div>
	</div>
	<!-- END: Top Bar -->

	<?php 
	$data = $this->uri->segment(1);
	?>

	<!-- BEGIN: Top Menu -->
	<nav class="top-nav justify-content-center items-center">
		<ul>
			<li>
				<a href="<?= base_url('dashboard/') ?>" class="top-menu  <?php if($data == 'dashboard'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="home"></i>
					</div>
					<div class="top-menu__title">
						Dashboard

					</div>
				</a>

			</li>
			
			<li>
				<a href="<?= base_url('produk')?>" class="top-menu <?php if($data == 'produk'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="box"></i>
					</div>
					<div class="top-menu__title">
						Produk

					</div>
				</a>

			</li>
			<li>
                        <a href="javascript:;" class="top-menu <?php if($data == 'master_barang'){echo'top-menu--active';} ?>">
                            <div class="top-menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="top-menu__title">
                                Master Barang
                                <div class="top-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="<?= site_url('master_barang/bahan') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Bahan</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('master_barang/model') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Model</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('master_barang/size') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Size</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('master_barang/warna') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Warna</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('master_barang/lengan') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Lengan</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('master_barang/jenis') ?>" class="top-menu">
                                    <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="top-menu__title">Jenis</div>
                                </a>
                            </li>
                        </ul>
                    </li>
			<li>
				<a href="<?= base_url('penjualan') ?>" class="top-menu <?php if($data == 'penjualan'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="shopping-cart"></i>
					</div>
					<div class="top-menu__title">
						Penjualan

					</div>
				</a>

			</li>
			
			<li>
				<a href="<?= base_url('user/') ?>" class="top-menu <?php if($data == 'user'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="user"></i>
					</div>
					<div class="top-menu__title">
						User

					</div>
				</a>

			</li>
			
			<li>
				<a href="<?= base_url('pengeluaran') ?>" class="top-menu <?php if($data == 'pengeluaran'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="truck"></i>
					</div>
					<div class="top-menu__title">
						Pengeluaran
					</div>
				</a>

			</li>
			<li>
				<a href="<?= base_url('hutang') ?>" class="top-menu <?php if($data == 'hutang'){echo'top-menu--active';} ?>">
					<div class="top-menu__icon">
						<i data-lucide="alert-triangle"></i>
					</div>
					<div class="top-menu__title">
						Hutang
					</div>
				</a>

			</li>
		</ul>
	</nav>
