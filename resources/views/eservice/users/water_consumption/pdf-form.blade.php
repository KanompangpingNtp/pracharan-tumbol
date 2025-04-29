<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>PDF Report</title>

    <style>
        @font-face {
            font-family: 'sarabun';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'sarabun-bold';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew-Bold.ttf') }}") format('truetype');
        }

        body {
            font-family: 'sarabun', 'sarabun-bold', sans-serif;
            font-size: 17px;
            margin: 0;
            padding: 0;
            line-height: 1;
        }


        .regis_number {
            text-align: right;
            margin-right: 8px;
        }

        .title_doc {
            text-align: center;
        }

        .box_text {
            border: 1px solid rgba(255, 255, 255, 0);
            text-align: start;
        }

        .box_text span {
            display: inline-flex;
            align-items: center;
            line-height: 1;
        }

        .box_text input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .box_text_border {
            margin-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 5px;
            border: 2px solid black;
            text-align: left;

        }

        .box_text_border span {
            display: inline-flex;
            align-items: left;
            line-height: 0.3;
        }

        .box_text_border input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .dotted-line {
            margin-left: 2px;
            color: blue;
            border-bottom: 2px dotted blue;
            word-wrap: break-word;
            /* ห่อข้อความที่ยาวเกิน */
            overflow-wrap: break-word;
            /* รองรับ browser อื่น */
        }
    </style>
</head>

<body>
    <div style="text-align: center; ">
        <strong>
            คำร้องขอสนับสนุนน้ำเพื่ออุปโภค-บริโภค
        </strong>
    </div>
    <div class="box_text" style="text-align: right; margin-top:-0.5rem;">
        <span>เขียนที่ สำนักงานเทศกาลตำบลเกวียนหัก</span> <br>
        <span>วันที่</span><span class="dotted-line" style="width: 8%; text-align: center;"></span>
        <span>เดือนที่</span><span class="dotted-line" style="width: 12%; text-align: center;"></span>
        <span>พ.ศ.</span><span class="dotted-line" style="width: 8%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:-0.5rem;">
        <span>เรื่อง ขอความอนุเคราะห์สนับสนุนน้ำเพื่ออุปโภค-บริโภค</span> <br>
        <span>เรียน นายกเทศมนตรีตำบลเกวียนหัก</span>
        <div style="margin-left: 3rem;">
            <span>ข้าพเจ้าชื่อ</span><span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 9%; text-align: center;"></span>
            <span>หมู่ที่</span><span class="dotted-line" style="width: 9%; text-align: center;"></span>
            <span>ตำบลเกวียนหัก อำเภอขลุง จังหวัดจันทบุรี</span>
        </div>
        <span>อาชีพ</span><span class="dotted-line" style="width: 25%; text-align: center;"></span>
        <span>มีจำนวนสมาชิกที่อาศัยอยู่จริงในบ้าน จำนวน</span><span class="dotted-line"
            style="width: 10%; text-align: center;"></span>
        <span>คน เบอโทรศัพท์</span><span class="dotted-line" style="width: 20%; text-align: center;"></span>
        <span>ขอยื่นคำร้องขอรับการสนับสนุนน้ำเพื่อการอุปโภคบริโภค - บริโภคจากเทศบาลตำบลเกวียนหัก
            ในการแก้ปัญหาการขาดแคลนน้ำ โดยการจัดหาน้ำให้ต่อไป</span>
        <span>จำนวน</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>เที่ยว ซึ่งน้ำจำนวนดังกล่าวจะช่วยบรรเทาความเดือดร้อนในเบื้องต้นได้</span>
        <div style="margin-left: 3rem;">
            <span>จึงเรียนมาเพื่อโปรดพิจารณาให้ความอนุเคราะห์</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:-0.5rem;">
        <span style="margin-right: 7rem; margin-bottom:0.5rem;">ขอแสดงความนับถือ</span><br>
        <span>ลงชื่อ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span>ผู้ยื่นคำร้อง</span>
        <div style="margin-right: 50px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:0.5rem;">
        <span>ลงชื่อ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">
        </span><span>ผู้ยื่นคำร้อง</span>
        <div style="margin-right: 50px;">
            <span>(</span>
            <span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>)</span>
        </div>
    </div>
    <table style="width: 100%; margin-top: -2.3rem; margin-bottom: 0.4rem; " >
        <tr>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:2rem;">
                    <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                    <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                    <span class="dotted-line" style="width: 65%; text-align: center;">()</span><br>
                    <div style="margin-top:1rem; text-align: center;">
                        <span>(นางสุณิสา แสงมัธยม)</span><br>
                        <span>หัวหน้าสำนนักปลัดเทศบาล</span>
                    </div>
                </div>
            </td>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:1rem;">
                    <div class="box_text" style="text-align: center; margin-top:1rem;">
                        <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center;">()</span>
                        <div style="margin-top:1rem; text-align: center;">
                            <span>(นางสาวณัฐณิชา กล่ำแสง)</span><br>
                            <span>ปลัดเทศบาลตำบลเกวียนหัก</span>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:1.5rem;">
                    <div class="box_text" style="text-align: center; margin-top:1rem;">
                        <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center;">()</span>
                        <div style="margin-top:1rem; text-align: center;">
                            <span>(นายสุรพงษ์ โพธิพงษ์)</span><br>
                            <span >รองนายกเทศมนตรี ปฏิบัติราชการแทน</span><br>
                            <span>นายกเทศมนตรีตำบลเกวียนหัก</span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div style="width: 100%; border-bottom: 2px dotted #000;"></div>
    <div style="text-align: center; ">
        บันทึกการปฎิบัติงานของเจ้าหน้าที่
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เรียน นายกเทศมนตรีตำบลเกวียนหัก</span>
        <div style="margin-left: 3rem;">
            <span>ข้าพเจ้าชื่อ</span><span class="dotted-line" style="width: 30%; text-align: center;"></span>
            <span>ตำแหน่ง</span><span class="dotted-line" style="width: 25%; text-align: center;"></span>
            <span>ปฎิบัติหน้าที่จัดส่งน้ำเพื่อการอุปโภค-บริโภค</span>
        </div>
        <span>ให้แก่</span><span class="dotted-line" style="width: 36%; text-align: center;"></span>
        <span>อยู่บ้านเลขที่</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>หมู่ที่</span><span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>ตำบลเกวียนหัก อำเภอขลุง จังหวัดจันทบุรี</span>
        <span>ในวันที่</span><span class="dotted-line" style="width: 12%; text-align: center;"></span>
        <span>เดือน</span><span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>ในวันที่</span><span class="dotted-line" style="width: 12%; text-align: center;"></span>
        <span>ได้จัดส่งน้ำเพื่อการอุปโภค-บริโภคแล้ว จำนวน</span><span class="dotted-line" style="width: 12%; text-align: center;"></span>
        <span>เที่ยว</span>
        <div style="margin-left: 3rem;">
            <span>ข้าพเจ้าขอรับรองว่าการปฎิบัติดังกล่าวได้ดำเนินการสำเร็จลุล่วงเรียบร้อยแล้ว</span>
        </div>
        <div class="box_text" style="text-align: right; ">
            <span>(ลงชื่อ)</span>
            <span class="dotted-line" style="width: 30%; text-align: center; ">
            </span><span style="margin-right: 55px;">เจ้าหน้าที่/ผู้จัดส่ง</span>
            <div style="margin-right: 130px;">
                <span>(</span>
                <span class="dotted-line" style="width: 35%; text-align: center;"></span>
                <span>)</span>
            </div>
            <div style="margin-right: 130px;">
                <span>(</span>
                <span class="dotted-line" style="width: 35%; text-align: center;"></span>
                <span>)</span>
            </div>
        </div>
        <span style="font-weight: bold;">คำรับรองการปฏิบัติงานของเจ้าหน้าที่</span>
        <div style="margin-left: 3rem;">
            <span>ข้าพเจ้าได้รับน้ำเพื่อการอุปโภคบริโภค ตามจำนวนที่ร้องขอความช่วยเหลือจากเทศบาลตำบลเกวียนนนหักเรียบร้อยแล้ว</span>
        </div>
    </div>
    <table style="width: 100%; margin-top: -2.3rem; margin-bottom: 0.4rem; " >
        <tr>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:2rem;">
                    <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                    <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                    <span class="dotted-line" style="width: 65%; text-align: center;">()</span><br>
                    <div style="margin-top:1rem; text-align: center;">
                        <span>(นางสุณิสา แสงมัธยม)</span><br>
                        <span>หัวหน้าสำนนักปลัดเทศบาล</span>
                    </div>
                </div>
            </td>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:1rem;">
                    <div class="box_text" style="text-align: center; margin-top:1rem;">
                        <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center;">()</span>
                        <div style="margin-top:1rem; text-align: center;">
                            <span>(นางสาวณัฐณิชา กล่ำแสง)</span><br>
                            <span>ปลัดเทศบาลตำบลเกวียนหัก</span>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 33%; text-align: center;">
                <div class="box_text" style="text-align: center; margin-top:1.5rem;">
                    <div class="box_text" style="text-align: center; margin-top:1rem;">
                        <span>เรียน ปลัดเทศบาลตำบลเกวียนหัก</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center; ">()</span><br>
                        <span class="dotted-line" style="width: 65%; text-align: center;">()</span>
                        <div style="margin-top:1rem; text-align: center;">
                            <span>(นายสุรพงษ์ โพธิพงษ์)</span><br>
                            <span >รองนายกเทศมนตรี ปฏิบัติราชการแทน</span><br>
                            <span>นายกเทศมนตรีตำบลเกวียนหัก</span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
