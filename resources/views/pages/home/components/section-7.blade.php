<?php
// $procurement = [
//     [
//         'title_name' => 'จัดซื้อวัสดุสำนักงานปี 2025',
//         'date' => '12-01-2025',
//         'pdfs' => [['post_pdf_file' => 'procurement_2025_1.pdf'], ['post_pdf_file' => 'procurement_2025_2.pdf']],
//     ],
//     [
//         'title_name' => 'จัดซื้อเครื่องมือแพทย์',
//         'date' => '11-01-2025',
//         'pdfs' => [['post_pdf_file' => 'medical_tools_2025.pdf']],
//     ],
//     [
//         'title_name' => 'จัดซื้อรถบรรทุกน้ำ',
//         'date' => '10-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $procurementResults = [
//     [
//         'title_name' => 'ประกาศผลจัดซื้อวัสดุสำนักงาน',
//         'date' => '09-01-2025',
//         'pdfs' => [['post_pdf_file' => 'result_procurement_2025.pdf']],
//     ],
//     [
//         'title_name' => 'ผลจัดซื้อเครื่องมือแพทย์',
//         'date' => '08-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $average = [
//     [
//         'title_name' => 'ราคากลางวัสดุสำนักงาน',
//         'date' => '07-01-2025',
//         'pdfs' => [['post_pdf_file' => 'average_price_office_2025.pdf']],
//     ],
//     [
//         'title_name' => 'ราคากลางเครื่องมือแพทย์',
//         'date' => '06-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $revenue = [
//     [
//         'title_name' => 'งานเก็บรายได้ปี 2025',
//         'date' => '05-01-2025',
//         'pdfs' => [['post_pdf_file' => 'revenue_2025_1.pdf'], ['post_pdf_file' => 'revenue_2025_2.pdf']],
//     ],
// ];

