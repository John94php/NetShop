$(document).ready(function () {
    $(".lang").on("change", function () {
        let langval = $(".lang option:selected").val();
        console.log(langval);
        if (langval === 'en') {
            let strPL = "Zmień swój język";
            let newstrEN = strPL.replace(strPL, 'Change your language');
            $('.lang span').text(newstrEN);
            $.cookie('lang', 'en');
            location.reload();

        } else {
            let strEN = "Change your language";
            let newstrPL = strEN.replace(strEN, "Zmień swój język")
            $('.lang span').text(newstrPL);
            $.cookie('lang', 'pl');
            location.reload();

        }
    })
})