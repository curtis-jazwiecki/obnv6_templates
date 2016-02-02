<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--$headcontent-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">


body {
	font-family:Lato, Arial, Helvetica, sans-serif;
	color:#3366ff;
	margin-top:0;
	margin-left:0;
	margin-right:0;
	background:url(../../../../images/template/background.jpg) no-repeat fixed;
	background-position:top center;
}


*:focus
{
outline: none;
outline-width: 0;
}


a:link {
	color: #333333;
}

a:visited {
	color: #333333;
}

.link3 a:link {
	color:#e20000;
}

.link3 a:visited {
	color: #e20000;
}

.link3 a:hover{
    color:#333333;
    text-decoration:underline
}
.link4 a:link {
	color:#d4d1c9;
}

.link4 a:visited {
	color: #d4d1c9;
}

.link4 a:hover{
    color:#d4d1c9;
    text-decoration:underline
}

div.wrapper {
width:950px;
margin:0 auto;
text-align: center;
background-image:url(../../../images/template/wrapper_bg.png);
background-repeat: repeat-y;
}
.demo_container { width:900px; margin:0 auto; }
#sticky_navigation_wrapper { width:100%; height:50px; }
#sticky_navigation { width:100%; height:50px; background:url(../../../../images/trans-black-60.png); -moz-box-shadow: 0 0 5px #000; -webkit-box-shadow: 0 0 5px #000; box-shadow: 0 0 5px #000; }
#sticky_navigation ul { list-style:none; margin:0; padding:5px; }
#sticky_navigation ul li { margin:0; padding:0; display:inline; }
#sticky_navigation ul li a { display:block; float:left; margin:0 0 0 5px; padding:0 10px; height:40px; line-height:40px; font-size:14px; font-family:Lato, Arial, serif; font-weight:bold; color:#ddd; background:#333; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; }
#sticky_navigation a { display:block; float:left; margin:0 0 0 5px; padding:0 10px; height:40px; line-height:40px; font-size:14px; font-family:Lato, Arial, serif; font-weight:bold; color:#ddd; background:#333; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; }
#sticky_navigation ul li a:hover, #sticky_navigation ul li a.selected { color:#fff; background:#111; }

$stylesheet
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
		} else {
			$('#sticky_navigation').css({ 'position': 'relative' }); 
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});
</script>
</head>
<body>
<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
        <td><div class="link4" style="padding-left:5px; color:#d4d1c9;">$breadcrumbs&nbsp;</div></td>
      </tr>
</table>

<div id="sticky_navigation_wrapper">
		<div id="sticky_navigation">
			<div class="demo_container">
				<ul>
					<li><a href="index.php"><img src="../../../../images/template/top_nav_logo.png" border="0" /></a></li>
					<li><a href="shop.php">SHOP</a></li>
					<li><a href="specials.php">SPECIALS</a></li>
                    <li><a href="account.php"><img src="../../../../images/template/my_account.png" border="0" /></a></li>
					<li><a href="shopping_cart.php"><img src="../../../../images/template/my_cart.png" border="0" /></a></li>
                    <li><a href="checkout_shipping.php"><img src="../../../../images/template/checkout.png" border="0" /></a></li>
					<li><a href="http://www.facebook.com/pages/Humphries-Archery/199978423401961?fref=ts"><img src="../../../../images/template/sm_fb.png" border="0" /></a></li>
                    <li><a href="#"><img src="../../../../images/template/sm_tw.png" border="0" /></a></li>
					<li><a href="http://www.youtube.com/user/stringbacks"><img src="../../../../images/template/sm_yt.png" border="0" /></a></li>
                    </ul>
                     <table width="270" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div style="padding-bottom:5px; padding-left:5px" align="center"><?php echo tep_draw_form('quick_find', tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get').tep_draw_input_field('keywords', '', 'size="10" maxlength="30" valign="middle" value="Search Here..." style="width: ' . (BOX_WIDTH+90) . 'px; height: 20px; padding: 5px 5px 5px 5px; margin: 0 0 0px 0; background: #FFFFFF; background: -moz-linear-gradient(top, #e9e9e9 0%, #FFFFFF 20%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e9e9e9), color-stop(20%,#e9e9e9));border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -moz-box-shadow: 0px 1px 0px #de5f39;-webkit-box-shadow: 0px 1px 0px #de5f39; font-family: sans-serif; font-size: 12px; color: #000000; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71;"') . '</td><td valign="middle" align="right" width="30" >' . tep_hide_session_id() . tep_image_submit('button_quick_find.png', BOX_HEADING_SEARCH);?></div></td>
  </tr>
</table>			

        </div>
		</div>
	</div>
    <div class="wrapper">
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
        <td colspan="2" height="10"></td>
      </tr>
      <tr>
        <td> <img src="../../../../images/template/header_r.png" /></td>
      </tr>
    </table>
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td width="148" height="235" align="center" valign="top">
          <table width="148" border="0" cellspacing="0" cellpadding="0">
            <tr>
   	          <td align="left"><div class="link4">$search_filterbox</div></td>
       	    </tr>
             <tr>
   	          <td align="left"><div class="link4">$manufacturerbox</div></td>
       	    </tr>
            <tr>
              <td align="left"><div class="link4">$categorybox</div></td>
            </tr>
            <tr>
              <td align="left"><div class="link4">$informationbox</div></td>
            </tr>
             <tr>
              <td align="left"><div class="link4">$specialbox</div></td>
            </tr>
            <tr>
              <td>$cartbox</td>
            </tr>
          </table>
        </td>
        <td width="10"></td>
        <td width="742" valign="top" align="left"><img src="../../../../images/template/cont_top.png" /><div style="padding-left:2px; padding-right:2px; background-color:#FFFFFF">$content</div><img src="../../../../images/template/cont_bot.png" /></td> 
      </tr>
    </table>
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td colspan="3" valign="middle" align="center" background="/includes/sts_templates/full/template1/images/footer1.jpg" height="25"><span style="font-size:10px; color:#FF0000">Copyright  2009 <a href="http://www.outdoorbusinessnetwork.com" target="_blank">Outdoor Business Network</a> | Powered by <a href="http://www.go4outdoors.com" target="_blank">OBN</a> | <a href="privacy.php">Privacy</a></span></td>
      </tr>
    </table>
    </div>
</body>
</html>