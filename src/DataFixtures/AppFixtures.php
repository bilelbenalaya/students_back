<?php

namespace App\DataFixtures;
use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        //$faker = Factory::create();
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $student = new Student();
            $student->setName($faker->name);
            $student->setLastName($faker->lastName);
            $student->setEmail($faker->email);
            $student->setPhone($faker->phoneNumber);
            $manager->persist($student);
            
        }

        $manager->flush();
    }
}
