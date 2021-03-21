<?php


namespace Model\IdentityMap;


use Contract\DomainObjectInterface;
use Model\Entity\User;

class IdentityMap
{
    /**
     * @var array
     */
    private $identityMap = [];

    /**
     * @param DomainObjectInterface $object
     */
    public function add(DomainObjectInterface $object)
    {
        $key = $this->getGlobalKey(get_class($object), $object->getId(), $object->getLogin());
        $this->identityMap[$key] = $object;
    }

    /**
     * @param string $classname
     * @param int $id
     * @param string $login
     * @return mixed|null
     */
    public function find(string $classname, int $id, string $login)
    {
        $key = $this->getGlobalKey($classname, $id, $login);
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }

    /**
     * @param string $classname
     * @param int $id
     * @param string $login
     * @return string
     */
    private function getGlobalKey(string $classname, int $id, string $login): string
    {
        return sprintf('%s.%d.%s', $classname, $id, $login);
    }
}