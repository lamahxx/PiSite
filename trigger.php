/************************************
/*      Php code to trigger L.E.D
/************************************

<?php
    if($_REQUEST['btn_submit'] == "On"){
                        $myfile = fopen("foo.txt", "w");
                        $txt = "yolo";
                        fwrite($myfile, $txt);
                        fclose($myfile);
    }
    if($_REQUEST['btn_submit2'] == "Off"){
                        $file = "foo.txt";
                        unlink($file);
    }
?>

