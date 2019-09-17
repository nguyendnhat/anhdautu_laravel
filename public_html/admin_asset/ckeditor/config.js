/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.skin = 'moonocolor';
	config.height = 700; 
	config.extraPlugins = 'video';
	config.entities_latin = true;
	

	config.filebrowserBrowseUrl = base_url+'admin_asset/ckfinder/ckfinder.html';

config.filebrowserImageBrowseUrl = base_url+'admin_asset/ckfinder/ckfinder.html?type=Images';

config.filebrowserFlashBrowseUrl = base_url+'admin_asset/ckfinder/ckfinder.html?type=Flash';

config.filebrowserUploadUrl = base_url+'admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

config.filebrowserImageUploadUrl = base_url+'admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

config.filebrowserFlashUploadUrl = base_url+'admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
CKEDITOR.config.extraAllowedContent = 'video [*]{*}(*);source [*]{*}(*);';