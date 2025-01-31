<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center py-4" style="background-color: rgb(58, 175, 22);">
                        <h3 class="mb-0">สมัครสมาชิก</h3>
                        <p class="mb-0">กรุณากรอกข้อมูลเพื่อสมัครสมาชิก</p>
                    </div>
                    <div class="card-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="กรอกชื่อของคุณ" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">อีเมล</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="กรอกอีเมลของคุณ" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">รหัสผ่าน</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="กรอกรหัสผ่านของคุณ" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">ยืนยันรหัสผ่าน</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn" style="background-color: rgb(58, 175, 22); color:white;">สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <p class="mb-0">มีบัญชีอยู่แล้ว? <a href="{{ route('showLoginForm') }}" class="text-decoration-none">เข้าสู่ระบบ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
