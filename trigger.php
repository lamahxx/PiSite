<?php
    if(isset($_POST['btn_submit']) == "On"){
                        $myfile = fopen("foo.txt", "w");
                        $txt = "yolo";
                        fwrite($myfile, $txt);
                        fclose($myfile);
    }
    if(isset($_POST['btn_submit2']) == "Off"){
                        $file = "foo.txt";
                        unlink($file);
    } ?>