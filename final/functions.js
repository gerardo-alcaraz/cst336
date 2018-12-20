$(function() {

    createModal();

    $("button.add").on("click", function(e) {
        //console.log(e);
        $("#modalBox").css("display", "block");
    })
    $("button.show").on("click", function(e) {
        alert("show racers");
    })
    $("button.edit").on("click", function(e) {
        alert("edit races");
    })
    $("button.cancel").on("click", function(e) {
        alert("cancel races");
    })
    
    

    $("button.save").on("click", function(e) {
        
        var data = {
            "raceId" : $("#raceId").val(),
            "raceDate": $("#raceDate").val(),
            "raceTime":$("#raceTime").val(),
            "raceLocation":$("#raceLocation").val(),
        };
        

        $.ajax({
            type: "POST",
            url: "index.php",
            dataType: "json",
            contentType: "application/json",
            data: JSON.stringify(data),
            success: function() {
                console.log("Got data", data);
                alert("posted");
            },
            /**
             * POST KEEPS GETTING ERROR
             * */
            error: function(err) {
                console.log("Didn't get data", err);
                //console.log(data['raceId'])
            },
            complete: function() {
                // Do this last
                $("#modalBox").css("display", "none");
            }
        });
    })
    
    var pagesData;
    $.ajax({
        type: "GET",
        url: "index.php",
        dataType: "json",
        success: function(data, status) {
            pagesData = data;
            console.log("Got data", pagesData);
            

        },
        error: function(err) {
            console.log("Didn't get data", err);
            console.log(pagesData);
        }
    });


})
function createModal() {
    // Get the modal

    // Get the button that opens the modal
    var btn = document.getElementById("openButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        $("#modalBox").css("display", "none");
    }

    var modal = document.getElementById('modalBox');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            $("#modalBox").css("display", "none");
        }
    }
}