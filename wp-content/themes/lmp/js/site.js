
function UpdateTableHeaders() {
       jQuery(".persist-area").each(function() {
       
           var el             = jQuery(this),
               offset         = el.offset(),
               scrollTop      = jQuery(window).scrollTop(),
               floatingHeader = jQuery(".floatingHeader", this)
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height()+ 100)) {
               floatingHeader.css({
                "visibility": "visible"
               });
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               });      
           };
       });
    }
    
    // DOM Ready      
    jQuery(function() {
    
       var clonedHeaderRow;
    
       jQuery(".persist-area").each(function() {
           clonedHeaderRow = jQuery(".persist-header", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             .css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
             
       });
       
       jQuery(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
    });


$(".register").click(function(){
    $(".form-holder").toggleClass("show");
});

