<style>
        .a {
	color: #ffffff;
    background: #d9741b repeat-x center left;
        }
      
        </style>
<?php
require_once __DIR__ . '/src/bootstrap.php';

		Database::connect(); 
		Database::selectDatabase(Database::setting('DB_NAME', 'telephone'));		
		$dbpf = 'tb'; // ??????? ?????? prefix_menu ???? ???????? ????? ??? ??????? ?????? ???? _menu



echo '<div class="arrowlistmenu" align="left">';
echo show_cat(0,0) ;
echo '</div>';
function show_cat($par=0,$old=1){
  global $dbpf,$lev; $out = ''; $lev++;
        $sql=Database::query('set names cp1251');  

 $count=0;
 $kol=0;
	$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_menu WHERE par=? ORDER BY pos', [(int)($par)]);
	$qur = Database::query($sql);
	if ($qur){
		while($rez = Database::fetchAssoc($qur)){

                        $sql2 = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_menu WHERE par=?', [(int)($rez['id'])]);
                    	$qur2 = Database::query($sql2); 
                        $kol = Database::numRows($qur2);

					





$number=$rez['page']-1;
$numbers=$rez['link'];
//echo $numbers;


			if ($kol>0) { 
				if ($rez['status']==1) $out .= '<h3 class="menuheader expandable">'.stripslashes($rez['name']).'</h3>';
				else $out .= '';
				
				/*$out .= '<h3 class="menuheader expandable">'.stripslashes($rez['']).'</h3>';*/
				
	
				
				$out1=show_cat1($rez['id']);
                             $out.=$out1;
                        }

else 
{
if ($rez['chek']==1)
{
	if ($rez['status']==1)  $out .= '<ul><a class="zz" href="index.php?link='.$numbers.'">'.stripslashes($rez['name']).'</a></ul>';
	else  $out .= '';
	/*     $out .= '<ul><a class="zz" href="index.php?link='.$numbers.'">'.stripslashes($rez['name']).'</a></ul>';*/
}
else
{
	if ($rez['status']==1)  $out .= '<ul><a class="zz" href="index.php?link='.$number.'">'.stripslashes($rez['name']).'</a></ul>';
	else  $out .= '';
                             /*$out .= '<ul><a class="zz" href="index.php?link='.$number.'">'.stripslashes($rez['name']).'</a></ul>';*/
}
}                        
		}
	}
	return $out;
}
//1111111111111111111---------------------------------------------------------------------------------------------------------------------------------------------------------
function show_cat1($id=0){
  global $dbpf,$lev; $out = ''; $lev++;
        $sql=Database::query('set names cp1251');  
 $count=0;
 $kol=0;
	$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_menu WHERE par=? ORDER BY pos', [(int)($id)]);
	$qur = Database::query($sql);
        $kol = Database::numRows($qur);
	if ($qur){
		while($rez = Database::fetchAssoc($qur)){
$number=$rez['page']-1;
$numbers=$rez['link'];


			       if ($count>0 && $count<$kol) 
				{
				$count++;
if ($rez['chek']==1)
{
	if ($rez['status']==1)  $out .= '<ol><a class="" href="'.$numbers.'">'.stripslashes($rez['name']).'</a></ol>';
	else  $out .= '';
                               

}
else                                                                                                         

{
	if ($rez['status']==1)  $out .= '<ol><a class="" href="?link='.$number.'">'.stripslashes($rez['name']).'</a></ol>';
	else  $out .= '';


	$sqll = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_menu WHERE par>0 ORDER BY pos', []);
	$qurr = Database::query($sqll);
        $koll = Database::numRows($qurr);

		while($rezz = Database::fetchAssoc($qurr))
{
if ($rezz['par']==$rez['id'])
{
$numbs=$rezz['page']-1;
$numbers=$rezz['link'];

				if ($count==0){ $out .= '<ul class="subcategoryitems">'; }




if ($rezz['chek']==0)

{
	if ($rez['status']==1)        $out .= '<a class="bb" href="?link='.$numbs.'">'.stripslashes($rezz['name']).'</a>';
	else  $out .= '';
}
else 
{
	if ($rez['status']==1) $out .= '<a class="bb" href="'.$numbers.'">'.stripslashes($rezz['name']).'</a>';
	else  $out .= '';
}





}
}
}


				}



				                                             

                               if ($count==0) 
                               {
                                $count++; 
if ($rez['chek']==1)
{
	if ($rez['status']==1) $out .= '<ul class="categoryitems"><ol><a class="" href="'.$numbers.'">'.stripslashes($rez['name']).'</a></ol>';
	else  $out .= '';
}
else


{

if  ($rez['id']==$rez['par'])

{
	if ($rez['status']==1)								$out .= '<ul class="categoryitems"><ol ><a class="" href="?link='.$number.'">'.stripslashes($rez['name']).'</a></ol>'; 


	else  $out .= '';
}
else
{
	if ($rez['status']==1)												$out .= '<ul class="categoryitems"><ol><a class="" href="?link='.$number.'">'.stripslashes($rez['name']).'</a></ol>'; 



	else  $out .= '';

}
}
                                }  
                               if ($count==$kol) {$out .= '</ul>'; }


		}
	}
	return $out;
}
//2222222222222222222--------------------------------------------------------------------------------------------------------------------------------------------------------
?>


