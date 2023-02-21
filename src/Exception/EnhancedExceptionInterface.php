<?php
declare(strict_types=1);

namespace WernerDweight\EnhancedException\Exception;

interface EnhancedExceptionInterface extends \Throwable
{
    /**
     * @param mixed[] $payload
     */
    public function __construct(int $code, array $payload = [], ?\Throwable $previous = null);
}
