@extends('app4')
@section('ContentForm')
	<fieldset>
	<legend>@yield('title', $title)</legend>
	<fieldset>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div id="status_form" class="alert alert-primary" role="alert" style="display: block;"><p class="alert alert-info">{{ $err }}</p></div>
        @endforeach
        @endif
	</fieldset>
	<form action="{{ ('/car/save_car') }}" method="post" style="display:inline;">
	<fieldset>
	<table cellspacing="3" border="0">
	{{ csrf_field() }}
	@foreach($car as $car)
		<tbody>
		<tr>
			<td style=" padding-right:5px;">No. Plat Kendaraan</td>
			<td style="padding: 3px;"><input type="text" id="car_num" name="car_num" onchange="" value="{{ $car->car_num }}" /></td>			
			<td style="padding-left: 45px;"></td>
			<td style="padding: 3px;"><input type="text" id="car_id" name="car_id" size="10" maxlength="10" style="display: none;" value="{{ $car->car_id }}" /></td>			
		</tr>
		<tr>
			<td>Merk/Brand</td>
			<td style="padding: 3px;"><input type="text" id="merk" name="merk" onchange="" value="{{ $car->merk }}" /></td>
			<td style="padding-left: 45px;">Model</td> 
			<td style="padding: 3px;"><input type="text" id="model" name="model" onchange="" value="{{ $car->model }}" /></td>
		</tr>
		<tr>
			<td style="padding-right:5px;">Harga per hari</td> 
			<td style="padding: 3px;"><input type="text" id="price_r_d" name="price_r_d" onchange="" value="{{ $car->price_r_d }}" /></td> 	
		</tr>
	</tbody>
	@endforeach
	</table>
	</fieldset>	
	<fieldset align="left" style="padding: 10px; text-align: right;">
	@if(empty($car->car_id ))
		<button type="submit" class="btn btn-info">Tambah</button>
	@else
		<button type="submit" class="btn btn-info">Simpan</button>
		<a href="/car_setup" class="btn btn-primary">Kembali</a>
	@endif
	</fieldset>
	</form>
	<fieldset>
	<table width=100% cellspacing="2px">
		<tr style="text-align: center; border-top: #442244 solid 1px;">
			<th>No</th><th>Merk</th><th>Model</th><th>Plat No.</th><th>Harga/hari</th><th>Aksi</th></tr>
		@foreach($posts as $data)
		<tr>
		<td>1</td><td>{{ $data->merk }}</td><td>{{ $data->model }}</td><td>{{ $data->car_num }}</td><td>{{ $data->price_r_d }}</td>
		<td>
			<form action="/car/put/{{ $data->car_id }}" method="GET" style="display:inline;">
			<input type="text" id="car_idEdit" size="10" maxlength="10" style="display: none;" value="{{ $data->car_id }}" />
			<button type="submit" class="btn btn-info btn-sm">Edit</button></form>
			<!--form action="/car/destroy/{{ $data->car_id }}" method="get"style="display:inline;">
			<input type="text" id="car_idDelete" size="10" maxlength="10" style="display: none;" value="{{ $data->car_id }}" />
			<button type="submit" class="btn btn-danger btn-sm">Delete</button></form-->
		</td>
		
		</tr>
		@endforeach
	</table>
	</fieldset>
	</fieldset>
@endsection