<?php
// BotDetect PHP Captcha configuration options

$config = array(
  // Captcha configuration for contact page
  'ContactCaptcha' => array(
    'UserInputID' => 'CaptchaCode',
    'CodeLength' => CaptchaRandomization::GetRandomCodeLength(4, 6),
    'ImageStyle' => ImageStyle::AncientMosaic,
  ),

);
