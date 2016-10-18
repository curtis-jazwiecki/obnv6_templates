// JavaScript Document
(function(jQuery){
	jQuery.fn.navAccordion = function(options, callback){
		this.each(function(){
			
			//Options
			var settings = jQuery.extend({
				expandButtonText : "+", //Text inside of expand button
				collapseButtonText: "-",  //Text inside of collapse button
				selectedExpand: "true",   //Expand the selected channel
				selectedClass: "selected",  //Class that will be used to detect the currently selected channel - this will check the "parentElement" for this class (the parent <li> by default)
				multipleLevels: "true",  //Apply accordion to all levels - setting this to false will apply the accordion only to the first level
				buttonWidth: "20%",  //Width of accordion expand/collapse button as a percentage or pixels
				buttonPosition: "right",  //Position of button - 'right' is default - you can also choose 'left'
				slideSpeed: "fast",   //Speed of slide animation - "fast", "slow", or number in milliseconds such as 500
				parentElement: "li",  //Parent element type, class or ID - you don't need to change this if you're using a ul > li > ul pattern
				childElement: "ul",   //Child element type, class or ID - you don't need to change this if you're using a ul > li > ul pattern
				headersOnly: false,  //False is default - setting to true will make any link with sub-nav behave as if it were set to header only, making the link inaccessible - this option is useful if you are using the plugin for a non-navigation area 
				headersOnlyCheck: false, // False is default - set to true to apply the accordion only to links that are set as "header only" (have no href)
				delayLink: false,  //Delay following the href of links until after the accordion the has expanded
				delayAmount: null //Time in milliseconds to delay before following href - will use "slideSpeed" by default if nothing else is set
			}, options);
			
			var container = this,
			//Multiple levels variable
				multi = settings.multipleLevels ? '': ' > ' + settings.childElement + ' > ';
				
			//Add class to container
			jQuery(container)
				.addClass('accordion-nav');
			
			//Apply has-subnav class to lis with uls - also add accordion buttons with styles
			jQuery(multi + settings.parentElement, container).each(function(){
				if ( (jQuery(this).contents(settings.childElement).length > 0 
					&& settings.headersOnlyCheck == false) || (!(jQuery('> a', this).attr('href')) 
					&& settings.headersOnlyCheck == true) )  
				{
					//Apply Class and styles to parent item
					jQuery(this).addClass('has-subnav').css('position', 'relative').find('>a').css('margin-' + settings.buttonPosition, settings.buttonWidth);
					
					//Add expand button elements
					jQuery(' > ' + settings.childElement, this).before('<span class="accordion-btn-wrap"><span class="accordion-btn accordion-collapsed">'+ settings.expandButtonText + '</span><span class="accordion-btn accordion-expanded">'+ settings.collapseButtonText + '</span></span>');
						
					//Apply Styles to expand button
					jQuery('.accordion-btn-wrap', this).css({'width': settings.buttonWidth, 'position': 'absolute', 'top': 0, 'text-align': 'center', 'cursor': 'pointer', 'display': 'inline-block'
						}).css(settings.buttonPosition, 0);
					jQuery('.accordion-btn ', this).css({'display': 'inline-block', 'width': '100%'
						});
					jQuery('.accordion-expanded', this).css('display', 'none');
				}
				
				//Apply styles to <a> tags that are set to header only
				if (!(jQuery('> a', this).attr('href')) || settings.headersOnly){
					jQuery(this).addClass('accordion-header-only').find('.accordion-btn-wrap').css({'width': '100%', 'text-align': settings.buttonPosition}).find('.accordion-btn ').css({'width': settings.buttonWidth, 'text-align': 'center'});}
				
				
			});
			
							
			//On click function
			jQuery(container).on('click', '.accordion-btn-wrap', function(e) {e.preventDefault();
			clickToggle(this);
			});
			
						
			/* Functions 
			*******************************/
				//Click Toggle function
				function clickToggle(element) {
					var nextChild = jQuery(element).next(settings.childElement),
						currentExpandBtn = jQuery('.accordion-expanded', element),
						currentCollapseBtn = jQuery('.accordion-collapsed', element),
						parentObj = jQuery(element).closest(settings.parentElement);
					if (nextChild.is(':visible')) {nextChild.slideUp(settings.slideSpeed);
						jQuery(element).removeClass('accordion-active');
						currentExpandBtn.css('display', 'none');
						currentCollapseBtn.css('display', 'inline-block');
						parentObj.add(parentObj.siblings('.active')).add(parentObj.find('.active')).removeClass('active');
					} else {
						jQuery(element).closest(settings.childElement).find('.accordion-active').removeClass('accordion-active')
							.next(settings.childElement)
							.slideUp(settings.slideSpeed).prev().find('.accordion-expanded').css('display', 'none')
									.parent().find('.accordion-collapsed').css('display', 'inline-block');
						parentObj.add(parentObj.siblings('.active')).add(parentObj.find('.active')).removeClass('active');
						jQuery(element).addClass('accordion-active');nextChild.slideToggle(settings.slideSpeed);
						currentExpandBtn.css('display', 'inline-block');
						currentCollapseBtn.css('display', 'none');
						parentObj.addClass('active');
					}
				}
				
						
				
				
			
			
		});
	}
})(jQuery);