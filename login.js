function v()
{ var x=document.getElementById("us").value;
var y=document.getElementById("ps").value;

  if(x==""&&y=="")
    {alert("username and password should not be empty");}
 else{if(x=="")
  {alert("username should not be empty");}

  if(y=="")
    {alert("password should not be empty");}
  }
  
    if(y.length<6)
   
 
}
function verify()
{ var x=document.getElementById("us1").value;
var y=document.getElementById("ps1").value;
var z=document.getElementById("pn1").value;
  if(x==""&&y==""&&z=="")
    {alert("All fields are empty");}
 else{
  if(x=="")
  {alert("username should not be empty");}

  if(y=="")
    {alert("password should not be empty");}
  if(z=="")
    {alert("phone number should not be empty");}
  }
  
    if(y.length<6)
     { alert("password should be greater than 6");}
  if(z.length!=10)
    {alert("enter valid number");}
  if(x!=""&&y!=""&z!=""&&y.length>6&&z.length==10)
   { alert("succesfully registed");}
}