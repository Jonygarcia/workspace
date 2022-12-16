function askDelete(id) {

    let question = confirm("Está seguro que desea eliminar el campeón con el identificador " + id);

    if (question) {
        window.location.replace("./../");
    } else {
        window.location.replace("./../002campeones.php");
    }
}