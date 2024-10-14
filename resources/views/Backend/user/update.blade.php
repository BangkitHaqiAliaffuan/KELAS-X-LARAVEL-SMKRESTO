@extends('Backend.back')

@section('admincontent')
<div class="row">
    <div class="col-6">
        <form action="{{ url('admin/user'.$user->id) }}" method="post">
            @csrf
            @method('PUT')
            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            
            <div class="">
                <label class="form-label" for=""></label>
                <input class="form-control"  type="password" name="password" id="">
                <span class="text-danger">
                    @error('kategori')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="mt-2">
            
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection