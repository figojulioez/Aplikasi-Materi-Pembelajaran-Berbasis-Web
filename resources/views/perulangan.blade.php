@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<h3><b>Apa itu Loop?</b></h3>
		<br>
		<p>Loop dalam Bahasa Indonesia artinya putaran. Dalam JavaScript, maksudnya adalah <b>perulangan</b>. Jadi, <b>loop</b> adalah sekumpulan kode yang akan dijalankan berulang kali sampai batas yang ditentukan.</p>
		<br>
		<p>Sebagai contoh, coba tampilkan angka <b>1</b> sampai dengan <b>10</b> di console. Solusi seperti apakah yang kalian pikirkan? Apakah seperti ini?</p>
		<p>
			<img src="img/koding/loop1.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Coba bayangkan jika kalian disuruh untuk menampilkan angka <b>1</b> sampai <b>1000</b> pada console dengan cara di atas, mungkin jari kalian sudah pegal-pegal.</p>
		<br>
		<p>Nah untuk menghindari itu, kita bisa menggunakan <b>JavaScript Loop</b>.</p>
		<br>
		<p>Ada 3 jenis loop di JavaScript yang akan kita pelajari, yaitu:</p>
		<div>
			<ul class="bullets">
				<li><p><b>for</b></p></li>
				<li><p><b>while</b></p></li>
				<li><p><b>do while</b></p></li>
			</ul>
		</div>
		<br>
		<h3><b>For Loop</b></h3>
		<br>
		<p>Syntax yang digunakan ketika menggunakan <b>for</b> loop adalah sebagai berikut:</p>
		<p>
			<img src="img/koding/forLoop.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan kode diatas</p>
		<div>
			<ul class="bullets">
				<li><p><b>pernyataan1</b> digunakan untuk menentukan nilai awal berjalannya loop.</p></li>
				<li><p><b>pernyataan2</b> digunakan untuk mendefinisikan kondisi berjalannya sebuah loop. Apabila nilai kondisinya false, maka loop akan berakhir.</p></li>
				<li><p><b>pernyataan3</b> digunakan untuk menambah atau mengurangi nilai awal pada pernyataan1 setiap kali loop dijalankan.</p></li>
			</ul>
		</div>
		<br>
		<h5><b>Contoh Penggunaan</b></h5>
		<br>
		<p>Kita akan menampilkan angka <b>1</b> sampai dengan <b>10</b> di console. Caranya adalah:</p>
		<p>
			<img src="img/koding/forLoop2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan contoh di atas:</p>
		<br>
		<div>
			<ul type="bullets">
				<li><p><b>let i = 1</b> adalah pernyataan1. Kode tersebut berarti kita mendeklarasikan sebuah variabel baru bernama <b>i</b> dengan nilai awal <b>1</b>. Jadi, pada contoh di atas, loop akan dimulai dari angka <b>1</b>.</p></li>
				<li><p><b>i <= 10</b> adalah pernyataan2. Kode tersebut menentukan kondisi apakah loop bisa dijalankan. Loop akan terus berjalan apabila nilai variabel <b>i</b> masih di bawah atau sama dengan <b>10</b>. Pada contoh di atas, perulangan yang dimaksud adalah menampilkan nilai variabel <b>i</b> pada console.</p></li>
				<li><p><b>i++</b> adalah pernyataan3. Kode tersebut berarti, setiap melakukan satu perulangan, maka tambahkan nilai <b>i</b> dengan angka <b>1</b>.</p></li>
			</ul>
		</div>
		<br>
		<h3><b>Do While Loop</b></h3>
		<p>Syntax dalam penggunaan <b>do...while</b> loop adalah:</p>
		<p>
			<img src="img/koding/whileLoop.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<h5><b>Contoh Penggunaan</b></h5>
		<br>
		<p>Kita akan menampilkan angka 1 sampai dengan 10 di console dengan <b>do...while</b> loop, caranya adalah:</p>
		<p>
			<img src="img/koding/whileLoop2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan kode di atas:	</p>
		<div>
			<ul type="bullets">
				<li><p><b>let i = 1;</b> berarti kita mendeklarasikan variabel <b>i</b> dengan nilai awal <b>1</b>.</p></li>
				<li><p><b>do { console.log(i); i++; }</b> menentukan kode yang akan dijalankan ketika kondisi benar (<b>true</b>). Pada contoh di atas, program akan menampilkan nilai variabel <b>i</b> pada console dan kemudian menambahkan nilai variabel <b>i</b> dengan angka <b>1</b>.</p></li>
				<li><p><b>while (i <= 10)</b> menentukan kondisi dari kode blok <b>do {...}</b>, yaitu apabila variabel <b>i</b> bernilai kurang dari atau sama dengan <b>10</b>, maka jalankan semua kode di dalam <b>do {...}</b>.</p></li>
			</ul>
		</div>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/loop">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>



@endSection