<?php

namespace create_account\master;

use config\customer_login;

class initMaster
{
    public static function getDate()
    {
        $customer_birth = customer_login::login_data();
        $yearArr = [];
        $monthArr = [];
        $dayArr = [];
        $next_year = date('Y') + 1;
        for ($i = 1900; $i < $next_year; $i++) {
            $year = sprintf("%04d", $i);
            if ($customer_birth['year'] == '') {
                $yearArr[$year] = $year . '年';
            } else {
                $yearArr[$year] = $customer_birth['year'] . '年';
            }
            for ($i = 1; $i < 13; $i++) {
                $month = sprintf("%02d", $i);
                if ($customer_birth['month'] == '') {
                    $monthArr[$month] = $month . '月';
                } else {
                    $monthArr[$month] = $customer_birth['month'] . '月';
                }
                for ($i = 1; $i < 31; $i++) {
                    $day = sprintf("%02d", $i);
                    if ($customer_birth['day'] == '') {
                        $dayArr[$day] = $day . '日';
                    } else {
                        $dayArr[$day] = $customer_birth['day'] . '日';
                    }
                    return [$yearArr, $monthArr, $dayArr];
                }
            }
        }
    }
}
