<?php

namespace App\Entity;

class Category{
    private int $id;
    private string $namecategory;

    public function __construct(int $id, string $namecategory)
    {
        $this->id = $id;
        $this->namecategory = $namecategory;

    }


	/**
	 * @return 
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getNamecategory(): string {
		return $this->namecategory;
	}
	
	/**
	 * @param  $namecategory 
	 * @return self
	 */
	public function setNamecategory(string $namecategory): self {
		$this->namecategory = $namecategory;
		return $this;
	}
}