<style>
    .bg-section6 {
        background-image: url('{{ asset('images/home/section-6/bg-section6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }


    .slide-card img {
        width: 100%;
        border-radius: 30px;
    }

    .text-box {
        background: white;
    }

</style>

<main class="bg-section6 d-flex">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section3 lh-1 d-flex align-items-center justify-content-center mb-2">
            ที่นี่ตำบลพระอาจารย์
        </div>
        <div class="d-flex justify-content-center align-items-center mt-1 px-5 py-2 w-100">
            <div class="px-2 pt-2 pb-4 w-100 position-relative" style="background: linear-gradient(to bottom, #d1f541, #569419); border-radius: 30px; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.7);">
                <img src="{{ asset('images/home/section-6/leaf.png') }}" alt="leaf" style="position: absolute; right: -20px; top: 10px; transform: translateY(-50%) rotate(30deg); width: 60px;">
                <div id="carouselsatet" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($building as $index => $post)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="slide-card p-2">
                                <img src="{{ asset('storage/' . ($post->photos->first()->post_photo_file ?? 'images/default.jpg')) }}" alt="Image {{ $index + 1 }}"
                                style=" height: 460px; object-fit: cover; border-radius: 10px;">

                                <div class="p-2 my-3" style="background: linear-gradient(to bottom, #d1f541, #569419); border-radius: 30px; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.7);">
                                    <div class="text-box fs-4 text-center bg-white px-3 py-2" style="border-radius: 30px;">
                                        {{ Str::limit($post->topic_name ?? 'ไม่มีหัวข้อ', 60, '...') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsatet" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselsatet" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-end align-items-start mt-3 position-relative">
            <a href="{{route('RecommendedPlacesShowData')}}" class="link-green-section3 me-2">ดูทั้งหมด</a>
            <img src="{{ asset('images/home/section-3/leaf.png') }}" alt="leaf" style="position: absolute; right: -5px; top: 20px; transform: translateY(-50%) rotate(30deg); width: 50px;">
        </div>


    </div>
</main>
