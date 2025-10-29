<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title>그린코리아21</title> 
<meta http-equiv="content-type" content="text/html;charset=euc-kr" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<meta name="keywords" content="키워드" />
<meta name="description" content="검색어" />
<link rel="stylesheet" type="text/css" href="/common/css/efront.css" />
<script type="text/javascript" src="/common/js/efront.js"></script> 

<script type='text/javascript' src='/common/js/jquery-1.7.min.js'></script>
<script type='text/javascript' src='/common/js/slides.jquery.js'></script>


<script type="text/javascript">

var TimeOut         = 300;
var currentLayer    = null;
var currentitem     = null;

var currentLayerNum = 0;
var noClose         = 0;
var closeTimer      = null;

// Open Hidden Layer
function mopen(n)
{
    var l  = document.getElementById("menu"+n);
    var mm = document.getElementById("mmenu"+n);
	
    if(l)
    {
        mcancelclosetime();
        l.style.visibility='visible';

        if(currentLayer && (currentLayerNum != n))
            currentLayer.style.visibility='hidden';

        currentLayer = l;
        currentitem = mm;
        currentLayerNum = n;			
    }
    else if(currentLayer)
    {
        currentLayer.style.visibility='hidden';
        currentLayerNum = 0;
        currentitem = null;
        currentLayer = null;
	}
}

// Turn On Close Timer
function mclosetime()
{
    closeTimer = window.setTimeout(mclose, TimeOut);
}

// Cancel Close Timer
function mcancelclosetime()
{
    if(closeTimer)
    {
        window.clearTimeout(closeTimer);
        closeTimer = null;
    }
}

// Close Showed Layer
function mclose()
{
    if(currentLayer && noClose!=1)
    {
        currentLayer.style.visibility='hidden';
        currentLayerNum = 0;
        currentLayer = null;
        currentitem = null;
    }
    else
    {
        noClose = 0;
    }

    currentLayer = null;
    currentitem = null;
}

// Close Layer Then Click-out
document.onclick = mclose; 
</script>

</head>  
<body>
<!--레이아웃 시작-->
<div id="wrapbodys">
<div id="wrap">

	<!--상단 시작-->
	<div id="header">

		<div class="box">

			<!--상단 유틸리티 시작-->
			<ul class="unb_top">
				<li><a href="/member/login.html" target="_self"><a href='/member/login.html?prev=/customer/customer01.html'>로그인</a></a></li>
				<li>ㅣ</li>
				<li><a href="/member/join.html" target="_self"><a href='/member/join.html'>회원가입</a></a></li>
				<li>ㅣ</li>
				<li><a href="/member/order_list.html" target="_self">주문/배송조회</a></li>
				<li>ㅣ</li>
				<li><a href="/member/mypage.html" target="_self">장바구니</a></li>
				<li>ㅣ</li>
				<li><a href="/member/wishlist.html" target="_self">관심상품</a></li>
				<li>ㅣ</li>
				<li><a href="/customer/customer01.html" target="_self">고객센터</a></li>
				<li>ㅣ</li>
				<li><a href="javascript:window.external.AddFavorite('http://greenkorea.1004hp.com', '그린코리아21') "><span class="red">+ 즐겨찾기추가</span></a></li>
			</ul>
			<!--상단 유틸리티 끝-->				

		<div class="clear">
		</div>






	<div class="clear">
			</div>

			<div style="height:96px;">
						<!--좌측 메뉴 시작-->

						<!--로고 시작-->
							<div class="logo_top">
								<a href="/index.html" target="_self"><img src="/common/images/top_logo.gif" alt="" /></a>
							</div>
							<!--로고 끝-->
						
						<!--좌측 메뉴 끝-->

							<div class="unb_gnb">
							<link href="/admin/search/skin/searchBasic/style.css" rel="stylesheet" type="text/css" />
