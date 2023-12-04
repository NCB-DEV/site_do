
let touteteindre=document.getElementById("myonoffswitchpm");
touteteindre.addEventListener("click",function(e)
{
    
    
    let xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            console.log(this.response);
           
        }
        else if(this.readyState==4 && this.status==404){
            alert("une erreur de type 404 s'est produite");
        }
    };
    if(touteteindre.checked==true){
        console.log("cocher");
        xhr.open(
            'GET',
            "http://192.168.228.10/eteindreTout",
           true
        );
        xhr. withCredentials=true;
        xhr.send();
    }
    else{
        console.log("non coché");
    } 
    return false;
});
