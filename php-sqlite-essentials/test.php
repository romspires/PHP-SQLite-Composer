<?php

require_once 'vendor/autoload.php';

use Roms\Persistence\ConnectionCreator;
use Roms\Repository\PdoProfessorRepository;

$con = ConnectionCreator::createConnection();

$rep = new PdoProfessorRepository($con);

var_dump($rep->professorList());
