<?php



/**
 * This class defines the structure of the 'lp_item_view' table.
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
class LpItemViewTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpItemViewTableMap';

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
		$this->setName('lp_item_view');
		$this->setPhpName('LpItemView');
		$this->setClassname('LpItemView');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addColumn('LP_ITEM_ID', 'LpItemId', 'INTEGER', true, 10, null);
		$this->addColumn('LP_VIEW_ID', 'LpViewId', 'INTEGER', true, 10, null);
		$this->addColumn('VIEW_COUNT', 'ViewCount', 'INTEGER', true, 10, 0);
		$this->addColumn('START_TIME', 'StartTime', 'INTEGER', true, 10, null);
		$this->addColumn('TOTAL_TIME', 'TotalTime', 'INTEGER', true, 10, 0);
		$this->addColumn('SCORE', 'Score', 'FLOAT', true, null, 0);
		$this->addColumn('STATUS', 'Status', 'CHAR', true, 32, 'not attempted');
		$this->addColumn('SUSPEND_DATA', 'SuspendData', 'LONGVARCHAR', false, null, null);
		$this->addColumn('LESSON_LOCATION', 'LessonLocation', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CORE_EXIT', 'CoreExit', 'VARCHAR', true, 32, 'none');
		$this->addColumn('MAX_SCORE', 'MaxScore', 'VARCHAR', false, 8, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpItemViewTableMap
