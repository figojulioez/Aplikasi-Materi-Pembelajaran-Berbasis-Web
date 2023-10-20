@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<p>
			Sebelum mulai masuk mempelajari JavaScript lebih dalam, ada baiknya kita mempelajari dahulu bagaimana cara menyisipkan JavaScript di dalam HTML. Hal ini ditujukan agar kode JavaScript kita bisa dibaca oleh browser, dan bisa berinteraksi dengan kode HTML kita.
		</p>
		<br>
		<p>
			Ada dua cara, yaitu:
		</p>
		<br>
		<div class="container">
			<ul type="bullets">
				<li class="pc"><p>
					<b>Internal Javascript</b>, yaitu menyisipkan kode JavaScript langsung di dalam file HTML.
				</p></li>
				<li class="pc"><p>
					<b>External JavaScript</b>, yaitu membuat file JavaScript sendiri dan menyambungkannya dengan file HTML.
				</p></li>
			</ul>
		</div>
		<!-- Internal Javascript -->
		<h3><b>Internal Javascript</b></h3>
		<br>
		<p>{{ $kode }}</p>
		<p>Contoh : </p>
		<p>
			<img src="img/koding/kodeInternal.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>

		<!-- Eksternal Javascript -->
		<h3><b>Eksternal Javascript</b></h3>
		<p>
			Cara kedua untuk menyisipkan kode JavaScript di dalam kode HTML adalah dengan menggunakan eksternal JavaScript. Eksternal JavaScript yaitu membuat file JavaScript yang terpisah dengan file HTML.
		</p>
		<br>
		<p>
			{{ $kode2 }}
		</p>
		<br>
		<p>
			Kita akan membuat dua buah file yaitu <b>script.js</b> dan <b>index.html</b>
		</p>
		<br>
		<div>
			<div class="py-1 px-1" style="background-color: pink;">
				<h4 style="font-family: verdana"> <b><i class="fa-solid fa-book-open"></i> Catatan</b></h4>
				<ul class="pc" type="bullets">
					<li><p>File HTML memiliki extension <b>.html</b></p></li>
					<li><p>File CSS memiliki extension <b>.css</b></p></li>
					<li><p>File JavaScript memiliki extension <b>.js</b></p></li>
				</ul>	
			</div>
		</div>
		<p>{{ $kode3 }}</p>
		<br>
		<p>
			<img src="img/koding/kodeExternal.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Sama seperti internal JavaScript, hasil dari cara ini jika dibuka di console akan menghasikan tulisan "Halo Semua!"</p>
		<br>
		<p>Oh iya, kalau kita lihat ada dua garis miring di depan kata File script.js kira-kira tahu tidak fungsinya apa?</p>
		<br>
		<p>{{ $kode4 }}</p>
		<br>
		<p>			
			<img src="img/koding/kodeKomen.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Untuk comment yang lebih dari 2 baris, kita bisa menulis <b>/*</b> di awal dan <b>*/</b> di akhir comment tersebut.</p>
		<br>
		<p>
			<img src="img/koding/kodeKomen2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/mjdh">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>
@endSection