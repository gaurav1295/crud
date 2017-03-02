<html>
<head>
<link rel="stylesheet" href="\assets\css\login.css">
</head>
<body>
<div class="login">
  <div class="login_f">
    <form class="one" id="one" action="" method="post">
      <div class="name_input">
        <span class="glyphicon glyphicon-user icons" id="icon_user"></span>
        <input type="text" name="username" class="input_f" placeholder="username" id="i_user">
      </div>

      <div class="name_input">
        <span class="glyphicon glyphicon-tree-deciduous icons" id="icon_password"> </span>
        <input type="password" name="password" class="input_f" placeholder="password" id="i_password">
      </div>

      <button name="enter" class="enter" id="login" onfocus="this.placeholder = ''">Login</button>
      <button name="pword" class="enter" id="register"><a href="\templates\registration.php">Register</a></button>
    </form>
  </div>
</div>


<script>
$('#i_user').click(function () {

	  $('#icon_user').addClass('input_changing_class');
    $('#icon_password').removeClass('input_changing_class');
    event.stopPropagation();
});

$('#i_password').click(function () {

	  $('#icon_password').addClass('input_changing_class');
    $('#icon_user').removeClass('input_changing_class');
    event.stopPropagation();
});

$(document).click(function(){

  $('#icon_user').removeClass('input_changing_class');
  $('#icon_password').removeClass('input_changing_class');

});

</script>
</body>
</html>
