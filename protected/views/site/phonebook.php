<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $dataProvider CActiveDataProvider */

$this->widget(
    'booster.widgets.TbBreadcrumbs',
    array(
        'links' => array('salarymonthlist'=>'#')
    )
);
?>
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">เบอร์โทรศัพท์ภายใน</h4>
    <p class="list-group-item-text">โทร 056 928-169 โทรสาร ธุรการ 056 928-168, งานประกัน 056 928-167</p>
  </a>
</div>
         <div class="row">
                         <div class="col-md-6">
                                <?php
                                $box = $this->beginWidget(
                                                'booster.widgets.TbPanel',
                                                array(
                                                    'title' => 'เบอร์โทรศัพท์',
                                                    'headerIcon' => 'phone-alt',
                                                    'context' => 'primary',
                                                    'padContent' => false,
                                                    'htmlOptions' => array('class' => 'bootstrap-widget-table')
                                                )
                                            );?>
                                               <ul class="list-group">
                                                                    <li class="list-group-item"><span class="badge">101</span>ห้องผู้อำนวยการ</li>
                                                                    <li class="list-group-item"><span class="badge">102</span>งานธุรการ</li>
                                                                    <li class="list-group-item"><span class="badge">103</span>งานการเงินและบัญชี <p><font color="red">มือถือ 08-0514-7775</font></li>
                                                                    <li class="list-group-item"><span class="badge">104</span>ห้องทำบัตร (เวชระเบียน) <p><font color="red">มือถือ08-2790-0416</font></li>
                                                                    <li class="list-group-item"><span class="badge">105</span>ห้องส่งเสริม <p><font color="red">มือถือ 08-2790-0424</font></li>
                                                                    <li class="list-group-item"><span class="badge">106</span>ห้องยานอก <p><font color="red">มือถือ 08-2790-0425</font></li>
                                                                    <li class="list-group-item"><span class="badge">107</span>ห้องอุบัติเหตุและฉุกเฉิน (ER) <p><font color="red">มือถือ 08-2790-0415</font></li>
                                                                    <li class="list-group-item"><span class="badge">108</span>ห้องเอ็กซเรย์ (X-Ray) <p><font color="red">มือถือ09-2223-2127</font></li>
                                                                    <li class="list-group-item"><span class="badge">109</span>ห้องชันสูตร (Lab) <p><font color="red">มือถือ 08-2790-0426</font></li>
                                                                    <li class="list-group-item"><span class="badge">110</span>ห้องทันตกรรม</li>
                                                                    <li class="list-group-item"><span class="badge">111</span>ห้องคลอด (LR) <p><font color="red">มือถือ 08-2790-0420</font></li>
                                                                    <li class="list-group-item"><span class="badge">112</span>ห้องผ่าตัด (OR) <p><font color="red">มือถือ 08-2790-0421<</font></li>
                                                                    <li class="list-group-item"><span class="badge">113</span>งานซ่อมบำรุง</li>
                                                                    <li class="list-group-item"><span class="badge">114</span>งานควบคุมโรค <p><font color="red">มือถือ 08-2790-0424</font></li>
                                                                    <li class="list-group-item"><span class="badge">115</span>ห้องพักแพทย์</li>
                                                                    <li class="list-group-item"><span class="badge">116</span>พนักงานขับรถ</li>
                                                                    <li class="list-group-item"><span class="badge">117</span>งานประกัน/หน.กลุ่มการพยาบาล <p><font color="red">มือถือ 08-2790-0427</font></li>
                                                                    <li class="list-group-item"><span class="badge">118</span>ตึกศัลยกรรมชาย <p><font color="red">มือถือ 08-2790-0417</font></li>
                                                                    <li class="list-group-item"><span class="badge">119</span>ตึกศัลยกรรมหญิง <p><font color="red">มือถือ 08-2790-0422</font></li>
                                                                    <li class="list-group-item"><span class="badge">120</span>ตึกอายุรกรรมชาย (Med ชาย) <p><font color="red">มือถือ08-2790-0418</font></li>
                                                                    <li class="list-group-item"><span class="badge">121</span>หน่วยจ่ายกลาง</li>
                                                                    <li class="list-group-item"><span class="badge">122</span>งานโภชนาการ</li>
                                                                    <li class="list-group-item"><span class="badge">123</span>ตึก ICU <p><font color="red">มือถือ 08-2790-0417</font></li>
                                                                    <li class="list-group-item"><span class="badge">124</span>ห้องประชุมศิริลักษณ์</li>
                                                                    <li class="list-group-item"><span class="badge">134</span>หอผู้ป่วยจักษุ</li>
                                                                    <li class="list-group-item"><span class="badge">142</span>ห้องหมอ Med (ห้องตรวจ NCD)</li>
                                                                    <li class="list-group-item"><span class="badge">148</span>งานรักษาความปลอดภัย</li>
                                                                    <li class="list-group-item"><span class="badge">150</span>คลังพัสดุ</li>
                                                                    <li class="list-group-item"><span class="badge">152</span>NICU เด็ก <p><font color="red">มือถือ 08-2790-0432</font></li>
                                                                    <li class="list-group-item"><span class="badge">154</span>ตึกพิเศษ ชั้น 4</li>
                                                                    <li class="list-group-item"><span class="badge">155</span>ตึกพิเศษ ชั้น 5</li>
                                                                    <li class="list-group-item"><span class="badge">157</span>ห้องตรวจักษุ</li>
                                                  </ul>
                                 <?php $this->endWidget(); ?>
                         </div>

                        <div class="col-md-6">
                                <?php
                                $box = $this->beginWidget(
                                                'booster.widgets.TbPanel',
                                                array(
                                                    'title' => 'เบอร์โทรศัพท์',
                                                    'headerIcon' => 'phone-alt',
                                                    'context' => 'primary',
                                                    'padContent' => false,
                                                    'htmlOptions' => array('class' => 'bootstrap-widget-table')
                                                )
                                            );?>
                                               <ul class="list-group">
                                                   <li class="list-group-item"><span class="badge">163</span>กลุ่มงานฝ่ายบริหารฯ</li>
                                                                <li class="list-group-item"><span class="badge">165</span>โรงซักฟอก</li>
                                                                <li class="list-group-item"><span class="badge">166</span>โกดังยา</li>
                                                                <li class="list-group-item"><span class="badge">167</span>ห้องเก็บเงิน เบอร์ 10</li>
                                                                <li class="list-group-item"><span class="badge">168</span>ตึกอายุรกรรมหญิง (Med หญิง) <p><font color="red">มือถือ 08-2790-0419</font></li>
                                                                <li class="list-group-item"><span class="badge">169</span>ห้องตรวจสูติกรรม</li>
                                                                <li class="list-group-item"><span class="badge">170</span>หน่วยกู้ชีพ (EMS) <p><font color="red">มือถือ 08-2790-0435</font></li>
                                                                <li class="list-group-item"><span class="badge">171</span>ประชาสัมพันธ์</li>
                                                                <li class="list-group-item"><span class="badge">172</span>ห้องศัลยกรรมกระดูก+ฉีดยาทำแผล</li>
                                                                <li class="list-group-item"><span class="badge">173</span>โต๊ะซักประวัติ (OPD) <p><font color="red">มือถือ 08-2790-0430</font></li>
                                                                <li class="list-group-item"><span class="badge">174</span>ห้องดาวพระศุกร์ (เอื้อมเดือน) <p><font color="red">มือถือ 08-2790-0434</font></li>
                                                                <li class="list-group-item"><span class="badge">176</span>งานเวชนิทัศน์และโสตทัศนศึกษา</li>
                                                                <li class="list-group-item"><span class="badge">177</span>หัวหน้าการเงิน,งานบุคลากร</li>
                                                                <li class="list-group-item"><span class="badge">178</span>ร้านค้าสหกรณ์</li>
                                                                <li class="list-group-item"><span class="badge">179</span>ตึกฝู้ป่วยกุมารเวช <p><font color="red">มือถือ 08-2790-0423</font></li>
                                                                <li class="list-group-item"><span class="badge">180</span>โปรแกรมเมอร์ (IT),คอมพิวเตอร์  
                                                                    <p><font color="red">มือถือ 09-2223-2122</font>
                                                                    <p><font color="red">พี่นัท มือถือ 08-6935-0514</font>
                                                                    <p><font color="red">ฟาร์ม มือถือ 08-1836-6290</font>
                                                                    <p><font color="red">โต้ง มือถือ 08-3873-2653</font>          
                                                                    <p><font color="red">ต่อ มือถือ 08-9905-0869</font>          
                                                                    <p><font color="red">แมน มือถือ 08-2882-8288</font>                
                                                                </li>                                                
                                                                <li class="list-group-item"><span class="badge">181</span>PCU</li>
                                                                <li class="list-group-item"><span class="badge">182</span>เบาหวานความดัน</li>
                                                                <li class="list-group-item"><span class="badge">183</span>โต๊ะซักประวัติ</li>
                                                                <li class="list-group-item"><span class="badge">184</span>ธุรการ,พัสดุ</li>
                                                                <li class="list-group-item"><span class="badge">185</span>กายภาพบำบัด</li>
                                                                <li class="list-group-item"><span class="badge">186</span>ห้องยาใน (เบอร์ 23) <p><font color="red">มือถือ 08-2790-0425</font></li>
                                                                <li class="list-group-item"><span class="badge">187</span>ห้องตรวจแพทย์นรุตม์</li>
                                                                <li class="list-group-item"><span class="badge">188</span>ห้องเพาะเชื้อ</li>
                                                                <li class="list-group-item"><span class="badge">189</span>ห้องตรวจอายุรกรรม</li>
                                                                <li class="list-group-item"><span class="badge">190</span>ห้องแพทย์แผนไทย <p><font color="red">มือถือ 08-2790-0431</font></li>
                                                                <li class="list-group-item"><span class="badge">191</span>OPD เบอร์ 5/EKG <p><font color="red">มือถือ 08-2790-0431</font></li>
                                                                <li class="list-group-item"><span class="badge">192</span>ไข้หวัดนก</li>
                                                                <li class="list-group-item"><span class="badge">194</span>CAPD ห้องล้างไต</li>
                                                                <li class="list-group-item"><span class="badge"></span>แพทย์เวรใน <p><font color="red">มือถือ 08-2790-0429</font></li>
                                                                <li class="list-group-item"><span class="badge"></span>แพทย์เวรนอก <p><font color="red">มือถือ 08-2790-0428</font></li>

                                                </ul>
                                 <?php $this->endWidget(); ?>
                         </div>
                    </div> 
    
    <br>
   