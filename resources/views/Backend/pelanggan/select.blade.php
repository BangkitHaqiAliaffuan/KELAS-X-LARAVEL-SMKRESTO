@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Pelanggan</h1>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->pelanggan }}</td>
                        <td>{{ $kategori->alamat }}</td>
                        <td>{{ $kategori->telp }}</td>
                        <td>{{ $kategori->email }}</td>
                        @php
                            if ($kategori->aktif  == 0) {
                                $aktif = '<a href="'.url('admin/pelanggan/'.$pelanggan->$idpelanggan).'">BANNED</a>';
                            } else{
                                $aktif = '<a href="'.url('admin/pelanggan/'.$pelanggan->$idpelanggan).'">AKTIF</a>';
                            }
                        @endphp
                        <td>{{ $aktif }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $pelanggans->withQueryString()->links() }}
    </div>
@endsection