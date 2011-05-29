<?php



/**
 * This class defines the structure of the 'forum_category' table.
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
class ForumCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumCategoryTableMap';

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
		$this->setName('forum_category');
		$this->setPhpName('ForumCategory');
		$this->setClassname('ForumCategory');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CAT_ID', 'CatId', 'INTEGER', true, 11, null);
		$this->addColumn('CAT_TITLE', 'CatTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('CAT_COMMENT', 'CatComment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CAT_ORDER', 'CatOrder', 'INTEGER', true, 11, 0);
		$this->addColumn('LOCKED', 'Locked', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', true, 5, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumCategoryTableMap
