<?php
interface SQLInterface {
	public function addTable();
	public function addExpression();
}
class SQL implements SQLInterface{
	private $_Tables = [];
	private $_Expression = [];
	private $_Column = [];
	public function addTable() {
		$this->_Tables = array_merge($this->_Tables, func_get_args());
	}
	public function addColumn() {

	}
	public function addExpression() {
		
	}
	public function getTable() {
		return $this->_Tables;
	}
}
$obj = new SQL();
$obj->addTable('table', 'aaaaa', 'table', 'tables');
var_dump($obj->getTable());
