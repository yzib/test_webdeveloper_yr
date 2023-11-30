@extends('car/app')
@section('content')
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
		@csrf
        <form action="{{ 'tambah_car' }}" method="POST">
            <table class="mb-3">
			<tr>
                <td><label >No. Urut sys <span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="username" name="car_id" value="{{ old('car_id') }}" /></td>
			</tr>
            <tr>
                <td><label>Peminjam<span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="username" name="merk" value="{{ old('merk') }}" /></td>
            </tr>
           <tr>
                <td><label>Peminjam<span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="username" name="merk" value="{{ old('merk') }}" /></td>
            </tr>
			<tr>
                <td><label>Model Kendaraan<span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="text" name="model" value="{{ old('model') }}" /></td>
            </tr>
			<tr>
                <td><label>NO. Plat<span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="text" name="car_num" value="{{ old('car_num') }}" /></td>
            </tr>
			<tr>
                <td><label>Harga Per Jam<span class="text-danger">*</span></label></td>
                <td><input class="form-control" type="text" name="price_r_d" value="{{ old('price_r_d') }}" /></td>
            </tr>
			<tr><td></td><td>
                <button class="btn btn-primary">Tambah</button>
                <a class="btn btn-danger" href="{{ '../xhome' }}">Back</a></td>
            </tr>
        </form>
    </div>
@endsection