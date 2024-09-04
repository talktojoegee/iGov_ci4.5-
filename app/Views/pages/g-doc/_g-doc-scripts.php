<script>
    $(document).ready(() => {
        $('form#new-document-upload-form').submit(function (e) {
            e.preventDefault()
            let ref = $('#ref-no').val()
            let title = $('#title').val()
            let comment = $('#comment').val()
            let authorizers = $('#authorizers').val()
            let files = $('#file')[0].files
            let submitButton = $('#submitDocumentUpload');
            submitButton.prop('disabled', true);
            submitButton.text('Submitting...');

            if (!ref || !title || !comment || !authorizers) {
                Swal.fire('Invalid Submission!', 'Please fill in all required fields', 'error')
                submitButton.prop('disabled', false);
                submitButton.text('Submit');
                return
            }
            if (!files[0]) {
                Swal.fire('Invalid Submission!', 'Please upload a PDF document.', 'error')
                submitButton.prop('disabled', false);
                submitButton.text('Submit');
                return
            }

            let formData = new FormData(this)
            formData.append('file', files[0])
            $.ajax({
                url: '<?=site_url('/g-docs/new-doc-upload')?>',
                type: 'post',
                data: formData,
                success: response => {

                    submitButton.prop('disabled', false);
                    submitButton.text('Submit');
                    if (response.success) {
                        Swal.fire('Confirmed!', response.message, 'success').then(() => location.href = `<?=site_url('/g-docs/manage-doc/')?>${response.doc_id}`)
                    } else {
                        Swal.fire('Sorry!', response.message, 'error')
                    }
                },
                error: () => {
                    // Handle any errors during the request
                    submitButton.prop('disabled', false);
                    submitButton.text('Submit');
                    Swal.fire('Error!', 'There was an error submitting the form.', 'error');
                },
                cache: false,
                contentType: false,
                processData: false
            })
        })
        $('form#manage-document-upload-form').submit(function (e) {
            e.preventDefault()
            let submitButton = $('#submitButton');
            let id = $('#g-doc-id').val()
            submitButton.prop('disabled', true);
            submitButton.text('Updating...');
            let formData = new FormData(this)
            $.ajax({
                url: `<?=site_url('/g-docs/manage-doc') ?>/${id}`,
                type: 'post',
                data: formData,
                success: response => {
                    submitButton.prop('disabled', false);
                    submitButton.text('Update Document Details');
                    if (response.success) {
                        Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                    } else {
                        Swal.fire('Sorry!', response.message, 'error')
                    }
                },
                error: () => {
                    // Handle any errors during the request
                    submitButton.prop('disabled', false);
                    submitButton.text('Update Document Details');
                    Swal.fire('Error!', 'There was an error submitting the form.', 'error');
                },
                cache: false,
                contentType: false,
                processData: false
            })
        })


    })
</script>