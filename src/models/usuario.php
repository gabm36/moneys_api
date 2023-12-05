<?php

class Usuario
{
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $telefone;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        if ($id <= 0)
            throw new InvalidArgumentException("ID inválido", 400);

        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        if (empty($nome))
            throw new InvalidArgumentException("O nome não pode ser vazio", 400);
        else if (strlen($nome) > 40)
            throw new InvalidArgumentException("O nome não pode ter mais de 40 caracteres", 400);

        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new InvalidArgumentException("O email é inválido", 400);

        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        if (strlen($senha) < 8)
            throw new InvalidArgumentException("Senha muito curta", 400);
        else if (strlen($senha > 32))
            throw new InvalidArgumentException("Senha muito longa", 400);

        $this->senha = $senha;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        if (!preg_match("/^[1-9]{11,13}$/", $telefone))
            throw new InvalidArgumentException("Número de telefone inválido", 400);

        $this->telefone = $telefone;
    }
}
