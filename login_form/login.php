<html>
    <body>
        <?php
        $host="localhost";
        $user="root";
        $password="";
        $db="demo";

        mysql_connect($host,$user,$password);
        mysql_select_db($dp);

        if(isset($_POST['pname'])){
        $uname=$_POST['pname'];
        $password=$_POST["password"];

        $sql="SELECT * FROM loginform WHERE username='".$uname."'AND Pass='".$password."' limit 1";
            
        $result=mysql_query($sql);

            if(mysql_num_rows($result)==1){
               echo "you have sucessfully logged in";
                exit();
            }
            else{
                echo "you have entered incorrect password";
                exit();
            }


        }
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>