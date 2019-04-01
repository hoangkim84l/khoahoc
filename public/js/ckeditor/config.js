/*

Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.

For licensing, see LICENSE.html or http://ckeditor.com/license

*/



CKEDITOR.plugins.addExternal('onchange');

var DIR_FOLDER = ''; // Nếu trên host thì để rỗng

CKEDITOR.editorConfig = function(config)

{

	config.extraPlugins = 'onchange';

	config.resize_dir = 'vertical';

	

	config.filebrowserBrowseUrl = DIR_FOLDER + '/public/js/ckfinder/ckfinder.html';

	 config.filebrowserBrowseUrl = DIR_FOLDER + '/public/js/ckfinder/browse.php?type=files';

    config.filebrowserImageBrowseUrl = DIR_FOLDER + '/public/js/ckfinder/browse.php?type=images';

    config.filebrowserFlashBrowseUrl = DIR_FOLDER + '/public/js/ckfinder/browse.php?type=flash';



    config.filebrowserUploadUrl = DIR_FOLDER + '/public/js/ckfinder/upload.php?type=files';

    config.filebrowserImageUploadUrl = DIR_FOLDER + '/public/js/ckfinder/upload.php?type=images';

    config.filebrowserFlashUploadUrl = DIR_FOLDER + '/public/js/ckfinder/upload.php?type=flash';

	

	

	config.toolbar = 'Custom';

	

	config.toolbar_Custom = [

		["Image","-","Bold","Italic","Underline","Strike","-","NumberedList","BulletedList","-","Outdent","Indent","Blockquote","-","Link","Unlink","-","Table","SpecialChar","-","Cut","Copy","Paste","-","Undo","Redo","-"],

		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],

		['Styles','Format','Font','FontSize'],

		['TextColor','BGColor'],

		['Source']

	];

	

	config.toolbar_Custom_Short = [

		["Image","-","Bold","Italic","Underline","Strike","-","NumberedList","BulletedList","-","Outdent","Indent","Blockquote","-","Link","Unlink","-","Table","SpecialChar","-","Cut","Copy","Paste","-","Undo","Redo","-"]

	];

	

};