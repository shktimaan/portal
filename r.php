<html >
<head><title>Registration Page</title>

<?php
session_start();
$_SESSION["sessid"]="newUser";
?>
    <link rel="stylesheet" type="text/css" href="regstyle.css" >
<script type="text/javascript">
function branch_change(){
  // alert("hehe");
var x=document.getElementById("huhu");
//alert(x.value);
var y=document.getElementById("hoha");
y.value=x.value;
}
function set_year(){
    var x=document.getElementById("reg");
    var y =x.value;
    var z=y.slice(2,4);
    var a=document.getElementById("yr");
    a.value=z;
}
function otherHobbies(hobbies) {
            var shwbox = document.getElementById("shwbox");
            shwbox.style.display = hobbies.checked ? "block" : "none";

        }

function validate_form1(){
	var usernameRegex = /^[a-zA-Z]+$/;
	var a=document.getElementById("fname");

	a.value= a.value.charAt(0).toUpperCase() + a.value.slice(1);

	var validfirstUsername =a.value.match(usernameRegex);
	//a.value.charAt(0).toUpperCase() + string.slice(1);
	//a[0].toUpperCase() + s.slice(1);
	if(validfirstUsername==null||validfirstUsername==""){
		
    alert("Please provide a valid First name");
		a.focus();
		return false;
  }
		

    }

	function validate_form1b(){
		var usernameRegex = /^[a-zA-Z]+$/;
    var mname=document.getElementById("mname");

	mname.value= mname.value.charAt(0).toUpperCase() + mname.value.slice(1);

	var validfirstUsername =mname.value.match(usernameRegex);
	if(mname.value!=""){
		if(validfirstUsername==null||validfirstUsername==""){
		alert("Please provide a valid Middle name");
		mname.focus();
		return false;}
		}
	
    }

function validate_form2(){
	var usernameRegex = /^[a-zA-Z]+$/;
    var b=document.getElementById("lname");

	b.value= b.value.charAt(0).toUpperCase() + b.value.slice(1);

	var validfirstUsername =b.value.match(usernameRegex);
	if(validfirstUsername==null||validfirstUsername=="")
		{alert("Please provide a valid Last name");
		b.focus();
		return false;}
		
}

function validate_form3(){
    c=document.getElementById("dob").value;
    if(c==null||c==""){alert("Date of Birth cant be empty"); 
	//c.focus();
	return false;}
}

function validate_form4(){
    var e=document.getElementById("ad").value;
    if(e==null||e==""){alert("Address cant be empty");
 }}

function validate_form5(){
	var usernameRegex = /^[0-9]+$/;
    var f=document.getElementById("ad4").value;
	var validfirstUsername =f.match(usernameRegex);
    if(validfirstUsername==null||validfirstUsername==""){alert(" Invalid Pincode"); 
	}}

function validate_form6(){
	var usernameRegex = /^[0-9\-]+$/;
    var h=document.getElementById("ad5").value;
    var validfirstUsername =h.match(usernameRegex);
    if(validfirstUsername==null||validfirstUsername==""){alert("Please provide a valid phone number.");
	} }

function validate_form7(){
	var usernameRegex = /^[0-9]+$/;
    var c=document.getElementById("reg").value;
	var validfirstUsername =c.match(usernameRegex);
    if(c.length!=8||validfirstUsername==null||validfirstUsername==""){alert(" Invalid Registration Number");
	//c.focus();
	return false; }
	}

function validate_form8(){
    var w=document.getElementById("ad8").value;
    if(w==null||w==""){alert("cgpa cant be empty"); 
	//w.focus();
	return false;}
    }


function validate_form9(){
	var usernameRegex = /\S+@\S+\.\S+/;
    c=document.getElementById("mail");
	var validfirstUsername =c.value.match(usernameRegex);
    if(c.value==null||c.value==""||validfirstUsername==null||validfirstUsername=="")
    {alert("Invalid Email");
	c.focus();
	return false;}


}

