<?php

namespace Test;
/**
 * Interface JsonWebTokenInterface
 */
interface JsonWebTokenInterface
{
    /**
     * @param string $token
     * @return bool
     */
    public function verify(string $token);

    /**
     * @param array $data
     * @param int $lifeSeconds
     * @return string
     */
    public function encode(array $data, int $lifeSeconds = 10): string;

    /**
     * @param string $token
     * @return array
     */
    public function decode(string $token): array;
}