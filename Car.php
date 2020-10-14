<?php

class Car {
    
    /**
     * @var integer
     */
    private $nbWheels;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $fuelLevel;

    public function __construct($color,$nbSeats,$energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }
    public function forward(){
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake(){
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
     /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    
    /**
     * @return integer
     */
    public function getNbWheels():integer
    {
        return $this->nbWheels;
    }
    /**
     * @param integer $nbWheels
     */
    public function setNbWheels(integer $nbWheels){
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return integer
     */
    public function getCurrentSpeed():integer
    {
        return $this->currentSpeed;
    }
    /**
     * @param integer @currentSpeed
     */
    public function setCurrentSpeed(integer $currentSpeed){
        $this->currentSpeed = $currentSpeed;
    }
    /**
     * @return integer
     */
    public function getNbSeats():integer
    {
        return $this->nbSeats;
    }
    /**
     * @param integer @nbSeats
     */
    public function setNbSeats(integer $nbSeats){
        $this->nbSeats = $nbSeats;
    }
     /**
     * @return string
     */
    public function getTypeOfEnergy():string
    {
        return $this->typeOfEnergy;
    }
    /**
     * @param integer @typeOfEnergy
     */
    public function setTypeOfEnergy(integer $typeOfEnergy){
        $this->typeOfEnergy = $typeOfEnergy;
    }
     /**
     * @return integer
     */
    public function getFuelLevel():integer
    {
        return $this->fuelLevel;
    }
    /**
     * @param integer @nbSeats
     */
    public function setFuelLevel(integer $fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;
    }

}