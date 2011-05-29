<?php



/**
 * This class defines the structure of the 'wiki_conf' table.
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
class WikiConfTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.WikiConfTableMap';

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
		$this->setName('wiki_conf');
		$this->setPhpName('WikiConf');
		$this->setClassname('WikiConf');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addColumn('PAGE_ID', 'PageId', 'INTEGER', true, 11, 0);
		$this->addColumn('TASK', 'Task', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FEEDBACK1', 'Feedback1', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FEEDBACK2', 'Feedback2', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FEEDBACK3', 'Feedback3', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FPROGRESS1', 'Fprogress1', 'VARCHAR', true, 3, null);
		$this->addColumn('FPROGRESS2', 'Fprogress2', 'VARCHAR', true, 3, null);
		$this->addColumn('FPROGRESS3', 'Fprogress3', 'VARCHAR', true, 3, null);
		$this->addColumn('MAX_SIZE', 'MaxSize', 'INTEGER', false, 11, null);
		$this->addColumn('MAX_TEXT', 'MaxText', 'INTEGER', false, 11, null);
		$this->addColumn('MAX_VERSION', 'MaxVersion', 'INTEGER', false, 11, null);
		$this->addColumn('STARTDATE_ASSIG', 'StartdateAssig', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('ENDDATE_ASSIG', 'EnddateAssig', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('DELAYEDSUBMIT', 'Delayedsubmit', 'INTEGER', true, 11, 0);
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // WikiConfTableMap
