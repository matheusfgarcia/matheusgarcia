<?php
$this->pageTitle=Yii::app()->name . ' - Map';
$this->breadcrumbs=array(
	'Map',
);
?>


<h1>Map</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'map-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

  <head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
      #tango {
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 10px;
      }
      #container {
        background-image: url('http://www.html5canvastutorials.com/demos/assets/map-background.png');
        display: inline-block;
        overflow: hidden;
        height: 262px;
        width: 580px;
        background-position: 1px 1px;
      }
    </style>
  </head>
  <body>
    <div id="container"></div>
    <script src="http://www.html5canvastutorials.com/libraries/kinetic-v4.3.1-beta2.js"></script>
    <script src="http://www.html5canvastutorials.com/demos/assets/worldMap.js"></script>
    <script>
      var stage = new Kinetic.Stage({
        container: 'container',
        width: 578,
        height: 260
      });
      var mapLayer = new Kinetic.Layer({
        y: 20,
        scale: 0.6
      });
      var topLayer = new Kinetic.Layer({
        y: 20,
        scale: 0.6
      });

      /*
       * loop through country data stroed in the worldMap
       * variable defined in the worldMap.js asset
       */
      for(var key in worldMap.shapes) {
        var path = new Kinetic.Path({
          data: worldMap.shapes[key],
          fill: '#eee',
          stroke: '#555',
          strokeWidth: 1
        });

        path.on('mouseover', function() {
          this.setFill('#111');
          this.moveTo(topLayer);
          topLayer.drawScene();
        });

        path.on('mouseout', function() {
          this.setFill('#eee');
          this.moveTo(mapLayer);
          topLayer.drawScene();
        });

        mapLayer.add(path);
      }

      stage.add(mapLayer);
      stage.add(topLayer);

    </script>
  </body>


<?php $this->endWidget(); ?>