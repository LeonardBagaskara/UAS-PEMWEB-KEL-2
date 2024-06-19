document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const userConfirmed = confirm('Are you sure you want to delete this item?');
            if (userConfirmed) {
                window.location.href = this.href;
            }
        });
    });

    const productForm = document.getElementById('productForm');
    if (productForm) {
        productForm.addEventListener('submit', function (event) {
            const produk = document.getElementById('produk').value.trim();
            const stok = document.getElementById('stok').value;
            const harga = document.getElementById('harga').value;

            if (produk === '' || stok === '' || harga === '') {
                alert('Please fill in all fields.');
                event.preventDefault();
            } else if (stok <= 0 || harga <= 0) {
                alert('Stok and Harga must be greater than zero.');
                event.preventDefault();
            }
        });
    }
});
