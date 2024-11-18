<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>














<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
		<h2 class="text-lg font-medium mr-auto">
			User
		</h2>
		<div class="w-full sm:w-auto flex mt-4 sm:mt-0">

			<!-- BEGIN: Modal Toggle -->
			<div class="text-center "> <a href="javascript:;" data-tw-toggle="modal"
					data-tw-target="#header-footer-modal-preview" class="btn btn-primary ml-4">Add User</a> </div>
			<!-- END: Modal Toggle -->
			<!-- BEGIN: Modal Content -->
			<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- BEGIN: Modal Header -->
						<div class="modal-header">
							<h2 class="font-medium text-base mr-auto text-center">Add New User</h2>
						</div> <!-- END: Modal Header -->
						<!-- BEGIN: Modal Body -->
						<form action="<?= base_url('user/addUser') ?>" method="post">
							<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
										class="form-label">Nama</label> <input id="modal-form-1" type="text"
										class="form-control" placeholder="Masukkan nama" name="nama"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
										class="form-label">Username</label> <input id="modal-form-2" type="text"
										class="form-control" placeholder="Masukkan username" name="username"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">alamat</label> <input id="modal-form-3" type="text"
										class="form-control" placeholder="Masukkan alamat" name="alamat"> </div>
								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-4"
										class="form-label">Password</label> <input id="modal-form-4" type="password"
										class="form-control" placeholder="Isi Password" name="password"> </div>
								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Role</label> <select id="modal-form-6" class="form-select"
										name="role">
										<option value="Admin">Admin</option>
										<option value="Petugas">Petugas</option>
									</select> </div>
							</div> <!-- END: Modal Body -->
							<!-- BEGIN: Modal Footer -->
							<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
									class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button type="submit"
									class="btn btn-primary w-20">Send</button> </div> <!-- END: Modal Footer -->
					</div>
					</form>

				</div>
			</div> <!-- END: Modal Content -->
			<div class="dropdown ml-auto sm:ml-0">
				<button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
					<span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i>
					</span>
				</button>
				<div class="dropdown-menu w-40">
					<ul class="dropdown-content">
						<li>
							<a href="" class="dropdown-item"> <i data-lucide="file-plus" class="w-4 h-4 mr-2"></i> New
								Category </a>
						</li>
						<li>
							<a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> New Group
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- BEGIN: HTML Table Data -->
	<div class="intro-y box p-5 mt-5">
		<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
			<form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
				<div class="sm:flex items-center sm:mr-4">
					<label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
					<select id="tabulator-html-filter-field"
						class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
						<option value="name">Name</option>
						<option value="category">Category</option>
						<option value="remaining_stock">Remaining Stock</option>
					</select>
				</div>
			
				<div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
					<label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
					<input id="tabulator-html-filter-value" type="text"
						class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
				</div>
				<div class="mt-2 xl:mt-0">
					<button id="tabulator-html-filter-go" type="button"
						class="btn btn-primary w-full sm:w-16">Go</button>
					<button id="tabulator-html-filter-reset" type="button"
						class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
				</div>
			</form>
			<div class="flex mt-5 sm:mt-0">
				<button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <i
						data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </button>
				<div class="dropdown w-1/2 sm:w-auto">
					<button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false"
						data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i
							data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
					<div class="dropdown-menu w-40">
						<ul class="dropdown-content">
							<li>
								<a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i
										data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
							</li>
							<li>
								<a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i
										data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
							</li>
							<li>
								<a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <i
										data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
							</li>
							<li>
								<a id="tabulator-export-html" href="javascript:;" class="dropdown-item"> <i
										data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="overflow-x-auto scrollbar-hidden">
			<div id="tabulator" class="mt-5 table-report table-report--tabulator">
			
			</div>
		</div>
	</div>
	<!-- END: HTML Table Data -->
</div>
