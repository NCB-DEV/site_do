function f(){
    let lusalon=document.getElementById("valuFar");
    let xhrs=new XMLHttpRequest();
    xhrs.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let rep=this.response;
        
                lusalon.innerHTML=rep;
        }
        else if(this.readyState==4 && this.status==404){
            alert("une erreur de type 404 s'est produite");
        }
    };
    xhrs.responseType="text";
    xhrs.open(
        'GET',
        "/text/get.php?mode=tempT",
        true
    );
    xhrs.send();
    setTimeout(f,1000);
};
f();