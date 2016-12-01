$(document).ready(function () {
    $("#namaJalan").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://qrpuprovkepri.com/index.php/Dashboard/cari",
            data: {
                keyword: $("#namaJalan").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#namaJalan').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#namaJalan').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['namaJalan'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#namaJalan').val($(this).text());
    });
});
