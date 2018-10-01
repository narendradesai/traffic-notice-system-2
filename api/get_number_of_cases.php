<?php
/*******EDIT LINES 3-8*******/
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "root"; //MySQL Username     
$DB_Password = "";             //MySQL Password     
$DB_DBName = "traffic2018";         //MySQL Database Name  
$DB_TBLName = "notice_details"; //MySQL Table Name   
$filename = "OfficerRecord_".date("d/m/Y")."_.xls";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
//$sql = "Select * from $DB_TBLName";
//echo $_GET['from'];
 $sql = "SELECT `name_of_officer` as `Officer Name`,`rank` as `Rank`, COUNT(*) as `Number of records` FROM $DB_TBLName where `date_of_receipt_of_information_slip` BETWEEN '".$_GET['from']."' AND '".$_GET['to']."' GROUP BY `name_of_officer`";
//echo $sql;
  $Connect = @mysql_connect($DB_Server, $DB_Username, "") or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//$Connect=new mysqli("localhost", "root", "", "test");
 //select database   
 $Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());   
//execute query 
$result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    
$file_ending = "xls";
//header info for browser

header("Content-Type: application/vnd.ms-excel");    
header("Content-Disposition: attachment; filename=\"$filename\"");  
header("Pragma: no-cache"); 
header("Expires: 0");

/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t";
}
print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }

?>



