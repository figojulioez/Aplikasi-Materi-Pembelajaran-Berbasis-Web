@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<h3><b>Mengenal Fungsi (Function) Javascript</b></h3>
		<br>
		<p>Apa yang dimaksud dengan <b>Fungsi (function)</b> di JavaScript?</p>
		<br>
		<p>Di konsep JavaScript, funsi bisa diilustrasikan sebagai berikut:</p>
		<br>
		<p>Seandainya kita mempunyai sebuah mesin pembuat kue. Kita bisa memasukan bahan baku seperti tepung terigu, telur, gula, air, dan bahan lainnya ke dalam mesin tersebut, kemudian mesin itu akan mengolah bahan-bahan tersebut yang akhirnya akan menghasilkan kue.</p>
		<br>
		<p>Nah, dari gambaran tersebut, mesin pembuat kue adalah fungsi (function). Tepung terigu, telur, gula, air, dan bahan lain untuk membuat kue adalah <b>input (parameter)</b> dari sebuah fungsi. Kemudian kue yang dihasilkan dari proses pengolahan mesin kue adalah <b>hasil (return value).</b></p>
		<br>
		<h3><b>Mendeklarasikan Fungsi</b></h3>
		<br>
		<p>Fungsi dapat berdiri sendiri atau disimpan di dalam sebuah variabel.</p>
		<br>
		<p>Cara mendeklarasikannya seperti ini:</p>
		<br>
		<p>
			<img src="img/koding/kodeFungsi.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Fungsi dapat dipanggil cukup dengan menambahkan tanda kurung <b>()</b> setelah nama fungsi tersebut. Dalam dua contoh di atas, pemanggilan fungsinya adalah sebagai berikut:</p>
		<br>
		<p>
			<img src="img/koding/kodeFungsi2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Contoh:</p>
		<p>
			<img src="img/koding/kodeFungsi3.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Pada contoh kedua di atas, return value-nya adalah <b>"Hallo, nama saya Sarah."</b>. Bedakan <b>return</b> dengan <b>console.log()</b> ya.</p>
		<br>
		<p><b>console.log()</b> hanya menampilkan informasi ke dalam tab console JavaScript, sedangkan <b>return</b> akan mengembalikan sebuah nilai ke tempat di mana fungsi itu dipanggil.</p>
		<br>
		<p>Kalau bingung coba lihat contoh kode berikut:</p>
		<br>
		<p>
			<img src="img/koding/kodeFungsi4.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Kalau kita lihat fungsi <b>berkenalan()</b> tadi, return valuenya adalah <b>"Halo, nama saya Sarah."</b>. Nilai dari return ini akan dikembalikan ke tempat pemanggilan fungsi tersebut, sehingga kode di atas saat dijalankan sebenarnya akan menjadi:</p>
		<p>
			<img src="img/koding/kodeFungsi5.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h3><b>Paramater & Argument</b></h3>
		<br>
		<p>Hati-hati, istilah <b>paramater</b> dan <b>argument</b> suka dianggap sama, jadi pemakaian kedua kata ini suka terbalik-balik.</p>
		<br>
		<p><b>Parameter</b> adalah syarat input yang harus dimasukan ke dalam suatu fungsi dan dideklarasikan bersama dengan deklarasi fungsi. Sementara <b>argument</b> adalah nilai yang dimasukan ke dalam suatu fungsi, sesuai dengan persyaratan parameter, di mana argument dituliskan bersamaan dengan pemanggilan fungsi.</p>
		<br>
		<p>Bisa digambarkan seperti ini:</p>
		<p>
			<img src="img/koding/kodeParameter.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan kode di atas:</p>
		<div>
			<ul class="pc">
				<li><p><b>angka1</b> & <b>angka2</b> adalah parameter. Pada contoh di atas, parameter harus bertipe number, agar bisa diolah oleh fungsi, yaitu perkalian kedua parameter.</p></li>
				<li><p><b>2</b> & <b>6</b> adakah argument. Sesuai kan dengan syarat parameter? Yap, mereka bertipe number.</p></li>
			</ul>
		</div>
		<h3><b>Lingkup Global vs Lingkup Lokal</b></h3>
		<p>Sekarang kita akan belajar tentang lingkup dari sebuah variabel. Di JavaScript, ada istilah <b>lingkup global (global scope)</b> dan <b>lingkup lokal (local scope)</b>, apakah perbedaanya? Mari kita pelajari bersama di bawah ini.</p>
		<br>
		<h4><b>Lingkup Global</b></h4>
		<br>
		<p><b>Lingkup global</b> adalah ketika sebuah variabel bisa diakses dari mana saja, baik di dalam maupun di luar dari suatu fungsi atau blok (group) kode.</p>
		<br>
		<p>Contoh:</p>
		<br>	
		<p>
			<img src="img/koding/kodeLingkupGlobal.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Pada contoh di atas, fungsi variabel <b>olahraga</b> bisa diakses di dalam fungsi <b>namaAtlet</b> dan bahkan di dalam blok <b>if</b> walaupun variabel <b>olahraga</b> tidak dideklarasikan di dalam fungsi/blok tersebut. Ini dikarenakan variabel <b>olahraga</b> yang dideklarasikan di luar fungsi namaAtlet memiliki lingkup global, jadi bisa diakses dari mana saja selama ada di dalam lingkup variabel tersebut.</p>
		<br>
		<h4><b>Lingkup Lokal</b></h4>
		<br>
		<p>Sebaliknya, <b>linkup lokal</b> adalah ketika sebuah variabel hanya bisa diakses di dalam sebuah fungsi atau blok kode. Semua variabel yang dideklarasikan di dalam sebuah fungsi/blok hanya bisa di dalam fungsi/blok tersebut saja.</p>
		<br>
		<p>Jadi, lingkup lokal bisa dibagi lagi menjadi dua tipe:</p>
		<div>
			<ul class="pc">
				<li><p><b>linkup fungsi (function scope)</b></p></li>
				<li><p><b>lingkup blok (block scope)</b></p></li>
			</ul>
		</div>
		<br>
		<p>Mari kita gunakan contoh sebelumnya dan ubah perintah <b>console.log</b> menjadi:</p>
		<p>
			<img src="img/koding/kodeLingkupLokal.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Pada contoh di atas, perintah <b>console.log(noKobe)</b> akan mengembalikan nilai error karena kita mencoba mengakses variabel <b>noKobe</b> di luar lingkup di mana dia dideklarasikan (yaitu di dalam blok <b>if</b> saja). Sedangkan perintah <b>console.log(noMessi)</b> akan menghasilkan output <b>10</b> karena variabel <b>noMessi</b> dideklarasikan di luar blok <b>if</b> jadi semua kode di dalam blok <b>if</b> tersebut mempunyai akses ke variabel itu.</p>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/fungsi">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>
@endSection