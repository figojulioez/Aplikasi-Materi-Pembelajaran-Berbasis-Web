@extends("template.main")
@section("content")
@include('komponen.style')
<div class="container">
	<div class="row mt-3 ms-1 me-1">
		<h3><b>Operator Aritmatika</b></h3>
		<p>Operator aritmatika digunakan di operasi matematika yang melibatkan data dengan tipe number.</p>
		<br>
		<p>Operator-operator tersebut dapat dilihat pada tabel berikut ini:</p>
		<br>
		<div>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th>Operator</th>
						<th>Deskripsi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>+</td><td>Penjumlahan</td>
					</tr>
					<tr>
						<td>-</td><td>Pengurangan</td>
					</tr>
					<tr>
						<td>*</td><td>Perkalian</td>
					</tr>
					<tr>
						<td>/</td><td>Pembagian</td>
					</tr>
					<tr>
						<td>**</td><td>Eksponen (pangkat)</td>
					</tr>
					<tr>
						<td>%</td><td>Modulus (menghasilkan sisa hasil pembagian)</td>
					</tr>
					<tr>
						<td>++</td><td>Increment (menambah 1)</td>
					</tr>
					<tr>
						<td>--</td><td>Decrement (mengurangi 1)</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<p>Contoh penggunaan pada operasi matematika JavaScript:</p>
		<br>
		<h4><b>Penjumlahan</b></h4>
		<br>
		<p>
			<img src="img/koding/kodePenjumlahan.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Pengurangan</b></h4>
		<p>
			<img src="img/koding/kodePengurangan.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Perkalian</b></h4>
		<p>
			<img src="img/koding/kodePerkalian.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Pembagian</b></h4>
		<p>
			<img src="img/koding/kodePembagian.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Eksponen</b></h4>
		<img src="img/koding/kodeEksponen.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		<br>
		<h4><b>Modulus</b></h4>
		<p>
			<img src="img/koding/kodeModulus.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Increment (Tambah 1)</b></h4>
		<p>
			<img src="img/koding/kodeIncrement.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Contoh operasi di atas apabila dituliskan tanpa operator increment akan sama seperti ini:</p>
		<br>
		<p>
			<img src="img/koding/kodeIncrement2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Decrement (Kurang 1)</b></h4>
		<p>
			<img src="img/koding/kodeDecrement.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Contoh operasi di atas apabila dituliskan tanpa operator decrement akan sama seperti ini:</p>
		<br>
		<p>
			<img src="img/koding/kodeDecrement2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h3><b>Operator Assignment</b></h3>
		<br>
		<p>Assignment operator digunakan untuk memberikan nilai pada variabel.</p>
		<br>
		<div>
			<table class="table table-bordered text-center">
				<tr>
					<th>Assignment</th>
					<th>Operator</th>
					<th>Contoh Penggunaan</th>
					<th>Setara Dengan</th>
				</tr>
				<tr>
					<td>=</td>
					<td></td>
					<td>x=y</td>
					<td>x=y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>+</td>
					<td>x += y</td>
					<td>x = x + y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>-</td>
					<td>x -= y</td>
					<td>x = x - y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>*</td>
					<td>x *= y</td>
					<td>x = x * y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>/</td>
					<td>x /= y</td>
					<td>x = x / y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>%</td>
					<td>x %= y</td>
					<td>x = x % y</td>
				</tr>
				<tr>
					<td>=</td>
					<td>**</td>
					<td>x **= y</td>
					<td>x = x ** y</td>
				</tr>
			</table>
		</div>
		<br>
		<h3><b>Operator String</b></h3>
		<br>
		<p>String operator digunakan untuk menggabungkan dua atau lebih data string. Operasi ini biasa dikenal dengan sebutan <b>string concatenation.</b></p>
		<br>
		<p>Ada 2 macam string operator, yaitu:</p>
		<div class="container">
			<ul class="pc">
				<li><p><b>+</b></p></li>
				<li><p><b>+=</b></p></li>
			</ul>
		</div>
		<br>
		<p>Contoh penggunaan:</p>
		<br>
		<h4><b>Operator +</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorString.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Operator +=</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorString2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Oh iya, di JavaScript, jika kita menggabungkan data string dengan data number, maka hasil akhirnya juga akan menjadi string.</p>
		<br>
		<p>Contoh:</p>
		<br>
		<p>
			<img src="img/koding/operatorString3.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h3><b>Operator Perbandingan</b></h3>
		<br>
		<p>Operator perbandingan digunakan untuk membandingkan dua data atau nilai.</p>
		<br>
		<div>
			<table class="table table-bordered text-center">
				<tr>
					<th>Operator</th>
					<th>Deskripsi</th>
				</tr>
				<tr>
					<td>==</td><td>sama dengan (cek nilai)</td>
				</tr>
				<tr>
					<td>===</td><td>sama dengan (cek nilai dan tipe data)</td>
				</tr>
				<tr>
					<td>!=</td><td>tidak sama dengan (cek nilai)</td>
				</tr>
				<tr>
					<td>!==</td><td>tidak sama dengan (cek nilai dan tipe data)</td>
				</tr>
				<tr>
					<td>></td><td>lebih dari</td>
				</tr>
				<tr>
					<td><</td><td>kurang dari</td>
				</tr>
				<tr>
					<td>>=</td><td>lebih dari atau sama dengan</td>
				</tr>
				<tr>
					<td><=</td><td>kurang dari atau sama dengan</td>
				</tr>
				<tr>
					<td>? :</td><td>ternary operator</td>
				</tr>
			</table>
		</div>
		<br>
		<p>Contoh penggunaan di JavaScript:</p>
		<br>
		<h4><b>Operator ==</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorSamaDengan.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Mari kita coba perhatikan <b>bilangan == "10"</b>. Kenapa outputnya bisa true? Karena di dalam Javascript jika operand-nya berbeda tipe data, maka salah satunya akan dipaksa berubah tipe datanya agar mereka sama dan bisa dibandingkan.</p>
		<br>
		<div>
			<div class="px-2 py-1" style="background-color: pink;">
				<h4 style="font-family: verdana"> <b><i class="fa-solid fa-book-open"></i> Catatan</b></h4>
				<p>yang dimaksud dengan <b>operand</b> adalah nilai yang digunakan di dalam sebuah proses operasi. Misalnya dalam operasi penjumlahan 1 + 2, yang tergolong operandd adalah angka 1 + 3.</p>	
			</div>
		</div>
		<br>
		<h4><b>Operator ===</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorSamaDengan2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Kali ini, outputnya akan berupa true apabila kedua operandd memiliki nilai dan tipe data yang sama. Makanya pada baris kedua contoh kode diatas menghasilkan output false sebab kita memembandingkan bilangan 10 dengan string "10" yang berbeda tipe datanya.</p>
		<br>
		<h4><b>Operator !=</b></h4>
		<br>
		<p>
			<img src="img/koding/operatortidakSamaDengan.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Mungkin kalian agak bingung kalau melihat contoh di atas. Yang perlu kalian ketahui adalah operator <b>!=</b> akan menghasilkan output <b>false</b> apabila kedua operandd memiliki nilai yang sama, tidak terpengaruh sama tipe datanya.</p>
		<br>
		<h4><b>Operator !==</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorTidakSamaDengan2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Kali ini nilai dan tipe data akan dicek. Operator ini hanya akan mengeluarkan output false apabila nilai dan tipe data dari kedua operand sama.</p>		
		<br>
		<h4><b>Operator > (Lebih Dari)</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorLebihDari.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Operator >= (Lebih Dari atau Sama Dengan)</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorLebihDari2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Operator < (Kurang Dari)</b></h4>
		<br>
		<p>
			<img src="img/koding/operatorKurangDari.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Operator <= (Kurang Dari atau Sama Dengan)</b></h4>
		<p>
			<img src="img/koding/operatorKurangDari2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<h4><b>Operator Tenary</b></h4>
		<br>
		<p>Digunakan untuk memberikan nilai pada variabel sesuai dengan kondisi yang ditentukan.</p>
		<br>
		<p>Syntaxnya adalah:</p>
		<br>
		<p>
			<img src="img/koding/operatorTenary.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<p>Contoh:</p>
		<p>
			<img src="img/koding/operatorTenary2.png" alt="Console Tab" style="width: 90%;box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-webkit-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);-moz-box-shadow: 10px 13px 17px 0px rgba(0,0,0,0.14);">
		</p>
		<br>
		<p>Pada kode di atas, kondisi yang diberikan adalah <b>makanan === "daging"</b>. Karena kondisi tersebut bernilai <b>true</b>, maka yang dikembalikan adalah <b>"karnivora".</b></p>
		<br>
		<h3><b>Operator Logika</b></h3>
		<br>
		<p>Operator logika digunakan untuk menentukan logika antara dua kondisi atau nilai.</p>
		<div>
			<table class="table table-bordered text-center">
				<tr>
					<th>Operator</th>
					<th>Deskripsi</th>
				</tr>
				<tr>
					<td>&&</td><td>AND (Dan)</td>
				</tr>
				<tr>
					<td>!!</td><td>OR (Atau)</td>
				</tr>
				<tr>
					<td>!</td><td>NOT (Bukan)</td>
				</tr>
			</table>
		</div>
		<br>
		<p>Syntax dari operator logika di JavaScript itu seperti ini:</p>
		<br>
		<h4><b>Operator && (AND)</b></h4>
		<br>
		<div>
			<div class="" style="background-color: rgb(245,242,240);">
				<p class="py-1 ms-2"> kondisi1 && kondisi2</p>	
			</div>
		</div>
		<br>
		<p>Operator ini hanya akan menghasilkan output <b>true</b> apabila kedua operand-nya bernilai <b>true</b> (<b>kondisi1</b> dan <b>kondisi2</b> bernilai <b>true</b>).</p>
		<br>
		<h4><b>Operator || (OR)</b></h4>
		<br>
		<div>
			<div class="" style="background-color: rgb(245,242,240);">
				<p class="py-1 ms-2"> kondisi1 || kondisi2</p>	
			</div>
		</div>
		<br>
		<p>Operator ini akan menghasilkan output <b>true</b> apabila salah satu dari operand-nya bernilai <b>true</b> (<b>kondisi1</b> bernilai <b>true</b> atau <b>kondisi2</b> bernilai <b>true</b>.</p>
		<br>
		<h4><b>Operator ! (NOT)</b></h4>
		<br>
		<div>
			<div class="" style="background-color: rgb(245,242,240);">
				<p class="py-1 ms-2">!kondisi1</p>	
			</div>
		</div>
		<br>
		<p>Operator ini akan bernilai <b>true</b> apabila operand-nya bernilai <b>false</b>. Dan sebaliknya, operator akan mengembalikan <b>false</b> apabila operand-nya bernilai <b>true</b></p>
		<div class="d-flex mb-5 w-100 justify-content-center">
			<div class="w50 text-center">
				<h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
				<h6 class="text-center">Setelah membaca materi, ini saatnya kamu mengukur pengetahuanmu tentang materi ini. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
				</h6>
				<button class="btn btn-danger ">
					<a href="/Quiz/operator">Mulai Latihan</a>
				</button>
			</div>
		</div>
	</div>
</div>
@endSection