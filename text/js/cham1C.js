let xlon=document.getElementById('myonoffswitche');
document.getElementById("myonoffswitche").addEventListener("click",function()
{
    if(xlon.checked==false){
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
    xhr.open("GET","/text/cors.php?envoi=eteindrechambre1",true);
    xhr.send();
        
    }
    if(xlon.checked==true){
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
        xhr.open("GET","/text/cors.php?envoi=alumechambre1",true);
        xhr.send();
            
    }
});
