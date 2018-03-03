<?php 

namespace Gama\ORM\Drivers;

use Gama\ORM\Model;

interface DriverStrategy
{
    public function save(Model $data);
    public function select(array $data = []);
    public function delete($data);
    public function exec(string $query = null);
    public function first();
    public function all();
}