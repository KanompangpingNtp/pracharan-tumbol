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
                <div class="fs-1 fw-bold mb-4">คำร้องทั่วไป</div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Row 1: วันที่ และ เรื่อง -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">วันที่ <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">เรื่อง <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" maxlength="255" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="included" class="form-label">สิ่งที่ส่งมาด้วย<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="included" name="included" rows="2" required></textarea>
                    </div>

                    <!-- Row 2: คำนำหน้า และ ชื่อ -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-3">
                            <label for="salutation" class="form-label">คำนำหน้า</label>
                            <select class="form-select" id="salutation" name="salutation">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">ชื่อ - นามสกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" maxlength="255" required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">อายุ (ปี) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                    </div>

                    <!-- Row 4: หมู่บ้าน, ตำบล, อำเภอ -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label for="house_number" class="form-label">บ้านเลขที่<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="house_number" name="house_number" maxlength="50" required>
                        </div>
                        <div class="col-md-4">
                            <label for="village" class="form-label">หมู่บ้าน </label>
                            <input type="text" class="form-control" id="village" name="village" maxlength="100" required>
                        </div>
                        <div class="col-md-4">
                            <label for="subdistrict" class="form-label">ตำบล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subdistrict" name="subdistrict" maxlength="100" required>
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">อำเภอ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="district" name="district" maxlength="100" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="province" class="form-label">จังหวัด <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="province" name="province" maxlength="100" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="phone" class="form-label">เบอร์ติดต่อ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="100" required>
                        </div>
                    </div>

                    <!-- Row 6: รายละเอียดคำขอ -->
                    <div class="mb-3">
                        <label for="request_details" class="form-label">เรื่องร้องเรียนต่อองค์การบริหารส่วนตำบลพระอาจารย์ กรณี<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="request_details" name="request_details" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="proceedings" class="form-label">ข้าพเจ้าขอความอนุเคราะห์ให้องค์การบริหารส่วนตำบลพระอาจารย์ ดำเนินการ<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="proceedings" name="proceedings" rows="3" required></textarea>
                    </div>

                    <!-- Row 7: แนบไฟล์ -->
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


@endsection