<form action="/member/search.html" method="get">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input name="total_searchkey" value="" type="text" class="input_search" size="50"></td>
    <td style="padding-left:3px"><input type="image" src="/admin/search/skin/searchBasic/image/btn_search.gif" width="45" height="33" border="0"></td>
  </tr>
</table>
</form>							
						</div>



						<!--우측 메뉴 시작-->
						<div class="unb_gnb2">
							<ul>
								
								
								<li><img src="/common/images/주문.gif" alt="" /></li>

							</ul>
						</div>
						<!--우측 메뉴 끝-->

			</div>

		<div class="clear">
		</div>


				<!--상단 글로벌네비게이션 시작-->
				<div class="gnb">

					<div class="menu">
						<ul id="m">
							<li>
							<a href="/company/company01.html" class="menu" id="mmenu0" onmouseover="mopen(0);" onmouseout="mclosetime();"><img src="/common/images/m01.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu0" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">
								<a href="/company/company01.html">인사말</a>
								<a href="/company/company02.html">조직도</a>
								<a href="/company/company03.html">판매대리점</a>
								<a href="/company/company04.html">오시는길</a>
							</div>
							</li>
							<li>
							<a href="/equipment/equipment01.html" class="menu" id="mmenu1" onmouseover="mopen(1);" onmouseout="mclosetime();"><img src="/common/images/m02.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu1" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">
								<a href="/equipment/equipment01.html">GK-자동투입장치</a>
								<a href="/equipment/equipment02.html">GK-자동분사장치</a>
								<a href="/equipment/equipment03.html">GK-자동분사장치Ⅱ</a>
								<a href="/equipment/equipment04.html">GK-장치,부품</a>
							</div>
							</li>
							<li>
							<a href="/product/product01.html" class="menu" id="mmenu2" onmouseover="mopen(2);" onmouseout="mclosetime();"><img src="/common/images/m03.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu2" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">
								<a href="/product/product01.html">배관관리용품</a>
								<a href="/product/product02.html">특수제거제</a>
								<a href="/product/product03.html">탈취제</a>
								<a href="/product/product04.html">친환경 미생물제품</a>
								<a href="/product/product05.html">수처리 약품</a>
								<a href="/product/product06.html">수처리 미생물제품</a>
								<a href="/product/product07.html">수처리 장치</a>
							</div>
							</li>
							<li>
							<a href="/data/data01.html" class="menu" id="mmenu3" onmouseover="mopen(3);" onmouseout="mclosetime();"><img src="/common/images/m04.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu3" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">
								<a href="/data/data01.html">설명서</a>
								<a href="/data/data02.html">MSDS</a>
								<!--<a href="/data/data03.html">이용안내</a>-->
							</div>
							</li>
							<li>
							<a href="/customer/customer01.html" class="menu" id="mmenu4" onmouseover="mopen(4);" onmouseout="mclosetime();"><img src="/common/images/m05.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu4" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">
								<a href="/customer/customer01.html">공지사항</a>
								<!--<a href="/customer/customer02.html">게시판</a>-->
								<!--<a href="/customer/customer03.html">문의사항</a>-->
								<a href="/customer/customer05.html">구매후기</a>
								<a href="/customer/customer06.html">질문과 답변</a>
								<a href="/customer/customer04.html">견적의뢰</a>
							</div>
							</li>
							<li>
							<a href="/shopping/shopping01.html" class="menu" id="mmenu5" onmouseover="mopen(5);" onmouseout="mclosetime();"><img src="/common/images/m06.png"></a>
							<div class="submenu" style="background:#e6e6e6; filter:alpha(opacity=80);" id="menu5" onmouseover="mcancelclosetime()" onmouseout="mclosetime();">

							</div>
							</li>
						</ul>
					</div>

				</div>
				<!--상단 글로벌네비게이션 끝-->
		
	</div>
	<!--상단 끝-->		
			<!--왼쪽메뉴 시작-->
			<div class="snb">

			  <h2>고객센터</h2>
			  <div class="leftArea">
				<ul>
				  <li id="on"><a href="customer01.html">공지사항</a></li>
				  <!--<li ><a href="customer02.html">게시판</a></li>-->
				  <!--<li ><a href="customer03.html">문의사항</a></li>-->
				  <li ><a href="customer05.html">구매후기</a></li>
				  <li ><a href="customer06.html">질문과 답변</a></li>
				  <li ><a href="customer04.html">견적의뢰</a></li>
				</ul>
			  </div>

			<!--<div class="banner">
			 <img src="/common/images/banner01.jpg" alt="" />
			 <p style="padding-top:10px"><img src="/common/images/banner02.jpg" alt="" /></p>
			 <p style="padding-top:10px"><img src="/common/images/banner03.jpg" alt="" /></p>
			</div>-->

			</div>
			<!--왼쪽메뉴 끝-->
	<!--컨테이너 시작-->
	<div id="container">
		
		<!--컨테이너 박스 시작-->
		<div class="box">

			<!--컨텐츠 시작-->
			<div class="subcontents">

				<!--타이틀 시작-->
				<div class="box_title">
				
					<div class="title">
						<span class="blue">CUSTOMER</span><br />공지사항
					</div>

					<div class="path">
						HOME > 고객센터 > <strong>공지사항</strong>
					</div>

				</div>
				<div class="clear">
				</div>
				<!--타이틀 끝-->

				<!--내용 시작-->		
				<div class="text_sub">
					<script Language="JavaScript" src="/admin/js/lib.js"></script><link href="/admin/bbs/skin/bbsBasic/style.css" rel="stylesheet" type="text/css">
