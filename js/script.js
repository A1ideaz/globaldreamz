
function validate()
{
	var msg ='';
	
	if(document.getElementById('comment').value == '')
	{
		msg = 'comment';	
	}	
	
	if(document.getElementById('mobile').value == '')
	{
		msg = 'Mobile';
	}

	emailTmp=document.getElementById('email').value.split("@");
	if(emailTmp[1])
	{
	emailTmp=emailTmp[1].split(".");
	if(!emailTmp[1]){emailTmp[1]='';}
	}
	if(document.getElementById('email').value=='' || document.getElementById('email').value.indexOf("@") < 0 || document.getElementById('email').value.indexOf(".") < 0  || emailTmp[1].replace(/ /g,"")=='' || emailTmp[1].replace(/ /g,"").length <=1)
	{
	msg="Email";
	}	

	if (document.getElementById('name').value == '')
{
msg = 'Name'; 
}

	if(msg == '')
	{
		document.getElementById('error').innerHTML='<b>Processing your request<b>&nbsp;&nbsp<img src="images/loading-gif.gif" width="25" height="24"/>';
	fetchData('mailer.php?name='+document.getElementById('name').value+ 		 
			  '&email='+document.getElementById('email').value+
			  '&mobile='+document.getElementById('mobile').value+
 				'&comment='+document.getElementById('comment').value,'error');
			  
			  
	setTimeout("location.href='thankyou.html#thanks'",3000);
	}else
	{
		document.getElementById('error').innerHTML="<b style='color:#f32626;'>Please fill the "+msg+"</b>";
	}
}




function fetchData(url,objectID)
{
    var pageRequest = false;
    if (window.XMLHttpRequest)pageRequest = new XMLHttpRequest();
    else if (window.ActiveXObject) pageRequest = new ActiveXObject('MSXML2.XMLHTTP.3.0');
    else return false;
     pageRequest.onreadystatechange = function() {
    try
        {
		    
            if (pageRequest.readyState > 3)
            {
                var object = document.getElementById(objectID);
                object.innerHTML = pageRequest.responseText;
            }
         }
    catch(err)
    {}
 
    }
    
    pageRequest.open('get',url,true);
    pageRequest.send(null);
}

function isNumberKey(evt)
 {
         var charCode = (evt.which) ? evt.which : event.keyCode;
		 if (charCode == 32)
		 {
			return true; 
		 }
		 else if(charCode > 31 && (charCode < 48 || charCode > 57))
		 {
            return false;
		 }
		 else
		 {
         return true;
		 }
}

function getFocus(val)
{

	if(document.getElementById(val).value==val){
	document.getElementById(val).value='';
	}
}

function onBlur(val)
{
	if(document.getElementById(val).value==''){
	document.getElementById(val).value=val;
	}
}

function show()
{
	alert("test");
	document.getElementById('error').style.display='none';
}



function check()
{
	document.getElementById('error').innerHTML='';
}



function isAlphaKey(evt)
{
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 7 && (charCode < 48 || charCode > 57))
            return true;

         return false;
      }