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

        /* ปรับแต่งการ์ด */
        .custom-card {
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            cursor: pointer;
        }

        /* Hover Effect: ทำให้เด่นขึ้น */
        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* กำหนดขนาดรูปภาพให้เท่ากัน */
        .image-container {
            width: 100%;
            height: 220px;
            /* ปรับความสูงที่ต้องการ */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* ให้รูปภาพเต็มพื้นที่และตัดส่วนที่เกิน */
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        /* Hover Effect: ซูมรูปภาพเบาๆ */
        .custom-card:hover .image-container img {
            transform: scale(1.1);
        }

        /* ปรับแต่งเนื้อหาในการ์ด */
        .card-body {
            background: #fff;
            padding: 15px;
            border-top: 2px solid #46c700;
            /* เส้นสีฟ้าที่ด้านบน */
        }

        .card-title {
            font-size: 30px;
            font-weight: bold;
            color: #333;
            margin-bottom: 0;
            transition: color 0.3s ease;
        }

        /* Hover Effect: เปลี่ยนสีข้อความ */
        .custom-card:hover .card-title {
            color: #77b329;
        }
    </style>
    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class=" d-flex flex-column justify-content-center p-5">
                <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">อำนาจหน้าที่</div>

                {{-- <div class="row">
                    @foreach ($listDetail as $detail)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card custom-card shadow-lg"
                                onclick="window.location='{{ route('AuthorityShowDetails', $detail->id) }}'">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $detail->list_details_name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <style>
                    .table td:hover {
                        background-color: #28a745;
                        color: white;
                    }

                    table {
                        border-collapse: collapse;
                    }

                    table td,
                    table th {
                        border: none;
                    }

                    table tr:nth-child(odd) {
                        background-color: #dcf5bc;
                    }

                    table tr:nth-child(even) {
                        background-color: #ffffff;
                    }

                    a {
                        text-decoration: none;
                        color: #333;
                    }

                </style>

                <table class="table">
                    @foreach($listDetail as $detail)
                    <tr>
                        <td><a href="{{route('AuthorityShowDetails',$detail->id)}}">{{ $detail->list_details_name }}</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
