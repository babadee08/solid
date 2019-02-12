<?php

require "vendor/autoload.php";

$report = new \App\SRP\SalesReporter(new \App\SRP\SalesRepository());

$report->between('2019-01-02', '2019-02-01', new \App\SRP\HtmlOutput());