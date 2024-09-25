<?= $this->extend('layouts/master'); ?>

<?= $this->section('extra-styles'); ?>
<?= $this->endSection() ?>


<?= $this->section('content'); ?>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">iGov</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">e-Office</a></li>
                            <li class="breadcrumb-item"><a href="<?= site_url('/g-docs') ?>">G-Docs</a></li>
                            <li class="breadcrumb-item active">Manage Document</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Document</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="header-title mt-2 mb-4">Manage Document</h4>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?= site_url('/g-docs') ?>" type="button"
                                   class="btn btn-success float-right">
                                    Go Back
                                </a>
                                <button id="saveButton" type="button" class="btn btn-primary float-right mr-2"
                                        style="display: none">
                                    <i class="fas fa-save mr-1"></i>
                                    Save Document Changes
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div id="pspdfkit" style="width: 100%; height: 100vh;"></div>
                            </div>
                            <div class="col-lg-3">
                                <h4 class="mb-2">Document Details</h4>
                                <div class="">
                                    <h5 class="m-0">Ref No.</h5>
                                    <p><?= $doc['g_doc_ref'] ?></p>
                                </div>
                                <div class="">
                                    <h5 class="m-0">Title</h5>
                                    <p><?= $doc['g_doc_title'] ?></p>
                                </div>
                                <div class="">
                                    <h5 class="m-0">Uploaded By</h5>
                                    <p><?= $doc['uploader_name'] ?></p>
                                </div>
                                <div class="">
                                    <h5 class="m-0">Uploader Comments</h5>
                                    <p><?= $doc['g_doc_comment'] ?></p>
                                </div>
                                <div class="">
                                    <h5 class="m-0">Document Status</h5>
                                    <p>
                                        <?php
                                        if ($doc['g_doc_status'] == 1) echo 'Active';
                                        elseif ($doc['g_doc_status'] == 0) echo 'Inactive';
                                        ?>
                                    </p>
                                </div>
                                <div class="">
                                    <h5 class="m-0">Document Authorizers</h5>
                                    <?php $sn = 0;
                                    foreach ($doc['authorizers'] as $authorizer): ?>
                                        <div class="d-flex mb-1">
                                            <span class="mr-1"><?= ++$sn; ?>.</span>
                                            <span><?= $authorizer['employee_f_name'] ?? '' ?> <?= $authorizer['employee_l_name'] ?? '' ?> (<?= $authorizer['pos_name'] ?? '' ?>)</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php if ($doc['current_user_authorizer']['g_doc_auth_status'] === '0'): ?>
                                    <form class="mt-3" id="manage-document-upload-form" novalidate>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="authorizers">Add Authorizers</label>
                                                    <select class="form-control select2-multiple" id="authorizers"
                                                            name="authorizers[]"
                                                            data-toggle="select2" multiple="multiple" required>
                                                        <option value="" disabled>Select authorizers</option>
                                                        <?php foreach ($hods as $department => $employees): ?>
                                                            <?php if (!empty($employees)): ?>
                                                                <optgroup label="<?= $department ?>">
                                                                    <?php foreach ($employees as $employee): ?>
                                                                        <option value="<?= $employee['user_id'] ?>">
                                                                            <?= $employee['pos_name'] . ' (' . $employee['user_name'] . ')' ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </optgroup>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select the reviewers.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox float-left">
                                                        <input type="checkbox" class="custom-control-input"
                                                               name="final_review" id="final-review">
                                                        <label class="custom-control-label" for="final-review">
                                                            Mark this update as final
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                        <div class="col-12">-->
                                            <!--                                            <div class="form-group">-->
                                            <!--                                                <div class="custom-control custom-checkbox float-left">-->
                                            <!--                                                    <input type="checkbox" class="custom-control-input"-->
                                            <!--                                                           name="no_further_changes" id="no-further-changes">-->
                                            <!--                                                    <label class="custom-control-label" for="no-further-changes">-->
                                            <!--                                                        Prevent further changes to the document-->
                                            <!--                                                    </label>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                        </div>
                                        <input type="hidden" id="g-doc-id" name="g_doc_id"
                                               value="<?= $doc['g_doc_id'] ?>">
                                        <div class="row mt-3">
                                            <div class="col-lg-12 offset-lg-12">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-primary btn-block"
                                                            id="submitButton">
                                                        Update Document Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <div class="alert alert-info fade show mt-3" role="alert">
                                        You can no longer make edits to this document.
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Alert Modal -->
    <div id="loading-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <h4 class="mt-2" id="modalTitle">Saving Changes</h4>
                        <p class="mt-3" id="modalText">
                            Please wait while we save your document changes.
                        </p>
                        <button type="submit" class="btn btn-info" disabled>
                            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                            Please wait...
                        </button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?= $this->endSection(); ?>

