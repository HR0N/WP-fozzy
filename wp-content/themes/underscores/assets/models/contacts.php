<?php

$mysql_host2 = "localhost";
$mysql_user2  = "marjonca_wp795";
$mysql_password2 = "Vp!)88m9BS";
$mysql_database2 = "marjonca_wp795";
global $connect2;
$connect2=mysqli_connect(
    $mysql_host2,
    $mysql_user2,
    $mysql_password2,
    $mysql_database2);
if ($connect2->connect_error) {
    die("Connection failed: " . $connect2->connect_error);
}
function connectDB2($sql){
    global $connect2;
    $result = $connect2->query($sql);
    return mysqli_fetch_all($result);
}

$contracts = connectDB2("SELECT * FROM `wp_user_contrcts`");

foreach ($contracts as $contract){
    if($contract[2] == 1){marketing_offer_1($contract);}
    if($contract[2] == 2){marketing_offer_2($contract);}
    if($contract[2] == 3){marketing_offer_3($contract);}
}

function marketing_offer_1($contract){
    $minmax_deposit = [1, 1099];
    $chargers_diapason = [.9, 1.2];
    $cd = $chargers_diapason;
    $expired = time()*1000 > $contract[5];
    if(!$contract[6] && !$expired){
        $full_bill = $contract[3] + $contract[4];
        $new_amount = $contract[4] + ($full_bill * ( rand($cd[0] * 10, $cd[1] * 10) / 1000));
        connectDB2("UPDATE `wp_user_contrcts` SET `income`=".$new_amount." WHERE `id`=".$contract[0]);
    }
    if($expired){connectDB2("UPDATE `wp_user_contrcts` SET `ended`=".true." WHERE `id`=".$contract[0]);}
}
function marketing_offer_2($contract){
    $minmax_deposit = [100, 9999];
    $chargers_diapason = [1.2, 1.45];
    $cd = $chargers_diapason;
    $expired = time()*1000 > $contract[5];
    if(!$contract[6] && !$expired){
        $full_bill = $contract[3] + $contract[4];
        $new_amount = $contract[4] + ($full_bill * ( rand($cd[0] * 10, $cd[1] * 10) / 1000));
        connectDB2("UPDATE `wp_user_contrcts` SET `income`=".$new_amount." WHERE `id`=".$contract[0]);
    }
    if($expired){connectDB2("UPDATE `wp_user_contrcts` SET `ended`=".true." WHERE `id`=".$contract[0]);}
}
function marketing_offer_3($contract){
    $minmax_deposit = [10000, 9999999];
    $chargers_diapason = [1.8, 2.13];
    $cd = $chargers_diapason;
    $expired = time()*1000 > $contract[5];
    if(!$contract[6] && !$expired){
        $full_bill = $contract[3] + $contract[4];
        $new_amount = $contract[4] + ($full_bill * ( rand($cd[0] * 10, $cd[1] * 10) / 1000));
        connectDB2("UPDATE `wp_user_contrcts` SET `income`=".$new_amount." WHERE `id`=".$contract[0]);
    }
    if($expired){connectDB2("UPDATE `wp_user_contrcts` SET `ended`=".true." WHERE `id`=".$contract[0]);}
}
