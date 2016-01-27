<?php
interface SQLInterface {
	public function setMode();
	public function addTable();
	public function addExpression();
}
class SQL implements SQLInterface{
	private $_Tables = [];
	private $_Expression = [];
	private $_Column = [];
	private $_Mode = [];
	public function setMode() {
		return $this;
	}
	private function _Select() {
		$mode = ['SELECT', 'FROM', 'WHERE', 'JOIN', 'LEFT JOIN', 'RIGHT JOIN', 'GROUP BY', 'ORDER BY' => ['desc', 'asc'], 'LIMIT'];
		$this->_Mode = $_Mode;
	}
	public function addTable() {
		$this->_Tables = array_merge($this->_Tables, func_get_args());
	}
	public function addColumn($column) {
		$this->_Column[] = $column;
	}
	public function addExpression() {
		
	}
	public function select() {
		return $this->_Mode[0];
	}
	public function from() {
		return $this->_Mode[1];
	}
	public function where() {

	}
	public function join() {

	}
	public function leftJoin() {

	}
	public function rightJoin() {

	}
	public function groupBy() {

	}
	public function orderBy() {

	}
	public function limit() {

	}
	public function end() {
		foreach ($this->_Expression as $key => $value) {
			
		}
	}
	public function getTable() {
		return $this->_Tables;
	}
	public function getColumn() {
		return $this->_Column;
	}
}
$obj = new SQL();
$obj->addTable('table', 'aaaaa', 'table', 'tables');
$obj->addColumn('table.a');
$obj->addColumn('tables.b');
$obj->addColumn('table.c');
$obj->addColumn('tables.d');
$obj->addExpression('tables.d');
var_dump($obj->getColumn());
