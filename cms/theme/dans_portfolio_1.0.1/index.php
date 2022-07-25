<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div class="latest_wr">
    <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height 
        );
        echo latest('theme/grid', 'gallery', 12, 36, 2, $options);		// 최소설치시 자동생성되는 갤러리게시판    
    ?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>