<?php

declare(strict_types=1);

namespace Keboola\AzureApiClient\Marketplace\Model;

use Keboola\AzureApiClient\ResponseModelInterface;

final class UsageEventError implements ResponseModelInterface
{
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly ?array $additionalInfo,
    ) {
    }

    public static function fromResponseData(array $data): static
    {
        return new self(
            $data['code'],
            $data['message'],
            $data['additionalInfo'] ?? null,
        );
    }
}
