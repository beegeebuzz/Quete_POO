<?php


class Car
{
    // Properties

    /**
     * @var int
     */
    private $nbWheels = 4;

    /**
     * @var int
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel = 100;

    // Methodes

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start() {
        if ($this->energyLevel > 0) {
            return "Start engine !" . $this->energy . " level is " . $this->energyLevel . "%";
        } else {
            return "Need some " . $this->getEnergy() . " !";
        }
    }

    public function forward() {
        if ($this->energyLevel > 0) {
            $this->currentSpeed = $this->currentSpeed + 5;
            $this->energyLevel--;
            return "5mph more !";
    } else {
            $this->currentSpeed = null;
            return "Need some " . $this->getEnergy() . " !";
        }
    }

    public function brake() {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters and Setters

    /**
     * @return int
     */
    public function getNbWheels() {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats() {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy() {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel() {
        return "Level energy: ". $this->energyLevel . "% " . $this->getEnergy();
    }
}