<?php

session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];

?>


<?php

 session_destroy(); //destroy entire session 

?>
<?php

unset($_SESSION['product']); //destroy product session item 

?>
