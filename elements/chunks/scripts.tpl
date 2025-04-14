<script>
    document.addEventListener('DOMContentLoaded', () => {
        PageBlocks.Message = {
            success(message) {
                Swal.fire({
                    position: 'top-end',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error(message) {
                Swal.fire({
                    position: 'top-end',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        };
        // Close modal
        document.addEventListener('pageblocks:success', (e) => {
            const modal = e.detail.form.closest('.modal');
            if (modal) {
                bootstrap.Modal.getInstance(modal)?.hide();
            }
        });
    });
</script>