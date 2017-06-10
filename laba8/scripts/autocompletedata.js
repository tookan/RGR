
$(document).ready(function () {
    $.ajax({
url: 'scripts/autocompletedata.php',
        dataType: 'json',
        contentType: 'application/json',
        json: true
    }).done(function (orders) {
        var orderlist = orders;
        autocomplete(orderlist);
    });

    function autocomplete(orders) {
        var orderlist = orders;
        $("#srch").autocomplete({
            source: orderlist,
            messages: {
                noResults: '',
                results: function() {}
            }
        });
    }


});

