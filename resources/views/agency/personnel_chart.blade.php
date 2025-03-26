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

</style>
<div class="bg">
    <div class="container custom-gradient-shadow">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fs-1 fw-bold mt-5">โครงสร้างองค์กร</div>

            <style>
                .a4-size {
                    width: 794px;
                    height: 1123px;
                    object-fit: contain;
                    align-content: center;
                }

            </style>

            {{-- <div>
                <img src="{{ asset('images/personnel_chart/st01-3.png') }}" class="a4-size" alt="">
            </div> --}}

        </div>

    </div>
</div>

@endsection
