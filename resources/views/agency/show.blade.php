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

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center align-items-center">
            <div class="fs-1 fw-bold mb-4">{{ $agency->personnel_agency_name }}</div>

            @if ($agency->ranks->count() > 0)
            <!-- จัดกลุ่มข้อมูลตาม status และเรียงลำดับ -->
            @php
            // จัดกลุ่ม details ตาม status
            $groupedDetails = collect();
            foreach ($agency->ranks as $rank) {
            if ($rank->details->count() > 0) {
            foreach ($rank->details as $detail) {
            $groupedDetails->push($detail);
            }
            }
            }

            // เรียงลำดับตาม status (1 -> 2 -> 3)
            $sortedDetails = $groupedDetails->sortBy('status')->groupBy('status');
            @endphp

            <!-- แสดงผลตามกลุ่ม status -->
            @foreach ($sortedDetails as $status => $details)
            <div class="w-100 mb-4 px-5">
                {{-- <h4 class="text-center mb-3">Status: {{ $status }}</h4> --}}
                @foreach ($details->chunk(3) as $chunk)
                <div class="row mb-3 justify-content-center">
                    @if ($chunk->count() == 1)
                    <!-- ถ้ามี 1 ข้อมูล: แสดงตรงกลาง -->
                    @foreach ($chunk as $detail)
                    <div class="col-md-4">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                            @if ($detail->images->count() > 0)
                            @foreach ($detail->images as $image)
                            <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                            @endforeach
                            @else
                            <img src="{{ asset('backend/images/images.png') }}" alt="Personnel Image" style="width: auto; height: 200px; object-fit: cover;">
                            @endif

                            <!-- แสดงข้อมูลของแต่ละรายการ -->
                            <div class="fs-4 mt-2">
                                {{ $detail->full_name }}<br>
                                {{ $detail->department ?? 'ว่าง' }}<br>
                                {{ $detail->phone }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @elseif ($chunk->count() == 2)
                    <div class="row justify-content-between">
                        <!-- แสดงข้อมูลของ first item -->
                        <div class="col-md-5">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                @if ($chunk->first()->images->count() > 0)
                                @foreach ($chunk->first()->images as $image)
                                <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                @endforeach
                                @else
                                <img src="{{ asset('backend/images/images.png') }}" alt="Personnel Image" style="width: auto; height: 200px; object-fit: cover;">
                                @endif
                                <div class="fs-4 mt-2">
                                    {{ $chunk->first()->full_name }}<br>
                                    {{ $chunk->first()->department ?? 'ว่าง' }}<br>
                                    {{ $chunk->first()->phone }}
                                </div>
                            </div>
                        </div>
                        <!-- แสดงข้อมูลของ last item -->
                        <div class="col-md-4">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                @if ($chunk->last()->images->count() > 0)
                                @foreach ($chunk->last()->images as $image)
                                <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                @endforeach
                                @else
                                <img src="{{ asset('backend/images/images.png') }}" alt="Personnel Image" style="width: auto; height: 200px; object-fit: cover;">
                                @endif
                                <div class="fs-4 mt-2">
                                    {{ $chunk->last()->full_name }}<br>
                                    {{ $chunk->last()->department ?? 'ว่าง' }}<br>
                                    {{ $chunk->last()->phone }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- ถ้ามี 3 ข้อมูล: แสดงเต็มแถว -->
                    @foreach ($chunk as $detail)
                    <div class="col-md-4">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                            @if ($detail->images->count() > 0)
                            @foreach ($detail->images as $image)
                            <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                            @endforeach
                            @else
                            <img src="{{ asset('backend/images/images.png') }}" alt="Personnel Image" style="width: auto; height: 200px; object-fit: cover;">
                            @endif

                            <!-- แสดงข้อมูลของแต่ละรายการ -->
                            <div class="fs-4 mt-2">
                                {{ $detail->full_name }}<br>
                                {{ $detail->department ?? 'ว่าง' }}<br>
                                {{ $detail->phone }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endforeach

            </div>
            @endforeach
            @else
            <p>No ranks available for this agency.</p>
            @endif

            {{-- <a href="{{ url()->previous() }}" class="mt-3">Back</a> --}}
        </div>
    </div>
</div>


@endsection
