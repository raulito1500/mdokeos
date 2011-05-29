<?php



/**
 * This class defines the structure of the 'lp_iv_objective' table.
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
class LpIvObjectiveTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpIvObjectiveTableMap';

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
		$this->setName('lp_iv_objective');
		$this->setPhpName('LpIvObjective');
		$this->setClassname('LpIvObjective');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addColumn('LP_IV_ID', 'LpIvId', 'BIGINT', true, 20, null);
		$this->addColumn('ORDER_ID', 'OrderId', 'SMALLINT', true, 5, 0);
		$this->addColumn('OBJECTIVE_ID', 'ObjectiveId', 'VARCHAR', true, 255, '');
		$this->addColumn('SCORE_RAW', 'ScoreRaw', 'FLOAT', true, null, 0);
		$this->addColumn('SCORE_MAX', 'ScoreMax', 'FLOAT', true, null, 0);
		$this->addColumn('SCORE_MIN', 'ScoreMin', 'FLOAT', true, null, 0);
		$this->addColumn('STATUS', 'Status', 'CHAR', true, 32, 'not attempted');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpIvObjectiveTableMap
