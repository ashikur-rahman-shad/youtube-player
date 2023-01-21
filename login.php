<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

require 'backend/database/db-connect.php';

require 'backend/account/general/1.session.php';
require 'backend/account/general/2.declarations.php';
require 'backend/account/general/3.print-errors.php';
require 'backend/account/general/4.user-id.php';

require 'backend/account/login/0.login.php';

require 'pages/login.php';
