@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<h3><b>Mendeklarasikan Variabel</b></h3>
		<br>
		<p>Cara mendeklarasikan sebuah variabel adalah dengan kata kunci <b>let</b> atau <b>const</b>s dan diikuti dengan nama variabelnya, seperti ini:</p>
		<br>
		<div>
			<div class="" style="background-color: rgb(245,242,240);">
				<ul class="pc" type="none">
					<li><p> let namaVariabel1 = "hello";</p></li>
					<li><p> const namaVariabel2 = "world";</p></li>
				</ul>
			</div>
		</div>
		<br>
		<p>Dalam menamakan variabel, kalian pun perlu mengikuti beberapa ketentuan sebagai berikut:</p>
		<br>
		<div>
			<ol>
				<li class="pc"><p>Menggunakan konvensi <b>camelCase</b>, yaitu menggunakan huruf kecil pada permulaan kata, dan jika nama variabel terdiri dari 2 kata atau lebih, maka kata kedua dan berikutnya diawali dengan huruf besar. (Ini sebenarnya bukan syarat mutlak; hanya kebiasaan. Nanti kalian akan menemukan konvensi lain seperi <b>PascalCase</b> saat belajar JavaScript lebih lanjut);</p></li>
				<li class="pc mt-2"><p>
					Nama variabel boleh diawali dengan underscore(_), huruf besar (jika diharuskan), dan $.
				</p></li>
				<li class="pc mt-2"><p>
					Nama variabel tidak diawali dengan angka,<b> @, *, #, !, %, (), -, +.</b>
				</p></li>
				<li class="pc mt-2"><p>
					Tidak boleh menggunakan kata kunci JavaScript seperti <b>boolean, break, else, extends, dan lain-lain.</b>
				</p></li>
				<li class="pc mt-2"><p>
					Antara kata pertama dan kata kedua tidak diberi spasi atau dash(-);
				</p></li>
				<li class="pc mt-2"><p>
					Karena JavaScript bersifat case-sensitive, maka penamaan juga case-sensitive (jadi variabel hitung dengan variabel Hitung itu berbeda).
				</p></li>
			</ol>
		</div>
		<br>
		<p>Contoh:</p>
		<br>
		<p>
			
			<img src="img/koding/kodeVariabel.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h3><b>Tipe Data Javascript</b></h3>
		<br>
		<p>Sebuah variabel bisa kita isi dengan suatu data. Caranya adalah dengan menggunakan = setelah nama variabel, lalu diikuti dengan datanya.</p>
		<br>
		<p>Contohnya seperti ini:</p>
		<br>
		<p>
			<img src="img/koding/kodeTipeData.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Pada contoh di atas, variabel nama bernilai Stefanus dan tipe datanya adalah string. Tipe data string memiliki ciri khas yaitu nilai data dibungkus dengan tanda ' atau ".</p>
		<br>
		<p>Variabel <b>namaIbuKandung</b> juga memiliki nilai yang bertipe data string <b>Clara</b>. Lalu apa yang membedakan kedua variabel tersebut?</p>
		<br>
		<div>
			<ol class="pc">
				<li><p>Variabel yang dideklarasikan menggunakan kata kunci <b>let</b> dapat diubah nilainya. Misalnya kita ingin mengubah variabel <b>nama</b> tadi menjadi <b>Albert</b>, kita cukup memberinya data tersebut seperti ini:</p></li>
				<p>
					<img src="img/koding/kodeTipeData2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
				</p>
				<li><p>Sementara variabel yang dideklarasikan menggunakan kata kunci <b>const</b> tidak dapat diubah nilainya; sudah konstan. Jika kita tetap mencoba untuk memberinya nilai seperti di bawah ini, akan muncul error.</p></li>
				<p>
					<img src="img/koding/kodeTipeData3.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
				</p>
			</ol>
		</div>
		<div>
			<div class="py-1 px-1" style="background-color: pink;">
				<h4 style="font-family: verdana"> <b><i class="fa-solid fa-book-open"></i> Catatan</b></h4>
				<p>Namun terdapat 2 pengecualian dalam penggunaan kata kunci const. Variabel yang memiliki tipe data array atau objek bisa diubah nilai element atau propertinya meskipun menggunakan kata kunci const saat dideklarasikan. Kalian akan belajar ini di topik selanjutnya.</p>
			</div>
		</div>
		<br>
		<p>Kembali ke pembahasan tipe data. Variabel umur memiliki nilai 20 yang mana termasuk tipe data number. Tipe data ini bisa berupa:</p>
		<br>
		<div>
			<ul class="pc">
				<li><p>integer (seperti 1, 2, dan 3)</p></li>
				<li><p>atau float (seperti 3.14, 2.718, dan 1.618)</p></li>
			</ul>
		</div>
		<br>
		<p>Selanjutnya, variabel <b>apakahSudahMenikah</b> bernilai <b>false</b> dengan tipe data boolean.</p>
		<br>
		<p>Tipe boolean ini terdiri dari 2 nilai:</p>
		<br>
		<div>
			<ul class="pc">
				<li><p><b>true</b> yang memiliki nilai benar</p></li>
				<li><p><b>false</b> yang memiliki nilai salah</p></li>
			</ul>
		</div>
		<br>
		<p>Terakhir, variabel <b>jumlahAnak</b> bernilai undefined, karena memang tidak diisi dengan nilai apapun. Jika variabel tidak kita beri sebuah nilai, secara default (standar) ia memiliki nilai undefined.</p>
		<br>
		<hr>
		<p>Untuk merangkum, berikut adalah 7 tipe data yang ada dalam JavaScript:</p>
		<br>
		<div>
			<ul class="pc">
				<li><p><b>string</b> - deretan karakter yang diapit oleh sepasang tanda kutip;</p></li>
				<li class="mt-2"><p><b>number</b> - bilangan bulat, pecahan, dan lain-lain;</p></li>
				<li class="mt-2"><p><b>boolean</b> - nilai benar dari sebuah pernyataan yang dituliskan sebagai true atau false;</p></li>
				<li class="mt-2"><p><b>null</b> - sebuah nilai yang berarti kosong atau menunjuk pada nilai yang tidak ada;</p></li>
				<li class="mt-2"><p><b>undefined</b> - berbeda dari null, undefined menandakan kondisi variabel yang belum diberi sebuah nilai. Jadi pernyataan "nilai variabel itu adalah undefined" sebenarnya kurang tepat, sebab variabelnya memang tidak mempunyai sebuah nilai;</p></li>
				<li class="mt-2"><p><b>symbol</b> - sebuah nilai unik yang dihasilkan tiap kali kita memanggil fungsi Symbol(). Nilai unik ini memiliki beberapa kegunaan seperti memberi nomor identifikasi unik dan berperan sebagai nama properti unik sebuah objek;</p></li>
				<li class="mt-2"><p><b>object</b> - sebuah kumpulan pasangan properti dan nilai. Seperti objek dalam kehidupan sehari-hari saja. Misalnya objek Apel memiliki properti warna dengan nilai merah.</p></li>
			</ul>
		</div>
		<br>
		<h3><b>Menampilkan Data di Console</b></h3>
		<br>
		<p>Browser pada umumnya mempunyai tab console yang bisa digunakan untuk menampilkan data <b>console.log</b> dari kode JavaScript. Untuk mengaktifkan tab console di Chrome, bisa dilakukan dengan pilih menu <b>View</b> => <b>Developer</b> => <b>Developer Tools</b> atau dengan tekan tombol <b>F12</b> atau kombinasi tombol <b>Ctrl-Shift-I.</b></p>
		<br>
		<p>
			<img src="img/console-tab.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Kenalan dulu yuk dengan <b>console.log</b>. Apa itu <b>console.log</b> dan apakah kegunaannya?</p>
		<br>
		<p><b>console.log</b> adalah salah satu syntax JavaScript untuk menampilkan nilai suatu variabel atau hasil operasi di tab console.</p>
		<br>
		<p>Contoh:</p>
		<br>
		<p>
			<img src="img/koding/mConsole.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>
			<img src="img/console-log.png" alt="JavaScript console.log" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Untuk apa kita menggunakan console.log?</p>
		<br>
		<p>Dengan <b>console.log</b>, output dari variabel atau operasi yang kita masukkan tidak akan kelihatan di halaman website dan hanya bisa tampil di tab console. Dengan begitu, output tersebut tidak akan mengganggu tampilan website kamu.</p>
		<br>
		<p><b>console.log</b> juga sering digunakan developer ketika mau debug/investigasi kesalahan di kode yang ditulis.</p>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/variabel">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>
@endSection