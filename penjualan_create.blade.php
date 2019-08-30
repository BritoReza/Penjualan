@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Tambah Penjualan</h1>
        <hr>
        @if($errors->any())
    
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('penjualan.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">id : </label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="id_barang">id_barang : </label>
            <input type="text" class="form-control" id="id_barang" name="id_barang">
        </div>
        <div class="form-group">
            <label for="jml">jml : </label>
            <input type="text" class="form-control" id="jml" name="jml">
        </div>
        <div class="form-group">
            <label for="total_harga">total_harga : </label>
            <textarea class="form-control" name="total_harga" id="total_harga"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection