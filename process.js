//Suppression d'une facture
$('body').on("click", '.delBtn', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Vous allez supprimer la facture' + this.dataset.id,
        text: 'cette action est irreversible!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Oui, j'en suis sûr!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'controller.php',
                method: 'post',
                data: { deletionId: this.dataset.id },
                success: (response) => {
                    if (response == 1) {
                        Swal.fire('Suppression!', 'Facture supprimer avec succès.', 'success');
                        getBills();
                    } else {
                        Swal.fire('Erreur!', 'Un problème est survenu lors de la suppression.', 'error');
                    }
                },
            });
        }
    });
});