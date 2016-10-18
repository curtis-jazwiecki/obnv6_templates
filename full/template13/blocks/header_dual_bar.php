<script type="text/javascript">

  jQuery(document).ready(function(){

            var submitIcon = jQuery('.searchbox-icon');

            var inputBox = jQuery('.searchbox-input');

            var searchBox = jQuery('.searchbox');

            var isOpen = false;

            submitIcon.click(function(){

                if(isOpen == false){

                    searchBox.addClass('searchbox-open');

                    inputBox.focus();

                    isOpen = true;

                } else {

                    searchBox.removeClass('searchbox-open');

                    inputBox.focusout();

                    isOpen = false;

                }

            });  

             submitIcon.mouseup(function(){

                    return false;

                });

            searchBox.mouseup(function(){

                    return false;

                });

            jQuery(document).mouseup(function(){

                    if(isOpen == true){

                        jQuery('.searchbox-icon').css('display','block');

                        submitIcon.click();

                    }

                });

        });

            function buttonUp(){

                var inputVal = jQuery('.searchbox-input').val();

                inputVal = jQuery.trim(inputVal).length;

                if( inputVal !== 0){

                    jQuery('.searchbox-icon').css('display','none');

                } else {

                    jQuery('.searchbox-input').val('');

                    jQuery('.searchbox-icon').css('display','block');

                }

            }

</script>



<div id="mj-header">  

  <!--<div class="mj-subcontainer"> -->

  <div class="mj-subcontainer"> 

    <!-- mj-subcontainer starts -->

    <div class="col-md-8"> <!-- mj-logo starts --> 

      
<div class="mobilebanner"><br><br></div>
      <a href="index.php"><img src="/includes/sts_templates/full/template13/images/logo2.png"></a> </div>

    <!-- mj-logo ends -->


    <div class="col-md-3 search_box search_New_btn">

      <form class="searchbox" method="get" action="advanced_search_result.php" name="search">

        <input type="search" name="keywords" placeholder="Search......" class="searchbox-input" onkeyup="buttonUp();" required>

        <!-- <input type="submit" class="searchbox-submit" value="GO">--> 

        <span class="searchbox-icon"><i class="fa fa-search"></i></span>

      </form>

    </div>

     <!--<div class="fullbanner"><div class="col-md-1 pull-right cart_button_top" style="background-color:#171717; "><a href="shopping_cart.php"><span><i class="fa fa-shopping-cart"></i></span></a></div></div> --> 


    <!-- mj-grid16 ends --> 

    

    <!-- mj-grid32 ends --> 

    <script type="text/javascript">

   var jqheader = jQuery.noConflict();

	jqheader(document).ready(function () {

		jqheader('#store_li').click(function () {

			jqheader(".navbar .nav > li").show();

		});

		jqheader('#cate_li').click(function () {

			jqheader(".navbar .nav > li").show();

		});

	});

</script> 

  </div>

</div>
<br>
<div style="width:100%; background-color:#004000; color:#fff !important; padding-left:25%; padding-bottom:15px!important;" class="fullbanner">
<table width="50%" border="0" cellspacing="0" cellpadding="0"><tr>
      <td align="left"><br>
      <a href="/shop.php"><span style="color:#ccc!important; font-weight:bold!important; font-size:16px!important;">Categories</span></a></td>
      <td width="50px">&nbsp;</td>
      <td align="center"><br>
      <a href="/-i-7.html"><span style="color:#ccc!important; font-weight:bold!important; font-size:16px!important;">Bulletin</span></a></td>
         <td width="50px">&nbsp;</td>
      <td align="right"><br>
      <a href="/contact_us.php"><span style="color:#ccc!important; font-weight:bold!important; font-size:16px!important;">Contact</span></a></td>
    </tr></table>
</div>