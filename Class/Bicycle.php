<?php


class Bicycle
{
    // Properties

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats = 1;

    /**
     * @var integer
     */
    private $nbWheels = 2;

    // Méthodes

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters et Setters

    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
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
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }    }
}