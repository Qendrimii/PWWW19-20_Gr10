var totatli = [0,0,0,0,0,0,0,0,0];
var shitja;
var outputi;

function fillimi() {
    var submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click" , shitjaERe , false);
    shitja = document.getElementById("newEntry");
    outputi = document.getElementById("output");
}

function shitjaERe() {
    var x;
    var paga;

    paga = 200 + (parseInt(sales.newEntry.value)*0.09);
    x = Math.floor(paga/100);

    if (paga<0)
        return;
    else if (x>9)
        x=10;
    ++totatli[x-2];
    shtypVargun();
}
function shtypVargun() {
    sales.output.value = "Numri i stafit qe kane fituar page ne baze te kategorive: \n"+
        "$200 - $299 \t"+totatli[0]+"\n"+
        "$300 - $399 \t"+totatli[1]+"\n"+
        "$400 - $499 \t"+totatli[2]+"\n"+
        "$500 - $599 \t"+totatli[3]+"\n"+
        "$600 - $699 \t"+totatli[4]+"\n"+
        "$700 - $799 \t"+totatli[5]+"\n"+
        "$800 - $899 \t"+totatli[6]+"\n"+
        "$900 - $999 \t"+totatli[7]+"\n"+
        "$1000 -over \t"+totatli[8]+"\n";
}
window.addEventListener("load" , fillimi , false);