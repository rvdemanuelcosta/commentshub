function followUser(follower){
    console.log("trying to follow user.")
    let xmlhttpFollow = new XMLHttpRequest();
    let followed = document.getElementById("followButton").getAttribute("value");
    let reque = "http://localhost/commentshub/php/followUser.php?followed=" + followed +"&follower=" + follower;
    xmlhttpFollow.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log("user followed.");
        }
    };

    xmlhttpFollow.open("GET", reque, true);
    xmlhttpFollow.send();
}