<?php

namespace App\Http\User;

use App\Model\User;

class UserRepository implements IUserRepository {
    public function all(): Collection {
        return User::all();
    }

    public function find(int $id): User {
        return User::find($id);
    }

    public function findByColumn(string $column, $value): user {
        return User::where($column, $value)->get();
    }

    public function create(array $attributes): bool {
        return User::create($attributes);
    }

    public function update(int $id, array $attributes): bool {
        return User::find($id)->update($attributes);
    }
    
    public function delete(int $id): bool {
        return User::destroy($id);
    }     
}