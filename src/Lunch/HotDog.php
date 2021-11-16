<?php



namespace LUNCH;


class HotDog 
{

    private string $pao;

    private string $salsicha;

    private string $batataPalha;

    private string $vinagrete;

    private bool $mostarda = false;

    private bool $catchup = false;

    private bool $milho = false;



    public function setPao( string $pao ): void 
    {
        $this->pao = $pao;
    }

    public function setSalsicha( string $salsicha): void 
    {
        $this->salsicha = $salsicha;
    }

    public function setBatataPalha(string $batataPalha ): void 
    {
        $this->batataPalha = $batataPalha;
    }

    public function setVinagrete(string $vinagrete): void 
    {
        $this->vinagrete = $vinagrete;
    }

    public function setMostarda(bool $mostarda): void 
    {
        $this->mostarda = $mostarda;
    }

    public function setCatchup( bool $catchup): void 
    {
        $this->catchup = $catchup;
    }

    public function setMilho( bool $milho ): void 
    {
        $this->milho = $milho;
    }


    public function getPao(): string 
    {
        return $this->pao;
    }

    public function getSalsicha(): string 
    {
        return $this->salsicha;
    }

    public function getBatataPalha(): string 
    {
        return $this->batataPalha;
    }

    public function getVinagrete(): string 
    {
        return $this->vinagrete;
    }

    public function getMostarda(): bool 
    {
        return $this->mostarda;
    }

    public function getCatchup(): bool 
    {
        return $this->catchup;
    }

    public function getMilho(): bool 
    {
        return $this->milho;
    }
}