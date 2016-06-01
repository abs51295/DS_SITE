function push() {
    var data = document.getElementById('number').value;
    var position = document.getElementById('stack');
    //position.innerHTML = null;
    //ar.unshift(data);
    //position.innerHTML = ar.toString();
    var el = document.createElement('p');
    el.setAttribute('class','para')
    var text = document.createTextNode(data);
    el.appendChild(text);
    var position = document.getElementById('stack');
    position.appendChild(el);
}

function pop(){
    //var data = document.getElementById('number').value;
    var po = document.getElementsByClassName('para');
    //var parent= position[0].get
    var position = document.getElementById('stack');
    position.removeChild(po[0]);
}