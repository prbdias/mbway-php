<?php

namespace prbdias\mbway;

/**
 * Class Alias.
 */
class Alias
{
    /**
     * Alias Type Codes.
     */
    const CELLPHONE = '001';
    const EMAIL = '002';
    const GENERIC = '005';

    /**
     * @var string
     */
    protected $aliasName;

    /**
     * @var string
     */
    protected $aliasTypeCde;

    /**
     * @return string
     */
    public function getAliasName()
    {
        return $this->aliasName;
    }

    /**
     * Email or Cellphone(<country code>#<cellphone number>).
     *
     * @param string $aliasName
     *
     * @return Alias
     */
    public function setAliasName($aliasName)
    {
        $this->aliasName = $aliasName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAliasTypeCde()
    {
        return $this->aliasTypeCde;
    }

    /**
     * @param string $aliasTypeCde
     *
     * @return Alias
     */
    public function setAliasTypeCde($aliasTypeCde)
    {
        $this->aliasTypeCde = $aliasTypeCde;

        return $this;
    }
}
