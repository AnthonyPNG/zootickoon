$(document).ready(function () {
    $('#select').click(function () {
        $.ajax("recupId.php",
        {
            type: "GET",
            success: function (data, textStatus, jqXHR) {
              console.log(jqXHR.status);
              $('#select').html(data);
            },
            error: function (xhr,status,error) {
                console.log(xhr.status);
            }       
        });
    });

    $('#select').change(function () {
        let id = $('#select').val();
        $.ajax("afficherTicket.php",
        {
            type: "GET",
            data: 'id=' + id,
            success: function (data, textStatus, jqXHR) {
              console.log(jqXHR.status);
              $('#recup').html(data);
              $('#resolved').css("visibility","visible");
            },
            error: function (xhr,status,error) {
                console.log(xhr.status);
            }       
        });
    });


    $('#resolved').click(function () {
        let id = $('#actualId').text();
        let statut = $('#actualStatut').text();
        $.ajax("modifier.php",
        {
            type: "GET",
            data: 'id=' + id + "&statut=" + statut,
            success: function (data, textStatus, jqXHR) {
                if (statut.includes("resolved")) {
                    alert("The ticket is already resolved");
                }
                else {
                    $("#actualStatut").html(data);
                }
            },
            error: function (xhr,status,error) {
                console.log(xhr.status);
            }       
        });
    });

});