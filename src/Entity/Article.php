<?php

namespace App\Entity;

class Article{
    private string $titre;
    private string $auteur;
    private string $contenu;
	private string $image;
    private int $id_category;
    
    private int $id;


    public function __construct(string $titre, string $auteur,string $contenu,string $image, int $id_category, int $id=null)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->contenu = $contenu;
		$this->image =$image;
        $this->id_category = $id_category;
        $this->id = $id;
    }


	/**
	 * @return 
	 */
	public function getTitre(): string {
		return $this->titre;
	}
	
	/**
	 * @param  $titre 
	 * @return self
	 */
	public function setTitre(string $titre): self {
		$this->titre = $titre;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getAuteur(): string {
		return $this->auteur;
	}
	
	/**
	 * @param  $auteur 
	 * @return self
	 */
	public function setAuteur(string $auteur): self {
		$this->auteur = $auteur;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getContenu(): string {
		return $this->contenu;
	}
	
	/**
	 * @param  $contenu 
	 * @return self
	 */
	public function setContenu(string $contenu): self {
		$this->contenu = $contenu;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getId_category(): int {
		return $this->id_category;
	}
	
	/**
	 * @param  $id_category 
	 * @return self
	 */
	public function setId_category(int $id_category): self {
		$this->id_category = $id_category;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getId(): ?int {
		return $this->id;
	}
	
	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(?int $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getImage(): string {
		return $this->image;
	}
	
	/**
	 * @param  $image 
	 * @return self
	 */
	public function setImage(string $image): self {
		$this->image = $image;
		return $this;
	}
}