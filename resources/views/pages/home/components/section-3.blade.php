<style>
    .bg-section3 {
        background-image: url('{{ asset('images/home/section-3/bg-section3.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .title-section3 {
        font-size: 60px;
        font-weight: bold;
        color: #ffff;
        text-shadow:
            2px 2px 0px rgba(0, 0, 0, 0.8),
            4px 4px 10px rgba(0, 0, 0, 0.5);
    }

    .link-green-section3 {
        background: linear-gradient(to bottom, rgb(148, 228, 0), rgb(104, 160, 0));
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.5);
        text-shadow:
            2px 2px 10px rgba(255, 255, 255, 0.8),
            4px 4px 10px rgba(255, 255, 255, 0.5);
        padding: 0.5rem 2rem;
        border-radius: 30px;
        font-size: 25px;
        text-decoration: none;
        color: white;
        display: inline-block;
        transition: all 0.5s ease;

    }

    .link-green-section3:hover {
        background: linear-gradient(to bottom, rgb(104, 160, 0), rgb(148, 228, 0));
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.8);
        color: #ffffe0;
        /* เปลี่ยนเป็นสีขาวอมเหลืองเล็กน้อย */
    }

    .custom-img-line {
        width: 200px;
        height: auto;
    }

    .custom-img-oss {
        width: 200px;
        height: auto;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงแบบนุ่มนวล */
    }

    .custom-img-oss:hover {
        transform: scale(1.05);
        /* ขยายรูปภาพ 10% */
        opacity: 0.9;
        /* ลดความทึบแสงเล็กน้อย */
    }
</style>

<main class="bg-section3 d-flex">
    <div class="container d-flex flex-column justify-content-center ">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-7 d-flex flex-column">
                <div class="title-section3 lh-1 d-flex flex-column align-items-center justify-content-center mb-3">
                    <div>
                        <span>ป้ายประกาศ</span>
                        <img src="{{ asset('images/home/section-3/icon3.png') }}" alt="icon"
                            style="margin-top: -30px;">
                    </div>
                </div>
                <div class="bg-green">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/home/section-3/bg-section3.png') }}" class="d-block w-100"
                                    alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/home/section-2/bg-section2.png') }}" class="d-block w-100"
                                    alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/home/section-1/bg-section1.png') }}" class="d-block w-100"
                                    alt="Image 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-start mt-3 position-relative">
                    <a href="#" class="link-green-section3 me-2">ดูทั้งหมด</a>
                    <img src="{{ asset('images/home/section-3/leaf.png') }}" alt="leaf"
                        style="position: absolute; right: -5px; top: 20px; transform: translateY(-50%) rotate(30deg); width: 50px;">
                </div>
            </div>
            <div class="col-xl-2 d-flex flex-column align-items-center">
                <img src="{{ asset('images/home/section-3/line.png') }}" alt="line" class="custom-img-line mb-2">
                <a href="#">
                    <img src="{{ asset('images/home/section-3/one-stop-service.png') }}" alt="oss"
                        class="custom-img-oss">
                </a>
            </div>
            <div class="col-xl-3 d-flex justify-content-center">
                <!-- Facebook Page Plugin -->
                <div class="fb-page" data-href="https://www.facebook.com/chanthaburi.town.municipality"
                    data-tabs="timeline" data-width="300" data-height="520" data-small-header="false"
                    data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/chanthaburi.town.municipality"
                        class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/chanthaburi.town.municipality">Facebook</a>
                    </blockquote>
                </div>
                <!-- สคริปต์ Facebook SDK -->
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0"
                    nonce="A4Z4J6YV"></script>
            </div>
        </div>
    </div>
</main>
