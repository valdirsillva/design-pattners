<?php


namespace LUNCH;


class HotDogBuilder implements HotDogBuilderInterface 
{
    private HotDog $hotdog;


    public function __construct() 
    {
        $this->hotdog = new HotDog();
    }

    public function addPao( string $pao ): self 
    {
        $this->hotdog->setPao($pao);

        return $this;
    }

    public function addSalsicha( string $salsicha ): self 
    {
        $this->hotdog->setSalsicha($salsicha);

        return $this;
    }

    public function addBatataPalha( string $batataPalha): self 
    {
        $this->hotdog->setBatataPalha($batataPalha);

        return $this;
    }

    public function addVinagrete( string $vinagrete): self 
    {
        $this->hotdog->setVinagrete($vinagrete);

        return $this;
    }

    public function addCatchup( bool $catchup): self 
    {
        $this->hotdog->setCatchup($catchup);

        return $this;
    }

    public function addMostarda( bool $mostarda): self 
    {
        $this->hotdog->setMostarda(true);

        return $this;
    }

    public function addMilho(): self 
    {
        $this->hotdog->setMilho(true);

        return $this;
    }

    public function hotDog(): HotDog 
    {
        return $this->hotDog;
    } 
}