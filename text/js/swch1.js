let cha1=document.getElementById('myonoffswitche');
    function ajaxrequetes(url,calback){
        let xhr =new XMLHttpRequest();
        xhr.onreadystatechange=function(){
            if(xhr.d=this.readyState===4 && xhr.status===200){
                let response=xhr.responseText;
                calback(response);
                setTimeout(function(){
                    ajaxrequetes(url,calback);
                },1000);
            }
        };
        xhr.open("GET",url,true);
        xhr.send();
    }

    ajaxrequetes("/text/get.php?mode=chambre1",function(response){
        if(response=="1"){
           cha1.checked=true;
        }
        else if(response=="0"){
            cha1.checked=false;
        }
    });
document.getElementById("myonoffswitche").addEventListener("click",function()
{

   /*  if(sal.checked==false){
        console.log("false");
        req("http://192.168.144.10/eteintSalon",function(){console.log(response);});
        
    }
    if(sal.checked==true){
        console.log("true");
        req("http://192.168.144.10/allumeSalon",function(){console.log(response);});
    } */
});
function req(url,callbac){
    let xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(xhr.readyState==4 && xhr.status==200){
            let response=xhr.response;
            callbac(response);
            
        }
        else if(xhr.readyState==4 && xhr.status==404){
            console.log('page pas trouvée');
            let response=xhr.response;
            callbac(response);
        }

    };
    xhr.open("GET",url,true);
    xhr.send();
}
