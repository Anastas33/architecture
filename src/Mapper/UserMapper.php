<?php


namespace Mapper;


use Model\Contract\StorageAdapterInterface;
use Model\Entity\User;
use Model\Entity\Role;

class UserMapper
{
    /**
     * @var StorageAdapterInterface
     */
    private $storageAdapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapterInterface $storageAdapter
     */
    public function __construct(StorageAdapterInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function getById(int $id): ?User
    {
        foreach ($this->storageAdapter->getDataFromSource(['id' => $id]) as $user) {
            return $this->createUser($user);
        }

        return null;
    }

    public function getByLogin(string $login): ?User
    {
        foreach ($this->storageAdapter->getDataFromSource(['login' => $login]) as $user) {
            if ($user['login'] === $login) {
                return $this->createUser($user);
            }
        }

        return null;
    }

    private function createUser(array $user): User
    {
        $role = $user['role'];

        return new User(
            $user['id'],
            $user['name'],
            $user['login'],
            $user['password'],
            new Role($role['id'], $role['title'], $role['role'])
        );
    }
}