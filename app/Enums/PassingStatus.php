<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static Draft()
 * @method static Uploaded()
 * @method static Graded()
 */
class PassingStatus extends Enum
{
    const Draft = 'draft';
    const Uploaded = 'uploaded';
    const Graded = 'graded';
}
