<?php

namespace Mrfansi\Xendit\Enums;

enum NotificationChannel: string
{
    case WHATSAPP = 'whatsapp';
    case EMAIL = 'email';
    case VIBER = 'viber';
    case SMS = 'sms';
}
