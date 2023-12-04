function c (){
    let lusalon=document.getElementById("valuCelcius");
    let xhrs=new XMLHttpRequest();
    xhrs.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let rep=this.response;lusalon.innerHTML=rep; 
        }
        else if(this.readyState==4 && this.status==404){
            alert("une erreur de type 404 s'est produite");
        }
    };
    xhrs.responseType="text";
    xhrs.open(
        'GET',
        "/text/get.php?mode=tempC",
        true
    );
    xhrs.send();
    setTimeout(c,1000);
};
c();