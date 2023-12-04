let xsalon=document.getElementById('myonoffswitch');
document.getElementById("myonoffswitch").addEventListener("click",function()
{
    if(xsalon.checked==false){
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
    xhr.open("GET","/text/cors.php?envoi=eteindresalon",true);
    xhr.send();
        
    }
    if(xsalon.checked==true){
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
        xhr.open("GET","/text/cors.php?envoi=alumeSalon",true);
        xhr.send();
            
    }
});
