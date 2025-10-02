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

                        <table class="table text-center table-bordered datatable">
                            <thead>
                                <tr>
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
                                ?>
                                        <tr style="vertical-align:middle;">
                                            <td><?= $i; ?></td>
                                            <td>
                                                <img src="<?= base_url(); ?>upload/searchFacePerson/<?= $img; ?>" class="img-preview">
                                            </td>
                                        </tr>
                                    <?php
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
