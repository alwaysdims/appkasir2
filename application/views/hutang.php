<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
				<div class="w-56 relative text-slate-500">
					<input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
					<i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
				</div>
			</div>
		</div>
		<!-- BEGIN: Data List -->
		<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
			<table class="table table-report -mt-2">
				<thead>
					<tr>
						<th class="text-center whitespace-nowrap">No</th>
						<th class="text-center whitespace-nowrap">Nota</th>
						<th class="text-center whitespace-nowrap">Tagihan</th>
						<th class="text-center whitespace-nowrap">Status</th>
						<th class="text-center whitespace-nowrap">Action</th>
					</tr>
				</thead>
				<?php 
							
							$no = 0;
							foreach($dataHutang as $data){
								$no+=1;
							
							?>
				<tbody>
					<tr class="intro-x">
						<td class="text-center"><?= $no ?></td>
						<td class="text-center">
							<?= $data['nota'] ?>
						</td>
						<td class="text-center">
							<?= "Rp " . number_format($data['tagihan'], 0, ',', '.') ?>
						</td>
						<td class="text-center"><?= $data['status'] ?></td>

						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<a class="flex items-center mr-3" href="<?= base_url('hutang/bayarHutang/'.$data['nota']) ?>"> <i data-lucide="dollar-sign"
										class="w-4 h-4 mr-1"></i> Bayar </a>
							</div>
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
		</div>
		<!-- END: Data List -->
		<!-- BEGIN: Pagination -->
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
			<nav class="w-full sm:w-auto sm:mr-auto">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
					</li>
					<li class="page-item"> <a class="page-link" href="#">...</a> </li>
					<li class="page-item"> <a class="page-link" href="#">1</a> </li>
					<li class="page-item active"> <a class="page-link" href="#">2</a> </li>
					<li class="page-item"> <a class="page-link" href="#">3</a> </li>
					<li class="page-item"> <a class="page-link" href="#">...</a> </li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
					</li>
				</ul>
			</nav>
			<select class="w-20 form-select box mt-3 sm:mt-0">
				<option>10</option>
				<option>25</option>
				<option>35</option>
				<option>50</option>
			</select>
		</div>
		<!-- END: Pagination -->
	</div>
	<!-- BEGIN: Delete Confirmation Modal -->
	<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="p-5 text-center">
						<i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
						<div class="text-3xl mt-5">Are you sure?</div>
						<div class="text-slate-500 mt-2">
							Do you really want to delete these records?
							<br>
							This process cannot be undone.
						</div>
					</div>
					<div class="px-5 pb-8 text-center">
						<button type="button" data-tw-dismiss="modal"
							class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
						<button type="button" class="btn btn-danger w-24">Delete</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
