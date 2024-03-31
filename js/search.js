function searchFor(){
    
    let searchInput = document.getElementById("search-box").value;
    console.log("searching for. " + searchInput);
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //console.log("stateIsCorrect " + this.responseText);
            document.getElementById("users-results").innerHTML = this.responseText;
        }
    }
    let request = "php/searchForUsers.php?q=" + searchInput;
    xmlhttp.open("GET", request, true);
    xmlhttp.send();
}