<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="คำอธิบายเว็บไซต์">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub.ttf') format('woff2');
            font-weight: normal;
        }

        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub-Bold.ttf') format('woff2');
            font-weight: bold;
        }

        body {
            font-family: 'th-krub', sans-serif;
            font-size: 20px;
        }

        .bg-nav {
            background-image: url('{{ asset('images/header/bg-header.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 10vh;
            padding: 10px;
        }

        .text-title-nav {
            color: #ffffff;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
        }

        .button-greenlight {
            background-color: rgb(58, 175, 22);
            font-size: 25px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-greenlight:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-greenblack {
            background-color: rgb(27, 116, 0);
            font-size: 25px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-greenblack:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-img img {
            cursor: pointer;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .button-img img:hover {
            transform: scale(1.1);
            /* ขยายขนาดเมื่อ hover */
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.7));
            /* เพิ่มเงาสีขาว */
        }

        .logo {
            height: 9rem;
        }

        /* สำหรับ scrollbar ทุกประเภท */
        ::-webkit-scrollbar {
            width: 5px;
            /* กำหนดความกว้างของ scrollbar */
            height: 12px;
            /* กำหนดความสูงของ scrollbar สำหรับแนวนอน */

        }

        /* ส่วนที่ใช้ควบคุมสีของ scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: rgb(27, 116, 0);
            /* สีของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบ scrollbar เป็นมุมมน */
            transition: all 0.5s;
        }

        /* ส่วนที่เป็นพื้นหลังของ scrollbar */
        ::-webkit-scrollbar-track {
            background: transparent;
            /* สีพื้นหลังของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบของ track เป็นมุมมน */
        }

        /* ส่วนของ scrollbar แนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 10px;
        }

        /* สำหรับ scrollbar เมื่อ hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: rgb(148, 228, 0);
            /* เปลี่ยนสีเมื่อ hover */
        }

        /* Loading Screen */


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
</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <img src="{{ asset('images/home/video/GM_.gif') }}" alt="gm" style="width: 45rem">
    </div>
    <div id="page-content">
        <!-- Content Section -->
        <header class="bg-nav d-flex">
            <div class="container d-flex justify-content-center justify-content-md-between align-items-center">
                <div class="d-flex  justify-content-start align-items-center gap-3">
                    <img src="{{ asset('images/header/logo.png') }}" alt="logo" class="logo d-none d-md-block">
                    <div class="text-title-nav lh-1 text-center text-md-start ">
                        <span class="me-1" style="font-size: 42px;">องค์การบริหารส่วนตำบลพระอาจารย์</span> <br>

                        <span style="font-size: 26px;">อำเภอองครักษ์ จังหวัดนครนายก</span> <br>
                        <span style="font-size: 26px;">Phra Achan Subdistrict Administrative Organization</span>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center d-none d-lg-block">
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <a href="{{ route('showLoginForm') }}" class="button-greenlight">เข้าสู่ระบบ</a>
                        <a href="" class="button-greenblack">สมัครสมาชิก</a>
                    </div>
                    <div class="d-flex justify-content-start align-items-end gap-2 button-img mt-2">
                        <a class="button-greenlight" style="border-radius: 20px; padding:0px 24px;"
                            href="{{ route('HomeDataPage') }}">หน้าแรก</a>
                        <img src="{{ asset('images/header/minus.png') }}" alt="ลดขนาด" data-action="decrease">
                        <img src="{{ asset('images/header/normal.png') }}" alt="ขนาดปกติ" data-action="normal">
                        <img src="{{ asset('images/header/plus.png') }}" alt="เพิ่มขนาด" data-action="increase">

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                let defaultFontSize = 20; // ขนาดเริ่มต้น
                                const minFontSize = 10;
                                const maxFontSize = 40;
                                const step = 2;

                                function updateFontSize(size) {
                                    document.querySelectorAll("*").forEach(el => {
                                        el.style.fontSize = size + "px";
                                    });
                                }

                                document.querySelectorAll("img[data-action]").forEach(img => {
                                    img.addEventListener("click", function() {
                                        let action = this.getAttribute("data-action");

                                        if (action === "decrease") {
                                            defaultFontSize = Math.max(minFontSize, defaultFontSize - step);
                                        } else if (action === "normal") {
                                            defaultFontSize = 20;
                                        } else if (action === "increase") {
                                            defaultFontSize = Math.min(maxFontSize, defaultFontSize + step);
                                        }

                                        updateFontSize(defaultFontSize);
                                    });
                                });
                            });
                        </script>

                        <img src="{{ asset('images/header/disability.png') }}" alt="btn-disability" width="42"
                            height="42" id="toggleTheme">

                        <style>
                            .dark-mode * {
                                background-color: black !important;
                                color: white !important;
                            }
                        </style>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const toggleButton = document.getElementById("toggleTheme");

                                toggleButton.addEventListener("click", function() {
                                    document.body.classList.toggle("dark-mode");
                                });
                            });
                        </script>

                        <img src="{{ asset('images/header/thailand.png') }}" alt="thailand">
                        <img src="{{ asset('images/header/united-kingdom.png') }}" alt="english">
                    </div>
                </div>
            </div>
        </header>
        @include('layout.components.header')


        @yield('content')
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
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>

</body>

</html>
