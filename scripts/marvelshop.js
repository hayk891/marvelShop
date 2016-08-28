function marvelShop() {
    this.add = $("#add");

    this.shop_div = $("#shop_div");

    this.addNewShop();

    this.showShopInfo();
}

marvelShop.prototype.addNewShop = function () {
    var obj = this;

    obj.add.click(function () {
        $("#mymodal").modal('show');

        $("button#saveshop").click(function () {
            obj.saveShop();
        });
    });

};

marvelShop.prototype.saveShop = function () {
    var obj = this;

    var name = $(".mymodal").find("#shopname").val();

    $.ajax({
        url: "../admin/control/save.php",
        type: "post",
        dataType: "json",
        data:{
            table: "saveShop",
            name: name
        },
        success: function(data){
            if(data.success == 1){
                alert("Магазин добавлен");
                $(".mymodal").find("#shopname").val('')
                $("#mymodal").modal('hide');
            }
        }
    });
};

marvelShop.prototype.showShopInfo = function () {
    var obj = this;

    obj.shop_div.find(".shop_span").click(function () {
        var jthis = $(this);

        $.ajax({
            url: "../admin/control/get.php",
            type: "post",
            dataType: "json",
            data:{
                table: "getShopInfo",
                id: jthis.data('id')
            },
            success: function(data){
                if(data.success == 1){

                }
            }
        });
    })
};

$( document ).ready(function() {
    new marvelShop();
});
