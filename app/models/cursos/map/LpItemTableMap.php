<?php



/**
 * This class defines the structure of the 'lp_item' table.
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
class LpItemTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpItemTableMap';

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
		$this->setName('lp_item');
		$this->setPhpName('LpItem');
		$this->setClassname('LpItem');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('LP_ID', 'LpId', 'INTEGER', true, 10, null);
		$this->addColumn('ITEM_TYPE', 'ItemType', 'CHAR', true, 32, 'dokeos_document');
		$this->addColumn('REF', 'Ref', 'VARCHAR', true, 255, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 255, null);
		$this->addColumn('PATH', 'Path', 'LONGVARCHAR', true, null, null);
		$this->addColumn('MIN_SCORE', 'MinScore', 'FLOAT', true, null, 0);
		$this->addColumn('MAX_SCORE', 'MaxScore', 'FLOAT', true, null, 100);
		$this->addColumn('MASTERY_SCORE', 'MasteryScore', 'FLOAT', false, null, null);
		$this->addColumn('PARENT_ITEM_ID', 'ParentItemId', 'INTEGER', true, 10, 0);
		$this->addColumn('PREVIOUS_ITEM_ID', 'PreviousItemId', 'INTEGER', true, 10, 0);
		$this->addColumn('NEXT_ITEM_ID', 'NextItemId', 'INTEGER', true, 10, 0);
		$this->addColumn('DISPLAY_ORDER', 'DisplayOrder', 'INTEGER', true, 10, 0);
		$this->addColumn('PREREQUISITE', 'Prerequisite', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PARAMETERS', 'Parameters', 'LONGVARCHAR', false, null, null);
		$this->addColumn('LAUNCH_DATA', 'LaunchData', 'LONGVARCHAR', true, null, null);
		$this->addColumn('MAX_TIME_ALLOWED', 'MaxTimeAllowed', 'CHAR', false, 13, '');
		$this->addColumn('TERMS', 'Terms', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SEARCH_DID', 'SearchDid', 'INTEGER', false, 11, null);
		$this->addColumn('AUDIO', 'Audio', 'VARCHAR', false, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpItemTableMap
