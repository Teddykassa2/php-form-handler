<html>
  <head>
    <title>Form Handler</title>
  </head>
  <body>
    <h1>Form Handler</h1>

    <?php

    if(isset($_post["FirstName"])){//show data
          echo $_post["FirstName"];
      
    }else{//show form
          echo '
              <form method="post" action="">
                <p>First Name<input type="text"  name="FirstName"/></p>
                <p> <input type="submit" /></p>
              </form>
                ';
      
    }
?>
  </body>
</html>
