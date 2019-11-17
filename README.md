# 2xx-1
php/myspl steps to the inside-out-project

https://2xx-1.kingbob4ever.com

Version 200.0
-pulled files from clients HTML site and uploaded to development sever.
-updated title tag and header title with php variable.
-converted all html comments to PHP comments.

Version 201.0
-replaced top level pages by changing them to php files. (love,who, challeanges, you)
-removed header and footer from the pages replaced.
-created the header.inc.php and footer.inc.php files.
-createdthe include folder. 

Version 202.0
-replaced navigation with top level pages by creating a fuctioin and array to dynamiclally create the menu (love,who,challeanges,you)
-created the fuction.inc.php file
	-created the menuBuilder function.
-created the menu.data.php. file
	-created menuItems array.
-included in the very top of the header.inc.php a require_once to include/menu.data.php file.
-included in the very top of the header.inc.php a require_once to include/functions.inc.php file.