<?php



/**
 * This class defines the structure of the 'wiki' table.
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
class WikiTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.WikiTableMap';

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
		$this->setName('wiki');
		$this->setPhpName('Wiki');
		$this->setClassname('Wiki');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('PAGE_ID', 'PageId', 'INTEGER', true, 11, 0);
		$this->addColumn('REFLINK', 'Reflink', 'VARCHAR', true, 255, 'index');
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, 0);
		$this->addColumn('GROUP_ID', 'GroupId', 'INTEGER', false, 11, null);
		$this->addColumn('DTIME', 'Dtime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('ADDLOCK', 'Addlock', 'INTEGER', true, 11, 1);
		$this->addColumn('EDITLOCK', 'Editlock', 'INTEGER', true, 11, 0);
		$this->addColumn('VISIBILITY', 'Visibility', 'INTEGER', true, 11, 1);
		$this->addColumn('ADDLOCK_DISC', 'AddlockDisc', 'INTEGER', true, 11, 1);
		$this->addColumn('VISIBILITY_DISC', 'VisibilityDisc', 'INTEGER', true, 11, 1);
		$this->addColumn('RATINGLOCK_DISC', 'RatinglockDisc', 'INTEGER', true, 11, 1);
		$this->addColumn('ASSIGNMENT', 'Assignment', 'INTEGER', true, 11, 0);
		$this->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', true, null, null);
		$this->addColumn('PROGRESS', 'Progress', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SCORE', 'Score', 'INTEGER', false, 11, 0);
		$this->addColumn('VERSION', 'Version', 'INTEGER', false, 11, null);
		$this->addColumn('IS_EDITING', 'IsEditing', 'INTEGER', true, 11, 0);
		$this->addColumn('TIME_EDIT', 'TimeEdit', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('HITS', 'Hits', 'INTEGER', false, 11, 0);
		$this->addColumn('LINKSTO', 'Linksto', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TAG', 'Tag', 'LONGVARCHAR', true, null, null);
		$this->addColumn('USER_IP', 'UserIp', 'VARCHAR', true, 39, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // WikiTableMap
