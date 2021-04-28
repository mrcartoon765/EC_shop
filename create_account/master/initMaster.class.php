<?php 

namespace create_account\master;

use config\Bootstrap;
use config\customer_login;

class initMaster
{
    public static function getDate()
    {
      // $month = $customer_birth['month'];
      // $day = $customer_birth['day'];
      // }{'';}
      $yearArr = [];
      $monthArr = [];
      $dayArr = [];
      $next_year  = date('Y') + 1;
      for ($i = 1900; $i < $next_year; $i ++) {
          $year = sprintf("%04d", $i);
          $yearArr[$year] = $year;
      }
      for ($i = 1; $i < 13; $i ++) {
        $month = sprintf("%02d", $i);
        $monthArr[$month] = $month;
      }
      for ($i = 1; $i < 31; $i ++) {
          $day = sprintf("%02d", $i);
          $dayArr[$day] = $day;
      }
      return [$yearArr, $monthArr, $dayArr];
      }
    }

    // // UPDATE Customer set (mail,password,family_name,first_name,family_name_kana,first_name_kana,year,month,day,zip1,zip2,address,tel1,tel2,tel3,contents,dm,update_date) set
    // ('donnnamondesyoka@gmail.com','$2y$10$Juj9.mWZEVAewLVj5kW1OeTDoC6FuvVxvxMEyuCULhH/u4LvdB20q','tekitou','tekiteou','tekitou','tekiteou','1900','01','01','028','3601','どんなもんでしょうか','222','6666','7777','','1', NOW() );