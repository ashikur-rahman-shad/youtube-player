<?php
    require 'backend/database/db-connect.php';

    require 'backend/register/1.global.php';
    require 'backend/register/2.validation.php';
    require 'backend/register/3.print-errors.php';
    require 'backend/register/4.add-database.php';

    require 'pages/register.php';
