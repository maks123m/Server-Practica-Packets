<?php
use Maks123m\Collect\Collect;

function collection(array $array = []): Collect
{
   return new Collect($array);
}
