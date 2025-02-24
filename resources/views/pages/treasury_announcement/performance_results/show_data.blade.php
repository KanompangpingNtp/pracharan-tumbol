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
            0 0 50px -10px rgba(158, 255, 3, 0.8),
            0 0 50px -10px rgba(72, 255, 0, 0.8);
        background-color: #ffffff;
    }

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center align-items-center p-5 ">
            <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">ผลจัดซื้อจัดจ้าง</div>

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
                @foreach($ProcurementResults as $detail)
                <tr>
                    <td><a href="{{route('ProcurementResultsShowDetails',$detail->id)}}">{{ $detail->title_name }}</a></td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
