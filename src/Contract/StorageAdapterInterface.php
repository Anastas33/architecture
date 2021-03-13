<?php


namespace Model\Contract;


interface StorageAdapterInterface
{
    public function getDataFromSource(array $search): array;
}