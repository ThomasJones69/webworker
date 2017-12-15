var count = 2;
function quadraat(){
    count= count * count;
    postMessage(count);
    setTimeout("quadraat()",2000);
}
quadraat();
