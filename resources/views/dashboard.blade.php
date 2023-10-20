@extends("template.main")
<style type="text/css">
  .timeline {
    display: flex;
    flex-direction: column;
  }

  .timeline-step {
    display: flex;
    align-items: center;
    margin: 10px 0px 0px 20px;
    position: relative;
  }

  .timeline-step::before {
    content: "";
    position: absolute;
    top: 0;
    left: 30%;

    height: 100%;
    width: 2px;
    background-color: #ccc;
  }

  .timeline-step:last-child::before {
    display: none;
  }

  .timeline-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 50px;
    background-color: #333;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
  }

  .timeline-content {
    margin-left: 20px;
  }

  .timeline-content h3 {
    margin: 0;
    font-size: 18px;
  }

  .timeline-content p {
    margin: 10px 0;
    font-size: 14px;
  }

  .right {
    margin-left: 431px;
  }

  .right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 100%;
    height: 100%;
    width: 2px;
    background-color: #ccc;
    margin-left: 500px;
  }
</style>
@section("dashboard")
<div class="mar container">
  <header class="w3-container mb-3">
    <h3><b><i class="fa fa-dashboard"></i> Dashboard Saya</b></h3>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="timeline">
      <div class="timeline-step">
        @if( auth()->user()->soal->mjdh == true )
        <div class="timeline-icon bg-success">
          <i class="fa fa-check"></i>
          @else 
          <div class="timeline-icon bg-danger">
            <i class="fa fa-close"></i>
            @endIf
          </div>
          <div class="timeline-content">
            <h6><b>Menyisipkan Javascript di Dalam HTML</b></h6>
            @if( auth()->user()->soal->mjdh == true )
            <p>Anda sudah menyelesaikan materi ini.</p>
            @else 
            <p>Anda belum menyelesaikan materi ini.</p>
            @endif
          </div>
        </div>
        <div class="timeline-step right">
          <div class="timeline-icon">
            @if( auth()->user()->soal->variabel == true )
            <div class="timeline-icon bg-success">
              <i class="fa fa-check"></i>
              @else 
              <div class="timeline-icon bg-danger">
                <i class="fa fa-close"></i>
                @endIf
              </div>
            </div>
            <div class="timeline-content">
              <h6><b>Variabel dan Tipe Data Javascript</b></h6>
              @if( auth()->user()->soal->variabel == true )
              <p>Anda sudah menyelesaikan materi ini.</p>
              @else 
              <p>Anda belum menyelesaikan materi ini.</p>
              @endif
            </div>
          </div>
          <div class="timeline-step">
            <div class="timeline-icon">
              @if( auth()->user()->soal->operator == true )
              <div class="timeline-icon bg-success">
                <i class="fa fa-check"></i>
                @else 
                <div class="timeline-icon bg-danger">
                  <i class="fa fa-close"></i>
                  @endIf
                </div>
              </div>
              <div class="timeline-content">
                <h6><b>Operator Javascript</b></h6>
                @if( auth()->user()->soal->operator == true )
                <p>Anda sudah menyelesaikan materi ini.</p>
                @else 
                <p>Anda belum menyelesaikan materi ini.</p>
                @endif
              </div>
            </div>
            <div class="timeline-step right">
              <div class="timeline-icon">
                @if( auth()->user()->soal->kondisi == true )
                <div class="timeline-icon bg-success">
                  <i class="fa fa-check"></i>
                  @else 
                  <div class="timeline-icon bg-danger">
                    <i class="fa fa-close"></i>
                    @endIf
                  </div>
                </div>    
                <div class="timeline-content">
                  <h6><b>Javascript Conditional</b></h6>
                  @if( auth()->user()->soal->operator == true )
                  <p>Anda sudah menyelesaikan materi ini.</p>
                  @else 
                  <p>Anda belum menyelesaikan materi ini.</p>
                  @endif
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-icon">
                  @if( auth()->user()->soal->loop == true )
                  <div class="timeline-icon bg-success">
                    <i class="fa fa-check"></i>
                    @else 
                    <div class="timeline-icon bg-danger">
                      <i class="fa fa-close"></i>
                      @endIf
                    </div>
                  </div>    
                  <div class="timeline-content">
                    <h6><b>Javascript Loop</b></h6>
                    @if( auth()->user()->soal->kondisi == true )
                    <p>Anda sudah menyelesaikan materi ini.</p>
                    @else 
                    <p>Anda belum menyelesaikan materi ini.</p>
                    @endif
                  </div>
                </div>
                <div class="timeline-step right">
                  <div class="timeline-icon">    
                    @if( auth()->user()->soal->fungsi == true )
                    <div class="timeline-icon bg-success">
                      <i class="fa fa-check"></i>
                      @else 
                      <div class="timeline-icon bg-danger">
                        <i class="fa fa-close"></i>
                        @endIf
                      </div>
                    </div>    
                    <div class="timeline-content">
                      <h6><b>Fungsi Javascript</b></h6>
                      @if( auth()->user()->soal->fungsi == true )
                      <p>Anda sudah menyelesaikan materi ini.</p>
                      @else 
                      <p>Anda belum menyelesaikan materi ini.</p>
                      @endif
                    </div>
                  </div>
                </div>
                


              </div>
            </div>

            @if ( $quizTerakhir != false && $sertifikat != true )
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <div class="container">
                <div class="row mt-3 ms-1 me-1">
                  <div class="d-flex mb-5 w-100 justify-content-center pq">
                    <div class="w50 text-center">
                      <h3 class="text-center"><b>Yuk uji pengetahuanmu dengan latihan!</b></h3>
                      <h6 class="text-center">Setelah membaca semua materi, ini saatnya kamu mengukur pengetahuanmu tentang materi yang kamu pelajari. Materi ini tetap bisa kamu akses saat mengerjakan latihan.
                      </h6>
                      <button class="btn btn-danger ">
                        <a href="/Quiz/all">Mulai Latihan</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </main>
            @endif

            @if ( $sertifikat == true )
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <div class="container">
                <div class="row mt-3 ms-1 me-1">
                  <div class="d-flex mb-5 w-100 justify-content-center pq">
                    <div class="w50 text-center">
                      <h3 class="text-center"><b>Ambil Sertifikat Mu!</b></h3>
                      <h6 class="text-center">Selamat !!!, karena kamu telah menyelesaikan semua materi dari kami, kamu mendapatkan sertifikat.
                      </h6>
                      <button class="btn btn-danger ">
                        <a href="/sertifikat">Ambil Sertifikat</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </main>

            @endif
            @endSection