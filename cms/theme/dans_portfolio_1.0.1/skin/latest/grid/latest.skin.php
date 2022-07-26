<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css?'.G5_TIME_YMDHIS.'">', 0);
$thumb_width = $options['thumb_width'];
$thumb_height = $options['thumb_height'];
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>

<div class="pic_lt">
    <ul>
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, true, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <li class="galley_li">
            <a href="<?php echo $list[$i]['href'] ?>" class="lt_img">
            	<?php echo $img_content; ?>
        	</a>
        	<a href="<?php echo $list[$i]['href'] ?>" class="lt_info">
        		<span class="lt_subject"><?php echo $list[$i]['subject'];?></span>
            	<span class="lt_date"><?php echo $list[$i]['datetime'] ?></span>              
        	</a>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>

</div>
