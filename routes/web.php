<?php

use Illuminate\Support\Facades\Route;
use config\templateString;
use App\Http\Controllers\login;
use App\Http\Controllers\regisController;
use App\Models\soal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return redirect('/menyisipkan-javascript-di-dalam-html');
});

Route::get('/dashboard', function () {
	$quizTerakhir = false;
	$sertifikat = false;

	if ( soal::where('mjdh', 1)->where('variabel', 1)->where('operator', 1)->where('kondisi', 1)->where('loop', 1)->where('fungsi', 1)->where('user_id', auth()->user()->id)->exists() ) {
		$quizTerakhir = true;
	}

	if ( soal::where('all', 1)->where('user_id', auth()->user()->id)->exists() ) {
		$sertifikat = true;
	}


	return view('dashboard', [
		"halaman" => "dashboard",
		"hlmn" => "Skillfull - Dashboard",
		'quizTerakhir' => $quizTerakhir,
		'sertifikat' => $sertifikat
	]);
})->middleware('auth');

Route::get('/Quiz/{slug}', function ($slug) {
	if ( $slug == 'mjdh' ) {
		$hlmn = "Quiz - Menyisipkan Javascript di dalam HTML";	
	} else if ( $slug == 'variabel' ) {
		$hlmn = "Quiz - Variabel dan Tipe Data Javascript";
	} else if ( $slug == 'operator' ) {
		$hlmn = "Quiz - Operator Javascript";
	} else if ( $slug == 'kondisi' ) {
		$hlmn = "Quiz - Javascript Conditional";
	} else if ( $slug == 'fungsi' ) {
		$hlmn = "Quiz - Fungsi Javascript";
	} else if ( $slug == 'loop' ) {
		$hlmn = "Quiz - Javascript Loop";
	} else if ( $slug == 'all' ) {
		$hlmn = "Quiz - Javascript All";
		if ( !soal::where('mjdh', 1)->where('variabel', 1)->where('operator', 1)->where('kondisi', 1)->where('loop', 1)->where('fungsi', 1)->exists() ) {
		return redirect('/dashboard');
		
	}
		
	}



	return view('kuiz', [
		'quest' => $slug,
		'hlmn' => $hlmn
	]); 
})->middleware('auth');

Route::get('/menyisipkan-javascript-di-dalam-html', function () {
	return view("MJDH", [
		"halaman" => "MJDH",
		"kode" => templateString::kode1(),
		"kode2" => templateString::kode2(),
		"kode3" => templateString::kode3(),
		"kode4" => templateString::kode4(),
		"hlmn" => "Skillfull - Menyisipkan Javascript di dalam HTML"
	]);
});

Route::get('/variabel-dan-tipe-data-javascript', function () {
	return view("variabel", [
		"hlmn" => "Skillfull - Variabel dan Tipe Data Javascript",
		"halaman" => "variabel",
	]);
});

Route::get('/operator-javascript', function () {
	return view("operator-javascript",[
		"hlmn" => "Skillfull - Operator Javascript",
		"halaman" => "operator-javascript",
	]);
});

Route::get('/javascript-kondisi', function () {
	return view("kondisi",[
		"hlmn" => "Skillfull - Javascript Conditional",
		"halaman" => "javascript-kondisi",
	]);
});

Route::get('/logout', [login::class, 'logout']);

Route::get('/fungsi-javascript', function () {
	return view("fungsiJavascript", [
		"hlmn" => "Skillfull - Fungsi Javascript",
		"halaman" => "fungsi-javascript",
	]);
});

Route::get("/login", [login::class, "show"])->name('login')->middleware('guest');

Route::post("/login", [login::class, "authenticate"]);

Route::get("/javascript-loop", function () {
	return view("perulangan", [
		"hlmn" => "Skillfull - Javascript Loop",
		"halaman" => "loop-javascript",
	]);
});

Route::get('/registrasi', function () {
	return view("registrasi");
});


Route::post('/registrasi', [regisController::class, 'store']);

Route::get('/check/{slug}/{nilai}', function ($slug, $nilai) {

	if ( $slug == 'mjdh' ) {
		soal::where('user_id', auth()->user()->id)->update(['mjdh' => 1]);
		return redirect('/dashboard');	
	} else if ( $slug == 'variabel' ) {
		soal::where('user_id', auth()->user()->id)->update(['variabel' => 1]);
		return redirect('/dashboard');
	} else if ( $slug == 'operator' ) {
		soal::where('user_id', auth()->user()->id)->update(['operator' => 1]);
		return redirect('/dashboard');
	} else if ( $slug == 'kondisi' ) {
		soal::where('user_id', auth()->user()->id)->update(['kondisi' => 1]);
		return redirect('/dashboard');
	} else if ( $slug == 'fungsi' ) {
		soal::where('user_id', auth()->user()->id)->update(['fungsi' => 1]);
		return redirect('/dashboard');
	} else if ( $slug == 'loop' ) {
		soal::where('user_id', auth()->user()->id)->update(['loop' => 1]);
		return redirect('/dashboard');
	} else if ( $slug == 'all' ) {
		soal::where('user_id', auth()->user()->id)->update(['all' => 1]);
		soal::where('user_id', auth()->user()->id)->update(['nilai' => $nilai]);
		return redirect('/dashboard');
	}


});


Route::get('/sertifikat', function () {
	return view('sertifikat');
})->middleware('auth');