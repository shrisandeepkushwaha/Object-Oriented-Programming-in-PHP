<?php

class Point {
    public function __construct(
        public int $x = 0,
        public int $y = 0,
        public int $z = 0,
    ) {}
}

$object = new Point();
echo $object->x;