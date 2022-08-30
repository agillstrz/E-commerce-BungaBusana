$(document).ready(function () {
    loadcart();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
     function loadcart() {
        $.ajax({
            type: "GET",
            url: "/load-cart",
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
        });
       }




    $(".addToCartBtn").click(function (e) {
        e.preventDefault();
        var produk_id = $(this).closest(".product_data").find(".prod_id").val();
        var produk_qty = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "/add-to-cart",
            data: {
                produk_id: produk_id,
                produk_qty: produk_qty,
            },
            success: function (response) {
                swal(response.status);
                loadcart();
            },
        });
    });

    $(".increment-btn").click(function (e) {
        e.preventDefault();

        var inc_value = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });
    $(".decrement-btn").click(function (e) {
        e.preventDefault();
        var dec_value = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });



        $(document).on('click','.hapuskeranjang', function (e) {
            
        e.preventDefault();

        var prod_id = $(this).closest(".product_data").find(".prod_id").val();
        $.ajax({
            type: "POST",
            url: "hapus-keranjang",
            data: {
                prod_id: prod_id,
            },
            success: function (response) {
                $('.cartitem').load(location.href + " .cartitem")
                swal(response.success);
            },
        });
    });

    $(".ubahharga").click(function (e) {
        e.preventDefault();
        var prod_id = $(this).closest(".product_data").find(".prod_id").val();
        var qty = $(this).closest(".product_data").find(".qty-input").val();
        data = { prod_id: prod_id, prod_qty: qty };

        $.ajax({
            type: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();
            },
        });
    });
});

