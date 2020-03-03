<?php
namespace Vht\Src;
class Database{ 
	var $db;
	var $result;
	var $insert_id;
	var $sql = "";
	var $prefix = "";
	var $servername;
	var $username;
	var $password;
	var $database;
	var $table = "";
	var $where = "";
	var $order = "";
	var $limit = "";	
	var $error = array();
	function __construct(){
		
	}
	function init($config = array()){//die('ok2');
	foreach($config as $k=>$v)
		$this->$k = $v;
}


public function set_database(array $data){
    $this->init($data);
   
}
function connect(){
	$this->db = new \mysqli($this->servername, $this->username, $this->password,$this->database);
	if ($this->db->connect_error) {
		die('Connect Error (' . $this->db->connect_errno . ') '
			. $this->db->connect_error);
	}
	$this->db->set_charset("utf8");
}
function query($sql=""){
	if(!empty($sql)){
		$this->sql = str_replace('#_', $this->prefix, $sql);
	}
	$this->result = $this->db->query($this->sql);

	if ($this->db->error) {
		try {   
			throw new \Exception("MySQL error ".$this->db->error." <br> Query:<br> ".$this->sql, $this->db->errno);   
		} catch(\Exception $e ) {
			echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
			echo nl2br($e->getTraceAsString());
		}
	}
	return $this->result;	
}
function insert($data = array()){
	$key = "";
	$value = "";
	$sql = "SHOW COLUMNS FROM ".$this->prefix.$this->table;
	$this->query($sql);
	foreach($this->result_array() as $k=>$v){
		if(!isset($data[$v['Field']])){
			$val = '';
			if(strpos($v['Type'], 'int') !== false | strpos($v['Type'], 'float') !== false | strpos($v['Type'], 'double') !== false ){
				$val = 0;
			}
			$data[$v['Field']] = $val;
		}else{
			if(strpos($v['Type'], 'int') !== false | strpos($v['Type'], 'float') !== false | strpos($v['Type'], 'double') !== false ){
				if($data[$v['Field']]==""){
					$data[$v['Field']] = 0;
				}
			}
		}
	}
	unset($data['id']);
	$key = array_keys($data);
	$value = array_values($data);
	$key = implode(',', $key);
	$value = implode(',', $value);
	$this->sql = "insert into ".$this->prefix.$this->table." (".$key.") values (".$value.")";
		//echo $this->sql;die;
	$this->query();
	$this->insert_id = $this->db->insert_id;
	return $this->result;
}
function update($data = array()){
	$values = "";
	$this->query("select * from ".$this->prefix.$this->table." ".$this->where);
	foreach($this->fetch_array() as $k=>$v){
		if(!isset($data[$k])){
			$data[$k] = magic_quote($v);
		}
	}
	$sql = "SHOW COLUMNS FROM ".$this->prefix.$this->table;
	$this->query($sql);
	foreach($this->result_array() as $k=>$v){
		if(strpos($v['Type'], 'int') !== false | strpos($v['Type'], 'float') !== false | strpos($v['Type'], 'double') !== false ){
			if($data[$v['Field']]==""){
				$data[$v['Field']] = 0;
			}
		}
	}
	if(isset($data['id'])){
		if($data['id']==0){
			unset($data['id']);
		}
	}
	$_tmp_values = array();
	foreach($data as $k => $v){
		$_tmp_values[] = $k . " = '" . $v  ."' ";
	}
	$values = implode(',', $_tmp_values);
		//echo $this->where;die;
	// if($values{0} == ",") $values{0} = " ";
	$this->sql = "update " . $this->prefix . $this->table . " set " . $values;
	$this->sql .= $this->where;
	return $this->query();
}
	function delete(){//die('ok7');
	$this->sql = "delete from " . $this->prefix . $this->table . $this->where;
	return $this->query();
}
	function select($str = "*"){//die('ok8');
	$this->sql = "select " . $str;
	$this->sql .= " from " . $this->prefix .$this->table;
	$this->sql .=  $this->where;
	$this->sql .=  $this->order;
	$this->sql .=  $this->limit;
	return $this->query();
}
	function num_rows(){//die('ok9');
	return $this->result->num_rows;
}
	 function num_fields($query_id='') {//die('ok10');
	 return $this->result->field_count;
	}
	function fetch_array(){
		return $this->result->fetch_assoc();
	}
	function result_array(){
		ini_set('memory_limit', '-1');
		$arr = array();
		while ($row = $this->fetch_array()){
			$arr[] = $row;
		}
		return $arr; 
	}
	function setTable($str){
		$this->table = $str;
	}
	function setWhere($key, $value=""){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $key . " = '" . $value . "'";
			else
				$this->where .= " and " . $key . " = '" . $value ."'";
		}
		else{
			if($this->where == "")
				$this->where = " where " . $key ;
			else
				$this->where .= " and " . $key ;
		}
	}
	function setWhereOr($key, $value){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $key . " = " . $value;
			else
				$this->where .= " or " . $key . " = " . $value;
		}
		else{
			if($this->where == "")
				$this->where = " where " . $key ;
			else
				$this->where .= " or " . $key ;
		}
	}
	function setOrder($str){
		$this->order = " order by " . $str;
	}
	function setLimit($str){
		$this->limit = " limit " . $str;
	}
	function setError($msg){
		$this->error[] = $msg;
	}
	function showError(){
		foreach($this->error as $value)
			echo '<br>'.$value;
	}
	function reset(){
		if(!empty($this->result)){
			$this->result->free_result();
		}
		$this->sql = "";
		$this->result = "";
		$this->where = "";
		$this->order = "";
		$this->limit = "";
		$this->table = "";
	}
	function debug(){
		echo "<br> servername: ".$this->servername;
		echo "<br> username: ".$this->username;
		echo "<br> password: ".$this->password;
		echo "<br> database: ".$this->database;
		echo "<br> ".$this->sql;
	}
	/**
	 * Escape String
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function escape_str($str) {
		if (is_array($str))
		{
			foreach($str as $key => $val)
			{
				$str[$key] = $this->escape_str($val);
			}
			return $str;
		}
		if (function_exists('real_escape_string') AND is_resource($this->db))
		{
			return $this->db->real_escape_string($str);
		}
		elseif (function_exists('escape_string'))
		{
			return $this->db->escape_string($str);
		}
		else
		{
			return addslashes($str);
		}
	}
	function xssClean($str){
		#$str = htmlentities($str, ENT_QUOTES, "UTF-8");
		$str = str_replace("'", '&#039;', $str);
		$str = str_replace('"', '&quot;', $str);
		$str = str_replace('<', '&lt;', $str);
		$str = str_replace('>', '&gt;', $str);
		#$str = addslashes($str);
		return $str;
	}
}
