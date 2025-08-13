//isotope activation js codes:

 $(document).ready(function(){

    jQuery(window).on("load",function(){

     $('.grid').isotope({
	   itemSelector: '.grid-item',
	   masonry: {
		columnWidth:0
	   }
	 });
	 
     $("#portfolio-selector li").click(function(){
         $("#portfolio-selector li").removeClass("active").filter(this).addClass("active");
         var filter_id = $(this).data('filter');
         $("#portfolio-selector-one").isotope({
            itemSelector: '.gallery-item-list',
            filter:filter_id,
            animationOptions :{
            duration:1000
            }
         });
     });

      // change is-checked class on buttons
     $('#portfolio-selector ul').each( function( i, liList ) {
         var $liList = $( liList );
         $liList.on( 'click', 'li ', function() {
             $liList.find('.active').removeClass('active');
             $( this ).addClass('active');
         });


    });

 });
    
 });

