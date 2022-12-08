//console.log("hello");

$(document).ready(function () {
    //click sur l'id btn
    $('#btn').click(function () {
        $.ajax("http://localhost/zootickoon/mission7/bonjour.php",
        {
            type: "GET",
            success: function (resultat) {
                $("#result").html(resultat);
            }
        });
    });
});