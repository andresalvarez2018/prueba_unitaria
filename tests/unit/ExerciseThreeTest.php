<?php
namespace tests\unit;

require __DIR__ . "/../../src/ExerciseThree.php";

use src\ExerciseThree;
use PHPUnit\Framework\TestCase;

class ExerciseThreeTest extends TestCase
{
    /**
     *
     * @test
     */
    function firstTest()
    {
        $exerciseThree = new ExerciseThree(1);
        
        $this->assertEquals(0, $exerciseThree->getLevel(), "El resultado debe ser: 0");
    }
    
    /**
     *
     * @test
     */
    function secondTest()
    {
        $exerciseThree = new ExerciseThree(1);
        
        $exerciseThree->catchEnemy();
        
        $this->assertEquals(1, $exerciseThree->getLevel(), "El resultado debe ser: 1");
    }
    
    /**
     *
     * @test
     */
    function thirdTest()
    {
        $exerciseThree = new ExerciseThree(2);
        
        $exerciseThree->catchEnemy();
        
        $this->assertEquals(0, $exerciseThree->getLevel(), "El resultado debe ser: 0");
    }
    
    /**
     *
     * @test
     */
    function forthTest()
    {
        $upLevelEnemies = 2;
        $exerciseThree = new ExerciseThree($upLevelEnemies);
        
        for ($i = 0; $i < $upLevelEnemies; $i++) {
            $exerciseThree->catchEnemy();
        }
        
        $this->assertEquals(1, $exerciseThree->getLevel(), "El resultado debe ser: 1");
    }
    
    /**
     *
     * @test
     */
    function fifthTest()
    {
        $upLevelEnemies = 2;
        $exerciseThree = new ExerciseThree($upLevelEnemies);
        
        for ($i = 0; $i < $upLevelEnemies*2; $i++) {
            $exerciseThree->catchEnemy();
        }
        
        $this->assertEquals(2, $exerciseThree->getLevel(), "El resultado debe ser: 2");
    }
}

