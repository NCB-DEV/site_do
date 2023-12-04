
function ch1(){
    let lusalon=document.getElementById("etatch1");
    let xhrs=new XMLHttpRequest();
    xhrs.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let rep=this.response;
          
            if(rep=="0"){
                lusalon.innerHTML="fermée";
            }
            if(rep=="1"){
                lusalon.innerHTML="allumée";
                
            }
            
        }
        else if(this.readyState==4 && this.status==404){
            alert("une erreur de type 404 s'est produite");
        }
    };
    xhrs.responseType="text";
    xhrs.open(
        'GET',
        "/text/get.php?mode=chambre1",
        true
    );
    xhrs.send();
    setTimeout(ch1,1000);
};
ch1();


