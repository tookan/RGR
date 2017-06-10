
$(document).ready(function () {
    $("#srch").autocomplete({
        appendTo: '#autoco',
        source: 'scripts/autocompletedata.php',
        minLength: 2
    });

});