?>
<style>
    .bg-page7 {
        background-image: url('{{ asset('images/home/section-7/bg-section7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .bg-details-section-7 {
        background: linear-gradient(to bottom, rgba(83, 83, 83, 0.521), rgba(83, 83, 83, 0.521));
        width: 100%;
        border-radius: 40px;
    }

    .bg-view-page7 {
        background: linear-gradient(to bottom, rgba(83, 83, 83, 0.521), rgba(83, 83, 83, 0.521));
        width: 100%;
        border-radius: 30px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 5px;
    }

    .bg-view-in-page7 {
        background-color: rgba(107, 107, 107, 0.521);
        width: 100%;
        min-height: 36rem;
        border-radius: 3%;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .layout-card-view-page7 {
        background: linear-gradient(to bottom, #d1f541, #569419);
        padding: 3px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
        width: 100%;
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
    }

    .card-view-page7 {
        background: white;
        border-radius: 10px;
        padding-left: 5px;
        padding-right: 5px;
        padding-bottom: 5px;
        padding-top: 5px;
    }


    .layout-card-view-page7:hover {
        transform: translateY(-5px);
        /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);

    }

    .card-view-page7 .title {
        font-size: 1.5rem;
        color: #333;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* กำหนดให้แสดงเพียง 2 บรรทัด (ประมาณ 25 คำ) */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* แสดง "..." เมื่อข้อความยาวเกิน */
    }


    .card-view-page7 .date {
        font-size: 1.5rem;
        color: #555;
    }

    .card-view-page7 .content {
        font-size: 1.25rem;
        color: #777;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        /* แสดงผลเพียง 2 บรรทัด */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        /* รองรับการตัดคำในหลายบรรทัด */
    }

    .luxury-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 10px;
        background: linear-gradient(to bottom, #d1f541, #569419);
        border: none;
        position: relative;
        color: black;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 35px;
        box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.9);
        font-weight: bold;
        transition: all 0.3s ease;
    }

    /* สำหรับหน้าจอขนาด lg หรือใหญ่กว่า (1200px ขึ้นไป) */
    @media (min-width: 1400px) {
        .luxury-button {
            width: 200px;
            padding: 10px 10px;
            font-size: 1.3rem;
            color: rgb(0, 0, 0);
        }
    }

    .luxury-button:hover {
        transform: translateY(-2px);
        transform: rotate(2deg) scale(1.05);
        background: linear-gradient(to right, #569419, #d1f541);
        /* เปลี่ยนทิศทางไล่สี */
        box-shadow: 0px 4px 20px #569419, 0px 4px 20px #d1f541;
        /* เพิ่มเงาสี */
        transform: scale(1.05);
        /* ขยายขนาด */
        color: rgb(0, 0, 0);
        /* เปลี่ยนสีข้อความ */
    }

    .luxury-button.active {
        transform: translateY(-2px);
        transform: rotate(2deg) scale(1.05);
        background: linear-gradient(to right, #569419, #d1f541);
        /* เปลี่ยนทิศทางไล่สี */
        box-shadow: 0px 4px 4px #d1f541, 0px 4px 20px #569419;
        /* เพิ่มเงาสี */
        transform: scale(1.05);
        /* ขยายขนาด */
        color: rgb(0, 0, 0);
        /* เปลี่ยนสีข้อความ */
    }

    .pdf-item {
        margin-bottom: 8px;
    }




    .layout-bottom-page7:hover {
        transform: translateY(-1px);
        /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
</style>



<main class="bg-page7 d-flex">
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
        <div class="col-lg-7 d-flex flex-column justify-content-between align-items-center" >
            <img src="{{ asset('images/home/section-7/titlex.png') }}" alt="titlex" class="mb-3">
            <div class="d-flex flex-column align-content-center justify-content-center w-100" style="flex-grow: 1;">
                <div class="bg-view-page7">
                    <div class="d-flex align-content-center justify-content-around gap-2 py-3 px-3">
                        <div class="luxury-button" id="btnProcurement" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})">
                            ประกาศจัดซื้อจัดจ้าง
                        </div>
                        <div class="luxury-button" id="btnProcurementResults" onclick="changeContent('ผลจัดซื้อจัดจ้าง', {{ json_encode($procurementResults) }})">
                            ผลจัดซื้อจัดจ้าง
                        </div>
                        <div class="luxury-button" id="btnAverage" onclick="changeContent('ราคากลาง', {{ json_encode($average) }})">
                            ประกาศราคากลาง
                        </div>
                        <div class="luxury-button" id="btnRevenue" onclick="changeContent('เก็บรายได้', {{ json_encode($revenue) }})">
                            งานเก็บรายได้
                        </div>
                    </div>
                    <div class="bg-view-in-page7 d-flex flex-column justify-content-start align-items-center gap-1 overflow-auto" id="contentArea" style="flex-grow: 1;">
                        <!-- เนื้อหาที่จะถูกเปลี่ยนแปลงที่นี่ -->
                    </div>
                    {{-- <div id="pagination" class="d-flex justify-content-center mt-3">
                        <button id="prevBtn" class="btn btn-outline-dark me-2" style="display:none;">
                            <i class="fa-solid fa-chevron-left"></i> ก่อนหน้า
                        </button>
                        <button id="nextBtn" class="btn btn-outline-dark" style="display:none;">
                            ถัดไป <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div> --}}
                    <div class="d-flex justify-content-end align-items-start my-2 position-relative">
                        <a href="#" class="link-green-section3 me-2">ดูทั้งหมด</a>
                        <img src="{{ asset('images/home/section-3/leaf.png') }}" alt="leaf"
                            style="position: absolute; right: -5px; top: 20px; transform: translateY(-50%) rotate(30deg); width: 50px;">
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center gap-3">
            <img src="{{ asset('images/home/section-7/titlexx.png') }}" alt="titlexx">
            <div class="bg-view-page7 py-3 d-grid gap-2" style="display: grid; grid-template-columns: repeat(2, 1fr);">
                <a href="#">
                    <img src="{{ asset('images/home/section-7/1.png') }}" alt="1" class="img-fluid img-hover">
                </a>
                <a href="#">
                    <img src="{{ asset('images/home/section-7/8.png') }}" alt="8" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/2.png') }}" alt="2" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/9.png') }}" alt="9" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/3.png') }}" alt="3" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/10.png') }}" alt="10" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/4.png') }}" alt="4" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/11.png') }}" alt="11" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/5.png') }}" alt="5" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/12.png') }}" alt="12" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/6.png') }}" alt="6" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/13.png') }}" alt="13" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/7.png') }}" alt="7" class="img-fluid img-hover">
                </a>
                <a href="#" class="col-span-2 text-center">
                    <img src="{{ asset('images/home/section-7/14.png') }}" alt="14" class="img-fluid img-hover">
                </a>
            </div>
        </div>
        
    </div>
