<?php


namespace LUNCH;


interface HotDogBuilderInterface 
{

    public function addPao( string $pao): self;

    public function addSalsicha( string $salsicha ): self;

    public function addBatataPalha( string $batataPalha): self;

    public function addVinagrete( string $vinagrete): self;

    public function addCatchup( bool $catchup): self;

    public function addMostarda( bool $mostarda): self;

    public function addMilho(): self;


    public function hotDog(): HotDog;

}