<!-- 카테고리 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><td align="left"></td></tr>
</table>
<!-- 카테고리 끝-->

<!-- 게시물 시작 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="10" height="2" bgcolor="#a9a9a9"></td>
  </tr>
  <tr bgcolor="#f9f9f9">
  	<td width="1%"></td>
    <td width="8%" height="30" align="center"><strong>번호</strong></td>
    <td align="center"><strong>제목</strong></td>
    <td width="12%" align="center"><strong>작성자</strong></td>
    <td width="12%" align="center"><strong>작성일</strong></td>
    <td width="8%" align="center"><strong>조회</strong></td>
    <!--		<td width="8%" align="center"><strong>추천</strong></td>
    -->                    
  </tr>  
  <tr>
    <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
  </tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28"><font color=red>[공지]</font></td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5408&page=&code=notice'>* 쇼핑몰 상품 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2023-03-08</td>
	  <td align="center">265</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">24</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5442&page=1&code=notice'>* 2025년 여름휴가 공지 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2025-07-15</td>
	  <td align="center">45</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">23</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5436&page=1&code=notice'>* 2024년 여름 휴가 공지 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2024-07-31</td>
	  <td align="center">81</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">22</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5423&page=1&code=notice'>* 2024년 설날 연휴 휴무 공지 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2024-02-05</td>
	  <td align="center">92</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">21</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5420&page=1&code=notice'>* 2023년 추석연휴 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2023-09-18</td>
	  <td align="center">122</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">20</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5418&page=1&code=notice'>* 8월14일 택배쉬는날 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2023-08-11</td>
	  <td align="center">129</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">19</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5417&page=1&code=notice'>* 2024년 여름 휴가 공지 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2023-07-27</td>
	  <td align="center">125</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">18</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5405&page=1&code=notice'>* 2023년 설 명절 연휴 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2023-01-13</td>
	  <td align="center">145</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">17</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5396&page=1&code=notice'>* 2022년 추석연휴 안내공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2022-09-05</td>
	  <td align="center">158</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">16</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5393&page=1&code=notice'>* 2022년 추석연휴 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2022-08-29</td>
	  <td align="center">449</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">15</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5391&page=1&code=notice'>* 2022년 여름 휴가 공지 안내 * </a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2022-07-26</td>
	  <td align="center">164</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">14</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5385&page=1&code=notice'>* 2022년 설 명절 연휴 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2022-01-20</td>
	  <td align="center">196</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">13</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5374&page=1&code=notice'>* 2021년 여름휴가 공지 안내 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2021-07-26</td>
	  <td align="center">281</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">12</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5346&page=1&code=notice'>* 2021년 설날 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2021-02-05</td>
	  <td align="center">302</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">11</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5337&page=1&code=notice'>* 2020년 추석 연휴 택배 공지 *</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2020-09-24</td>
	  <td align="center">388</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">10</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5330&page=1&code=notice'>2020년도 여름 휴가 공지</a>     </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2020-07-30</td>
	  <td align="center">597</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">9</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5309&page=1&code=notice'>* 2020년 설날 택배 공지 *</a>    <img src='/admin/bbs/skin/bbsBasic/image/hot.gif' border='0' align='absmiddle'> </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">관리자</td>
	  <td align="center">2020-01-16</td>
	  <td align="center">708</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">8</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5294&page=1&code=notice'>2019년 추석 연휴 택배 공지 </a>    <img src='/admin/bbs/skin/bbsBasic/image/hot.gif' border='0' align='absmiddle'> </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2019-09-03</td>
	  <td align="center">966</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">7</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5289&page=1&code=notice'>2019년 여름휴가 공지</a>    <img src='/admin/bbs/skin/bbsBasic/image/hot.gif' border='0' align='absmiddle'> </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">관리자</td>
	  <td align="center">2019-07-26</td>
	  <td align="center">918</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">6</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5265&page=1&code=notice'>* 2019년 05월01일 근로자의날 택배 공지 *</a>    <img src='/admin/bbs/skin/bbsBasic/image/hot.gif' border='0' align='absmiddle'> </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2019-04-29</td>
	  <td align="center">952</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr>	<tr>
		<td align="center"></td>
	  <td align="center" height="28">5</td>
		<td align="left" style="padding-left:10px;word-break:break-all;">
	    <table border="0" cellpadding="0" cellspacing="0">
	    <tr><td height="1"></td></tr>
	    <tr>
	      <td rowspan="2" align="center"></td>
	      <td style="padding-left:3px"><font class="prdqna"></font></td>
	    </tr>
	    <tr>
	    	<td style="padding-left:3px"> <a href='/customer/customer01.html?ptype=view&idx=5260&page=1&code=notice'>* 2019년 설날 연휴 택배 공지 *</a>    <img src='/admin/bbs/skin/bbsBasic/image/hot.gif' border='0' align='absmiddle'> </td>
	    </tr>
	    <tr><td height="1"></td></tr>
	    </table>
		</td>
	  <td align="center">지케이그린코리아</td>
	  <td align="center">2019-01-25</td>
	  <td align="center">1017</td>
	  <!--	  <td align="center">0</td>
	  -->	</tr>
	<tr>
	  <td colspan="10" height="1" bgcolor="#d7d7d7"></td>
	</tr></table>
