<style>
    #detailDiv hr {
        margin-top: 1rem !important;
        margin: 1rem;
    }

    label {
        font-weight: 600 !important;
        color: black !important;
    }

    th {
        text-align: center !important;
    }

    .img-preview {
        max-width: 100px;
        height: auto;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Search Images</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Search Images</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3 table-responsive">

                        <!-- CSRF Token Hidden Inputs -->
                        <input type="hidden" id="csrfTokenName" value="<?= $this->security->get_csrf_token_name(); ?>">
                        <input type="hidden" id="csrfTokenValue" value="<?= $this->security->get_csrf_hash(); ?>">

                        <!-- Delete button hidden initially -->
                        <button id="deleteSelectedBtn" class="btn btn-danger mb-3" style="display:none;">Delete Selected</button>

                        <table class="table text-center table-bordered datatable">
                            <thead>
                                <tr>
                                    <th data-sortable="false"><input type="checkbox" id="selectAll"></th>
                                    <th>#</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $usedImages = [];

                                $recordsWithPhoto = $this->db->query("SELECT mainPhoto FROM searchfacehistoryafterlogin WHERE mainPhoto IS NOT NULL")->result_array();
                                foreach ($recordsWithPhoto as $rec) {
                                    $usedImages[] = $rec['mainPhoto'];
                                }

                                $recordsWithAnotherPhoto = $this->db->query("SELECT mainPhoto FROM searchfacehistory WHERE mainPhoto IS NOT NULL")->result_array();
                                foreach ($recordsWithAnotherPhoto as $rec) {
                                    $usedImages[] = $rec['mainPhoto'];
                                }

                                $directory = FCPATH . 'upload/searchFacePerson/';
                                $allImages = array_diff(scandir($directory), array('..', '.'));
                                $unusedImages = array_diff($allImages, $usedImages);

                                if (count($unusedImages) > 0) {
                                    $i = 0;
                                    foreach ($unusedImages as $img) {
                                        $i++;
                                        if($i <=300)
                                        {
                                ?>
                                        <tr style="vertical-align:middle;">
                                            <td><input type="checkbox" class="imageCheckbox" value="<?= $img ?>"></td>
                                            <td><?= $i; ?></td>
                                            <td>
                                                <img src="<?= base_url(); ?>upload/searchFacePerson/<?= $img; ?>" class="img-preview">
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="3">No Unused Images Found</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- jQuery for checkbox and AJAX delete -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {

        function toggleDeleteButton() {
            if ($('.imageCheckbox:checked').length > 0) {
                $('#deleteSelectedBtn').show();
            } else {
                $('#deleteSelectedBtn').hide();
            }
        }

        // Select all checkboxes
        $('#selectAll').click(function () {
            $('.imageCheckbox').prop('checked', this.checked);
            toggleDeleteButton();
        });

        // Individual checkbox toggle
        $(document).on('change', '.imageCheckbox', function () {
            toggleDeleteButton();
        });

        // Delete selected images
        $('#deleteSelectedBtn').click(function () {
            let selected = [];
            $('.imageCheckbox:checked').each(function () {
                selected.push($(this).val());
            });

            if (selected.length === 0) {
                toastr.error("Please select at least one image to delete.");
                return;
            }

            if (!confirm("Are you sure you want to delete selected images?")) return;

            // CSRF token values
            const csrfName = $('#csrfTokenName').val();
            const csrfValue = $('#csrfTokenValue').val();

            let postData = {
                images: selected
            };
            postData[csrfName] = csrfValue;

            $.ajax({
                url: "<?= base_url('admin/deleteUnusedImages') ?>",
                method: "POST",
                data: postData,
                success: function (response) {
                    toastr.success("Selected images deleted successfully.");
                    location.reload();
                },
                error: function () {
                    toastr.error("Error deleting images.");
                }
            });
        });
    });
</script>
