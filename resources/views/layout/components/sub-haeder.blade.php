<style>
    .bg-page1 {
        background-image: url('{{ asset('images/header/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
       
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

   

    /* เมื่อหน้าจอเล็กกว่า lg (น้อยกว่า 992px) ให้เปลี่ยน bottom เป็น top */
    @media (max-width: 991px) {
        .video-container .content {
            bottom: auto;
            /* ยกเลิกค่า bottom */
            top: 0;
            /* กำหนดให้ไปอยู่ด้านบน */
        }

    }

    .navbar .dropdown-toggle::after {
        display: none !important;
    }

    .dropdown-menu {
        background-color: rgb(27, 116, 0, 0.9);
        border: 1px solid rgb(58, 175, 22);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        margin: 0;
        font-size: 23px;
        transition: all 0.3s ease;
    }


    .dropdown-menu a {
        color: #e4e4e4;
        transition: all 0.3s ease;
    }

    .dropdown-menu a:hover {
        color: rgb(0, 0, 0);
        background-color: rgb(58, 175, 22);
    }

    .navbar-nav .nav-item .nav-link {
        transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }

    .navbar-nav .nav-item .nav-link:hover {
        transform: scale(1.1);
        /* ขยายขึ้น 10% */
        filter: drop-shadow(0 0 8px rgb(27, 116, 0, 0.9));
        /* เรืองแสงสีฟ้า */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-end ">

    <div class="content w-100">
        <nav class="navbar navbar-expand-lg bg-menu pb-2 pt-3">
            <div class="container">
                <!-- ปุ่ม Toggle สำหรับหน้าจอเล็ก -->
                <button class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- เมนูทั้งหมด -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav w-100 d-flex flex-wrap justify-content-evenly">
                        <!-- 1. ข้อมูลพื้นฐาน -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center "
                                href="#" id="basicInfoDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('images/header/house.png') }}" alt="house"
                                    class="navbar-icon">
                                <div class="navbar-text ">ข้อมูลพื้นฐาน</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="basicInfoDropdown">
                                <li><a class="dropdown-item" href="{{ route('HistoryPage') }}">ประวัติความเป็นมา</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('VisionMissionPage') }}">วิสัยทัศน์/พันธกิจ</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('GeneralInformationPage') }}">ข้อมูลสภาพทั่วไป</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('StrategyGuidelinePage') }}">ยุทธศาสตร์และแนวทางการพัฒนา</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('CommunityProductsPage') }}">ผลิตภัณฑ์ชุมชน/OTOP</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('ImportantPlacesPage') }}">สถานที่สำคัญ/แหล่งท่องเที่ยว</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('ManagementPolicyPage') }}">นโยบายการบริหาร/เจตจำนงสุจริต</a>
                                </li>
                            </ul>
                        </li>

                        <!-- 2. บุคลากร -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#"
                                id="personnelDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('images/header/teamwork.png') }}" alt="teamwork"
                                    class="navbar-icon">
                                <div class="navbar-text">บุคลากร</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="personnelDropdown">
                                <li><a class="dropdown-item" href="{{ route('AgencyPage') }}">แผนผังองค์กรรวม</a>
                                </li>
                                @foreach ($personnelAgencies as $agency)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('AgencyShow', ['id' => $agency->id]) }}">
                                            {{ $agency->personnel_agency_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- 3. ผลการดำเนินงาน -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#"
                                id="performanceDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('images/header/online-survey.png') }}" alt="online survey"
                                    class="navbar-icon">
                                <div class="navbar-text">ผลการดำเนินงาน</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="performanceDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('FinancialReportPage') }}">รายงานงบการเงิน</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('PerformanceReportPage') }}">รายผลการดำเนินงาน</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('MonitoringEvaluationPage') }}">รายงานการติดตามและประเมิน</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('AnnualBudgetPage') }}">งบประมาณรายจ่ายประจำปี</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('SixMonthPerformancePage') }}">รายงานผลการดำเนินงานรอบ 6
                                        เดือน</a></li>
                                <li><a class="dropdown-item" href="{{ route('OperationPage') }}">การปฏิบัติงาน</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('HRPolicyPage') }}">นโยบายการบริหารทรัพยากรบุคคล</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('HRPolicyManagementPage') }}">การดำเนินการตามนโยบายและการบริหารทรัพยากรบุคคล</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('HRManagementDevelopmentPage') }}">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('HRResultsReportPage') }}">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('TransparencyPage') }}">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('FinancialStatementPage') }}">รายงานแสดงฐานะการเงิน</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('WorkProcedurePage') }}">การลดขั้นตอนการปฏิบัติงาน</a></li>
                            </ul>
                        </li>

                        <!-- 4. อำนาจหน้าที่ -->
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center"
                                href="{{ route('AuthorityPage') }}">
                                <img src="{{ asset('images/header/organization.png') }}" alt="อำนาจหน้าที่"
                                    class="navbar-icon">
                                <div class="navbar-text">อำนาจหน้าที่</div>
                            </a>
                        </li>

                        <!-- 5. แผนพัฒนนาท้องถิ่น -->
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/planning.png') }}" alt="แผนพัฒนนาท้องถิ่น"
                                    class="navbar-icon">
                                <div class="navbar-text">แผนพัฒนนาท้องถิ่น</div>
                            </a>
                        </li>

                        <!-- 6. กฏหมายและกฏระเบียบ -->
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/law.png') }}" alt="กฏหมายและกฏระเบียบ"
                                    class="navbar-icon">
                                <div class="navbar-text">กฏหมายและกฏระเบียบ</div>
                            </a>
                        </li>

                        <!-- 7. เมนูหรับประชาชน -->
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/group.png') }}" alt="เมนูสำหรับประชาชน"
                                    class="navbar-icon">
                                <div class="navbar-text">เมนูหรับประชาชน</div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </div>
    <div class="bg-runtext w-100 d-flex align-items-center">
        <div class="container d-flex align-items-center gap-3">
            <div class="col-12 col-md-9 bg-text">
                <div
                    style="white-space: nowrap; overflow: hidden; position: relative; width: 100%; height: 38px; background: linear-gradient(to right, #ffffff6b, #ffffff6b); border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); padding: 5px; ">
                    <span
                        style="display: inline-block; position: absolute; white-space: nowrap; animation: marquee 15s linear infinite; color: rgb(0, 0, 0); font-size: 20px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        วิสัยทัศน์ : พัฒนาคุณภาพชีวิตและสังคม ช่วยกันคิดช่วยกันทำ การเกษรก้าวหน้าแบบยั่งยืน
                        บ้านเมืองน่าอยู่
                    </span>
                </div>
            </div>
            <div class="col-3 d-none d-md-block">
                <form action="https://www.google.com/search" method="GET" class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="ค้นหา..."
                        style="border-radius: 10px 0 0 10px;">
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
