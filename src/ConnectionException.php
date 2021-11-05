<?php declare(strict_types=1);

namespace Scrawler\Swoole\PostgreSQL;

final class ConnectionException extends \Exception
{
    public static function failed(string $dsn): self
    {
        return new self("Unable to connect to PostgreSQL: [$dsn]");
    }
}
