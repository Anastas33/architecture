<?php


namespace Contract;


interface DomainObjectInterface
{
    public function getId(): int;
    public function getLogin(): string;
}