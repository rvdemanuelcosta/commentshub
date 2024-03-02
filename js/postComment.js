function postComment(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            loadComments();
            document.getElementById("commentToPost").value = "";
        }
    };
    comment = document.getElementById("commentToPost").value;
    if(comment != ""){
        xmlhttp.open("GET", "../php/comment.php?comment=" + comment);
        xmlhttp.send();
    }
    ///console.log(comment);
}