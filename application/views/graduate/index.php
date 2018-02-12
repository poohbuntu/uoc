<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

    <title>ข้อมูลผู้สำเร็จการศึกษา</title>
<!--
    <style media="screen">
      tbody{
        text-transform: lowercase;
      }
    </style>
-->
  </head>
  <body>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td>ลำดับที่</td>
          <td>ปีที่ส่งข้อมูล</td>
          <td>สถานศึกษา</td>
          <td>รหัสประจำตัวประชาชน</td>
          <td>รหัสนักศึกษา</td>
          <td>คำนำหน้าชื่อ</td>
          <td>ชื่อนักศึกษา</td>
          <td>ชื่อกลาง(ถ้ามี)</td>
          <td>นามสกุล</td>
          <td>First Name</td>
          <td>Middle Name</td>
          <td>Last Name</td>
          <td>เพศ</td>
          <td>วันเดือนปีเกิด(พ.ศ)</td>
          <td>เกรดเฉลี่ย</td>
          <td>เลขรหัสประจำบ้าน</td>
          <td>เลขที่บ้าน</td>
          <td>ชื่อที่อยู่</td>
          <td>หมู่</td>
          <td>ตรอก/ซอย</td>
          <td>ถนน</td>
          <td>จังหวัด</td>
          <td>อำเภอ/เขต</td>
          <td>ตำบล/แขวง</td>
          <td>หมายเลขโทรศัพท์</td>
          <td>รหัสไปรษณีย์</td>
          <td>เชื้อชาติ</td>
          <td>ศาสนา</td>
          <td>อีเมล</td>
          <td>วันที่สำเร็จการศึกษา(พ.ศ.)</td>
          <td>รหัสหลักสูตรที่สำเร็จการศึกษา</td>
          <td>ลำดับของปริญญาในหลักสูตร</td>
          <td>สัญชาติ</td>
          <td>เลขที่หนังสือเดินทาง</td>
          <td>วันที่ออกหนังสือเดินทาง(ค.ศ)</td>
          <td>วันหมดอายุของหนังสือเดินทาง(ค.ศ)</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $n = 1;
          foreach ($graduate as $row) {
            echo '<tr>';
            echo '<td>'.$n.'</td>';;
            echo '<td>'.$row->YEAR.'</td>';
            echo '<td>'.$row->UNIV_NAME_TH.'</td>';
            echo '<td>'.$row->CITIZEN_ID.'</td>';
            echo '<td>'.$row->STD_ID.'</td>';
            echo '<td>'.$row->FULLNAME.'</td>';
            echo '<td>'.$row->STD_FNAME.'</td>';
            echo '<td>'.$row->STD_MNAME.'</td>';
            echo '<td>'.$row->STD_LNAME.'</td>';
            echo '<td>'.$row->STD_FNAME_EN.'</td>';
            echo '<td>'.$row->STD_MNAME_EN.'</td>';
            echo '<td>'.$row->STD_LNAME_EN.'</td>';
            echo '<td>'.$row->GENDER_NAME.'</td>';
            echo '<td>'.$row->BIRTHDAY.'</td>';
            echo '<td>'.$row->GPA.'</td>';
            echo '<td>'.$row->HOUSE_ID.'</td>';
            echo '<td>'.$row->HOUSE_NUMBER.'</td>';
            echo '<td>'.$row->HOUSEADD_NAME.'</td>';
            echo '<td>'.$row->MOO.'</td>';
            echo '<td>'.$row->SOI.'</td>';
            echo '<td>'.$row->STREET.'</td>';
            echo '<td>'.$row->PROVINCE_NAME_TH.'</td>';
            echo '<td>'.$row->DISTRICT_NAME_TH.'</td>';
            echo '<td>'.$row->SUB_DISTRICT_NAME_TH.'</td>';
            echo '<td>'.$row->TELEPHONE.'</td>';
            echo '<td>'.$row->ZIPCODE.'</td>';
            echo '<td>'.$row->RACE_NAME.'</td>';
            echo '<td>'.$row->RELIGION_NAME_TH.'</td>';
            echo '<td>'.$row->EMAIL.'</td>';
            echo '<td>'.$row->DATEGRADUATION.'</td>';
            echo '<td>'.$row->CURR_ID.'</td>';
            echo '<td>'.$row->DEGREE_NUM.'</td>';
            echo '<td>'.$row->NATION_NAME_TH.'</td>';
            echo '<td>'.$row->PASSPORT_NUMBER.'</td>';
            echo '<td>'.$row->PASSPORT_STARTDATE.'</td>';
            echo '<td>'.$row->PASSPORT_ENDDATE.'</td>';
            echo '</tr>';
            $n++;
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
