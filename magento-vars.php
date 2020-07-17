<?php
function isHttpHost($host)
{
    if (!isset($_SERVER['HTTP_HOST'])) {
    return false;
    }
    return $_SERVER['HTTP_HOST'] ===  $host;
}

if (isHttpHost("vivelacar.info")) {
    $_SERVER["MAGE_RUN_CODE"] = "base";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("www.vivelacar.info")){
    $_SERVER["MAGE_RUN_CODE"] = "base";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("bmw-abo.ch")) {
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_BMW";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("www.bmw-abo.ch")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_BMW";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("mini-abo.ch")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_MINI";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("www.mini-abo.ch")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_MINI";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("mgproduction.vivelacar.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_AUSTRIA";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("vivelacar.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_AUSTRIA";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("www.vivelacar.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_AUSTRIA";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("hyundai-abo.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_HYN";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("www.hyundai-abo.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_HYN";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("mgproduction.mitsubishi-abo.at")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_ABO_MTB";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("mgproduction.vivelacar.com")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_GERMANY";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}elseif (isHttpHost("mgproduction.vivelacar.ch")){
    $_SERVER["MAGE_RUN_CODE"] = "VLC_SWITZERLAND";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}
