<?php
    if(isset($_POST['btn_ledOn']) == "On"){
                        $myfile = fopen("foo.txt", "w");
                        $txt = "yolo";
                        fwrite($myfile, $txt);
                        fclose($myfile);
    }
    if(isset($_POST['btn_ledOff']) == "Off"){
                        $file = "foo.txt";
                        if ($file){
                            unlink($file);
                            session_destroy();
                        }
    } ?>