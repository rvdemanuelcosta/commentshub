function loadPublicUser(user_profile, username){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("title").innerHTML = username;
            document.getElementById("profile-main").innerHTML = this.responseText;
        }
    };
    reque = user_profile + "?username=" + username;
    xmlhttp.open("GET", reque, true);
    xmlhttp.send();
}