<?php

namespace App;

class Hello

{

// Propriétés

private string $hi = 'Hello World !';

public function speak(): string {
        return $this->hi;
}

/**
 * Get the value of hi
 */ 
public function getHi()
{
return $this->hi;
}

/**
 * Set the value of hi
 *
 * @return  self
 */ 
public function setHi($hi)
{
$this->hi = $hi;

return $this;
}

}
