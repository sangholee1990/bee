<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Admin Page</title>
 
<style> 
 html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video,input,textarea,img{ margin:0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align:baseline;}
article, aside, details, figcaption, figure, footer, header, hgroup,menu, nav, section { display: block;}
body { line-height: 1;}
ol, ul { list-style: none;}
blockquote, q { quotes: none;}
blockquote:before, blockquote:after,q:before, q:after { content: ''; content: none;}
table { border-collapse: collapse; border-spacing: 0;}
body,html{height:100%;  }
table,fieldset,th,td,img{border:none}
img,input,select{vertical-align:middle}
#wrap{width:100%; font-family:"Nanum Gothic";}
#header{height:67px; width:1003px; margin:0 auto;}
#nav{width:100%; height:35px; background:#7eb942;}
#nav_in{width:1003px;margin:0 auto;}
#content{width:1003px;margin:0 auto;}
/*header*/
#header h1{float:left; padding-top:19px;}
#header .util_log{float:right; margin-top:43px; text-align:center; width:300px;}
#header .util_log .icon{float:left;}
#header .util_log p{display:inline;   font-size:12px; color:#666666;}
#header .util_log p span{font-weight:bold;}
#header .util_log .logout{float:right;}

/*nav*/
#nav_in{display:table; font-family:"Nanum Gothic"; font-size:12px; line-height:20px; font-weight:bold;} 
#nav_in li{float:left; text-align:center; }
#nav_in li a {text-decoration:none;}

.nav_one a{display:table-cell; vertical-align:middle; width:361px; height:34px;background:url(images/ma_sub/nav_bar.gif) no-repeat right center;color:#fefdfb;}
 
.nav_two a{display:table-cell; vertical-align:middle; width:337px; height:34px;background:url(images/ma_sub/nav_bar.gif) no-repeat right center; color:#fefdfb;}

.nav_three a{display:table-cell; vertical-align:middle; width:303px; height:34px; color:#2d5109;}

/*content*/
#content{background:orange;}
.side_nav{float:left; width:160px; margin-top:5px;height:675px;  border-right:1px solid #dbdbdb;}
.side_nav li{float:left;  }
.side_nav li a{text-decoration:none;float:left;  text-indent:15px;  margin-top:10px; width:155px;  height:25px; background:url(images/ma_sub/sub_nav2.gif) no-repeat left top; color:#555555;   font-size:12px; line-height:25px; }
.side_nav li .side_nav_one{float:left;  text-indent:15px;  margin-top:15px; width:155px;  height:25px; background:url(images/ma_sub/sub_nav1.gif) no-repeat left top; color:#6e9905; font-weight:bold;
font-size:12px; line-height:25px;}

</style>
 
</head> 
  
 <body>
 <div id="wrap">
	 <div id="header">
		<div class="util_log">
			<img class="icon"/>
			<p><?=date("Y년 m월 d일");?>, <span> 관리자</span> 사용중 입니다</p>
			<a href="./logout.php"><img class="logout" src="images/ma_sub/logout.gif" alt="로그아웃"/></a>
		</div><!-- util_log -->

	 </div><!-- header -->
	 
	 <div id="nav">
		 <ul id="nav_in"></ul>
	 </div><!-- nav -->

	 <div id="content">
	   <ul class="side_nav">
		   <li><a href="ma_sub.php">밀원식물지식</a></li>
		   <li><a href="ma_sub1.php">꿀벌양봉지식</a></li>
		   <li><a class="side_nav_one">공지사항</a></li>
	   </ul>
	 </div><!-- content -->
	 <br>
	 <center>
	  
	 <iframe id="iframe4" width="60%" height="800px" src="../bbs/board.php?bo_table=notice" name="mainframe3"  scrolling="no" style="border:0px solid #ddd; scrolling=no" frameborder="0"></iframe>
	 
 </div><!-- wrap -->
 </body>
</html>