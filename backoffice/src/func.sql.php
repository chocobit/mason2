<?php
function GetExcellenceProject($id){
	$sql = "SELECT name_tha FROM excellence_projects WHERE ep_id = {$id}";
	$query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	return $rs['name_tha'];
}
function GetManagementGroupCat($id){
	$sql = "SELECT name_tha FROM management_groups_category WHERE mgc_id = {$id}";
	$query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	return $rs['name_tha'];
}

function GetManagementGroupCat_ID($id){
	$sql = "SELECT mgc_id FROM management_groups WHERE mg_id = {$id}";
	$query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	return $rs['mgc_id'];
}
function GetManagementGroup($id){
	$sql = "SELECT name_tha FROM management_groups WHERE mg_id = {$id}";
	$query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	return $rs['name_tha'];
}
function CheckPermission($admin,$page){
  global $db;
  $sql = "SELECT {$page} as field FROM admin WHERE adm_id = {$admin}";
  $query = $db->query($sql);
  $line = $db->fetchNextObject($query);
  $result = $line->field;
  $arr_result = explode("-", $result);
  $arr_result_t['add'] = $arr_result[0];
  $arr_result_t['edit'] = $arr_result[1];
  $arr_result_t['delete'] = $arr_result[2];
  $arr_result_t['view'] = $arr_result[3];
  return $arr_result_t;
}
?>