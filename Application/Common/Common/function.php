<?php
function checkLogin(){
    if(!session("login")){
        return false;
    }
    return true;
}