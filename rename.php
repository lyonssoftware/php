<?php

rename ("/folder/file.ext", "newfile.ext");

?>

That doesn't rename the file within the folder, as you might assume, instead, it moves the file to whatever the PHP working directory is... Chances are you'll not find it in your FTP tree. Instead, use the following:

<?php

rename ("/folder/file.ext", "/folder/newfile.ext");

?>
