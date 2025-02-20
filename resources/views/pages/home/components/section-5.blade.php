<style>
    .bg-section5 {
        background-image: url('{{ asset('images/home/section-5/bg-section5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }
</style>

<main class="bg-section5 d-flex">
    <div class="container d-flex flex-column flex-xl-row justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/home/section-5/title.png') }}" alt="title">

            @php
                // กำหนดสีการ์ด
                $cardColors = ['#d1f541', '#d1f541', '#b8e64d', '#b8e64d', '#77b329', '#77b329'];
            @endphp

            <div class="row row-cols-1 row-cols-xl-2 g-3 mt-2">
                @foreach ($pressRelease->slice(0, 6) as $index => $post)
                    <div class="col">
                        <a href="{{ route('PressReleaseShowDetails', $post->id) }}" class="text-decoration-none text-black">
                            <div class="card d-flex flex-row p-3 border-0 custom-card"
                                style="background-color: {{ $cardColors[$index % count($cardColors)] }}; border-radius:20px; box-shadow: 0 4px 5px rgba(255, 255, 255, 0.7);">

                                <img src="{{ !empty($post->photos->first()->post_photo_file) ? asset('storage/' . $post->photos->first()->post_photo_file) : asset('images/home/section-4/logo-miss-files.png') }}"
                                    class="card-img-top bg-white" alt="Image {{ $index + 1 }}"
                                    onerror="this.onerror=null; this.src='{{ asset('images/home/section-4/logo-miss-files.png') }}';"
                                    style="height: 125px; width: 110px; object-fit: contain; border-radius: 10px;">


                                <div class="card-body p-1 bg-white ms-2 lh-1" style="border-radius: 10px;">
                                    <div class="d-flex border-bottom align-items-center mb-1 pb-1">
                                        <img src="{{ asset('images/home/section-5/calendar.png') }}" alt="calendar"
                                            class="me-2" width="25">
                                        {{ \Carbon\Carbon::parse($post->date)->format('d-m-Y') }}
                                    </div>
                                    <h5 class="card-title m-0">{{ $post->title_name }}</h5>
                                    <p class="card-text">{{ $post->topic_name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- <a href="#" class="link-green mt-3 text-black" style="border-radius: 30px;">ดูทั้งหมด</a> --}}
            <div class="d-flex justify-content-end align-items-start mt-3 position-relative">
                <a href="{{route('PressReleaseShowData')}}" class="link-green-section3 me-2">ดูทั้งหมด</a>
                <img src="{{ asset('images/home/section-3/leaf.png') }}" alt="leaf"
                    style="position: absolute; right: -5px; top: 20px; transform: translateY(-50%) rotate(30deg); width: 50px;">
            </div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center w-75 px-3">
            <img src="{{ asset('images/home/section-5/old-school.png') }}" alt="title">
            <div class="p-2 d-flex flex-column w-100"
                style="background: linear-gradient(to bottom, #d1f541, #569419); border-radius: 20px;">
                @foreach ($building as $index => $place)
                    <a href="{{ route('CitizensClubShowDetails', $place->id) }}" class="text-decoration-none text-black">
                        <div class="card d-flex flex-row p-3 border-0 custom-card"
                            style="border-radius:20px; background-color: transparent;">
                            <img src="{{ !empty($place->photos->first()->post_photo_file) ? asset('storage/' . $place->photos->first()->post_photo_file) : asset('images/home/section-4/logo-miss-files.png') }}"
                                class="card-img-top bg-white" alt="Image {{ $index + 1 }}"
                                onerror="this.onerror=null; this.src='{{ asset('images/home/section-4/logo-miss-files.png') }}';"
                                style="height: 100px; width: 100px; object-fit: contain; border-radius: 10px;">

                            <div class="card-body ms-2 lh-1 p-0" style="border-radius: 10px;">
                                <p class="card-text bg-white px-2 py-1 rounded">{{ $place->topic_name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{route('CitizensClubShowData')}}" class="mt-2 img-hover">
                <img src="{{ asset('images/home/section-5/buttonx.png') }}" alt="button-link">
            </a>
        </div>

    </div>
</main>
