<style>
    .bg-section4 {
        background-image: url('{{ asset('images/home/section-4/bg-section4.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .title-section4 {
        font-size: 50px;
        font-weight: bold;
        color: #000000;
        text-shadow:
            2px 2px 5px rgba(0, 0, 0, 0.8),
            2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .underline-text {
        position: relative;
        display: inline-block;
    }

    .underline-text::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        /* ระยะห่างของเส้นใต้ */
        width: 100%;
        height: 3px;
        /* ความหนาของเส้น */
        background: linear-gradient(to right, rgb(148, 228, 0), rgb(104, 160, 0));
        /* สีไล่ระดับ */
        border-radius: 5px;
    }

</style>

<main class="bg-section4 d-flex">
    <div class="container d-flex flex-column justify-content-center ">
        <div class="title-section4 lh-1 d-flex flex-column align-items-center justify-content-center mb-3">
            <div>
                <span class="underline-text">งานกิจกรรม</span>
                <img src="{{ asset('images/home/section-4/time-tracking.png') }}" alt="icon" style="margin-top: -10px;">
            </div>
        </div>

        @php
    // กำหนดสีการ์ด
    $cardColors = ['#d1f541', '#b8e64d', '#77b329', '#569419'];
@endphp

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-1">
    @foreach ($activity->slice(0, 4) as $index => $post)
        <div class="col">
            <a href="#" class="text-decoration-none text-black">
                <div class="card h-100 p-3 custom-card border-0"
                     style="background-color: {{ $cardColors[$index % count($cardColors)] }};">

                    <img src="{{ !empty($post->photos->first()->post_photo_file) ? asset('storage/' . $post->photos->first()->post_photo_file) : asset('images/home/section-4/logo-miss-files.png') }}"
                         class="card-img-top bg-white"
                         alt="Image {{ $index + 1 }}"
                         onerror="this.onerror=null; this.src='{{ asset('images/home/section-4/logo-miss-files.png') }}';"
                         style="height: 200px; object-fit: contain; border-radius:10px;">

                    <div class="card-body bg-white mt-2 lh-1 p-2" style="border-radius:10px;">
                        <h5 class="card-title m-0">{{ $post->title_name }}</h5>
                        <p class="card-text">{{ Str::limit($post->details, 100) }}</p>
                    </div>

                    <div class="d-flex justify-content-start align-items-end mt-1">
                        <img src="{{ asset('images/home/section-4/hourglass.png') }}" alt="hourglass" class="me-1" width="25">
                        <span class="bg-white p-1 px-3" style="border-radius:10px;">
                            {{ \Carbon\Carbon::parse($post->date)->format('d-m-Y') }}
                        </span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>


        <style>
            /* เพิ่ม hover effect สำหรับการ์ด */
            .custom-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .custom-card:hover {
                transform: translateY(-10px);
                /* เคลื่อนย้ายการ์ดขึ้นเล็กน้อย */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                /* เพิ่มเงา */
            }

            /* เพิ่ม hover effect สำหรับภาพ */
            .custom-card:hover .card-img-top {
                transform: scale(1.02);
                /* ขยายขนาดรูปภาพเล็กน้อย */
                transition: transform 0.3s ease;
            }

        </style>

        <div class="d-flex justify-content-center pt-0 pb-2 px-2" style="background: linear-gradient(to right, #d1f541, #569419); border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
            <div class="d-flex justify-content-around w-100 pt-3" style="background: linear-gradient(to right, #f2ffc0, #f2ffc0); border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
                <img src="{{ asset('images/home/section-4/mountain.png') }}" alt="mountain" width="47">
                <img src="{{ asset('images/home/section-4/battery.png') }}" alt="battery" width="47" class="d-none d-sm-block">
                <img src="{{ asset('images/home/section-4/wind-power.png') }}" alt="wind-power" width="47" class="d-none d-sm-block">
                <a href="#" class="link-green">ดูทั้งหมด</a>
                <img src="{{ asset('images/home/section-4/trees.png') }}" alt="trees" width="47" class="d-none d-sm-block">
                <img src="{{ asset('images/home/section-4/house.png') }}" alt="house" width="47" class="d-none d-sm-block">
                <img src="{{ asset('images/home/section-4/trees.png') }}" alt="trees" width="47">
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center mt-3">
            <!-- Weather Widget -->
            <div class=" mb-3 mb-lg-0 w-100">
                <iframe src="https://www.tmd.go.th/weatherForecast7DaysWidget?province=นครนายก" height="340" width="100%" scrolling="no" frameborder="0" style="border-radius: 20px; box-shadow:0 2px 10px rgba(0, 0, 0, 0.7)"></iframe>
            </div>
            <!-- Image Links -->
            <div class=" d-flex flex-wrap justify-content-center gap-3">
                <a href="#">
                    <img src="{{ asset('images/home/section-4/1.png') }}" alt="1" class="img-fluid img-hover">
                </a>
                <a href="#">
                    <img src="{{ asset('images/home/section-4/2.png') }}" alt="2" class="img-fluid img-hover">
                </a>
                <a href="#">
                    <img src="{{ asset('images/home/section-4/3.png') }}" alt="3" class="img-fluid img-hover">
                </a>
                <a href="#">
                    <img src="{{ asset('images/home/section-4/4.png') }}" alt="4" class="img-fluid img-hover">
                </a>
                <a href="#">
                    <img src="{{ asset('images/home/section-4/5.png') }}" alt="5" class="img-fluid img-hover">
                </a>
                <a href="{{route('banner')}}">
                    <img src="{{ asset('images/home/section-4/6.png') }}" alt="6" class="img-fluid img-hover">
                </a>
            </div>
        </div>

    </div>
</main>
