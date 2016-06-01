function a(){
    var el = document.getElementById('lol');
    var name = document.getElementById('name').value;
    var comment = document.getElementById('comment').value;
    if(name!='' && comment!='' ){
        el.innerHTML += "<br> <br>" +"<strong>" + name.toString() + "</strong>" + ":" + " " + comment.toString();
    }
    else{
        alert("Please fill in your name and comment");
    }
    
    /*var p = document.createElement('p');
    var text = document.createTextNode(comment);
    p.appendChild(text);
    el.appendChild(p);*/
}
