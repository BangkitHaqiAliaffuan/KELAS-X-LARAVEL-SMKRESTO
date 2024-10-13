@extends('Backend.back')

@section('admincontent')
<div>
    <h1>{{ number_format($order->total) }}</h1>
</div>
<div class="row">
    <div class="col-6">
        <form action="{{ url('admin/order/'.$order->idorder) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <label class="form-label" for="">Total</label>
                <input class="form-control" type="text" min="{{ $order->total }}" name="total" value="{{ $order->total }}" id="">
                <span class="text-danger">
                    @error('menu')
                        {{ $message }}
                    @enderror
                </span>
            </div> 
            <div class="mt-2">
            
                <button class="btn btn-primary" type="submit">Bayar</button>
            </div>
        </form>
    </div>
</div>
@endsection