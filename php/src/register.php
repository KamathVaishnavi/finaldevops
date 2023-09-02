<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
      body {font-family: 'Inter', sans-serif; margin: 0; padding: 0; 
        background:linear-gradient(45deg, blueviolet, rgb(122, 200, 172)); color: white;}
        .inputt{
            width:200px;height: 20px;
            margin-bottom: 5px;
        }
        #navbar{
            width:100%;
            height: 100px;
            
            display: flex;
            color: white;
            background-image:url(./bg1.webp);
        }
        #navleft{
            width:40%;
            height:100%;
            max-width:max-content;
            max-height: max-content;
            padding: 0px;;
        }
        #navmid{
            display: flex;
            width:60%;
            height:100%;
            justify-content: center;
            justify-content: space-evenly;
            align-items: center;
            font-family: Inter,sans-serif;
        }
        #navright{
            width:20%;
            height:100%;
            margin: auto;
            justify-content: center;
            align-items: center;
            padding-top:50 px; 
        }
        .dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  height: 110px;
  width:150px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
  color: rgb(233, 41, 98);cursor: pointer;
}

.dropdowncontent {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdowncontent a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdowncontent a:hover {
  background-color: navy;cursor: pointer;
  color: rgb(233, 41, 98);
}

.dropdown:hover .dropdowncontent {
  display: block;cursor: pointer;
}
    </style>
</head>
<body style="margin: 0;height:100vh;">
    <div style="display:flex;height: 120px;background-image: url(bg1.webp);">
        <div id="navleft">
          <img src="./logo1.jpg" alt="" style="width:100%;
          height:100%;">
        </div>
        
      <div  class="dropdown" style="overflow:hidden;">
            <a href="./BookTickets.html" style="color: white;"><button class="dropbtn">Help<i class="fa fa-caret-down"></i></button></a>
               <div class="dropdowncontent">
            <a href="">Please call 8888000012</a>
            </div>
      </div>
      
      
      
      <div id="navright" >
        <span class="material-symbols-outlined" style="position: absolute;left: 85%; top:7%;">
            house
        </span>
        <a href="./homemain.html" style="font-family:Inter,sans-serif;position: absolute;left: 87%; top:7%;color:white;">Go to home</a>
     </div>
     
       
      </div>
    <h3 style="text-align: center;font-family: Inter,sans-serif;color: navy;"> Register for Payverse </h3>
    <div style="overflow: hidden;position:absolute;width: 72%;left: 22%;top: 21%;">
        <!-- <div style="justify-content: center;align-items: center;"></div> -->
    <!-- <table style="background-color: #fff;border-radius: 10px 10px 10px 10px;border:2px;box-shadow: 3px 3px 5px 5px #8888;width:70%;height:50%;">
         
        <tr> 
        <td style="width:100px;">
        <img src="./draw2.svg" alt="" style="width:270px;height:300px;max-width:fit-content;max-height: max-content;"></td>
    <td><br><br><br>
      <form name="myform" action="reg.php" method="post" onsubmit="return validateForm()" style="color:black;">
        <input type="textg lik" placeholder="First Name" class="inputt" name="fname">
    <input type="text" placeholder="Last Name" class="inputt" name="lname"> <br>
    <input type="date" placeholder="Date of Birth" class="inputt" name="dob" required><br>
    <input type="radio" name="Gender" value="Male" style="color: black;">Male
    <input type="radio" name="Gender" value="Female">Female
    <input type="radio" name="Gender"value="other">Other  <br>
    <input type="email" placeholder="Email ID" class="inputt" name="email"> <br>
    <input type="number" placeholder="Phone number" class="inputt" name="phono"> <br>
    <input type="password" placeholder="Enter a password" class="inputt" name="pass1"> <br>
    <input type="password" placeholder="Confirm your password" class="inputt" name="pass2"> <br>
    <input type="checkbox" required style="color: black;">  <a href="#"> I agree to all the statements in terms of service </a><br><br>
    <input type="submit" formtarget="get" style="background-color: #3B71CA;color:white;border-radius: 1px 1px 1px 1px; width:200px;height: 20px;border: none;"> </td></form>
<br><br><br>

</tr>  
</table>
</div> -->
<!-- <script>
  function validateForm()
  {
    //Firstname Validation
    var firstname=document.myform.fname.value;
    if(firstname=="")
    {alert("Please enter your first name");return false;}
    //Lastname Validation
    var lastname=document.myform.lname.value;
    if(lastname=="")
    {alert("Please enter your last name");return false;}
    //Password Validation
    var firstpassword=document.myform.pass1.value;  
    var secondpassword=document.f1.pass2.value;    
    if(firstpassword==secondpassword){  
    return true;}  
    else{  
    alert("Password must be same!");  
    return false;  
    }
    //Email Validation
    var x=document.myform.email.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      alert("Please enter a valid e-mail address");  
      return false;  
    }  
    //Phone number validation
    var p=document.myform.phono.value;
    var phoneno = /^\d{10}$/;
    if(p.value.match(phoneno))
    {return true;}
    else
    {
       alert("Invalid Phone Number");
       return false;
    }
  } -->
