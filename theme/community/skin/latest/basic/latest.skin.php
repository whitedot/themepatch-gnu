<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="lt">
    <h2 class="lt_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
    <div class="lt_box">
    	<ul>
	    <?php for ($i=0; $i<count($list); $i++) {  ?>
	        <li>
	            <?php
	            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
	
	            echo "<a href=\"".$list[$i]['href']."\"> ";
	            if ($list[$i]['is_notice'])
	                echo "<strong>".$list[$i]['subject']."</strong>";
	            else
	                echo $list[$i]['subject'];
	
	            echo "</a>";
				if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i><span class=\"sound_only\">인기글</span></span>";
				if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
	            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
	            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }
	
	            echo $list[$i]['icon_reply']." ";
	           	if ($list[$i]['icon_file']) echo " <span class=\"download_icon\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i><span class=\"sound_only\">첨부파일</span></span>" ;
	            if ($list[$i]['icon_link']) echo " <span class=\"link_icon\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i><span class=\"sound_only\">링크첨부</span></span>" ;
	
	            if ($list[$i]['comment_cnt'])  echo "
	            <span class=\"lt_cmt\"><span class=\"sound_only\">댓글</span>".$list[$i]['comment_cnt']."</span>";
	
	            ?>
	            <div class="lt_info">
	            	<span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>              
	            </div>
	        </li>
	    <?php }  ?>
	    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
	    <li class="empty_li">게시물이 없습니다.</li>
	    <?php }  ?>
	    </ul>
    </div>
    <div class="lt_more"><a href="<?php echo get_pretty_url($bo_table); ?>"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a></div>
</div>
