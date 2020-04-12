
let idcom= $("input[name*='id']");
idcom.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);
    let idclient = $("input[name*='idc']");
    let qu = $("input[name*='q']");

    idcom.val(textvalues[0]);
    idclient.val(textvalues[1]);
    qu.val(textvalues[2]);
});


function displayData(e) {
    let idcom = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.idcom == e.target.dataset.idcom){
           textvalues[idcom++] = value.textContent;
        }
    }
    return textvalues;

}