<!-- </script>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
      body {font-family: 'Inter', sans-serif; margin: 0; padding: 0; 
        background:linear-gradient(45deg, blueviolet, rgb(122, 200, 172)); color: white;}
        .inputt{
            width:200px;height: 20px;
            margin-bottom: 5px;
        }
        #navbar{
            width:100%;
            height: 100px;
            
            display: flex;
            color: white;
            background-image:url(./bg1.webp);
        }
        #navleft{
            width:40%;
            height:100%;
            max-width:max-content;
            max-height: max-content;
            padding: 0px;;
        }
        #navmid{
            display: flex;
            width:60%;
            height:100%;
            justify-content: center;
            justify-content: space-evenly;
            align-items: center;
            font-family: Inter,sans-serif;
        }
        #navright{
            width:20%;
            height:100%;
            margin: auto;
            justify-content: center;
            align-items: center;
            padding-top:50 px; 
        }
        .dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  height: 110px;
  width:150px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
  color: rgb(233, 41, 98);cursor: pointer;
}

.dropdowncontent {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdowncontent a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdowncontent a:hover {
  background-color: navy;cursor: pointer;
  color: rgb(233, 41, 98);
}

.dropdown:hover .dropdowncontent {
  display: block;cursor: pointer;
}
    </style>
</head>
<body style="margin: 0;height:100vh;">
    <div style="display:flex;height: 120px;background-image: url(bg1.webp);">
        <div id="navleft">
          <img src="./logo1.jpg" alt="" style="width:100%;
          height:100%;">
        </div>
        
      <div  class="dropdown" style="overflow:hidden;">
            <a href="./BookTickets.html" style="color: white;"><button class="dropbtn">Help<i class="fa fa-caret-down"></i></button></a>
               <div class="dropdowncontent">
            <a href="">Please call 8888000012</a>
            </div>
      </div>
      
      
      
      <div id="navright" >
        <span class="material-symbols-outlined" style="position: absolute;left: 85%; top:7%;">
            house
        </span>
        <a href="./homemain.html" style="font-family:Inter,sans-serif;position: absolute;left: 87%; top:7%;color:white;">Go to home</a>
     </div>
     
       
      </div>
    <h3 style="text-align: center;font-family: Inter,sans-serif;color: navy;"> Register for Payverse </h3>
    <div style="overflow: hidden;position:absolute;width: 72%;left: 22%;top: 21%;">
        <!-- <div style="justify-content: center;align-items: center;"></div> -->
    <table style="background-color: #fff;border-radius: 10px 10px 10px 10px;border:2px;box-shadow: 3px 3px 5px 5px #8888;width:70%;height:50%;">
         
        <tr> 
        <td style="width:100px;">
        <img src="./draw2.svg" alt="" style="width:270px;height:300px;max-width:fit-content;max-height: max-content;"></td>
    <td><br><br><br>
      <form name="myform" action="reg.php" method="post" onsubmit="return validateForm()" style="color:black;">
        <input type="textg lik" placeholder="First Name" class="inputt" name="fname">
    <input type="text" placeholder="Last Name" class="inputt" name="lname"> <br>
    <input type="date" min="1960-01-01" max="2005-07-15" placeholder="Date of Birth" class="inputt" name="dob" required><br>
    <input type="radio" name="Gender" value="Male" style="color: black;">Male
    <input type="radio" name="Gender" value="Female">Female
    <input type="radio" name="Gender"value="other">Other  <br>
    <input type="email" placeholder="Email ID" class="inputt" name="email"> <br>
    <input type="text" placeholder="Phone number" class="inputt" name="phono" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10"> <br>
    <input type="password" minlength="6" placeholder="Enter a password" class="inputt" name="pass1"> <br>
    <input type="password" placeholder="Confirm your password" class="inputt" name="pass2"> <br>
    <input type="checkbox" required style="color: black;">  <a href="#"> I agree to all the statements in terms of service </a><br><br>
    <input type="submit" formtarget="get" style="background-color: #3B71CA;color:white;border-radius: 1px 1px 1px 1px; width:200px;height: 20px;border: none;"> </td></form>
<br><br><br>

</tr>  
</table>
</div>
<script>
  function validateForm()
  {
    //Firstname Validation
    var firstname=document.myform.fname.value;
    if(firstname=="")
    {alert("Please enter your first name");return false;}
    //Lastname Validation
    var lastname=document.myform.lname.value;
    if(lastname=="")
    {alert("Please enter your last name");return false;}
    //Password Validation
    var firstpassword=document.myform.pass1.value;  
    var secondpassword=document.f1.pass2.value;    
    if(firstpassword==secondpassword){  
    return true;}  
    else{  
    alert("Password must be same!");  
    return false;  
    }
    //Email Validation
    var x=document.myform.email.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      alert("Please enter a valid e-mail address");  
      return false;  
    }  
    //Phone number validation
    var p=document.myform.phono.value;
    var phoneno = /^\d{10}$/;
    if(p.value.match(phoneno))
    {return true;}
    else
    {
       alert("Invalid Phone Number");
       return false;
    }
  }
</script>
</body>
</html>