<?= $this->section('extra-scripts'); ?>
<?= view('pages/g-doc/_g-doc-scripts.php') ?>
    <script src="/assets/libs/pspdfkit/pspdfkit.js"></script>
    <script>
        $(document).ready(() => {
            const licenseKey = '<?= $licenseKey ?>';
            console.log(licenseKey)
            let hasUnsavedChanges = false;
            const saveChangeButton = $('#saveButton')
            const noEdits = parseInt('<?=$doc['current_user_authorizer']['g_doc_auth_status']?>')
            let signatureUrl = ''
            const signature = '<?=$doc['current_user_authorizer']['employee_signature']?>'
            if (signature) {
                signatureUrl = `<?= base_url('uploads/signatures/') ?>${signature}`
            }

            PSPDFKit.load({
                container: "#pspdfkit",
                document: "<?= base_url('uploads/g-docs/' . $doc['g_doc_upload']) ?>",
                autoSaveMode: PSPDFKit.AutoSaveMode.DISABLED,
                licenseKey,
                enableHistory: true,
            }).then(async function (instance) {
                console.log("PSPDFKit loaded", instance);
                instance.addEventListener("document.saveStateChange", (event) => {
                    hasUnsavedChanges = event.hasUnsavedChanges;
                    if (hasUnsavedChanges) {
                        saveChangeButton.show();
                    } else {
                        saveChangeButton.hide();
                    }
                });
                window.addEventListener("beforeunload", function (event) {
                    if (hasUnsavedChanges) {
                        event.preventDefault();
                        event.returnValue = true;
                    }
                });
                saveChangeButton.on('click', async function () {
                    await saveDocument(instance);
                });
                if (noEdits !== 0) {
                    const state = instance.viewState
                    const newState = state.set('readOnly', true)
                    instance.setViewState(newState)
                } else {
                    const signatureToolbarItem = {
                        type: "custom",
                        id: "add-signature",
                        title: "Add IGOV Signature",
                        onPress: async () => {
                            try {
                                const request = await fetch(signatureUrl);
                                if (!request.ok) {
                                    throw new Error('Failed to fetch the image for the signature');
                                }
                                const blob = await request.blob();
                                if (!blob || blob.size === 0) {
                                    throw new Error('The fetched image is invalid or empty');
                                }
                                const imageAttachmentId = await instance.createAttachment(blob);
                                const currentPageIndex = instance.viewState.currentPageIndex;
                                const annotation = new PSPDFKit.Annotations.ImageAnnotation({
                                    pageIndex: currentPageIndex,
                                    isSignature: true,
                                    contentType: 'image/jpeg',
                                    imageAttachmentId,
                                    description: 'Example Image Annotation',
                                    boundingBox: new PSPDFKit.Geometry.Rect({
                                        left: 10,
                                        top: 20,
                                        width: 150,
                                        height: 150,
                                    }),
                                });

                                // Let the user choose where to place the signature
                                const newAnnotation = await instance.create(annotation, {pickPlacement: true});
                                console.log('Signature annotation placed:', newAnnotation);
                            } catch (error) {
                                console.error('Error adding signature:', error);
                            }
                        }
                    };

                    // Try to fetch the image before adding the toolbar item
                    try {
                        const request = await fetch(signatureUrl);

                        if (request.ok) {
                            // Add the custom toolbar item to the existing toolbar if the image fetch is successful
                            instance.setToolbarItems([
                                ...PSPDFKit.defaultToolbarItems, // Keep the default items
                                signatureToolbarItem // Add the custom signature item
                            ]);
                        } else {
                            throw new Error('Failed to fetch image for toolbar item.');
                        }
                    } catch (error) {
                        console.error('Error initializing signature toolbar item:', error);
                    }
                }
            }).catch(function (error) {
                console.error("Error loading PSPDFKit:", error.message);
                alert('Oops! Seems an issue occurred on our end. Please try again later.');
            });

            async function saveDocument(instance) {
                jQuery.noConflict()
                $('#loading-modal').modal('toggle');
                await instance.save();
                const arrayBuffer = await instance.exportPDF();
                const blob = new Blob([arrayBuffer], {type: 'application/pdf'});
                const formData = new FormData();
                formData.append("file", blob);
                formData.append("g_doc_id", <?= $doc['g_doc_id'] ?>);
                $.ajax({
                    url: '<?=site_url('/g-docs/save-doc-changes')?>',
                    type: 'post',
                    data: formData,
                    success: response => {
                        if (response.success) {
                            Swal.fire('Confirmed!', response.message, 'success').then(() => location.reload())
                        } else {
                            Swal.fire('Sorry!', response.message, 'error')
                        }
                        jQuery.noConflict()
                        $('#loading-modal').modal('toggle');
                    },
                    error: () => {
                        // Handle any errors during the request
                        jQuery.noConflict()
                        $('#loading-modal').modal('toggle');
                        Swal.fire('Error!', 'There was an error submitting the form.', 'error');
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                })
            }
        });
    </script>
<?= $this->endSection(); ?>
