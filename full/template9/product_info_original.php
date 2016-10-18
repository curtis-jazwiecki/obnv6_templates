<!DOCTYPE HTML>

<html>

    <head>
        $headertags
        <meta name="viewport" content="width=device-width, initial-scale=1">

        $template18_stylesheet1

        <script type="text/javascript">

            var jqqqnoconf = jQuery.noConflict();

// fix jQuery 1.8.0 and jQuery UI 1.8.22 bug with dialog buttons; http://bugs.jqueryui.com/ticket/8484

            if (jqqqnoconf.attrFn) {

                jqqqnoconf.attrFn.text = true;

            }

        </script>

        <script type="text/javascript">
		function popupWindow2(url) {
            window.open(url,'popupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=550,height=450,screenX=150,screenY=150,top=150,left=150')
        }

            var tba = jQuery.noConflict();



            tba(document).ready(function () {

                //SKU BOF

                tba('.bestsellers').html('<i class="fa fa-chevron-circle-right"></i>');

                tba('.category_cell table').addClass('categoryListBoxContents subproduct_name onlycat');

                tba('body.password_forgotten').find('.pageHeading').eq(0).wrapInner('<h1></h1>');

                tba('body.shopping_cart .productListing-tr').addClass('tablecontent').removeClass('productListing-odd productListing-even productListing-tr');

                //tba('body.checkout').find('h2.margin').addClass('acc_trigger active');

                //SKU EOF

                var scroll_pos = 0;



                tba(document).scroll(function () {

                    //alert("hello");

                    scroll_pos = tba(this).scrollTop();

                    if (scroll_pos > 25) {

                        tba("#mj-topbar").css('background-color', '#008080');

                        tba("#mj-topbar").css('background-image', 'url("/includes/sts_templates/full/template9/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');

                        tba("#mj-topbar a").css('color', '#FFFFFF');

                        tba("#mj-topbar i").css('color', '#FFFFFF');

                        tba("#mj-topbar div").css('color', '#FFFFFF');

                        //tba("#mj-topbar li").css('background', 'url("images/topbar-arrow-white.png") no-repeat scroll right center transparent');

                        tba("#mj-topbar li:last-child").css('background', 'none');

                    }

                    else

                    {

                        tba("#mj-topbar").css('background', 'url("/includes/sts_templates/full/template9/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');

                        tba("#mj-topbar a").css('color', '#008080');

                        tba("#mj-topbar i").css('color', '#008080');

                        tba("#mj-topbar div").css('color', '#008080');

                        //tba("#mj-topbar li").css('background', 'url("images/icons/<?php echo $_SESSION['themecolor_com']."-arrow.png" ?>") no-repeat scroll right center transparent');

                        tba("#mj-topbar li:last-child").css('background', 'none');

                    }
					
					

                });
				
				
				

            });

        </script>

       <!--<link rel="stylesheet" type="text/css" href="$templatedirurlext/lightbox/lightbox.css" />

        <script src="$templatedirurlext/lightbox/prototype.js"></script>

        <script src="$templatedirurlext/lightbox/scriptaculous.js?load=effects"></script>

        <script src="$templatedirurlext/lightbox/builder.js"></script>

        <script src="$templatedirurlext/lightbox/lightbox.js"></script>-->

       <script src="$templatedirurlext/lightbox/js/lightbox.min.js"></script>

       <link href="$templatedirurlext/lightbox/css/lightbox.css" rel="stylesheet" />


<link rel="stylesheet" type="text/css" href="/includes/sts_templates/full/template9/ext/css/default.css">
<link rel="stylesheet" type="text/css" href="/includes/sts_templates/full/template9/ext/css/1471759.css">
<link rel='stylesheet' type="text/css" href="/includes/sts_templates/full/template9/ext/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="/includes/sts_templates/full/template9/ext/css/mobile.css">

            $stylesheet 


        $js_code

    </head>

    <body class="$script">

       <!-- <div id="mj-container">-->
      
       <div id="wrapper">
 <div class="main_table" style="">
            $top_bar

            $header

            $navigation_menu

            




<div id="mnu_side">
           <!-- <div id="mj-maincontent">-->

<!--                <div class="mj-subcontainer">-->

                    <div id="mj-contentarea" class="mj-grid64 mj-lspace">



