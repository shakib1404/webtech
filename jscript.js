function loadData(callbackF){
    const xhttp=new XMLHttpRequest();
    
    
    xhttp.onload=function(){
        callbackF(this);
    }

    xhttp.open("GET","./data/data.txt");

    xhttp.send(); 
}

function myCallback1(xhttp){
    const container=document.getElementById("demo");
        container.innerHTML=xhttp.responseText;
}

function myCallback2(xhttp){
    const container=document.getElementById("demo");
        container.innerHTML=xhttp.responseText;
}