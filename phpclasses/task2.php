<?php

//животные
class BaseAnimal
{
	protected $KingdomName = null;
	protected $PawsAmount = null;
	protected $TailsAmount = null;
	protected $WingsAmount = null;

	public function getKingdom()
	{
		return $this->KingdomName;
	}

	public function getPaws()
	{
		return $this->PawsAmount;
	}

	public function getTails()
	{
		return $this->TailsAmount;
	}

	public function getWings()
	{
		return $this->WingsAmount;
	}
}

class Animal extends BaseAnimal
{
	protected $KingdomName = "Animal";
	protected $PawsAmount = 4;
	protected $TailsAmount = 1;
	protected $WingsAmount = 0;
}

class Fish extends BaseAnimal
{
	protected $KingdomName = "Fish";
	protected $PawsAmount = 0;
	protected $TailsAmount = 1;
	protected $WingsAmount = 2;
}

class Bird extends BaseAnimal
{
	protected $KingdomName = "Bird";
	protected $PawsAmount = 2;
	protected $TailsAmount = 1;
	protected $WingsAmount = 2;
}

//фабрика
class AnimalFactory
{
	public function generate()
	{
		$randomnumber = random_int(1, 3);
		if ($randomnumber == 1) {
			return new Animal;
		} else if ($randomnumber == 2) {
			return new Fish;
		} else {
			return new Bird;
		}
	}
}

//клетки
class Cage
{
	protected $CageName = null;
	protected $SpecialFor = null;
	protected $Animal = null;

	public function __construct($KingdomName)
	{
		if ($KingdomName == "Animal") {
			$this->CageName = "Cage";
			$this->SpecialFor = $KingdomName;
		} else if ($KingdomName == "Fish") {
			$this->CageName = "Aquarium";
			$this->SpecialFor = $KingdomName;
		} else if ($KingdomName == "Bird") {
			$this->CageName = "Aquarium";
			$this->SpecialFor = $KingdomName;
		}
	}

	public function isSuitable($KingdomName)
	{
		return $KingdomName == $this->SpecialFor;
	}

	public function placeAnimal($animal)
	{
		if ($this->isSuitable($animal->getKingdom())) {
			$this->Animal = $animal;
		}
	}

	public function getAnimal()
	{
		return $this->Animal;
	}
}

//смотритель
class ZooWatcher
{
	protected $cageArray = [];

	public function placeAnimalInZOO($animal)
	{
		$cage = new Cage($animal->getKingdom());
		array_push($cageArray, $cage);
	}

	public function getAnimalByParams($kingdom = null, $paws = null, $tails = null, $wings = null)
	{
		$selectedAnimals = [];
		foreach ($this->cageArray as $cage) {
			$animal = $cage->getAnimal();
			if ($kingdom == null or $kingdom != $animal->getKingdom()) {
				continue;
			}
			if ($paws == null or $paws != $animal->getPaws()) {
				continue;
			}
			if ($tails == null or $tails != $animal->getTails()) {
				continue;
			}
			if ($wings == null or $wings != $animal->getWings()) {
				continue;
			}
			array_push($selectedAnimals, $animal);
		}
		return $selectedAnimals;
	}
}

//менеджер
class ZooManager
{
	public function work()
	{
		$factory = new AnimalFactory;
		$animal = $factory->generate();
		$watcher = new ZooWatcher;
		$watcher->placeAnimalInZOO($animal);
	}
}
