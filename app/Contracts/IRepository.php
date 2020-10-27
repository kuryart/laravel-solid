<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface IRepository {
    public function __construct(Model $model);
    public function all(): Model;
    public function find(int $id): Model;
    public function findByColumn(string $column, $value): Model;
    public function create(array $attributes): bool;
    public function remove(int $id): bool;
    public function update(int $id, array $attributes): bool;
    public function edit(int $id, array $attributes): bool;
}