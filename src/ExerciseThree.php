<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseThreeTest
 * desde la raiz del proyecto
 */
class ExerciseThree
{    
    // TODO: Crea una clase que maneje un juego, 
    // donde se deben atrapar una serie de enemigos para subir de nivel.
    // Cada cierta cantidad de enemigos atrapados har� que el jugador suba de nivel.
    // Cada vez que el jugador comience una partida, su nivel se reiniciar�.
    // Se debe poder obtener el nivel en el que se encuentra el jugador.

    var $enemy = 0;
    var $recibidos; 
    var $level = 0;

    public function __construct($recibido) { 
        $this->recibidos = $recibido; 
    } 
    
    public function catchEnemy()
    {                
        $this->enemy++;
        if ($this->enemy == $this->recibidos) {            
            $this->level++;
            $this->enemy=0;
        }              
        // return $this->recibidos;   
    }

    public function getLevel()
    {        
        return $this->level;
    }
}