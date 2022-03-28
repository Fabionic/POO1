<?php


  // Car.php


  class Car

{

    private int $nbWheels = 4;
    public function getnbWheels(): int

{

    return $this->nbWheels;

}

    private int $currentSpeed;
    public function getcurrentSpeed(): int

    {
    
        return $this->currentSpeed;
    
    }
    
    
    public function forward(): string

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
    
    private string $color;

    public function getColor(): string

    {
    
        return $this->color;
    
    }
       
    public function __construct(string $color)
{

    $this->color = $color;

}
    
    private int $ndSeats;

    public function getNdSeats(): int

{

    return $this->ndSeats;

}

    public function __construct(int $ndSeats)
{
  
    $this->ndSeats = $ndSeats;
  
}
    private string $energy;

    public function getEnergy(): string

{

    return $this->energy;

}


    public function __construct(string $energy)

{

    $this->energy = $energy;

}

    private int $energyLevel;

    public function getEnergyLevel(): int

{

    return $this->energyLevel;

}


}
