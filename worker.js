//var count = 2;
function quadraat() {
//    count = count * count;

//    setTimeout("quadraat()", 2000);
    var myObj = {"name": "Anne-Marije",
        "age": 31,
        "city": "Zwolle"};
    var myJSON = JSON.stringify(myObj);
//    postMessage(myObj);
    postMessage(myJSON);
}
quadraat();


//window.location = "index.php?x=" + myJSON;

