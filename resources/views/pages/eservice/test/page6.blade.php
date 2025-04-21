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
                <div class="fs-1 fw-bold mb-4">คำร้องขอน้ำอุปโภค บริโภค</div>

                <div class="container">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 mb-3">
                            <div class="col-md-2">
                                <label for="salutation" class="form-label">คำนำหน้า</label>
                                <select class="form-select" id="salutation" name="salutation">
                                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="full_name" class="form-label">ชื่อ - นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>

                            <div class="col-md-3">
                                <label for="house_number" class="form-label">บ้านเลขที่<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="house_number" name="house_number">
                            </div>

                            <div class="col-md-3">
                                <label for="village" class="form-label">หมู่บ้าน </label>
                                <input type="text" class="form-control" id="village" name="village" >
                            </div>

                            <div class="col-md-3">
                                <label for="occupation" class="form-label">อาชีพ </label>
                                <input type="text" class="form-control" id="occupation" name="occupation" >
                            </div>

                            <div class="col-md-3">
                                <label for="number_people" class="form-label">มีจำนวนสมาชิกที่อาศัยอยู่จริงในบ้าน จำนวน คน </label>
                                <input type="text" class="form-control" id="number_people" name="number_people" >
                            </div>

                            <div class="col-md-3">
                                <label for="phone_number" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" >
                            </div>
                        </div>

                        <div>
                            <p>ขอยื่นคำร้องขอรับการสนับสนุนน้ำเพื่อการอุปโภค - บริโภคจากองค์การบริหารส่วนตำบลพระอาจารย์ ในการแก้ปัญหาการขาดแคลนน้ำ โดยการจัดการหาน้ำให้ต่อไป จำนวน
                                <input type="number" class="form-control d-inline" style="width: 80px;" name="number_trips"> เที่ยว ซึงน้ำจำนวนดังกล่าวจะช่วยบรรเทาความเดือดร้อนในเบื่องต้นได้
                            </p>
                        </div>

                        <div class="mb-3">
                            <label for="attachments" class="form-label">แนบไฟล์ (รูปหรือเอกสารประกอบคำร้อง)</label>
                            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
                            <div id="file-list" class="mt-1">
                                <div class="d-flex flex-wrap gap-3"></div>
                            </div>
                        </div>

                        <!-- ปุ่มบันทึก -->
                        <div class="text-center w-full border">
                            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                                ส่งฟอร์มข้อมูล</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
