<?php include_once "header.php"; ?>
<html>
<head>
<link rel="stylesheet" href="\assets\css\register.css">
</head>
<body>
<div class="register">
  <div class="register_f">
    <form class="two" id="two" action="" method="post">

      <div class="name_input">
        <span class="glyphicon glyphicon-user icons" id="icon_user"></span>
        <input type="text" name="username" class="input_f" placeholder="username" id="i_user">
      </div>

      <div class="name_input">
        <span class="glyphicon glyphicon-phone icons" id="icon_phone"></span>
        <input type="text" name="phone" class="input_f" placeholder="phone number" id="i_phone">
      </div>


      <div class="name_input">
        <span class="glyphicon glyphicon-tree-deciduous icons" id="icon_password"> </span>
        <input type="password" name="password" class="input_f" placeholder="enter password" id="i_password">
      </div>

      <div class="name_input">
        <span class="glyphicon glyphicon-tree-deciduous icons" id="icon_password1"> </span>
        <input type="password" name="password_re" class="input_f" placeholder="Re-enter password" id="i_password_re">
      </div>

      <button name="register_main" class="enter" id="register_main">register yourself</button>
    </form>
  </div>
  <button id="redir" class="enter redir_pos" name="redir"><a href="http://crud.localhost/">Redirect to login</a></button>
</div>

<script>
$("#i_user").click(function(){
  $("#icon_user").addClass("input_changing_class");
  $("#icon_phone").removeClass("input_changing_class");
  $("#icon_password").removeClass("input_changing_class");
  $("#icon_password1").removeClass("input_changing_class");
  event.stopPropagation();
});

$("#i_phone").click(function(){
  $("#icon_user").removeClass("input_changing_class");
  $("#icon_phone").addClass("input_changing_class");
  $("#icon_password").removeClass("input_changing_class");
  $("#icon_password1").removeClass("input_changing_class");
  event.stopPropagation();
});

$("#i_password").click(function(){
  $("#icon_user").removeClass("input_changing_class");
  $("#icon_phone").removeClass("input_changing_class");
  $("#icon_password").addClass("input_changing_class");
  $("#icon_password1").removeClass("input_changing_class");
  event.stopPropagation();
});

$("#i_password_re").click(function(){
  $("#icon_user").removeClass("input_changing_class");
  $("#icon_phone").removeClass("input_changing_class");
  $("#icon_password").removeClass("input_changing_class");
  $("#icon_password1").addClass("input_changing_class");
  event.stopPropagation();
});

$(document).click(function(){
  $("#icon_user").removeClass("input_changing_class");
  $("#icon_phone").removeClass("input_changing_class");
  $("#icon_password").removeClass("input_changing_class");
  $("#icon_password1").removeClass("input_changing_class");

});
</script>
</body>
</html>
