@extends('admin.layout.admin_layout')
@section('user_content')

<h2 class="text-center">จัดการข้อมูลคณะผู้บริหาร</h2><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Create">
    สร้างข้อมูลคณะผู้บริหาร
</button>

<!-- Modal -->
<div class="modal fade" id="Create" tabindex="-1" aria-labelledby="CreateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="CreateLabel">สร้างข้อมูลคณะผู้บริหาร</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('ExecutiveBoardCreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="full_name" class="form-label">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">เบอร์ติดต่อ</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>

                    <div class="mb-3">
                        <label for="photo_file" class="form-label">อัปโหลดรูปภาพ</label>
                        <input type="file" class="form-control" id="photo_file" name="photo_file" accept=".jpg,.jpeg,.png">
                        <small class="form-text text-muted">รองรับไฟล์ประเภท JPG, JPEG, PNG</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ระดับความสำคัญ</label>
                        <div>
                            @for ($i = 1; $i <= 5; $i++) <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status{{ $i }}" value="{{ $i }}" required>
                                <label class="form-check-label" for="status{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
        </form>
    </div>
</div>
</div>

<br>
<br>

<table class="table table-bordered text-center" id="data_table">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ</th>
            <th>ตำแหน่ง</th>
            <th>แผนก</th>
            <th>เบอร์ติดต่อ</th>
            <th>ระดับความสำคัญ</th>
            <th>รูปภาพ</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ExecutiveBoard as $key => $detail)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $detail->full_name }}</td>
            <td>{{ $detail->department }}</td>
            <td>{{ $detail->position }}</td>
            <td>{{ $detail->phone_number }}</td>
            <td>{{ $detail->status }}</td>
            <td>
                @if ($detail->images->isNotEmpty())
                <img src="{{ asset('storage/' . $detail->images->first()->photo_file) }}" alt="รูปภาพ" style="width: 100px; height: auto;">
                @else
                <span class="text-muted">ไม่มีรูปภาพ</span>
                @endif
            </td>
            <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $detail->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="{{ route('ExecutiveBoardDelete', $detail->id)}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($ExecutiveBoard as $detail)
<div class="modal fade" id="editModal{{ $detail->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $detail->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('ExecutiveBoardUpdate',$detail->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $detail->id }}">แก้ไขข้อมูลบุคลากร</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="full_name" class="form-label">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $detail->full_name }}" required>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="department" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" id="department" name="department" value="{{ $detail->department }}" required>
                    </div> --}}

                    <div class="mb-3">
                        <label for="position" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" id="position" name="position" value="{{ $detail->position }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">เบอร์ติดต่อ</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $detail->phone_number }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="photo_file" class="form-label">อัปโหลดรูปภาพ</label>
                        @if ($detail->images->isNotEmpty())
                        <div>
                            <img src="{{ asset('storage/' . $detail->images->first()->photo_file) }}" alt="รูปภาพ" style="width: 100px; height: auto;">
                            <br>
                            <small class="text-muted">รูปภาพที่อัปโหลดแล้ว</small>
                            <input type="checkbox" name="remove_image" id="remove_image" value="1">
                            <label for="remove_image">ลบ</label>
                        </div>
                        @endif

                        <br>

                        <input type="file" class="form-control" id="photo_file" name="photo_file" accept=".jpg,.jpeg,.png">
                        <small class="form-text text-muted">รองรับไฟล์ประเภท JPG, JPEG, PNG</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ระดับความสำคัญ</label>
                        <div>
                            @for ($i = 1; $i <= 5; $i++) <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status{{ $i }}" value="{{ $i }}" @if ($detail->status == $i) checked @endif required>
                                <label class="form-check-label" for="status{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
        </form>
    </div>
</div>
</div>
@endforeach

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
