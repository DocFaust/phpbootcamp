<?php
session_start();
//$_SESSION["name"] = "Max";
print_r($_SESSION);
var_dump(session_save_path());
session_regenerate_id(true);
print_r($_SESSION);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

