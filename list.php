<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <?php 
          if(isset($_POST['submit_data'])){
              $name=$_POST['name'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              

        ?>
        <h2 style="color:green"> Your Registration Data !!</h2>
        <table>
            <tr>
                <td> Name</td>
                <td> email</td>
                <td> Password</td>
            </tr>
            <tr>
                <td> <?php echo $name; ?> </td>
                <td> <?php echo $email; ?> </td>
                <td> <?php echo $password; ?> </td>
            </tr>
        </table>
        <?php } else echo '<h3 class="warning">Oppss !! You Cannot Access This Page Directly !!!</h3>'; ?>
 </body>
</html>
