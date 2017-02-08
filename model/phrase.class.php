<?php 
/**
* 
*/
class phrase
{
	private $idPhrase;
	private $idRandomPhrase;
    private $intitulePhrase;
	
	function __construct($idPhrase=null,$idRandomPhrase=null,$intitulePhrase=null)
	{
		if($idPhrase)$this->idPhrase = $idPhrase;
		if($idRandomPhrase)$this->idRandomPhrase = $idRandomPhrase;
        if($intitulePhrase)$this->intitulePhrase = $intitulePhrase;

	}

	///////////////////////
	// GETTER AND SETTER
	///////////////////////



    /**
     * Gets the value of idPhrase.
     *
     * @return mixed
     */
    public function getIdPhrase()
    {
        return $this->idPhrase;
    }

    /**
     * Sets the value of idPhrase.
     *
     * @param mixed $idPhrase the id phrase
     *
     * @return self
     */
    public function setIdPhrase($idPhrase)
    {
        $this->idPhrase = $idPhrase;

        return $this;
    }

    /**
     * Gets the value of idRandomPhrase.
     *
     * @return mixed
     */
    public function getIdRandomPhrase()
    {
        return $this->idRandomPhrase;
    }

    /**
     * Sets the value of idRandomPhrase.
     *
     * @param mixed $idRandomPhrase the id random phrase
     *
     * @return self
     */
    public function setIdRandomPhrase($idRandomPhrase)
    {
        $this->idRandomPhrase = $idRandomPhrase;

        return $this;
    }

    /**
     * Gets the value of intitulePhrase.
     *
     * @return mixed
     */
    public function getIntitulePhrase()
    {
        return $this->intitulePhrase;
    }

    /**
     * Sets the value of intitulePhrase.
     *
     * @param mixed $intitulePhrase the intitule phrase
     *
     * @return self
     */
    public function setIntitulePhrase($intitulePhrase)
    {
        $this->intitulePhrase = $intitulePhrase;

        return $this;
    }
}
 ?>