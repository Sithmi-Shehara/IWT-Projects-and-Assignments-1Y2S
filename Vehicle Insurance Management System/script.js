function changeSignUppage(){
    window.location = 'registerPage.php';
}
function changeLoginpage(){
    window.location ='login.php'
}

function signup(){
 var fname = document.getElementById("fname").value;
 var lname = document.getElementById("lname").value;
 var nic = document.getElementById("nic").value;
 var dob = document.getElementById("dob").value;
 var email = document.getElementById("email");
 var address = document.getElementById("address");
 var tel = document.getElementById("tel");
 var vehicle = document.getElementById("vehicle");
 var policy = document.getElementById("policy");
 var engine = document.getElementById("engine");
 var chassis = document.getElementById("chassis");
 var period = document.getElementById("period");


 var f = new FormData();
 f.append("fname",fname);


 var r = new XMLHttpRequest();

 r.onreadystatechange = function(){
    if(r.readyState == 4 &&  r.status == 200){
    alert(r.responseText);
    }
 }
 
 r.open("POST","signupprocess.php",true);
 r.send(f);
}

function login(){

    var NIC = document.getElementById("NIC").value;
    var password =document.getElementById("loginpassword").value;
 

    var f = new FormData();
    f.append("NIC",NIC);
    f.append("password",password);

    var r  = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            var txt = r.responseText;
            alert(txt);
            if(txt == "Success"){
                window.location = 'myProfile.php';
            }else  if(txt == "Error"){
                alert("something Wrong, Please Try again later");
            }

        }
    }

    r.open("POST","loginprocess.php",true);
    r.send(f);
}

function UpdatePassword(){
   var  OLDpassword = document.getElementById("OLDpassword").value;
   var  NEWpassword = document.getElementById("NEWpassword").value;
   var  CONpassword = document.getElementById("CONpassword").value;

   
   var f = new FormData();
   f.append("OLDpassword",OLDpassword);
   f.append("NEWpassword",NEWpassword);
   f.append("CONpassword",CONpassword);

   var r  = new XMLHttpRequest();

   r.onreadystatechange = function (){
       if(r.readyState == 4 && r.status == 200){
           var txt = r.responseText;
            alert(txt);
       }
   }

   r.open("POST","UpdatePassword.php",true);
   r.send(f);
}

 function ProfileChange(){
    
    var uploadinput = document.getElementById("uploadinput");

    var f = new FormData();
    f.append("uploadinput",uploadinput.files[0]);

    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            
            var Image = document.getElementById("uploadinput");
            var Image1 = Image.files[0];
            var url = window.URL.createObjectURL(Image1);
            document.getElementById("profileimage").src = url;

        }
    }

    r.open("POST","ChangeImage.php",true);
    r.send(f);
    

 }


 function SubmitMessage(){
    var reason = document.getElementById("reason").value;
    var message = document.getElementById("message").value;

    var f = new FormData();
    f.append("reason",reason);
    f.append("message",message);


    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
        }
    }

    r.open("POST","SaveMessage.php",true);
    r.send(f);
 }


 function Pay(){
    var date = document.getElementById("date").value;
    var amount = document.getElementById("amount").value;

    var cardholdername = document.getElementById("cardholdername").value;
    var cardnumber = document.getElementById("cardnumber").value;
    var cvvnumber = document.getElementById("cvvnumber").value;
    var expire = document.getElementById("expire").value;


    var f = new FormData();  
    f.append("date",date);
    f.append("amount",amount);
    f.append("cardholdername",cardholdername);
    f.append("cardnumber",cardnumber);
    f.append("cvvnumber",cvvnumber);
    f.append("expire",expire);



    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
        }
    }

    r.open("POST","PaymentSave.php",true);
    r.send(f);


 }


 function DeleteCustomer(NIC){
    var f = new FormData();  
    f.append("NIC",NIC);
   
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }
    r.open("POST","DeleteCustomer.php",true);
    r.send(f);
 }


 function createAccount(){
   
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var address = document.getElementById("address").value;
    var tel = document.getElementById("tel").value;
    
    var password = document.getElementById("Password").value;

   

    // vahicle

    var vehiNo = document.getElementById("vehiNo").value;
    var  policyNo = document.getElementById("policyNo").value;
    var engineNo = document.getElementById("engineNo").value;
    var chassisNo = document.getElementById("chassisNo").value;
    var cover = document.getElementById("Cover").value;
    
    
    

    var f = new FormData();  
    f.append("fname",fname);
    f.append("lname",lname);
    f.append("nic",nic);
    f.append("email",email);
    f.append("dob",dob);
    f.append("tel",tel);
    f.append("password",password);
    f.append("address",address);




    f.append("vehiNo",vehiNo);
    f.append("policyNo",policyNo);
    f.append("engineNo",engineNo);
    f.append("chassisNo",chassisNo);
    f.append("cover",cover);


    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){

            alert(r.responseText); 

            var txt = r.responseText;

            if(txt == "SignUp Success"){
                window.location = 'login.php';
            }else if(txt == "Error"){
                alert("Something Wrong , Please Try again Later");
            }

        }
    }

    r.open("POST","CreateAccount.php",true);
    r.send(f);

 }

 function UpdateVehicle(vehicleNo){
 
    var vehicleNo = document.getElementById("VehicleNo").value;
    var Engine_No = document.getElementById("Engine_No").value;
    var Chasis_No = document.getElementById("Chasis_No").value;

    var f = new FormData();  
    f.append("vehicleNo",vehicleNo);
    f.append("Engine_No",Engine_No);
    f.append("Chasis_No",Chasis_No);
    


    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
        }
    }

    r.open("POST","UpdateVehicle.php",true);
    r.send(f);

 }

 function DeleteAccount(NIC){
     
    var f = new FormData();  
    f.append("NIC",NIC);
    


    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location = 'home.php';
        }
    }

    r.open("POST","DeleteCustomer.php",true);
    r.send(f);
    
 }

 function DeleteVehicle(V_No){

    var f = new FormData();  
    f.append("V_No",V_No);
    
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }

    r.open("POST","Deletevehicle.php",true);
    r.send(f);
    
 }

 function UpdateCustomer(NIC){

    var address = document.getElementById("address").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
  
    
    var f = new FormData();  
    f.append("NIC",NIC);
    f.append("name",name);
    f.append("email",email);
    f.append("mobile",mobile);
    f.append("address",address);
    
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }

    r.open("POST","UpdateCustomer.php",true);
    r.send(f);

 }


function DeleteClaim(vid){
    
    var f = new FormData();  
    f.append("vid",vid);

    
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }

    r.open("POST","DeleteClaim.php",true);
    r.send(f);

}


function ApprovedCustomer(Vid){

    var f = new FormData();  
    f.append("Vid",Vid);
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }
    r.open("POST","ApprovedClaim.php",true);
    r.send(f);
}


function RejectVehicle(Vid){
    var f = new FormData();  
    f.append("Vid",Vid);
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }
    r.open("POST","RejectVehile.php",true);
    r.send(f);
}


function Subscribe(){
    var SEmail = document.getElementById("SEmail").value;

    var f = new FormData();  
    f.append("SEmail",SEmail);
    
    var r = new  XMLHttpRequest();
    r.onreadystatechange = function (){
        if(r.readyState == 4 && r.status == 200){
            alert(r.responseText);
            window.location.reload(); 
        }
    }
    r.open("POST","subscribe.php",true);
    r.send(f); 
}