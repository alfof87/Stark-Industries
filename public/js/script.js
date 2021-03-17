
function getMenu(){
  $(".fa-chevron-down").click(function(){

   $(".drop").toggle();

  })
}





function init(){
  getMenu();
}
$(document).ready(init);
