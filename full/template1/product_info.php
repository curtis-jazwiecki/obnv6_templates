<!DOCTYPE HTML>
<html>
    <head><!-- ---CJ-91613 Original script--> 
<link href="includes/sts_templates/full/template1/ext/css/accordion.css">
<script type="text/javascript" src="includes/sts_templates/full/template1/ext/jQuery/jquery.min.js"> </script>
<script type="text/javascript" language="javascript" src="includes/sts_templates/full/template1/ext/jQuery/jquery-latest.js"></script>
<script type="text/javascript">
    $(document).ready(function() { 	 	
        //ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)	
        $('.accordionButton').click(function() {		
            //REMOVE THE ON CLASS FROM ALL BUTTONS		
            $('.accordionButton').removeClass('on');		  		
            ////NO MATTER WHAT WE CLOSE ALL OPEN SLIDES	 	
            $('.accordionContent').slideUp('normal');   		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT		
            if($(this).next().is(':hidden') == true) {						
                //ADD THE ON CLASS TO THE BUTTON			
                $(this).addClass('on');			  		
                ////OPEN THE SLIDE			
                $(this).next().slideDown('normal');		 
            } 		  	 
        });	
        /*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/	
        //ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 	
        $('.accordionButton').mouseover(function() {		
            $(this).addClass('over');
        	//ON MOUSEOUT REMOVE THE OVER CLASS	
        }).mouseout(function() {		
            $(this).removeClass('over');
        });	
        /*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/	
        /********************************************************************************************************************	CLOSES ALL S ON PAGE LOAD	********************************************************************************************************************/		
        $('.accordionContent').hide();		
        $("#open").trigger('click');});
</script> 
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
                       // tba("#mj-topbar").css('background-image', 'url("/includes/sts_templates/full/template18/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');
                        tba("#mj-topbar a").css('color', '#FFFFFF');
                        tba("#mj-topbar i").css('color', '#FFFFFF');
                        tba("#mj-topbar div").css('color', '#FFFFFF');
                        //tba("#mj-topbar li").css('background', 'url("images/topbar-arrow-white.png") no-repeat scroll right center transparent');
                        tba("#mj-topbar li:last-child").css('background', 'none');
                    }
                    else
                    {
                      //  tba("#mj-topbar").css('background', 'url("/includes/sts_templates/full/template18/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');
                        tba("#mj-topbar a").css('color', '#008080');
                        tba("#mj-topbar i").css('color', '#008080');
                        tba("#mj-topbar div").css('color', '#008080');
                        //tba("#mj-topbar li").css('background', 'url("images/icons/<?php echo $_SESSION['themecolor_com']."-arrow.png" ?>") no-repeat scroll right center transparent');
                        tba("#mj-topbar li:last-child").css('background', 'none');
                    }
                });
            });
        </script>
        <script src="../lightbox/js/lightbox.min.js"></script>
       <link href="../lightbox/css/lightbox.css" rel="stylesheet" />
     <!--<link rel="stylesheet" type="text/css" href="$templatedirurlext/lightbox/lightbox.css" />
        <script src="$templatedirurlext/lightbox/prototype.js"></script>
        <script src="$templatedirurlext/lightbox/scriptaculous.js?load=effects"></script>
        <script src="$templatedirurlext/lightbox/builder.js"></script>
        <script src="$templatedirurlext/lightbox/lightbox.js"></script>-->
       <script src="$templatedirurlext/lightbox/js/lightbox.min.js"></script>
       <link href="$templatedirurlext/lightbox/css/lightbox.css" rel="stylesheet" />
            $stylesheet 
        $js_code
</head>
    <body class="$script">
