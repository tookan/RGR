$(document).ready(function () {

        $("#search").keyup(
            function () {
                var searStr = $("#search").val();
                if (searStr.length >= 3) {

                    $.ajax({
                        type: 'post',
                        url: 'crutches/search.php',
                        data: 'searStr=' + searStr,
                        dataType: 'html',
                        success: function (res) {
                            $('#search-target').fadeIn();
                            $('#search-target').html(res);
                        }

                    });
                }
                if (searStr.length <= 2){
                    $('#search-target').fadeOut();
                }
            }
        );

    }
);
