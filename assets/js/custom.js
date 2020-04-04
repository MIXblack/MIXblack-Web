    // Footer Popup 
    $(document).ready(function() {
        
        $( "#clickme" ).click(function() {
            if($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }
                
            $( "#book" ).slideToggle( "slow", function() {
                ///
            });
        
        });
    });