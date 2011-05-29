<?php



/**
 * This class defines the structure of the 'blog_rating' table.
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
class BlogRatingTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogRatingTableMap';

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
		$this->setName('blog_rating');
		$this->setPhpName('BlogRating');
		$this->setClassname('BlogRating');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('RATING_ID', 'RatingId', 'INTEGER', true, 11, null);
		$this->addColumn('BLOG_ID', 'BlogId', 'INTEGER', true, 11, 0);
		$this->addColumn('RATING_TYPE', 'RatingType', 'CHAR', true, null, 'post');
		$this->addColumn('ITEM_ID', 'ItemId', 'INTEGER', true, 11, 0);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, 0);
		$this->addColumn('RATING', 'Rating', 'SMALLINT', true, 9, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogRatingTableMap
