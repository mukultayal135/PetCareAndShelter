<?php

$branch=$_GET["branch"];

$techsAry=$_GET["techs"];//fetching String
//echo print_r($techsAry);//print array

$strTechs="";
for($i=0;$i<count($techsAry);$i++)
   {
 		$strTechs=$strTechs.$techsAry[$i].",";
   }

echo "Branch=".$branch."<br>";

$strTechs= substr($strTechs,0,strlen($strTechs)-1);
echo "<br>Technologies:".$strTechs;
//echo "Technologies=".$techs."<br>";

?>