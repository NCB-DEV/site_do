let chame3=document.getElementById('myonoffswitchd');
document.getElementById("myonoffswitchd").addEventListener("click",function()
{
    if(chame3.checked==false){
        console.log("false");
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
    xhr.open("GET","/text/cors.php?envoi=eteindrechambre3",true);
    xhr.send();
        
    }
    if(chame3.checked==true){
        console.log("true");
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
        xhr.open("GET","/text/cors.php?envoi=allumechambre3",true);
        xhr.send();
            
    }
});
