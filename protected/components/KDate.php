<?php

class KDate extends CApplicationComponent {
    public function getNowThai() {
        return date("d/m/").(date("Y")+543);
    }
    public function getStartBudgetDate(){
      $Curr_Month = date("m");
          if ($Curr_Month>9){
                 return date("1/10/".(date("Y")+543));
          } else {
                return date("1/10/".(date("Y")+542));
          }
    }
        public function getEndBudgetDate(){
      $Curr_Month = date("m");
          if ($Curr_Month>9){
                 return date("30/09/".(date("Y")+544));
          } else {
                return date("30/09/".(date("Y")+543));
          }
    }
     public function getStartBudgetMySQLDate(){
      $Curr_Month = date("m");
          if ($Curr_Month>9){
                 return date(date("Y")."-10-01");
          } else {
                return date((date("Y")-1)."-10-01");
          }
    }
    public function getEndBudgetMySQLDate(){
      $Curr_Month = date("m");
          if ($Curr_Month>9){
                 return date((date("Y")-1)."-09-30");
          } else {
                return date(date("Y")."-09-30");
          }
    }
    public function getMonth() {
        $arr = array(
                "มกราคม",
                "กุมภาพันธ์",
                "มีนาคม",
                "เมษายน",
                "พฤษภาคม",
                "มิถุนายน",
                "กรกฏาคม",
                "สิงหาคม",
                "กันยายน",
                "ตุลาคม",
                "พฤศจิกายน",
                "ธันวาคม"
                );
        return $arr;
    } 
    public function getNowAddYearThai($next_year) {
        $d = date("d");
        $m = date("m");
        $y = date("Y") + $next_year +543;
        return "$y-$m-$d";        
    }
    
    public function convertThaiToMysqlDate($date) {
        $arr = explode("/",$date);
        $y = $arr[2];
        $m = $arr[1];
        $d = $arr[0];
        return "$y-$m-$d";        
    }
    
    public function convertMysqlToThaiDate($date) {
        $arr = explode("-",$date);
        $y = $arr[0]+543;
        $m = $arr[1];
        $d = $arr[2];
        $m = $m-1;
          $arrMonth = array("มกราคม",
                "กุมภาพันธ์",
                "มีนาคม",
                "เมษายน",
                "พฤษภาคม",
                "มิถุนายน",
                "กรกฏาคม",
                "สิงหาคม",
                "กันยายน",
                "ตุลาคม",
                "พฤศจิกายน",
                "ธันวาคม");
        return "$d-$arrMonth[$m]-$y";        
    }
   
    
    public function getYear(){
        $currentYear = date("Y");
        $prevYear = $currentYear-5;
        
        $arr = array();
        for ($i=$prevYear; $i<= $currentyear;$i++) {
            $arr[$i] = $i;
        }
        return $arr;
    }
}