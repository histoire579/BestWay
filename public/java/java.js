const { nodeName } = require("jquery");


function masque() {
    var type=document.getElementById('type');
    var admin=document.getElementById('admin');
    var employe=document.getElementById('employe');
    var client=document.getElementById('client');


    if (type.value==3) {
        employe.style.display="none";
        client.style.display="none";
        admin.style.display="block";
    }else if (type.value==5) {
        employe.style.display="block";
        client.style.display="none";
        admin.style.display="none";
    }else{
        employe.style.display="none";
        client.style.display="block";
        admin.style.display="none";
    }

}
