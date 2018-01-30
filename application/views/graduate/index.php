<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ข้อมูลผู้สำเร็จการศึกษา</title>
  </head>
  <body>
<?php foreach ($graduate as $row) {

  echo $row->year.'&nbsp;';
  echo $row->univ_name_th.'&nbsp;';
  echo $row->citizen_id.'&nbsp;';
  echo $row->std_id.'&nbsp;';
  echo $row->fullname.'&nbsp;';
  echo $row->std_fname.'&nbsp;';
  echo $row->std_mname.'&nbsp;';
  echo $row->std_lname.'&nbsp;';
  echo $row->gender_name.'&nbsp;';
  echo $row->birthday.'&nbsp;';
  echo $row->fac_name.'&nbsp;';
  echo $row->gpa.'&nbsp;';
  echo $row->house_id.'&nbsp;';
  echo $row->house_number.'&nbsp;';
  echo $row->houseadd_name.'&nbsp;';
  echo $row->moo.'&nbsp;';
  echo $row->soi.'&nbsp;';
  echo $row->street.'&nbsp;';  
  echo $row->sub_district_name_th.'&nbsp;';
  echo $row->telephone.'&nbsp;';
  echo $row->zipcode.'&nbsp;';
  echo $row->race_name.'&nbsp;';
  echo $row->religion_name_th.'&nbsp;';
  echo $row->email.'&nbsp;';
  echo $row->dategraduation.'&nbsp;';
  echo $row->curr_id.'&nbsp;';
  echo $row->degree_num.'&nbsp;';
  echo $row->nation_id.'&nbsp;';
  echo $row->passport_number.'&nbsp;';
  echo $row->passport_startdate.'&nbsp;';
  echo $row->passport_enddate.'&nbsp;';
  echo "<br>";

}
?>
  </body>
</html>
