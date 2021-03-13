/***************************XML**************************/
function loadDoc() {
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
      }
    };
   xhttp.open("GET", "http://127.0.0.1/Subject.xml", true);
   xhttp.send();
  }
  function myFunction(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table="<tr><th>Subject Code</th><th>Subject Name</th></tr>";
    var x = xmlDoc.getElementsByTagName("SUB");
    for (i = 0; i <x.length; i++) { 
      table += "<tr><td>" +
      x[i].getElementsByTagName("CODE")[0].childNodes[0].nodeValue +
      "</td><td>" +
      x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
      "</td></tr>";
    }
    document.getElementById("demo").innerHTML = table;
  }
/***************************JSON************************/
    function fnCheck(){
        var xttp = new XMLHttpRequest();
        xttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          fnPwd(this);
        }
       };
      xttp.open("GET", "http://127.0.0.1/Credentials.json", true);
      xttp.send();
      }
     function fnPwd(jsonObj){
      var jsonDoc = jsonObj.responseText;
      var myObj=JSON.parse(jsonDoc);
    
      var txtUname=document.getElementById("uid");
      var txtPwd=document.getElementById("pwd");
      var i,flag=0;
      for(i in myObj.login){
        if(myObj.login[i].uname == txtUname.value){
            flag=0;
            if(myObj.login[i].pwd == txtPwd.value){
                alert("Login success");
                break;
            }
            else{
              alert(myObj.login[i].pwd);
                alert("Invalid Password");
                break;
            }
        }
        else{
            flag=1;
        }    
    }
    if(flag==1)
    {
        alert("Invalid username");
    }
}
