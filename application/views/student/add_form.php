<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>uoc</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="post" action="<?php echo site_url('/student/add'); ?>">

          <div class="form-group">
            <label for="year">ปีการศึกษา</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา" maxlength="4" required style="width:200px" >
          </div>

          <div class="form-group">
            <label for="semester">ภาคการศึกษา</label>
            <input type="text" class="form-control" id="semester" name="semester" placeholder="ภาคการศึกษา" maxlength="1" required style="width:200px"  >
          </div>

          <div class="form-group">
            <label for="univ_id">รหัสสถานศึกษา</label>
          <!--  <input type="text" class="form-control" id="univ_id" name="univ_id" placeholder="รหัสสถานศึกษา" maxlength="5" required style="width:200px"> -->
         <select class="form-control" id="univ_id" name="univ_id" required style="width:300px">
              <?php foreach($univs->result() as $univ){ ?>
              <option value="<?php echo $univ->UNIV_ID; ?>"> <?php echo $univ->UNIV_NAME_TH; ?> </option>
            <?php } ?>
          </select>
          </div>

          <div class="form-group">
            <label for="citzen_id">รหัสประจำตัวประชาชน</label>
            <input type="text" class="form-control" id="citzen_id" name="citzen_id" placeholder="รหัสประจำตัวประชาชน" maxlength="13" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="prefix_name_id">รหัสคำหน้าชื่อ</label>
            <!-- <input type="text" class="form-control" id="prefix_name_id" name="prefix_name_id" placeholder="รหัสคำนำหน้าชื่อ" maxlength="3" required style="width:200px"> -->
            <select class="form-control"  id="prefix_name_id" name="prefix_name_id" style="width:215px">
                <option value="003">นาย</option>
                <option value="004">นางสาว</option>
                <option value="005">นาง</option>
            </select>
          </div>

          <div class="form-group">
            <label for="std_fname">ชื่อ</label>
            <input type="text" class="form-control" id="std_fname" name="std_fname" placeholder="ชื่อ" maxlength="50" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="std_mname">ชื่อกลางของนักศึกษา หรือฉายาของพระสงฆ์ (ถ้ามี)</label>
            <input type="text" class="form-control" id="std_mname" name="std_mname" placeholder="ชื่อกลางของนักศึกษา หรือฉายาของพระสงฆ์ (ถ้ามี)" maxlength="80" required style="width:355px">
          </div>

          <div class="form-group">
            <label for="std_lname">ชื่อสกุล</label>
            <input type="text" class="form-control" id="std_lname" name="std_lname" placeholder="ชื่อสกุล" maxlength="50" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="gender_id">รหัสเพศ</label>
          <!--  <input type="text" class="form-control" id="gender_id" name="gender_id" placeholder="รหัสเพศ" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="gender_id" name="gender_id" style="width:215px">
              <option value="1">ชาย</option>
              <option value="2">หญิง</option>
          </select>
          </div>

          <div class="form-group">
            <label for="birthday">วันเดือนปีเกิด (ปีพุทธศักราช) DD/MM/YYYY</label>
            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="วันเดือนปีเกิด (ปีพุทธศักราช) DD/MM/YYYY" maxlength="10" required  style="width:215px">
          </div>

          <div class="form-group">
            <label for="province_id">รหัสจังหวัดภูมิลำเนา</label>
          <!--  <input type="text" class="form-control" id="province_id" name="province_id" placeholder="รหัสจังหวัดภูมิลำเนา" maxlength="2" required style="width:200px"> -->
            <select class="form-control" id="province_id" name="province_id" required style="width:215px">
                <?php foreach($provinces->result() as $province){ ?>
                <option value="<?php echo $province->PROVINCE_ID; ?>"> <?php echo $province->PROVINCE_NAME_TH; ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nation_id">รหัสสัญชาติ</label>
          <!--  <input type="text" class="form-control" id="nation_id" name="nation_id" placeholder="รหัสสัญชาติ" maxlength="2" required style="width:200px"> -->
            <select class="form-control" id="nation_id" name="nation_id" required style="width:215px">
                <?php foreach($nations->result() as $nation){ ?>
                <option value="<?php echo $nation->NATION_ID; ?>"> <?php echo $nation->NATION_NAME_ENG; ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="admit_year">ปีการศึกษาที่เริ่มเข้าเรียน</label>
        <input type="text" class="form-control" id="admit_year" name="admit_year" placeholder="ปีการศึกษาที่เริ่มเข้าเรียน" maxlength="4" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="fac_id">รหัสคณะที่ศึกษา (ที่กำลังศึกษาปัจจุบัน)</label>
        <!--  <input type="text" class="form-control" id="fac_id" name="fac_id" placeholder="รหัสคณะที่ศึกษา (ที่กำลังศึกษาปัจจุบัน)" maxlength="5" required style="width:200px"> -->
        <select class="form-control" id="fac_id" name="fac_id" required style="width:500px">
            <?php foreach($facs->result() as $fac){ ?>
            <option value="<?php echo $fac->FAC_ID; ?>"> <?php echo $fac->FAC_NAME; ?> </option>
          <?php } ?>
        </select>
          </div>

          <div class="form-group">
            <label for="study_type_id">รหัสประเภทการเรียน</label>
          <!--  <input type="text" class="form-control" id="study_type_id" name="study_type_id" placeholder="รหัสประเภทการเรียน" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="study_type_id" name="study_type_id" style="width:215px">
              <option value="1">โครงการปกติ</option>
              <option value="2">โครงการพิเศษ</option>
          </select>
          </div>

          <div class="form-group">
            <label for="study_time_id">รหัสประเภทเวลาเรียน</label>
          <!--  <input type="text" class="form-control" id="study_time_id" name="study_time_id" placeholder="รหัสประเภทเวลาเรียน" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="study_time_id" name="study_time_id" style="width:215px">
              <option value="1">วันธรรมดา (เช้า)</option>
              <option value="2">วันธรรมดา (บ่าย)</option>
              <option value="3">วันธรรมดา (ค่ำ)</option>
              <option value="4">เสาร์ อาทิตย์</option>
          </select>
          </div>

          <div class="form-group">
            <label for="curr_reg_id">รหัสประเภทการลงทะเบียนเรียน</label>
          <!--  <input type="text" class="form-control" id="curr_reg_id" name="curr_reg_id" placeholder="รหัสประเภทการลงทะเบียนเรียน" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="curr_reg_id" name="curr_reg_id" style="width:215px">
              <option value="0">ไม่เต็มเวลา</option>
              <option value="1">เต็มเวลา</option>
          </select>
          </div>

          <div class="form-group">
            <label for="class">ชั้นปี ตัวเลขจำนวนเต็ม</label>
            <input type="text" class="form-control" id="class" name="class" placeholder="ชั้นปี ตัวเลขจำนวนเต็ม" maxlength="2" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="grad_status_id">รหัสสถานภาพนักศึกษาที่คาดว่าจะจบ</label>
          <!--  <input type="text" class="form-control" id="grad_status_id" name="grad_status_id" placeholder="รหัสสถานภาพนักศึกษาที่คาดว่าจะจบ" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="grad_status_id" name="grad_status_id" style="width:250px">
              <option value="0">ไม่ใช่นักศึกษาที่คาดว่าจะจบ</option>
              <option value="1">ใช่นักศึกษาที่คาดว่าจะจบ</option>
          </select>
          </div>

          <div class="form-group">
            <label for="std_status_id">รหัสสถานภาพนักศึกษา</label>
         <!--  <input type="text" class="form-control" id="std_status_id" name="std_status_id" placeholder="รหัสสถานภาพนักศึกษา" maxlength="1" required style="width:200px"> -->
         <select class="form-control" id="std_status_id" name="std_status_id" required style="width:500px">
             <?php foreach($stds->result() as $std){ ?>
             <option value="<?php echo $std->STD_STATUS_ID; ?>"> <?php echo $std->STD_STATUS_NAME; ?> </option>
           <?php } ?>
         </select>
          </div>

          <div class="form-group">
            <label for="gpa">เกรดเฉลี่ย (เฉพาะภาคการศึกษาล่าสุด) *จำเป็นต้องใส่ทศนิยม 2 หลัก</label>
            <input type="text" class="form-control" id="gpa" name="gpa" placeholder="เกรดเฉลี่ย (เฉพาะภาคการศึกษาล่าสุด) *จำเป็นต้องใส่ทศนิยม 2 หลัก" maxlength="4" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="acc_gpa">เกรดเฉลี่ยสะสม (ตั้งแต่เริ่มเข้าเรียน ถึง ภาคการศึกษาล่าสุด) *จำเป็นต้องใส่ทศนิยม 2 หลัก</label>
            <input type="text" class="form-control" id="acc_gpa" name="acc_gpa" placeholder="เกรดเฉลี่ยสะสม (ตั้งแต่เริ่มเข้าเรียน ถึง ภาคการศึกษาล่าสุด) *จำเป็นต้องใส่ทศนิยม 2 หลัก" maxlength="4" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="acc_credit">หน่วยกิตสะสม (คิดเฉพาะรายวิชาที่นักศึกษาสอบผ่านเกณฑ์) (ตัวเลขจำนวนเต็ม)</label>
            <input type="text" class="form-control" id="acc_credit" name="acc_credit" placeholder="หน่วยกิตสะสม (คิดเฉพาะรายวิชาที่นักศึกษาสอบผ่านเกณฑ์) (ตัวเลขจำนวนเต็ม)" maxlength="3" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="deform_id">รหัสความพิการ</label>
            <!-- <input type="text" class="form-control" id="deform_id" name="deform_id" placeholder="รหัสความพิการ" maxlength="2" required style="width:200px"> -->
            <select class="form-control" id="deform_id" name="deform_id" required style="width:500px">
                <?php foreach($deforms->result() as $deform){ ?>
                <option value="<?php echo $deform->DEFORM_ID; ?>"> <?php echo $deform->DEFORM_NAME; ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="fund_status_id">รหัสสถานภาพการรับทุน (ทุนทุกประเภท)</label>
          <!--  <input type="text" class="form-control" id="fund_status_id" name="fund_status_id" placeholder="รหัสสถานภาพการรับทุน (ทุนทุกประเภท)" maxlength="1" required style="width:200px"> -->
            <select class="form-control"  id="fund_status_id" name="fund_status_id" style="width:280px">
                <option value="0">ไม่ได้รับทุน</option>
                <option value="1">ทุนที่ต้องชดใช้เงินทุนการศึกษา</option>
                <option value="2">ทุนที่ไม่ต้องชดใช้เงินทุนการศึกษา</option>
            </select>
          </div>

          <div class="form-group">
            <label for="talent">ความถนัด/ความสามารถพิเศษ</label>
          <!--  <input type="text" class="form-control" id="talent" name="talent" placeholder="ความถนัด/ความสามารถพิเศษ" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="talent" name="talent" style="width:250px">
              <option value="00">อื่นๆ</option>
              <option value="01">ด้านภาษาต่างประเทศ</option>
              <option value="02">ด้านการใช้คอมพิวเตอร์</option>
              <option value="03">ด้านกิจกรรมสันทนาการ</option>
              <option value="04">ด้านศิลปะ</option>
              <option value="05">ด้านกีฬา</option>
              <option value="06">ด้านนาฎศิลป/ดนตรีขับร้อง</option>
          </select>
          </div>

          <div class="form-group">
            <label for="fat_citzen_id">รหัสบัตรประชาชนบิดา</label>
            <input type="text" class="form-control" id="fat_citzen_id" name="fat_citzen_id" placeholder="รหัสบัตรประชาชนบิดา" maxlength="13" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="fat_status_id">รหัสสถานภาพการมีชีวิตอยู่ของบิดา</label>
          <!--  <input type="text" class="form-control" id="fat_status_id" name="fat_status_id" placeholder="รหัสสถานภาพการมีชีวิตอยู่ของบิดา" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="fat_status_id" name="fat_status_id" style="width:215px">
              <option value="0">ถึงแก่กรรม</option>
              <option value="1">มีชีวิต</option>
              <option value="9">ไม่ระบุ</option>
          </select>
          </div>

          <div class="form-group">
            <label for="fat_revenue_id">รหัสรายได้บิดา</label>
          <!--  <input type="text" class="form-control" id="fat_revenue_id" name="fat_revenue_id" placeholder="รหัสรายได้บิดา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="fat_revenue_id" name="fat_revenue_id" style="width:250px">
              <option value="00">ไม่มีรายได้</option>
              <option value="11"> ≤ 80,000 บาทต่อปี </option>
              <option value="12"> 80,001-100,000 บาทต่อปี </option>
              <option value="13"> 100,001 - 120,000 บาทต่อปี </option>
              <option value="14"> 120,001 - 130,000 บาทต่อปี </option>
              <option value="15"> 130,001 - 149,999 บาทต่อปี </option>
              <option value="20"> 150,000 - 300,000 บาทต่อปี </option>
              <option value="30"> > 300,000 บาทต่อปี </option>
              <option value="90"> ไม่ระบุ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="fat_occup_id">รหัสอาชีพบิดา</label>
          <!--  <input type="text" class="form-control" id="fat_occup_id" name="fat_occup_id" placeholder="รหัสอาชีพบิดา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="fat_occup_id" name="fat_occup_id" style="width:450px">
              <option value="00"> ไม่ระบุ </option>
              <option value="01"> รับราชการ </option>
              <option value="02"> รัฐวิสาหกิจ </option>
              <option value="03"> พนักงานหน่วยงานเอกชน/ลูกจ้างหน่วยงานเอกชน </option>
              <option value="04"> ค้าขาย,ธุรกิจส่วนตัวและอาชีพอิสระ/รับจ้างอิสระแบบไม่ประจำ </option>
              <option value="05"> เกษตร,ประมง </option>
              <option value="06"> ไม่มีเงินได้ </option>
              <option value="07"> อื่นๆ </option>
              <option value="08"> พนักงานราชการ/ลูกจ้างหน่วยงานราชการ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="mot_citzen_id">รหัสบัตรประชาชนมารดา</label>
            <input type="text" class="form-control" id="mot_citzen_id" name="mot_citzen_id" placeholder="รหัสบัตรประชาชนมารดา" maxlength="13" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="mot_status_id">รหัสสถานภาพการมีชีวิตอยู่ของมารดา</label>
          <!--  <input type="text" class="form-control" id="mot_status_id" name="mot_status_id" placeholder="รหัสสถานภาพการมีชีวิตอยู่ของมารดา" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="mot_status_id" name="mot_status_id" style="width:215px">
              <option value="0">ถึงแก่กรรม</option>
              <option value="1">มีชีวิต</option>
              <option value="9">ไม่ระบุ</option>
          </select>
          </div>

          <div class="form-group">
            <label for="mot_revenue_id">รหัสรายได้มารดา</label>
          <!--  <input type="text" class="form-control" id="mot_revenue_id" name="mot_revenue_id" placeholder="รหัสรายได้มารดา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="mot_revenue_id" name="mot_revenue_id" style="width:250px">
              <option value="00">ไม่มีรายได้</option>
              <option value="11"> ≤ 80,000 บาทต่อปี </option>
              <option value="12"> 80,001-100,000 บาทต่อปี </option>
              <option value="13"> 100,001 - 120,000 บาทต่อปี </option>
              <option value="14"> 120,001 - 130,000 บาทต่อปี </option>
              <option value="15"> 130,001 - 149,999 บาทต่อปี </option>
              <option value="20"> 150,000 - 300,000 บาทต่อปี </option>
              <option value="30"> > 300,000 บาทต่อปี </option>
              <option value="90"> ไม่ระบุ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="mot_occup_id">รหัสอาชีพมารดา</label>
          <!--  <input type="text" class="form-control" id="mot_occup_id" name="mot_occup_id" placeholder="รหัสอาชีพมารดา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="mot_occup_id" name="mot_occup_id" style="width:450px">
              <option value="00"> ไม่ระบุ </option>
              <option value="01"> รับราชการ </option>
              <option value="02"> รัฐวิสาหกิจ </option>
              <option value="03"> พนักงานหน่วยงานเอกชน/ลูกจ้างหน่วยงานเอกชน </option>
              <option value="04"> ค้าขาย,ธุรกิจส่วนตัวและอาชีพอิสระ/รับจ้างอิสระแบบไม่ประจำ </option>
              <option value="05"> เกษตร,ประมง </option>
              <option value="06"> ไม่มีเงินได้ </option>
              <option value="07"> อื่นๆ </option>
              <option value="08"> พนักงานราชการ/ลูกจ้างหน่วยงานราชการ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="par_status_id">รหัสสถานภาพบิดา-มารดา</label>
          <!--  <input type="text" class="form-control" id="par_status_id" name="par_status_id" placeholder="รหัสสถานภาพบิดา-มารดา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="par_status_id" name="par_status_id" style="width:250px">
              <option value="00"> ไม่ระบุ </option>
              <option value="01"> อยู่ด้วยกัน </option>
              <option value="02"> แยกกันอยู่ </option>
              <option value="03"> หย่าร้าง </option>
              <option value="04"> บิดาถึงแก่กรรม </option>
              <option value="05"> มารดาถึงแก่กรรม </option>
              <option value="06"> บิดาและมารดาถึงแก่กรรม </option>
              <option value="07"> บิดาแต่งงานใหม่ </option>
              <option value="08"> มารดาแต่งงานใหม่ </option>
              <option value="09"> บิดาและมารดาแต่งงานใหม่ </option>
          </select>
        </div>

          <div class="form-group">
            <label for="par_citzen_id">รหัสบัตรประชาชนผู้ปกครอง</label>
            <input type="text" class="form-control" id="par_citzen_id" name="par_citzen_id" placeholder="รหัสบัตรประชาชนผู้ปกครอง" maxlength="13" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="par_relative_id">รหัสความเกี่ยวข้อง ระหว่าง ผู้ปกครอง กับ นักศึกษา</label>
          <!--  <input type="text" class="form-control" id="par_relative_id" name="par_relative_id" placeholder="รหัสความเกี่ยวข้อง ระหว่าง ผู้ปกครอง กับ นักศึกษา" maxlength="1" required style="width:200px"> -->
          <select class="form-control"  id="par_relative_id" name="par_relative_id" style="width:280px">
              <option value="1"> ญาติ </option>
              <option value="2"> นักศึกษาเป็นผู้ปกครองตัวเอง </option>
              <option value="3"> ผู้อุปถัมภ์ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="religion_id">รหัสศาสนา</label>
          <!--  <input type="text" class="form-control" id="religion_id" name="religion_id" placeholder="รหัสศาสนา" maxlength="2" required style="width:200px"> -->
          <select class="form-control"  id="religion_id" name="religion_id" style="width:280px">
              <option value="00"> ไม่นับถือศาสนาใด </option>
              <option value="01"> ศาสนาพุทธ </option>
              <option value="02"> ศาสนาอิสลาม </option>
              <option value="03"> ศาสนาฮินดู </option>
              <option value="04"> ศาสนายิว </option>
              <option value="05"> ศาสนาซิกซ์ </option>
              <option value="06"> ศาสนาคริสต์ </option>
              <option value="07"> ศาสนาเชน </option>
              <option value="08"> ศาสนาโซโรอัสเตอร์ </option>
              <option value="09"> ศาสนาบาไฮ </option>
          </select>
          </div>

          <div class="form-group">
            <label for="curr_id">รหัสหลักสูตรที่ศึกษา (ที่กำลังศึกษาปัจจุบัน)</label>
            <input type="text" class="form-control" id="curr_id" name="curr_id" placeholder="รหัสหลักสูตรที่ศึกษา (ที่กำลังศึกษาปัจจุบัน)" maxlength="14" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="std_id">รหัสนักศึกษา</label>
            <input type="text" class="form-control" id="std_id" name="std_id" placeholder="รหัสนักศึกษา" maxlength="13" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="race_id">รหัสเชื้อชาติ</label>
          <!--  <input type="text" class="form-control" id="race_id" name="race_id" placeholder="รหัสเชื้อชาติ" maxlength="3" required style="width:200px"> -->
            <select class="form-control" id="race_id" name="race_id" required style="width:215px">
                <?php foreach($races->result() as $race){ ?>
                <option value="<?php echo $race->RACE_ID; ?>"> <?php echo $race->RACE_NAME; ?> </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="num_credit">จำนวนหน่วยกิตที่ลงทะเบียน ในภาคการเรียนปัจจุบัน</label>
            <input type="text" class="form-control" id="num_credit" name="num_credit" placeholder="จำนวนหน่วยกิตที่ลงทะเบียน ในภาคการเรียนปัจจุบัน" maxlength="2" required style="width:200px">
          </div>

          <div class="form-group">
            <label for="passport_number">เลขที่หนังสือเดินทาง</label>
            <input type="text" class="form-control" id="passport_number" name="passport_number" placeholder="เลขที่หนังสือเดินทาง" maxlength="20" style="width:200px">
          </div>

          <div class="form-group">
            <label for="passport_startdate">วันออกหนังสือเดินทาง</label>
            <input type="text" class="form-control" id="passport_startdate" name="passport_startdate" placeholder="วันออกหนังสือเดินทาง" maxlength="10" style="width:200px">
          </div>

          <div class="form-group">
            <label for="passport_enddate">วันหมดอายุของหนังสือเดินทาง</label>
            <input type="text" class="form-control" id="passport_enddate" name="passport_enddate" placeholder="วันหมดอายุของหนังสือเดินทาง" maxlength="10" style="width:200px">
          </div>

          <div class="form-group">
            <label for="passport_status">สถานะของหนังสือเดินทาง</label>
            <input type="text" class="form-control" id="passport_status" name="passport_status" placeholder="สถานะของหนังสือเดินทาง" maxlength="1" style="width:200px">
          </div>

              <input type="submit" value="submit" class="btn btn-default">

          </div>
        </form>
      </div>

    </div>
  </div>



</body>

</html>
