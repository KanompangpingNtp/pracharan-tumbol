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
                <div class="fs-1 fw-bold mb-4">(ภ.ป.๑) ใบสมัครศูนย์เด็ก</div>

                <div class="container">
                    <h3>ข้อมูลเด็กเล็ก</h3>
                    <!-- Child Information -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="full_name" class="form-label">เด็กชื่อ-สกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="full_name" id="full_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ethnicity" class="form-label">เชื้อชาติ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ethnicity" id="ethnicity" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nationality" class="form-label">สัญชาติ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nationality" id="nationality" required>
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label for="birthday" class="form-label">เกิดวันที่ <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="birthday" id="birthday" required>
                        </div> --}}

                        <div class="row mb-3">
                            <div class="col-12 col-md-4">
                                <label for="day">วันเกิดที่ (กรอกวันที่เกิด) <span class="text-danger">*</span></label>
                                <input type="number" id="day" name="day" class="form-control" min="1" max="31" required>
                                <small id="dayError" class="form-text text-danger" style="display: none;">กรุณากรอกวันเป็นตัวเลขระหว่าง 1 - 31</small>
                            </div>

                            <script>
                              document.getElementById("day").addEventListener("input", function() {
                                const dayInput = document.getElementById("day");
                                const dayError = document.getElementById("dayError");

                                const dayValue = parseInt(dayInput.value, 10);

                                // ตรวจสอบว่าเป็นค่าที่อยู่ในช่วง 1 - 31 หรือไม่
                                if (dayValue < 1 || dayValue > 31 || isNaN(dayValue)) {
                                  // รีเซ็ตค่าที่กรอกไป
                                  dayInput.value = ""; // ลบค่าที่กรอก
                                  // แสดงข้อความเตือน
                                  dayError.style.display = "block";
                                  dayInput.classList.add("is-invalid");  // เพิ่มคลาสที่ทำให้ input แสดงสถานะผิดพลาด
                                } else {
                                  // ซ่อนข้อความเตือนและลบคลาสผิดพลาดถ้าค่าถูกต้อง
                                  dayError.style.display = "none";
                                  dayInput.classList.remove("is-invalid");
                                }
                              });
                            </script>

                            <div class="col-12 col-md-4">
                                <label for="month">เดือน (เลือกเดือนเกิด) <span class="text-danger">*</span></label>
                                <select id="month" name="month" class="form-control" required>
                                    <option value="1">มกราคม</option>
                                    <option value="2">กุมภาพันธ์</option>
                                    <option value="3">มีนาคม</option>
                                    <option value="4">เมษายน</option>
                                    <option value="5">พฤษภาคม</option>
                                    <option value="6">มิถุนายน</option>
                                    <option value="7">กรกฎาคม</option>
                                    <option value="8">สิงหาคม</option>
                                    <option value="9">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤศจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="year">ปี (กรอกปีที่เกิดเป็น พ.ศ.) <span class="text-danger">*</span></label>
                                <input type="number" id="year" name="year" class="form-control" min="1900" required>
                                <small id="yearError" class="form-text text-danger" style="display: none;">กรุณากรอกปี 4 หลัก</small>
                            </div>

                            <script>
                                document.getElementById("year").addEventListener("input", function() {
                                    const yearInput = document.getElementById("year");
                                    const yearError = document.getElementById("yearError");

                                    // ตรวจสอบว่าค่าที่กรอกมีความยาวมากกว่า 4 ตัวหรือไม่
                                    if (yearInput.value.length > 4) {
                                        // หากกรอกเกิน 4 ตัว ให้ลบค่าที่กรอก
                                        yearInput.value = yearInput.value.slice(0, 4);
                                    }

                                    const yearValue = yearInput.value;

                                    // ตรวจสอบว่าเป็นเลข 4 หลักหรือไม่
                                    if (yearValue.length !== 4 || isNaN(yearValue)) {
                                        // แสดงข้อความเตือนถ้าปีไม่ครบ 4 หลักหรือไม่ใช่ตัวเลข
                                        yearError.style.display = "block";
                                        yearInput.classList.add("is-invalid");  // เพิ่มคลาสที่ทำให้ input แสดงสถานะผิดพลาด
                                    } else {
                                        // ซ่อนข้อความเตือนและลบคลาสผิดพลาดถ้าค่าถูกต้อง
                                        yearError.style.display = "none";
                                        yearInput.classList.remove("is-invalid");
                                    }
                                });
                            </script>

                        </div>

                        <div class="row mb-1" >
                            <div class="col-12 d-flex align-items-center">
                                <label for="birth_day" class="mb-0 me-2 " style="width: 12rem;">วันเกิดตามปฎิทินสากลคือ</label>
                                <input type="text" id="birth_day" name="birthday" class="form-control" readonly>
                            </div>
                        </div>


                        <style>
                            #birth_day {
                                border: none;  /* ลบขอบ */
                                background: transparent;  /* ลบพื้นหลัง */
                                box-shadow: none;  /* ลบเงา */
                            }
                        </style>

                        <script>
                            // ฟังก์ชันแปลงวันที่จาก พ.ศ. เป็น ค.ศ.
                            function convertToAD(year) {
                                return year - 543;
                            }

                            // เมื่อมีการกรอกข้อมูลในช่องวัน เดือน ปี
                            document.querySelectorAll("#day, #month, #year").forEach(input => {
                                input.addEventListener("input", function () {
                                    // ดึงค่าจาก input
                                    const day = document.getElementById("day").value;
                                    const month = document.getElementById("month").value;
                                    const year = document.getElementById("year").value;

                                    if (day && month && year) {
                                        // แปลงปี พ.ศ. เป็น ค.ศ.
                                        const yearAD = convertToAD(parseInt(year));

                                        // สร้างวันที่ในรูปแบบ dd/mm/yyyy
                                        const formattedDate = `${String(day).padStart(2, '0')}/${String(month).padStart(2, '0')}/${yearAD}`;

                                        // แสดงวันที่ที่แปลงแล้วใน input birth_day
                                        document.getElementById("birth_day").value = formattedDate;
                                    }
                                });
                            });
                        </script>


                    <div class="row ">
                        <div class="col-md-4 mb-3">
                            <label for="age" class="form-label">อายุ (ปี) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="age" id="age" required>
                        </div>
                        {{-- <div class="col-md-4 mb-3">
                            <label for="age_months" class="form-label">อายุ (เดือน) นับถึงวันที่ 16 พฤษภาคม</label>
                            <input type="number" class="form-control" name="age_months" id="age_months" required>
                        </div> --}}
                        <div class="col-md-4 mb-3">
                            <label for="age_months" class="form-label">อายุ (เดือน)</label>
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control" name="age_months" id="age_months" required>
                                <span class="col-md-5 ms-3">นับถึงวันที่ 16 พฤษภาคม</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="age_since_date" class="form-label"></label>
                            <?php
                            $currentDate = date('Y-m-d');
                            ?>
                            <input type="hidden" class="form-control" name="age_since_date" id="age_since_date" value="<?= $currentDate; ?>" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="citizen_id" class="form-label">เลขประจำตัวประชาชน <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="citizen_id" id="citizen_id" required>
                        </div>
                    </div>

                    <hr>
                    <!-- Address Information -->
                    <h3>ที่อยู่ตามสำเนาทะเบียนบ้าน</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="regis_house_number" class="form-label">บ้านเลขที่ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_house_number" id="regis_house_number" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="regis_village" class="form-label">หมู่ที่ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_village" id="regis_village" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="regis_road" class="form-label">ถนน <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_road" id="regis_road" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="regis_subdistrict" class="form-label">ตำบล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_subdistrict" id="regis_subdistrict" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="regis_district" class="form-label">อำเภอ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_district" id="regis_district" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="regis_province" class="form-label">จังหวัด <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="regis_province" id="regis_province" required>
                        </div>
                    </div>

                    <hr>

                    <!-- Current Address Information -->
                    <h3>ที่อยู่อาศัยจริงในปัจจุบัน</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="current_house_number" class="form-label">บ้านเลขที่ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_house_number" id="current_house_number" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="current_village" class="form-label">หมู่ที่ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_village" id="current_village" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="current_road" class="form-label">ถนน <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_road" id="current_road" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="current_subdistrict" class="form-label">ตำบล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_subdistrict" id="current_subdistrict" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="current_district" class="form-label">อำเภอ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_district" id="current_district" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="current_province" class="form-label">จังหวัด <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_province" id="current_province" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="current_phone_number" class="form-label">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="current_phone_number" id="current_phone_number" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="number_of_siblings" class="form-label">มีพี่น้องร่วมบิดา - มารดาเดียวกันจำนวน (ถ้าไม่มีใส่ - )</label>
                            <input type="text" name="number_of_siblings" class="form-control" id="number_of_siblings" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="the_child_number" class="form-label">เป็นบุตรลำดับที่</label>
                            <input type="text" name="the_child_number" class="form-control" id="the_child_number" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="congenital_disease" class="form-label">โรคประจำตัว</label>
                            <input type="text" class="form-control" name="congenital_disease" id="congenital_disease" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="blood_group" class="form-label">หมู่โลหิต</label>
                            <input type="text" class="form-control" name="blood_group" id="blood_group" >
                        </div>
                    </div>

                    <hr>
                    <!-- Parents Information -->
                    <h3>ข้อมูลบิดา-มารดา หรือ ผู้อุปการะ</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="father_name" class="form-label">บิดาชื่อ - สกุล</label>
                            <input type="text" class="form-control" name="father_name" id="father_name" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="father_occupation" class="form-label">อาชีพ</label>
                            <input type="text" class="form-control" name="father_occupation" id="father_occupation" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edu_qual_father" class="form-label">วุฒิการศึกษา</label>
                            <input type="text" class="form-control" name="edu_qual_father" id="edu_qual_father" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mother_name" class="form-label">มารดาชื่อ - สกุล</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mother_occupation" class="form-label">อาชีพ </label>
                            <input type="text" id="mother_occupation" class="form-control" name="mother_occupation" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edu_qual_mother" class="form-label">วุฒิการศึกษา</label>
                            <input type="text" id="edu_qual_mother" class="form-control" name="edu_qual_mother" >
                        </div>
                    </div>

                    <hr>
                    <!-- Care Options -->
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="form-label">ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="care_option_father" name="care_option" value="father" required>
                                <label class="form-check-label" for="care_option_father">บิดา</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="care_option_mother" name="care_option" value="mother" required>
                                <label class="form-check-label" for="care_option_mother">มารดา</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="care_option_fatherAdmother" name="care_option" value="fatherAdmother" required>
                                <label class="form-check-label" for="care_option_fatherAdmother">ทั้งบิดา - มารดาร่วมกัน</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="care_option_relative" name="care_option" value="relative" required>
                                <label class="form-check-label" for="care_option_relative">ญาติ</label>
                            </div>

                            <div class="col-md-4 mb-3" id="care_option_relativeDiv" style="display: none;">
                                <label for="care_option_relative_text" class="form-label">(โปรดระบุความเกี่ยวข้อง)</label>
                                <input type="text" id="care_option_relative_text" class="form-control" name="care_option_relative_text">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="care_option_other" name="care_option" value="Other" >
                                <label class="form-check-label" for="care_option_other">อื่น ๆ</label>
                            </div>

                            <div class="col-md-4 mb-3" id="otherCareOptionDiv" style="display: none;">
                                <label for="care_option_other_text" class="form-label">(โปรดระบุรายละเอียด)</label>
                                <input type="text" id="care_option_other_text" class="form-control" name="care_option_other_text">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Caretaker Income -->
                    <div class="row mb-3">
                        <div class="mb-3 col-md-3">
                            <label for="caretaker_income" class="form-label">ผู้ดูแลอุปการะเด็ก
                                มีรายได้ในครอบครัวต่อเดือน</label>
                            <div style="display: flex; align-items: center;">
                                <input type="text" class="form-control" id="caretaker_income" name="caretaker_income" >
                                <span class="ms-1">บาท</span>
                            </div>
                        </div>
                    </div>

                    <!-- Applicant's Information -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="applicants_name" class="form-label">ผู้นำเด็กมาสมัคร ชื่อ-สกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="applicants_name" name="applicants_name" required>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="applicants_relevant" class="form-label">เกี่ยวข้องเป็น <span class="text-danger">*</span></label>
                            <div style="display: flex; align-items: center;">
                                <input type="text" class="form-control" id="applicants_relevant" name="applicants_relevant" style="flex: 1; margin-right: 5px;" required>
                                <span class="ms-1">ของเด็ก</span>
                            </div>
                        </div>
                    </div>

                    <!-- Child Carrier Information -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="child_carrier_name" class="form-label">ผู้ที่จะรับส่งเด็กชื่อ - สกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="child_carrier_name" name="child_carrier_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="child_carrier_relevant" class="form-label">โดยเกี่ยวข้องเป็น <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="child_carrier_relevant" name="child_carrier_relevant" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="child_carrier_phone" class="form-label">เบอร์โทรศัพท์ติดต่อ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="child_carrier_phone" name="child_carrier_phone" required>
                        </div>
                    </div>

                    <br>

                    <div class="col-md-12">
                        <span><strong>คำรับรอง</strong><br></span>
                        <span class="ms-4">1. ข้าพเจ้าขอรับรองว่า ได้อ่านประกาศรับสมัครศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลพระอาจารย์เข้าใจแล้ว เด็กที่นำมาสมัครมีคุณสมบัติถูกต้องตรงประกาศ และหลักฐานที่ใช้สมัครใน
                             วันนี้เป็นหลักฐานที่ถูกต้องจริง <br>
                        </span>
                        <span class="ms-4">2. ข้าพเจ้ามีสิทธิถูกต้องในการที่จะให้เด็กสมัครเข้ารับการศึกษาเลี้ยงดูในศูนย์พัฒนาเด็กเล็กขององค์การบริหารส่วนตำบลพระอาจารย์ <br></span>
                        <span class="ms-4">3. ข้าพเจ้ายินดีปฏิบัติตามระเบียบ ข้อกำหนดองค์การบริหารส่วนตำบลพระอาจารย์ และยินดีปฏิบัติตามคำแนะนำเกี่ยวกับการพัฒนาความพร้อมที่ศูนย์พัฒนาเด็กเล็ก กำหนด</span>
                        <br>
                        <br>
                        <span><strong>หมายเหตุ</strong> เอาข้อมูลเอกสาร/หลักฐานที่ใช้ในการสมัครเรียน ให้นำมาพร้อมนักเรียน ติดต่อมอบตัว ภายใน 7วัน ทำการที่ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลพระอาจารย์</span>
                    </div>

                    <div class="text-center w-full border">
                        <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                            ส่งฟอร์มข้อมูล</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
