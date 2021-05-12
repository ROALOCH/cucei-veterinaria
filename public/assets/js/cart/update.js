function updateCart(id, stock) {
    let quantity = $('#' + id + ' > td:nth-child(4) input')[0].value;

    if(quantity > stock) {
        $('#' + id + ' > td:nth-child(4) input')[0].value = stock;
        alert("Ea prro no ai stock");
    } else {
        $('#quantity')[0].value = quantity;
        $('#updateCart')[0].submit();
    }
}
