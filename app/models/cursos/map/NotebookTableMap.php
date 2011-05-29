<?php



/**
 * This class defines the structure of the 'notebook' table.
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
class NotebookTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.NotebookTableMap';

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
		$this->setName('notebook');
		$this->setPhpName('Notebook');
		$this->setClassname('Notebook');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('NOTEBOOK_ID', 'NotebookId', 'INTEGER', true, 10, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('COURSE', 'Course', 'VARCHAR', true, 40, null);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', true, 11, 0);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CREATION_DATE', 'CreationDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('UPDATE_DATE', 'UpdateDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('STATUS', 'Status', 'INTEGER', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // NotebookTableMap
