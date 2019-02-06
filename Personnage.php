<?php

class Personnage{

    private $_id;
    private $_nom;
    private $_force;
    private $_degats;
    private $_niveau;
    private $_experience;


    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;


    private static $_texteADire = 'Je vais vous tuer!';

    public function __construct($forceInitiale){

        echo 'Voici le constructeur!';
        $this->setForce($forceInitiale);
        $this->setDegats(0);
        $this->_experience = 1;
    }


    public function degats() {

        return $this->_degats;
    }

    public function force() {

        return $this->_force;
    }
    
    public function experience() {

        return $this->_experience;
    } 




    public function deplacer(){


    }
 
    public function frapper(Personnage $persoAFrapper){
    
        $persoAFrapper->_degats += $this->_force;
        /* $this->_experience = $this->_experience + 1; */
    }

    public function gagnerExperience(){
    
        $this->_experience++;
        
    }

    public function setForce($force){

        if(in_array($force,[self::FORCE_PETITE, self::FORCE_MOYENNE,self::FORCE_GRANDE])){

            $this->_force=$force;

        }
    
    }

    public function setExperience($experience){

        if(!is_int($experience)){
            trigger_error('L\'expérience doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($experience>100){

            trigger_error('L\'expérience doit être inférieur à 100', E_USER_WARNING);
            return;
        }

        $this->_experience=$experience;

    }


    public function setDegats($degats){


        if(!is_int($degats)){
            trigger_error('L\'expérience doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($degats>100){

            trigger_error('L\'expérience doit être inférieur à 100', E_USER_WARNING);
            return;
        }

        $this->_degats=$degats;

    }


    public static function parler(){


        echo self::$_texteADire;
    }




    /* public function parler(){
    
        echo "Je suis ton fils!";
    }
 */
}


