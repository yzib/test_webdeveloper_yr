<html>
	<head>
		<title>Login</title>
<style>
			body{
				position: absolute;
				padding: 0;
				margin: 0;
				width: 100%;
				height: 100%;
			}
			.boxx{
				position: relative;
				margin: -7% 10% 10% 10%;
				background-color: white;
				width: 70%;
				height: 100%;
				z-index: 10;
				border-radius: 2px;
             	box-shadow: 10px 8px 16px 0px rgba(0, 0, 0, 0.5);
				padding: 5%;
				text-align: center;
				border-bottom: 10px solid black;

			}
			.outer
			{
				position: absolute;
				width: 100%;
			}
			.header {
				height: 40%;
				width: 100%;
				background: black;
				box-shadow: 10px 8px 16px 0px rgba(0, 0, 0, 0.5);
			}
			.brand{
				font-size: 50px;
				color: white;
				text-decoration: none;
				padding: 20px;
				float: left;
			}
			.left{
				float: right;
				margin: 0;
				
			}
			ul>li {
				display: inline-block;
				padding: 20px;
				font-size: 30px;
				list-style: none;
				margin-right: 30px;
			}
			li>a {
				text-decoration: none;
				color: white;
			}
			.indent{
				float: left;
			}
			.box{
				width:200px; 
				height:30px; 
				border-radius:5%;
			}
			.button
			{
				font-size: 15px;
				width: 120px;	
				height: 30px;
				border-radius: 2px;
             	box-shadow: 4px 5px 8px 0px rgba(0, 0, 0, 0.5);
				margin: 20px;
			}
			.btn {
				border: none;
				background-color: black;
				font-size: 30px;
				color: white;
			}


</style>
<script>

function load () {
		document.getElementById('register').style="display:none;";
		document.getElementById('check').value="Register";
	}
	function register () {
		document.getElementById('register').style="height:100%;";
		document.getElementById('login').style="display:none";
		document.getElementById('check').value="Login";
		//document.getElementById('header').style="display:none";
	}
	function login () {
		document.getElementById('register').style="display:none;";
		document.getElementById('login').style="display:block;";
		document.getElementById('check').value="Register";
		//document.getElementById('header').style="display:none";
	}
	function check () {
		
		var che= document.getElementById('check').value;
		if(che=="Login")
		{
		document.getElementById('register').style="display:none;";
		document.getElementById('login').style="display:block;";
		document.getElementById('check').value="Register";
		}
		else
		{
			document.getElementById('register').style="height:100%;";
			document.getElementById('login').style="display:none";
			document.getElementById('check').value="Login";
		}
		
	}
/* 	function validation()
	{
		
		var check=document.getElementById('email').type;
		if(check=="email")
		{
			var value=document.getElementById('email').value;
			if(value=="")
			{

				document.getElementById('error').innerHTML="Incorrect Email Address";

			}
		}
	} */




</script>	
	</head>


	<body style="background-color:grey;"  onload="load()">
		
		<div class="header" id="header">
			<a class="brand" href="">====v=====</a>
		
			<ul class="left">
				<li><input id="check" class="btn" type="button" onclick="check()" value=""></li>
				<li><input class="btn" type="submit" target="about.php" value="About"></li>
			</ul>
		</div>

		<div class="outer" id="outer">
		
			<div class="boxx" id="login">
			<fieldset>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div id="status_form" class="alert alert-primary" role="alert" style="display: block;"><p class="alert alert-info">{{ $err }}</p></div>
        @endforeach
        @endif
	</fieldset>		
				<form method="POST" action="login">
					{{ csrf_field() }}
					<label for="username">ID&nbsp;&nbsp;&nbsp;</label>
					<input  type="text" class="box" name="username" id="usernmae" value="" onkeyup="" ><br>
					<p style="color:red;" id="error"><br><br><br></p>
					
					<label for="password">Password&nbsp;&nbsp;&nbsp;</label>
					<input type="text"  class="box" name="password" id="password" value=""placeholder="Password"><br><br><br>

					<input class="button" type="button" value="Register &nbsp;" onclick="register()">

					<input type="submit" class="button"  value="Submit" > 
				</form>
			</div>


			<div class="boxx" id="register">
	<fieldset>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div id="status_form" class="alert alert-primary" role="alert" style="display: block;"><p class="alert alert-info">{{ $err }}</p></div>
        @endforeach
        @endif
	</fieldset>
				<form method="POST" action="regist">
					{{ csrf_field() }}
				<label  for="fname">Name&nbsp;&nbsp;&nbsp;</label>
				 <input class="box" type="text" id="name_loaner" name="name_loaner" value="{{ old('name_loaner') }}" /><br><br><br>
					

				<label for-="lname">KTP&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="text" id="id_num" name="id_num" value="{{ old('id_num') }}" /><br><br><br>
				
				<label for="email">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="text" id="addr" name="addr" value="{{ old('addr') }}" /><br><br><br>
				
				<label for="mob">Mobile No.&nbsp;&nbsp;</label>
				<input class="box" type="text" id="phone" name="phone" value="{{ old('phone') }}" /><br><br><br>
				
				
				<label  for="fname">Username&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="text" id="Username" name="Username" value="{{ old('Username') }}" /><br><br><br>
				
				<label for="password">Password&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="text" name="password" id="password"><br><br><br>

				<input class="button" type="button" value="Login" onclick="login()">

				<input class="button" type="submit" value="Submit"> 
				</form>
			</div>


		</div>
	
	</body>

</html>
