
document.addEventListener('DOMContentLoaded', () => {

    const modals = [
        'category',
        'order',
        'orderrow',
        'price',
        'product',
        'review',
        'role',
        'user'
    ];

    modals.forEach((name) => {

        const modal = document.getElementById(`create-${name}-modal`);
        const openButton = document.getElementById(`show-create-${name}`);
        const closeButton = document.getElementById(`close-create-${name}`);
        const cancelButton = document.getElementById(`cancel-create-${name}`);

        if (!modal || !openButton) {
            return;
        }

        openButton.addEventListener('click', () => {
            modal.showModal();
        });

        closeButton?.addEventListener('click', () => {
            modal.close();
        });

        cancelButton?.addEventListener('click', () => {
            modal.close();
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.close();
            }
        });

    });

});





