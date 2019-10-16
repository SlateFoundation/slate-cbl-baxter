<?php

namespace Slate\Connectors\InfiniteCampus;

$mappedStudentColumns = [
    'student.studentNumber' => 'StudentNumber',
    'student.legalFirstName' => 'FirstName',
    'student.legalMiddleName' => 'MiddleNmae',
    'student.legalLastName' => 'LastName',
    'student.gender' => 'Gender',
    'student.grade' => 'Grade',
    'student.homeroomTeacher' => 'AdvisorFullName',
    'student.birthdate' => 'BirthDate',
    'student.personID' => 'ForeignKey'
];

Connector::$studentColumns = array_merge(Connector::$studentColumns, $mappedStudentColumns);