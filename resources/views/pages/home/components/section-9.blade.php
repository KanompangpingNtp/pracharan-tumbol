<style>
    .bg-section9 {
        background-image: url('{{ asset('images/home/section-9/bg-section9.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .map-container {
        position: relative;
        width: 100%;

    }

    .map-container img {
        width: 200px;
        position: absolute;
        cursor: pointer;
        transition: all 0.3s ease-in-out;

    }

    /* ทำให้เรืองแสงเมื่อ hover */
    .map-container img:hover {
        filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.7));
        transform: scale(1.1);
        z-index: 900;
    }

    /* กล่องข้อความ */
    .tooltip {
        position: absolute;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 14px;
        opacity: 0;
        z-index: 999;
        transition: all 0.3s ease-in-out;
    }

    /* แสดงกล่องเมื่อ hover */
    .map-container img:hover+.tooltip {
        opacity: 100;
    }

    /* ตำแหน่งของแต่ละโซน */
    .piece-1 {
        top: 300px;
        left: 0px;
    }

    .piece-13 {
        top: 360px;
        left: 140px;
    }

    .piece-2 {
        top: 410px;
        left: 250px;
    }

    .piece-4 {
        top: 490px;
        left: 360px;
        z-index: 4;
    }

    .piece-5 {
        top: 540px;
        left: 480px;
        z-index: 5;
    }

    .piece-3 {
        top: 390px;
        left: 460px;
        z-index: 3;
    }

    .piece-8 {
        top: 460px;
        left: 570px;
        z-index: 4;
    }

    .piece-12 {
        top: 350px;
        left: 660px;
        z-index: 2;
    }

    .piece-11 {
        top: 320px;
        left: 760px;
        z-index: 3;
    }

    .piece-9 {
        top: 280px;
        left: 770px;
        z-index: 1;
    }

    .piece-7 {
        top: 290px;
        left: 890px;
        z-index: 2;
    }

    .piece-6 {
        top: 170px;
        left: 890px;
    }

    .piece-10 {
        top: 190px;
        left: 1010px;
    }

    .could-right {
        position: absolute;
        top: 110px;
        left: 800px;
        animation: move-right 4s infinite alternate ease-in-out;
    }

    .could-left {
        position: absolute;
        top: 210px;
        left: 0px;
        animation: move-left 4s infinite alternate ease-in-out;
    }

    /* เมฆทางขวา เคลื่อนที่ซ้าย-ขวา */
    @keyframes move-right {
        0% {
            left: 800px;
        }

        100% {
            left: 900px;
        }
    }

    /* เมฆทางซ้าย เคลื่อนที่ซ้าย-ขวา */
    @keyframes move-left {
        0% {
            left: 0px;
        }

        100% {
            left: 100px;
        }
    }

    .sun {
        position: absolute;
        top: 0px;
        left: 1000px;
        width: 100px;
        /* กำหนดขนาด */
        height: 160px;
        animation: move-right 4s infinite alternate ease-in-out;
    }
</style>

<main class="bg-section9 d-flex">
    <div class="container d-flex flex-column justify-content-start align-items-start">
        <img src="{{ asset('images/home/section-9/title-section-9.png') }}" alt="title" class="img-fluid">
        <div class="map-container d-none d-xxl-block">
            <!-- หมู่ 1 -->
            <img src="{{ asset('images/home/section-9/หมู่1.png') }}" alt="1" class="piece-1">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/1.png') }}" alt="1" style="width: 600px;">
            </div>

            <!-- หมู่ 13 -->
            <img src="{{ asset('images/home/section-9/หมู่13.png') }}" alt="13" class="piece-13">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/13.png') }}" alt="13" style="width: 600px;">
            </div>

            <!-- หมู่ 2 -->
            <img src="{{ asset('images/home/section-9/หมู่2.png') }}" alt="2" class="piece-2">
            {{-- <div class="tooltip" style="top: 400px; left: 250px;">หมู่ 2</div> --}}

            <!-- หมู่ 4 -->
            <img src="{{ asset('images/home/section-9/หมู่4.png') }}" alt="4" class="piece-4">
            {{-- <div class="tooltip" style="top: 480px; left: 360px;">หมู่ 4</div> --}}

            <!-- หมู่ 5 -->
            <img src="{{ asset('images/home/section-9/หมู่5.png') }}" alt="5" class="piece-5">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/5.png') }}" alt="5" style="width: 600px;">
            </div>

            <!-- หมู่ 3 -->
            <img src="{{ asset('images/home/section-9/หมู่3.png') }}" alt="3" class="piece-3"
                style="width: 290px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/3.png') }}" alt="3" style="width: 600px;">
            </div>

            <!-- หมู่ 8 -->
            <img src="{{ asset('images/home/section-9/หมู่8.png') }}" alt="8" class="piece-8"
                style="width: 290px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/8.png') }}" alt="8" style="width: 600px;">
            </div>

            <!-- หมู่ 12 -->
            <img src="{{ asset('images/home/section-9/หมู่12.png') }}" alt="12" class="piece-12">
            {{-- <div class="tooltip" style="top: 350px; left: 660px;">หมู่ 12</div> --}}

            <!-- หมู่ 11 -->
            <img src="{{ asset('images/home/section-9/หมู่11.png') }}" alt="11" class="piece-11"
                style="width: 250px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/11.png') }}" alt="11" style="width: 600px;">
            </div>

            <!-- หมู่ 9 -->
            <img src="{{ asset('images/home/section-9/หมู่9.png') }}" alt="9" class="piece-9">
            {{-- <div class="tooltip" style="top: 280px; left: 770px;">หมู่ 9</div> --}}

            <!-- หมู่ 7 -->
            <img src="{{ asset('images/home/section-9/หมู่7.png') }}" alt="7" class="piece-7"
                style="width: 230px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/7.png') }}" alt="7" style="width: 600px;">
            </div>

            <!-- หมู่ 6 -->
            <img src="{{ asset('images/home/section-9/หมู่6.png') }}" alt="6" class="piece-6"
                style="width: 290px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/6.png') }}" alt="6" style="width: 600px;">
            </div>

            <!-- หมู่ 10 -->
            <img src="{{ asset('images/home/section-9/หมู่10.png') }}" alt="10" class="piece-10"
                style="width: 300px;">
            <div class="tooltip" style="top: -10px; left: 160px;">
                <img src="{{ asset('images/home/section-9/10.png') }}" alt="10" style="width: 600px;">
            </div>

            <!-- เมฆขวา -->
            <img src="{{ asset('images/home/section-9/เมฆขวา.png') }}" alt="could-right" class="could-right">

            <!-- เมฆซ้าย -->
            <img src="{{ asset('images/home/section-9/เมฆซ้าย.png') }}" alt="could-left" class="could-left">

            <!-- ดวงอาทิตย์ -->
            <img src="{{ asset('images/home/section-9/ดวงอาทิตย์.png') }}" alt="sun" class="sun"
                style="width: 180px;">
        </div>
        <div class="row d-xxl-none">
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/1.png') }}" alt="1" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/13.png') }}" alt="13" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/5.png') }}" alt="5" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/3.png') }}" alt="3" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/8.png') }}" alt="8" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/11.png') }}" alt="11" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/7.png') }}" alt="7" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/6.png') }}" alt="6" class="img-fluid">
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <img src="{{ asset('images/home/section-9/10.png') }}" alt="10" class="img-fluid">
            </div>
        </div>

    </div>
</main>
