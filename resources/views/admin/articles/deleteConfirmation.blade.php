<script>
    $('.delete_button').on('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You will not be able to retrieve this data when you delete it",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancel',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.value) {
                $(this).parent().submit();
            }
        })
    })
</script>