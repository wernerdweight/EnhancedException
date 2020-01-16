<?php
declare(strict_types=1);

namespace WernerDweight\EnhancedException\Exception;

interface EnhancedExceptionInterface extends \Throwable
{
    /**
     * @param int             $code
     * @param mixed[]         $payload
     * @param \Throwable|null $previous
     */
    public function __construct(int $code, array $payload = [], ?\Throwable $previous = null);
}
