$(function () {
    $(".languageLink.active").click(function () {
        var display = $(".menuLinks").css('display');

        if (display == 'block')
            $(".menuLinks").hide();
        else
            $(".menuLinks").show();

    })

    $(".currency-btn").click(function () {
        var display = $(".box__wrapper.currency_wrapper").css('display');

        if (display == 'block')
            $(".box__wrapper.currency_wrapper").hide();
        else
            $(".box__wrapper.currency_wrapper").show();
    })

    $(".coin-btn").click(function () {
        var display = $(".box__wrapper.coin_wrapper").css('display');

        if (display == 'block')
            $(".box__wrapper.coin_wrapper").hide();
        else
            $(".box__wrapper.coin_wrapper").show();
    });

    $(".currency_select_block_scroll_bar .item__wrapper").click(function() {
        var currency = $(this).data('currency');
        var label = $(this).data('label');
        $("#currency-label").html(label);
        $(".box__wrapper.currency_wrapper").hide();
    })

    $(".coin_select_block_scroll_bar .item__wrapper").click(function() {
        var coin = $(this).data('coin');
        var label = $(this).data('label');
        $("#coin-label").html(label);
        $(".box__wrapper.coin_wrapper").hide();
    })

    $('currency_select_block_scroll_bar')
})