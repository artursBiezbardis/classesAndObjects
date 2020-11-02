<?php declare(strict_types=1);


class Dog
{
    private string $name;
    private string $sex;
    private $mother;
    private $father;

    public function __construct(string $name, string $sex, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;

    }

    /**
     * @return string|null
     */
    public function fatherName(): ?string
    {
        if ($this->father === null) {
            return 'Unknown';
        }
        return $this->father;
    }

    static function hasSameMotherAs(string $firstDog, string $secondDog, array $allDogs): bool
    {

        foreach ($allDogs as $dog) {
            if ($dog->getName() === $firstDog&&$dog->getMother()) {
                $mother = $dog->getMother();
            }else{
                return false;
            }
        }
        foreach ($allDogs as $dog) {
            if ($dog->getName() === $secondDog&&$dog->getMother()) {
                if ($mother === $dog->getMother()) {
                    return true;
                }
                return false;
            }
        }
        return false;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed|null
     */
    public function getMother(): ?mixed
    {
        return $this->mother;
    }
}