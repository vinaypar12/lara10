<?php

namespace App\Enums;

enum TicketStatus: int{
    case OPEN = 1;
    case RESOLVED = 2;
    case REJECTED = 3;
}

?>