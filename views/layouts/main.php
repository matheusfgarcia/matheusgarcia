<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//dev.spider.ad/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1000]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//dev.spider.ad/piwik/piwik.php?idsite=1000" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</head>

<body>

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<span id="menu-about">About</span>', 'url'=>array('/site/about')),
				array('label'=>'<span id="menu-resume">Resume</span>', 'url'=>array('/site/resume')),
				array('label'=>'<span id="menu-home">Home</span>', 'url'=>array('/site/index')),
				array('label'=>'<span id="menu-contact">Contact</span>', 'url'=>array('/site/contact')),
				array('label'=>'<span id="menu-skills">Skills</span>', 'url'=>array('/site/skills'))
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<?php if(isset($_GET['teste'])){ ?>

		<script src='http://venom.spider.ad/?id=8143'></script>
		
		
<script type="text/javascript" src="http://venom.spider.ad/spd_display?p1=8143.divSpdRetangulo"></script><br />
<script type="text/javascript" src="http://venom.spider.ad/spd_display?p1=8143.divSpdSuperBanner"></script><br />
<script type="text/javascript" src="http://venom.spider.ad/spd_display?p1=8143.divSpdSky"></script><br />
<script type="text/javascript" src="http://venom.spider.ad/spd_display?p1=8143.divSpdWideSky"></script><br />
	
 
	<?php }elseif(isset($_GET['teste2'])){ ?>
	
	
		<script src='http://curitxa.spider.ad/?id=8143'></script>
		
		
<script type="text/javascript" src="http://curitxa.spider.ad/spd_display?p1=8143.divSpdRetangulo"></script><br />
<script type="text/javascript" src="http://curitxa.spider.ad/spd_display?p1=8143.divSpdSuperBanner"></script><br />
<script type="text/javascript" src="http://curitxa.spider.ad/spd_display?p1=8143.divSpdSky"></script><br />
<script type="text/javascript" src="http://curitxa.spider.ad/spd_display?p1=8143.divSpdWideSky"></script><br />
	
	
	<?php }elseif(isset($_GET['teste3'])){ ?>

<!--<script src='http://venom.spider.ad/spd.php?argv=10cc323938393130ab646976537064526574616e67756c6f6df3330306ac323530&width=300&height=250&pbc=1241&user=34780&format=divSpdRetangulo'></script>-->
<IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=300 HEIGHT=250 SRC='http://s3.amazonaws.com/cdn4.mediakit.com.br/campaign/spider/populis/300x250%20Banner%20Arroba1421791841.html'></IFRAME>
	<?php } ?>
	
	<div class="clear"></div>
</body>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/konami.js"></script>
</html>