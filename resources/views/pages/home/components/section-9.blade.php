<style>
    .bg-section9 {
        background-image: url('{{ asset('images/home/section-9/bg-section9.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0 4rem 0;
        z-index: 0;
        position: relative;
        overflow: hidden;
    }

    .map-container {
        position: relative;
        width: 100%;
        height: auto;
        white-space: nowrap;
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



    .could-right-on {
        position: absolute;
        top: -75px;
        right: -4rem;
        height: 10rem;
        z-index: -1;
        animation: move-right 10s infinite alternate ease-in-out;
    }

    .could-right-center {
        position: absolute;
        top: 130px;
        right: -4rem;
        height: 15rem;
        z-index: -1;
        animation: move-right-two 20s infinite alternate ease-in-out;
    }

    .could-right-bottom {
        position: absolute;
        bottom: 260px;
        right: 1rem;
        height: 8rem;
        z-index: -1;
        animation: move-right-three 15s infinite alternate ease-in-out;
    }

    .drone-right {
        position: absolute;
        bottom: 260px;
        right: 1rem;
        height: 8rem;
        z-index: -1;
        animation: drone-move-right 8s infinite alternate ease-in-out;
    }

    /* เมฆทางขวา เคลื่อนที่ซ้าย-ขวา */
    @keyframes move-right {
        0% {
            right: 10rem;
        }

        100% {
            right: -4rem;
        }
    }

    @keyframes move-right-two {
        0% {
            right: 10rem;
        }

        100% {
            right: -4rem;
        }
    }

    @keyframes move-right-three {
        0% {
            right: -1rem;
        }

        100% {
            right: 8rem;
        }
    }

    @keyframes drone-move-right {
        0% {
            bottom: 0rem;
        }

        25% {
            right: 5rem;
        }

        75% {
            right: -2rem;
        }

        100% {
            bottom: 260px;
        }
    }

    .could-left-on {
        position: absolute;
        top: 0px;
        left: -4rem;
        height: 20rem;
        z-index: -1;
        animation: move-left-on 15s infinite alternate ease-in-out;
    }

    .could-left-center {
        position: absolute;
        bottom: 390px;
        left: 19rem;
        height: 5rem;
        z-index: -1;
        animation: move-left-two 10s infinite alternate ease-in-out;
    }

    .could-left-bottom {
        position: absolute;
        bottom: 150px;
        left: 1rem;
        height: 12rem;
        z-index: -1;
        animation: move-left-three 15s infinite alternate ease-in-out;
    }

    .drone-left {
        position: absolute;
        top: 10rem;
        left: -4rem;
        height: 10rem;
        z-index: -1;
        animation: drone-move-left 8s infinite alternate ease-in-out;
    }

    /* เมฆทางซ้าย เคลื่อนที่ซ้าย-ขวา */
    @keyframes move-left-on {
        0% {
            left: 0px;
        }

        100% {
            left: 100px;
        }
    }

    @keyframes move-left-two {
        0% {
            left: 25rem;
        }

        100% {
            left: 19rem;
        }
    }

    @keyframes move-left-three {
        0% {
            left: 1rem;
        }

        100% {
            left: -4rem;
        }
    }

    @keyframes drone-move-left {
        0% {
            top: 0rem;
        }

        25% {
            left: -4rem;
        }

        75% {
            left: 0rem;
        }

        100% {
            bottom: 10rem;
        }
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
            top: 460px;
            left: 60px;
            width: 240px;
            z-index: 5;
        }

        .piece-3 {
            top: 380px;
            left: 250px;
            width: 190px;
            z-index: 3;
        }

        .piece-8 {
            top: 480px;
            left: 270px;
            width: 190px;
            z-index: 4;
        }

        .piece-12 {
            top: 350px;
            left: 430px;
            width: 160px;
            z-index: 2;
        }

        .piece-11 {
            top: 480px;
            left: 460px;
            width: 140px;
            z-index: 3;
        }

        .piece-9 {
            top: 350px;
            left: 580px;
            width: 140px;
            z-index: 1;
        }

        .piece-7 {
            top: 470px;
            left: 585px;
            width: 140px;
            z-index: 2;
        }

        .piece-6 {
            top: 340px;
            left: 700px;
            width: 260px;
        }

        .piece-10 {
            top: 470px;
            left: 720px;
            width: 160px;
        }

        .piece-14 {
            top: 490px;
            left: 870px;
            width: 160px;
        }

        .tooltip-section9 {
            top: 60px;
            left: 400px;
        }

        .bg-section9 {
            min-height: 90vh;
        }

    }

    @media (max-width: 1200px) {
        .piece-1 {
            top: 70px;
            left: 60px;
            width: 140px;
        }

        .piece-13 {
            top: 155px;
            left: 0px;
            width: 140px;
        }

        .piece-2 {
            top: 255px;
            left: 0px;
            width: 140px;
        }

        .piece-4 {
            top: 330px;
            left: 10px;
            width: 170px;
            z-index: 4;
        }

        .piece-5 {
            top: 410px;
            left: 10px;
            width: 210px;
            z-index: 5;
        }

        .piece-3 {
            top: 330px;
            left: 180px;
            width: 160px;
            z-index: 3;
        }

        .piece-8 {
            top: 410px;
            left: 220px;
            width: 160px;
            z-index: 4;
        }

        .piece-12 {
            top: 300px;
            left: 340px;
            width: 130px;
            z-index: 2;
        }

        .piece-11 {
            top: 415px;
            left: 380px;
            width: 110px;
            z-index: 3;
        }

        .piece-9 {
            top: 300px;
            left: 470px;
            width: 110px;
            z-index: 1;
        }

        .piece-7 {
            top: 400px;
            left: 485px;
            width: 110px;
            z-index: 2;
        }

        .piece-6 {
            top: 280px;
            left: 570px;
            width: 230px;
        }

        .piece-10 {
            top: 400px;
            left: 590px;
            width: 130px;
        }

        .piece-14 {
            top: 420px;
            left: 710px;
            width: 130px;
        }

        .tooltip-section9 {
            width: 25rem;
            height: 12rem;
            top: 80px;
            left: 300px;
        }

        .bg-section9 {
            min-height: 80vh;
        }

        .could-left-on {
            height: 14rem;
        }

        .could-left-center {
            height: 7rem;
        }

        .could-left-bottom {
            height: 12rem;
        }

        .drone-left {
            height: 6rem;
        }

        .could-right-on {
            height: 14rem;
        }

        .could-right-center {
            height: 10rem;
        }

        .could-right-bottom {
            height: 8rem;
        }

        .drone-right {
            height: 6rem;
        }
    }

    @media (max-width: 991px) {
        .piece-1 {
            top: 70px;
            left: 20px;
            width: 120px;
        }

        .piece-13 {
            top: 150px;
            left: 0px;
            width: 120px;
        }

        .piece-2 {
            top: 235px;
            left: 0px;
            width: 120px;
        }

        .piece-4 {
            top: 300px;
            left: 10px;
            width: 150px;
            z-index: 4;
        }

        .piece-5 {
            top: 370px;
            left: 10px;
            width: 190px;
            z-index: 5;
        }

        .piece-3 {
            top: 310px;
            left: 160px;
            width: 140px;
            z-index: 3;
        }

        .piece-8 {
            top: 380px;
            left: 190px;
            width: 140px;
            z-index: 4;
        }

        .piece-12 {
            top: 290px;
            left: 300px;
            width: 110px;
            z-index: 2;
        }

        .piece-11 {
            top: 385px;
            left: 330px;
            width: 100px;
            z-index: 3;
        }

        .piece-9 {
            top: 290px;
            left: 410px;
            width: 100px;
            z-index: 1;
        }

        .piece-7 {
            top: 375px;
            left: 430px;
            width: 100px;
            z-index: 2;
        }

        .piece-6 {
            top: 270px;
            left: 500px;
            width: 210px;
        }

        .piece-10 {
            top: 380px;
            left: 530px;
            width: 110px;
        }

        .piece-14 {
            top: 400px;
            left: 630px;
            width: 110px;
        }

        .tooltip-section9 {
            width: 25rem;
            height: 12rem;
            top: 80px;
            left: 180px;
        }

        .bg-section9 {
            min-height: 90vh;
        }

        .could-left-on {
            height: 12rem;
        }

        .could-left-center {
            height: 6rem;
        }

        .could-left-bottom {
            height: 10rem;
        }

        .drone-left {
            height: 5rem;
        }

        .could-right-on {
            height: 12rem;
        }

        .could-right-center {
            height: 6rem;
        }

        .could-right-bottom {
            height: 8rem;
        }

        .drone-right {
            height: 6rem;
        }
    }

    @media (max-width: 800px) {
        .piece-1 {
            top: 50px;
            left: 20px;
            width: 100px;
        }

        .piece-13 {
            top: 110px;
            left: 0px;
            width: 100px;
        }

        .piece-2 {
            top: 180px;
            left: 0px;
            width: 100px;
        }

        .piece-4 {
            top: 230px;
            left: 10px;
            width: 130px;
            z-index: 4;
        }

        .piece-5 {
            top: 290px;
            left: 10px;
            width: 170px;
            z-index: 5;
        }

        .piece-3 {
            top: 230px;
            left: 140px;
            width: 120px;
            z-index: 3;
        }

        .piece-8 {
            top: 290px;
            left: 175px;
            width: 120px;
            z-index: 4;
        }

        .piece-12 {
            top: 200px;
            left: 260px;
            width: 110px;
            z-index: 2;
        }

        .piece-11 {
            top: 300px;
            left: 300px;
            width: 80px;
            z-index: 3;
        }

        .piece-9 {
            top: 210px;
            left: 370px;
            width: 80px;
            z-index: 1;
        }

        .piece-7 {
            top: 280px;
            left: 375px;
            width: 90px;
            z-index: 2;
        }

        .piece-6 {
            top: 180px;
            left: 440px;
            width: 190px;
        }

        .piece-10 {
            top: 280px;
            left: 460px;
            width: 90px;
        }

        .piece-14 {
            top: 295px;
            left: 545px;
            width: 110px;
        }

        .tooltip-section9 {
            width: 22rem;
            height: 9rem;
            top: 40px;
            left: 160px;
        }

        .bg-section9 {
            min-height: 60vh;
        }

        .could-left-on {
            height: 9rem;
        }

        .could-left-center {
            height: 6rem;
            top:200px;
        }


    @keyframes move-left-two {
        0% {
            left: 12rem;
        }

        100% {
            left: 5rem;
        }
    }

        .could-left-bottom {
            height: 9rem;
            bottom: 90px;
        }

        .drone-left {
            height: 5rem;
        }

        .could-right-on {
            height: 9rem;
        }

        .could-right-center {
            height: 6rem;
            top:200px;
        }

        .could-right-bottom {
            height: 6rem;
            bottom: 90px;
        }

        .drone-right {
            height: 6rem;
        }
    }

    @media (max-width: 765px) {
        .piece-1 {
            top: 50px;
            left: -50px;
            width: 100px;
        }

        .piece-13 {
            top: 110px;
            left: -80px;
            width: 100px;
        }

        .piece-2 {
            top: 180px;
            left: -80px;
            width: 100px;
        }

        .piece-4 {
            top: 230px;
            left: -70px;
            width: 130px;
            z-index: 4;
        }

        .piece-5 {
            top: 290px;
            left: -70px;
            width: 170px;
            z-index: 5;
        }

        .piece-3 {
            top: 230px;
            left: 60px;
            width: 120px;
            z-index: 3;
        }

        .piece-8 {
            top: 290px;
            left: 100px;
            width: 120px;
            z-index: 4;
        }

        .piece-12 {
            top: 200px;
            left: 180px;
            width: 100px;
            z-index: 2;
        }

        .piece-11 {
            top: 300px;
            left: 220px;
            width: 80px;
            z-index: 3;
        }

        .piece-9 {
            top: 210px;
            left: 280px;
            width: 80px;
            z-index: 1;
        }

        .piece-7 {
            top: 280px;
            left: 295px;
            width: 90px;
            z-index: 2;
        }

        .piece-6 {
            top: 190px;
            left: 350px;
            width: 170px;
        }

        .piece-10 {
            top: 280px;
            left: 390px;
            width: 90px;
        }

        .piece-14 {
            top: 295px;
            left: 480px;
            width: 90px;
        }

        .tooltip-section9 {
            width: 22rem;
            height: 9rem;
            top: 40px;
            left: 100px;
        }
    }

    @media (max-width: 680px) {
        .piece-1 {
            top: 20px;
            left: 40px;
            width: 60px;
        }

        .piece-13 {
            top: 60px;
            left: 20px;
            width: 60px;
        }

        .piece-2 {
            top: 100px;
            left: 10px;
            width: 60px;
        }

        .piece-4 {
            top: 130px;
            left: 15px;
            width: 70px;
            z-index: 4;
        }

        .piece-5 {
            top: 165px;
            left: 15px;
            width: 80px;
            z-index: 5;
        }

        .piece-3 {
            top: 137px;
            left: 75px;
            width: 60px;
            z-index: 3;
        }

        .piece-8 {
            top: 165px;
            left: 90px;
            width: 60px;
            z-index: 4;
        }

        .piece-12 {
            top: 125px;
            left: 135px;
            width: 50px;
            z-index: 2;
        }

        .piece-11 {
            top: 170px;
            left: 150px;
            width: 50px;
            z-index: 3;
        }

        .piece-9 {
            top: 120px;
            left: 185px;
            width: 50px;
            z-index: 1;
        }

        .piece-7 {
            top: 165px;
            left: 195px;
            width: 50px;
            z-index: 2;
        }

        .piece-6 {
            top: 110px;
            left: 230px;
            width: 100px;
        }

        .piece-10 {
            top: 170px;
            left: 245px;
            width: 50px;
        }

        .piece-14 {
            top: 175px;
            left: 295px;
            width: 50px;
        }

        .tooltip-section9 {
            width: 14rem;
            height: 6rem;
            top: 10px;
            left: 90px;
        }

        .bg-section9 {
            min-height: 40vh;
        }

        .could-left-on {
            height: 5rem;
        }

        .could-left-center {
            height: 4rem;
            top:100px;
        }

        .could-left-bottom {
            height: 4rem;
            bottom: 20px;
        }

        .drone-left {
            height: 3rem;
        }

        .could-right-on {
            height: 5rem;
        }

        .could-right-center {
            height: 4rem;
            top:140px;
        }

        .could-right-bottom {
            height: 4rem;
            bottom: 40px;
        }

        .drone-right {
            height: 4rem;
        }
    }
</style>

<main class="bg-section9 d-flex">
    <div class="container d-flex flex-column justify-content-start align-items-center ">
        <img src="{{ asset('images/home/section-9/title-section-9.png') }}" alt="title" class="img-fluid"
            style="width: 50%; height:15%;">
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

            <!-- เมฆซ้าย -->
            {{-- <img src="{{ asset('images/home/section-9/เมฆซ้ายบน.png') }}" alt="เมฆซ้ายบน" class="could-left"> --}}

        </div>
    </div>
    <!-- เมฆข้างขวา -->
    <img src="{{ asset('images/home/section-9/เมฆขวาบน.png') }}" alt="เมฆขวาบน" class="could-right-on">
    <img src="{{ asset('images/home/section-9/เมฆขวากลาง.png') }}" alt="เมฆขวากลาง" class="could-right-center">
    <img src="{{ asset('images/home/section-9/เมฆขวาบน.png') }}" alt="เมฆขวาล่าง" class="could-right-bottom">
    <img src="{{ asset('images/home/section-9/โดรนขวา.png') }}" alt="โดรนซ้าย" class="drone-right">
    <!-- เมฆข้างซ้าย -->
    <img src="{{ asset('images/home/section-9/เมฆซ้ายบน.png') }}" alt="เมฆซ้ายบน" class="could-left-on">
    <img src="{{ asset('images/home/section-9/เมฆซ้ายกลาง.png') }}" alt="เมฆซ้ายกลาง" class="could-left-center">
    <img src="{{ asset('images/home/section-9/เมฆซ้ายบน.png') }}" alt="เมฆซ้ายล่าง" class="could-left-bottom">
    <img src="{{ asset('images/home/section-9/โดรนซ้าย.png') }}" alt="โดรนซ้าย" class="drone-left">

</main>
