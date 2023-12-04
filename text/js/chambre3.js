
function chllll(){
    let ch3=document.getElementById("etatchambre3");
    let xhrs=new XMLHttpRequest();
    xhrs.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let rep=this.response;
          
             if(rep=="0"){
                ch3.innerHTML="fermée";
            }
            if(rep=="1"){
                ch3.innerHTML="allumée";
            } 
            
        }
        else if(this.readyState==4 && this.status==404){
            alert("une erreur de type 404 s'est produite");
        }
    };
    xhrs.responseType="text";
    xhrs.open(
        'GET',
        "/text/get.php?mode=chambre3",
        true
    );
    xhrs.send();
    setTimeout(chllll,1000);
};
chllll();


