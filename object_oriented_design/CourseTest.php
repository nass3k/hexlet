<?php
use PHPUnit\Framework\TestCase;
use App\Course;

// BEGIN (write your solution here)
class CourseTest extends TestCase
{
    public function testGetName()
    {
        $name = 'nikita';
        $course = new Course($name);
        $this->assertEquals($name, $course->getName());
    }
}
