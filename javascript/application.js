$(document).ready(function() {
   $('#s3slider').s3Slider({
      timeOut: 4000
   });
  $("#search_bar div").hide();
$('#search_bar a').click(function() {
  $("#search_bar div").slideToggle();
});
}); 