function validate_form10(){
    b=document.getElementById("pwd");
    if(b.value==null||b.value=="")
    {alert("password cant be empty");
	b.focus();
	return false;}
	

    if(b.value != "") {
      if(b.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        b.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(b.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        b.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(b.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        b.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(b.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        b.focus();
        return false;
      }
	  
	  
	  
  }
     else {
      alert("Error: Please check that you've entered and confirmed your password!");
      b.focus();
      return false;
      }	
}
function checkHobby () {
    // body...
    var checkedValue =""; 
var inputElements = document.getElementsByClassName('messageCheckbox');
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
            checkedValue+=" ";
           checkedValue += inputElements[i].value;
      }
}
var other= document.getElementById("otherHobbyText").value;
checkedValue+=" ";
checkedValue+=other;
//alert("hehe");
//alert(checkedValue);
var abc=document.getElementById("hobby123");
abc.value=checkedValue;
alert(document.getElementById("hobby123").value);
}        

function validate_form11(){
    z=document.getElementById("rno");
    if(z.value==null||z.value=="")
    {alert("Roll no. cant be empty");}


}


function get_Age() {
    var today = new Date();

    var d = document.getElementById("dob");
	var birthDate = new Date(d.value);
	birthDate.value= d.value;
	var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
	var ages = document.getElementById("age");
	ages.value = age;
	
	if (m<0 ) {
        if(today.getDate()<birthDate.getDate())
		{
			m=11+m;
		}
		else
		m=12+m;
    }
	
	var day = today.getDate()-birthDate.getDate();
	if (day<0)
	{
		day = 30+day;
	}
		
	
	var months = document.getElementById("month");
	months.value = m;
	
	var days = document.getElementById("day");
	days.value = day;
	


}




function validate_form(){
    var a=document.getElementById("fname");
    var b=document.getElementById("lname");
    if(a.value==null||a.value=="")  {alert("firstname cant be empty");}
    if(b.value==null||b.value=="") {alert("lastname cant be empty");}

     c=document.getElementById("dob").value;
    if(c==null||c==""){alert("date of birth cant be empty"); }
    var e=document.getElementById("ad").value;
    if(e==null||e==""){alert("Address cant be empty"); }
    var f=document.getElementById("ad4").value;
    if(f==null||f==""){alert(" pincode cant be empty"); }
    var h=document.getElementById("ad5").value;
    if(h==null||h==""){alert("contact no. cant be empty"); }
    var c=document.getElementById("reg").value;
    if(c.length!=8) {alert("enter a valid registration number");}
    var w=document.getElementById("ad8").value;
    if(w==null||w==""){alert("cgpa cant be empty"); }
    c=document.getElementById("mail");
    b=document.getElementById("pwd");
    if(c.value==null||c.value==""||b.value==null||b.value==""){
    alert("enter valid login credentials");}
}

function password_match(){
    var s=document.getElementById("pwd");
    var t=document.getElementById("repwd");
if(s.value != t.value)  {alert("password not match");
return false;
    }
}


function ChangeCaptcha() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 6;
	var ChangeCaptcha = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		ChangeCaptcha += chars.substring(rnum,rnum+1);
	}
	document.getElementById('randomfield').value = ChangeCaptcha;
}
function check() {
if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
//window.open('https://www.google.co.in','_self');
}
else {
alert('Please re-check the captcha');
}
}


