$(document).ready(function () {
    $("#keyword").on("keyup", function () {
        $("#loader").show();
        $.get("ajax/siswa.php?keyword=" + $("#keyword").val(), function (data) {
                $("#container").html(data);
                $("#loader").hide();
            },
        );
        // tanpa loader
        // $("#container").load("ajax/siswa.php?keyword=" + $("#keyword").val());
    });
});