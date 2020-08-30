<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>merge</title>
</head>
<style>
input[type=checkbox] + label {
  display: block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox] + label:before {
  content: "\2714";
  border: 0.1em solid #000;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  margin-right: 0.2em;
  vertical-align: bottom;
  color: transparent;
  transition: .2s;
}

input[type=checkbox] + label:active:before {
  transform: scale(0);
}

input[type=checkbox]:checked + label:before {
  background-color: MediumSeaGreen;
  border-color: MediumSeaGreen;
  color: #fff;
}

input[type=checkbox]:disabled + label:before {
  transform: scale(1);
  border-color: #aaa;
}

input[type=checkbox]:checked:disabled + label:before {
  transform: scale(1);
  background-color: #bfb;
  border-color: #bfb;
}
</style>

<body>

<h1 align="center">merge zones here</h1>
<form align="center" method="post" action="merge.php">
  <input type="checkbox" id="zone1"  value="zone1" name="zone1" >
  <label for="zone1">zone1</label>
  <input type="checkbox" id="zone2"  value="zone2" name="zone2" >
  <label for="zone2">zone2</label>
  <input type="checkbox" id="zone3"  value="zone3" name="zone3" >
  <label for="zone3">zone3</label>
  <input type="checkbox" id="zone4"  value="zone4" name="zone4">
  <label for="zone4">zone4</label>
  <input type="checkbox" id="zone5"  value="zone5" name="zone5">
  <label for="zone5">zone5</label>
  <input type="checkbox" id="zone6"  value="zone6" name="zone6">
  <label for="zone6">zone6</label>
  <input type="checkbox" id="zone7"  value="zone7" name="zone7">
  <label for="zone7">zone7</label>


    <input type="submit" name="submit" value="Submit">

	

</form>
<!-- Progress bar holder -->
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<!-- Progress information -->
<div id="information" style="width"></div>

</body>
</html>

<?php
	if (isset($_POST['submit'])){	
		include('dbcon.php');
		$zon=  array();
		for($i=1;$i<=7;$i++)
		{
			if(!empty($_POST['zone'.$i])){
			array_push($zon,$_POST['zone'.$i]);
			}
		  }
		 	
		$n=0;
		include('FUNCTION.php');
		while(!empty($zon[$n])){
				
			
			$query = "select * from sub_grp; ";
			$query_count = "select count(sub_grp) from $zon[$n]";
			
			$res=mysqli_query($con,$query_count);
			$count_all=mysqli_fetch_array($res);
			
			
			if(count(fetchAll($query)) > 0)
			{
				$i=0;
				foreach(fetchAll($query) as $row)
				{
					$sub =(string) $row['sub_group_no'];
					$main =(string) $row['Main_Grp'];
					if(strlen($sub)==1)
					{
						$sub='0'.$sub;
					}
					if(strlen($main)==1)
					{
						$main='0'.$main;
					}
					$item = $row['description'];
					$serial = 0;
					$query1 = "select * from $zon[$n] where item='$item'";
					$query2 = "select max(serial_no) from original where item='$item'";
					if ($query2 !== FALSE) {
						if(count(fetchAll($query2)) > 0)
						{
							foreach(fetchAll($query2) as $row)
							{
							$serial=(int) $row['max(serial_no)'];
							}
						}
					}
					if ($query1 !== FALSE) {
						if(count(fetchAll($query1)) > 0){				
							foreach(fetchAll($query1) as $row){
								$date = $row['date'];
								$PR = $row['pr_depot'];
								$serial=$serial+1;
								$serial=(string)$serial;
									if(strlen($serial)==1)
									{
										$serial='00000'.$serial;
									}
									else if(strlen($serial)==2)
									{
										$serial='0000'.$serial;
									}
									else if(strlen($serial)==3)
									{
										$serial='000'.$serial;
									}
									else if(strlen($serial)==4)
									{
										$serial='00'.$serial;
									}
								$qry="INSERT INTO `original`(`main_grp`, `sub_grp`, `serial_no`, `date`, `pr_depot`, `item`) VALUES ('$main','$sub','$serial','$date','$PR','$item');";
								$result=mysqli_query($con,$qry);
								$i++;
									
								$percent = intval(($i/$count_all[0]) * 100)."%";
								echo '<script language="javascript">
								document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
								document.getElementById("information").innerHTML="'.$percent.' process & '.$i.' Lines completed of total '.$count_all[0].'";
								</script>';
													
							}
							
						}
					}
				}
			}  
			$n+=1;
	} 
			
}
			
		?>

