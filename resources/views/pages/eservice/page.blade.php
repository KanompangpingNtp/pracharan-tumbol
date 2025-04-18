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
            <div class=" d-flex flex-column justify-content-center align-items-center p-5">
                <div class="fs-1 fw-bold mb-4">Eservice</div>

                <style>
                    .table td:hover {
                        background-color: #28a745;
                        color: white;
                    }

                    table {
                        border-collapse: collapse;
                    }

                    table td,
                    table th {
                        border: none;
                    }

                    table tr:nth-child(odd) {
                        background-color: #dcf5bc;
                    }

                    table tr:nth-child(even) {
                        background-color: #ffffff;
                    }

                    a {
                        text-decoration: none;
                        color: #333;
                    }

                </style>

                <table class="table">

                    <tr>
                        <td><a href="{{route('page1')}}">คำร้องทั่วไป</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page2')}}">คำขออนุญาตก่อสร้างอาคารดัดแปลงอาคาร</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page3')}}">คำร้องขอรับบริการจัดเก็บขยะมูลฝอย</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page4')}}">แบบคำขอจดทะเบียนพาณิชย์</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page5')}}">คำขอลงทะเบียนรับเงินเบี้ยความพิการ</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page6')}}">คำร้องขอน้ำอุปโภค บริโภค</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page7')}}">(ดร.๐๑) คำร้องขอลงทะเบียนเพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page8')}}">แบบยืนยันสิทธิการจอรับเงินเบี้ยยังชีพผู้สูงอายุ</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page9')}}">(ภ.ป.๑) แบบแสดงรายการภาษีป้าย</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('page10')}}">(ภ.ป.๑) ใบสมัครศูนย์เด็ก</a></td>
                    </tr>

                </table>
            </div>

            <div class="d-flex justify-content-center align-items-center text-center">
                <a href="{{asset('manual/คู่มือ E-service.pdf')}}" class="btn btn-primary">
                    คู่มือการใช้งานระบบ E-Service
                    <i class="bi bi-file-earmark-pdf"></i>
                </a>
            </div>

        </div>
    </div>


@endsection
