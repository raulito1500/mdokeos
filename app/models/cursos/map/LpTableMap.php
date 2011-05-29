<?php



/**
 * This class defines the structure of the 'lp' table.
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
class LpTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpTableMap';

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
		$this->setName('lp');
		$this->setPhpName('Lp');
		$this->setClassname('Lp');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('LP_TYPE', 'LpType', 'SMALLINT', true, 5, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('REF', 'Ref', 'VARCHAR', false, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PATH', 'Path', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FORCE_COMMIT', 'ForceCommit', 'TINYINT', true, 3, 0);
		$this->addColumn('DEFAULT_VIEW_MOD', 'DefaultViewMod', 'CHAR', true, 32, 'embedded');
		$this->addColumn('DEFAULT_ENCODING', 'DefaultEncoding', 'CHAR', true, 32, 'UTF-8');
		$this->addColumn('DISPLAY_ORDER', 'DisplayOrder', 'INTEGER', true, 10, 0);
		$this->addColumn('CONTENT_MAKER', 'ContentMaker', 'VARCHAR', true, 255, null);
		$this->addColumn('CONTENT_LOCAL', 'ContentLocal', 'VARCHAR', true, 32, 'local');
		$this->addColumn('CONTENT_LICENSE', 'ContentLicense', 'LONGVARCHAR', true, null, null);
		$this->addColumn('PREVENT_REINIT', 'PreventReinit', 'TINYINT', true, 3, 1);
		$this->addColumn('JS_LIB', 'JsLib', 'VARCHAR', true, 255, null);
		$this->addColumn('DEBUG', 'Debug', 'TINYINT', true, 3, 0);
		$this->addColumn('THEME', 'Theme', 'VARCHAR', true, 255, '');
		$this->addColumn('PREVIEW_IMAGE', 'PreviewImage', 'VARCHAR', true, 255, '');
		$this->addColumn('AUTHOR', 'Author', 'VARCHAR', true, 255, '');
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpTableMap
