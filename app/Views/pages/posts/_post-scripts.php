<script>
    $(document).ready(() => {
        if (typeof Dropzone !== 'undefined') {
            Dropzone.autoDiscover = false
            let name = new Date().getTime()
            $('div#myId').dropzone({
                renameFile: file => name + '_' + file.name.replace(/\s/g, ''),
                url: '<?=site_url('upload-post-attachments')?>',
                method: 'post',
                addRemoveLinks: 'true',
                dictRemoveFile: 'Remove',
                success: (file, response) => {
                    $('form').append('<input type="hidden" name="p_attachment[]" value="' + response + '">');
                    console.log(response)
                },
                error: (file, response) => console.log(response),
                removedfile: file => {
                    file.previewElement.remove()
                    $('form').find('input[name="p_attachment[]"][value="' + name + '_' + file.name + '"]').remove()
                    let p_name = name + "_" + file.name
                    $.ajax({
                        url: '<?=site_url('delete-post-attachments')?>',
                        type: 'GET',
                        data: 'files=' + p_name,
                        dataType: 'json',
                        success: response => {
                            // console.log(response.message);
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }
            })
        }
    })

    function verifyDocumentSigning() {
        let approval = false;
        let htmlContent = null;
        let verCode = $('#ver-code').val()
        if (!verCode) {
            Swal.fire('Invalid Submission!', 'Please enter the verification code', 'error')
        } else {
            let formData = new FormData()
            let postID = $('#post-id').val()
            let eSignature = $('#e-signature').val()
            let requiresApproval = $('#p_requires_approval').prop('checked') ? '1' : '0'
            formData.append('p_id', postID)
            formData.append('p_signature', eSignature)
            formData.append('ver_code', verCode)
            formData.append('p_requires_approval', requiresApproval)
            $('#save-btn').text('Submitting...');
            $('#save-btn').attr('disabled', 'true');
            $.ajax({
                url: '<?=site_url('/sign-post')?>',
                type: 'post',
                data: formData,
                success: response => {
                    if (response.success) {
                      //location.reload()
                      Swal.fire('Confirmed!', "Document signed successfully.", 'success').then(() => location.reload())
                     // setTimeout(function() {
                        htmlContent = $('#internalMemoWrapper').html();
                        let formData = new FormData()
                        formData.append('htmlContent', htmlContent)
                        formData.append('postId', postID)
                        $.ajax({
                          url: '<?=site_url('/generate-pdf')?>',
                          type: 'post',
                          data: formData,
                          success: response => {
                            if (response.success) {
                              console.log(response)
                              // Swal.fire('Confirmed!', "PDF generated", 'success').then(() => location.reload())
                            } else {
                              console.log(response)
                              //Swal.fire('Sorry!', "Whoops! Something went wrong.", 'error')
                            }
                          },
                          cache: false,
                          contentType: false,
                          processData: false
                        })
                      //}, 5000);
                        //Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                    } else {
                        Swal.fire('Sorry!', response.message, 'error')
                    }
                    $('#save-btn').text('Submit');
                    $('#save-btn').attr('disabled', 'false');
                    $('#standard-modal-3').modal('hide');
                    //approval = true;

                },
                cache: false,
                contentType: false,
                processData: false
            })

        }
    }

    function declineDocument(postID) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'This document will not be published. This action is irreversible.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
        }).then(confirm => {
            if (confirm.value) {
                let formData = new FormData()
                formData.append('p_id', postID)
                jQuery.noConflict()
                $('#loading-modal').modal('toggle');
                $('#standard-modal-4').modal('toggle')
                $('#modalTitle').text('Processing request')
                $('#modalText').text('Hold on while we take into account your action')
                $.ajax({
                    url: '<?=site_url('/decline-post')?>',
                    type: 'post',
                    data: formData,
                    success: response => {
                        if (response.success) {
                            Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                        } else {
                            Swal.fire('Sorry!', response.message, 'error')
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                })
            }
        })
    }

    function approveDocument() {
        jQuery.noConflict()
        $.ajax({
            url: '<?=site_url('/check-approved-stamp')?>',
            type: 'get',
            success: response => {
                if (response.success) {
                    $('#standard-modal-4').modal('toggle')
                } else {
                    Swal.fire('Sorry!', response.message, 'error').then(() => {
                    })
                }
            }
        })
    }

    function submitDocumentApproval(postID) {
        let selectedRadio = $('input[name="approve_memo"]:checked').attr('id');
        if (selectedRadio) {
            const url = selectedRadio === 'yes-approve-memo' ? '<?=site_url('/approve-post')?>' : '<?=site_url('/reject-post')?>'
            let formData = new FormData()
            formData.append('p_id', postID)
            jQuery.noConflict()
            $('#loading-modal').modal('toggle');
            $('#modalTitle').text('Processing request')
            $('#modalText').text('Hold on while we take into account your action')
            $.ajax({
                url,
                type: 'post',
                data: formData,
                success: response => {
                    if (response.success) {
                        Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                    } else {
                        Swal.fire('Sorry!', response.message, 'error')
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
            })
        } else {
            Swal.fire('Invalid Submission!', 'Please select a response', 'error')
        }

    }

    function signDocument(postID) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'This will publish the document with you as the signatory. This action is irreversible.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
        }).then(confirm => {
            if (confirm.value) {
                jQuery.noConflict()
                // $('#loading-modal').modal('toggle');
                $.ajax({
                    url: '<?=site_url('/check-signature-exists')?>',
                    type: 'get',
                    success: response => {
                        //console.log(response)
                        if (response.success) {
                            $('#post-id').val(postID)
                            $('#e-signature').val(response.message)
                            let formData = new FormData()
                            formData.append('p_id', postID)
                            $('#standard-modal-3').modal('toggle');


                            /*
                                          $.ajax({
                                            url: '<=site_url('/send-doc-signing-verification')?>',
                                            type: 'post',
                                            data: formData,
                                            success: response => {
                                              if (response.success) {
                                                Swal.fire('Confirmed!', response.message, 'success').then(() => {
                                                  jQuery.noConflict()
                                                  $('#loading-modal').modal('hide');
                                                  $('#standard-modal-3').modal('show');
                                                })
                                              } else {
                                                Swal.fire('Sorry!', response.message, 'error').then(() => {
                                                  jQuery.noConflict()
                                                  $('#loading-modal').modal('hide');
                                                })
                                              }
                                            },
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                          })*/
                        } else {
                            Swal.fire('Sorry!', response.message, 'error').then(() => location.href = '<?=site_url('/my-account')?>')
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                })
            }
        })
    }
</script>
