<?php

namespace App\Message;

use Sam\ApiPlatform\Messenger\Annotation\ApiMessage;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ApiMessage(
 *   path="/get-messages",
 *   type="query"
 * )
 */
class ReadMessages
{
}
