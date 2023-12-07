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
	<form action="/loan/{{ ('tambah_car2') }}" method="post" style="display:inline;">
	<fieldset>
	<table cellspacing="3" border="0">
	{{ csrf_field() }}
	@foreach($loan as $loan)
		<tbody>
		<tr>
			<td style=" padding-right:5px;">Tgl. Mulai</td>
			<td style="padding: 3px;" colspan=2><input type="Date" id="date_start" name="date_start" onchange="" value="{{ $loan->date_start  }}" />
			<input type="text" id="loaner_idx" name="loaner_idx" size="10" maxlength="10" style="display: none;" value="{{ $loan->loaner_idx }} " /></td>			
			<td style="padding-left: 45px;">Tgl. Sampai </td>
			<td style="padding: 3px;"><input type="Date" id="date_end" name="date_end" onchange="" value="{{ $loan->date_end  }}" />
			<input type="text" id="loan_id" name="loan_id" size="10" maxlength="10" style="display: none;" value="{{ $loan->loan_id }} " /></td>			
		</tr>
		<tr>
			<td rowspan=3 valign=top>Kendaraan disewa
			<input type="text" id="car_idx" name="car_idx" size="10" maxlength="10" style="display: none;" value="{{ $loan->car_idx }} " /></td>
			<td style="padding-left: 45px;">No. Pol. </td> 
			<td style="padding: 3px;"><input type="text" id="car_num" name="car_num" onfocus="cariCar('Pilih Kendaraan','Event');"	value="{{ $loan->car_num }}" /></td>
		</tr>
		<tr>
			<td style="padding-left: 45px;">Model</td> 
			<td style="padding: 3px;"><input type="text" id="model" name="model" onchange="" value="{{ $loan->model }}" disabled /></td>
		</tr>
		<tr>
			<td style="padding-left: 45px;">Merk</td> 
			<td style="padding: 3px;"><input type="text" id="merk" name="merk" onchange="" value="{{ $loan->merk }}" disabled /></td>
		</tr>
		<tr>
			<td style="padding-right:5px;">Harga per hari</td> 
			<td style="padding: 3px;"><input type="text" id="price_r_d" name="price_r_d" onchange="" value="{{ $loan->price_r_d }}" /></td> 	
		</tr>
	</tbody>
	@endforeach
	</table>
	</fieldset>	
	<fieldset align="left" style="padding: 10px; text-align: right;">
		<button type="submit" class="btn btn-info" disabled>Simpan</button>
		<a href="/loan" class="btn btn-primary">Kembali</a>
	</fieldset>
	</form>
	<fieldset>
	<table width=100% cellspacing="2px">
		<tr style="text-align: center; border-top: #442244 solid 2px; border-bottom: #442244 solid 1px;">
			<th style="text-align: center;">No</th><th style="text-align: center;">Kendaraan </br>(Merk/Model/No. Pol.)</th>
			<th style="text-align: center;">TglPinjam</th><th style="text-align: center;">Tgl Kembali</th><th style="text-align: center;">Lama (Hari)</th>
			<th style="text-align: center;">Harga</th><th> Aksi</th></tr>
		@foreach($posts as $key => $data)
		@if($data->date_return == ''){
		<tr style="border-bottom: #888888 solid 1px; background: #ffffff;">
		}
		@else{
		<tr style="border-bottom: #888888 solid 1px; background: #aaaaaa;">
		}
		@endif
		<td style="text-align: center;">{{ $key+1 }}</td><td style="text-align: center;">{{ $data->merk }}</br>{{ $data->model }}</br>{{ $data->car_num }}</td>
		<td style="text-align: center;">{{ $data->date_start }}</td><td style="text-align: center;">{{ $data->date_end }}</br>{{ $data->date_return }}</td>
		<td style="text-align: center;">{{ dateDiff($data->date_start, $data->date_end) }}</td>
		<td style="text-align: center;">{{ $data->price_r_d }} </br>{{ (dateDiff($data->date_start, $data->date_end)*$data->price_r_d) }}</td>
		<td style="padding: 2px;">
			<form action="/loan/put/{{ $data->car_id }}" method="GET" style="display:inline;">
			<input type="text" id="loan_idEdit{{ $data->car_id }}" size="10" maxlength="10" style="display: none;" value="{{ $data->car_id }}" />
			<button type="submit" class="btn btn-info btn-sm">View</button></form>
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
	
