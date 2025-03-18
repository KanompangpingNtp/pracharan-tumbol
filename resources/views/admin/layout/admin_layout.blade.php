<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>
    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: '{{ $message }}'
        , })

    </script>
    @endif

    <style>
        a {
            text-decoration: none;
        }

    </style>

    <style>
        /* Loading Screen */
        .cube {
            position: relative;
            width: 300px;
            height: 300px;
            transform-style: preserve-3d;
            transform: rotateX(-30deg);
            animation: animateD 8s linear infinite;
        }

        @keyframes animateD {
            0% {
                transform: rotateX(-15deg) rotateY(0deg);
            }

            100% {
                transform: rotateX(-15deg) rotateY(-360deg);
            }
        }

        .cube div {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .cube2 {
            position: relative;
            width: 150px;
            height: 150px;
            transform-style: preserve-3d;
            animation: animateD2 5s ease-out infinite alternate;
        }

        @keyframes animateD2 {
            0% {
                transform: rotateX(0deg) rotateY(0deg);
            }

            100% {
                transform: rotateX(180deg) rotateY(-360deg);
            }
        }

        .cube2 div {
            position: absolute;
            top: 35px;
            left: 0;
            width: 65%;
            height: 65%;
            transform-style: preserve-3d;
        }

        .cube2 div span {
            position: absolute;
            top: 20%;
            left: 20%;
            width: 65%;
            height: 65%;
            background: transparent;
            border: 2px solid #7dff99;
            transform: rotateY(calc(90deg * var(--i))) translateZ(62px);
        }

        .cube3 {
            position: absolute;
            width: 300px;
            height: 300px;
            transform-style: preserve-3d;
            transform: rotateX(-30deg);
            animation: animateD3 1s ease-in-out infinite alternate;
        }

        @keyframes animateD3 {
            0% {
                transform: rotateX(-90deg) rotateY(0deg);
            }

            100% {
                transform: rotateX(90deg) rotateY(45deg);
            }
        }

        .cube3 div {
            position: absolute;
            top: 70px;
            left: 70px;
            width: 15%;
            height: 15%;
            transform-style: preserve-3d;
        }

        .cube3 div span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #7dff99;
            transform: rotateY(calc(90deg * var(--i))) translateZ(14px);
            box-shadow: 0px 0px 7px #7dff99;
        }

        .top3 {
            position: absolute;
            top: 0;
            left: 0;
            background: #7dff99;
            transform: rotateX(90deg) translateZ(14px);
            box-shadow: 0px 0px 10px #7dff99;
        }

        #loading-screen {
            position: fixed;
            /* ให้ loading screen อยู่เต็มหน้าจอ */
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            /* เพิ่มพื้นหลังให้ดูชัดขึ้น */
            display: flex;
            /* ใช้ Flexbox จัดกลาง */
            justify-content: center;
            align-items: center;
            z-index: 9999;
            /* ให้แน่ใจว่าอยู่ด้านบนสุด */
        }

    </style>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="cube">
            <div class="topD"></div>
            <div>
                <span style="--i:0"></span>
                <span style="--i:1"></span>
                <span style="--i:2"></span>
                <span style="--i:3"></span>
            </div>

            <div class="cube2">
                <div>
                    <span style="--i:0"></span>
                    <span style="--i:1"></span>
                    <span style="--i:2"></span>
                    <span style="--i:3"></span>
                </div>

                <div class="cube3">
                    <div class="top3"></div>
                    <div>
                        <span style="--i:0"></span>
                        <span style="--i:1"></span>
                        <span style="--i:2"></span>
                        <span style="--i:3"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">ระบบจัดการข้อมูล</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" title="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">การตั้งค่า</a></li>
                    {{-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ออกจากระบบ
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            {{-- <nav class="sb-sidenav accordion sb-sidenav-dark overflow-auto" id="sidenavAccordion"> --}}
                <nav class="sb-sidenav accordion sb-sidenav-dark overflow-auto" id="sidenavAccordion">

                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">ข้อมูลหน้าหลัก</div>
                        <a class="nav-link" href="{{route('AdminWebIntro')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการอินโทรเว็บไซต์
                        </a>
                        <a class="nav-link" href="{{ route('ExecutiveBoardPage') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการข้อมูลคณะผู้บริหาร
                        </a>
                        <a class="nav-link" href="{{ route('PressReleaseHome') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการข่าวประชาสัมพันธ์
                        </a>
                        <a class="nav-link" href="{{ route('ActivityHome') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการกิจกรรม
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            การจัดการประกาศ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('ProcurementResultsHome') }}">ผลจัดซื้อจัดจ้าง</a>
                                <a class="nav-link" href="{{ route('ProcurementHome') }}">ประกาศจัดซื้อจัดจ้าง</a>
                                <a class="nav-link" href="{{ route('AveragePriceHome') }}">ประกาศราคากลาง</a>
                                <a class="nav-link" href="{{ route('RevenueHome') }}">งานเก็บรายได้</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{ route('ManagePersonnel') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการบุคลากร
                        </a>
                        {{-- <a class="nav-link" href="{{ route('RecommendedPlacesPage') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการชมรมผู้สูงอายุ
                        </a> --}}
                        <a class="nav-link" href="{{ route('CitizensClubPage') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการชมรมผู้สูงอายุ
                        </a>
                        <a class="nav-link" href="{{ route('RecommendedPlacesPage') }}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการที่นี่ตำบลพระอาจารย์
                        </a>
                        <a class="nav-link" href="{{route('NoticeBoardAdmin')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการป้ายประกาศ
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการหนังสือราชการ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('LocalAdminPromotionPage') }}">จากกรมส่งเสริมการปกครองท้องถิ่น</a>
                                <a class="nav-link" href="#">จากท้องถิ่นจังหวัด</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{route('AdminITAType')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการการประเมินคุณธรรม(ITA)
                        </a>

                        <div class="sb-sidenav-menu-heading">แถบเมนู</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการเมนูข้อมูลพื้นฐาน
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>

                        <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('HistoryAdmin')}}">ประวัติความเป็นมา</a>
                                <a class="nav-link" href="{{route('VisionMissionAdmin')}}">วิสัยทัศน์/พันธกิจ</a>
                                <a class="nav-link" href="{{route('GeneralInformationAdmin')}}">ข้อมูลสภาพทั่วไป</a>
                                <a class="nav-link" href="{{route('StrategyGuidelineAdmin')}}">ยุทธศาสตร์และแนวทางการพัฒนา</a>
                                <a class="nav-link" href="{{route('CommunityProductsAdmin')}}">ผลิตภัณฑ์ชุมชน/OTOP</a>
                                <a class="nav-link" href="{{route('ImportantPlacesAdmin')}}">สถานที่สำคัญ/แหล่งท่องเที่ยว</a>
                                <a class="nav-link" href="{{route('AuthorityAdmin')}}">อำนาจหน้าที่</a>
                                <a class="nav-link" href="{{route('ManagementPolicyAdmin')}}">การบริหารและพัฒนาทรัพยากรบุคคล</a><br>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการผลการดำเนินงาน
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('FinancialReportAdmin')}}">รายงานงบการเงิน</a>
                                <a class="nav-link" href="{{route('PerformanceReportAdmin')}}">รายผลการดำเนินงาน</a>
                                <a class="nav-link" href="{{route('MonitoringEvaluationAdmin')}}">รายงานการติดตามและประเมิน</a>
                                <a class="nav-link" href="{{route('AnnualBudgetAdmin')}}">งบประมาณรายจ่ายประจำปี</a>
                                <a class="nav-link" href="{{route('SixMonthPerformanceAdmin')}}">รายงานผลการดำเนินงานรอบ 6 เดือน</a>
                                <a class="nav-link" href="{{route('OperationAdmin')}}">การปฏิบัติงาน</a>
                                <a class="nav-link" href="{{route('HRPolicyAdmin')}}">การบริหารและพัฒนาทรัพยากรบุคคล</a>
                                <a class="nav-link" href="{{route('HRPolicyManagementAdmin')}}">การดำเนินการตามนโยบายและการบริหารทรัพยากรบุคคล</a>
                                <a class="nav-link" href="{{route('HRManagementDevelopmentAdmin')}}">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a>
                                <a class="nav-link" href="{{route('HRResultsReportAdmin')}}">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</a>
                                <a class="nav-link" href="{{route('TransparencyAdmin')}}">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต</a>
                                <a class="nav-link" href="{{route('FinancialStatementAdmin')}}">รายงานแสดงฐานะการเงิน</a>
                                <a class="nav-link" href="{{route('WorkProcedureAdmin')}}">การลดขั้นตอนการปฏิบัติงาน</a>
                                <a class="nav-link mb-5" href="{{route('CodeofEthicsAdmin')}}">ประมวลจริยธรรม</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการแผนพัฒนาท้องถิ่น
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>

                        <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('AnnualActionPlanAdmin')}}">แผนดำเนินการประจำปี</a>
                                <a class="nav-link" href="{{route('ManpowerPlanAdmin')}}">แผนอัตรากำลัง</a>
                                <a class="nav-link" href="{{route('OperationalPlanAdmin')}}">แผนการดำเนินงาน</a>
                                <a class="nav-link" href="{{route('AntiCorruptionPlanAdmin')}}">แผนงานป้องกันการทุจริต</a>
                                <a class="nav-link" href="{{route('ProcurementActionPlanAdmin')}}">แผนปฏิบัติการจัดซื้อ - จัดจ้าง</a>
                                <a class="nav-link mb-5" href="{{route('LocalDevelopmentPlanAdmin')}}">แผนพัฒนาท้องถิ่น</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts6">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            กฏหมายและกฏระเบียบ
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('CanonAdmin')}}">ข้อบัญญัติ</a>
                                {{-- <a class="nav-link" href="#">พระราชบัญญัติ และพระราชกฤษฎีกา</a>
                                <a class="nav-link mb-5" href="#">กฎหมาย ระเบียบ และประกาศกระทรวง</a> --}}
                            </nav>
                        </div>
                    </div>
                </div>
                {{-- <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div> --}}
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 container">
                    <div class="mt-5">
                        @yield('user_content')
                    </div>
                    <br>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; บริษัท GM SKY สงวนสิทธิ์ 2024</div>
                        {{-- <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.onload = function() {
                const loadingScreen = document.getElementById("loading-screen");
                // const pageContent = document.getElementById("page-content");

                if (loadingScreen) {
                    loadingScreen.style.display = "none"; // ซ่อน loading
                    // pageContent.style.display = "block"; // แสดงเนื้อหา
                }
            };
        });

    </script>
</body>

</html>
