//Switching Tabs for the Class of Login and Register
$(".register").hide();
$(".login_li").addClass("active");

//Login Show Register Hide
$(".login_li").click(function(){
  $(this).addClass("active");
  $(".register_li").removeClass("active");
  $(".login").show();
  $(".register").hide();
})

//Register Show Login Hide
$(".register_li").click(function(){
  $(this).addClass("active");
  $(".login_li").removeClass("active");
  $(".register").show();
  $(".login").hide();
})
