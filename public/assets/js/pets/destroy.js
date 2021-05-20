function destroy(e, event) {
    event.stopPropagation();
    event.preventDefault();
    if(confirm('Desea borrar la mascota') == true) {
        e.parentNode.submit();
    }
}
