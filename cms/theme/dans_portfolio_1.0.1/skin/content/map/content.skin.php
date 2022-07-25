<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/contents.css?'.G5_TIME_YMDHIS.'">', 0);
?>
<div class="content_container">
	<div class="section3" >
		<div class="cc_wrap ">
        	<div class="cc_item">
        		<div class="map_wrap">
					<div id="daumRoughmapContainer1578540378844" class="root_daum_roughmap root_daum_roughmap_landing" style="width : 100%;"></div>
            		<h2 class="d_table_title">오시는 길</h2>
            		<table class="d_table">
        				<tr>
        					<th>Address</th>
        					<td>광주광역시 서구 풍암신흥로 50번길 55</td>
        				</tr>
        				<tr>
        					<th>Tel</th>
        					<td>010 - 5842 - 1345</td>
        				</tr>
        				<tr>
        					<th>Fax</th>
        					<td>0505 - 802 - 8080</td>
        				</tr>
        				<tr>
        					<th>Email</th>
        					<td><a href="mailto:aa@naver.com">bettersan@naver.com</a></td>
        				</tr>        		
            		</table>
        		</div>
    		</div>
		</div>
	</div>
</div>

<div id="daumRoughmapContainer1580889390723" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<?php 
// http://map.daum.net/ 에서 주소로 검색하신 후 지도공유 > 지도 퍼가기로 아래 코드를 넣으시면 됩니다.
/*
 * 1. "mapWidth" : 640, 소스를 지운후
 * 2. "mapWidth" : $(".map_wrap").width(), 소스를 넣으세요.	
 * 
 * */  
?>
<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>				
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1578540378844",
		"key" : "wjcx",
		"mapWidth" : $(".map_wrap").width(),	
		"mapHeight" : "400"
	}).render();

</script>
							
<script>
var map_width = 0;
$(document).ready(function(){
	map_width = $(".map_wrap").width();
})
$(window).resize(function(){
	map_width = $(".map_wrap").width();
	$(".root_daum_roughmap").css('width', map_width);
});
</script>





