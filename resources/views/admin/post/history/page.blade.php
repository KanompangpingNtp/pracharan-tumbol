@extends('admin.layout.admin_layout')
@section('user_content')


<h2 class="text-center">ประวัติความเป็นมา</h2><br>

<form action="">

    <div class="mb-3">
        <label for="inputGroupFile" class="form-label">รูปโลโก้</label>
        <input type="file" class="form-control" id="inputGroupFile" name="logo">
    </div>

    <div class="mb-3">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="details" style="height: 400px" name="details"></textarea>
            <label for="floatingTextarea2">กรอกข้อมูล</label>
        </div>
    </div>

    <br>

    <button class="btn btn-primary" type="submit">บันทึก</button>
</form>
@endsection
