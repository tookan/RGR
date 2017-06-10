
    $('#srchB').click(function () {
        var orders = $("#srch").val();
        $.ajax({
            type: 'post',
            url: 'scripts/outputzakaz.php',
            data: 'orders='+orders,
            dataType: "html",
            success: function (data) {
                $("#result").html(data);
            }
        });
    });
