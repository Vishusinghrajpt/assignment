import './bootstrap';

$(document).ready(function () {
    $('select').select2({
        minimumResultsForSearch: -1
    });

    $(".create-model-btn").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('href'),
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(data) {
                $("#form-modal").html(data.html);
                // Open the modal
                let modal = new Modal(document.getElementById('form-modal'));
                modal.show();
                $('.module-form').parsley(); // Re-initialize Parsley
                $("select").select2({
                    placeholder: 'Please select'
                });
                $('#tags').tagify();

            },
            error: function() {
                Swal.fire({
                    text: "Error while processing, Kindly try again!",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            },
        });
    });
    $(".edit-model-btn").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('href'),
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(data) {
                $("#form-modal").html(data.html);
                // Open the modal
                let modal = new Modal(document.getElementById('form-modal'));
                modal.show();
                $('.module-form').parsley(); // Re-initialize Parsley
                $("select").select2({
                    placeholder: 'Please select'
                });
                $('#tags').tagify();
            },
            error: function() {
                Swal.fire({
                    text: "Error while processing, Kindly try again!",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            },
        });
    });


    $("#form-modal").on("click", ".close-btn", function() {

        let modal = new Modal(document.getElementById('form-modal'));
        modal.hide();
    });

    $('#preview-model').on("click", function() {
        let targetEl = document.getElementById('preview-model');
        const options = {
            placement: 'right',
            onShow: () => {
                $("#preview-model").html(data.html);
            },
        }
        const drawer = new Drawer(targetEl, options);
        drawer.hide();
    })
});

$('#data-table').DataTable({
    responsive: true,
    searching: false,
    paging: true,
    info: false
});

$('.delete-item-btn').click(function (e) {

    e.preventDefault();

    Swal.fire({
        title: `Are you sure?`,
        html: `Are you sure to delete this item?`,
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: 'No, cancel it',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-info'
        }
    }).then((result) => {
        if (result.isConfirmed) {


            $.ajax({
                type: 'DELETE',
                url: $(this).attr('href'),
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    window.location.reload();
                },
                error: function () {
                    Swal.fire({
                        text: "Error while processing, Kindly try again!",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                },
            });
        }
    });
});

function ticketPreview(url) {
    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            let targetEl = document.getElementById('preview-model');
            const options = {
                placement: 'right',
                onShow: () => {
                    $("#preview-model").html(data.html);
                },
            }
            const drawer = new Drawer(targetEl, options);
            drawer.show();
        },
        error: function() {
            Swal.fire({
                text: "Error while processing, Kindly try again!",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        },
    });
}
