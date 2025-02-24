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
            <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">อำนาจหน้าที่ {{ $listDetail->list_details_name }}</div>


            <p class="card-text">{!! $listDetail->details ?? 'ไม่มีข้อมูล' !!}</p>

            @if ($listDetail->pdf->isNotEmpty())
            <div class="row mt-3">
                @foreach ($listDetail->pdf as $pdf)
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <embed src="{{ asset('storage/' . $pdf->pdf_file) }}" type="application/pdf" width="100%" height="800px">
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-muted"></p>
            @endif

            @if ($listDetail->images->isNotEmpty())
            <div class="row">
                @foreach ($listDetail->images as $image)
                <div class="col-md-3">
                    <img src="{{ asset('storage/' . $image->images_file) }}" class="img-fluid rounded">
                </div>
                @endforeach
            </div>
            @else
            <p class="text-muted"></p>
            @endif

        </div>
    </div>
</div>


@endsection