</main>

<script>
    // ฟังก์ชันที่ใช้แสดงเนื้อหา
    function changeContent(topic, data) {
        // เก็บข้อมูลทั้งหมด
        allItems = data;

        // เรียกใช้ฟังก์ชันเพื่อแสดงข้อมูลตามหน้า
        displayItems();

        // ทำการเปลี่ยนปุ่มที่ถูกคลิกเป็น active และรีเซ็ตปุ่มอื่นๆ
        setActiveButton(topic);
    }

    function setActiveButton(topic) {
        // กำหนดชื่อปุ่มตามหัวข้อ
        const buttons = ['btnProcurement', 'btnProcurementResults', 'btnAverage', 'btnRevenue'];
        const topics = ['จัดซื้อจัดจ้าง', 'ผลจัดซื้อจัดจ้าง', 'ราคากลาง', 'เก็บรายได้'];

        // รีเซ็ตสถานะ active ของทุกปุ่ม
        buttons.forEach(buttonId => document.getElementById(buttonId).classList.remove('active'));

        // ทำให้ปุ่มที่ถูกเลือกมีสถานะ active
        const activeButtonIndex = topics.indexOf(topic);
        if (activeButtonIndex !== -1) {
            document.getElementById(buttons[activeButtonIndex]).classList.add('active');
        }
    }

    let currentPage = 1;
    const itemsPerPage = 5;
    let allItems = [];

    function displayItems() {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = currentPage * itemsPerPage;

        const itemsToDisplay = allItems.slice(startIndex, endIndex);
        let contentArea = document.getElementById('contentArea');
        contentArea.innerHTML = '';

        itemsToDisplay.forEach(item => {
            let newContent = document.createElement('div');

            // เพิ่ม div สำหรับ layout-card-view-page7
            let layoutWrapper = document.createElement('div');
            layoutWrapper.className = 'layout-card-view-page7'; // คลาสใหม่ที่ครอบคลุม

            // สร้าง card-view-page7 ภายใน layout
            let cardContent = document.createElement('div');
            cardContent.className = 'card-view-page7';

            let pdfContent = '';

            if (item.pdfs && item.pdfs.length > 0) {
                pdfContent = item.pdfs.map(pdf => `
                <div class="pdf-item ms-3">
                    <i class="fa-solid fa-file-pdf text-danger"></i>
                    <a href="{{ asset('storage/${pdf.post_pdf_file}') }}" target="_blank" class="text-primary">
                        ${pdf.post_pdf_file.split('/').pop()}
                    </a>
                </div>
            `).join('');
            } else {
                pdfContent = '<div class="text-danger ms-2">ไม่มีข้อมูล PDF</div>';
            }

            const truncateTitle = (title) => {
                if (title.length > 40) {
                    return title.substring(0, 40) + '...';
                }
                return title;
            };

            // กำหนด HTML ของ card-view-page7
            cardContent.innerHTML = `
            <div class="d-flex justify-content-between align-content-center">
                <div class="title text-truncate d-flex justify-content-start align-items-center">
                     ${truncateTitle(item.title_name)}
                </div>
                <div class="date pt-1"> <img src="{{ asset('images/home/section-7/on-time.png') }}" alt="bell" width="25" height="22"> ${item.date}</div>
            </div>
            <div class="content">
                ${pdfContent}
            </div>
        `;

            // เพิ่ม cardContent ลงใน layoutWrapper
            layoutWrapper.appendChild(cardContent);

            // เพิ่ม layoutWrapper ลงใน contentArea
            contentArea.appendChild(layoutWrapper);
        });

        // document.getElementById('prevBtn').style.display = currentPage === 1 ? 'none' : 'inline-block';
        // document.getElementById('nextBtn').style.display = currentPage * itemsPerPage >= allItems.length ? 'none' :
        //     'inline-block';
    }


    // document.getElementById('prevBtn').addEventListener('click', function() {
    //     if (currentPage > 1) {
    //         currentPage--;
    //         displayItems();
    //     }
    // });

    // document.getElementById('nextBtn').addEventListener('click', function() {
    //     if (currentPage * itemsPerPage < allItems.length) {
    //         currentPage++;
    //         displayItems();
    //     }
    // });

    window.onload = function() {
    changeContent('จัดซื้อจัดจ้าง', {!! json_encode($procurement) !!});
}

</script>
