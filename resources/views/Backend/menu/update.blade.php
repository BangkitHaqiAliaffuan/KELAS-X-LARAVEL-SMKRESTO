@extends('Backend.back')

@section('admincontent')
<div>
    <h2>Update Data</h2>
</div>
<div class="row">
    <div class="col-6">
        <form action="{{ url('admin/postmenu') }}" method="post" enctype="multipart/form-data">
            @csrf

            <select class="form-select" name="idkategori" id="">
                @foreach($kategoris as $kategori)
                <option @selected($kategori->idkategori==$menu->idkategori) value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                @endforeach
            </select>

            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            
            <div class="">
                <label class="form-label" for="">Menu</label>
                <input class="form-control" type="text" name="menu" value="{{ $menu->menu }}" id="">
                <span class="text-danger">
                    @error('menu')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="">
                <label class="form-label" for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="" value="{{ $menu->deskripsi }}">
                <span class="text-danger">
                    @error('deskripsi')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="">
                <label class="form-label" for="">Harga</label>
                <input class="form-control" type="text" value="{{ $menu->harga }}" name="harga" id="">
                <span class="text-danger">
                    @error('harga')
                        {{ $message }}
                    @enderror
                </span>
            </div>
           
            <div class="">
                <label class="form-label" for="">Gambar</label>
                <input class="form-control" type="file" name="gambar" id="" >
                <span class="text-danger">
                    @error('gambar')
                        {{ $message }}
                    @enderror
                </span>
            </div>
           
            
            <div class="mt-2">
            
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
    </div>
</div>
@endsection