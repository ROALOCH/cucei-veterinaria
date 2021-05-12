function updateCart(id, stock, type) {
    let quantity = $('#' + id + ' > td:nth-child(4) input')[0].value;
    let updateForm = $('#updateCart'),
        action = updateForm.attr('action');
    updateForm.attr('action',action + id);
    if(type == 'product' && parseInt(quantity) > parseInt(stock)) {
        console.log(quantity, stock);
        $('#' + id + ' > td:nth-child(4) input')[0].value = stock;
        alert("Ea prro no ai stock");
    } else {
        $('#cart_id')[0].value = id;
        $('#quantity')[0].value = quantity;
        $('#updateCart')[0].submit();
    }
}
