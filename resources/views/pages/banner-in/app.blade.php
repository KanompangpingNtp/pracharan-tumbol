@extends('layout.app')
@section('title','ตรวจสอบภายใน')
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

        .title-section {
            font-size: 60px;
            font-weight: bold;
            color: white;
            text-shadow:
                2px 2px 0px rgba(0, 0, 0, 0.8),
                4px 4px 5px rgba(0, 0, 0, 0.5);
        }

        .img-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .img-hover:hover {
            transform: scale(1.1);
        }
    </style>
    <div class="bg py-5">
        <div class="container py-5 ">
            <div class=" d-flex flex-column justify-content-center align-items-start">
                <div class="title-section lh-1 d-flex flex-column align-items-start justify-content-center mb-3">
                    หน่วยงานภายนอก
                </div>
                <div class="d-flex justify-content-center align-item-center"
                    style="background-color: rgba(0, 0, 0, 0.438); border-radius:20px;">
                    <div class="row px-4 py-5 justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.facebook.com/PanithanD/" target="_blank">
                                <img src="{{ asset('images/banner-in/1.png') }}" alt="1" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.thaigov.go.th/index.php?option=com_k2&view=itemlist&layout=category&task=category&id=250&Itemid=350&lang=th" target="_blank">
                                <img src="{{ asset('images/banner-in/2.png') }}" alt="2" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.crr-thai.org/" target="_blank">
                                <img src="{{ asset('images/banner-in/3.png') }}" alt="3" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.dla.go.th/servlet/EbookServlet?_mode=read&ebookColum=5703#/page/1" target="_blank">
                                <img src="{{ asset('images/banner-in/4.png') }}" alt="4" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.damrongdham.moi.go.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/5.png') }}" alt="5" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.info.go.th/#!/th/search///" target="_blank">
                                <img src="{{ asset('images/banner-in/6.png') }}" alt="6" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.oic.go.th/ginfo/" target="_blank">
                                <img src="{{ asset('images/banner-in/7.png') }}" alt="7" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://122.155.1.141/in.ndwc-10.283/" target="_blank">
                                <img src="{{ asset('images/banner-in/8.png') }}" alt="8" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.dla.go.th/index.jsp" target="_blank">
                                <img src="{{ asset('images/banner-in/9.png') }}" alt="9" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.nptlocal.go.th/index.php" target="_blank">
                                <img src="{{ asset('images/banner-in/10.png') }}" alt="10"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.egov.go.th/th/index.php" target="_blank">
                                <img src="{{ asset('images/banner-in/11.png') }}" alt="11"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://km.laas.go.th/laaskm/" target="_blank">
                                <img src="{{ asset('images/banner-in/12.png') }}" alt="12"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://e-plan.dla.go.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/13.png') }}" alt="13"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.gprocurement.go.th/new_index.html" target="_blank">
                                <img src="{{ asset('images/banner-in/14.png') }}" alt="14"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.mdes.go.th/view/1/home" target="_blank">
                                <img src="{{ asset('images/banner-in/15.png') }}" alt="15"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.doe.go.th/nakhonpathom" target="_blank">
                                <img src="{{ asset('images/banner-in/16.png') }}" alt="16"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank">
                                <img src="{{ asset('images/banner-in/17.png') }}" alt="17"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://newskm.moi.go.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/18.png') }}" alt="18"
                                    class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.nhso.go.th/FrontEnd/Index.aspx" target="_blank">
                                <img src="{{ asset('images/banner-in/19.png') }}" alt="19" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.thaihealth.or.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/20.png') }}" alt="20" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.doe.go.th/prd/" target="_blank">
                                <img src="{{ asset('images/banner-in/21.png') }}" alt="21" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.womenfund.in.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/22.png') }}" alt="22" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://brh.thaigov.net/brh-2011/index.php" target="_blank">
                                <img src="{{ asset('images/banner-in/23.png') }}" alt="23" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.prd.go.th/main.php?filename=index_2015" target="_blank">
                                <img src="{{ asset('images/banner-in/24.png') }}" alt="24" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.rd.go.th/publish/272.0.html" target="_blank">
                                <img src="{{ asset('images/banner-in/25.png') }}" alt="25" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.bb.go.th/bbweb/" target="_blank">
                                <img src="{{ asset('images/banner-in/26.png') }}" alt="26" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.nacc.go.th/main.php?filename=index" target="_blank">
                                <img src="{{ asset('images/banner-in/27.png') }}" alt="27" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.ect.go.th/ect_th/" target="_blank">
                                <img src="{{ asset('images/banner-in/28.png') }}" alt="28" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.admincourt.go.th/admincourt/site/" target="_blank">
                                <img src="{{ asset('images/banner-in/29.png') }}" alt="29" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.oag.go.th/home" target="_blank">
                                <img src="{{ asset('images/banner-in/30.png') }}" alt="30" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.krisdika.go.th/wps/portal/general" target="_blank">
                                <img src="{{ asset('images/banner-in/31.png') }}" alt="31" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://dopa.go.th/main/web_index" target="_blank">
                                <img src="{{ asset('images/banner-in/32.png') }}" alt="32" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.moc.go.th/index.php/home.html" target="_blank">
                                <img src="{{ asset('images/banner-in/33.png') }}" alt="33" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.dit.go.th/default.aspx" target="_blank">
                                <img src="{{ asset('images/banner-in/34.png') }}" alt="34" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.dbd.go.th/main.php?filename=index" target="_blank">
                                <img src="{{ asset('images/banner-in/35.png') }}" alt="35" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.moph.go.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/36.png') }}" alt="36" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://thai.tourismthailand.org/home" target="_blank">
                                <img src="{{ asset('images/banner-in/37.png') }}" alt="37" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.baac.or.th/index.php?cover_page=1" target="_blank">
                                <img src="{{ asset('images/banner-in/38.png') }}" alt="38" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="https://www.gsb.or.th/" target="_blank">
                                <img src="{{ asset('images/banner-in/39.png') }}" alt="39" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.glo.or.th/main.php?filename=index" target="_blank">
                                <img src="{{ asset('images/banner-in/40.png') }}" alt="40" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="http://www.aseanthai.net/main.php?filename=index" target="_blank">
                                <img src="{{ asset('images/banner-in/41.png') }}" alt="41" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('images/banner-in/42.png') }}" alt="42" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('images/banner-in/43.png') }}" alt="43" class="img-fluid img-hover">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#" target="_blank">
                                <img src="{{ asset('images/banner-in/44.png') }}" alt="44" class="img-fluid img-hover">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    
@endsection
