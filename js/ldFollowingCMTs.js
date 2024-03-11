function ldFollowingCMTs(){
    let xmlhttpFollowed = new XMLHttpRequest();
    xmlhttpFollowed.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("commentSection").innerHTML = this.responseText;
        }
    }
    xmlhttpFollowed.open("GET", "php/ldFollowedUsersCmts.php", true);
    xmlhttpFollowed.send();
}