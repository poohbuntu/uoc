<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

    <title>ข้อมูลบุคลากร</title>
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

        </tr>
      </thead>
      <tbody>
        <?php
          $n = 1;
          foreach ($staff as $row) {
            echo '<tr>';
            echo '<td>'.$n.'</td>';;
            echo '<td>'.$row->YEAR.'</td>';
            echo '<td>'.$row->UNIV_NAME_TH.'</td>';
            echo '<td>'.$row->CITIZEN_ID.'</td>';
            echo '<td>'.$row->FULLNAME.'</td>';
            echo '<td>'.$row->STF_FNAME.'</td>';
            echo '<td>'.$row->STF_MNAME.'</td>';
            echo '<td>'.$row->STF_LNAME.'</td>';
            //echo '<td>'.$row->STD_FNAME_EN.'</td>';
            //echo '<td>'.$row->STD_MNAME_EN.'</td>';
            //echo '<td>'.$row->STD_LNAME_EN.'</td>';
            echo '<td>'.$row->GENDER_NAME.'</td>';
            echo '<td>'.$row->BIRTHDAY.'</td>';
            //echo '<td>'.$row->FAC_NAME.'</td>';
            //echo '<td>'.$row->GPA.'</td>';
            //echo '<td>'.$row->HOUSE_ID.'</td>';
            //echo '<td>'.$row->HOUSE_NUMBER.'</td>';
            //echo '<td>'.$row->HOUSEADD_NAME.'</td>';
            echo '<td>'.$row->HOMEADD.'</td>';
            echo '<td>'.$row->MOO.'</td>';
            //echo '<td>'.$row->SOI.'</td>';
            echo '<td>'.$row->STREET.'</td>';
            //echo '<td>'.$row->PROVINCE_NAME_TH.'</td>';
            //echo '<td>'.$row->DISTRICT_NAME_TH.'</td>';
            echo '<td>'.$row->SUB_DISTRICT_NAME_TH.'</td>';
            echo '<td>'.$row->TELEPHONE.'</td>';
            echo '<td>'.$row->ZIPCODE.'</td>';
            echo '<td>'.$row->NATION_NAME_TH.'</td>';
            echo '<td>'.$row->STAFFTYPE_NAME.'</td>';
            echo '<td>'.$row->TIME_CONTACT_NAME.'</td>';
            echo '<td>'.$row->BUDGET_NAME.'</td>';
            echo '<td>'.$row->SUBSTAFFTYPE_NAME.'</td>';
            echo '<td>'.$row->ADMIN_NAME.'</td>';
            echo '<td>'.$row->POSITION_NAME_TH.'</td>';
            echo '<td>'.$row->POSITION_WORK.'</td>';
            echo '<td>'.$row->FAC_NAME.'</td>';
            echo '<td>'.$row->DATE_INWORK.'</td>';
            echo '<td>'.$row->DATE_START_THIS_U.'</td>';
            echo '<td>'.$row->ISCED_NAME.'</td>';
            echo '<td>'.$row->TEACH_ISCED_ID.'</td>';
            echo '<td>'.$row->RELIGION_NAME_TH.'</td>';
            //echo '<td>'.$row->EMAIL.'</td>';
            //echo '<td>'.$row->DATEGRADUATION.'</td>';
            //echo '<td>'.$row->CURR_ID.'</td>';
            //echo '<td>'.$row->DEGREE_NUM.'</td>';

            //echo '<td>'.$row->PASSPORT_NUMBER.'</td>';
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
