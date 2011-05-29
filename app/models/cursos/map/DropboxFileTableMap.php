<?php



/**
 * This class defines the structure of the 'dropbox_file' table.
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
class DropboxFileTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.DropboxFileTableMap';

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
		$this->setName('dropbox_file');
		$this->setPhpName('DropboxFile');
		$this->setClassname('DropboxFile');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('UPLOADER_ID', 'UploaderId', 'INTEGER', true, 10, 0);
		$this->addColumn('FILENAME', 'Filename', 'VARCHAR', true, 250, '');
		$this->addColumn('FILESIZE', 'Filesize', 'INTEGER', true, 10, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 250, '');
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 250, '');
		$this->addColumn('AUTHOR', 'Author', 'VARCHAR', false, 250, '');
		$this->addColumn('UPLOAD_DATE', 'UploadDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('LAST_UPLOAD_DATE', 'LastUploadDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('CAT_ID', 'CatId', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', true, 5, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DropboxFileTableMap
