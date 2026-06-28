<?php

namespace app\controller;

use app\model\Config;
use PHPMailer\PHPMailer\PHPMailer;

class Notify
{
    public static function email($recipient, $title, $content)
    {
        $mail = new PHPMailer(true);
        $smtp_configs = Config::group('smtp');

        $mail->isSMTP();
        $mail->Host = $smtp_configs['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Encoding = 'base64';
        $mail->Username = $smtp_configs['smtp_username'];
        $mail->Password = $smtp_configs['smtp_password'];
        if ((int) $smtp_configs['smtp_port'] === 465) {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->Port = $smtp_configs['smtp_port'];

        $mail->setFrom($smtp_configs['smtp_sender'], $smtp_configs['smtp_name']);
        $mail->addAddress($recipient);

        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $content;

        $mail->send();
    }
}
