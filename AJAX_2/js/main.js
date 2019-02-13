$(document).ready(function () {
    jatekosokatOlvas();
    $(document).on("change", "#jatekos", function () {

        let mez = $(this).val();
        $.post("php/adatok.php",
                {
                    id: mez
                },
                function (valasz) {
                    $('#jatekosAdatai').html(valasz);
                });
    });
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
