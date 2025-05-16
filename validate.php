<?php
include "connection.php";
function validate($input){
    global $con;
    $input=trim($input);
    $input=strip_tags($input); // me add for check
    $input=stripcslashes($input);
    $input=htmlspecialchars($input);
    $input=htmlentities($input); // extra
    $input=preg_replace('/\s+/', '', htmlentities($input));
   // $input=htmlentities($input, ENT_QUOTES);
    $input = mysqli_real_escape_string($con, $input);
    return $input;

    //$input=htmlspecialchars($input);
    //$input=htmlentities($input);
   // $input=htmlentities($input, ENT_QUOTES);
    //https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php
    //https://www.youtube.com/watch?v=D8L7l1qAgd4 encode decode
    //https://www.youtube.com/watch?v=D8L7l1qAgd4
    //echo html_entity_decode($input)
    //echo htmlspecialchars_decode($input);

    // for knowage
   // echo "<pre>";
   // print_r(get_html_translation_table(HTML_ENTITIES));
  //  echo "<pre>";
}

?>
