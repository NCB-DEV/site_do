let t=document.getElementById('myonoffswitchp');
document.getElementById("myonoffswitchp").addEventListener("click",function()
{
    
        let xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(xhr.readyState==4 && xhr.status==200){
            let response=xhr.responseText;
            console.log(response);
            console.log("page cors trouver");
            
        }
        else if(xhr.readyState==4 && xhr.status==404){
            console.log('page pas trouvée');
            let response=xhr.responseText;
            console.log(response);
            console.log("page cors non trouver");
        }
    };
    xhr.open("GET","/text/cors.php?envoi=allumetout",true);
    xhr.send();     
});
