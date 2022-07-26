<?php

namespace Roms\Repository;

class PdoProfessorRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function professorList():array
    {
        $sql = 'SELECT * FROM teachers;';
        $stmt = $this->connection->query($sql);
        $listOfTeachers = $stmt->fetchAll();

        return $listOfTeachers;
    }
}
