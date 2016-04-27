<?php
$this->pageTitle=Yii::app()->name . ' - Skills';
?>
<div id="skills">

	<div class="skillbar clearfix " data-percent="80%">
		<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
		<div class="skillbar-bar" style="background: #e67e22;"></div>
		<div class="skill-bar-percent">80%</div>
	</div> <!-- End Skill Bar -->
	
	<div class="skillbar clearfix " data-percent="75%">
		<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
		<div class="skillbar-bar" style="background: #3498db;"></div>
		<div class="skill-bar-percent">75%</div>
	</div> <!-- End Skill Bar -->

	<div class="skillbar clearfix " data-percent="80%">
		<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
		<div class="skillbar-bar" style="background: #2c3e50;"></div>
		<div class="skill-bar-percent">80%</div>
	</div> <!-- End Skill Bar -->
	

	<div class="skillbar clearfix " data-percent="75%">
		<div class="skillbar-title" style="background: #3b2515;"><span>Angular</span></div>
		<div class="skillbar-bar" style="background: #3b2515;"></div>
		<div class="skill-bar-percent">75%</div>
	</div> <!-- End Skill Bar -->


	<div class="skillbar clearfix " data-percent="90%">
		<div class="skillbar-title" style="background: #27ae60;"><span>PHP</span></div>
		<div class="skillbar-bar" style="background: #2ecc71;"></div>
		<div class="skill-bar-percent">90%</div>
	</div> <!-- End Skill Bar -->

	<div class="skillbar clearfix " data-percent="85%">
		<div class="skillbar-title" style="background: #46465e;"><span>MySQL</span></div>
		<div class="skillbar-bar" style="background: #5a68a5;"></div>
		<div class="skill-bar-percent">85%</div>
	</div> <!-- End Skill Bar -->

	<div class="skillbar clearfix " data-percent="15%">
		<div class="skillbar-title" style="background: #d35400;"><span>Photoshop</span></div>
		<div class="skillbar-bar" style="background: #e67e22;"></div>
		<div class="skill-bar-percent">15%</div>
	</div> <!-- End Skill Bar -->
	
	<div class="skillbar clearfix " data-percent="30%">
		<div class="skillbar-title" style="background: #2980b9;"><span>Laravel</span></div>
		<div class="skillbar-bar" style="background: #3498db;"></div>
		<div class="skill-bar-percent">30%</div>
	</div> <!-- End Skill Bar -->
</div>

<script>
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});
</script>