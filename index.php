<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>HTML5 CSS FrameWork</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
<script src="scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<style>
@import url('framework.css');
 <?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile() AND !$detect->isipad()) {
   echo '@import url("framework-m.css");';
}
?>
@import url('demo.css');
</style>

<?php include('navigation.php'); ?>
<div class="has-side">
	<div>
		<div class="container main tchf-ch-la _ch-c9-3x">
			<div>main</div>
			<div>Aside</div>
		</div>
	</div>
</div>
<h2>Responsive Layouts</h2>
<div class="_ch-c12x container">
	<div><h1>4 Columns</h1></div>
</div>
<div class="tchf-ch-la _ch-c3-3-3-3x container">
	<div>
    	<article>
        	<h1>Uterus transplants from mother to daughter carried out in medical first</h1>
            <p>The University of Gothenburg said two Swedish women, both in their 30s, had received wombs from their mothers in</p>
        </article>
    </div>
    <div>
    	<article>
        	<h1>Mitt Romney stands by gaffe but says case not 'elegantly stated</h1>
            <p>In a hastily-convened press conference, the Republican presidential candidate confirmed the authenticity of the video and opted . </p>
        </article>
    </div>
    <br  class="separator" />
    <div>
    	<article>
        	<h1>EU heavyweights call for radical foreign and defence policy overhaul</h1>
            <p>Five of six biggest EU countries back plans which include pan-European foreign ministry and majority voting to bypass UK veto </p>
        </article>
    </div>
    <div>
    	<article>
        	<h1>Japan boosts asset purchases as slow demand and China tensions bite</h1>
            <p>The Bank of Japan has eased monetary policy by boosting asset purchases by double have hurt chances of.</p>
        </article>
    </div>
</div>
<br class="horizontal">
<div class="_ch-c12x container">
	<div><h1>3 Columns</h1></div>
</div>
<div class="tchf-ch-la _ch-c4-4-4x container">
	<div>
    	<article>
        	<header>
        	<figure class="thmb"><img src="files/photo1.jpg" alt="Put some text" /></figure>
            <h1>Japan boosts asset purchases as slow demand and China tensions bite</h1>
            </header>
            <p>The Bank of Japan has eased monetary policy by boosting asset purchases by double have hurt chances of left in white, which brought Real Madrid.</p>
        </article>
    </div>
    <div>
    	<article>
        <a href="#">
        	<header>
        	<figure class="thmb"><img src="files/photo2.jpg" alt="Put some text" /></figure>
            <h1>Mancini angered by Joe Hart's 'we threw it away' City verdict</h1>
            </header>
            <p>Manchester City's Joe Hart is beaten by a shot from Karim Benzema, left in white, which brought Real Madrid level late in their Champions League match</p>
            </a>
        </article>
    </div>
    <div>
    	<article>
        <a href="#">
        	<header>
        	<figure class="thmb"><img src="files/photo3.jpg" alt="Put some text" /></figure>
            <h1>Mancini angered by Joe Hart's 'we threw it away' City verdict</h1>
            </header>
            <p>Manchester City's Joe Hart is beaten by a shot from Karim Benzema, left in white, which brought Real Madrid level late in their Champions League match</p>
            </a>
        </article>
    </div>
</div>
<br class="horizontal sample">
<div class="_ch-c12x container">
	<div><h1>2 Columns</h1></div>
</div>
<div class="tchf-ch-la _ch-c12x container">
	<div>12</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c10-2x container">
	<div>10</div>
    <div>2</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c9-3x container">
	<div>
    	9
    </div>
    <div>3</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c8-4x container">
	<div class="tchf-ch-la _ch-p50|50">
    	<div>Inner 1</div>
        <div>Inner 2</div>
    </div>
    <div>4</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c7-5x container">
	<div>7</div>
    <div>5</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c6-6x container">
	<div>6</div>
    <div>6</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c5-7x container">
	<div>5</div>
    <div>7</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c4-8x container">
	<div>4</div>
    <div>8</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c3-9x container">
	<div>3</div>
    <div>9</div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c2-10x container">
	<div>2</div>
    <div>10</div>
</div>
<br class="horizontal">
</html>
