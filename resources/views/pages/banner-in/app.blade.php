@extends('layout.app')
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

        .title-section {
            font-size: 60px;
            font-weight: bold;
            text-shadow:
                2px 2px 0px rgba(255, 255, 255, 0.8),
                4px 4px 5px rgba(255, 255, 255, 0.5);
        }

        .img-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .img-hover:hover {
            transform: scale(1.1);
        }
    </style>
    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                <div class="title-section lh-1 d-flex flex-column align-items-center justify-content-center mb-3">
                    หน่วยงานภายนอก
                </div>
                <div class="d-flex justify-content-center align-items-center"
                    style="background-color: rgba(0, 0, 0, 0.438); border-radius:20px;">
                    <div class="row justify-content-center">
                        @foreach (range(1, 44) as $num)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/banner-in/' . $num . '.png') }}"
                                        alt="Image {{ $num }}" class="img-fluid img-hover">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- <a href="{{ url()->previous() }}" class="mt-3">Back</a> --}}
            </div>
        </div>
    </div>
@endsection
