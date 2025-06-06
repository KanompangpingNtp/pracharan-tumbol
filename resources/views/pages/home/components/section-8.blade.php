<style>
    .bg-section8 {
        background-image: url('{{ asset('images/home/section-8/bg-section8.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .btn-section-8 {
        background: linear-gradient(to right, #70c020, #d1f541, #70c020);
        border-radius: 20px;
        border: 0px solid black;
        box-shadow: 0 5px 15px rgba(129, 199, 0, 0.8);
        font-weight: bold;
        font-size: 22px;
        height: 4.2rem;
        transition: all 0.3s ease-in-out;
    }

    /* เอฟเฟกต์เมื่อ hover */
    .btn-section-8:hover {
        background: linear-gradient(to right, #d1f541, #70c020, #d1f541);
        box-shadow: 0 8px 20px rgba(129, 199, 0, 1);
        transform: scale(1.03);
    }
</style>

<main class="bg-section8 d-flex">
    <div class="container d-flex flex-column flex-lg-row justify-content-center  align-items-center gap-3">
        <div class="d-flex flex-column justify-content-center  align-items-center  w-100">
            <div class="title-section2  mb-3">
                <div class="d-flex ">
                    <div class="d-flex flex-column align-items-center lh-1 me-2">
                        <span>หนังสือข้าราชการ</span>
                        <div class="fs-3">องค์การบริหารส่วนตำบลพระอาจารย์</div>
                    </div>
                    <img src="{{ asset('images/home/section-8/book.png') }}" alt="icon" width="100" class="d-none d-sm-block">
                </div>
            </div>
            <div class="bg-white shadow text-black p-3 d-flex flex-column justify-content-center w-100"
                style="border-radius: 20px;">
                <div
                    class="d-flex flex-column flex-md-row justify-content-center align-items-center lh-1 gap-2 gap-md-5 my-4">
                    <button id="btn1" class="btn-section-8 text-center px-4">จากกรมส่งเสริม <br>
                        การปกครองท้องถิ่น</button>
                    <a href="https://www.nakhonnayoklocal.go.th/public/" target="_blank" id="btn2"
                        class="btn-section-8  text-black text-decoration-none px-4 py-4">จากท้องถิ่นจังหวัด</a>
                </div>

                <div id="box1" class="w-100 rounded d-flex flex-column">
                    @foreach ($LocalAdminPromotion->take(6) as $post)
                        <div class="p-2 mb-2 " style="background-color: rgb(230, 230, 230);">
                            <span><strong>ชื่อ {{ $post->title_name }}</strong></span>
                            <span class="text-end">วัน {{ $post->date }}</span> <br>
                            @foreach ($post->pdfs as $pdf)
                                <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                                    {{ basename($pdf->post_pdf_file) }}
                                </a>
                            @endforeach
                        </div>
                    @endforeach

                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('CivilServantBook') }}">
                        <img src="{{ asset('images/home/section-8/btn.png') }}" alt="3"
                            class="img-fluid img-hover" width="140">
                    </a>
                </div>

            </div>

        </div>
        <div class="d-flex flex-column justify-content-center align-items-center gap-4">
            <div>
                <div class="title-section2 mb-3">
                    <div class="d-flex ">
                        <div class="d-flex flex-column align-items-center lh-1 me-2">
                            <span>E-LIBRARY</span>
                            <div class="fs-3">องค์การบริหารส่วนตำบลพระอาจารย์</div>
                        </div>
                        <img src="{{ asset('images/home/section-8/bookshell.png') }}" alt="icon" width="140" class="d-none d-sm-block">
                    </div>
                </div>
                <div class="p-3"
                    style="background: linear-gradient(to bottom, #d1f541, #569419); box-shadow:0 2px 10px rgba(255, 255, 255, 0.7); border-radius: 20px;">
                    <div style="position:relative;padding-top:max(60%,324px);width:100%;height:0;"><iframe
                            style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;"
                            src="https://online.fliphtml5.com/njjce/flzr/" seamless="seamless" scrolling="no"
                            frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></div>
                </div>
                <div class="d-flex justify-content-end mt-2 w-100">
                    <a href="#">
                        <img src="{{ asset('images/home/section-8/btn-x.png') }}" alt="3"
                            class="img-fluid img-hover" width="140">
                    </a>
                </div>
            </div>
            <div>
                <div class="title-section2 mb-3">
                    <div class="d-flex ">
                        <div class="d-flex flex-column align-items-center lh-1 me-2" style="font-size: 35px;">
                            <span>แบบสำรวจความคิดเห็น</span>
                            <div class="fs-3">องค์การบริหารส่วนตำบลพระอาจารย์</div>
                        </div>
                        <img src="{{ asset('images/home/section-8/testing.png') }}" alt="icon" width="60" class="d-none d-sm-block">
                    </div>
                </div>
                <div class="px-4 py-2 lh-1 fw-bold fs-4"
                    style="background: linear-gradient(to right,#70c020, #d1f541, #70c020);
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                box-shadow:0 1px 10px rgba(0, 0, 0, 0.7);">
                    ท่านคิดว่า อบต.พระอาจารย์ <br>
                    ควรเน้นหนักแก้ไขปัญหาเรื่องใดเป็น อันดับแรก?
                </div>
                <div class="bg-white text-black p-2"
                    style="border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                box-shadow:0 2px 10px rgba(0, 0, 0, 0.7);">
                    <div class="radio-container mt-2 ms-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="1" id="radio1">
                            <label class="form-check-label" for="radio1">จัดการเรื่องการศึกษาทั้งในและนอกระบบ</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="2" id="radio2">
                            <label class="form-check-label" for="radio2">จัดมาตรการป้องกันน้ำท่วม</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="3" id="radio3">
                            <label class="form-check-label" for="radio3">แก้ไขปัญหาสิ่งแวดล้อม</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="4" id="radio4">
                            <label class="form-check-label" for="radio4">แก้ไขปัญหายาเสพติด</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="4"
                                id="radio4">
                            <label class="form-check-label" for="radio4">ปรับปรุงระบบสาธารณูปโภค</label>
                        </div>
                    </div>

                    <!-- ปุ่มส่ง -->
                    <div class="d-flex justify-content-end mt-2 w-100">
                        <a href="#">
                            <img src="{{ asset('images/home/section-8/btn-submit.png') }}" alt="3"
                                class="img-fluid img-hover" width="120">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
