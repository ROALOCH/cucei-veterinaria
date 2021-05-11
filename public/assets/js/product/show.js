function _submit() {
    let max = $('#stock').text(),
        quantity = $('#quantity')[0].value;

    if(quantity <= max) {
        $('#submit').click();
    } else {
        alert('Excedio el número de existencias');
    }
}
