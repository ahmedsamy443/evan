
         var myVar = setInterval(function () { myTimer() }, 1000);
var d = new Date();
d.setHours(00, 5, 59, 00);
function myTimer() {

    if (d.getSeconds() <= 1)
        d.setMinutes(d.getMinutes() - 1, 59, 00);

    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds() - 1;


    if (m == 0 && s == 1)
        window.location.href = "showresults.aspx";
    document.getElementById("<%= lblCtime.ClientID %>").innerHTML = h + ":" + m + ":" + s;

    d.setMinutes(m, s);
    //setInterval(myTimer, 1000);
}
