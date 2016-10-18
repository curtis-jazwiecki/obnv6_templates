<!--header_bof-->
<table  border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td id="search_filter_side" style="display:none;"><div class="mnu_side_filter">
        <input id="nav-trigger-filter" class="nav-trigger-filter" type="checkbox" value="Filter">
        <label for="nav-trigger-filter"><i class="fa fa-filter fa-2x"></i> <span>FILTER</span></label>
        <div id="content-side">
          <div align="center" id="sidemnu_tbl" class="mnu_side_filter_tools">
            <div class="mnu_side_filter_hdr">
              <div class="mnu_side_filter_row">
                <div class="mnu_side_filter_lnk">
                  <table>
                    
                    $searchmobile_filterbox
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></td>
  </tr>
<script type="text/javascript">
jQuery(document).ready(function(e) {
    var width = screen.width;
	if(width > 768){
		jQuery('#search_filter_side').html('');
	}<!--else{
		//jQuery('#sidemnu_tbl_2').html('');
		
	//}-->
});
</script>  
</table>
            <p>&nbsp;</p>
<table class='data_table' width='100%' border='0'>
  <tbody>
    <tr class='mnu_side_hdr'>
      <th>Thumbnail</th>
      <th>Description</th>
      <th>Price</th>
      <th>Add To Cart</th>
    </tr>
  </tbody>
</table>
<!--header_eof-->

<table cellpadding="0" border="0" cellspacing="0" style="margin: 0 0 8px 0;">
  <tr valign="top">
    <td width="200" align="left" valign="top" style="maxwidth: 165" class="products_listing_shop_box">DISPLAY_PRODUCT_IMAGE</td>
    <td width="200" class="smallText products_listing_shop_box" valign="top" ><p><b>DISPLAY_PRODUCT_NAME</b></p>
      <p class="prd_price">DISPLAY_PRODUCT_STOCK</p>
      <br>
     <!-- <p>DISPLAY_PRODUCT_DESCRIPTION</p>--></td>
    <td width="80" class="smallText products_listing_shop_box1" valign="top" align="right">DISPLAY_PRODUCT_PRICE<br />
      DISPLAY_PRODUCT_COMPARE<br /></td>
    <td width="180" class="smallText products_listing_shop_box1" valign="top" align="right">DISPLAY_PRODUCT_ADD_TO_CART</td>
  </tr>
  &nbsp;
</table>
