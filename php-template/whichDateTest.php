<?php
    include 'empty.php';
    function test() {

        if (quelleDate() === date('d')."/".date("m")."/".date('Y')) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");

            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
