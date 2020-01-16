<?php
/**
 * Created by PhpStorm.
 * User: Maxipain
 * Date: 1/16/2020
 * Time: 12:42 PM
 */
session_start();
session_destroy();
header('location:login');