<script>
function clickCar(id)
{
	const input1 = document.getElementById('car_num');
	const input2 = document.getElementById('model');
	const input3 = document.getElementById('merk');
	const input4 = document.getElementById('car_idx');
	const input5 = document.getElementById('price_r_d');
	$.ajax({
		type: "POST",
		url: "/loan/getCarById?id=" + id,
		data: {
			"_token": "{{ csrf_token() }}",
			"id": id,
			},

		success: function(ret_data) {
			console.log(ret_data);
			const id_numbers = JSON.stringify(ret_data);
			const id_number = JSON.parse(id_numbers);
			console.log(typeof id_number );
			console.log(id_number );
			input1.value = id_number.car_num;
			input2.value = id_number.model;
			input3.value = id_number.merk;
			input4.value = id_number.car_id;
			input5.value = id_number.price_r_d;
		},
		error: function(req, textStatus, errorThrown) {
			alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
		}
	});

		closeDialog();
}


function cariCar(title,ev){
	kosongkan();
	setSloc('simpan');
	content= "<div>";
	content+="<fieldset>"+
		"<table><tr><td>Find Merk</td><td>:"+
		"<input type=text id=textpo class=myinputtext onkeypress=\"return tanpa_kutip(event);\" maxlength=25 style='width:150px'>"+
		"</td></tr>"+
		"<tr><td>Find Model</td><td>:<input type=text class=myinputtext onkeypress='return tanpa_kutip(event)' style='width:150px' id=selSupp />"+
		"<button class=mybutton onclick=goCariCar()>Cari</button></td></tr><tr><td></td></tr></table></fieldset>";
	content+="<div id=containercari style=\"height:250px;width:470px;overflow:scroll;\"></div></div>";
    
	//display window
	title=title;
	width='500';
	height='350';
	showDialog1(title,content,width,height,ev);	
}

function kosongkan()
{
	const input1 = document.getElementById('car_num');
	const input2 = document.getElementById('model');
	const input3 = document.getElementById('merk');
	
	input1.value='';
	input2.value='';
	input3.value='';
	//document.getElementById('car_num').value=' ';
	//document.getElementById('model').value=' ';
	//document.getElementById('merk').value=' ';
	//enableHeader();	
}

function myFunction(x) {
  x.style.background = "yellow";
}

function setSloc(x){
        //gudang = document.getElementById('sloc').options[document.getElementById('sloc').selectedIndex].value;
        gudang = "Normal";
//set value display periode
        tglstart=document.getElementById('date_start').value;
        tglend=document.getElementById('date_end').value;
        tglstart=tglstart.substr(6,2)+"-"+tglstart.substr(4,2)+"-"+tglstart.substr(0,4);
        tglend=tglend.substr(6,2)+"-"+tglend.substr(4,2)+"-"+tglend.substr(0,4);
        //document.getElementById('displayperiod').innerHTML=tglstart+" - "+tglend;
		if(tglstart == '--') {tglstart='12-12-2023';}
        if (gudang != '') {
                if (x == 'simpan') {
                        //document.getElementById('sloc').disabled = true;
                        //document.getElementById('btnsloc').disabled = true;
                        //tujuan = 'log_slave_getBapbNumber.php';
                        tujuan = '/loan/getCar/'+ tglstart;
                        param = 'tglstart=' + tglstart;
                        post_response_text(tujuan, param, respog);
                }
                else {
                        document.getElementById('sloc').disabled = false;
                        document.getElementById('sloc').options[0].selected=true;
                        document.getElementById('btnsloc').disabled = false;
                        kosongkan();
                }	

        }	
                function respog(){
                        if (con.readyState == 4) {
                                if (con.status == 200) {
                                        busy_off();
                                        if (!isSaveResponse(con.responseText)) {
                                                alert('ERROR TRANSACTION,\n' + con.responseText);
                                        }
                                        else {
                                                //alert(con.responseText);
												document.getElementById('containercari').innerHTML=con.responseText;
                                        }
                                }
                                else {
                                        busy_off();
                                        error_catch(con.status);
                                }
                        }
                }
}
</script>	
@endsection