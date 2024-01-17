function adminlogin(){

var anic = document.getElementById("anic").value;
var ap = document.getElementById("ap").value;


var f = new FormData();
f.append("anic",anic);
f.append("ap",ap);

var r  = new XMLHttpRequest();

r.onreadystatechange = function (){
    if(r.readyState == 4 && r.status == 200){
        var txt = r.responseText;
         
         if(txt == "Success"){
            window.location = 'adminDashboard.php';
         }else{
            alert("something wrong, please try again later");
         }
    }
}

r.open("POST","adminsigninprocess.php",true);
r.send(f);

}