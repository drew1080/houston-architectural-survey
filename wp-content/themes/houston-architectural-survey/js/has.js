(function ($) {
  $(function() {
    // Handler for .ready() called.
  
    $('.taxonomy-dropdown-box').change(function(){
      if ( current_option != 0 ) {
        window.location.href = $(this).val();
      }
    });
  });
}(jQuery));
