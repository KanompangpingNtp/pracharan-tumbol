@extends('layout.sub-layout.app')
@section('content')
    <style>
        .bg {
            background-image: url('{{ asset('images/agency/BG-AENGY.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .custom-gradient-shadow {
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3),
                /* เงาพื้นฐาน */
                0 0 50px -10px rgba(158, 255, 3, 0.8),
                /* เงาสีฟ้าเข้ม */
                0 0 50px -10px rgba(72, 255, 0, 0.8);
            /* เงาสีฟ้าอ่อน */
            background-color: #ffffff;
        }
    </style>
    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/header/logo.png') }}" alt="icon">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <div class="lh-1">
                        <span class="fw-bold fs-2">องค์การบริหารส่วนตำบลพระอาจารย์</span> <br>
                        <span class="fw-bold fs-3">Phra Achan Subdistrict Administrative Organization</span> <br>
                        <span class="text-muted fs-3">
                            ถนนคลองหกวา หมู่ที่ 5 ตำบลพระอาจารย์ <br>
                            อำเภอองครักษ์ จังหวัดนครนายก <br>
                            รหัสไปรษณีย์ 26120
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1">
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/phone-call.png') }}" alt="phone" width="20"
                            height="20">
                        <div>โทรศัพท์ : 037-610559</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/fax.png') }}" alt="phone" width="20"
                            height="20">
                        <div>โทรสาร : 037-610559</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/gold.png') }}" alt="phone" width="20"
                            height="20">
                        <div>การคลัง : 086-7802324</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/stole.png') }}" alt="phone" width="20"
                            height="20">
                        <div>สำนักงานปลัด : 085-0422553</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/email.png') }}" alt="phone" width="23"
                            height="20">
                        <div>Email : prajan2565@gmail.com</div>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.736663775177!2d100.97104627382912!3d13.974273992106424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d74c935c7b423%3A0xee36dd863f33ca70!2z4Lit4LiH4LiE4LmM4LiB4Liy4Lij4Lia4Lij4Li04Lir4Liy4Lij4Liq4LmI4Lin4LiZ4LiV4Liz4Lia4Lil4Lie4Lij4Liw4Lit4Liy4LiI4Liy4Lij4Lii4LmM!5e0!3m2!1sth!2sth!4v1739925975838!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
