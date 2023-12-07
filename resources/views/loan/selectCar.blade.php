	<fieldset>
	<legend>@yield('title', $title)</legend>
	<fieldset>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div id="status_form" class="alert alert-primary" role="alert" style="display: block;"><p class="alert alert-info">{{ $err }}</p></div>
        @endforeach
        @endif
	</fieldset>
	<fieldset>
	<table width=100% cellspacing="2px">
		<tr style="text-align: center; border-top: #442244 solid 2px; border-bottom: #442244 solid 1px;">
			<th style="text-align: center;">No</th><th style="text-align: center;">Kendaraan </br>(Merk/Model/No. Pol.)</th>
			<th style="text-align: center;">TglPinjam</th><th style="text-align: center;">Tgl Kembali</th><th style="text-align: center;">Harga (Hari)</th>
			<th style="text-align: center;">Harga</th><th> Aksi</th></tr>
		@foreach($posts as $data)
		<tr style="border-bottom: #888888 solid 1px;">
		<td>1</td><td>{{ $data->merk }}</td><td>{{ $data->model }}</td><td>{{ $data->car_num }}</td><td>{{ $data->price_r_d }}</td>
		<td style="padding: 2px;">
			<input type="text" id="car_idEdit" size="10" maxlength="10" style="display: none;" value="{{ $data->car_id }}" />
			<button onclick="clickCar({{ $data->car_id }});" class="btn btn-info btn-sm">Pilih</button></form>
			<!--form action="car/destroy/{{ $data->car_id }}" method="get"style="display:inline;">
			<input type="text" id="car_idDelete" size="10" maxlength="10" style="display: none;" value="{{ $data->car_id }}" />
			<button type="submit" class="btn btn-danger btn-sm">Delete</button></form-->
		</td>
		
		</tr>
		@endforeach
		<tr style="text-align: center; border-top: #442244 solid 1px; border-bottom: #442244 solid 1px;"><td></td></tr>
	</table>
	</fieldset>
	</fieldset>