<div class="content content--top-nav">
	
	<div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-x mt-5">
		<!-- BEGIN: Modal Toggle -->
		<div class="mt-5 mb-5"> <a href="javascript:;" data-tw-toggle="modal"
				data-tw-target="#header-footer-modal-preview" class="btn btn-primary">Bayar</a> </div>
		<!-- END: Modal Toggle -->
		<!-- BEGIN: Modal Content -->
		<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?= base_url('hutang/pembayaran') ?>" method="post">
						<!-- BEGIN: Modal Body -->
						<input type="hidden" name="nota" id="" value="<?= $data->nota ?>">
						<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
							<div class="col-span-12 sm:col-span-12"> 
								<label for="modal-form-1" class="form-label text-center">Bayar</label>
								<input id="modal-form-1" type="number" class="form-control" required name="bayar" placeholder="Bayar...">
							</div>
						</div> <!-- END: Modal Body -->	
					</form>
					<!-- BEGIN: Modal Footer -->
					<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
							class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button type="submit"
							class="btn btn-primary w-20">Send</button> </div> <!-- END: Modal Footer -->
				</div>
			</div>
		</div> <!-- END: Modal Content -->
		<div class="box p-5 ">
			<div class="mb-5 text-lg">
				NO NOTA #<?= $data->nota ?>

			</div>
			<div class="flex items-center">
				<div class="w-1/4 flex-none">
					<div class="text-lg font-medium truncate text-danger">TAGIHAN</div>
					<div class="text-slate-500 mt-1"><?= number_format($data->tagihan,0,',',',') ?></div>
				</div>
				<div class="w-1/4 flex-none">
					<div class="text-lg font-medium truncate text-primary">TOTAL DIBAYARKAN</div>
					<div class="text-slate-500 mt-1"><?= number_format($data->nominal,0,',',',') ?></div>
				</div>
				<div class="w-1/4 flex-none">
					<div class="text-lg font-medium truncate">STATUS</div>
					<div class="text-slate-500 mt-1"><?= $data->status ?></div>
				</div>
			</div>
		</div>
	</div>

</div>
