<?php

class Main
{
    public function main()
    {
        for ($i = 1; $i <= 5; $i++) {
            print($i);
            print("\n");
        }
    }
}

$main = new Main();
$main->main();