<?php



/**
 * This class defines the structure of the 'gradebook_result_log' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.dokeos.map
 */
class GradebookResultLogTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookResultLogTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('gradebook_result_log');
		$this->setPhpName('GradebookResultLog');
		$this->setClassname('GradebookResultLog');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('ID_RESULT', 'IdResult', 'INTEGER', true, 11, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, null);
		$this->addColumn('EVALUATION_ID', 'EvaluationId', 'INTEGER', true, 11, null);
		$this->addColumn('DATE_LOG', 'DateLog', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		$this->addColumn('SCORE', 'Score', 'FLOAT', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookResultLogTableMap
