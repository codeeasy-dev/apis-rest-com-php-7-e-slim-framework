<?php

namespace App\Models\MySQL\CodeeasyGerenciadorDeLojas;

final class TokenModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $refresh_token;
    /**
     * @var string
     */
    private $expired_at;
    /**
     * @var int
     */
    private $usuarios_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefresh_token(): string
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     * @return self
     */
    public function setRefresh_token(string $refresh_token): self
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpired_at(): string
    {
        return $this->expired_at;
    }

    /**
     * @param string $expired_at
     * @return self
     */
    public function setExpired_at(string $expired_at): self
    {
        $this->expired_at = $expired_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsuarios_id(): int
    {
        return $this->usuarios_id;
    }

    /**
     * @param int $usuarios_id
     * @return self
     */
    public function setUsuarios_id(int $usuarios_id): self
    {
        $this->usuarios_id = $usuarios_id;
        return $this;
    }
}
