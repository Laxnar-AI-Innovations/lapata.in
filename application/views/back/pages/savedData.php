<style>
    .e{overflow:hidden;text-overflow:ellipsis;direction:ltr;max-width:100%;white-space:nowrap;}
    .select2-selection__choice__remove{
        background:transparent!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
        font-size: 13px !important;
    }
    select
    {
        -webkit-appearance: auto !important;
    }
    td{
        white-space:pre-wrap!important; 
        word-wrap:break-word!important;
    }
    th{
        text-align:center!important;
    }
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Saved Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Saved Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <table class="table table-striped table-bordered datatable text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Response</th>
                                    <th>Date created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $getData = $this->db->query('select * from savedSession')->result_array();
                                    if(count($getData) > 0)
                                    {
                                        $i=0;
                                        foreach($getData as $k=>$v)
                                        {
                                            $i++;
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= ($v['response']); ?></td>
                                    <td><?= $v['dateCreated']; ?></td>
                                </tr>
                                <?php } }else{ ?>
                                <tr>
                                    <td colspan="3">No Data Found...</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->