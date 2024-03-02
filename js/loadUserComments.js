function loadComments(){
                        
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            console.log("hello");
        document.getElementById("commentSection").innerHTML = this.responseText;
    }};
    xmlhttp.open("GET", "../php/loadUserComments.php", true);
    xmlhttp.send();   
}