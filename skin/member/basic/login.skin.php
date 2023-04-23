<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<style> 

@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
* {
	font-family: "Nanum Gothic" !important;
}
 html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video,input,textarea,img{ margin:0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align:baseline;}
article, aside, details, figcaption, figure, footer, header, hgroup,menu, nav, section { display: block;}
body { line-height: 1;}
ol, ul { list-style: none;}
blockquote, q { quotes: none;}
blockquote:before, blockquote:after,q:before, q:after { content: ''; content: none;}
table { border-collapse: collapse; border-spacing: 0;}
body,html{height:100%; }
table,fieldset,th,td,img{border:none}
img,input,select{vertical-align:middle}
#wrap{width:100%;}
 h1{ padding-top:260px; padding-bottom:38px;  width:837px; margin:0 auto;}
 .login{width:100%; height:147px; border-top:1px solid #62a122;  border-bottom:1px solid #62a122; background:#7eb942;}

 .login_in{width:837px;  height:147px; margin:0 auto; background:url(<?php echo G5_URL ?>/img/ma_login/log_bar.jpg) no-repeat  322px 34px; }
 .login_ad{float:left; margin-left:153px; margin-top:26px;}

 
 form{position:relative; float:left; margin-top:33px; margin-left:87px; width:293px; height:83px;  }
.intext{width:200px; height:25px; font-size: 12px !important;  border:1px solid #997d2d;}
.inpswd{width:200px; height:25px; font-size: 12px !important; border:1px solid #997d2d; margin-top:3px; margin-bottom:15px;}
form span{margin-left:6px; font-family:"Dotum"; font-size:12px; letter-spacing:-2px; color:#ffffff; font-weight:bold;}
form .idsave{margin-right:18px;}
 .loginbtn{position:absolute; top:0px; right:0px; width:75px; height:56px;}

.logpara{width:837px; margin:0 auto;}
.logpara p{margin-top:28px; margin-left:153px; font-family:"Dotum"; font-size:12px; line-height:20px; color:#888888;}
</style>
 
 <div id="wrap">
 <h1><center><img src="<?php echo G5_URL ?>/img/ma_login/ma_login_h.gif"/></h1>

<div class="login">
	<div class="login_in">
		<img class="login_ad" src="<?php echo G5_URL ?>/img/ma_login/ma_logad.gif" alt="양봉 산업 지원을 위한 기후 정보 서비스"/></h1>
	
	
		<form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
			<input type="hidden" name="url" value='<?php echo $login_url ?>'>
			 <input class="intext" name="mb_id" type="text" placeholder="아이디" title="아이디입력" />
			 <input class="inpswd" name="mb_password" type="password" placeholder="비밀번호 입력" title="비밀번호 입력" /><br />
			 <input class="loginbtn" type="image" src="<?php echo G5_URL ?>/img/ma_login/ma_login_btn.gif"  alt="로그인"/> 
			 <input class="chkbox" name="auto_login" value="1" type="checkbox"><span class="idsave">자동로그인</span>
		 
		 </form>
	


	
	</div><!-- login_in-->
	<div class="logpara"> 	 <p>본 시스템은 승인을 받으신 담당자만 사용이 가능합니다.<br />
따라서 권한을 가진 담당자분들께서는 아이디와 비밀번호 관리에 특별히 유의 하시길 바랍니다. </p></div>
</div><!-- login -->

 
 </div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->