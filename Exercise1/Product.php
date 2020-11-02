<?php declare(strict_types=1);


class Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $priceAtStart;
    /**
     * @var int
     */
    private $amountAtStart;

    public function __construct(string $name, float $priceAtStart, int $amountAtStart)
    {
        $this->name = $name;
        $this->priceAtStart = $priceAtStart;
        $this->amountAtStart = $amountAtStart;
    }

    public function printProduct(): string
    {
        $price = (string)$this->priceAtStart;

        if ($price[-2] === '.') {
            $price = $this->priceAtStart . '0';

        } elseif (!strpos($price, '.')) {
            $price = $this->priceAtStart . '.00';
        }
        return '"' . $this->name . '",' . $price . ' EUR, ' . $this->amountAtStart . ' units';
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amountAtStart = $amount;
    }

    /**
     * @param float $newPrice
     */
    public function setPrice(float $newPrice): void
    {
        $this->priceAtStart = $newPrice;
    }
}