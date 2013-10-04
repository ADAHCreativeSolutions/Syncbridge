// update value file to hidden

function addValue(id1,id2){
    document.getElementById(id2).value =document.getElementById(id1).value;
	
}



// Declaring valid date character, minimum year and maximum year
// Declaring valid date character, minimum year and maximum year
var dtCh= "-";
var minYear=1900;
var maxYear=2100;


function isInteger(s){
    var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
    var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
    // February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
    for (var i = 1; i <= n; i++) {
        this[i] = 31
        if (i==4 || i==6 || i==9 || i==11) {
            this[i] = 30
        }
        if (i==2) {
            this[i] = 29
        }
    }
    return this;
}

function isDate(dtStr){
    var daysInMonth = DaysArray(12)
    var pos1=dtStr.indexOf(dtCh)
    var pos2=dtStr.indexOf(dtCh,pos1+1)
    var strMonth=dtStr.substring(0,pos1)
    var strDay=dtStr.substring(pos1+1,pos2)
    var strYear=dtStr.substring(pos2+1)
    strYr=strYear
    if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
    if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
    for (var i = 1; i <= 3; i++) {
        if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
    }
    day=parseInt(strDay)
    month=parseInt(strMonth)
    year=parseInt(strYr)
    if (pos1==-1 || pos2==-1){
        //alert("The date format should be : mm/dd/yyyy")
        return false
    }
    if (strMonth.length<1 || month<1 || month>12){
        //alert("Please enter a valid month")
        return false
    }
    if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
        //alert("Please enter a valid day")
        return false
    }
    if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
        //alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
        return false
    }
    if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
        //alert("Please enter a valid date")
        return false
    }
    return true
}

//end of date validation//



function validateDate(txtDateId){

    var dt = document.getElementById(txtDateId);

    if (isDate(dt.value)==false){
        dt.focus()
        return false;
    }else{
        return true;
    }
   
}

////end of date validation//

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

function validateForm()
{
    if(document.getElementById("txtName").value==null || document.getElementById("txtName").value=="")
    {
        alert("Please enter your name");
        document.getElementById("txtName").focus();
        return false;
    }
	
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
	
	
		if(document.getElementById("txtService").value=="-1")
	{
		alert("Please select a service");
		document.getElementById("txtService").focus();
		return false;
	}
	
	
	
	if(document.getElementById("txtAddress").value==null || document.getElementById("txtAddress").value=="")
    {
        alert("Please enter your address ");
        document.getElementById("txtAddress").focus();
        return false;
    }
	
	

	
	if(document.getElementById("txtMessage").value==null || document.getElementById("txtMessage").value=="")
    {
        alert("Please enter your message / inquiry");
        document.getElementById("txtMessage").focus();
        return false;
    }
	
	
	


	

  if(document.getElementById("txtCode").value==null || document.getElementById("txtCode").value=="")
    {
        alert("Please enter the code!");
        document.getElementById("txtCode").focus();
        return false;
    }
  




        
	
}

