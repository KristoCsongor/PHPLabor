<?php
class User
{
    private string $vezNev;
    private string $kerNev;
    private int $szulEv;
    static private int $minkor = 14;

    /**
     * @param $vezNev
     * @param $kerNev
     * @param $szulEv
     */
    public function __construct(string $vezNev, string $kerNev, int $szulEv)
    {
        $this->vezNev = $vezNev;
        $this->kerNev = $kerNev;
        $this->szulEv = $szulEv;
    }

    public function __destruct()
    {
        echo "Destruct: " . $this->__toString();
    }

    public function __toString(): string
    {
        return $this->vezNev . " " . $this->kerNev . " " . $this->getSzulEv() ."<br>";
    }

    public static function setMinkor(int $minkor): void
    {
        self::$minkor = $minkor;
    }

    public static function getMinkor(): int
    {
        return self::$minkor;
    }

    public function getSzulEv(): int
    {
        return $this->szulEv;
    }

}

/*
$user1 = new User("Kiss", "Lajos", 2000);
echo $user1;
User::setMinkor(16);
echo "<br>" . User::getMinkor() . "<br>";
*/