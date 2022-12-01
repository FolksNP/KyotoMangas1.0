<?php
if (!$con = mysqli_connect('localhost', 'root', '', 'kyotomangas')) {
    echo "ERRO";
}
mysqli_query($con, "SET NAMES utf8");

