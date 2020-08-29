
function addToCart(ItemId){
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        async: false,
        url:"/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+ ItemId).show();
            }
        }
    });
}

