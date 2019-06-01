<?php
declare(strict_types=1);

namespace WernerDweight\WdCms\Core\BaseBundle\Exception;

abstract class EnhancedException extends \RuntimeException implements EnhancedExceptionInterface
{
    /** @var int */
    private const EXCEPTION_UNKNOWN = 1;

    /** @var string[] */
    protected static $messages = [
        self::EXCEPTION_UNKNOWN => 'An unknown exception has occured!',
    ];

    /**
     * @param int             $code
     * @param array           $payload
     * @param \Throwable|null $previous
     */
    public function __construct(int $code, array $payload = [], ?\Throwable $previous = null)
    {
        if (true !== array_key_exists($code, static::$messages)) {
            $code = self::EXCEPTION_UNKNOWN;
        }

        $message = static::$messages[$code];

        if (true !== empty($payload)) {
            $message = sprintf($message, ...$payload);
        }

        parent::__construct($message, $code, $previous);
    }
}
