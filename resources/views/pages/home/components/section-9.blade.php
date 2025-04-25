<style>
    .bg-section9 {
        background-image: url('{{ asset('images/home/section-9/bg-section9.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 120vh;
        padding: 4rem 0;
    }

    .map-container {
        position: relative;
        width: 100%;
        height: 100%;
        white-space: nowrap;
        /* ป้องกันการขึ้นบรรทัดใหม่ของเนื้อหาภายใน */
    }

    .map-container img {
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
    .tooltip-section9 {
        position: absolute;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 14px;
        opacity: 0;
        z-index: 999;
        width: 30rem;
        height: 17rem;
        top: 80px;
        left: 400px;
        transition: all 0.3s ease-in-out;
    }

    .tooltip-section9 img {
        width: 100%;
        height: 100%;
    }

    /* แสดงกล่องเมื่อ hover */
    .map-container img:hover+.tooltip-section9 {
        opacity: 100;
    }

    /* ตำแหน่งของแต่ละโซน */
    .piece-1 {
        top: 100px;
        left: 90px;
        width: 210px;
    }

    .piece-13 {
        top: 195px;
        left: 0px;
        width: 200px;
    }

    .piece-2 {
        top: 320px;
        left: 0px;
        width: 200px;
    }

    .piece-4 {
        top: 420px;
        left: 30px;
        width: 230px;
        z-index: 4;
    }

    .piece-5 {
        top: 525px;
        left: 30px;
        width: 280px;
        z-index: 5;
    }

    .piece-3 {
        top: 430px;
        left: 250px;
        width: 230px;
        z-index: 3;
    }

    .piece-8 {
        top: 540px;
        left: 290px;
        width: 220px;
        z-index: 4;
    }

    .piece-12 {
        top: 380px;
        left: 460px;
        width: 190px;
        z-index: 2;
    }

    .piece-11 {
        top: 540px;
        left: 500px;
        width: 170px;
        z-index: 3;
    }

    .piece-9 {
        top: 370px;
        left: 640px;
        width: 180px;
        z-index: 1;
    }

    .piece-7 {
        top: 520px;
        left: 650px;
        width: 180px;
        z-index: 2;
    }

    .piece-6 {
        top: 370px;
        left: 790px;
        width: 300px;
    }

    .piece-10 {
        top: 510px;
        left: 820px;
        width: 200px;
    }

    .piece-14 {
        top: 540px;
        left: 1000px;
        width: 200px;
    }

    @media (max-width: 1400px) {
        .piece-1 {
            top: 70px;
            left: 120px;
            width: 170px;
        }

        .piece-13 {
            top: 165px;
            left: 50px;
            width: 170px;
        }

        .piece-2 {
            top: 275px;
            left: 50px;
            width: 170px;
        }

        .piece-4 {
            top: 360px;
            left: 60px;
            width: 200px;
            z-index: 4;
        }

        .piece-5 {
            top: 450px;
            left: 60px;
            width: 240px;
            z-index: 5;
        }

        .piece-3 {
            top: 430px;
            left: 250px;
            width: 230px;
            z-index: 3;
        }

        .piece-8 {
            top: 540px;
            left: 290px;
            width: 220px;
            z-index: 4;
        }

        .piece-12 {
            top: 380px;
            left: 460px;
            width: 190px;
            z-index: 2;
        }

        .piece-11 {
            top: 540px;
            left: 500px;
            width: 170px;
            z-index: 3;
        }

        .piece-9 {
            top: 370px;
            left: 640px;
            width: 180px;
            z-index: 1;
        }

        .piece-7 {
            top: 520px;
            left: 650px;
            width: 180px;
            z-index: 2;
        }

        .piece-6 {
            top: 370px;
            left: 790px;
            width: 300px;
        }

        .piece-10 {
            top: 510px;
            left: 820px;
            width: 200px;
        }

        .piece-14 {
            top: 540px;
            left: 1000px;
            width: 200px;
        }

        .tooltip-section9 {
            top: -10px;
            left: 220px;
            transform: scale(0.8);
        }
    }

    @media (max-width: 1200px) {
        .piece-1 {
            top: 300px;
            left: 0px;
            width: 130px;
        }

        .piece-13 {
            top: 350px;
            left: 80px;
            width: 130px;
        }

        .piece-2 {
            top: 380px;
            left: 150px;
            width: 130px;
        }

        .piece-4 {
            top: 430px;
            left: 220px;
            width: 130px;
            z-index: 4;
        }

        .piece-5 {
            top: 465px;
            left: 305px;
            width: 130px;
            z-index: 5;
        }

        .piece-3 {
            top: 360px;
            left: 290px;
            width: 200px;
            z-index: 3;
        }

        .piece-8 {
            top: 410px;
            left: 360px;
            width: 190px;
            z-index: 4;
        }

        .piece-12 {
            top: 325px;
            left: 430px;
            width: 150px;
            z-index: 2;
        }

        .piece-11 {
            top: 323px;
            left: 490px;
            width: 160px;
            z-index: 3;
        }

        .piece-9 {
            top: 282px;
            left: 515px;
            width: 130px;
            z-index: 1;
        }

        .piece-7 {
            top: 305px;
            left: 570px;
            width: 150px;
            z-index: 2;
        }

        .piece-6 {
            top: 193px;
            left: 585px;
            width: 220px;
        }

        .piece-10 {
            top: 226px;
            left: 646px;
            width: 230px;
        }

        .tooltip-section9 {
            top: -10px;
            left: 90px;
            transform: scale(0.8);
        }
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
    <div class="container d-flex flex-column justify-content-start align-items-center align-items-xxl-start ">
        <img src="{{ asset('images/home/section-9/title-section-9.png') }}" alt="title" class="img-fluid"
            style="width: 50%; height:10%;">
        <div class="map-container ">
            <!-- หมู่ 1 -->
            <img src="{{ asset('images/home/section-9/อันดับ1.png') }}" alt="1" class="piece-1">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่1.png') }}" alt="1">
            </div>

            <!-- หมู่ 13 -->
            <img src="{{ asset('images/home/section-9/อันดับ2.png') }}" alt="13" class="piece-13">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่13.png') }}" alt="13">
            </div>

            <!-- หมู่ 2 -->
            <img src="{{ asset('images/home/section-9/อันดับ3.png') }}" alt="2" class="piece-2">
            {{-- <div class="tooltip" style="top: 400px; left: 250px;">หมู่ 2</div> --}}

            <!-- หมู่ 4 -->
            <img src="{{ asset('images/home/section-9/อันดับ4.png') }}" alt="4" class="piece-4">
            {{-- <div class="tooltip" style="top: 480px; left: 360px;">หมู่ 4</div> --}}

            <!-- หมู่ 5 -->
            <img src="{{ asset('images/home/section-9/อันดับ5.png') }}" alt="5" class="piece-5">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่5.png') }}" alt="5">
            </div>

            <!-- หมู่ 3 -->
            <img src="{{ asset('images/home/section-9/อันดับ6.png') }}" alt="3" class="piece-3">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่3.png') }}" alt="3">
            </div>

            <!-- หมู่ 8 -->
            <img src="{{ asset('images/home/section-9/อันดับ7.png') }}" alt="8" class="piece-8">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่8.png') }}" alt="8">
            </div>

            <!-- หมู่ 12 -->
            <img src="{{ asset('images/home/section-9/อันดับ8.png') }}" alt="12" class="piece-12">
            {{-- <div class="tooltip" style="top: 350px; left: 660px;">หมู่ 12</div> --}}

            <!-- หมู่ 11 -->
            <img src="{{ asset('images/home/section-9/อันดับ9.png') }}" alt="11" class="piece-11">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่11.png') }}" alt="11">
            </div>

            <!-- หมู่ 9 -->
            <img src="{{ asset('images/home/section-9/อันดับ10.png') }}" alt="9" class="piece-9">
            {{-- <div class="tooltip" style="top: 280px; left: 770px;">หมู่ 9</div> --}}

            <!-- หมู่ 7 -->
            <img src="{{ asset('images/home/section-9/อันดับ11.png') }}" alt="7" class="piece-7">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่7.png') }}" alt="7">
            </div>

            <!-- หมู่ 6 -->
            <img src="{{ asset('images/home/section-9/อันดับ12.png') }}" alt="6" class="piece-6">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่6.png') }}" alt="6">
            </div>

            <!-- หมู่ 10 -->
            <img src="{{ asset('images/home/section-9/อันดับ13.png') }}" alt="10" class="piece-10">
            <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/หมู่10.png') }}" alt="10">
            </div>
            <!-- บ่อน้ำ -->
            <img src="{{ asset('images/home/section-9/อันดับ14.png') }}" alt="14" class="piece-14">
            {{-- <div class="tooltip-section9">
                <img src="{{ asset('images/home/section-9/10.png') }}" alt="14">
            </div> --}}

            {{-- <!-- เมฆขวา -->
            <img src="{{ asset('images/home/section-9/เมฆขวา.png') }}" alt="could-right" class="could-right">

            <!-- เมฆซ้าย -->
            <img src="{{ asset('images/home/section-9/เมฆซ้าย.png') }}" alt="could-left" class="could-left">

            <!-- ดวงอาทิตย์ -->
            <img src="{{ asset('images/home/section-9/ดวงอาทิตย์.png') }}" alt="sun" class="sun"
                style="width: 180px;"> --}}
        </div>
    </div>
</main>
