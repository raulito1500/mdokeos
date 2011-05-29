<?php



/**
 * This class defines the structure of the 'lp_iv_interaction' table.
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
class LpIvInteractionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpIvInteractionTableMap';

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
		$this->setName('lp_iv_interaction');
		$this->setPhpName('LpIvInteraction');
		$this->setClassname('LpIvInteraction');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addColumn('ORDER_ID', 'OrderId', 'SMALLINT', true, 5, 0);
		$this->addColumn('LP_IV_ID', 'LpIvId', 'BIGINT', true, 20, null);
		$this->addColumn('INTERACTION_ID', 'InteractionId', 'VARCHAR', true, 255, '');
		$this->addColumn('INTERACTION_TYPE', 'InteractionType', 'VARCHAR', true, 255, '');
		$this->addColumn('WEIGHTING', 'Weighting', 'DOUBLE', true, null, 0);
		$this->addColumn('COMPLETION_TIME', 'CompletionTime', 'VARCHAR', true, 16, '');
		$this->addColumn('CORRECT_RESPONSES', 'CorrectResponses', 'LONGVARCHAR', true, null, null);
		$this->addColumn('STUDENT_RESPONSE', 'StudentResponse', 'LONGVARCHAR', true, null, null);
		$this->addColumn('RESULT', 'Result', 'VARCHAR', true, 255, '');
		$this->addColumn('LATENCY', 'Latency', 'VARCHAR', true, 16, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpIvInteractionTableMap
