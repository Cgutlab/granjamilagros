-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-04-2019 a las 22:22:57
-- Versión del servidor: 10.2.23-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `granjamilagrosco_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `title`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Cumpleaños', 'actividad__actividad1.png', 'aa', '2018-12-03 21:24:24', '2018-12-03 21:24:24'),
(2, 'Bar', 'actividad__actividad2.png', 'bb', '2018-12-03 21:26:04', '2018-12-03 21:26:04'),
(3, 'Quinceaños', 'actividad__actividad3.png', 'cc', '2018-12-03 21:26:15', '2018-12-03 21:26:15'),
(4, 'Organización de bodas', 'actividad__actividad4.png', 'dd', '2018-12-03 21:26:31', '2018-12-03 21:26:45'),
(5, 'Día de Campo', 'actividad__dia de campo.png', 'a', '2019-01-10 17:48:54', '2019-01-10 17:48:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `title`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Servicios', 'aa', '2018-12-03 22:29:44', '2018-12-03 22:32:00'),
(2, 'Espacios Comunes', 'bb', '2018-12-03 22:30:53', '2018-12-03 22:30:53'),
(3, 'El complejo', 'cc', '2018-12-03 22:31:34', '2018-12-03 22:31:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `type`, `description`, `icon`, `order`, `created_at`, `updated_at`) VALUES
(1, 'ubicacion', 'La Sta María 2269<br>Paso del Rey | Buenos Aires', 'fas fa-map-marker-alt', 'aa', NULL, '2019-01-09 21:39:22'),
(2, 'telefono', '011 5003 7383', 'fas fa-phone', 'bb', NULL, '2018-12-03 17:01:19'),
(3, 'correo', 'granjamilagrospasodelrey@gmail.com', 'far fa-envelope', 'cc', NULL, '2018-12-03 17:01:33'),
(4, 'mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5155243531603!2d-58.74239278477001!3d-34.61641048045616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc95f5b45e089f%3A0xaa368d818f536cca!2sLa+Sta+Mar%C3%ADa+2269%2C+Paso+del+Rey%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1543845767229', NULL, 'dd', NULL, '2018-12-03 17:03:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `title`, `image`, `route`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Servicios', 'destacados__destacado1.jpg', 'servicio', 'aa', NULL, '2018-12-05 21:03:25'),
(2, 'Actividades', 'destacados__destacado2.jpg', 'actividad', 'bb', NULL, '2018-12-05 21:03:31'),
(3, 'Contacto', 'destacados__destacado3.jpg', 'contacto', 'cc', NULL, '2018-12-05 21:03:38'),
(4, 'Galería', 'destacados__destacado4.jpg', 'galeria', 'dd', NULL, '2018-12-05 21:03:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `image`, `order`, `id_category`, `created_at`, `updated_at`) VALUES
(10, 'galerias__S-1.jpg', 'aa', 1, '2019-01-09 23:06:21', '2019-01-09 23:06:21'),
(11, 'galerias__S-2.jpg', 'bb', 1, '2019-01-09 23:06:42', '2019-01-09 23:06:42'),
(12, 'galerias__S-4.jpg', 'cc', 1, '2019-01-09 23:07:11', '2019-01-09 23:07:11'),
(13, 'galerias__EC-1.jpg', 'aa', 2, '2019-01-09 23:07:40', '2019-01-09 23:07:40'),
(14, 'galerias__EC-2.jpg', 'bb', 2, '2019-01-09 23:07:55', '2019-01-09 23:07:55'),
(15, 'galerias__Com-1.jpg', 'aa', 3, '2019-01-09 23:08:08', '2019-01-09 23:08:08'),
(16, 'galerias__S-3.jpg', 'dd', 1, '2019-01-10 16:07:03', '2019-01-10 16:07:03'),
(17, 'galerias__S-5.jpg', 'ee', 1, '2019-01-10 16:11:47', '2019-01-10 16:11:47'),
(18, 'galerias__S-6.jpg', 'ee', 1, '2019-01-10 16:13:28', '2019-01-10 16:13:28'),
(20, 'galerias__EC-3.jpg', 'cc', 2, '2019-01-10 16:16:40', '2019-01-10 16:16:40'),
(21, 'galerias__EC-4.jpg', 'dd', 2, '2019-01-10 16:17:01', '2019-01-10 16:17:01'),
(22, 'galerias__EC-5.jpg', 'ee', 2, '2019-01-10 16:20:47', '2019-01-10 16:20:47'),
(23, 'galerias__Com-2.jpg', 'bb', 3, '2019-01-10 16:21:59', '2019-01-10 16:21:59'),
(24, 'galerias__Com-3.jpg', 'cc', 3, '2019-01-10 16:22:32', '2019-01-10 16:22:32'),
(25, 'galerias__Com-4.jpg', 'dd', 3, '2019-01-10 16:22:51', '2019-01-10 16:22:51'),
(26, 'galerias__Com-5.jpg', 'ee', 3, '2019-01-10 16:23:10', '2019-01-10 16:23:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `name`, `image`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Header', 'logos__logo.nuevo.png', 'header', 'aa', NULL, '2019-01-10 15:01:49'),
(2, 'Footer', 'logos__logo.nuevo-footer.png', 'footer', 'bb', NULL, '2019-01-10 15:17:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `section`, `keyword`, `description`, `order`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, 'aa', NULL, NULL),
(2, 'servicio', NULL, NULL, 'bb', NULL, NULL),
(3, 'actividad', NULL, NULL, 'cc', NULL, NULL),
(4, 'galeria', NULL, NULL, 'dd', NULL, NULL),
(5, 'reserva', NULL, NULL, 'ee', NULL, NULL),
(6, 'ubicacion', NULL, NULL, 'ff', NULL, NULL),
(7, 'contacto', NULL, NULL, 'gg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_05_131122_create_metadatos_table', 1),
(4, '2018_11_05_132455_create_logos_table', 1),
(5, '2018_11_05_132504_create_redes_table', 1),
(6, '2018_11_05_132516_create_textos_table', 1),
(7, '2018_11_05_132527_create_datos_table', 1),
(8, '2018_11_05_132537_create_sliders_table', 1),
(9, '2018_11_23_183252_create_destacados_table', 2),
(10, '2018_12_03_181006_create_actividades_table', 3),
(11, '2018_12_03_184907_create_categorias_table', 4),
(12, '2018_12_03_184922_create_galerias_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `name`, `route`, `icon`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', 'fab fa-facebook', 'footer', 'aa', '2018-12-03 17:07:48', '2018-12-03 17:07:48'),
(2, 'Instagram', 'https://www.instagram.com/?hl=es-la', 'fab fa-instagram', 'footer', 'bb', '2018-12-03 17:08:02', '2018-12-03 17:08:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Perfecta combinación', 'Naturaleza + Confort', 'sliders__home.jpg', 'home', 'aa', '2018-12-03 17:55:52', '2018-12-06 14:25:02'),
(2, NULL, NULL, 'sliders__servicio.jpg', 'servicio', 'aa', '2018-12-03 18:34:26', '2018-12-03 18:34:26'),
(3, NULL, NULL, 'sliders__act-slider.jpg', 'actividad', 'aa', '2018-12-03 20:47:07', '2019-01-10 15:42:21'),
(4, NULL, NULL, 'sliders__slider-serv.jpg', 'galeria', 'aa', '2018-12-03 21:41:22', '2019-01-10 15:34:37'),
(5, NULL, NULL, 'sliders__slider-donde.jpg', 'donde', 'aa', '2018-12-05 18:40:22', '2019-01-10 15:47:04'),
(6, NULL, NULL, 'sliders__contacto.jpg', 'contacto', 'aa', '2018-12-05 20:34:33', '2018-12-05 20:34:33'),
(7, NULL, NULL, 'sliders__slider-act.jpg', 'reserva', 'aa', '2018-12-06 16:20:41', '2019-01-10 15:38:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `title`, `subtitle`, `image`, `text`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Términos y condiciones', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quam quod, modi maxime. Eum possimus temporibus ex minus non, reiciendis! Voluptatum sapiente, animi dolore reprehenderit id molestiae quis adipisci perspiciatis!</p>\r\n\r\n<p><br />\r\nAt eveniet quisquam, beatae minus, nesciunt, eum odio praesentium fugit neque sit pariatur modi iusto exercitationem quasi! Blanditiis velit fuga, dolorem nesciunt error nisi explicabo, veniam veritatis vel eum, ipsum.</p>\r\n\r\n<p><br />\r\nDeserunt earum ut eos illum quia optio, rem esse laudantium illo? Sapiente atque harum optio unde similique ad obcaecati, rerum cum saepe fugiat soluta totam incidunt laudantium iste veritatis magnam.<br />\r\nVoluptates obcaecati provident repellat nam voluptatum culpa, inventore praesentium mollitia aliquam veritatis! Saepe, id, autem, rem enim praesentium in sunt, soluta non repudiandae incidunt nulla vero molestias debitis magni eius!</p>\r\n\r\n<p><br />\r\nDeleniti enim velit consectetur consequatur est, culpa eius. Sapiente commodi accusantium, labore eius minima illo est beatae unde nihil, eaque atque distinctio dolorum magnam autem ullam sint odit! Veniam, ipsam.</p>', 'contacto', 'aa', NULL, '2018-12-03 17:12:48'),
(2, NULL, NULL, NULL, '<p>Somos una verdadera estancia de campo, con carruajes, campo y caballerizas. Un peque&ntilde;o viaje en el tiempo para volver a contactar con las tradiciones y costumbres argentinas m&aacute;s aut&eacute;nticas, en lugares que invitan a relajarse y disfrutar.</p>', 'home', 'bb', NULL, '2019-01-09 15:48:08'),
(3, 'Servicios', 'Una perfecta combinación de naturaleza, aire puro y confort', NULL, '<p>Nuestra meta es que cada fiesta tenga un aspecto y un tono especial, &uacute;nico, para que ninguna sea igual a la anterior.<bR>Es por eso que nos vuelcamos por completo en la organizaci&oacute;n de su evento, d&aacute;ndoles el asesoramiento que necesiten y ofreci&eacute;ndoles los siguientes servicios: carruajes, personal de seguridad, grupo electr&oacute;geno, asistencia m&eacute;dica, metegol y peloteros, barra de tragos, globolog&iacute;a, aves de granja y estacionamiento.</p>', 'servicio', 'cc', NULL, '2019-01-09 17:47:37'),
(4, 'Actividades', NULL, NULL, '<p>Tenemos una excelente propuesta para sus fiestas, cumplea&ntilde;os, aniversarios, reuniones de trabajo o reuniones empresariales.</p>\r\n\r\n<p>Ofrecemos: cocina y parrilla, juegos al aire libre, pileta en verano, realizaci&oacute;n de actividades educativas recreativas, &aacute;rea de deportes, mesas y sillas al aire libre, amplio parque, lugar para estacionamiento, alquiler de vajilla y manteler&iacute;a opcional.</p>\r\n\r\n<p>Consultar por servicios locales de catering, disk jockey, decoraci&oacute;n, manteler&iacute;a, entre otros.</p>', 'actividad', 'dd', NULL, '2019-01-10 17:41:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'franco', 'franco', '$2y$10$WBTZNK5fqiWX2T2fTnvEIueus1QfR0nXqJT9RNp9k3X7w6CdL1xsO', '5yzSMjF5QRJEXD9QmwvPvwsqtEN6CRWkFCqlKUUVwGhwQ0ndKCOLaqrr9mHo', '2018-12-03 16:24:58', '2018-12-03 16:24:58'),
(2, 'pablo', 'pablo', '$2y$10$o5uIV6ohC6Efg9/9YtHC2.EULXYs.A0QPguigvw7rqIruzy7Xo2Ta', 'hmD9TQKmy2JkvdEXfJJm6dYjhjcouj0wEe5V1l5k1eFEnl5wSKMKeDX8YAA4', '2018-12-07 17:41:31', '2018-12-07 17:41:31'),
(3, 'Maria Laura', 'marialaura', '$2y$10$y9B/n9pLp//fr0Ffylbb3.Rfm/J/WfcurdpIqOC4oDZPsX121kwTC', NULL, '2019-01-10 17:25:53', '2019-01-10 17:25:53'),
(4, 'Marina', 'marina', '$2y$10$ldZmwyE.9ebeITE3LXJcs.9s3Z1qi9bvZ.MFABZZc27cmibcG9AIO', NULL, '2019-01-10 17:26:09', '2019-01-10 17:26:09'),
(5, 'Claudio', 'claudio', '$2y$10$P4HSLEUBBlBdjsMuWMQD/O0WsliPurMBcc9/H6z6Vx81lxR0GMfU2', NULL, '2019-01-10 17:43:54', '2019-01-10 17:43:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