<!-- 게시물 끝 -->   
  
<!-- 페이지 번호 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center">
			    <table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center'>      <table border='0' cellspacing='0' cellpadding='0'>        <tr>          <td width='22' height='50'><a href='?ptype=&page=1&code=notice'><img src='/admin/bbs/skin/bbsBasic/image/btn_prev2.gif' align='absmiddle' border=0'></a></td>          <td width='22'><a href='?ptype=&page=1&code=notice'><img src='/admin/bbs/skin/bbsBasic/image/btn_prev.gif' align='absmiddle' border=0'></a></td>          <td align='center'>&nbsp; <b>1</b> / <a href='?ptype=&page=2&code=notice'> 2 </a> /           &nbsp; </td>          <td width='22' align='right'><a href='?ptype=&page=2&code=notice'><img src='/admin/bbs/skin/bbsBasic/image/btn_next.gif' align='absmiddle' border='0'></a></td>          <td width='22' align='right'><a href='?ptype=&page=2&code=notice'><img src='/admin/bbs/skin/bbsBasic/image/btn_next2.gif' align='absmiddle' border='0'></a></td>        </tr>      </table>    </td></tr></table>    </td>
  </tr>
</table>  
<!-- 페이지 번호끝 -->

<!-- 검색 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center" bgcolor="#f9f9f9" style="border-top:1px solid #a9a9a9; border-bottom:1px solid #d7d7d7; padding:5px 0px;">
        
        <table width="0%" border="0" cellpadding="0" cellspacing="0">
        <form name="sfrm" action="/customer/customer01.html">
      	<input type="hidden" name="code" value="notice">
      	<input type="hidden" name="category" value="">
          <tr>
            <td style="padding-right:10px;"><img src="/admin/bbs/skin/bbsBasic/image/search_tit.gif" width="47" height="9" border="0" /></td>
            <td style="padding-right:5px;">
							<select name="searchopt" class="select">
							<option value="subject">제 목</option>
							<option value="content">내 용</option>
							<option value="subcon">제목 + 내용</option>
							<option value="name">작성자</option>
							<option value="memid">아이디</option>
							</select>	
							<script language="javascript">
							<!--
							searchopt = document.sfrm.searchopt;
							for(ii=0; ii<searchopt.length; ii++){
							 if(searchopt.options[ii].value == "")
							    searchopt.options[ii].selected = true;
							}
							-->
							</script>
            </td>
            <td style="padding-right:10px;"><input name="searchkey" type="text" class="search_input" value="" size="50"></td>
            <td><input type="image" src="/admin/bbs/skin/bbsBasic/image/btn_search.gif" border="0" align="absmiddle" width="75" height="21" /></td>
          </tr>
        </form>
        </table>
        
    </td>
  </tr>
