-- Backup table: banco
CREATE TABLE `banco` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cod_transaccion` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `cod_transaccion` (`cod_transaccion`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('1', 'Banco Nacional', 'BNAC-001', '2025-10-22 07:12:00', '2025-10-22 07:12:00');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('2', 'Banco Test 1761154590109', 'TEST1761154590109', '2025-10-22 19:36:30', '2025-10-22 19:36:30');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('3', 'Banco Muñoz', '001', '2025-10-22 13:37:00', '2025-10-22 13:37:00');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('4', 'Banco Instructores', '123', '2025-10-22 20:49:24', '2025-10-22 20:49:24');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('5', 'Banco Test 1761159997085', '006', '2025-10-22 21:06:37', '2025-10-22 22:07:46');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('6', 'Banco Test 1761160235551', 'TEST1761160235551', '2025-10-22 21:10:35', '2025-10-22 21:10:35');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('7', 'Banco Test 1761160266261', 'TEST1761160266261', '2025-10-22 21:11:06', '2025-10-22 21:11:06');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('8', 'Banco Test 1761161167453', 'TEST1761161167453', '2025-10-22 21:26:07', '2025-10-22 21:26:07');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('9', 'Banco Test 1761163344926', '007', '2025-10-22 22:02:24', '2025-10-22 22:13:14');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('10', 'Banco Test 1761163428382', 'TEST1761163428382', '2025-10-22 22:03:48', '2025-10-22 22:03:48');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('11', 'Banco Test 1761163448058', 'TEST1761163448058', '2025-10-22 22:04:08', '2025-10-22 22:04:08');
INSERT INTO `banco` (`codigo`, `nombre`, `cod_transaccion`, `created_at`, `updated_at`) VALUES ('12', 'Banco Test 1761163551496', '005', '2025-10-22 22:05:51', '2025-10-22 22:07:26');


-- Backup table: usuarios
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nivel_acceso` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `nivel_acceso`) VALUES ('1', 'Editor', 'editor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2');
INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `nivel_acceso`) VALUES ('2', 'Usuario Consulta', 'lector', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1');
INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `nivel_acceso`) VALUES ('3', 'Instructor', 'admin', '$2y$10$InYk93N8CF5c7RySYI/e6uTD3qjprZ5weDOZ2HrPL.tVpW6Ju7BvS', '3');


