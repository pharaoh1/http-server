<?php

namespace Amp\Http\Server\Driver;

use Amp\ByteStream\Closable;
use Amp\Socket\SocketAddress;
use Amp\Socket\TlsInfo;

interface Client extends Closable
{
    /**
     * Integer ID of this client.
     */
    public function getId(): int;

    /**
     * @return SocketAddress Remote client address.
     */
    public function getRemoteAddress(): SocketAddress;

    /**
     * @return SocketAddress Local server address.
     */
    public function getLocalAddress(): SocketAddress;

    /**
     * @return bool `true` if the client is encrypted, `false` if plaintext.
     */
    public function isEncrypted(): bool;

    /**
     * If the client is encrypted a TlsInfo object is returned, otherwise null.
     */
    public function getTlsInfo(): ?TlsInfo;
}
