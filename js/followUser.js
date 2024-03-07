function followUser(follower){
    console.log("trying to follow user.")
    let xmlhttpFollow = new XMLHttpRequest();
    let followed = document.getElementById("followButton").getAttribute("value");
    let reque = "http://localhost/commentshub/php/followUser.php?followed=" + followed +"&follower=" + follower;
    xmlhttpFollow.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText == "User followed."){
                document.getElementById("followButton").innerHTML = "Unfollow";
                document.getElementById("followButton").setAttribute("onclick", "unfollow(" + follower + ")")
            }
            
        }
    };

    xmlhttpFollow.open("GET", reque, true);
    xmlhttpFollow.send();
}

function loginToFollow(){
    alert("You have to be logged in to follow users.");
}

function unfollow(follower){
    let xmlhttpUnfollow =  new  XMLHttpRequest();
    let followed = document.getElementById("followButton").getAttribute("value");
    xmlhttpUnfollow.onreadystatechange = function(){
        if((this.readyState == 4 && this.status == 200)){
            alert("unfollowed");
            document.getElementById("followButton").innerHTML = "follow";
            document.getElementById("followButton").setAttribute("onclick", "followUser(" + follower +")")
        }
    };
    xmlhttpUnfollow.open("GET", "http://localhost/commentshub/php/unfollowUser.php?followed=" + followed + "&follower=" + follower, true);
    xmlhttpUnfollow.send();
}