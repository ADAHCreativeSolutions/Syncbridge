// update value file to hidden

function addValue(id1,id2){
    document.getElementById(id2).value =document.getElementById(id1).value;
	
}

function validateText(txtString){
    var r;
    txtString = txtString.toString();
    for(r=0;r<str.length;r++){
        var rc = txtString.charAt(r);
        if(isNaN(rc)){
            return true;
        }
    }
    return false;
	
}
function validatePhone(number)
{
    var i;
    number = number.toString();
    for (i = 0; i < number.length; i++){
        var c = number.charAt(i);
        if (isNaN(c)) {
            return false;
        }
    }
    return true;
}

function validateEmail(email)
{
    var message=true;
    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(email))) 
    {
       
        message = false;
    }
    else 
    {

        var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
        if (email.match(illegalChars))
        {
            //message = "The email address contains illegal characters.\n";
            message = false;
        }
    }
	
    return message;
  
}

function validate_Form()
{
    //check Title
    if(document.getElementById("txtName").value==null || document.getElementById("txtName").value=="")
    {
        alert("Please enter the Name");
        document.getElementById("txtName").focus();
        return false;
    }
	
	 if(document.getElementById("txtAddress").value==null || document.getElementById("txtAddress").value=="")
    {
        alert("Please enter the Address");
        document.getElementById("txtAddress").focus();
        return false;
    }
	
	
	    // contact number validation//
			
    if(document.getElementById("txtContact").value==null || document.getElementById("txtContact").value=="")
    {
        alert("Please enter the Contact Number");
        document.getElementById("txtContact").focus();
        return false;
    }
    else    // check valid phone number
    if(validatePhone(document.getElementById("txtContact").value)==false)
    {
			
        alert("Please enter a valid phone number");
        document.getElementById("txtContact").focus();
        return false;
			
    }
	
	
    //email validation
	
    if(document.getElementById("txtEmail").value==null || document.getElementById("txtEmail").value=="")
    {
        alert("Please enter the Email");
        document.getElementById("txtEmail").focus();
        return false;
    }
    else
    if(validateEmail(document.getElementById("txtEmail").value)!=true)
    {
			
        alert("Please enter a valid email");
        document.getElementById("txtEmail").focus();
        return false;
			
    }
		if(document.getElementById("txtCountry").value=="-1")
	{
		alert("Please select your country");
		document.getElementById("txtCountry").focus();
		return false;
	}

	  if(document.getElementById("txtMessage").value==null || document.getElementById("txtMessage").value=="")
    {
        alert("Please enter Your Message / Inquiry");
        document.getElementById("txtMessage").focus();
        return false;
    }

		
    if(document.getElementById("txtCode").value==null || document.getElementById("txtCode").value=="")
    {
        alert("Please enter the  code!");
        document.getElementById("txtCode").focus();
        return false;
    }
		
	
   
	
  
          
 
//careers page validation scripts//

 


/*
		
	
	
	
		
	*/




        
	
}


function validate_Form2(){
	 
    if(document.getElementById("txtName2").value==null || document.getElementById("txtName2").value=="")
    {
       
    }
	
    if(document.getElementById("txtCapcha2").value==null || document.getElementById("txtCapcha2").value=="")
    {
        alert("Please enter the code!");
        document.getElementById("txtCapcha2").focus();
        return false;
    }
	
	
}


$s = jQuery.noConflict();
$s(document).ready(function(){
    $s('#txtForm').submit(function(){

        var name = $s("#txtName2").val();
        var file = $s('#txtUpload').val();
        var cap = $s('#txtCapcha2').val();
    
        if(name==null || name==""){
            alert("Please enter your name!");
            $s("#txtName2").focus();
            return false;
        }

        if(file==""||file==null){
            alert("Pleaes attache your CV!")
            return false;
        }else{
            var ext = $s('#txtUpload').val().split('.').pop().toLowerCase();
            var allow = new Array('doc','docx','pdf','zip','rft','txt');
            if(jQuery.inArray(ext, allow) == -1) {
                alert('Please make sure the CV is in one of the requested formats!');
                return false;
            }
        }

        if(cap==null || cap==""){
            alert("Please enter the code!");
            $s("#txtUpload").focus();
            return false;
        }


    });
    

});

