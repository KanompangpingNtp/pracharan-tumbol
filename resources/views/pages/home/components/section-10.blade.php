<style>
    .bg-page10 {
        background-image: url('{{ asset('images/home/section-10/bg-section10.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */

    }

    .bg-footer {
        background-image: url('{{ asset('images/home/section-10/footer.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 2vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */

    }

    .logo-footer {
        width: 10rem;
        hight: 10rem;
        z-index: 5;
    }

    @media (max-width: 765px) {
        .logo-footer {
            width: 12rem;
            hight: 12rem;
        }
    }

    .no-bullets {
        list-style-type: none;
        /* ลบจุดด้านหน้า */
        padding-left: 0;
        /* ลบระยะห่างซ้าย */
        margin: 0;
        /* ลบระยะห่างรอบๆ */
    }

    .no-bullets li a {
        color: #000;
        transition: all 0.3s ease;
    }

    .no-bullets li a:hover {
        color: #ffffff;
    }

    .bg-dataweb {
        color: rgb(255, 255, 255);
        box-shadow: 0px 2px 15px rgba(255, 255, 255, 0.9);
        font-weight: bold;
        background: linear-gradient(to top, #d1f541, #70c020);
        border-radius: 16px;
    }

    .hover-effect {
        transition: transform 0.3s ease, filter 0.3s ease;
        /* ทำให้การเปลี่ยนลื่นไหล */
    }

    .hover-effect:hover {
        transform: scale(1.2);
        /* ขยายขนาดเมื่อ hover */
        filter: drop-shadow(0 0 10px rgba(0, 123, 255, 0.8));
        /* เพิ่มเอฟเฟกต์เรืองแสง */
    }

    .text-link-custom a {
        text-decoration: none;
        color: #000;

    }

    .text-link-custom a:hover {
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .bg-coute {
        background: linear-gradient(to right, #d1f541b7, #70c020b2);
        padding: 10px 20px;
        width: 100%;
    }
</style>
<!-- Content Section -->
<main class="bg-page10 d-flex">
    <div class="d-flex flex-column justify-content-end align-items-center w-100 ">
        <div class="d-flex justify-content-between align-items-end w-100  ">
            <img src="{{ asset('images/home/section-10/tree-left.png') }}" alt="left" class="d-none d-lg-block">
            <img src="{{ asset('images/home/section-10/solar-cell.png') }}" alt="solar-cell" class="d-none d-lg-block">
            <img src="{{ asset('images/home/section-10/wind-power.png') }}" alt="wind-power" class="d-none d-lg-block">
            <img src="{{ asset('images/home/section-10/tree-right.png') }}" alt="right" class="d-none d-lg-block">
        </div>
        <div class="bg-coute mb-4">
            <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">
                <div class="text-center py-3 px-4  border-3 border-light border-end lh-1">
                    <span class="fw-bold fs-3">จำนวนผู้เข้าชมเว็บไซต์</span> <br>
                    number of website visitors
                </div>
                <div class="text-center py-3 px-5  border-3 border-light border-end lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold">ขณะนี้</span>
                </div>
                <div class="text-center py-3 px-5  border-3 border-light border-end lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold">วันนี้</span>
                </div>
                <div class="text-center py-3 px-5  border-3 border-light border-end lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold">เดือนนี้</span>
                </div>
                <div class="text-center py-3 px-5 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold">ปีนี้</span>
                </div>
                <div class="text-center py-3 px-5  border-3 border-light border-start lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold">ทั้งหมด</span>
                </div>
            </div>
        </div>
        <div class="bg-footer d-flex w-100">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-around align-items-center w-100 gap-3 py-3">
                <img src="{{ asset('images/home/section-10/logo.png') }}" alt="logo" class="logo-footer"
                    style="margin-top: -4rem;">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <div class="lh-1">
                        <span class="fw-bold fs-4">องค์การบริหารส่วนตำบลพระอาจารย์</span> <br>
                        <span class="fw-bold fs-5">Phra Achan Subdistrict Administrative Organization</span> <br>
                        <span class="text-muted">
                            ถนนคลองหกวา หมู่ที่ 5 ตำบลพระอาจารย์ <br>
                            อำเภอองครักษ์ จังหวัดนครนายก <br>
                            รหัสไปรษณีย์ 26120
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1">
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/phone-call.png') }}" alt="phone" width="20"
                            height="20">
                        <div>โทรศัพท์ : 037-610559</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/fax.png') }}" alt="phone" width="20"
                            height="20">
                        <div>โทรสาร : 037-610559</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/gold.png') }}" alt="phone" width="20"
                            height="20">
                        <div>การคลัง : 086-7802324</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/stole.png') }}" alt="phone" width="20"
                            height="20">
                        <div>สำนักงานปลัด : 085-0422553</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/home/section-10/email.png') }}" alt="phone" width="23"
                            height="20">
                        <div>Email : prajan2565@gmail.com</div>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1">
                    <span class="bg-dataweb px-2 py-1 mb-1">ข้อมูลเว็บไซด์</span>
                    <ul class="no-bullets">
                        <li><a href="#" class="text-decoration-none ">หน้าแรก</a></li>
                        <li><a href="#" class="text-decoration-none ">กระดานกระทู้</a></li>
                        <li><a href="{{route('contect')}}" class="text-decoration-none ">ติดต่อ</a></li>
                        <li><a href="#" class="text-decoration-none ">แผนผังเว็บไซต์</a></li>
                    </ul>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-start lh-1 gap-2 text-link-custom">
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/home/section-10/email.png') }}" alt="email" width="20"
                            height="15">
                        <div>ตรวจสอบEmail</div>
                    </a>
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/home/section-10/home.png') }}" alt="phone" width="20"
                            height="20">
                        <div>เว็บใกล้เคียง</div>
                    </a>
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/home/section-10/user.png') }}" alt="phone" width="20"
                            height="20">
                        <div>เว็บมาสเตอร์</div>
                    </a>
                    <a href="{{ route('showLoginForm') }}" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/home/section-10/enter.png') }}" alt="phone" width="20"
                            height="20">
                        <div>เข้าสู่ระบบ Admin</div>
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1 gap-2">
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/home/section-10/arrow.png') }}" alt="upload" width="25"
                            height="25"></a>
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/home/section-10/share.png') }}" alt="chair" width="25"
                            height="25"></a>
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/home/section-10/messenger.png') }}" alt="message" width="25"
                            height="25"></a>
                </div>

            </div>
        </div>
    </div>
</main>
