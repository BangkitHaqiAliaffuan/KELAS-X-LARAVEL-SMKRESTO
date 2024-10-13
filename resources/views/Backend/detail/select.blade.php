@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Order Detail</h1>
    </div>
    <div class="row">
        <form action="{{ url('admin/kategori') }}" method="post">
            @csrf       
            <div class="col-4">
                <label class="form-label" for="">Tanggal Mulai</label>
                <input class="form-control" value="{{ old('kategori') }}" type="text" name="tglmulai" id="">
            </div>
        
            <div class="col-4">
                <label class="form-label" for="">Tanggal Akhir</label>
                <input class="form-control" value="{{ old('kategori') }}" type="text" name="tglmulai" id="">
            </div>
            
            <div class="mt-2">
            
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Pelanggan</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($details as $detail)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->tglorder }}</td>
                        <td>{{ $kategori->pelanggan }}</td>
                        <td>{{ $kategori->menu }}</td>
                        <td>{{ $kategori->harga }}</td>
                        <td>{{ $kategori->jumlah }}</td>
                        <td>{{ $kategori->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $details->withQueryString()->links() }}
    </div>
@endsection