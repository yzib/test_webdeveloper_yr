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
	<form action="/return/{{ ('tambah2') }}" method="post" style="display:inline;">
	<fieldset>
	<table cellspacing="3" border="0">
	{{ csrf_field() }}
		<tbody>
		<tr>
			<td rowspan=5 valign=top>Kendaraan
			<input type="text" id="car_idx" name="car_idx" size="10" maxlength="10" style="display: none;" value="{{ old('car_id') }} " /></td>
			<td style="padding-left: 5px;">No. Pol. </td> 
			<td style="padding: 3px;"><input type="text" id="car_num" name="car_num" onfocus="cariCar('Pilih Kontrak Sewa','Event');"	value="{{ old('car_num') }}" /></td>
		</tr>
		<tr>
			<td style="padding-left: 5px;">Model</td> 
			<td style="padding: 3px;"><input type="text" id="model" name="model" onchange="{{ old('model') }}" value="" disabled /></td>
			<td style=" padding-right:5px;padding-left: 25px;">Tgl. Mulai</td>
			<td style="padding: 3px;"><input type="text" id="date_start" name="date_start" value="{{ old('date_start') }}"  /></td>	
		</tr>
		<tr>
			<td style="padding-left: 5px;">Merk</td> 
			<td style="padding: 3px;"><input type="text" id="merk" name="merk" onchange="" value="{{ old('merk') }}" disabled /></td>
			<td style="padding-left: 25px;">Tgl. Sampai (Perjanjian) </td>
			<td style="padding: 3px;"><input type="text" id="date_end" name="date_end" onchange="" value="{{ old('date_end')  }}" disabled />
			<input type="text" id="loan_id" name="loan_id" size="10" maxlength="10" value="{{ old('loan_id')  }}" style="display:none;" /></td>		
		</tr>
		<tr>		
			<td style="padding-right:5px;" colspan=3></td> 
			<td style="padding: 3px; padding-top: 10px;">Jumlah Hari <input type="text" id="count_date" name="count_date" value="{{ old('count_date') }}" disabled /></td> 	
		</tr>
		<tr>
			<td style="padding-right:5px;" colspan=3></td> 
			<td style="padding: 3px;" align="right">Harga /hari <input type="text" id="price_done" name="price_done" value="{{ old('price_r_d') }}"  /></td> 	
		</tr>		
		<tr>
			<td style="padding-right:5px;" colspan=7 height="15px"></td> 
		</tr>
		<tr>
			<td style="padding-right:5px;" colspan=2>Tanggal Kembali</td> 
			<td style="padding: 3px;" align="right" ><input type="date" id="date_return" name="date_return" onchange="count_over()" value="{{ old('date_return') }}" /></td> 	
			<td style="padding: 3px;" align="right" colspan=2>Hari Sewa <input type="text" id="over_c_date" name="over_c_date" onchange="" value="{{ old('over_c_date') }}"  /></td> 	
		</tr>
		<tr>
			<td style="padding-right:5px;" colspan=2></td> 
			<td style="padding: 3px;" align="right" ></td> 	
			<td style="padding: 3px;padding-top:15px;" align="right" colspan=2>Total Sewa <input type="text" id="over_price" name="over_price" onchange="" value="{{ old('price_r_d') }}"  /></td> 	
		</tr>
	</tbody></table>
	</fieldset>	
	<fieldset align="left" style="padding: 10px; text-align: right;">
	@if(empty( old('car_id') ))
		<button type="submit" class="btn btn-info">Tambah</button>
	@else
		<button type="submit" class="btn btn-info">Simpan</button>
	@endif
	</fieldset>
	</form>
	<fieldset>
	<table width=100% cellspacing="2px">
		<tr style="text-align: center; border-top: #442244 solid 2px; border-bottom: #442244 solid 1px;">
			<th style="text-align: center;">No</th><th style="text-align: center;">Kendaraan </br>(Merk/Model/No. Pol.)</th>
			<th style="text-align: center;">TglPinjam</th><th style="text-align: center;">Tgl Kembali</th><th style="text-align: center;">Lama (Hari)</th>
			<th style="text-align: center;">Harga</th><th> Aksi</th></tr>
		@foreach($posts as $key => $data)

		<tr style="border-bottom: #888888 solid 1px;">
		<td style="text-align: center;">{{ $key+1 }}</td><td style="text-align: center;">{{ $data->merk }}</br>{{ $data->model }}</br>{{ $data->car_num }}</td>
		<td style="text-align: center;">{{ $data->date_start }}</td><td style="text-align: center;">{{ $data->date_end }}</td>
		<td style="text-align: center;">{{ dateDiff($data->date_start, $data->date_end) }}</td>
		<td style="text-align: center;">{{ $data->price_r_d }} </br>{{ (dateDiff($data->date_start, $data->date_end)*$data->price_r_d) }}</td>
		<td style="padding: 2px;">
			<form action="/return/put/{{ $data->return_id }}" method="GET" style="display:inline;">
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

function count_over(){
	//alert('hello');
	var input1= document.getElementById('date_start');
	var input2 = document.getElementById('date_end');
	var input3 = document.getElementById('date_return');
	var input4 = document.getElementById('price_done');
	var input5 = document.getElementById('over_c_date');
	var input6 = document.getElementById('over_price');
	if(input4.value != ''){
		dt1 = new Date(input1.value);
		dt2 = new Date(input3.value);
		over_c_date= Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
		input5.value = over_c_date
		input6.value = input4.value * input5.value;
		
	}else{
		alert('Silakkan pilik kontrak sewa!');
	}
	
}

function clickCar(id)
{
	const input1 = document.getElementById('car_num');
	const input2 = document.getElementById('model');
	const input3 = document.getElementById('merk');
	const input4 = document.getElementById('car_idx');
	const input5 = document.getElementById('price_done');
	const input6 = document.getElementById('date_start');
	const input7 = document.getElementById('date_end');
	const input8 = document.getElementById('count_date');
	const input9 = document.getElementById('loan_id');
	
	input1.disabled = false;
	input2.disabled = false;
	input3.disabled = false;
	input4.disabled = false;
	input5.disabled = false;
	input6.disabled = false;
	input7.disabled = false;
	input8.disabled = false;
	input9.disabled = false;
	
	$.ajax({
		type: "POST",
		url: "/return/getCarById?id=" + id,
		data: {
			"_token": "{{ csrf_token() }}",
			"id": id,
			},

		success: function(ret_data) {
			//console.log(ret_data);
			const id_numbers = JSON.stringify(ret_data);
			const id_number = JSON.parse(id_numbers);
			//console.log(typeof id_number );
			//console.log(id_number);
			input1.value = id_number.car_num;
			input2.value = id_number.model;
			input3.value = id_number.merk;
			input4.value = id_number.car_id;
			input5.value = id_number.price_r_d;
			input6.value = id_number.date_start;
			input7.value = id_number.date_end;
			input8.value = id_number.count_date;
			input9.value = id_number.loan_id;
			 //count_over();
		},
		error: function(req, textStatus, errorThrown) {
			alert('Ooops: ' + textStatus + ' ' +errorThrown);
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
		if(document.getElementById('car_idx').value!=''){
			id=document.getElementById('car_idx').value;
		}else{
			id=0;
		}
        //document.getElementById('displayperiod').innerHTML=tglstart+" - "+tglend;
		if(tglstart == '--') {tglstart='12-12-2023';}
        if (gudang != '') {
                if (x == 'simpan') {
                        //document.getElementById('sloc').disabled = true;
                        //document.getElementById('btnsloc').disabled = true;
                        //tujuan = 'log_slave_getBapbNumber.php';
                        tujuan = '/return/getCar/'+ tglstart;
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