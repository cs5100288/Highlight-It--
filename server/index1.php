<script> 
alert("chintu");
document.getElementById("divv").innerHTML="chintu";
function f(){
document.getElementById("divv").innerHTML="chintu";
//if (str=="")
 // {
 // document.getElementById("txtHint").innerHTML="";
 // return;
 // }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
      //alert("sfsf"+xmlhttp.responseText);
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	alert(xmlhttp.responseText);
    //divv.innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","http://www.google.com",true);
xmlhttp.send();
}
</script>
<html>
<body onload="f">
<div id ="divv"></div>
</body>
</html>
