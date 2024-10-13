@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Kategori</h1>
    </div>
    <div class="">
        <a href="{{ url('admin/menu/create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <form action="{{ url('admin/select') }}" method="post" onchange="this.form.submit()">
                <select class="form-select" name="idkategori" id="">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Bayar</th>
                    <th>Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <a href="{{ url('admin/menu/'.$order->idorder.'/edit') }}">{{ $order->pelanggan }}</a>
                        </td>
                        <td>{{ $order->tglorder }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->bayar }}</td>
                        <td>{{ $order->kembali }}</td>
                        @php
                            $status = "Lunas";
                            if ($order->status == 0) {
                                $status = '<a href="'.url('admin/order/'.$order->idoerder).'">BAYAR</a>';
                            }
                        @endphp
                        <td>{!! $status !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $orders->withQueryString()->links() }}
    </div>
@endsection