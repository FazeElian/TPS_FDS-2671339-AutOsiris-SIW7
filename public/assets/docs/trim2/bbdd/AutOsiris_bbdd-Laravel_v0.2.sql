-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2023 a las 01:16:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autosiris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT 'Sin descripción',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Electrónicos', 'Productos hechos con componentes eléctrónicos', '2023-08-07 21:32:32', '2023-09-10 21:59:47'),
(5, 'Dulces', 'Dulces de todo tipo', '2023-08-07 21:32:38', '2023-09-10 21:59:30'),
(8, 'Papel', 'Productos hechos con papel', '2023-09-05 02:04:55', '2023-09-10 21:59:24'),
(12, 'Cartón', 'Productos hechos con cartón', '2023-09-10 20:25:17', '2023-09-10 21:59:19'),
(13, 'Borradores', 'Borradores de nata, miga de pan, etc.', '2023-09-10 21:56:38', '2023-10-01 19:06:10'),
(14, 'Escritura', 'Lapiceros, lápices, micropuntas', '2023-09-10 21:58:54', '2023-09-10 21:58:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factures`
--

CREATE TABLE `factures` (
  `facture_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `initial_stock` int(11) NOT NULL DEFAULT 0,
  `output` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inventories`
--

INSERT INTO `inventories` (`id`, `product_id`, `initial_stock`, `output`, `stock`, `created_at`, `updated_at`) VALUES
(8, 10, 20, 12, 8, '2023-09-10 05:38:21', '2023-09-10 05:38:21'),
(10, 13, 5, 4, 1, '2023-09-15 03:29:33', '2023-09-15 03:29:33'),
(13, 12, 34, 11, 23, '2023-09-15 08:31:23', '2023-09-15 08:31:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_20_125523_categories', 1),
(7, '2023_07_20_125907_products', 1),
(9, '2023_07_22_114030_inventories', 1),
(19, '2023_07_20_171133_roles', 5),
(20, '2023_09_07_024639_factures', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('elianibarra77@gmail.com', '$2y$10$6ny8.9pY.wQyVC8aUybcZuZGeqleWBnJfZ993EjKiIaoPNFdXrow6', '2023-09-09 06:56:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL DEFAULT 'Sin código',
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `categorie_id`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(10, 'Cuaderno Académico Argollado 80 hojas', 'CAA80', 8, 'Cuaderno Académico Argollado 80 hojas anillado con hojas cuadriculadas y stickers', 'products_images/YzbJlIuejJN8bpgaOCDpkSGLBUSUPboDsiCFogmp.webp', 12500, '2023-09-10 05:36:19', '2023-10-01 19:19:41'),
(12, 'Caja Bombombum Rojos 12 unidades', 'CBR12', 5, 'Caja Bombombum Rojos 12 unidades Colombina - 228 gramos', 'products_images/Ce7TdoFjDTGhzJeMdGAyNUXriQIHGbc1bINvSKMi.png', 5400, '2023-09-10 06:04:24', '2023-09-10 06:04:24'),
(13, 'Calculadora Científica Casio bk-120', 'CCC120', 4, 'Calculadora Científica Casio modelo bk-120', 'products_images/XzSYpMzlecNnD3GDokhT1XuoHzQKV4GP4HWGP4CK.jpg', 65500, '2023-09-10 06:04:50', '2023-09-10 06:04:50'),
(25, 'Caja Borradores de Nata Pelikan', 'BNP06', 13, 'Caja Borradores de Nata Pelikan 6 unidades negros', 'products_images/hO7jBjpYRv7RMcjQe7jfkclgKzToWumkulflEXCk.jpg', 4500, '2023-09-10 21:57:12', '2023-09-10 21:57:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL DEFAULT 'Este rol no tiene una descripción',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cliente', 'Cliente común que compra en el negocio físico', '2023-09-09 05:14:24', '2023-10-02 02:53:11'),
(2, 'Colegio Adventista del Norte', 'Colegio Adventista - procesos, impresiones, compras grandes, etc', '2023-09-10 06:03:36', '2023-09-15 02:41:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Elian Ibarra', 'elianibarra77@gmail.com', NULL, '$2y$10$e7m.Uv7QTR74gQuFTVMwfeB3ukPPK/mOyZl7l2uZSDjw6C0KcBh.G', NULL, '2023-08-04 07:56:47', '2023-08-04 07:56:47'),
(2, 'Elian', 'elianibarra@gmail.com', NULL, '$2y$10$KESEl0kVlQmOMQgjgwohAOTqnRwaJlXnSHUdeP99tLt/0BnVw/8e2', 'lm31eazMQP1n9fJ1dcQq4aloBf9c5JryHNvhZC9lLzy8J3yUGjSUGFg5VccE', '2023-09-02 07:13:29', '2023-09-02 07:13:29'),
(3, 'Elian', 'elian@gmail.com', NULL, '$2y$10$PsqyDffsfSKUaSprBZpPbOxRaMl0ZTaa0rIN9XJqNtXCSH52uQUIC', NULL, '2023-09-11 04:20:20', '2023-09-11 04:20:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`facture_id`),
  ADD KEY `factures_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventories_product_id_foreign` (`product_id`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categorie_id_foreign` (`categorie_id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `factures`
--
ALTER TABLE `factures`
  MODIFY `facture_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
