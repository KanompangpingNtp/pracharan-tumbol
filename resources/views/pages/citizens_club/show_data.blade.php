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
            <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">ชมรมผู้สูงอายุ</div>
            <div class="row">
                @foreach ($citizensClub as $index => $post)
                @php
                // กำหนดคลาสพื้นหลังสลับสี
                $cardBackgroundClass = ($index % 2 == 0) ? 'bg-blue-card-section-6' : 'bg-pink-card-section-6';
                @endphp
                <div class="col-lg-6 p-2">
                    <a href="{{ route('CitizensClubShowDetails', $post->id) }}" class="text-decoration-none">
                        <div class="d-flex align-items-center p-3 {{ $cardBackgroundClass }}" style="height: 150px; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); display: block;">

                            <!-- รูปภาพด้านซ้าย -->
                            <div style="flex: 0 0 100px; height: 100px; overflow: hidden; border-radius: 10px;">
                                <img src="{{ asset('storage/' . ($post->photos->first()->post_photo_file ?? 'images/default.jpg')) }}" alt="Image {{ $index + 1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- ข้อความด้านขวา -->
                            <div class="ms-3 bg-white h-100 rounded p-1" style="flex: 1; position: relative; height: 100%;">
                                <div class="card-text text-dark">
                                    {{ Str::limit($post->details ?? 'No Title', 60, '...') }}
                                </div>
                                <div class="card-date d-flex align-items-center">
                                    <img src="{{ asset('images/hourglass.png') }}" alt="icon" width="15" height="20" class="me-2">
                                    <div class="card-text text-dark">
                                        {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            @if($citizensClub && $citizensClub->count() > 0)
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <!-- Previous button -->
                    <li class="page-item {{ $citizensClub->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $citizensClub->previousPageUrl() }}">ก่อนหน้า</a>
                    </li>

                    <!-- Page number buttons -->
                    @foreach ($citizensClub->getUrlRange(1, $citizensClub->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $citizensClub->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Next button -->
                    <li class="page-item {{ !$citizensClub->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $citizensClub->nextPageUrl() }}">ต่อไป</a>
                    </li>
                </ul>
            </nav>
            @endif
        </div>
    </div>
</div>
@endsection
