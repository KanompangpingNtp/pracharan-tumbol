@extends('eservice.admin.layout.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">แบบคำร้องขอลงทะเบียนเพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด</h2>

    <form action="{{route('NewbornFormCreate')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">ความสัมพันธ์กับเด็กแรกเกิด <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relationship" id="father" {{ old('relationship', $form['details']->relationship) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="father">
                        บิดา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relationship" id="mother" {{ old('relationship', $form['details']->relationship) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="mother">
                        มารดา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relationship" id="parent" {{ old('relationship', $form['details']->relationship) == '3' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="parent">
                        ผู้ปกครอง
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="relationship_detail_div">
                <label class="form-label d-block">ความสัมพันธ์ผู้ปกครอง</label>
                <input type="text" class="form-control" id="relationship_detail" name="relationship_detail" value="{{ old('relationship_detail', $form['details']->relationship_detail ?? '') }}" disabled>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <label for="salutation_parent">คำนำหน้า :</label>
                <select class="form-select" id="salutation_parent" name="salutation_parent" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย" {{ old('salutation_parent', $form['details']->salutation_parent) == 'นาย' ? 'selected' : '' }}>นาย</option>
                    <option value="นาง" {{ old('salutation_parent', $form['details']->salutation_parent) == 'นาง' ? 'selected' : '' }}>นาง</option>
                    <option value="นางสาว" {{ old('salutation_parent', $form['details']->salutation_parent) == 'นางสาว' ? 'selected' : '' }}>นางสาว</option>
                </select>
            </div>
            <div class="col-12 col-md-8">
                <label for="fullname_parent">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_parent" name="fullname_parent" class="form-control" value="{{ old('fullname_parent', $form['details']->fullname_parent ?? '') }}" disabled>
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
                <input type="text" id="idcard_parent" name="idcard_parent" class="form-control" value="{{ old('idcard_parent', $form['details']->idcard_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="birthday_parent">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                <input type="date" id="birthday_parent" name="birthday_parent" class="form-control" value="{{ old('birthday_parent', $form['details']->birthday_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="nationality_parent">สัญชาติ: <span class="text-danger">*</span></label>
                <input type="text" id="nationality_parent" name="nationality_parent" class="form-control" value="{{ old('nationality_parent', $form['details']->nationality_parent ?? '') }}" disabled>
            </div>
            <hr>
            <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
            <div class="col-12 col-md-4 mb-3">
                <label for="address_parent">บ้านเลขที่: <span class="text-danger">*</span></label>
                <input type="text" id="address_parent" name="address_parent" class="form-control" value="{{ old('address_parent', $form['details']->address_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_parent">หมู่:</label>
                <input type="text" id="village_parent" name="village_parent" class="form-control" value="{{ old('village_parent', $form['details']->village_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="building_parent">อาคารตึก:</label>
                <input type="text" id="building_parent" name="building_parent" class="form-control" value="{{ old('building_parent', $form['details']->building_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="floor">ชั้น:</label>
                <input type="text" id="floor" name="floor" class="form-control" value="{{ old('floor', $form['details']->floor ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="room">เลขที่ห้อง:</label>
                <input type="text" id="room" name="room" class="form-control" value="{{ old('room', $form['details']->room ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="village_name_parent">หมู่บ้าน:</label>
                <input type="text" id="village_name_parent" name="village_name_parent" class="form-control" value="{{ old('village_name_parent', $form['details']->village_name_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="alley_parent">ตรอก/ซอย:</label>
                <input type="text" id="alley_parent" name="alley_parent" class="form-control" value="{{ old('alley_parent', $form['details']->alley_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="road_parent">ถนน:</label>
                <input type="text" id="road_parent" name="road_parent" class="form-control" value="{{ old('road_parent', $form['details']->road_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="subdistrict_parent">ตำบล/แขวง: <span class="text-danger">*</span></label>
                <input type="text" id="subdistrict_parent" name="subdistrict_parent" class="form-control" value="{{ old('subdistrict_parent', $form['details']->subdistrict_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="district_parent">อำเภอ/เขต: <span class="text-danger">*</span></label>
                <input type="text" id="district_parent" name="district_parent" class="form-control" value="{{ old('district_parent', $form['details']->district_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="province_parent">จังหวัด: <span class="text-danger">*</span></label>
                <input type="text" id="province_parent" name="province_parent" class="form-control" value="{{ old('province_parent', $form['details']->province_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="postal_code_parent">รหัสไปรษณีย์: <span class="text-danger">*</span></label>
                <input type="text" id="postal_code_parent" name="postal_code_parent" class="form-control" value="{{ old('postal_code_parent', $form['details']->postal_code_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_house_parent">โทรศัพท์บ้าน: <span class="text-danger">*</span></label>
                <input type="text" id="phone_house_parent" name="phone_house_parent" class="form-control" value="{{ old('phone_house_parent', $form['details']->phone_house_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="phone_number_parent">โทรศัพท์มือถือ: <span class="text-danger">*</span></label>
                <input type="text" id="phone_number_parent" name="phone_number_parent" class="form-control" value="{{ old('phone_number_parent', $form['details']->phone_number_parent ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_parent" id="no_occupation" {{ old('occupation_parent', $form['details']->occupation_parent) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_occupation">
                        ไม่ได้ประกอบอาชีพ
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_parent" id="have_occupation" {{ old('occupation_parent', $form['details']->occupation_parent) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="have_occupation">
                        ประกอบอาชีพ
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="occupation_detail_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="occupation_detail_parent" name="occupation_detail" value="{{ old('occupation_detail', $form['details']->occupation_detail ?? '') }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_parent" id="no_education" {{ old('education_parent', $form['details']->education_parent) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_education">
                        ไม่ได้รับการศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_parent" id="do_education" {{ old('education_parent', $form['details']->education_parent) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="do_education">
                        กำลังศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_parent" id="end_education" {{ old('education_parent', $form['details']->education_parent) == '3' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="end_education">
                        จบการศึกษา
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="education_detail_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="education_detail_parent" name="education_detail" value="{{ old('education_detail', $form['details']->education_detail ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h4>ข้อมูลเด็ก (ตามสูติบัตร)</h4>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <label for="salutation_children">คำนำหน้า :</label>
                <select class="form-select" id="salutation_children" name="salutation_children" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="เด็กชาย" {{ old('salutation_children', $form['details']->salutation_children) == 'เด็กชาย' ? 'selected' : '' }}>เด็กชาย</option>
                    <option value="เด็กหญิง" {{ old('salutation_children', $form['details']->salutation_children) == 'เด็กหญิง' ? 'selected' : '' }}>เด็กหญิง</option>
                </select>
            </div>
            <div class="col-12 col-md-8 mb-3">
                <label for="fullname_children">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_children" name="fullname_children" class="form-control" value="{{ old('fullname_children', $form['details']->fullname_children ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_children">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_children" name="idcard_children" class="form-control" value="{{ old('idcard_children', $form['details']->idcard_children ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="birthday_children">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                <input type="date" id="birthday_children" name="birthday_children" class="form-control" value="{{ old('birthday_children', $form['details']->birthday_children ?? '') }}" disabled>
            </div>
        </div>
        <h6>ข้อมูลมารดา</h6>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <label for="salutation_mother">คำนำหน้า :</label>
                <select class="form-select" id="salutation_mother" name="salutation_mother" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="เด็กหญิง" {{ old('salutation_mother', $form['details']->salutation_mother) == 'เด็กหญิง' ? 'selected' : '' }}>เด็กหญิง</option>
                    <option value="นางสาว" {{ old('salutation_mother', $form['details']->salutation_mother) == 'นางสาว' ? 'selected' : '' }}>นางสาว</option>
                    <option value="นาง" {{ old('salutation_mother', $form['details']->salutation_mother) == 'นาง' ? 'selected' : '' }}>นาง</option>
                </select>
            </div>
            <div class="col-12 col-md-8 mb-3">
                <label for="fullname_mother">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_mother" name="fullname_mother" class="form-control" value="{{ old('fullname_mother', $form['details']->fullname_mother ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_mother">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_mother" name="idcard_mother" class="form-control" value="{{ old('idcard_mother', $form['details']->idcard_mother ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="age_mother">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_mother" name="age_mother" class="form-control" value="{{ old('age_mother', $form['details']->age_mother ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="nationality_mother">สัญชาติ: <span class="text-danger">*</span></label>
                <input type="text" id="nationality_mother" name="nationality_mother" class="form-control" value="{{ old('nationality_mother', $form['details']->nationality_mother ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="birthday_mother">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                <input type="date" id="birthday_mother" name="birthday_mother" class="form-control" value="{{ old('birthday_mother', $form['details']->birthday_mother ?? '') }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_mother" id="no_occupation_mother" {{ old('occupation_mother', $form['details']->occupation_mother) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_occupation_mother">
                        ไม่ได้ประกอบอาชีพ
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_mother" id="have_occupation_mother" {{ old('occupation_mother', $form['details']->occupation_mother) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="have_occupation_mother">
                        ประกอบอาชีพ
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="occupation_detail_mother_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="occupation_detail_mother" name="occupation_detail_mother" value="{{ old('occupation_detail_mother', $form['details']->occupation_detail_mother ?? '') }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_mother" id="no_education_mother" {{ old('education_mother', $form['details']->education_mother) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_education_mother">
                        ไม่ได้รับการศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_mother" id="do_education_mother" {{ old('education_mother', $form['details']->education_mother) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="do_education_mother">
                        กำลังศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_mother" id="end_education_mother" {{ old('education_mother', $form['details']->education_mother) == '3' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="end_education_mother">
                        จบการศึกษา
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="education_detail_mother_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="education_detail_mother" name="education_detail_mother" value="{{ old('education_detail_mother', $form['details']->education_detail_mother ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h6>ข้อมูลบิดา</h6>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <label for="salutation_father">คำนำหน้า :</label>
                <select class="form-select" id="salutation_father" name="salutation_father" disabled>
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="เด็กชาย" {{ old('salutation_father', $form['details']->salutation_father) == 'เด็กชาย' ? 'selected' : '' }}>เด็กชาย</option>
                    <option value="นาย" {{ old('salutation_father', $form['details']->salutation_father) == 'นาย' ? 'selected' : '' }}>นาย</option>
                </select>
            </div>
            <div class="col-12 col-md-8 mb-3">
                <label for="fullname_father">ชื่อ-นามสกุล: <span class="text-danger">*</span></label>
                <input type="text" id="fullname_father" name="fullname_father" class="form-control" value="{{ old('fullname_father', $form['details']->fullname_father ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="idcard_father">เลขประจำตัวประชาชน: <span class="text-danger">*</span></label>
                <input type="text" id="idcard_father" name="idcard_father" class="form-control" value="{{ old('idcard_father', $form['details']->idcard_father ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="age_father">อายุ: <span class="text-danger">*</span></label>
                <input type="text" id="age_father" name="age_father" class="form-control" value="{{ old('age_father', $form['details']->age_father ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="nationality_father">สัญชาติ: <span class="text-danger">*</span></label>
                <input type="text" id="nationality_father" name="nationality_father" class="form-control" value="{{ old('nationality_father', $form['details']->nationality_father ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="birthday_father">วัน/เดือน/ปี เกิด: <span class="text-danger">*</span></label>
                <input type="date" id="birthday_father" name="birthday_father" class="form-control" value="{{ old('birthday_father', $form['details']->birthday_father ?? '') }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">อาชีพ <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_father" id="no_occupation_father" {{ old('occupation_father', $form['details']->occupation_father) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_occupation_father">
                        ไม่ได้ประกอบอาชีพ
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="occupation_father" id="have_occupation_father" {{ old('occupation_father', $form['details']->occupation_father) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="have_occupation_father">
                        ประกอบอาชีพ
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="occupation_detail_father_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="occupation_detail_father" name="occupation_detail_father" value="{{ old('occupation_detail_father', $form['details']->occupation_detail_father ?? '') }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label d-block">การศึกษา <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_father" id="no_education_father" {{ old('education_father', $form['details']->education_father) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="no_education_father">
                        ไม่ได้รับการศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_father" id="do_education_father" {{ old('education_father', $form['details']->education_father) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="do_education_father">
                        กำลังศึกษา
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="education_father" id="end_education_father" {{ old('education_father', $form['details']->education_father) == '3' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="end_education_father">
                        จบการศึกษา
                    </label>
                </div>
            </div>
            <div class="col-md-4" id="education_detail_father_div">
                <label class="form-label d-block">ระบุ</label>
                <input type="text" class="form-control" id="education_detail_father" name="education_detail_father" value="{{ old('education_detail_father', $form['details']->education_detail_father ?? '') }}" disabled>
            </div>
        </div>
        <hr>
        <h4>ช่องทางการรับเงินอุดหนุน</h4>
        <div class="row mb-3">
            <div class="col-md-12 mb-3">
                <label class="form-label d-block">(เลือกเพียง 1 ธนาคาร) <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="account" id="account_1" {{ old('account', $form['details']->account) == '1' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="account_1">
                        ธนาคารกรุงไทย ประเภทบัญชี ออมทรัพย์
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="account" id="account_2" {{ old('account', $form['details']->account) == '2' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="account_2">
                        ธนาคาร ธ.ก.ส. ประเภทบัญชี ออมทรัพย์
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="account" id="account_3" {{ old('account', $form['details']->account) == '3' ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="account_3">
                        ธนาคารออมสิน ประเภทบัญชีเงินฝากเผื่อเรียก
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="account_name">ชื่อบัญชี: <span class="text-danger">*</span></label>
                <input type="text" id="account_name" name="account_name" class="form-control" value="{{ old('account_name', $form['details']->account_name ?? '') }}" disabled>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="account_id">เลขที่บัญชี: <span class="text-danger">*</span></label>
                <input type="text" id="account_id" name="account_id" class="form-control" value="{{ old('mouth_area', $form['details']->account_id ?? '') }}" disabled>
            </div>
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

@endsection