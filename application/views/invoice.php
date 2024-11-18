<div class="content content--top-nav">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Invoice Layout
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export Word
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary font-semibold text-3xl">INVOICE</div>
				<div class="mt-2">Nota <span class="font-medium">#<?= $detail->nota ?? '-' ?></span></div>
                <div class="mt-1"><?= $detail[0]['tanggal'] ?? date('Y-m-d') ?></div>
            </div>
            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="text-lg font-medium text-primary mt-2"><?= $client['name'] ?? 'Unknown' ?></div>
                    <div class="mt-1"><?= $client['email'] ?? 'No Email' ?></div>
                    <div class="mt-1"><?= $client['address'] ?? 'No Address' ?></div>
                </div>
                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="text-lg font-medium text-primary mt-2">Left4code</div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($detail)): ?>
                            <?php foreach ($detail as $item): ?>
                                <tr>
                                    <td class="border-b dark:border-darkmode-400">
                                        <div class="font-medium whitespace-nowrap"><?= $item['nama_produk'] ?></div>
                                        <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap"><?= $item['deskripsi'] ?? 'No Description' ?></div>
                                    </td>
                                    <td class="text-right border-b dark:border-darkmode-400 w-32"><?= $item['jumlah'] ?></td>
                                    <td class="text-right border-b dark:border-darkmode-400 w-32">Rp<?= number_format($item['harga'], 0, ',', '.') ?></td>
                                    <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">Rp<?= number_format($item['jumlah'] * $item['harga'], 0, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="text-xl text-primary font-medium mt-2">Rp<?= number_format(array_sum(array_column($detail, 'total_harga')), 0, ',', '.') ?></div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
</div>
