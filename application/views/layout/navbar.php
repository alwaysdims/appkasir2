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
			<div class="intro-x relative mr-3 sm:mr-6">
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

			</div>
			<!-- END: Search -->
			<!-- BEGIN: Notifications -->
			 
			<!-- END: Notifications -->
			<!-- BEGIN: Account Menu -->
			<div class="intro-x dropdown w-8 h-8">
				<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
					role="button" aria-expanded="false" data-tw-toggle="dropdown">
					<i data-lucide="user" class="w-10 h-10 text-white mr-1"></i>
				</div>
				<div class="dropdown-menu w-56">
					<ul
						class="dropdown-content bg-primary/70 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
						<li class="p-2">
							<div class="font-medium">Robert De Niro</div>
							<div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Frontend Engineer</div>
						</li>
						<li>
							<hr class="dropdown-divider border-white/[0.08]">
						</li>
						<li>
							<a href="" class="dropdown-item hover:bg-white/5">
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
							<a href="" class="dropdown-item hover:bg-white/5">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" icon-name="edit" data-lucide="edit"
									class="lucide lucide-edit w-4 h-4 mr-2">
									<path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
									<path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
								</svg>
								Add Account
							</a>
						</li>
						<li>
							<a href="" class="dropdown-item hover:bg-white/5">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" icon-name="lock" data-lucide="lock"
									class="lucide lucide-lock w-4 h-4 mr-2">
									<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
									<path d="M7 11V7a5 5 0 0110 0v4"></path>
								</svg>
								Reset Password
							</a>
						</li>
						<li>
							<a href="" class="dropdown-item hover:bg-white/5">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" icon-name="help-circle" data-lucide="help-circle"
									class="lucide lucide-help-circle w-4 h-4 mr-2">
									<circle cx="12" cy="12" r="10"></circle>
									<path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"></path>
									<line x1="12" y1="17" x2="12.01" y2="17"></line>
								</svg>
								Help
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
	<nav class="top-nav justify-content-center">
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
