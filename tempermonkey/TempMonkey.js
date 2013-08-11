// ==UserScript==
// @name           Test
// @description    Test
// @include        http://in.search.yahoo.com/*
// @version        1.0
// ==/UserScript==


//alert(0);
// var element = document.createElement("input");
// element.setAttribute("type", "button");
// element.setAttribute("value", "invert");
// element.setAttribute("name", "button3");
// element.setAttribute("onclick", "foo()");
// document.body.appendChild(element);


var textt = document.getElementById("yschsp").value;


var head = document.getElementById("sidebar");
var divv = document.createElement("div");
divv.setAttribute("id", "sidedown");
head.appendChild(divv);

var tt1="";
var hi = document.getElementsByClassName("hide-offscreen")
for(var i=0;i<hi.length;i++)
{
    //alert(hi[i].parentNode.className);
    if(hi[i].parentNode.className =="y-txt-4 y-ln-2 tuc-last border-b")
    {    
      tt1 = hi[i].innerHTML;
    }    
}

//alert(tt1);
var username=tt1+"@yahoo.com";




divv.innerHTML="chintu";
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
     // alert(xmlhttp.status+xmlhttp.responseText);
      
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    divv.innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","http://localhost/hack/read.php?text=syam&user=syamprasad210@yahoo.com",true);
xmlhttp.send();
//alert(divv.innerHTML)