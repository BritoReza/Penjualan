@extends('template')
@section('content')
<section class="mais-section">
    <div class="content">
        <h1>Ubah Penjualan</h1>
        <hr>
        @if($errors->any)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) 
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('penjualan.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="id">ID : </label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
            </div>
            <div class="form-group">
                <label for="code">id_barang : </label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ $datas->id_barang }}">
            </div>
            <div class="form-group">
                <label for="description">jml :</label>
                <input type="text" class="form-control" id="jml" name="jml" value="{{ $datas->jml }}">
            </div>
            <div class="form-group">
                <label for="description">total_harga :</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $datas->total_harga }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection