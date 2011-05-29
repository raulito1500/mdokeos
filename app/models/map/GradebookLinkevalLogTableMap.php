<?php



/**
 * This class defines the structure of the 'gradebook_linkeval_log' table.
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
class GradebookLinkevalLogTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookLinkevalLogTableMap';

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
		$this->setName('gradebook_linkeval_log');
		$this->setPhpName('GradebookLinkevalLog');
		$this->setClassname('GradebookLinkevalLog');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('ID_LINKEVAL_LOG', 'IdLinkevalLog', 'INTEGER', true, 11, null);
		$this->addColumn('NAME', 'Name', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DATE_LOG', 'DateLog', 'INTEGER', false, 11, null);
		$this->addColumn('WEIGHT', 'Weight', 'SMALLINT', false, 6, null);
		$this->addColumn('VISIBLE', 'Visible', 'TINYINT', false, 4, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', true, 20, null);
		$this->addColumn('USER_ID_LOG', 'UserIdLog', 'INTEGER', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookLinkevalLogTableMap
