@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Order Detail</h1>
    </div>
    <div>
        <h2>Total : {{ $orders [0] ['pelanggans'] }}</h2>
        <h2>Pelanggan : {{ number_format($orders [0] ['total']) }}</h2>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $order->mmenu }}</td>
                        <td>{{ $order->harga }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->jumlah * $order->harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection