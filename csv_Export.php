<?php 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=unassigned_lead-report-'.date('d-m-Y').'.csv');

include('../../include/config.php');
include('../../include/auth.php');
 
$sql_1 = "SELECT uf.id as uplodfile_ID, uf.filename, uf.assignBranch,mnd.id,mnd.fileId,mnd.name,mnd.phnno,mnd.source_id,mnd.city,visa_type,mnd.email FROM upload_file uf JOIN mobile_no_details mnd ON uf.id= mnd.fileId WHERE uf.assignStatus =0;";
$result = $db->query($sql_1);

$output = fopen('php://output', 'w');
$headings = array('S.no', 'Name', 'Assign Branch', 'CSV Seminar Name','Phone Number','visa_type','Source');
fputcsv($output, $headings);
$i =1;
    foreach($result as $row){
            $sqlleadd = "select name from date_source where id =".$row['source_id']."";
            $resultleadd = $db->query($sqlleadd);
            $brnach_sqlleadd = "select branch_name from branch where id =".$row['assignBranch']."";
            $branch_name = $db->query($brnach_sqlleadd);

            $lineData = array($i,ucwords($row['name']),  $branch_name[0]['branch_name'],$row['filename'], $row['phnno'],$row['visa_type'],$resultleadd[0]['name']);
        fputcsv($output,$lineData);
    $i++;
}



?>