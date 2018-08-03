<?php

namespace App\Message;

use Sam\ApiPlatform\Messenger\Annotation\ApiMessage;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ApiMessage(
 *   path="/write-message",
 *   type="command"
 * )
 */
class WriteMessage
{
    /**
     * @NotBlank
     *
     * @var string
     */
    public $message;
}
