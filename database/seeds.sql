-- Seed data

INSERT IGNORE INTO `config` (`item`, `value`, `class`, `default_value`, `type`) VALUES
('registration_verification_code', '0', 'verification_code', '0', 'bool'),
('login_verification_code', '0', 'verification_code', '0', 'bool'),
('reset_password_verification_code', '0', 'verification_code', '0', 'bool'),
('create_virtual_machine_verification_code', '0', 'verification_code', '0', 'bool'),
('version', '1.0.0', 'system', '1.0.0', 'string'),
('captcha_provider', 'think-captcha', 'verification_code', 'think-captcha', 'string'),
('hcaptcha_site_key', '', 'verification_code', '', 'string'),
('hcaptcha_secret', '', 'verification_code', '', 'string'),
('custom_text', '', 'custom', '', 'string'),
('custom_script', '', 'custom', '', 'string');

-- Default admin: admin@azpanel.local / Admin@123456
INSERT IGNORE INTO `user` (`email`, `passwd`, `status`, `is_admin`, `created_at`, `updated_at`) VALUES
('admin@azpanel.local', '5747850c8f73f63e8ef52de11d4180bd859241cdcfd73f27f69d2f63d603173b888aa3b2edaee3d9f345ca589bbdc502fa60a436159ee674d53ab279766e7578', 1, 1, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
