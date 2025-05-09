<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Metadata;

use ApiPlatform\OpenApi;
use ApiPlatform\State\ParameterNotFound;
use ApiPlatform\State\ParameterProviderInterface;
use Symfony\Component\Validator\Constraint;

/**
 * @experimental
 */
abstract class Parameter
{
    /**
     * @param (array<string, mixed>&array{type?: string, default?: string})|null $schema
     * @param array<string, mixed>                                               $extraProperties
     * @param ParameterProviderInterface|callable|string|null                    $provider
     * @param FilterInterface|string|null                                        $filter
     * @param Constraint|Constraint[]|null                                       $constraints
     */
    public function __construct(
        protected ?string $key = null,
        protected ?array $schema = null,
        protected OpenApi\Model\Parameter|bool|null $openApi = null, // TODO: use false as type instead of bool
        protected mixed $provider = null,
        protected mixed $filter = null,
        protected ?string $property = null,
        protected ?string $description = null,
        protected ?bool $required = null,
        protected ?int $priority = null,
        protected ?bool $hydra = null,
        protected Constraint|array|null $constraints = null,
        protected string|\Stringable|null $security = null,
        protected ?string $securityMessage = null,
        protected ?array $extraProperties = [],
    ) {
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @return (array<string, mixed>&array{type?: string, default?: string})|null $schema
     */
    public function getSchema(): ?array
    {
        return $this->schema;
    }

    public function getOpenApi(): OpenApi\Model\Parameter|bool|null
    {
        return $this->openApi;
    }

    public function getProvider(): mixed
    {
        return $this->provider;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function getFilter(): mixed
    {
        return $this->filter;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function getHydra(): ?bool
    {
        return $this->hydra;
    }

    /**
     * @return Constraint|Constraint[]|null
     */
    public function getConstraints(): Constraint|array|null
    {
        return $this->constraints;
    }

    public function getSecurity(): string|\Stringable|null
    {
        return $this->security;
    }

    public function getSecurityMessage(): ?string
    {
        return $this->securityMessage;
    }

    /**
     * The computed value of this parameter, located into extraProperties['_api_values'].
     *
     * @readonly
     */
    public function getValue(mixed $default = new ParameterNotFound()): mixed
    {
        return $this->extraProperties['_api_values'] ?? $default;
    }

    /**
     * @return array<string, mixed>
     */
    public function getExtraProperties(): array
    {
        return $this->extraProperties;
    }

    public function withKey(string $key): static
    {
        $self = clone $this;
        $self->key = $key;

        return $self;
    }

    public function withPriority(int $priority): static
    {
        $self = clone $this;
        $self->priority = $priority;

        return $self;
    }

    /**
     * @param array{type?: string} $schema
     */
    public function withSchema(array $schema): static
    {
        $self = clone $this;
        $self->schema = $schema;

        return $self;
    }

    public function withOpenApi(OpenApi\Model\Parameter $openApi): static
    {
        $self = clone $this;
        $self->openApi = $openApi;

        return $self;
    }

    /**
     * @param ParameterProviderInterface|string $provider
     */
    public function withProvider(mixed $provider): static
    {
        $self = clone $this;
        $self->provider = $provider;

        return $self;
    }

    /**
     * @param FilterInterface|string $filter
     */
    public function withFilter(mixed $filter): static
    {
        $self = clone $this;
        $self->filter = $filter;

        return $self;
    }

    public function withProperty(string $property): static
    {
        $self = clone $this;
        $self->property = $property;

        return $self;
    }

    public function withDescription(string $description): static
    {
        $self = clone $this;
        $self->description = $description;

        return $self;
    }

    public function withRequired(bool $required): static
    {
        $self = clone $this;
        $self->required = $required;

        return $self;
    }

    public function withHydra(bool $hydra): static
    {
        $self = clone $this;
        $self->hydra = $hydra;

        return $self;
    }

    public function withConstraints(array|Constraint $constraints): static
    {
        $self = clone $this;
        $self->constraints = $constraints;

        return $self;
    }

    public function withSecurity(string|\Stringable|null $security): self
    {
        $self = clone $this;
        $self->security = $security;

        return $self;
    }

    public function withSecurityMessage(?string $securityMessage): self
    {
        $self = clone $this;
        $self->securityMessage = $securityMessage;

        return $self;
    }

    /**
     * @param array<string, mixed> $extraProperties
     */
    public function withExtraProperties(array $extraProperties): static
    {
        $self = clone $this;
        $self->extraProperties = $extraProperties;

        return $self;
    }
}
