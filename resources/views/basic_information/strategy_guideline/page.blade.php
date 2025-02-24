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
            <div class=" d-flex flex-column justify-content-center p-5">
                <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">ยุทธศาสตร์และแนวทางการพัฒนา</div>
                @forelse ($basicInfoDetail as $detail)

                <p>{!! $detail->details !!}</p>

                {{-- แสดงไฟล์ PDF --}}
                @if ($detail->pdf->count() > 0)
                <h6>ไฟล์ PDF:</h6>
                <ul>
                    @foreach ($detail->pdf as $pdf)
                    <li>
                        <a href="{{ asset('storage/' . $pdf->pdf_file) }}" target="_blank">
                            ดาวน์โหลด PDF
                        </a>
                    </li>
                    @endforeach
                </ul>
                @else
                <p></p>
                @endif

                {{-- แสดงรูปภาพ --}}
                @if ($detail->images->count() > 0)
                <h6>รูปภาพ:</h6>
                <div class="d-flex flex-wrap">
                    @foreach ($detail->images as $image)
                    <div class="col-md-3 p-2">
                        <img src="{{ asset('storage/' . $image->images_file) }}" class="img-fluid rounded" alt="รูปภาพ">
                    </div>
                    @endforeach
                </div>
                @else
                <p></p>
                @endif

                <hr>
                @empty
                <p class="text-center">ยังไม่มีข้อมูล</p>
                @endforelse

            </div>
        </div>
    </div>


@endsection

