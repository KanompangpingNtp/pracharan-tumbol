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
            <div class="fs-1 fw-bold mb-4">(ดร.๐๑) คำร้องขอลงทะเบียนเพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด</div>

            <div class="container">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">ความสัมพันธ์กับเด็กแรกเกิด <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="father" value="1" required>
                                <label class="form-check-label" for="father">
                                    บิดา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="mother" value="2">
                                <label class="form-check-label" for="mother">
                                    มารดา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="parent" value="3">
                                <label class="form-check-label" for="parent">
                                    ผู้ปกครอง
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="relationship_detail_div" style="display: none;">
                            <label class="form-label d-block">ความสัมพันธ์ผู้ปกครอง</label>
                            <input type="text" class="form-control" id="relationship_detail" name="relationship_detail">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-4">
                            <label for="salutation_parent">คำนำหน้า :</label>
                            <select class="form-select" id="salutation_parent" name="salutation_parent">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8">
                            <label for="fullname_parent">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                            <input type="text" id="fullname_parent" name="fullname_parent" class="form-control" required>
                        </div>
                    </div>
                    <style>
                        #birth_day {
                            border: none;
                            /* ลบขอบ */
                            background: transparent;
                            /* ลบพื้นหลัง */
                            box-shadow: none;
                            /* ลบเงา */
                        }

                    </style>
                    <div class="row mb-3">
                        <div class="col-12 col-md-4 mb-3">
                            <label for="idcard_parent">เลขบัตรประชาชน: <span class="text-danger">*</span></label>
                            <input type="text" id="idcard_parent" name="idcard_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="birthday_parent">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                            <input type="date" id="birthday_parent" name="birthday_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="nationality_parent">สัญชาติ: <span class="text-danger">*</span></label>
                            <input type="text" id="nationality_parent" name="nationality_parent" class="form-control" required>
                        </div>
                        <hr>
                        <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="address_parent">บ้านเลขที่: <span class="text-danger">*</span></label>
                            <input type="text" id="address_parent" name="address_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="village_parent">หมู่:</label>
                            <input type="text" id="village_parent" name="village_parent" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="building_parent">อาคารตึก:</label>
                            <input type="text" id="building_parent" name="building_parent" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="floor">ชั้น:</label>
                            <input type="text" id="floor" name="floor" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="room">เลขที่ห้อง:</label>
                            <input type="text" id="room" name="room" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="village_name_parent">หมู่บ้าน:</label>
                            <input type="text" id="village_name_parent" name="village_name_parent" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="alley_parent">ตรอก/ซอย:</label>
                            <input type="text" id="alley_parent" name="alley_parent" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="road_parent">ถนน:</label>
                            <input type="text" id="road_parent" name="road_parent" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="subdistrict_parent">ตำบล/แขวง: <span class="text-danger">*</span></label>
                            <input type="text" id="subdistrict_parent" name="subdistrict_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="district_parent">อำเภอ/เขต: <span class="text-danger">*</span></label>
                            <input type="text" id="district_parent" name="district_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="province_parent">จังหวัด: <span class="text-danger">*</span></label>
                            <input type="text" id="province_parent" name="province_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="postal_code_parent">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                            <input type="text" id="postal_code_parent" name="postal_code_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="phone_house_parent">โทรศัพท์บ้าน: <span class="text-danger">*</span></label>
                            <input type="text" id="phone_house_parent" name="phone_house_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="phone_number_parent">โทรศัพท์มือถือ: <span class="text-danger">*</span></label>
                            <input type="text" id="phone_number_parent" name="phone_number_parent" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_parent" id="no_occupation" value="1" required>
                                <label class="form-check-label" for="no_occupation">
                                    ไม่ได้ประกอบอาชีพ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_parent" id="have_occupation" value="2">
                                <label class="form-check-label" for="have_occupation">
                                    ประกอบอาชีพ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="occupation_detail_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="occupation_detail_parent" name="occupation_detail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_parent" id="no_education" value="1" required>
                                <label class="form-check-label" for="no_education">
                                    ไม่ได้รับการศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_parent" id="do_education" value="2">
                                <label class="form-check-label" for="do_education">
                                    กำลังศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_parent" id="end_education" value="3">
                                <label class="form-check-label" for="end_education">
                                    จบการศึกษา
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="education_detail_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="education_detail_parent" name="education_detail">
                        </div>
                    </div>
                    <hr>
                    <h4>ข้อมูลเด็ก (ตามสูติบัตร)</h4>
                    <div class="row mb-3">
                        <div class="col-12 col-md-4">
                            <label for="salutation_children">คำนำหน้า :</label>
                            <select class="form-select" id="salutation_children" name="salutation_children">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="เด็กชาย">เด็กชาย</option>
                                <option value="เด็กหญิง">เด็กหญิง</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <label for="fullname_children">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                            <input type="text" id="fullname_children" name="fullname_children" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="idcard_children">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                            <input type="text" id="idcard_children" name="idcard_children" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="birthday_children">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                            <input type="date" id="birthday_children" name="birthday_children" class="form-control" required>
                        </div>
                    </div>
                    <h6>ข้อมูลมารดา</h6>
                    <div class="row mb-3">
                        <div class="col-12 col-md-4">
                            <label for="salutation_mother">คำนำหน้า :</label>
                            <select class="form-select" id="salutation_mother" name="salutation_mother">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="เด็กหญิง">เด็กหญิง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <label for="fullname_mother">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                            <input type="text" id="fullname_mother" name="fullname_mother" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="idcard_mother">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                            <input type="text" id="idcard_mother" name="idcard_mother" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="age_mother">อายุ: <span class="text-danger">*</span></label>
                            <input type="text" id="age_mother" name="age_mother" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="nationality_mother">สัญชาติ: <span class="text-danger">*</span></label>
                            <input type="text" id="nationality_mother" name="nationality_mother" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="birthday_mother">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                            <input type="date" id="birthday_mother" name="birthday_mother" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_mother" id="no_occupation_mother" value="1" required>
                                <label class="form-check-label" for="no_occupation_mother">
                                    ไม่ได้ประกอบอาชีพ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_mother" id="have_occupation_mother" value="2">
                                <label class="form-check-label" for="have_occupation_mother">
                                    ประกอบอาชีพ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="occupation_detail_mother_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="occupation_detail_mother" name="occupation_detail_mother">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_mother" id="no_education_mother" value="1" required>
                                <label class="form-check-label" for="no_education_mother">
                                    ไม่ได้รับการศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_mother" id="do_education_mother" value="2">
                                <label class="form-check-label" for="do_education_mother">
                                    กำลังศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_mother" id="end_education_mother" value="3">
                                <label class="form-check-label" for="end_education_mother">
                                    จบการศึกษา
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="education_detail_mother_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="education_detail_mother" name="education_detail_mother">
                        </div>
                    </div>
                    <hr>
                    <h6>ข้อมูลบิดา</h6>
                    <div class="row mb-3">
                        <div class="col-12 col-md-4">
                            <label for="salutation_father">คำนำหน้า :</label>
                            <select class="form-select" id="salutation_father" name="salutation_father">
                                <option value="" selected disabled>เลือกคำนำหน้า</option>
                                <option value="เด็กชาย">เด็กชาย</option>
                                <option value="นาย">นาย</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <label for="fullname_father">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                            <input type="text" id="fullname_father" name="fullname_father" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="idcard_father">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                            <input type="text" id="idcard_father" name="idcard_father" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="age_father">อายุ: <span class="text-danger">*</span></label>
                            <input type="text" id="age_father" name="age_father" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="nationality_father">สัญชาติ: <span class="text-danger">*</span></label>
                            <input type="text" id="nationality_father" name="nationality_father" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="birthday_father">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                            <input type="date" id="birthday_father" name="birthday_father" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_father" id="no_occupation_father" value="1" required>
                                <label class="form-check-label" for="no_occupation_father">
                                    ไม่ได้ประกอบอาชีพ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occupation_father" id="have_occupation_father" value="2">
                                <label class="form-check-label" for="have_occupation_father">
                                    ประกอบอาชีพ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="occupation_detail_father_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="occupation_detail_father" name="occupation_detail_father">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_father" id="no_education_father" value="1" required>
                                <label class="form-check-label" for="no_education_father">
                                    ไม่ได้รับการศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_father" id="do_education_father" value="2">
                                <label class="form-check-label" for="do_education_father">
                                    กำลังศึกษา
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education_father" id="end_education_father" value="3">
                                <label class="form-check-label" for="end_education_father">
                                    จบการศึกษา
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4" id="education_detail_father_div" style="display: none;">
                            <label class="form-label d-block">ระบุ</label>
                            <input type="text" class="form-control" id="education_detail_father" name="education_detail_father">
                        </div>
                    </div>
                    <hr>
                    <h4>ช่องทางการรับเงินอุดหนุน</h4>
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label class="form-label d-block">(เลือกเพียง 1 ธนาคาร) <span class="text-danger">*</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="account" id="account_1" value="1" required>
                                <label class="form-check-label" for="account_1">
                                    ธนาคารกรุงไทย ประเภทบัญชี ออมทรัพย์
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="account" id="account_2" value="2">
                                <label class="form-check-label" for="account_2">
                                    ธนาคาร ธ.ก.ส. ประเภทบัญชี ออมทรัพย์
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="account" id="account_3" value="3">
                                <label class="form-check-label" for="account_3">
                                    ธนาคารออมสิน ประเภทบัญชีเงินฝากเผื่อเรียก
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="account_name">ชื่อบัญชี: <span class="text-danger">*</span></label>
                            <input type="text" id="account_name" name="account_name" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="account_id">เลขที่บัญชี: <span class="text-danger">*</span></label>
                            <input type="text" id="account_id" name="account_id" class="form-control" required>
                        </div>
                    </div>

                    <div class="text-center w-full border">
                        <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                            ส่งฟอร์มข้อมูล</button>
                    </div>
                </form>
            </div>

            <script src="{{asset('js/multipart_files.js')}}"></script>
            <script>
                document.getElementById('parent').addEventListener('change', function() {
                    var detailDiv = document.getElementById('relationship_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('relationship_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('relationship_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });



                document.getElementById('have_occupation').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_occupation').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });



                document.getElementById('end_education').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('do_education').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_education').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });

                document.getElementById('have_occupation_mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_mother_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_occupation_mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_mother_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('end_education_mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_mother_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('do_education_mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_mother_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_education_mother').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_mother_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });

                document.getElementById('have_occupation_father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_father_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_occupation_father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('occupation_detail_father_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('end_education_father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_father_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('do_education_father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_father_div');
                    if (this.value) {
                        detailDiv.style.display = 'block';
                    } else {
                        detailDiv.style.display = 'none';
                    }
                });
                document.getElementById('no_education_father').addEventListener('change', function() {
                    var detailDiv = document.getElementById('education_detail_father_div');
                    if (this.value) {
                        detailDiv.style.display = 'none';
                    }
                });

            </script>
        </div>
    </div>
</div>
</div>


@endsection
