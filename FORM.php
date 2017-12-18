<?php
if(isset($_GET['submit'])){

if(!empty($_GET['head'])){
$str=$_GET['head'];
$st=explode(",",$str);
$c=count($st);

if(!empty($st[0])&&!empty($st[1])&&!empty($st[2])){


echo  "<html>";
echo  "<h1 style='color:$st[0];text-align:$st[1];'>".$st[2]."</h1>";    
echo  "</html>";}
else{
echo "Value not  provided Properly!<br>";

}



}

else{
echo "Not found<br>";
}




if(!empty($_GET['com'])){
$str=$_GET['com'];
$st=explode("/",$str);
$c=count($st);
for($i=0;$i<=$c-1;$i++){
$val=$st[$i];
$A=explode(",",$val);
$cn=count($A);
//echo $cn;
 
if(isset($A[0])&&isset($A[1])&&isset($A[2])&&isset($A[3])&&isset($A[4])){




$co=strcasecmp($A[1],"right");
if($co==0){    
$A[1]=1100;
}   

$co=strcasecmp($A[1],"center");
if($co==0){ 
$A[1]=550;
}   

$cn=(int)$A[0];




 


$o=strcasecmp($A[2],"text area");
if($o==0){ 
for($k=1;$k<=$cn;$k++){
echo   "<p  style='margin-left:$A[1]px;' >$A[3]:</p>". "<textarea   style='margin-left:$A[1]px;'></textarea>";}
}   

else{
for($k=1;$k<=$cn;$k++){
echo   "<p  style='margin-left:$A[1]px;' >$A[3]</p>". "<p  style='margin-left:$A[1]px;' >$A[4]</p>". "<input  type='$A[2]'   style='margin-left:$A[1]px;'    name=as>";


}}




}


else{

$a=$i+1;
echo "The Statement number". $a."is not Entered Correctly!<br>";
}








}


}


else{

echo "Not found<br>";
}







}

?>