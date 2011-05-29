<?php



/**
 * This class defines the structure of the 'forum_thread_qualify_log' table.
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
class ForumThreadQualifyLogTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumThreadQualifyLogTableMap';

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
		$this->setName('forum_thread_qualify_log');
		$this->setPhpName('ForumThreadQualifyLog');
		$this->setClassname('ForumThreadQualifyLog');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('THREAD_ID', 'ThreadId', 'INTEGER', true, 11, null);
		$this->addColumn('QUALIFY', 'Qualify', 'FLOAT', true, 6, 0);
		$this->addColumn('QUALIFY_USER_ID', 'QualifyUserId', 'INTEGER', false, 11, null);
		$this->addColumn('QUALIFY_TIME', 'QualifyTime', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumThreadQualifyLogTableMap
