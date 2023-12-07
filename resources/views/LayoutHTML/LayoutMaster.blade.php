<div id="progress" style="display:none;align=center;v-align:middle;border:orange solid 1px;width:100%;height:100%; position:fixed; top:0%;left:0%;z-index:10000;color:#ff0000; font-family:Tahoma;font-size:13px;font-weight:bolder; text-align:center;background-color:rgb(146 187 255 / 80%);">
<span style="top:15%;position: fixed;"> Sedang Proses...! <br>
<img src="/assets/img/loading.gif">
</span>
</div>
<script>

function createXMLHttpRequest() {
   try { return new ActiveXObject("Msxml2.XMLHTTP"); } 
   catch (e) {}
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } 
   catch (e) {}
   try { return new XMLHttpRequest(); } 
   catch(e) {}
   alert("XMLHttpRequest Tidak didukung oleh browser");
   return null;
 }

var con = createXMLHttpRequest();
var isIE = document.all?true:false; 

function getMouseP(e) {// e is event
//this work when calling from function or html object
	var tempX = 0;
	var tempY = 0;
		if (isIE) { // grab the x-y pos.s if browser is IE
			var ScrollTop = (document.body.parentElement) ? document.body.parentElement.scrollTop:document.body.scrollTop;
			var ScrollLeft = (document.body.parentElement) ? document.body.parentElement.scrollLeft:document.body.scrollLeft;
			tempX = ScrollTop+150;
			tempY = ScrollLeft+150;			
		}
		else {  // grab the x-y pos.s if browser is NS
			tempX = e.pageX;
			tempY = e.pageY;
		}
  
	if (tempX < 0){tempX = 0;}
	if (tempY < 0){tempY = 0;}  
	arr= new Array();
	arr[0]=tempX;
	arr[1]= tempY;
	return arr; //arr[0]= x coord arr[1]=y coord
}


function showDialog1(title,content,width,height,ev,fullPoint)
{
       if (document.getElementById('dynamic1')) {
		c.style.width = width+'px';
	   }
	   else {
	   	c = document.createElement('div');
	   	c.setAttribute('id', 'dynamic1');
	   	c.setAttribute('class', 'drag');
	   	c.style.position = 'absolute';
	   	c.style.display = 'none';
	   	//c.style.top = '120px';
		c.style.top = '20px';
	   	c.style.left = '100px';
		c.style.width = width+'px';
	   	c.style.paddingTop = '3px';
	   	c.style.background = '#666666';
	   	c.style.zIndex = 9000;
	   	document.body.appendChild(c);
	   }
        cont="<b style='color:#FFFFFF;'>"+title+"</b><img src=/assets/img/closebigon.gif align=right"+
		" onclick='closeDialog();' title='Close detail' class=closebtn onmouseover=\"this.src='/assets/img/closebigon.gif';\" "+
		"onmouseout=\"this.src='/assets/img/closebig.gif';\"><br><br>";
	    cont+="<div style='background-color:#FFFFFF;border:#777777 solid 2px;height:"+height+"px'>";
	    cont+=content;
	    cont+="</div>";
		document.getElementById('dynamic1').innerHTML=cont;
		pos = new Array();
		pos = getMouseP(ev);
		document.getElementById('dynamic1').style.top = (parseInt(pos[1])+5) + 'px';
		if((typeof fullPoint != 'undefined') && fullPoint==true) {
			document.getElementById('dynamic1').style.left = (parseInt(pos[0])-width-5)+'px';
		} else {
			document.getElementById('dynamic1').style.left = '75px';
		}
		document.getElementById('dynamic1').style.display='';
}

function post_response_text(tujuan,param,functiontoexecute) {
	busy_on();
	zz = verify();
	if (zz) {
		//par = parent.location.href.replace("http://", "");
		//param += '&par=' + par;
		//param= param;
		//alert(param);
		con.open("GET", tujuan, true);
		con.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		con.onreadystatechange = eval(functiontoexecute);
		con.send(param);
		//con.setRequestHeader("Content-length", param.length);
		//con.setRequestHeader("Connection", "close");
		
	} else
		window.location = 'logout.php';
}

function busy_on()//set busy on
{
	//alert('1');
	document.getElementById('progress').style.display='';//you must have object with id=progress on your documents
	//document.getElementById('qm0').style.display='none';
	//document.getElementById('menumaster').style.display='none';
	document.body.style.cursor='wait';
}

function busy_off()//set busy off
{
	
	document.getElementById('progress').style.display='none';//you must have object with id=progress on your documents
	//document.getElementById('qm0').style.display='';
	//document.getElementById('menumaster').style.display='';
	document.body.style.cursor='default';
}

function isSaveResponse(txt)
{
	txt=txt.toUpperCase();
	if (txt.lastIndexOf('GAGAL') > -1 || txt.lastIndexOf('ERROR') > -1 || txt.lastIndexOf('WARNING') > -1)
      return false
	else
	  return true;  
}

function verify()
{
	/*if(!window.top.left)
	{
                   // alert('You may follow the system flow')
                    window.location='logout.php';
                    return false;
	}
                    else{*/
                            return true;
                        //}
	//reminder dimatikan dan akan berjalan setelah dibuka mini windownya.
	//startReminder();
	//createMiniWin();
}

function closeDialog()
{
	document.getElementById('dynamic1').innerHTML='';
	document.getElementById('dynamic1').style.display='none';
	if(document.getElementById('dynamic2')) {
		closeDialog2();
	}
}

</script>