function reloadCaptcha()
{
img = document.getElementById('captcha1');
img.src = ChangeCaptcha();
}


  function previewFile(){
       var preview = document.getElementById('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();

</script>


</head>

<body onLoad="ChangeCaptcha()">

<div id='cssmenu'>
<ul>
   <li class='active'><a href='file1.php'><span>Home</span></a></li>
   <li><a href='file3.php'><span>Student</span></a></li>
   <li><a href='file2.php'><span>Admin</span></a></li>
    <li><a href='r.php'><span>New Student</span></a></li>
   <li class='last'><a href='index.html'><span>About</span></a></li>
</ul>
</div>
<br><br>


    <div id="wrapper" class="header">
  <p> <img src="image/logo.jpg" width=300 height="130" alt="Student Information System Logo"   />
  <br><br><br>
  <h1 ><div style="margin-left:550px;">Registration Form</div></h1>
  </p></div>
  <hr />

   	<form id="simpleForm" name="form1"  onSubmit="return validate_form(this)" action="dataentry.php" method="post" enctype="multipart/form-data" >
   	<div id="personal">
    <fieldset >
            <legend >Personal Information:</legend>
            
            
            <div id="topnavigation" style = "height:100px;width:100px;position:absolute; z-index:-2">
  <div id="logo" style="width:200px;height:200px; position:absolute; z-index:-1; top:10px;left:800px;"> 
  <img id="img" src="" height="200" width="200" alt="" onError="this.onerror=null;this.src='image/alter.png';" > </div>
</div>
            
    <div id="pinfo"><label for="txtFirstName">First Name: </label>

    <input type="text" name="txtFirstName" value="" id="fname"  onBlur="return validate_form1(this);">
    <div>
    <label for="txtMiddleName">Middle Name: </label>
    <input type="text" name="txtMiddleName" value="" id="mname" onBlur="return validate_form1b(this)">
    </div>
	<div>
    <label for="txtLastName">Last Name:</label>
    <input type="text" name="txtLastName" value="" id="lname" onBlur="return validate_form2(this);"/>
    </div>

    <div>
    <label for="photo">Upload your Photo: </label>
    <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
   <input type="file" onChange="previewFile()" onClick="alert('Should Be Less Than 2 M.B.');"name="photo" ><br>
	
    </div>

    <label for="dob">Date of Birth: </label>
    <input type="date" name="dob" value="" id="dob" onChange="get_Age()" onBlur="return validate_form3(this);"/><br />

    <label for="roll">Age :</label>
    <input type="text" name="age" size="2" value="" id="age" >   Years
     <input type="text" name="month" size="2" value="" id="month" >    Months
      <input type="text" name="day" size="2" id="day">Days<br/>

    <div>
    <label for="male">Gender:</label>
    Male <input type="radio" name="male"  value="male"checked/> Female<input type="radio" value="female" name="male" /><br /></div>

   
      <label for="dance">Hobbies: </label>
      Dancing<input type="checkbox" class="messageCheckbox" name="dance" value="Dancing"/>
      Singing<input type="checkbox" name="singing" class="messageCheckbox" value="Singing" />
      Sports<input type="checkbox" class="messageCheckbox" name="hobbies" value="Sports"/>
      Art<input type="checkbox" name="hobbies" class="messageCheckbox" value="Art"/>
      <label for="hobbies">Other
                  <input type="checkbox" id="ohobbies" name="hobbies"onClick="otherHobbies(this)">
              </label>

              <div id="shwbox" style="display: none"> 
                  <textarea rows="5" id="otherHobbyText" cols="25" placeholder="Please Mention here..."></textarea>
              </div>
              </label><br><br><br>
                
  <input type="hidden" id="hobby123" name="finalHobby" value="tararara">

            
          <label for="address"> Address Line1:</label>
		  <input type="text" placeholder="Street No." name="a1" onFocus="return checkHobby();"><br>
			<label for="adderss1"> Address Line2:</label>
		<input type="text" placeholder="Street Name." name ="a2"><br>

          <label for="address4"> City/Town</label>
<input type="text" placeholder="City." name="a3"><br>
          <label for="address5"> State</label>
<select name="state" id="state" >
                            <option value="">- Select State -</option>
                                                        <option value="Andhra Pradesh">
                            Andhra Pradesh                            </option>
                                                        <option value="Arunachal Pradesh ">
                            Arunachal Pradesh                            </option>
                                                        <option value="Assam">
                            Assam                            </option>
                                                        <option value="Bihar">
                            Bihar                            </option>
                                                        <option value="Chhattisgarh">
                            Chhattisgarh                            </option>
                                                        <option value="Goa">
                            Goa                            </option>
                                                        <option value="Gujarat">
                            Gujarat                            </option>
                                                        <option value="Haryana">
                            Haryana                            </option>
                                                        <option value="Himachal Pradesh">
                            Himachal Pradesh                            </option>
                                                        <option value="J&K">
                            Jammu and Kashmir                            </option>
                                                        <option value="Jharkhand">
                            Jharkhand                            </option>
                                                        <option value="Karnataka">
                            Karnataka                            </option>
                                                        <option value="Kerala">
                            Kerala                            </option>
                                                        <option value="Madhya Pradesh">
                            Madhya Pradesh                            </option>
                                                        <option value="Maharashtra">
                            Maharashtra                            </option>
                                                        <option value="Manipur">
                            Manipur                            </option>
                                                        <option value="Meghalaya">
                            Meghalaya                            </option>
                                                        <option value="Mizoram">
                            Mizoram                            </option>
                                                        <option value="Nagaland">
                            Nagaland                            </option>
                                                        <option value="Odisha">
                            Odisha                            </option>
                                                        <option value="Punjab">
                            Punjab                            </option>
                                                        <option value="Rajasthan">
                            Rajasthan                            </option>
                                                        <option value="Sikkim">
                            Sikkim                            </option>
                                                        <option value="Tamil Nadu">
                            Tamil Nadu                            </option>
                                                        <option value="Telangana">
                            Telangana                            </option>
                                                        <option value="Tripura">
                            Tripura                            </option>
                                                        <option value="Uttar Pradesh">
                            Uttar Pradesh                            </option>
                                                        <option value="Uttarakhand">
                            Uttarakhand                            </option>
                                                        <option value="West Bengal">
                            West Bengal                            </option>
                                                        <option value="Andaman and Nicobar">
                            Andaman and Nicobar Islands                            </option>
                                                        <option value="Chandigarh">
                            Chandigarh                            </option>
                                                        <option value="Dadar and Nagar Haveli">
                            Dadra and Nagar Haveli                            </option>
                                                        <option value="Daman and Diu">
                            Daman and Diu                            </option>
                                                        <option value="Lakshadweep">
                            Lakshadweep                            </option>
                                                        <option value="New Delhi">
                           New Delhi                           </option>
                                                        <option value="Puducherry">
                            Puducherry                            </option>
                                                      </select><br>


          <label for="address5"> Pincode:</label>
<input type="text" placeholder="Pincode." id="ad4" onBlur="return validate_form5(this);" name="a6"><br>

          <label for="address6"> Contact No:</label>
<input type="text" placeholder="ContactNo." name="contact" id="ad5" onBlur="return validate_form6(this);"><br>
	</div>
    </fieldset>
    </div>   
    
    
    <div id="academic"><fieldset>
        <legend>Academic Information</legend>
<label for="10th"> 10<sup>th</sup>marks:</label>
<input type="text" name="a"><br>
<label for="12th"> 12<sup>th</sup>marks:</label>
<input type="text" name="b"><br>

    <label for="regno">Registration No. :</label>
    <input type="text" name="regno" value="" onChange="set_year()" id="reg" onBlur="return validate_form7(this);"/><br />


    <label >Department:</label><select size =1  onchange="branch_change()" id="huhu" name="dept">

	<option selected value="IT">IT
	<option value="ME">ME
	<option value="CE">CE
	<option value="CH">CH
	<option value="BT">BT
	<option value="MM">MM
	<option value="CS">CS
	<option value="EC">EC
	<option value="EE">EE
	</select><br />

    <label for="sem">Semester</label>
    <select size =1 name="sem">
	<option selected>none
	<option value="1">1ST
	<option value="2">2nd
	<option value="3">3rd
	<option value="4">4th
	<option value="5">5th
	<option value="6">6th
	<option value="7">7th
	<option value="8">8th
	</select><br />

    <div>
    <label for="roll">Roll No. :</label>
         <input type="text" name="yr" size="2" value="13" id="yr"> / <input type="text" name="branch" size="2" value="IT" id="hoha"> / <input type="text" name="roll" size="2" id="rno" onBlur="return validate_form11(this);"> <br>
<label for="cgp">Cgpa:</label>
<input type="text" name="d" id="ad8" onBlur="return validate_form8(this);"><br>
    </fieldset>
    </div>

    <br />
    <div>
    <fieldset>
        <legend>Login Information</legend>        
        
    <label for="email">Email: </label>
    <input type="email" name="email" placeholder="abc@email.com" id="mail" onBlur="return validate_form9(this);"/><br />

	<label for="pwd">Password: </label>
    <input type="password" name="pwd" value=""  id="pwd" onBlur="return validate_form10(this);"/>	<br/>
    
    <label for="pwd">Retype Password: </label>
    <input type="password" name="repwd" value=""  id="repwd" onChange="return password_match();"/>  <br/>
    
    <label for="captcha">Captcha: </label>
    <input type="text" id="randomfield" >
  <img  id="captcha1" src="image/refresh.jpeg" style="float:right;padding-right:250px;"height="50" width="50" alt="Refresh Captcha" onError="this.src='image/refresh.jpeg';" onClick="reloadCaptcha()"/>
    <br/>
    <label for="enterCaptcha">Enter the Captcha as shown: </label>
    <input id="CaptchaEnter" size="20" maxlength="6" onBlur="check()"/>

 </fieldset></div>
	<center><div id="theSubmit">
    <input type="submit" name="btnSubmit" value="Submit" onClick="check()"/>
    <input type="reset" name="reset" value="Reset"/>

    </div>
	</center>
    </form>

</body>
</html>
