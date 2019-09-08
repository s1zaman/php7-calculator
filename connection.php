<?php
function is_connected()
{
    $connected = @fsockopen("www.x.com", 80);
                                        //website, port  (try 80 or 443)
    if ($connected)
    {
        $is_conn = true; //action when connected
        fclose($connected);
        echo <<<IOB0
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
IOB0;
    }
    else
    {
        $is_conn = false;
        echo <<<IOB1
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
IOB1;
    }
    return $is_conn;
}
?>
