
function getIdToFollow(){
    console.log('trying to get id to follow from js code.');
    var xmlhttp = new XMLHttpRequest();
    var id;
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
             id = this.responseText;
            console.log(id + " is set");
            document.getElementById("followButton").setAttribute("value", this.responseText);
            return id;
            
        }
        
    };
    
    console.log('testing s');
    request = "http://localhost/commentshub/php/getUserId.php?usertofollow=" + username;
    xmlhttp.open('GET', request, true);
    xmlhttp.send();
    
}