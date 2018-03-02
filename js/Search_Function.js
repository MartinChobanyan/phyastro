function SearchAlgoritm(){
    var d,g,f,b,c,e;
    d=document.getElementById("SearchingLine");
    g=d.value.toUpperCase();
    f=document.getElementById("G");
    b=f.getElementsByTagName("li");
    for(e=0;e<b.length;e++){
        c=b[e].getElementsByTagName("a")[0];
        if(c.innerHTML.toUpperCase().indexOf(g)>-1){
            b[e].style.display=""
        }
        else{b[e].style.display="none"}
    }
};