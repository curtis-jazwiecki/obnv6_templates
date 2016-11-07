<script type="text/javascript">

    var tba = jQuery.noConflict();



    tba(document).ready(function () {

        var scroll_pos = 0;



        tba(document).scroll(function () {

            //alert("hello");

            scroll_pos = tba(this).scrollTop();

            if (scroll_pos > 25) {

                tba("#mj-topbar").css('background-color', '#880000');

                tba("#mj-topbar").css('background-image', 'url("");

                tba("#mj-topbar a").css('color', '#880000');

                tba("#mj-topbar i").css('color', '#880000');

                tba("#mj-topbar div").css('color', '#880000');

                //tba("#mj-topbar li").css('background', 'url("images/topbar-arrow-white.png") no-repeat scroll right center transparent');

                tba("#mj-topbar li:last-child").css('background', 'none');

            }

            else

            {

                tba("#mj-topbar").css('background', 'url("") repeat scroll 0 0 transparent');

                tba("#mj-topbar a").css('color', '#666666');

                tba("#mj-topbar i").css('color', '#666666');

                tba("#mj-topbar div").css('color', '#666666');

                //tba("#mj-topbar li").css('background', 'url("images/icons/<?php echo $_SESSION['themecolor_com']."-arrow.png" ?>") no-repeat scroll right center transparent');

                tba("#mj-topbar li:last-child").css('background', 'none');

            }

        });

    });

</script>

<div id="mj-topbar" align="center" ><!-- mj-topabar -->

    <div class="mj-subcontainer" style="padding-left:30%;"><!-- mj-subcontainer --><br>

        <div class="mj-grid16 mj-lspace" style="padding: 5px 20px 5px 5px; border: 0px solid #000; background-color:#880000; border-radius: 7px; "  >
		
		
		
		<form method="get" action="advanced_search_result.php" name="search" >                                    
<div class="search"> 
<input type="text" onfocus="if (this.value == ' Search')
this.value = ''" onblur="if (this.value == '')
this.value = ' Search'" value=" Search" style="width:100%;" class="go" name="keywords">
<button type="submit" id="search-button"><span><i class="fa fa-search"></i></span></button>
</div> </form> </div> <!-- mj-grid32 ends -->
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('input:checkbox[name^="columns_"]').click(function(){
var product_id = jQuery(this).val();
var action = (jQuery(this).is(':checked') ? 'add' : 'remove'); 
jQuery.ajax({
url: 'register_product_for_comparison.php', 
method: 'post', 
data: {
action: action, 
id: product_id
}, 
success: function(response){
if (response=='added'){
alert('Product added for comparison');
} else if (response=='removed'){
alert('Product removed from comparison');
} },
error: function(xhr, textStatus, errorThrown) {
alert(errorThrown);
 } });	});	});
var jqheader = jQuery.noConflict();
jqheader(document).ready(function () {
jqheader('#store_li').click(function () {
jqheader(".navbar .nav > li").show();
 });   });</script>
		</div>           	
<br><br><br><br>	
				
				
				
				<div id="mj-righttop" > <!-- mj-righttop starts -->

    	<div class="mj-subcontainer"> <!-- mj-subcontainer starts -->

    		<div id="mj-menubar"> <!-- mj-menubar starts -->

            	

    			<div class="jsn-mainnav navbar">

					<div class="jsn-mainnav-inner navbar-inner">

						<div class="container clearfix">

                        	<div class="mainnav-toggle clearfix">

                    			<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button" id="btn"> <span>Main Menu</span></button>

                			</div>

   							<div class="nav-collapse collapse clearfix" id="jsn-pos-mainnav">

    							<ul class="nav">

                             
                                    
                                    
                                    
                                    <li id="cate_li"><a href="/index.php">Shop&nbsp;&dtrif;</a>

                                    	<ul class="nav-child unstyled">

                                    <!--Superfish Horizontal Navigation bar-->

$categories_html

		                                    <!--end Superfish-->

                                    	</ul></li>


<li><a href="#">On Location</a></li>
<li><a href="#">Education</a></li>
<li><a href="#">News / Events</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Blog</a></li>
<li><a href="/advanced_search.php">Search</a></li>


    							</ul>

    						</div> 

    					</div>

    				</div>

				</div>

                <script type="text/javascript">



				

				var addcls = jQuery.noConflict();

				addcls(".navbar-inner button#btn").click(function(){

					 if (addcls(".navbar-inner #jsn-pos-mainnav").hasClass('intro')) {

  						addcls(".navbar-inner #jsn-pos-mainnav").removeClass("intro");

					 }

					 else {

						 addcls(".navbar-inner #jsn-pos-mainnav").addClass("intro");

					 }

					

				}); 

					

				</script>

    		</div> <!-- mj-menubar ends -->

    	</div> <!-- mj-subcontainer ends -->

    </div>    
	
	<div class="toplogin" ><a href="/shopping_cart.php" >Cart Contents   &nbsp;<i class="fa fa-shopping-cart fa-1x"></i></a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="/login.php">My Account&nbsp;<i class="fa fa-user fa-1x"></i></a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="/checkout.php" >Checkout &nbsp;<i class="fa fa-credit-card fa-1x"></i></a>
</div>


<div class="topsmalllogo"><a href="/index.php"><img src="images/tpl/logo_tpl18.png" height="75px" ></a>   
</div></div>