<div id="mj-slidetitle" class="std" >
      <!--<div id="prd_pg_ttl" class="std"> --><!-- mj-slidetitle starts -->
    <div class="mj-subcontainer1"> <!-- mj-subcontainer starts -->
      <div class="moduletable1 mj-grid961 breadcrumb1"> <!-- mj-grid96 starts -->
        <div class="breadcrumbs mj-grid961 breadcrumb1">
          <div id="navBreadCrumb1"> $breadcrumbs <div style="float:right;">$product_add_to_wishlist </div>
            
            <!--<ul><li><a class="headerNavigation" href="http://localhost/osmart/index.php">Catalog</a></li> <li><a class="headerNavigation" href="http://localhost/osmart/login.php">Login</a></li></ul>--> 
            
          </div>
        </div>
      </div>
      <!-- mj-grid96 ends --> 
    </div>
    <!-- mj-subcontainer ends -->
    
  </div>


                        <!--sku start-->

                        <form method="post" action="?action=add_product" name="cart_quantity"><div class="mj-productinfo">

                                <div>

                                    <h2 class="mj-productheading">$productname [<span class="smallText model" id="productItem12" >$productmodel</span>]</h2>

                                </div>



                                <div class="contentContainer">

                                    <div class="contentText">

                                        <div class="mj-product_infoleft">



                                            <div id="piGal">$product_image</div>

                                            <script type="text/javascript">

            tba(function () {

                tba('#piGal').photosetGrid({

                    layout: '1',

                    width: '250px',

                    highresLinks: true,

                    rel: 'pigallery',

                    onComplete: function () {

                        tba('#piGal').css({'visibility': 'visible'});



                        tba('#piGal a').colorbox({

                            maxHeight: '90%',

                            maxWidth: '90%',

                            rel: 'pigallery'

                        });



                        tba('#piGal img').each(function () {

                            var imgid = tba(this).attr('id').substring(9);



                            if (tba('#piGalDiv_' + imgid).length) {

                                tba(this).parent().colorbox({inline: true, href: "#piGalDiv_" + imgid});

                            }

                        });

                    }

                });

            });

                                            </script>

                                            <div id="moreImg">$display_product_extra_images</div>

                                            <div id="sharelink">$product_share_links</div>

                                        </div>





                                        <div class="mj-product_inforight">

                                            <div class="product_title">

                                                <h3 class="mj-productdescname">$productname [<span class="smallText model" id="productItem12">$productmodel</span>]</h3>

                                            </div>



                                            <div class="product_price ">

                                                <h4 class="product_title">

                                                    $product_availability_n_price

                                                </h4>                                                

                                            </div>

                                            <div class="product_price">

                                                <h4 class="product_title">

                                                    <label>$product_manufacturer </label>

                                                </h4>                                                

                                            </div>

                                            <!--sku bof-->

                                            <div class="product_price">

                                                <h4 class="product_title">

                                                    <p id="productPrice12">$product_child_price</p>

                                                </h4>                                                

                                            </div>                                            

                                            <div class="product_price">

                                                <h4 class="product_title">

                                                    <div id="attribute_title">&nbsp;</div>

                                                    <div id="attribute_value">$product_attributes_value</div>



                                            </div>



                                            </h4>                                                



                                            <div class="product_price">

                                                <h4 class="product_title">

                                                    <label>$product_disclaimer </label>

                                                </h4>                                                

                                            </div>



                                            <!--sku eof-->

                                            <div class="cartadd">



                                                <!--<p></p>-->

                                                <div id="productAttributes">



                                                    <div class="attribsoptions">$product_specifications</div>

                                                </div>









                                                <div class="cart_info">

                                                    <div class="cart_quantity">

                                                        <strong>Quantity :</strong> <input type="text" size="3" value="1" name="cart_quantity">                 </div>

                                                    <div class="cart_button">

                                                        <input type="hidden" value="$products_id" name="products_id"><span class="tdbLink"><button type="submit" id="tdb5" onclick="javascript:return disclaimer_onclick();">Add to Cart</button></span><br>$product_add_to_wishlist 



                                                    </div>

                                                </div>                                                 

                                            </div>

                                        </div>

                                    </div>



                                </div>

                                



                                <script type="text/javascript" src="$templatedirurlext/jquery/mj_tabcontent.js"></script>

                                <div class="mj_prodinfo_tabcontent">

                                    <ul data-persist="true" class="tabs">

                                        <li><a href="#view1"><span class="title">Description</span></a></li>

                                        <li id="viewrev"><a href="#view2" class="view2"><span class="title">Reviews</span></a></li>

                                        <li><a href="#view3"><span class="title">Product Package</span></a></li>

                                    </ul>

                                    <div class="tabcontents">

                                        <div id="view1" class="std">$product_description</div>

                                        <div id="view2">

                                            <div class="mj-productreviewlink" >

                                                <div class="prodetail std">$product_ratings | $product_ratings_write</div>

                                                <div class="prodetail std">$product_reviews</div>

                                            </div>        

                                        </div>

                                        <div id="view3" class="std">$display_package_str</div>

                                    </div>



                                </div>



                            </div>





                    </div>



                    </form>    

                    <div class="mnu_side" style="">
      <div id="content-side">
      <div id="sidemnu_tbl">
      
        <div class="mnu_side3">$cartbox</div>
        <div class="mnu_side2"> $categorybox </div>
       
        
       </div>
        </div>
      </div>

                    <div id="mj-right" class="mj-grid16 mj-lspace mj-rspace" style="display:none;">

                        <div class="ui-widget infoBoxContainer">

                            $product_related_items

                        </div>                        

                    </div>

                    <!--sku end-->

              


            </div>





            <div id="mj-footer" style="display:none;"> <!-- mj-footer starts -->

                <div class="mj-subcontainer"> <!-- mj-subcontainer starts -->

                    $footer_box_01

                    $footer_box_02

                    $footer_box_03

                    $footer_box_04

                </div>

            </div>
<script type="text/javascript">
tba(document).ready(function(e) {
	var reviews_id_tab = '<?php echo isset($_GET["reviews_id"]) ? $_GET["reviews_id"] : ""; ?>';
				if(reviews_id_tab != ''){
					
					setTimeout(function(){ setactive(); }, 3000);
				}
    
});
function setactive(){
	
	tba("ul.tabs li").removeClass("selected"); 
					tba("#viewrev").addClass("selected");
					tba(".tab_content").hide(); 
					tba("#view2").css("display",'block');
}

</script>
        

        </div>
</div>
    </body>

</html>