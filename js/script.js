$(document).ready(function() {

    //Переход на страницу Входа
    $('body').on('click', ".btnEntrance", function () {
        window.location.href = "/pages/entrance.php";
    });

    $('body').on('click', ".divBlockEntrance", function () {
        let block = $(this).attr('data-block');
        let none = $(this).attr('data-none');
        $('.divBlockEntrance').removeClass('active');
        $(this).addClass('active');
        displayEntrance(block, none);
    });

    function displayEntrance(block, none) {
        $("."+block).css("display", "block");
        $("."+none).css("display", "none");
    }

    $('body').on('click', ".btnAuth", function () {
        let login = $('#login').val();
        let pass = $('#pass').val();

        $.ajax({
            url: '/php/redirection.php',
            method: 'post',
            dataType: 'html',
            data: {action:'authUser', login: login, pass: pass},
            success: function(data){
                if(data == "0"){

                }
            }
        });
    });
});