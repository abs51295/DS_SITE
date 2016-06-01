var i = 10;
var count = 0;
function push() {
    if(count===10){
        
        return;
    }
    var data = document.getElementById('number');
    if(data.value===''){
        return;
    }
    var el = document.createElement('p');
    el.setAttribute('class','para')
    el.setAttribute('id', 'p' + i);
    i--;
    var text = document.createTextNode(data.value);
    el.appendChild(text);
    var position = document.getElementById('stack');
    position.insertBefore(el, position.childNodes[0]);
    count++;
    data.value = '';
    width();
}

function width(){
    var wid=i;
    for(var b=wid+1; b>=1;b--){
        var a = document.getElementById('p'+b);
        a.style.width = (b*80)+'px';
        
    }
    
}

function pop(){
    //var data = document.getElementById('number').value;
    var po = document.getElementsByClassName('para');
    i++;
    count--;
    //var parent= position[0].get
    var position = document.getElementById('stack');
    position.removeChild(po[0]);
}