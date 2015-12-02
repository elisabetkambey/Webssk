<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>Document</title>
</head>
<body>
    <button id="but" type="button" onclick="next();">Next</button>
    <br><br>
    <form id="formulir">
      <input type="text" name="name" placeholder="Name">
      <br>
      <input type="text" name="email" placeholder="Email">
      <br>
      <div id="group-check"><input id="check" disabled type="checkbox" name="agree" value="yes"> Agree</div>
      <br>
      <input id="sub" type="submit" disabled>
    	</form>
	
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script>
    function next() {
      $("#formulir :input").prop("readonly", true);
		
      $("#group-check").show();
      $("#sub").show();

      $('#check').prop('checked', false);
      $("#check").prop('readonly', false);
      $("#check").prop('disabled', false);
      $("#sub").prop('readonly', false);
      $("#sub").prop('disabled', false);

      $("#but").attr("onclick", "back();");
      $('#but').html('Back');
    }
    function back() {
      $("#formulir :input").prop("readonly", false);

      $("#group-check").hide();
      $("#sub").hide();

      $("#check").prop('disabled', true);
      $("#sub").prop('disabled', true);

      $("#but").attr("onclick", "next();");
      $('#but').html('Next');
    }
    $("#group-check").hide();
    $("#sub").hide();
  </script>
</body>
</html>