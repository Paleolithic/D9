function submitComment(){
	if(validate() == true){
		var nameToSend  = document.getElementById('nameInput').value;
		var emailToSend = document.getElementById('emailInput').value;
		var commentToSend  = document.getElementById('commentInput').value;
		$.ajax({
		  type: "POST",
		  url: "assets/scripts/insert.php",
		  data: {"name":nameToSend},
		  data: {"email":emailToSend},
		  data: {"comment":commentToSend},
		});
		console.log(nameToSend + " " + emailToSend + " " + commentToSend);
		//document.getElementById('cmd_line_p_content').innerHTML = ("<p> >$~ " + value+"</p>" + document.getElementById("cmd_line_p_content").innerHTML);
		//localStorage.log= document.getElementById('cmd_line_p_content').innerHTML;
        //txtbox.value='';
        //txtbox.focus();
	}
}

function validate()
{
	var nppend = document.getElementById("name");
	var eppend = document.getElementById("email");
	var cppend = document.getElementById("comment");
	
	if(nppend.childNodes.length >= 2){
		nppend.removeChild(nppend.getElementsByTagName("span")[0]);
	}
	if(eppend.childNodes.length >= 2){
		eppend.removeChild(eppend.getElementsByTagName("span")[0]);
	}
	if(cppend.childNodes.length >= 2){
		cppend.removeChild(cppend.getElementsByTagName("span")[0]);
	}

   if( document.submitForm.Name.value == "" || document.submitForm.Name.value == "Enter your name...")
   {
		var x = nppend.appendChild(document.createElement("span"));
		x.appendChild(document.createTextNode("* Required Field"));
    	return false;
   }
   if( document.submitForm.Email.value == "" || document.submitForm.Email.value == "Enter your email..." || document.submitForm.Email.value.indexOf("@") == -1)
   {
		var x = eppend.appendChild(document.createElement("span"));
		x.appendChild(document.createTextNode("* Required Field. Valid email must contain '@'"));
    	return false;
   }
   if( document.submitForm.Comment.value == "" || document.submitForm.Comment.value == "Leave a comment!" )
   {
		var x = cppend.appendChild(document.createElement("span"));
		x.appendChild(document.createTextNode("* Required Field"));
    	return false;
   }

   return( true );
}