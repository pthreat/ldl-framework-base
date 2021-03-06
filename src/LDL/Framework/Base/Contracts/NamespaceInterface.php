<?php declare(strict_types=1);

namespace LDL\Framework\Base\Contracts;

interface NamespaceInterface extends NameableInterface
{
    /**
     * @return string
     */
    public function getNamespace() : string;

}