<!-- Perubahan script coding untuk bisa menampilkan about dalam bentuk tampilan bootstrap (AdminLTE)  -->
<div class="box-header with-border">
	<h3 class="box-title"><strong>Anda sedang menggunakan aplikasi SIMBUSME <?= AmbilVersi()?></strong></h3>
</div>
<div class="box-body">
	<div class="box-group" id="accordion">
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aplikasi SIMBUSME</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="box-body">
					<p>SIMBUSME adalah aplikasi Sistem Informasi BS Melati (SIMBUSME) yang dikembangkan sejak Mei 2016. SIMBUSME dirancang dan dikelola supaya terbuka dan dapat dikembangkan bersama-sama oleh komunitas peduli SIMBUSME. Informasi lebih lanjut dapat dilihat di <a href= https://github.com/SIMBUSME/SIMBUSME>https://github.com/SIMBUSME/SIMBUSME</a>.</p>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Apakah SIMBUSME ?</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi Sistem Informasi BS Melati (SIMBUSME) adalah sistem olah data dan informasi berbasis komputer yang dapat dikelola oleh pemerintah dan komunitas BS Melati dalam dua ranah:</p>
					<dl>
						<dt>1. Offline</dt>
						<dd>Aplikasi diinstall dalam komputer server di kantor BS Melati dan dioperasikan sebagai server (pusat data) yang bersifat lokal. Karena tidak terhubung ke internet, SIMBUSME offline hanya bisa diakses dalam jaringan lokal. Sistem offline ini direkomendasikan untuk diterapkan dalam penggunaan aplikasi SIMBUSME harian. Database dari hasil proses olah data secara offline itu dapat diunggah ke sistem online secara berkala.</dd>						<dt>2. Online</dt>
						<dd>SIMBUSME akan optimal jika terhubung ke internet sebagai sistem online berbasis web. SIMBUSME online akan otomatis berfungsi juga sebagai website BS Melati. Website BS Melati ini memiliki fungsi yang terbagi dalam dua bagian, yakni bagian depan yang bisa diakses oleh publik dan bagian dalam yang hanya bisa diakses oleh administrator sistem.</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manajemen Akses SIMBUSME</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi SIMBUSME dirancang untuk mengelola data dasar BS Melati dan informasi BS Melati. Data dasar yang dikelola meliputi data dasar kependudukan dan data dasar aset/sumber daya BS Melati. Data dasar ini menjadi tanggung jawab pemerintah BS Melati dalam pengelolaannya. Hanya pengguna (user) dari pemerintah BS Melati dan tim yang dikoordinasikan oleh pemerintah BS Melati saja yang akan memiliki kewenangan dan hak akses ke dalam sistem. Sementara, user di luar pemerintah BS Melati hanya akan memiliki akses terbatas pada fungsi olah informasi untuk website BS Melati.</p>
					<p>Tingkat user (pengguna) dalam SIMBUSME:</p>
					<p>
						<ol>
							<li>
								Administrator : adalah orang/tim yang bertanggung jawab penuh atas olah data dan informasi dalam SIMBUSME dan website BS Melati. Orang/tim ini ditunjuk oleh pemerintah BS Melati disahkan dengan surat keputusan kepala BS Melati.
								<ol>
									<li>Peran olah data : entry, edit, delete data dasar</li>
									<li>Peran olah informasi : tulis, edit, publish artikel website</li>
								</ol>
							</li>
							<li>
								Operator: adalah orang/tim yang bertugas membantu administrator mengelola data dan informasi, tetapi dengan kewenangan yang lebih terbatas.
								<ol>
									<li>Peran olah data : entry, edit data dasar</li>
									<li>Peran olah informasi : tulis, edit artikel website.</li>
								</ol>
							</li>
							<li>
								Redaksi: adalah orang/tim yang bertugas sebagai redaksi media website BS Melati dan hanya dapat melakukan olah informasi berupa artikel website.
								<ol>
									<li>Peran olah informasi : tulis, edit artikel. Redaksi boleh mengubah semua artikel, termasuk menjadikan headline, aktif/non-aktifkan, masukkan ke slider, dsbnya</li>
								</ol>
							</li>
							<li>
								Kontributor: adalah orang/tim yang bertugas menulis artikel untuk disetujui redaksi untuk ditampilkan di website BS Melati.
								<ol>
									<li>Peran olah informasi : tulis, edit artikel yang dibuatnya sendiri. Kontributor tidak dapat menjadikan artikel manapun menjadi headline, aktif/non-aktifkan atau memasukkan ke slider.</li>
								</ol>
							</li>
						</ol>
					</p>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Tahapan Membangun SIMBUSME</a>
				</h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
				<div class="box-body">
					<P>Bagaimana memulai membangun Sistem Informasi BS Melati (SIMBUSME) di BS Melati kita? Caranya sangat mudah, tetapi pasti perlu proses yang harus sabar dan cermat untuk dijalani. Siapa pun Anda, baik perorangan maupun mewakili organisasi/lembaga, dapat mencoba mulai membangun SIMBUSME di BS Melati masing-masing mengikuti langkah-langkah berikut.</P>
					<ol>
						<li>Bentuk tim kerja bersama pemerintah BS Melati</li>
						<li>Diskusikan basis data apa saja yang diperlukan untuk warga</li>
						<li>Himpun data kependudukan warga dari Kartu Keluarga (KK)</li>
						<li>Dapatkan aplikasi softwarenya di https://github.com/SIMBUSME/SIMBUSME/releases</li>
						<li>Install aplikasi software SIMBUSME di komputer BS Melati</li>
						<li>Entry data penduduk ke SIMBUSME</li>
						<li>Basis data kependudukan sudah bisa dimanfaatkan</li>
						<li>Diskusikan rencana pengembangan SIMBUSME sesuai kebutuhan BS Melati</li>
						<li>Sebarluaskan informasi BS Melati melalui beragam media untuk warga</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Hak Cipta, Syarat, Dan Ketentuan</a>
				</h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi Sistem Informasi BS Melati (SIMBUSME) dibangun dan dikembangkan pada awalnya oleh COMBINE Resource Institution sejak tahun 2009. Sistem ini dikelola dengan merujuk pada lisensi GNU General Public License Version 3.</p>
					<p>Dengan lisensi GPL v3, semua ubahan SIMBUSME juga berlisensi GPL v3, yaitu bersifat sumber terbuka.<p>
					<p>SIMBUSME dikembangkan sejak Mei 2016, dan bebas untuk dimanfaatkan dan dikembangkan oleh semua BS Melati.</p>
					<p>Sejak Januari 2019, SIMBUSME dikelola oleh Perkumpulan BS Melati Digital Terbuka (OpenBS Melati). OpenBS Melati adalah pemegang hak cipta utama SIMBUSME.
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Kontak Dan Informasi</a>
				</h4>
			</div>
			<div id="collapse6" class="panel-collapse collapse">
				<div class="box-body">
					<ol>
						<li>Website OpenBS Melati, pengelola SIMBUSME: </li>
						<a href="http://openBS Melati.id/" target="_blank">http://openBS Melati.id </a>
						<li>Website resmi SIMBUSME: </li>
						<a href="http://SIMBUSME.my.id/" target="_blank">http://SIMBUSME.my.id </a>
						<li>Group Facebook, tempat mendapatkan bantuan dan berbagi pengalaman: </li>
						<a href="https://www.facebook.com/groups/SIMBUSME/" target="_blank">Forum Pengguna dan Pegiat SIMBUSME </a>
						<li>Tempat mengunduh rilis SIMBUSME:</li>
						<a href="https://github.com/SIMBUSME/SIMBUSME/releases" target="_blank">https://github.com/SIMBUSME/SIMBUSME/releases </a>
						<li>Panduan SIMBUSME:</li>
						<a href="https://github.com/SIMBUSME/SIMBUSME/wiki" target="_blank">https://github.com/SIMBUSME/SIMBUSME/wiki </a>
						<li>Channel Youtube SIMBUSME: </li>
						<a href="https://www.youtube.com/channel/UCvZuSYtrWYuE8otM4SsdT0Q" target="_blank">Kumpulan tutorial video SIMBUSME </a>
						<li>Repository (tempat pengelolaan) SIMBUSME:</li>
						<a href="https://github.com/SIMBUSME/SIMBUSME" target="_blank">https://github.com/SIMBUSME/SIMBUSME </a>
						<li>Tempat mendaftarkan masalah dan usulan fitur:</li>
						<a href="https://github.com/SIMBUSME/SIMBUSME/issues" target="_blank" sclass="text-green">https://github.com/SIMBUSME/SIMBUSME/issues </a>
						<li>Forum diskusi teknis pengembangan SIMBUSME:</li>
						<a href="https://SIMBUSME.slack.com" target="_blank">https://SIMBUSME.slack.com </a>
					</ol>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#donasi">Donasi</a>
				</h4>
			</div>
			<div id="donasi" class="panel-collapse collapse">
				<div class="box-body">
					<h4>SIMBUSME SELALU GRATIS</h4>
					<div>
						<p>SIMBUSME selalu gratis dan bebas digunakan dan dikembangkan BS Melati. SIMBUSME berlisensi GNU General Public License Version 3, yaitu Open Source, di mana scriptnya selalu bebas diperoleh dan disesuaikan BS Melati.</p>
					</div>
					<h4>SIMBUSME DIKEMBANGKAN KOMUNITAS</h4>
					<div>
						<p>SIMBUSME dikembangkan oleh komunitas relawan yang peduli dan meluangkan waktu dan keahlian mereka secara sukarela untuk terus mengembangkan SIMBUSME.</p>
						<p>Selain menyumbangkan waktu mereka, ada kalanya relawan SIMBUSME juga mengeluarkan dana pribadi untuk mendukung kegiatan SIMBUSME.</p>
					</div>
					<h4>SIMBUSME MEMERLUKAN BANTUAN</h4>
					<div>
						<p>Untuk terus berkembang, SIMBUSME memerlukan bantuan komunitas SIMBUSME, termasuk donasi. Semua donasi bersifat sukarela dan sama sekali tidak ada keharusan. </p>
						<p>Donasi anda akan memungkinkan SIMBUSME dikembangkan terus secara berkesinambungan, supaya bisa terus disempurnakan dan bisa dimanfaatkan oleh sebanyak mungkin BS Melati di seluruh Nusantara. </p>
						<p>
							Cara mengirimkan donasi dan informasi lebih lanjut ada di:
						</p>
						<a href="https://www.openBS Melati.id/donasi" class="btn btn-social btn-flat btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Suplemen"><i class="fa fa-heart"></i> Donasi Pengembangan SIMBUSME</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-header with-border"></div>
</div>