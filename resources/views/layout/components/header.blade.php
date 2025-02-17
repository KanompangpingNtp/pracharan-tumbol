<style>
    .bg-page1 {
        background-image: url('{{ asset('images/header/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 83vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .bg-runtext {
        background-image: url('{{ asset('images/header/bg-search.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 7vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }


    .bg-menu {
        background-color: rgba(69, 211, 26, 0.6);
        background-image: url('{{ asset('images/header/bg-nav.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 7vh;
        transition: transform 0.3s ease;
    }

    .navbar-item {
        color: rgb(0, 0, 0);
        text-decoration: none;
        text-align: center;
        display: block;
        padding: 2px 10px;
        transition: all 0.3s ease;
    }

    .navbar-item img {
        width: 40px;
        height: 40px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
        /* เพิ่ม effect การขยายขนาดของไอคอน */
    }

    .navbar-item div {
        font-size: 23px;
        transition: color 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงสีของข้อความ */
    }

    .navbar-item:hover {
        color: #ffffff;
        /* เปลี่ยนสีของข้อความเมื่อ hover */
        border-radius: 10px;
        /* เพิ่มมุมโค้งเพื่อให้ดูนุ่มนวล */
    }

    .navbar-item:hover img {
        transform: scale(1.1);
        /* ขยายขนาดไอคอนให้ใหญ่ขึ้นเมื่อ hover */
    }

    .navbar-item:hover div {
        color: #ffffff;
        /* เปลี่ยนสีของข้อความเมื่อ hover */
    }

    /* แสดงแนวตั้งไอคอนและข้อความ */
    .navbar-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .button-green-search {
        background-color: rgb(58, 175, 22);
        font-size: 22px;
        font-weight: bold;
        padding: 0px 15px;
        border: 0px solid black;
        border-radius: 10px;
        color: #ffffff;
        cursor: pointer;
        text-decoration: none;
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
        transition: all 0.3s ease;

    }

    .button-green-search:hover {
        background-color: rgb(27, 116, 0);
    }

    /* ตั้งค่าเริ่มต้นของคอนเทนเนอร์ */
    .custom-dropdown-container {
        position: relative;

    }

    /* สไตล์สำหรับ dropdown menu */
    .custom-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgb(27, 116, 0, 0.9);
        border: 1px solid rgb(58, 175, 22);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        list-style: none;
        padding: 10px 0;
        margin: 0;
        font-size: 23px;
        min-width: 200px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 999;
    }

    .custom-dropdown-container:hover .custom-dropdown-menu {
        opacity: 1;
        visibility: visible;
    }

    /* สไตล์สำหรับแต่ละรายการใน dropdown */
    .dropdown-item {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        color: rgb(0, 0, 0);
        background-color: rgb(58, 175, 22);
        border-radius: 4px;
    }

    /* Keyframes สำหรับ slide-down */
    @keyframes slide-down {
        0% {
            opacity: 0;
            transform: translateY(-10%);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .video-container {
        position: relative;
        width: 100%;
        min-height: 105vh;
        overflow: visible;
    }

    .video-container video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-container .content {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        text-align: center;
        color: white;
        overflow: visible;
        z-index: 999;
    }

</style>
<main class="d-flex flex-column align-items-center justify-content-end ">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('images/home/video/123.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <div class="bg-menu w-100 pb-2 pt-3">
                <div class="container d-flex flex-wrap justify-content-evenly">
                    {{-- <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/header/house.png') }}" alt="ปุ่มหน้าหลัก">
                    <div>ข้อมูลพื้นฐาน</div>
                    </a>
                </div> --}}
                <div class="custom-dropdown-container d-flex flex-column align-items-center justify-content-center position-relative">
                    <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                        <img src="{{ asset('images/header/house.png') }}" alt="house" class="navbar-icon">
                        <div class="navbar-text">ข้อมูลพื้นฐาน</div>
                    </a>
                    <!-- ลิสต์รายการ -->
                    <ul class="custom-dropdown-menu text-start">
                        <li>
                            <a href="{{ route('HistoryPage') }}" class="dropdown-item">ประวัติความเป็นมา</a>
                            <a href="{{ route('VisionMissionPage') }}" class="dropdown-item">วิสัยทัศน์/พันธกิจ</a>
                            <a href="{{ route('GeneralInformationPage') }}" class="dropdown-item">ข้อมูลสภาพทั่วไป</a>
                            <a href="{{ route('StrategyGuidelinePage') }}" class="dropdown-item">ยุทธศาสตร์และแนวทางการพัฒนา</a>
                            <a href="{{ route('CommunityProductsPage') }}" class="dropdown-item">ผลิตภัณฑ์ชุมชน/OTOP</a>
                            <a href="{{ route('ImportantPlacesPage') }}" class="dropdown-item">สถานที่สำคัญ/แหล่งท่องเที่ยว</a>
                            <a href="{{ route('AuthorityPage') }}" class="dropdown-item">อำนาจหน้าที่</a>
                            <a href="{{ route('ManagementPolicyPage') }}" class="dropdown-item">นโยบายการบริหาร/เจตจำนงสุจริต</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/header/teamwork.png') }}" alt="ปุ่มบุคลากร">
                <div>บุคลากร</div>
                </a>
            </div> --}}
            <div class="custom-dropdown-container d-flex flex-column align-items-center justify-content-center position-relative">
                <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                    <img src="{{ asset('images/header/teamwork.png') }}" alt="teamwork" class="navbar-icon">
                    <div class="navbar-text">บุคลากร</div>
                </a>
                <!-- ลิสต์รายการ -->
                <ul class="custom-dropdown-menu text-start">
                    <li>
                        <a href="{{ route('AgencyPage') }}" class="dropdown-item">แผนผังองค์กรรวม</a>
                    </li>
                    @foreach ($personnelAgencies as $agency)
                    <li>
                        <a href="{{ route('AgencyShow', ['id' => $agency->id]) }}" class="dropdown-item">
                            {{ $agency->personnel_agency_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="custom-dropdown-container d-flex flex-column align-items-center justify-content-center position-relative">
                <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                    <img src="{{ asset('images/header/online-survey.png') }}" alt="teamwork" class="navbar-icon">
                    <div class="navbar-text">ผลการดำเนินงาน</div>
                </a>
                <ul class="custom-dropdown-menu text-start">
                    <li>
                        <a href="{{route('FinancialReportPage')}}" class="dropdown-item">รายงานงบการเงิน</a>
                        <a href="{{route('PerformanceReportPage')}}" class="dropdown-item">รายผลการดำเนินงาน</a>
                        <a href="{{route('MonitoringEvaluationPage')}}" class="dropdown-item">รายงานการติดตามและประเมิน</a>
                        <a href="{{route('AnnualBudgetPage')}}" class="dropdown-item">งบประมาณรายจ่ายประจำปี</a>
                        <a href="{{route('SixMonthPerformancePage')}}" class="dropdown-item">รายงานผลการดำเนินงานรอบ 6 เดือน</a>
                        <a href="{{route('OperationPage')}}" class="dropdown-item">การปฏิบัติงาน</a>
                        <a href="{{route('HRPolicyPage')}}" class="dropdown-item">นโยบายการบริหารทรัพยากรบุคคล</a>
                        <a href="{{route('HRPolicyManagementPage')}}" class="dropdown-item">การดำเนินการตามนโยบายและการบริหารทรัพยากรบุคคล</a>
                        <a href="{{route('HRManagementDevelopmentPage')}}" class="dropdown-item">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a>
                        <a href="{{route('HRResultsReportPage')}}" class="dropdown-item">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</a>
                        <a href="{{route('TransparencyPage')}}" class="dropdown-item">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต</a>
                        <a href="{{route('FinancialStatementPage')}}" class="dropdown-item">รายงานแสดงฐานะการเงิน</a>
                        <a href="{{route('WorkProcedurePage')}}" class="dropdown-item">การลดขั้นตอนการปฏิบัติงาน</a>
                        <a href="" class="dropdown-item">ประมวลจริยธรรม</a>
                    </li>
                </ul>
            </div>
            {{-- <div class="d-flex flex-column align-items-center justify-content-center">
                <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                    <img src="{{ asset('images/header/online-survey.png') }}" alt="ปุ่มผลการดำเนินงาน">
                    <div>ผลการดำเนินงาน</div>
                </a>
                <ul class="custom-dropdown-menu">
                    <li>
                        <a href="" class="dropdown-item">ประวัติความเป็นมา</a>
                    </li>
                </ul>
            </div> --}}
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/organization.png') }}" alt="ปุ่มอำนาจหน้าที่">
                    <div>อำนาจหน้าที่</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/planning.png') }}" alt="ปุ่มแผนพัฒนาท้องถิ่น">
                    <div>แผนพัฒนนาท้องถิ่น</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/law.png') }}" alt="กฏหมาย">
                    <div>กฏหมายและกฏระเบียบ</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/group.png') }}" alt="ปุ่มเมนูสำหรับประชาชน">
                    <div>เมนูหรับประชาชน</div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="bg-runtext w-100 d-flex align-items-center">
        <div class="container d-flex align-items-center gap-3">
            <div class="col-12 col-md-9 bg-text">
                <div style="white-space: nowrap; overflow: hidden; position: relative; width: 100%; height: 38px; background: linear-gradient(to right, #ffffff6b, #ffffff6b); border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); padding: 5px; ">
                    <span style="display: inline-block; position: absolute; white-space: nowrap; animation: marquee 15s linear infinite; color: rgb(0, 0, 0); font-size: 20px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        วิสัยทัศน์ : พัฒนาคุณภาพชีวิตและสังคม ช่วยกันคิดช่วยกันทำ การเกษรก้าวหน้าแบบยั่งยืน
                        บ้านเมืองน่าอยู่
                    </span>
                </div>
            </div>
            <div class="col-3 d-none d-md-block">
                <form action="https://www.google.com/search" method="GET" class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="ค้นหา..." style="border-radius: 10px 0 0 10px;">
                    <button class="button-green-search" type="submit" style="border-radius: 0 10px 10px 0;">
                        <i class="fas fa-search mt-2"></i>
                    </button>
                </form>
            </div>


        </div>
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

    </style>


</main>
