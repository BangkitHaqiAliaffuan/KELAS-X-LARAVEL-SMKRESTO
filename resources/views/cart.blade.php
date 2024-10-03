@extends('front')

@section('content')

@if(session)

<div class="">
    @php
        $no=1;
    @endphp
    <table class="table">
        <thead>
            <th>No</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Hapus</th>
        </thead>  
        <tbody>
            @foreach (session('cart') as $idmenu=>$menu)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $menu['menu'] }}</td>
                    <td>{{ $menu['harga'] }}</td>
                    <td>{{ $menu['jumlah'] }}</td>
                    <td>{{ $menu['jumlah'] * $menu['harga'] }}</td>
                    <td>Hapus</td>
                </tr>
            @endforeach
        </tbody>  
    </table>
</div>

@else
    <script>
        window.location.href="/";
    </script>

@endif
@endsection