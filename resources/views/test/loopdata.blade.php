<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <div class="container">
        {{-- ประกาศจัดซื้อจัดจ้าง --}}
        <h3>ประกาศจัดซื้อจัดจ้าง</h3>
        <ul>
            @foreach ($procurement as $post)
            <li>
                <p> ชื่อ : {{ $post->title_name }}</p>
                <p> วันที่ : {{ $post->date }}</p>

                @if ($post->pdfs->count() > 0)
                <p>เอกสารแนบ:</p>
                <ul>
                    @foreach ($post->pdfs as $pdf)
                    <li>
                        <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                            ดูเอกสาร PDF
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>

        {{-- ผลจัดซื้อจัดจ้าง --}}
        <h3>ผลจัดซื้อจัดจ้าง</h3>
        <ul>
            @foreach ($procurementResults as $post)
            <li>
                <p> ชื่อ : {{ $post->title_name }}</p>
                <p> วันที่ : {{ $post->date }}</p>

                @if ($post->pdfs->count() > 0)
                <p>เอกสารแนบ:</p>
                <ul>
                    @foreach ($post->pdfs as $pdf)
                    <li>
                        <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                            ดูเอกสาร PDF
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>

        {{-- ประกาศราคากลาง --}}
        <h3>ประกาศราคากลาง</h3>
        <ul>
            @foreach ($average as $post)
            <li>
                <p> ชื่อ : {{ $post->title_name }}</p>
                <p> วันที่ : {{ $post->date }}</p>

                @if ($post->pdfs->count() > 0)
                <p>เอกสารแนบ:</p>
                <ul>
                    @foreach ($post->pdfs as $pdf)
                    <li>
                        <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                            ดูเอกสาร PDF
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>

        {{-- งานเก็บรายได้ --}}
        <h3>งานเก็บรายได้</h3>
        <ul>
            @foreach ($revenue as $post)
            <li>
                <p> ชื่อ : {{ $post->title_name }}</p>
                <p> วันที่ : {{ $post->date }}</p>

                @if ($post->pdfs->count() > 0)
                <p>เอกสารแนบ:</p>
                <ul>
                    @foreach ($post->pdfs as $pdf)
                    <li>
                        <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                            ดูเอกสาร PDF
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>

    </div>
</body>
</html>
