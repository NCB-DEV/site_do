let chame2=document.getElementById('myonoffswitchr');
document.getElementById("myonoffswitchr").addEventListener("click",function()
{
    if(chame2.checked==false){
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
    xhr.open("GET","/text/cors.php?envoi=eteindrechambre2",true);
    xhr.send();
        
    }
    if(chame2.checked==true){
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
        xhr.open("GET","/text/cors.php?envoi=allumechambre2",true);
        xhr.send();
            
    }
});
