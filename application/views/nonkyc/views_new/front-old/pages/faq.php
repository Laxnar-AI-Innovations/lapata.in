<section>
	<div class="container">
		<div class="col-md-12 mb-5">

			<!--<h3 style="text-align: center;">Frequently Asked Quesions</h3>-->
			<!--<h6 style="text-align: center;">most common questions people enquiry on dell laptop service center</h6>-->
<br>
		
<style>
.accordion {
  background-color: #efefef;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border:1px solid white;
  margin-bottom:2px;
  font-weight:bold;
  
}

/*.active, .accordion:hover {*/
/*  background-color: #ccc;*/
/*}*/

.accordion:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
  font-size:20px;
  
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  /*border-left:1px solid #0095d3;*/
  /*border-bottom:2px solid #0095d3;*/
  /*border-right:1px solid #0095d3;*/
  margin-bottom:5px;
  font-size:18px;
}
</style>
<br>



   <h2 style="text-align: center;">If you have any question?</h2>

   <?php $faq= $this->db->query('select * from faqs ')->result_array(); 
   $ind=1;
    foreach ($faq as $key => $fq) { ?>
       <button class="accordion"><?php echo $ind ?>- &nbsp;<?php echo $fq['question']; ?></button>
<div class="panel">
  <p><?php echo $fq['answer']; ?></p>
</div>
 <?php  $ind=$ind+1; }
   ?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>



			</div>
			
		</div>
		
	</div>
</section>