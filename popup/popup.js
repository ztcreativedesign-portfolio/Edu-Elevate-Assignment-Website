// Show popup on page load
$(document).ready(function() {
    setTimeout(function() {
      $('#popup-overlay').fadeIn();
    }, 2000); // Show popup after 2 seconds
  });
  
  // Close popup on close button click
  $('#popup-close').click(function() {
    $('#popup-overlay').fadeOut();
  });
  
  // Close popup on overlay click
  $('#popup-overlay').click(function(event) {
    if (event.target === this) {
      $(this).fadeOut();
    }
  });
  
  