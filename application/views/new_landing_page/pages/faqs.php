<?php 
    $getHomeCategory = $this->db->query('select * from faqTypes where EnglishName="'.$typeData['EnglishName'].'"')->result_array();
    if(count($getHomeCategory) > 0)
    {
        $getHomeFaqs = $this->db->query('select * from faq where typeId='.$getHomeCategory[0]['Id'])->result_array();
    }else{
        $getHomeFaqs = array();
    }
    if(count($getHomeFaqs) > 0)
    {
?>
<section class="wrapper bg-dark1">
    <div class="container py-8 py-md-8">
        <div class="row justify-content-end">
            <div class="col-md-2 col-6">
                <select class="form-control" style="appearance:auto!important;" onchange="showAccordingly(this.value)">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
            </div>
        </div>
        <div class="row" style="justify-content:space-between;">
            <div class="col-md-12 col-12">
                <h2 class="display-4 mb-3 text-center englishDiv"><?= $typeData['EnglishName']; ?> FAQ</h2>
                <h2 class="display-4 mb-3 text-center hindiDiv d-none"><?= $typeData['hindiName']; ?> FAQ</h2>
            </div>
        </div>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row englishDiv" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                    ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                          <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= stripcslashes(trim($v['englishQuestion'],"'")); ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= stripcslashes(trim($v['englishAnswer'],"'")); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row hindiDiv d-none" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                    ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                          <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= stripcslashes(trim($v['hindiQuestion'],"'")); ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= stripcslashes(trim($v['hindiAnswer'],"'")); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php 
    $getFaqTypes = $this->db->query('select * from faqTypes where Status=1')->result_array();
    if(count($getFaqTypes) > 0)
    {
?>
<div class="floatingButtonWrap">
    <div class="floatingButtonInner">
        <a href="javascript:void(0)" class="floatingButton">
            <div class="menu__wrapper mt-3">
                <span>FAQ Categories</span>
            </div>
        </a>
        <ul class="floatingMenu">
            <?php 
                foreach($getFaqTypes as $k=>$v)
                {
                    $slug = strtolower(str_replace(' ','-',$v['EnglishName']));
                    $getIfAny = $this->db->query('select * from faq where typeId='.$v['Id'])->result_array();
                    if(count($getIfAny) == 0)
                    {
                        continue;
                    }
            ?>
            <li>
                <span class="englishDiv" onclick="location.href='<?= base_url(); ?>faqs/<?= $slug; ?>'"><?= $v['EnglishName']; ?></span>
                <span class="hindiDiv d-none" onclick="location.href='<?= base_url(); ?>faqs/<?= $slug; ?>'"><?= $v['hindiName']; ?></span>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
<script>
    function showAccordingly(val)
    {
        if(val == 'en')
        {
            $('.englishDiv').removeClass('d-none');
            $('.hindiDiv').addClass('d-none');
        }else{
            $('.englishDiv').addClass('d-none');
            $('.hindiDiv').removeClass('d-none');
        }
    }
</script>