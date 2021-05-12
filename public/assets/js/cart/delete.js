function deleteCart(id) {
    let deleteForm = $('#deleteCart'),
        action = deleteForm.attr('action');
    deleteForm.attr('action',action + id);
    document.getElementById('cart_id').value = id;
    document.getElementById('deleteCart').submit();
}
