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
                    <th>Kategori</th>
                    <th>Menu</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $menus->kategori }}</td>
                        <td>{{ $menus->menu }}</td>
                        <td>{{ $menus->deskripsi }}</td>
                        <td>
                            <img width="100px" src="{{ asset('gambar/'.$menu->gambar) }}" alt="">
                        </td>
                        <td>{{ $menus->harga }}</td>
                        <td>
                            <a href="{{ url('admin/menu/'.$menu->idmenu.'edit') }}">Ubah</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/menu/'.$menus->idmenu) }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $menus->withQueryString()->links() }}
    </div>
@endsection