<?php

namespace PEAR2\Net\RouterOS\Test\Misc\Connection\NonPersistent;

use PEAR2\Net\RouterOS\Test\Misc\Connection\NonPersistent;
use PEAR2\Net\Transmitter\NetworkStream;

require_once __DIR__ . '/../NonPersistent.php';

/**
 * @group Misc
 * @group NonPersistent
 * @group EncryptedNonPersistentStart
 *
 * @requires extension openssl
 */
class EncryptedTest extends NonPersistent
{

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$encryption = NetworkStream::CRYPTO_TLS;
    }

    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        static::$encryption = null;
    }
}
