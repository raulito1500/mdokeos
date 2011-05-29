<?php



/**
 * This class defines the structure of the 'wiki_discuss' table.
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
class WikiDiscussTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.WikiDiscussTableMap';

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
		$this->setName('wiki_discuss');
		$this->setPhpName('WikiDiscuss');
		$this->setClassname('WikiDiscuss');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('PUBLICATION_ID', 'PublicationId', 'INTEGER', true, 11, 0);
		$this->addColumn('USERC_ID', 'UsercId', 'INTEGER', true, 11, 0);
		$this->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', true, null, null);
		$this->addColumn('P_SCORE', 'PScore', 'VARCHAR', false, 255, null);
		$this->addColumn('DTIME', 'Dtime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // WikiDiscussTableMap
