<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML5 CSS FrameWork</title>
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
</head>

<body>
<?php include('navigation.php'); ?>
<h2>Visual Styles</h2>
<div class="_ch-c12x container">
	<div><h1>Post</h1></div>
</div>
<br class="horizontal">
<div class="tchf-ch-la _ch-c6-6x container">
	<div>
    	<article>
        	<header>
            <h1>Japan boosts asset purchases as slow demand and China tensions bite</h1>
        	<figure class="thmb"><img src="files/photo1.jpg" alt="Put some text" /></figure>            
            </header>
            <p>The Bank of Japan has eased monetary policy by boosting asset purchases by double have hurt chances of left in white, which brought Real Madrid.</p>
        </article>
    </div>
    <div class="tchf-ch-la _ch-p50|50">
    	<div>
        <article>
        <a href="#">
        	<header>
            <h1>Mancini angered by Joe Hart's 'we threw it away' City verdict</h1>
        	<figure class="thmb"><img src="files/photo2.jpg" alt="Put some text" /></figure>            
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
</div>
<br class="horizontal">
<div class="_ch-c12x container">
	<div><h1>Lists</h1></div>
</div>
<div class="tchf-ch-la _ch-c6-6x container">
	<div>
	 <div class="tchf-ch-la _ch-p50|50">
    	<div>1</div>
        <div>
        	<ul class="news thmb-list _ch-fg-l size-w60">
            	<li>
                	<div>
                        <h3>French magazine awaits backlash over cartoons</h3>
                        <figure><img src="files/IMG_0437.jpg" alt="sunset" /></figure> 
                         <p>Conservative bloggers are leading a campaign to discredit the secretly recorded video of Mitt Romney as the Republican presidential candidate's embattled team mounted a determined fightback.</p>                     
                     </div>
                </li>
            </ul>
        </div>
    </div>
    <div>
    	<ul class="news thmb-list _ch-fg-r size-w80">
            	<li>
                	<div>
                    	<a href="#">
                        <h2>French magazine awaits backlash over cartoons</h2>
                        <figure><img src="files/IMG_0437.jpg" alt="sunset" /></figure>
                        <p>Worldwide protests expected in response to published caricatures of prophet Muhammad</p>
                        </a>
                     </div>
                </li>
                <li>
                	<div>
                    <a href="#">
                        <h2>Romney fights to reassure donors</h2>
                        <figure><img src="files/IMG_0496.jpg" alt="sunset" /></figure>
                        <p>Conservative bloggers are leading a campaign to discredit the secretly recorded video of Mitt Romney as the Republican presidential candidate's embattled team mounted a determined fightback.</p>
                        </a>
                     </div>
                </li>
            </ul>
    </div>
    </div>
    <div>
    <h3 class="txt-al-c">160px</h3>
    	<ul class="news thmb-list _ch-fg-l size-w160">
            	<li>
                	<div>
                        <h2>French magazine awaits backlash over cartoons</h2>
                        <figure><img src="files/IMG_0437.jpg" alt="sunset" /></figure>
                        <p>Worldwide protests expected in response to published caricatures of prophet Muhammad</p>
                     </div>
                </li>
                <li>
                	<div>
                        <h2>Romney fights to reassure donors</h2>
                        <figure><img src="files/IMG_0496.jpg" alt="sunset" /></figure>
                        <p>Conservative bloggers are leading a campaign to discredit the secretly recorded video of Mitt Romney as the Republican presidential candidate's embattled team mounted a determined fightback.</p>
                     </div>
                </li>
            </ul>
            <h3 class="txt-al-c">200px</h3>
            <ul class="news thmb-list _ch-fg-r size-w200">
            	<li>
                	<div>
                        <h2>French magazine awaits backlash over cartoons</h2>
                        <figure><img src="files/IMG_0437.jpg" alt="sunset" /></figure>
                        <p>Worldwide protests expected in response to published caricatures of prophet Muhammad</p>
                     </div>
                </li>
                <li>
                	<div>
                        <h2>Romney fights to reassure donors</h2>
                        <figure><img src="files/IMG_0496.jpg" alt="sunset" /></figure>
                        <p>Conservative bloggers are leading a campaign to discredit the secretly recorded video of Mitt Romney as the Republican presidential candidate's embattled team mounted a determined fightback.</p>
                     </div>
                </li>
            </ul>
    </div>
</div>
<br class="horizontal">
</body>
</html>
