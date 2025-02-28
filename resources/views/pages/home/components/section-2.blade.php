<style>
    .bg-section2 {
        background-image: url('{{ asset('images/home/section-2/bg-section2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .title-section2 {
        font-size: 60px;
        font-weight: bold;
        text-shadow:
            2px 2px 0px rgba(255, 255, 255, 0.8),
            4px 4px 5px rgba(255, 255, 255, 0.5);
    }

    .bg-green {
        background: linear-gradient(to bottom, rgb(148, 228, 0), rgb(104, 160, 0));
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.5);
        padding: 1rem;
        border-radius: 20px;
    }

    .link-green {
        background: linear-gradient(to bottom, rgb(148, 228, 0), rgb(104, 160, 0));
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.5);
        text-shadow:
            2px 2px 10px rgba(255, 255, 255, 0.8),
            4px 4px 10px rgba(255, 255, 255, 0.5);
        padding: 0.5rem 2rem;
        border-radius: 10px;
        font-size: 25px;
        text-decoration: none;
        color: white;
        display: inline-block;
        transition: all 0.5s ease;

    }

    .link-green:hover {
        background: linear-gradient(to bottom, rgb(104, 160, 0), rgb(148, 228, 0));
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.8);
        color: #ffffe0;
        /* เปลี่ยนเป็นสีขาวอมเหลืองเล็กน้อย */
    }

    .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .img-hover:hover {
        transform: scale(1.1);
    }
</style>

<main class="bg-section2 d-flex">
    <div class="container d-flex flex-column justify-content-center ">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 d-flex flex-column">
                <div class="title-section2 lh-1 d-flex flex-column align-items-center justify-content-center mb-3">
                    <div>
                        <span>วิดีทัศน์แนะนำ</span>
                        <img src="{{ asset('images/home/section-2/clapperboard.png') }}" alt="icon"
                            style="margin-top: -30px;" class="d-none d-sm-block">
                        <div class="fs-3">องค์การบริหารส่วนตำบลพระอาจารย์</div>
                    </div>
                </div>
                <div class="bg-green">
                    {{-- <iframe height="400" src="https://www.youtube.com/embed/2XhBpAuKYQ0" title="YouTube video player"
                        frameborder="0" allowfullscreen style="border-radius: 20px; width: 100%;">
                    </iframe> --}}
                    <iframe height="400" src="https://www.youtube.com/embed/MQc1I774ZNI" title="YouTube video player"
                        frameborder="0" allowfullscreen style="border-radius: 20px; width: 100%;">
                    </iframe>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{route('FeaturedVideoData')}}" class="link-green">วิดีโอเพิ่มเติม</a>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-center p-5 ">
                <img src="{{ asset('images/home/section-2/ป้ายใหม่.png') }}" alt="page" class="img-fluid w-100">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-4">
                <a href="http://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank">
                    <img src="{{ asset('images/home/section-2/1.png') }}" alt="1" class="img-fluid img-hover">
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank">
                    <img src="{{ asset('images/home/section-2/2.png') }}" alt="2" class="img-fluid img-hover">
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a href="http://www.gprocurement.go.th/new_index.html" target="_blank">
                    <img src="{{ asset('images/home/section-2/3.png') }}" alt="3" class="img-fluid img-hover">
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a href="https://www.oic.go.th/infocenter62/6294/#" target="_blank">
                    <img src="{{ asset('images/home/section-2/4.png') }}" alt="4" class="img-fluid img-hover">
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a href="#">
                    <img src="{{ asset('images/home/section-2/5.png') }}" alt="5" class="img-fluid img-hover">
                </a>
            </div>
        </div>

    </div>
</main>