</table>  
<!-- 검색 끝 -->                                                 

<!-- 버튼 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
  	<td align="left" style="padding-top:10px">   </td>
    <td align="right" style="padding-top:10px"><a href='/customer/customer01.html?ptype=list&code=notice'><img src='/admin/bbs/skin/bbsBasic/image/btn_list.gif' border='0'></a>&nbsp;</td>
  </tr>
</table>  
<!-- 버튼 끝 -->				</div>
				<!--내용 끝-->

			</div>
			<!--컨텐츠 끝-->

		</div>
		<div class="clear">
		</div>
		<!--컨테이너 박스 끝-->
	
	</div>
	<!--컨테이너 끝-->



</div>
</div>
<!--레이아웃 끝-->


<!--하단레이아웃 시작-->
<div id="footerbody">
<div id="footer">

	<!--하단내용 시작-->
	<div class="box">

		<div class="footer_img">
		 <img src="/common/images/footer_logo.gif" alt="" />
		</div>

		<div class="copy">
			<ul class="unb_footer">
				<li><a href="/info/info01.html" target="_self">이용약관</a></li>
				<li>|</li>
				<li><a href="/company/company04.html" target="_self">오시는길</a></li>
				<li>|</li>
				<li><a href="/member/join.html" target="_self"><span class="red">개인정보취급방침</span></a></li> 
			</ul>

			<div class="clear">
			</div>

			<div class="copyright">
			  상호: 지케이그린코리아 주식회사  &nbsp;&nbsp;  경기도 광명시 금오로707번길 43-4  &nbsp;&nbsp;  대표이사 : 김익수    <br/>
			  사업자등록번호: 775-88-01061   &nbsp;&nbsp; 통신판매업신고번호:제 2018-서울구로-1010 호 &nbsp;&nbsp;   TEL : 02-2060-2018   &nbsp;&nbsp; FAX : 02-6455-4936 &nbsp;&nbsp;   E-mail: kim0kim0@naver.com<br/>
			  Copyright(c)2010greenkorea21.All Right Reserved.<br/>
  
			</div>
		</div>

	</div>
	<div class="clear">
	</div>
	<!--하단내용 끝-->

</div>
</div>
<!--하단레이아웃 끝-->

</body> 
</html> 

