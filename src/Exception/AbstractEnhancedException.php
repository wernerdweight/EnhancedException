<?php
declare(strict_types=1);

namespace WernerDweight\EnhancedException\Exception;

abstract class AbstractEnhancedException extends \RuntimeException implements EnhancedExceptionInterface
{
    /** @var int */
    private const EXCEPTION_UNKNOWN = 1;

    /** @var string[] */
    protected static $messages = [
        self::EXCEPTION_UNKNOWN => 'An unknown exception has occured!',
    ];

    /**
     * @param int             $code
     * @param mixed[]         $payload
     * @param \Throwable|null $previous
     *
     * @throws \Safe\Exceptions\StringsException
     */
    public function __construct(int $code, array $payload = [], ?\Throwable $previous = null)
    {
        if (true !== array_key_exists($code, static::$messages)) {
            $code = self::EXCEPTION_UNKNOWN;
        }

        $message = static::$messages[$code];

        if (true !== empty($payload)) {
            $message = \Safe\sprintf($message, ...$payload);
        }

        parent::__construct($message, $code, $previous);
    }
}
