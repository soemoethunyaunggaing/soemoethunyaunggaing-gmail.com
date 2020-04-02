<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    // model property on class instances
    protected $userRepository;

    // Constructor to bind user to repo
    public function __construct(User $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // Get all instances of userRepository
    public function all()
    {
        return $this->userRepository->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->userRepository->create($data);
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->userRepository->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->userRepository-findOrFail($id);
    }

    // Get the associated userRepository
    public function getuserRepository()
    {
        return $this->userRepository;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}