<!--left_td-->           
<td align="center" width="60%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"> 
        <tr>                            
            <td class="main" valign="top" align="center">         
                <b><span class="productName">$productname</span><br>$productmodel</b>    
            </td>                          
        </tr>                          
        <tr>                            
            <td align="center" class="productInfo">  
                <div id="piGal">$product_image</div>
                                            <script type="text/javascript">
            function () {
                '#piGal'.photosetGrid({
                    layout: '1',
                    width: '250px',
                    highresLinks: true,
                    rel: 'pigallery',
                    onComplete: function () {
                        '#piGal'.css({'visibility': 'visible'});
                        '#piGal a'.colorbox({
                            maxHeight: '90%',
                            maxWidth: '90%',
                            rel: 'pigallery'
                        });
                        '#piGal img'.each(function () {
                            var imgid = tba(this).attr('id').substring(9);
                            if ('#piGalDiv_' + imgid.length) {
                                this.parent().colorbox({inline: true, href: "#piGalDiv_" + imgid});
                            }
                        });
                    }
                });
            });
                                            </script> 
                                             <div id="moreImg">$display_product_extra_images</div>       
            </td>                         
        </tr>                  
        <tr>                      
            <td align="center">$product_ratings | $product_ratings_write</td>     
        </tr>                        
                       
        <tr>                   
            <td style="padding-right:10px">     
                <div id="wrapper">		
                    <div id="open" style="width:100%" class="accordionButton"> 
                        <b><span style="font-size: 14px; padding-left:10px">Product Description</span></b>
                    </div>		
                    <div style="width:100%" class="accordionContent">$product_description</div>        
                    <div> </div>        
                    <div style="width:100%" class="accordionButton"><b><span style="font-size: 14px; padding-left:10px">Product Selections</span></b></div>		
                    <div style="width:100%" class="accordionContent" align="center"><br />$product_attributes_value</div>        
                    <div> </div>		
                    <div style="width:100%" class="accordionButton"><b><span style="font-size: 14px; padding-left:10px">Product Specifications</span></b></div>		
                    <div style="width:100%" class="accordionContent" >$product_specifications</div>               
                    <div> </div>        
                    <div style="width:100%" class="accordionButton"><b><span style="font-size: 14px; padding-left:10px">Product Reviews</span></b></div>		
                    <div style="width:100%" class="accordionContent">$product_reviews</div> 
                    <div> </div>        
                    <div style="width:100%" class="accordionButton"><b><span style="font-size: 14px; padding-left:10px">Product Package</span></b></div>
                    <div style="width:100%" class="accordionContent">$display_package_str</div>
                </div>                          
            </td>                          
        </tr>                        
    </table>                
</td>             
<!--left_td_end-->			
<!--right_td_start-->				
<td valign="top" align="center" width="40%">	
    <table cellpadding="0" cellspacing="0" width="100%" border="0" class="productInfo">	
        <tr>				
            <td valign="top">		
                <table width="100%" cellpadding="0" cellspacing="0">       
                    <tr>                         
                        <td class="main" valign="top">$product_manufacturer</td>     
                    </tr>						
                    $product_availability_n_price               
                    <tr>                  
                        <td align="center">            
                            $product_share_links          
                        </td>                     
                    </tr>                    
                </table>                	
            </td>                
        </tr>                
        <tr>                  
            <td valign="top">                           
                <table border="0" cellspacing="0" cellpadding="2">     
                    <tr>                 
                        <td class="main" colspan="2"><b>DISPLAY_PRODUCT_OPTIONS_TITLE</b></td> 
                    </tr>                      
                    <tr>                    
                        <td class="main">     
                            DISPLAY_PRODUCT_ATTRIBUTE        
                        </td>                      
                    </tr>                   
                </table>			
            </td>                   
        </tr>					
                 
        <tr>                     
            <td valign="top">        
                <table border="0" width="100%" cellspacing="1" cellpadding="2" class="ProductInfoBox infoBox" >     
                    <tr>                           
                        <td valign="top" align="left">          
                            <table border="0"  cellspacing="0" cellpadding="2">                  
                                <tr>                            
                                    <td align="left" class="smallText" colspan="3">	       
                                        $product_disclaimer			
                                    </td>                      
                                </tr>                           
                                <tr>                             
                                    <td width="10"></td>         
                                    <td class="main" align="center" colspan="2">        
                                       <div class="cart_info">
                                                    <div class="cart_quantity">
                                                        <strong>Quantity :</strong> <input type="text" size="3" value="1" name="cart_quantity">                 </div>
                                                    <div class="cart_button">
                                                        <input type="hidden" value="$products_id" name="products_id"><span class="tdbLink"><button type="submit" id="tdb5" onclick="javascript:return disclaimer_onclick();">Add to Cart</button></span><br>$product_add_to_wishlist 
                                                    </div>
                                                </div>                                                 
                                    </td>                   
                                    <td width="10"></td>     
                                </tr>   
                            </table>                      
                        </td>                         
                    </tr> 
                </table>                   
            </td>             
        </tr>      
    </table>                
    <table  width="100%" border="0">     
        <tr>                  
            <td>             
                $product_related_items
                DISPLAY_RECOMMENDED_PRODUCTS  
                DISPLAY_ALSO_PURCHASED_PRODUCTS 
                DISPLAY_NEW_PRODUCTS
                DISPLAY_HOW_PRODUCTS
                DISPLAY_POPULAR_PRODUCT
                DISPLAY_FEATURED_PRODUCTS_1
                DISPLAY_FEATURED_PRODUCTS_2
                DISPLAY_FEATURED_PRODUCTS_3
                DISPLAY_FEATURED_MANUFACTUERERS
                DISPLAY_FEATURED_CATEGORY 
            </td>
        </tr>
    </table>
</body>
    </html>