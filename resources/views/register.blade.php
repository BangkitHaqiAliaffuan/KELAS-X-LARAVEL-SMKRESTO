@extends('front')

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="" method="post">
                <div class="">
                    <label class="form-label" for="">Pelanggan</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="">
                    <label class="form-label" for="">Alamat</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="">
                    <label class="form-label" for="">Telp</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="">
                    <label class="form-label" for="">Jenis Kelamin</label>
                    <select class="form-select" name="jeniskelamin" id="">
                        <option value="l">L</option>
                        <option value="p" selected>P</option>
                    </select>
                </div>
                <div class="">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="mt-2">
                
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection