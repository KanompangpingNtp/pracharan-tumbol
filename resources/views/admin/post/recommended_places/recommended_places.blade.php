@extends('admin.layout.admin_layout')
@section('user_content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<h2 class="text-center">จัดการสถานที่แนะนำ</h2><br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างแนะนำห้องเรียน
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างแนะนำห้องเรียน</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('RecommendedPlacesCreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'สถานที่แนะนำ')->id }}">
                        <label for="topic_name" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="topic_name" name="topic_name">
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">รายละเอียด</label>
                        <input type="text" class="form-control" id="details" name="details">
                    </div>

                    <div class="mb-3">
                        <label for="title_image" class="form-label">รูปหัวข้อ</label>
                        <input type="file" class="form-control" id="title_image[]" name="title_image">
                    </div>

                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png (ขนาดไม่เกิน 10MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($postDetails as $index => $postDetail)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $postDetail->topic_name ?? 'N/A' }}</td>
            <td>{{ $postDetail->details ?? 'N/A' }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#FileData-{{ $postDetail->id }}">
                    <i class="bi bi-file-image"></i>
                </button>

                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-{{ $postDetail->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="{{ route('RecommendedPlacesDelete', $postDetail->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@forelse ($postDetails as $index => $postDetail)
<div class="modal fade" id="FileData-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="FileDataLabel-{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="FileDataLabel-{{ $postDetail->id }}">แสดงไฟล์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Section: รูปภาพ -->
                <h5>รูปภาพ</h5>
                @if($postDetail->photos->isNotEmpty())
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    @foreach($postDetail->photos as $photo)
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image"
                             style="width: 100px; height: 100px; object-fit: cover; margin-bottom: 10px;">
                    </div>
                    @endforeach
                </div>
                @else
                <p>ไม่มีรูปภาพ</p>
                @endif

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel-{{ $postDetail->id }}">แก้ไขกิจกรรม</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('RecommendedPlacesUpdate', $postDetail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic_name-{{ $postDetail->id }}" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="topic_name" name="topic_name" value="{{ $postDetail->topic_name }}">
                    </div>

                    <div class="mb-3">
                        <label for="details-{{ $postDetail->id }}" class="form-label">รายละเอียด</label>
                        <input type="text" class="form-control" id="details" name="details" value="{{ $postDetail->details }}">
                    </div>

                    <br>

                    <h5>รูปภาพ</h5>
                    @if($postDetail->photos->isNotEmpty())
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        @foreach($postDetail->photos as $photo)
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image" style="width:100px; height:100px; object-fit:cover; margin-bottom:10px;">
                            <label for="delete_photo_{{ $photo->id }}"><span class="text-danger">ลบ</span></label>
                            <input type="checkbox" name="delete_photo[]" id="delete_photo_{{ $photo->id }}" value="{{ $photo->id }}">
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p>ไม่มีรูปภาพ</p>
                    @endif

                    <br>

                    <h6 class="text-center"><span class="text-danger">#</span> อัปโหลดไฟล์ใหม่ (หากต้องการเปลี่ยนไฟล์เดิมให้เลือกไฟล์ที่มีอยู่แล้วตรงนี้ และอัพโหลดไฟล์ใหม่) <span class="text-danger">#</span></h6><br>
                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{ asset('js/multipart_files.js') }}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
