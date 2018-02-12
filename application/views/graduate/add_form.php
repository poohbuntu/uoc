<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<title>บันทึกข้อมูลผู้สำเร็จการศึกษา</title>
<!--
		<script type="text/javascript">
			function checkID(id)
			{
				if(id.length != 13)
					return false;
				for(i=0, sum=0; i < 12; i++)
				sum += parseFloat(id.charAt(i))*(13-i);
				if((11-sum%11)%10!=parseFloat(id.charAt(12)))
					return false;
				return true;
			}

			function checkForm()
			{
				if(checkID(document.form.citizen_id.value))
					alert('รหัสประชาชนไม่ถูกต้อง');
				else
					alert('รหัสประชาชนถูกต้อง เชิญผ่านได้');
			}
		</script>
-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-12">
					<div class="page-header">
  					<h1>แบบบันทึกข้อมูลผู้สำเร็จการศึกษาสำหรับส่ง สกอ. <small>Subtext for header</small></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-2">
					<form id="formid" action="http://localhost/uoc/index.php/graduate/add" method="post" autocomplete="off">
						<fieldset>

							<div class="form-group">
								<label for="year">ปีที่ส่งข้อมูล</label>
								<input class="form-control" type="text" name="year" value="2561" maxlength="4" placeholder="ปีที่ส่งข้อมูล" required autofocus>
							</div>

							<!--<div class="form-group">
								<label for="univ_id">รหัสสถานศึกษา</label>
								<input class="form-control" type="text" name="univ_id" value="21200" maxlength="5" placeholder="จุฬาลงกรณ์มหาวิทยาลัย"  required>
							</div>-->
							<div class="form-group">
								<label for="gender_id">สถานศึกษา</label>
								<select class="form-control" name="univ_id" required>
									<?php foreach($univs->result() as $univ){ ?>
	        					<option value="<?php echo $univ->UNIV_ID; ?>"><?php echo $univ->UNIV_NAME_TH; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="citizen_id">รหัสประจำตัวประชาชน</label>
								<input class="form-control" type="text" name="citizen_id" id="citizen_id" value="" maxlength="13" placeholder="รหัสประจำตัวประชาชน" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="std_id">รหัสนักศึกษา</label>
								<input class="form-control" type="text" name="std_id" value="" maxlength="13" placeholder="รหัสนักศึกษา" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="prefix_name_id">คำนำหน้าชื่อ</label>
								<select class="form-control" name="prefix_name_id" required>
									<option value="">เลือก</option>
								  <option value="003">นาย</option>
								  <option value="004">นางสาว</option>
									<option value="005">นาง</option>
								</select>
							</div>

							<div class="form-group">
								<label for="std_fname">ชื่อนักศึกษา</label>
								<input class="form-control" type="text" name="std_fname" value="" maxlength="50" placeholder="ชื่อนักศึกษา" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="std_mname">ชื่อกลาง(ถ้ามี)</label>
								<input class="form-control" type="text" name="std_mname" value="-" maxlength="80" placeholder="ชื่อกลาง(ถ้ามี)" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="std_lname">นามสกุล</label>
								<input class="form-control" type="text" name="std_lname" value="" maxlength="50" placeholder="นามสกุล" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="std_fname_en">First Name</label>
								<input class="form-control" type="text" name="std_fname_en" value="" maxlength="50" placeholder="ชื่อนักศึกษา ภาษาอังกฤษ" required autocomplete="off" style="text-transform: lowercase;">
							</div>

							<div class="form-group">
								<label for="std_mname_en">Middle Name</label>
								<input class="form-control" type="text" name="std_mname_en" value="-" maxlength="80" placeholder="ชื่อกลาง(ถ้ามี) ภาษาอังกฤษ" autocomplete="off" style="text-transform: lowercase;">
							</div>

							<div class="form-group">
								<label for="std_lname_en">Last Name</label>
								<input class="form-control" type="text" name="std_lname_en" value="" maxlength="50" placeholder="นามสกุล ภาษาอังกฤษ" required autocomplete="off" style="text-transform: lowercase;">
							</div>

							<div class="form-group">
								<label for="gender_id">เพศ</label>
								<select class="form-control" name="gender_id" required>
									<option value="">เลือก</option>
									<?php foreach($genders->result() as $gender){ ?>
	        					<option value="<?php echo $gender->GENDER_ID; ?>"><?php echo $gender->GENDER_NAME; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="birthday">วันเดือนปีเกิด(พ.ศ) DD/MM/YYY</label>
								<input class="form-control" type="text" name="birthday" value="" maxlength="10" placeholder="12/02/2529" required autocomplete="off">
							</div>

							<!--<div class="form-group">
								<label for="fac_id">รหัสคณะที่ศึกษา</label>
								<input class="form-control" type="text" name="fac_id" value="00048" maxlength="5" placeholder="คณะพยาบาลศาสตร์"  required>
							</div>-->
							<div class="form-group">
								<label for="gender_id">คณะที่ศึกษา</label>
								<select class="form-control" name="fac_id" required>
									<?php foreach($facs->result() as $fac){ ?>
	        					<option value="<?php echo $fac->FAC_ID; ?>"><?php echo $fac->FAC_NAME; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="gpa">เกรดเฉลี่ย ไม่ต้องกรอก</label>
								<!--<label for="gpa">เกรดเฉลี่ย *ต้องมีทศนิยม 2 หลัก</label>-->
								<input class="form-control" type="text" name="gpa" value="0.00" maxlength="4" placeholder="เกรดเฉลี่ย *ต้องมีทศนิยม 2 หลัก" required>
							</div>

							<div class="form-group">
								<label for="house_id">เลขรหัสประจำบ้าน</label>
								<input class="form-control" type="text" name="house_id" value="" maxlength="11" placeholder="เลขรหัสประจำบ้าน" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="house_number">เลขที่บ้าน</label>
								<input class="form-control" type="text" name="house_number" value="" maxlength="10" placeholder="เลขที่บ้าน" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="houseadd_name">ชื่อที่อยู่</label>
								<input class="form-control" type="text" name="houseadd_name" value="-" maxlength="80" placeholder="ชื่อที่อยู่" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="moo">หมู่</label>
								<input class="form-control" type="text" name="moo" value="-" maxlength="4" placeholder="หมู่" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="soi">ตรอก/ซอย</label>
								<input class="form-control" type="text" name="soi" value="-" maxlength="80" placeholder="ตรอก/ซอย" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="street">ถนน</label>
								<input class="form-control" type="text" name="street" value="-" maxlength="80" placeholder="ถนน" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="province">จังหวัด</label>
								<select class="form-control" name="province" id="province" required>
									<option value="">เลือก</option>
									<?php foreach($provinces->result() as $province){ ?>
	        					<option value="<?php echo $province->PROVINCE_ID; ?>"><?php echo $province->PROVINCE_NAME_TH; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="district">อำเภอ/เขต</label>
								<select class="form-control" name="district" id="district" required>
	        					<option value=" "></option>
								</select>
							</div>

							<div class="form-group">
								<label for="sub_district_id">ตำบล/แขวง</label>
								<select class="form-control" name="sub_district_id" id="sub_district_id" required>
	        					<option value=" "></option>
								</select>
							</div>

							<div class="form-group">
								<label for="telephone">หมายเลขโทรศัพท์</label>
								<input class="form-control" type="text" name="telephone" value="" maxlength="30" placeholder="หมายเลขโทรศัพท์" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="zipcode">รหัสไปรษณีย์</label>
								<input class="form-control" type="text" name="zipcode" value="" maxlength="5" placeholder="รหัสไปรษณีย์" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="race_id">เชื้อชาติ</label>
								<select class="form-control" name="race_id" required>
									<?php foreach($races->result() as $race){ ?>
	        					<option value="<?php echo $race->RACE_ID; ?>"><?php echo $race->RACE_NAME; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="religion_id">ศาสนา</label>
								<select class="form-control" name="religion_id" required>
									<option value="">เลือก</option>
									<?php foreach($religions->result() as $religion){ ?>
	        					<option value="<?php echo $religion->RELIGION_ID; ?>"><?php echo $religion->RELIGION_NAME_TH; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="email">อีเมล</label>
								<input class="form-control" type="email" name="email" value="" maxlength="50" placeholder="อีเมล" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="dategraduation">วันที่สำเร็จการศึกษา(พ.ศ.) DD/MM/YYYY</label>
								<input class="form-control" type="text" name="dategraduation" value="24/04/2561" maxlength="10" placeholder="08/06/2560" required>
							</div>

							<div class="form-group">
								<label for="curr_id">รหัสหลักสูตรที่สำเร็จการศึกษา</label>
								<input class="form-control" type="text" name="curr_id" value="25322121100124" maxlength="14" placeholder="หลักสูตรพยาบาลศาสตรบัณฑิต วิทยาลัยพยาบาลตำรวจ สถาบันสมทบจุฬาลงกรณ์มหาวิทยาลัย" readonly required>
							</div>

							<div class="form-group">
								<label for="degree_num">ลำดับของปริญญาในหลักสูตร</label>
								<input class="form-control" type="text" name="degree_num" value="1" maxlength="1" placeholder="พยาบาลศาสตรบัณฑิต" readonly required>
							</div>

							<div class="form-group">
								<label for="nation_id">สัญชาติ</label>
								<select class="form-control" name="nation_id" required>
									<?php foreach($nations->result() as $nation){ ?>
	        					<option value="<?php echo $nation->NATION_ID; ?>"><?php echo $nation->NATION_NAME_TH; ?></option>
	    						<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="passport_number">เลขที่หนังสือเดินทาง</label>
								<input class="form-control" type="text" name="passport_number" value="-" maxlength="20" placeholder="เลขที่หนังสือเดินทาง" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="passport_startdate">วันที่ออกหนังสือเดินทาง(ค.ศ) DD/MM/YYYY</label>
								<input class="form-control" type="text" name="passport_startdate" value="-" maxlength="10" placeholder="30/09/2016" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="passport_enddate">วันหมดอายุของหนังสือเดินทาง(ค.ศ) DD/MM/YYYY</label>
								<input class="form-control" type="text" name="passport_enddate" value="-" maxlength="10" placeholder="30/09/2021" autocomplete="off">
							</div>

							<button type="submit" class="btn btn-primary" value="Submit">บันทึก</button>

						</fieldset>
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript">

		$.validator.addMethod(
	    "checkIDCard",
	    function(value, element) {
	        var pid = value;
	        pid = pid.toString().replace(/\D/g,'');
	        if(pid.length == 13){
	            var sum = 0;
	            for(var i = 0; i < pid.length-1; i++){
	            sum += Number(pid.charAt(i))*(pid.length-i);
	            }
	            var last_digit = (11 - sum % 11) % 10;
	            $(element).val(pid);
	            return pid.charAt(12) == last_digit;
	       }else{
	            return false;
	      }
			},
			"รหัสบัตรประชาชนไม่ถูกต้อง"
		);

		$("#formid").validate({
		  rules: {
		    citizen_id: {
		        required: true,
		        minlength: 13,
		        checkIDCard: true
		    },
		    messages: {
		        citizen_id: {
		            required: "รหัสบัตรประชาชนไม่ถูกต้อง",
		            minlength: "รหัสบัตรประชาชนต้องมี 13 หลัก",
		            checkIDCard : "รหัสบัตรประชาชนไม่ถูกต้อง"
		        }
		    }
		  }
		});

	  $(function() {
	      $('body').on('change','#province',function(){
	          $.ajax({
	              'type':'POST',
	              'url':'http://localhost/uoc/index.php/graduate/get_district',
	              'cache':false,
	              'data':{province:$(this).val()},
	              'success':function(html){
	                  $("#district").html(html);
	              }
	          });
	          return false;
	      });
	       $('body').on('change','#district',function(){
	          $.ajax({
	              'type':'POST',
	              'url':'http://localhost/uoc/index.php/graduate/get_sub_district_id',
	              'cache':false,
	              'data':{district:$(this).val()},
	              'success':function(html){
	                  $("#sub_district_id").html(html);
	              }
	          });
	          return false;
	      });
	  });
	</script>
	</body>
</html>
