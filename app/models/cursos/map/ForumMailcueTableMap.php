<?php



/**
 * This class defines the structure of the 'forum_mailcue' table.
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
class ForumMailcueTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumMailcueTableMap';

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
		$this->setName('forum_mailcue');
		$this->setPhpName('ForumMailcue');
		$this->setClassname('ForumMailcue');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addColumn('THREAD_ID', 'ThreadId', 'INTEGER', false, 11, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', false, 11, null);
		$this->addColumn('POST_ID', 'PostId', 'INTEGER', false, 11, null);
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumMailcueTableMap
