-- Seed data for config table
-- Generated from database/seeds/*.php

INSERT IGNORE INTO `config` (`item`, `value`, `class`, `default_value`, `type`) VALUES
-- VerificationCodeSwitchItem
('registration_verification_code', '0', 'verification_code', '0', 'bool'),
('login_verification_code', '0', 'verification_code', '0', 'bool'),
('reset_password_verification_code', '0', 'verification_code', '0', 'bool'),
('create_virtual_machine_verification_code', '0', 'verification_code', '0', 'bool'),
-- VersionItem
('version', '1.0.0', 'system', '1.0.0', 'string'),
-- AddHcaptchaItem
('captcha_provider', 'think-captcha', 'verification_code', 'think-captcha', 'string'),
('hcaptcha_site_key', '', 'verification_code', '', 'string'),
('hcaptcha_secret', '', 'verification_code', '', 'string'),
-- CustomWebsiteItem
('custom_text', '<a href="https://github.com/azpanel/azpanel">staff</a>', 'custom', '<a href="https://github.com/azpanel/azpanel">staff</a>', 'string'),
('custom_script', '<script></script>', 'custom', '<script></script>', 'string'),
-- DomainResolveConfigItem
('ali_whitelist', '1', 'resolv', '1', 'int'),
('resolv_sync', '0', 'resolv', '0', 'bool'),
('ali_domain', '', 'resolv', '', 'string'),
('ali_ak', '', 'resolv', '', 'string'),
('ali_sk', '', 'resolv', '', 'string'),
('ali_ttl', '600', 'resolv', '600', 'string'),
-- SynchronousParsingAfterCreationItem
('sync_immediately_after_creation', '0', 'resolv', '0', 'bool');
