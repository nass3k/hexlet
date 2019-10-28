<?php


interface Comparable
{
    public function compareTo($obj);
}

class User implements Comparable
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function compareTo($comparableUser)
    {
        return $this->getId() === $comparableUser->getId();
    }
}

$user1 = new User(4, 'tolya');
$user2 = new User(1, 'petya');

$user1->compareTo($user2); // false
