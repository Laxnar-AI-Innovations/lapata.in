<section class="wrapper bg-dark1">
    <div class="container py-14 py-md-14">
        <h2 class="display-4 mb-3 text-center">FAQ Categories</h2>
        <div class="row" style="justify-content:space-evenly;">
            <?php 
                foreach($data as $k=>$v)
                {
                    $slug = strtolower(str_replace(' ','-',$v['Name']));
            ?>
            <div class="card col-12 col-md-6 mt-5 col-lg-4 <?= ($k % 2 == 0) ? 'bg-sky' : 'bg-purple'; ?>">
                <div class="card-header p-2 <?= ($k % 2 == 0) ? 'border-light' : 'border-light'; ?>">
                    <h6 class="card-title text-center mb-0 <?= ($k % 2 == 0) ? 'text-dark' : 'text-light'; ?>"><?= $v['Name']; ?></h6>
                </div>
                <div class="card-body p-4 text-center">
                    <button type="button" onclick="location.href='<?= base_url(); ?>faqs/<?= $slug; ?>'" class="btn btn-success save">View</button>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
