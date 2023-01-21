<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
require 'backend/database/db-connect.php';
require 'backend/account/general/1.session.php';
require 'backend/player/streamkey.php';
require 'backend/player/player.php';
require 'pages/player.php';
