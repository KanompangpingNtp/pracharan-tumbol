<style>
    .bg-section1 {
        background-image: url('{{ asset('images/home/section-1/bg-section1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .title-section-1 {
        background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.5);
        text-shadow:
            2px 2px 0px rgba(0, 0, 0, 0.8),
            4px 4px 5px rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        position: relative;
        padding: 8px 50px 8px 25px;
        border-radius: 10px;
    }

    .title-section-1 img {
        position: absolute;
        right: -10%;
        top: 50%;
        transform: translateY(-50%);
        height: 100%;
        width: auto;
        max-width: none;
    }

    .bg-menu-section1 {
        background: linear-gradient(to left, rgb(148, 228, 0, 0.2), rgb(104, 160, 0, 0.4), rgb(148, 228, 0, 0.2));
        box-shadow: 0 2px 30px rgba(255, 255, 255, 0.8);
        border-radius: 10px;
    }

    .menu-box {
        background-color: #eaffd7;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        margin-bottom: 10px;
        cursor: pointer;
        padding: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: left;
        transition: all 0.3s ease-in-out;
        width: 100%;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .menu-box:hover {
        transform: scale(1.03);
        /* ขยายขึ้น 8% */
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        filter: brightness(0.9);
        /* ทำให้สีเข้มขึ้นเล็กน้อย */
    }

    .menu-box img {
        width: 45px;
        height: 45px;
        margin-right: 12px;
        transition: transform 0.3s ease-in-out;
    }

    .menu-box:hover img {
        transform: rotate(-5deg) scale(1.1);
        /* เอียงเล็กน้อย และขยาย */
    }

    .menu-box div {
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .menu-box:hover div {
        color: #2e5902;
        /* ทำให้สีข้อความเข้มขึ้น */
    }

    .hover-effect img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-effect:hover img {
        transform: scale(1.05);

        border-radius: 20px;
    }

    .hotline-btn {
        text-decoration: none;
        transition: transform 0.2s ease, filter 0.2s ease;
    }

    .hotline-btn:hover {
        transform: scale(1.1); /* ขยายขนาดเมื่อ hover */
        filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.8)); /* เรืองแสงสีขาว */
    }
</style>

<!-- Content Section -->
<main class="bg-section1 d-flex">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section-1 mb-4">
            คณะผู้บริหาร
            <img src="{{ asset('images/home/section-1/businessman.png') }}" alt="icon">
        </div>
        <div class="d-flex justify-content-between w-100 overflow-x-auto mb-4">
            <!-- เพิ่ม w-100 เพื่อให้เต็มความกว้าง -->
            @foreach ($executiveStatus1 as $executive)
            <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center " style="min-width: 250px;">
                <img src="{{ !empty($executive->images->first()->photo_file) ? asset('storage/' . $executive->images->first()->photo_file) : asset('images/home/section-1/1.png') }}" alt="persernal" style="width: 100%; height: 400px; object-fit: contain;" onerror="this.onerror=null; this.src='{{ asset('images/home/section-1/1.png') }}';">

                <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                    <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        {{ $executive->full_name }} <br>
                        <span style="font-size: 18px;">
                            {!! str_replace(' ', '<br>', e($executive->position)) !!}
                        </span>
                    </div>
                    <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                        <a href="tel:{{ $executive->phone_number }}" class="bg-dark text-white px-2 fs-5 hotline-btn" style="border-radius: 20px;">สายด่วน</a>
                        {{ $executive->phone_number }}
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($executiveStatus2 as $executive)
            <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 230px;">
                {{-- <img src="{{ asset('storage/' . ($executive->images->first()->photo_file ?? 'default-image.png')) }}" alt="personal" style="width: 100%; height: 350px; object-fit: contain;"> --}}
                <img src="{{ asset(optional($executive->images->first())->photo_file ? 'storage/' . optional($executive->images->first())->photo_file : 'images/home/section-1/2.png') }}" alt="personal" style="width: 100%; height: 300px; object-fit: contain;">


                <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                    <div class="text-center bg-white text-black p-2 fs-4 " style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        {{ $executive->full_name }} <br>
                        <span style="font-size: 18px;">
                            {!! str_replace(' ', '<br>', e($executive->position)) !!}
                        </span>
                    </div>
                    <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                        <a href="tel:{{ $executive->phone_number }}" class="bg-dark text-white px-2 fs-5 hotline-btn" style="border-radius: 20px;">สายด่วน</a> {{ $executive->phone_number }}
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($executiveStatus3 as $executive)
            <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 230px;">
                {{-- <img src="{{ asset('storage/' . ($executive->images->first()->photo_file ?? 'default-image.png')) }}" alt="personal" style="width: 100%; height: 350px; object-fit: contain;"> --}}
                <img src="{{ asset(optional($executive->images->first())->photo_file ? 'storage/' . optional($executive->images->first())->photo_file : 'images/home/section-1/3.png') }}" alt="personal" style="width: 100%; height: 300px; object-fit: contain;">

                <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                    <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        {{ $executive->full_name }} <br>
                        <span style="font-size: 18px;">
                            {!! str_replace(' ', '<br>', e($executive->position)) !!}
                        </span>
                    </div>
                    <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                        <a href="tel:{{ $executive->phone_number }}" class="bg-dark text-white px-2 fs-5 hotline-btn" style="border-radius: 20px;">สายด่วน</a> {{ $executive->phone_number }}
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($executiveStatus4 as $executive)
            <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 230px;">
                {{-- <img src="{{ asset('storage/' . ($executive->images->first()->photo_file ?? 'default-image.png')) }}" alt="personal" style="width: 100%; height: 350px; object-fit: contain;"> --}}
                <img src="{{ asset(optional($executive->images->first())->photo_file ? 'storage/' . optional($executive->images->first())->photo_file : 'images/home/section-1/4.png') }}" alt="personal" style="width: 100%; height: 250px; object-fit: contain;">

                <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                    <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        {{ $executive->full_name }} <br>
                        <span style="font-size: 18px;">
                            {!! str_replace(' ', '<br>', e($executive->position)) !!}
                        </span>
                    </div>
                    <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                        <a href="tel:{{ $executive->phone_number }}" class="bg-dark text-white px-2 fs-5 hotline-btn" style="border-radius: 20px;">สายด่วน</a> {{ $executive->phone_number }}
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center" style="min-width: 250px;">
                <img src="{{ asset('images/home/section-1/1.png') }}" alt="persernal" style="width: 100%; height: 400px; object-fit: contain;">
            <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    นายสายชล ทับเปลี่ยน <br>
                    <span style="font-size: 18px;">นายกองค์การบริหารส่วนตำบลพระอาจารย์</span>
                </div>
                <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                    <span class="bg-dark text-white px-2 fs-5" style="border-radius: 20px;">สายด่วน</span> 086-7831441
                </div>
            </div>
        </div>

        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 250px;">
            <img src="{{ asset('images/home/section-1/2.png') }}" alt="persernal" style="width: 100%; height: 350px; object-fit: contain;">
            <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    นายวิเชียร มูฮำหมัด <br>
                    <span style="font-size: 18px;">รองนายกองค์การ</span> <br>
                    <span style="font-size: 18px;">บริหารส่วนตำบลพระอาจารย์</span>
                </div>
                <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                    <span class="bg-dark text-white px-2 fs-5" style="border-radius: 20px;">สายด่วน</span> 089-532-8435
                </div>
            </div>
        </div>

        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 250px;">
            <img src="{{ asset('images/home/section-1/3.png') }}" alt="persernal" style="width: 100%; height: 350px; object-fit: contain;">
            <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    นายภูทัย บุญรอด<br>
                    <span style="font-size: 18px;">รองนายกองค์การ</span> <br>
                    <span style="font-size: 18px;">บริหารส่วนตำบลพระอาจารย์</span>
                </div>
                <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                    <span class="bg-dark text-white px-2 fs-5" style="border-radius: 20px;">สายด่วน</span> 081-3646785
                </div>
            </div>
        </div>

        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center mt-5" style="min-width: 250px;">
            <img src="{{ asset('images/home/section-1/4.png') }}" alt="persernal" style="width: 100%; height: 350px; object-fit: contain;">
            <div class="mt-2  w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
                <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    นายไพโรจน์ อาดำ<br>
                    <span style="font-size: 18px;">เลขานุการนายก</span>
                </div>
                <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                    <span class="bg-dark text-white px-2 fs-5" style="border-radius: 20px;">สายด่วน</span> 089-966-8684
                </div>
            </div>
        </div> --}}

    </div>

    <div class="bg-menu-section1 p-3 mx-3 position-relative">
        <img src="{{asset('images/home/section-1/leaf.png')}}" alt="leaf" style="position: absolute; left: -20px; top: 10px; transform: translateY(-50%) rotate(300deg); max-width: 80px;">
        <!-- รายการเมนู -->
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #eaffd7;">
                    <img src="{{asset('images/home/section-1/prime-minister.png')}}" alt="icon">
                    <div>สารจากนายก</div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #c8ff9b;">
                    <img src="{{asset('images/home/section-1/purpose.png')}}" alt="icon">
                    <div>เจตจำนงสุจริต<br>ของผู้บริหาร</div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #8edd4c;">
                    <img src="{{asset('images/home/section-1/suffering.png')}}" alt="icon">
                    <div>รับแจ้งเรื่องราว<br>ร้องทุกข์</div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #67da09;">
                    <img src="{{asset('images/home/section-1/angry-customer.png')}}" alt="icon">
                    <div>รับแจ้งเรื่องร้องเรียน<br>ทุจริตประพฤติมิชอบ</div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #54b901;">
                    <img src="{{asset('images/home/section-1/ITA.png')}}" alt="icon">
                    <div>การประเมินคุณธรรม<br>และ ความโปร่งใส</div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a herf="#" class="menu-box text-decoration-none text-black lh-1" style="background-color: #4ca800;">
                    <img src="{{asset('images/home/section-1/LPA.png')}}" alt="icon">
                    <div>การประเมิน<br>ประสิทธิภาพภายใน</div>
                </a>
            </div>
        </div>
        <img src="{{asset('images/home/section-1/leaf.png')}}" alt="leaf" style="position: absolute; right: -20px; bottom: -20px; transform: translateY(-50%) rotate(120deg); width: 80px;">
    </div>

    <div class="row justify-content-center align-items-center mt-4 px-3 ">
        <!-- ฝั่งซ้าย: ภาพบุคคล -->
        @foreach ($executiveStatus5 as $executive)
        {{-- <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center  mt-5" style="min-width: 250px;">
            <img src="{{ asset('storage/' . ($executive->images->first()->photo_file ?? 'default-image.png')) }}" alt="personal" style="width: 100%; height: 350px; object-fit: contain;">

        <div class="mt-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">
            <div class="text-center bg-white text-black p-2 fs-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                {{ $executive->full_name }} <br>
                <span style="font-size: 18px;">{{ $executive->position }}</span> <br>
                <span style="font-size: 18px;">nodata</span>
            </div>
            <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                <span class="bg-dark text-white px-2 fs-5" style="border-radius: 20px;">สายด่วน</span> {{ $executive->phone_number }}
            </div>
        </div>
    </div> --}}
    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center" style="min-width: 250px;">
        {{-- <img src="{{ asset('storage/' . ($executive->images->first()->photo_file ?? 'default-image.png')) }}" alt="persernal" class="img-fluid" style="height: 300px; object-fit: contain;"> --}}
        <img src="{{ asset(optional($executive->images->first())->photo_file ? 'storage/' . optional($executive->images->first())->photo_file : 'images/home/section-1/2.png') }}" alt="personal" style="width: 100%; height: 300px; object-fit: contain;">
        <div class="my-2 w-75 lh-1" style="box-shadow: 0 2px 10px rgba(255, 255, 255, 0.6); border-radius: 15px;">

            <div class="text-center bg-white text-black p-2 fs-4 " style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                {{ $executive->full_name }}<br>
                <span style="font-size: 18px;">
                    {!! str_replace(' ', '<br>', e($executive->position)) !!}
                </span>
            </div>

            <div class="fs-4 text-center p-1 fw-bold" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;
                        background: linear-gradient(to left, rgb(104, 160, 0), rgb(148, 228, 0), rgb(104, 160, 0));">
                <a href="tel:{{ $executive->phone_number }}" class="bg-dark text-white px-2 fs-5 hotline-btn" style="border-radius: 20px;">สายด่วน</a>
                {{ $executive->phone_number }}
            </div>
        </div>
    </div>
    @endforeach

    <!-- ฝั่งขวา: ภาพการ์ด -->
    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">

        <img src="{{ asset('images/home/section-1/service-card.png') }}" alt="card" class="img-fluid">
    </div>
    </div>
    </div>
</main>
