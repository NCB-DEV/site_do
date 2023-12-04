//on recupere la valeur de la base des données ^pour mettre à jour le switch
let sal=document.getElementById('myonoffswitch');
    function ajaxrequete(url,calback){
        let xhr =new XMLHttpRequest();
        xhr.onreadystatechange=function(){
            if(xhr.d=this.readyState===4 && xhr.status===200){
                let response=xhr.responseText;
                calback(response);
                setTimeout(function(){
                    ajaxrequete(url,calback);
                },500);
            }
        };
        xhr.open("GET",url,true);
        xhr.send();
    }

    ajaxrequete("/text/get.php?mode=salon",function(response){
        if(response=="1"){
            sal.checked=true;
        }
        else if(response=="0"){
            sal.checked=false;
        }
    });
