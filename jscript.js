function loadData(){
    const xhttp=new XMLHttpRequest();
    
    
    xhttp.onload=function(){

        const container=document.getElementById("demo");
        container.innerHTML=xhttp.responseText;
    }

    xhttp.open("GET","./data/data.txt");

    xhttp.send();
}