$("#switch1").on("change", function() {

    let status = $(this).prop("checked") ? "dark" : "light";
    
    if (status == "dark") {
        $("body").addClass("dark");
    } else if (status == "light") {
        $("body").removeClass("dark");
    }

    let data = {
        "action": "change-theme",
        "status": status 
    }

    $.ajax({
        url: "api/actions.php",
        type: "post",
        data: data,
        success: function(resp) {
            console.log(resp);
        }

    })

})