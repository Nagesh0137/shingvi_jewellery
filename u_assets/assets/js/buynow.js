function openBuyNowModal(pId)
{
    $.ajax({
        url: '<?= base_url("user/getproductDetails") ?>',
        type: 'POST',
        data: { pId: pId },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            
        },
        error: function () {
            alert("Error occurred. Try again.");
        }
    });

            
}