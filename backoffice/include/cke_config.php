<?php
$config=array(
	"basePath"=>"../ckeditor/", //  กำหนด path ของ ckeditor
	"skin"=>"kama", // kama | office2003 | v2
	"language"=>"th", // th / en and more.....
	"extraPlugins"=>"uicolor", // เรียกใช้ plugin ให้สามารถแสดง UIColor Toolbar ได้
	"uiColor"=>"#eee", // กำหนดสีของ ckeditor
	//"extraPlugins"=>"autogrow", // เรียกใช้ plugin ให้สามารถขยายขนาดความสูงตามเนื้อหาข้อมูล
	"autoGrow_maxHeight"=>3000, // กำหนดความสูงตามเนื้อหาสูงสุด ถ้าเนื้อหาสูงกว่า จะแสดง scrollbar
	"enterMode"=>2, // กดปุ่ม Enter -- 1=แทรกแท็ก <p> 2=แทรก <br> 3=แทรก <div>
	"shiftEnterMode"=>1, // กดปุ่ม Shift กับ Enter พร้อมกัน 1=แทรกแท็ก <p> 2=แทรก <br> 3=แทรก <div>
	"height"=>300, // กำหนดความสูง
	"width"=>"*",  // กำหนดความกว้าง * การกำหนดความกว้างต้องให้เหมาะสมกับจำนวนของ Toolbar
/*	"fullPage"=>true, // กำหนดให้สามารถแก้ไขแบบเโค้ดเต็ม คือมีแท็กตั้งแต่ <html> ถึง </html>*/
	"filebrowserBrowseUrl"=>"../ckeditor/filemanager/browser/default/browser.html?Connector=".urlencode("../../connectors/php/connector.php"),
	"filebrowserImageBrowseUrl"=>"../ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=".urlencode("../../connectors/php/connector.php"),
	"filebrowserFlashBrowseUrl"=>"../ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=".urlencode("../../connectors/php/connector.php"),
	"filebrowserUploadUrl"=>"../ckeditor/filemanager/connectors/php/upload.php",
	"filebrowserImageUploadUrl"=>"../ckeditor/filemanager/connectors/php/upload.php?Type=Image",
	"filebrowserFlashUploadUrl"=>"../ckeditor/filemanager/connectors/php/upload.phpType=Flash",
	"toolbar"=>array(
		array('Source'),
        array('Cut','Copy','Paste','PasteText','PasteFromWord'),
        array('Font','FontSize'),
        array('TextColor','BGColor'),
        array('Link','Unlink'),
		array('Bold','Italic','Underline','Strike','Subscript','Superscript'),
		array('NumberedList','BulletedList','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
		array('Image','Table'),
            array('Maximize', 'ShowBlocks','-','About')
	)
);
/*"toolbar"=>array(
            array('Source','-','Save','NewPage','Preview','-','Templates'),
            array('Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'),
            array('Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'),
            array('Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'),
            '/',
            array('Bold','Italic','Underline','Strike','-','Subscript','Superscript'),
            array('NumberedList','BulletedList','-','Outdent','Indent','Blockquote'),
            array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
            array('Link','Unlink','Anchor'),
            array('Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'),
            '/',
            array('Styles','Format','Font','FontSize'),
            array('TextColor','BGColor'),
            array('Maximize', 'ShowBlocks','-','About')
        ), 	*/
?>