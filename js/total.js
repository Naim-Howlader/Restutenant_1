var gt=0;
var iprize = document.getElementsByClassName('iprize');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');
function subtotal(){
    gt=0;
    for(i=0;i<iprize.length;i++){
        itotal[i].innerText=(iprize[i].value)*(iquantity[i].value);
        gt=gt+(iprize[i].value)*(iquantity[i].value);
    };
    gtotal.innerText=gt;
};
subtotal();