@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<h3><b>Apa itu JavaScript Conditional?</b></h3>
		<br>
		<p>Kalau diterjemahkan ke dalam bahasa Indonesia, <b>conditional</b> artinya adalah <b>persyaratan</b>. Lalu, kalau dalam konsep JavaScript, conditional itu kira-kira seperti apa?</p>
		<br>
		<p>Ketika kita menulis sebuah aplikasi, seringkali akan ada beberapa operasi yang akan dijalankan dengan persyaratan tertentu. Persyaratan itu sendiri nanti kita yang tentukan.</p>
		<br>
		<p>Sebagai contoh dalam kehidupan sehari-hari, jika kita lapar, maka kita makan, dan jika kita tidak lapar maka kita tidak makan. Dari contoh tersebut, persyaratan/kondisinya adalah jika kita lapar atau jika kita tidak lapar. Sementara, keputusan yang dilaksanakan adalah makan atau tidak makan.</p>
		<br>
		<p>Dari contoh tersebut, ada kata kunci yang bisa kita ambil, yaitu <b>jika</b> dan <b>maka. Jika</b> menyatakan sebuah <b>kondisi</b>, dan <b>maka</b> menyatakan <b>keputusan</b> yang dilaksanakan.</p>
		<br>
		<p>Sama seperti di JavaScript, kita juga bisa menyatakan sebuah kondisi dan menyatakan keputusan (program) yang dijalankan.</p>
		<br>
		<p>Di JavaScript ada dua cara menulis perintah conditional, yaitu:</p>
		<br>
		<div>
			<div>
				<ul class="pc">
					<li><p>Menggunakan <b>if, else if</b>, dan <b>else</b>.</p></li>
					<li><p>Menggunakan <b>switch</b> dan <b>case</b>.</p></li>
				</ul>
			</div>
		</div>
		<br>
		<p>Mari kita bahas satu-persatu.</p>
		<br>
		<h3><b>Menggunakan if, else if dan else</b></h3>
		<br>
		<p>Syntax dalam menggunakan <b>if</b>, <b>else if</b> dan <b>else</b> adalah sebagai berikut.</p>
		<br>
		<h5><b>if</b></h5>
		<p>Digunakan apabila hanya ada 1 kondisi dan 1 keputusan yang dijalankan.</p>
		<p>
			<img src="img/koding/if.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h5><b>if...else</b></h5>
		<p>Digunakan apabila ada 1 kondisi dan 2 keputusan yang dijalankan.</p>
		<p>
			<img src="img/koding/ifElse.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h5><b>if...else if...else</b></h5>
		<p>Digunakan apabila ada beberapa kondisi dan beberapa keputusan yang dijalankan.</p>
		<p>
			<img src="img/koding/ifElse2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h5><b>Contoh Penggunaan</b></h5>
		<div>
			<div>
				<ul type="bullets" class="pc">
					<li><p><p>"SANGAT MEMUASKAN" jika nilai di atas <b>80</b></p></p></li>
					<li><p><p>"MEMUASKAN" jika nilai berada di antara <b>60</b> hingga <b>80</b>, dan</p></p></li>
					<li><p><p>"JANGAN MENYERAH, COBA LAGI!" jika nilai di bawah <b>60</b></p></p></li>
				</ul>
			</div>
		</div>
		<br>
		<p>Ternyata, Andi mendapatkan nilai <b>95</b>. Maka, Andi seharusnya mendapatkan kalimat "SANGAT MEMUASKAN" bukan?</p>
		<br>
		<p>Bagaimana cara membuat aplikasinya? Yaitu seperti berikut ini:</p>
		<br>
		<p>
			<img src="img/koding/kondisi.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan kode di atas:</p>
		<div>
			<div>
				<ul type="bullets" class="pc">
					<li><p><b>if (nilaiAndi > 80) { console.log('SANGAT MEMUASKAN'); }</b>artinya jika variabel <b>nilaiAndi</b> bernilai di atas <b>80</b>, maka aplikasi akan menampilkan kalimat "SANGAT MEMUASKAN".</p></li>
					<li><p><b>else if (nilaiAndi >= 60 && nilaiAndi <= 80) { console.log('MEMUASKAN'); }</b>, artinya jika variabel <b>nilaiAndi</b> berada di atas atau sama dengan <b>60</b> dan nilaiAndi berada di bawah atau sama dengan <b>80</b> (yang bisa diartikan sebagai jika <b>nilaiAndi</b> berada di antara <b>60</b> hingga <b>80</b>), maka aplikasi akan menampilkan kalimat "MEMUASKAN".</p></li>
					<li><p><b>else { console.log('JANGAN MENYERAH, COBA LAGI!');}</b>, artinya selain kedua kondisi yang telah disebutkan di <b>if</b> dan <b>else if</b>, maka aplikasi akan menampilkan kalimat "JANGAN MENYERAH, COBA LAGI!".</p></li>
				</ul>
			</div>
		</div>
		<br>
		<h3><b>Menggunakan switch dan case</b></h3>
		<br>
		<p>Jika kita memiliki banyak pilihan kondisi, menggunakan perintah if, else if dan else akan kurang efisien karena kode yang ditulis akan menjadi sangat panjang sekali.</p>
		<p>"Alternatifnya apa dong?"</p>
		<p>Ada cara yang lebih efisien yaitu dengan menggunakan perintah switch dan case.</p>
		<p>Syntaxnya seperti ini:</p>
		<p>
			<img src="img/koding/switch.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<h5><b>Contoh Penggunaan</b></h5>
		<p>Seandainya kita disuruh menulis sebuah aplikasi yang akan menampilkan jenis seragam apa yang harus dikenakan murid sesuai dengan harinya. Contohnya seperti di bawah ini:</p>
		<p>
			<img src="img/koding/switch2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Penjelasan kode di atas:</p>
		<div>
			<div>
				<ul class="pc" type="bullets">
					<li><p><b>switch</b> digunakan untuk mendeklarasikan pernyataan yang menjadi patokan kondisi. Pada contoh di atas, kita akan melihat variabel <b>hari</b> digunakan sebagai patokan kondisi untuk merubah nilai dari variabel <b>seragamSekolah</b> sesuai dengan nilai <b>hari</b>-nya (kondisi).</p></li>
					<li><p><b>case</b> digunakan untuk menulis masing-masing kondisi dari hasil pernyataan yang akan diperiksa. Pada contoh di atas, jika variabel <b>hari</b> bernilai <b>"senin"</b>, maka variabel <b>seragamSekolah</b> bernilai <b>"kemeja putih bawahan merah"</b>, dan seterusnya.</p></li>
					<li><p><b>break</b> digunakan untuk menghentikan program berjalan ketika sudah menemukan kondisi yang tercapai. Pada contoh di atas, program akan berhenti pada <b>case</b> bernilai <b>"senin"</b>.</p></li>
					<li><p><b>default</b> adalah keputusan yang akan dijalankan apabila hasil pernyataan di <b>switch</b> tidak ada yang sesuai dengan masing-masing kondisi di <b>case</b> (tidak ada kondisi yang tercapai). Fungsinya sama seperti <b>else</b> di topik sebelumnya . Pada contoh di atas, apabila nilai variabel <b>hari</b> yang dimasukkan misalnya <b>"sabtu"</b>, maka <b>seragamSekolah</b> akan bernilai <b>"baju bebas"</b>.</p></li>	
				</ul>
			</div>
		</div>
		<p>Apabila kita mempunyai dua atau lebih kondisi yang berbeda, tetapi keputusan yang akan dijalankan sama, kita bisa menggabungkan beberapa perintah <b>case</b> tanpa menggunakan <b>break</b> dan hanya menggunakan <b>break</b> di kondisi terakhir.</p>
		<p>Misalnya pada contoh kita di atas, murid diharuskan mengenakan seragam <b>"kemeja putih bawahan merah"</b> untuk hari <b>"senin"</b> sampai <b>"kamis"</b>, maka kita bisa mengubah kode di atas menjadi:</p>
		<p>
			<img src="img/koding/switch3.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/kondisi">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>
@endSection