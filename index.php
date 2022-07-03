<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button  onclick="func1()">
      tik</button>
<div class="" id="table">

</div>
<script src="jquery-3.6.0.min.js">

</script>
<script type="text/javascript">

var a=3;
    function func1()
    {
      alert('123');
      $.ajax({
          method: "POST",
          url: "first.php",
          data: {a:a},
          success: function (data) {
alert(data);
            $("#table").html("");
               $("#table").html(data);
              a+=3;
          }
          });

    }
            </script>
</body>
</html>
