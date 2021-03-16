
function getMenu(){
  $(".fa-chevron-down").click(function(){
    // var dropMenu = $(".drop");
    // $(this).children().toggle();
   $(".drop").toggle();

  })
}





function init(){
  getMenu();
}
$(document).ready(init);
