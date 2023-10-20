<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hlmn }}</title>
    <link rel="icon" type="icon" href="{{ asset('img/gurita.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Mulai Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Aturan Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Kamu hanya punya <span>15 detik</span> untuk menjawab 1 pertanyaan.</div>
            <div class="info">2. Jawaban yang kamu pilih tidak bisa di ganti.</div>
            <div class="info">3. Kamu tidak bisa keluar dari Quiz.</div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar</button>
            <button class="restart">Lanjutkan</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Waktu</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Soal berikutnya</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Kamu sudah menyelesaikan Quiz ini!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart" style="display: none;">Replay Quiz</button>
            <button class="quit">Keluar Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="{{ asset('kuiz/' . $quest . '.js') }}"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript">
        quit_quiz.onclick = ()=>{
            document.location.href = '/check/{{$quest}}/' + nilai; 
        }
    </script>


</body>
</html>