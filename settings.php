 <?php
    $data_name['data'] = array(
       "appnote" => "Start screen is managed on launch variable.",
        "aa_is_guide" => "false",
        "aa_is_guide_continue" => "false",
        "is_launch" => "false",
        "aa_is_lunchads" => "false",
        "title" => "GB Version",
        "description" => "GB What's tools for a chat app.",
        "ads_status" => "on",
        "ads_second" => 21,
        "aa_ads_click" => "2",
        "aa_ads_default_native" => "false",
        "aa_ads_native_on_off" => "true",
        "aa_ads_banner_on_off" => "true",
        "aa_is_twist" => "false",
        "aa_is_back_count" => "false",
        "aa_ads_nativecolor" => "",
        "aa_is_rating" => "false",
        "aa_is_splash_inter" => "false",
        "is_rectbanner" => "false",
        // "ads_type"=>"applovin",
        "ads_type"=>"google",
        // "ads_type"=>"facebook",
        "aa_privacy_policy" => "https://jdlaser.github.io/QRScanner_Policy.html",
        "ads1_appopen" => "/6499/example/app-open",
        "ads1_appopen_splash" => "/6499/example/app-open",
        "ads1_banner" => "/6499/example/banner",
        "ads1_inter_other" => "/6499/example/interstitial",
        "ads1_inter_splash" => "/6499/example/interstitial",
        "ads1_inter_start" => "/6499/example/interstitial",
        "ads1_native" => "/6499/example/native",
        "ads2_appopen" => "/6499/example/app-open",
        "ads2_appopen_splash" => "/6499/example/app-open",
        "ads2_banner" => "/6499/example/banner",
        "ads2_inter_other" => "/6499/example/interstitial",
        "ads2_inter_splash" => "/6499/example/interstitial",
        "ads2_inter_start" => "/6499/example/interstitial",
        "ads2_native" => "/6499/example/native",
        "fb_banner"=>"582097990409409_583761763576365",
        "fb_native"=>"582097990409409_583762496909625",
        "fb_inter"=>"582097990409409_583762266909648",
        "applovin_banner"=>"2b52cebad9b8696d",
        "applovin_native"=>"787b1aa2cb2f46ba",
        "applovin_native_small"=>"584f48a7181d437f",
        "applovin_inter"=>"84e6e7d470e7e3ef",
        "applovin_open"=>"1ada3b3a358664da",
        "home_screen_native"=>"false",
        "add_device_screen_native"=>"false",
        "dvr_type_screen_native"=>"false",
        "server_screen_native"=>"false",
        "video_type_screen_native"=>"false",
        "camara_type_screen_native"=>"false",
        "ip_monitor_screen_native"=>"true",
        "camara_manual_screen_native"=>"true",
        "recent_screen_banner"=>"false",
        "home_screen_content"=>"<h6>QR code scanning APP for Android devices that also supports scanning and creating QR codes and barcodes in various formats.You can create various QR codes and barcodes, such as contacts, products, URL, Wi-Fi, text, E-mail</h6>",
        "ocr_screen_content"=>""
    );

     $data_name['data']['main_list']=array(
        array(
               'id' => "1",
               'tool_name' =>"ScanBarcode",
               'is_show' =>"true"
            ),array(
               'id' => "2",
               'tool_name' =>"WhatsAppLink Generator",
               'is_show' =>"false"
            ),array(
               'id' => "3",
               'tool_name' =>"WhatsScan",
               'is_show' =>"false"
           ),array(
               'id' => "4",
               'tool_name' =>"GenerateQR code",
               'is_show' =>"true"
           )
        );
     $return_arr['msg']='Thank You';
     $return_arr['Status Code']='200';
     $return_arr= $data_name;
     echo json_encode($return_arr); 

?>
