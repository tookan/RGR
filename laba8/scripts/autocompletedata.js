
$(document).ready(function () {
    $.get('scripts/autocompletedata.php',function (orders) {
        alert(orders);
    })

})
