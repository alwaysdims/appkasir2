<div class="content content--top-nav">
	<div class="intro-y box">
		<div
			class="flex flex-col mt-5 sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
			<h2 class="font-medium text-base mr-auto">
				Profil
			</h2>
		</div>
		<div class="intro-y box">

			<div id="vertical-form" class="p-5">
				<div class="preview">
					<form class="form-control" action="<?= base_url('konfigurasi/update') ?>" method="post">

					<div>
						<label for="vertical-form-1" class="form-label">Nama CV</label>
						<input id="vertical-form-1" type="text" class="form-control" name="nama_cv" value="<?= $konfigurasi->nama ?>" placeholder="Nama CV"
							>
					</div>
					<div class="mt-3">
						<label for="vertical-form-1" class="form-label">Email</label>
						<input id="vertical-form-1" type="email" class="form-control" name="email" value="<?= $konfigurasi->email ?>" placeholder="example@gmail.com"
							>
					</div>
					<div class="mt-3">
						<label for="vertical-form-1" class="form-label">Alamat</label>
						<input id="vertical-form-1" type="text" class="form-control" name="alamat" value="<?= $konfigurasi->alamat ?>" placeholder="alamat"
							>
					</div>
					<div class="mt-3">
						<label for="vertical-form-1" class="form-label">No Telp</label>
						<input id="vertical-form-1" type="text" class="form-control" name="no_telp" value="<?= $konfigurasi->no_telp ?>" placeholder="+62 "
							>
					</div>
					
					<button class="btn btn-primary mt-5" type="submit" fdprocessedid="kaay8">Kirim</button>
					</form>
				</div>
				<div class="source-code hidden">
					<button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							icon-name="file" data-lucide="file" class="lucide lucide-file w-4 h-4 mr-2">
							<path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
							<polyline points="14 2 14 8 20 8"></polyline>
						</svg> Copy example code </button>
					<div class="overflow-y-auto mt-3 rounded-md">
						<pre id="copy-vertical-form"
							class="source-preview"> <code class="html hljs xml"> <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"vertical-form-1"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"vertical-form-1"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"example@gmail.com"</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
						<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-3"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"vertical-form-2"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"vertical-form-2"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"secret"</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
						<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-check mt-5"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"vertical-form-3"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-check-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">""</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-check-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"vertical-form-3"</span>&gt;</span>Remember me<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn btn-primary mt-5"</span>&gt;</span>Login<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></code> <textarea class="absolute w-0 h-0 p-0"></textarea></pre>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
