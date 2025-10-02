<style>
    @media screen and (max-width: 991px)
.post-single-top {
    height: auto;
}

.post-single-top {
    position: relative;
    margin-top: 91px;
    z-index: 1;
    padding-top: 20px;
}
@media screen and (max-width: 991px)
.post-single-header {
    padding: 30px;
}

.post-single-header {
    padding: 50px;
    border-radius: 20px;
    margin-bottom: 50px;
    background-color: #f7f7f7;
}
.post-single-body .content .quote {
    margin-top: 50px;
    margin-bottom: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
</style>
<?php $idd= $this->uri->segment('3');
    $getId = $this->db->query('select * from blog where title like "%'.str_replace('-',' ',$idd).'%"')->result_array();
	$details =$this->db->query('select * from blog where id ='.$getId[0]['id'].'' )->result_array(); 
	foreach ($details as $key => $ds) {
		$title= $ds['title'];
		$b_image=$ds['image'];
		$b_details=$ds['details'];

	}
 ?>


 <!--post-single-->
    <section class="post-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="post-single-body">                   
                        <div class="content">
                              <p class="text-center">
                                <img src="<?php echo $b_image=$ds['image']; ?>" alt="" class="image-right" style="height: 220px;    border-radius: 8px;
    margin-bottom: 20px;">
                            </p>
                            <p>
                                <?php echo $b_details; ?>
                            </p>
                            <h5> Make it simple, but significant. </h5>

                            <p>
                                Oh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially
                                so to. Me unpleasing  impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain
                                my do stairs. Oh smiling amiable am so visited cordial in offices hearted.
                            </p>
                          
                            <p>
                                Oh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially
                                so to. Me unpleasing impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain
                                my do stairs. Oh smiling amiable am so visited cordial in offices hearted.
                                    Oh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially
                                so to. Me unpleasing impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain my
                                do stairs. Oh smiling amiable am so visited cordial in offices hearted.
                                    Waiting him new lasting towards. Continuing melancholy especially so to. Me unpleasing impossible in attachment announcing
                                so astonished. What ask leaf may nor upon door. Tended remain my do stairs.
                                
                            Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </p>
                            <h5>  Simplicity is the ultimate sophistication</h5>
                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident.
                            </p>
                            
                            <div class="quote">
                                <div>
                                    <i class="icon_quotations"></i>
                                </div>
                                <div>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam corrupti voluptatum, tenetur tempore suscipit veniam molestiae
                                        exercitationem, praesentium ea molestias doloremque alias voluptatibus fuga quibusdam placeat aspernatur, harum
                                        blanditiis iure.
                                    </p>
                                    <small>Henry David Thoreau.</small>
                                </div>
                                
                            
                            </div>
                          
                           
                    <!--Comments-->
                    <div class="mb-100">
                        <h5 class="mb-30">3 Comments</h5>
                        <ul class="comments">
                            <li class="comment-item">
                                <img src="assets/img/user/1.jpg" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Sarah Smith</li>
                                       
                                    </ul>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>
                                    <a href="#" class="link"><i class="arrow_left"></i> Reply</a>
                             
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/user/2.jpg" alt="">
                                <div class="content">
                            
                                    <ul class="info list-inline">
                                        <li>Umar Alexi</li>
                                    </ul>
                            
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                        fugiat aliquid sit similique!
                                    </p>
                                    <a href="#" class="link">
                                        <i class="arrow_left"></i> Reply</a>
                            
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/user/3.jpg" alt="">
                                <div class="content">
                               
                                    <ul class="info list-inline">
                                        <li>Meriam Elmiz</li>
                                    </ul>
                    
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>
                                    <a href="#" class="link"> <i class="arrow_left"></i> Reply</a>
                            
                                </div>
                            </li>
                        </ul>
                       <!--Leave-comments-->
                        <h5 class="mb-30">Leave a Reply</h5>
                        <form class="form " action="#" method="POST" id="main_contact_form">
                            <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="website" id="website" class="form-control" placeholder="website">
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-20">
                                        <input name="name" type="checkbox" value="1" required="required">
                                        <label for="name"><span>save my name , email and website in this browser for the next time I comment.</span></label>
                                    </div>
                                  
                                    <button type="submit" name="submit" class="btn-custom">
                                        Send Comment
                                    </button>
                                </div> 
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
