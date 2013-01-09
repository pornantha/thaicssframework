<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>HTML5 CSS FrameWork</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
<script src="scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<script src="scripts/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="scripts/jquery.mousewheel.js" type="text/javascript"></script>
<script src="scripts/mwheelIntent.js" type="text/javascript"></script>
<script src="scripts/jquery.jscrollpane.js" type="text/javascript"></script>
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

<?php //include('navigation.php'); ?>
<div class="has-side head clear">
	<div class="container">
		<header class="rps">
			<h1 id="logo"><a href="#"><img src="logo.png" alt="dealfish" /></a></h1>
			<nav role="navigation" id="navigation" class="tchf-ch _ch-na">			
				
					<h2 class="resp-hdr _as-vdd"><span>หมวดหมู่สินค้า</span></h2>
					<ul>
						<li><a href="#">รถมือสอง</a></li>
						<li><a href="#">อสังหาริมทรัพย์</a></li>
						<li><a href="#">แฟชั่น</a></li>
						<li><a href="#">สินค้าไอที</a></li>
						<li><a href="#">ไลฟ์สไตล์</a></li>
						<li><a href="#">ธุกิจ</a></li>
						<li><a href="#">ท่องเที่ยว</a></li>
						<li><a href="#">สุขภาพและความงาม</a></li>
						<li><a href="#">ตกแต่งบ้านและสวน</a></li>
						<li><a href="#">การศึกษา</a></li>
					</ul>
					<span class="-btn-close _s-ps-a">X</span>					
											
			</nav>
			<div id="main-area" class="ch-na">
					<h2 class="resp-hdr _as-vdd"><span>ทั่วประเทศ</span></h2>
					<ul>
						<li><a href="#">กรุงเทพ</a></li>
						<li><a href="#">ภาคเหนือ</a></li>
						<li><a href="#">ภาคกลาง</a></li>
						<li><a href="#">ภาคตะวันออก</a></li>
						<li><a href="#">ภาคตะวันออกเฉียงเหนือ</a></li>
						<li><a href="#">ภาคใต้</a></li>
					</ul>
					<span class="-btn-close _s-ps-a">X</span>	
			</div>
			<div id="global-search">
				<h2 class="resp-hdr _as">ค้นหา</h2>
				<form class="global-search clear">
					<div class="tchf-ch-la">
						<p><label for="q">ซื้อง่าย ขายฟรี</label><span><input type="text" id="q" /></span></p>
						<div >
							<select>
								<option value="0">หมวดหมู่ทั้งหมด</option>
								<option value="2">รถยนตร์</option>
								<option value="3">เสื้อผ้า</option>
								<option value="4">พระเครื่อง</option>
							</select>
						</div>
						<p class="submit"><input type="submit" value="Search" /></p>
					</div>					
				</form>
				<span class="-btn-close _s-ps-a">X</span>
			</div>
			<div id="user-interaction">
				<h2 class="resp-hdr _as">สมาชิก</h2>
				<div>
					<span><a href="#">Facebook Connect</a></span>
					<span><a href="#">เข้าสู่ระบบ</a></span>
					<span><a href="#">สมัครสมาชิก</a></span>
				</div>
				<span class="-btn-close _s-ps-a">X</span>
			</div>
			<div id="create-post">
				<a href="#">ลงประกาศสินค้า</a>				
			</div>
		</header>
	</div>
</div>
<div class="has-side">
	<div class="side-cover">
		<div class="container main tchf-ch-la _ch-c9-3x">
			<div>main</div>
			<div>Aside</div>
		</div>
		<div class="container side">
			<div>side</div>
		</div>
	</div>
</div>

<br class="horizontal sample">

<script>
	$("*[class*=\"_as\"]").click(function () {
		$("*[class*=\"_as\"]").removeClass('active');
		$(this).addClass('active'); 
    });
	$('.-btn-close').click(function () {
		$('[class*=\"_as\"]').removeClass('active');
    });
</script>
</html>
