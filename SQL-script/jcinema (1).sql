-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2020 a las 02:49:06
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jcinema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carteleras`
--

CREATE TABLE `carteleras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelicula_id` bigint(20) UNSIGNED NOT NULL,
  `cine_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_inicio` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carteleras`
--

INSERT INTO `carteleras` (`id`, `pelicula_id`, `cine_id`, `fecha_inicio`, `fecha_fin`, `created_at`, `updated_at`) VALUES
(3, 6, 21, '2019-12-05 15:00:00', '2019-12-31 05:00:00', NULL, NULL),
(4, 9, 2, '2019-12-04 18:00:00', '2019-12-21 15:00:00', NULL, NULL),
(6, 9, 21, '2019-12-11 05:00:00', '2019-12-13 05:00:00', '2019-12-26 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cines`
--

CREATE TABLE `cines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cines`
--

INSERT INTO `cines` (`id`, `nombre`, `sede`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Cinemark', 'Jockey Plaza', 'Cinemark Jockey Plaza, Centro Comercial Jockey Plaza, Av. Javier Prado Este 4200, Santiago de Surco 15023', NULL, NULL),
(2, 'Cinemark', 'Cinemark Angamos', 'Cinemark Angamos, Av. Angamos 1803, Surquillo 15036', NULL, NULL),
(3, 'Cinemark', 'Cinemark Mega Plaza', 'Cinemark Megaplaza, Av Alfredo Mendiola 3698, Independencia 15311', NULL, NULL),
(4, 'Cineplanet', 'Cineplanet Puruchuco', 'Vista Alegre, Ate 15494', NULL, NULL),
(5, 'Cineplanet', 'Cineplanet Santa Clara', 'Av. Nicolás Ayllón, Ate 15861', NULL, NULL),
(6, 'Cineplanet', 'Cineplanet La Molina', 'Calle las Caobas, Lima 15024', NULL, NULL),
(7, 'Cineplanet', 'Cineplanet San Borja', 'Jr. Ucello s/n, Cercado de Lima 15036', NULL, NULL),
(8, 'Cineplanet', 'Cineplanet Centro', 'Jirón de la Unión 819, Cercado de Lima 15001', NULL, NULL),
(9, 'Cineplanet', 'Cineplanet Cívico', 'Real Plaza, Av Inca Garcilaso de la Vega 1007, Cercado de Lima 15001', NULL, NULL),
(10, 'Cineplanet', 'Cineplanet Primavera', 'Av. Angamos 2686, Cercado de Lima 15036', NULL, NULL),
(11, 'Cineplanet', 'Cineplanet Mall del Sur', 'Calle las Camelias 277, Lima 15801', NULL, NULL),
(12, 'Cineplanet', 'Cineplanet Risso', 'Av. Arequipa 2250, Lince 15046', NULL, NULL),
(13, 'Cineplanet', 'Cineplanet Brasil', 'Av. Brasil 714, Lima 15083', NULL, NULL),
(14, 'Cineplanet', 'Cineplanet Villa María del Tri', 'Av Pachacutec 3721, Lima 15809', NULL, NULL),
(15, 'Cineplanet', 'Cineplanet Villa María del Tri', 'Av Pachacutec 3721, Lima 15809', NULL, NULL),
(16, 'Cineplanet', 'Cineplanet Guardia Civil', 'Av. Guardia Civil Sur 937, Lima 15056', NULL, NULL),
(17, 'Cineplanet', 'Cineplanet Alcázar', 'Av. Sta. Cruz 814, Lima 15073', NULL, NULL),
(18, 'Cineplanet', 'Cineplanet Salaverry', 'Av. Gral. Salaverry 2370, Lima 15076', NULL, NULL),
(20, 'Cineplanet', 'Cineplanet San Miguel', 'Blvd. Plaza Mantaro 356, Lima 15088', NULL, NULL),
(21, 'Cinestar', 'Cinestar', 'Av. Aviación 2400, San Borja 15037', NULL, NULL),
(22, 'Cinestar', 'Cinestar', 'Jirón de la Unión 798, Cercado de Lima 15001', NULL, NULL),
(23, 'Cinestar', 'Cinestar Benavides', 'Av. Alfredo Benavides 4981, Santiago de Surco 15039', NULL, NULL),
(24, 'Cinestar', 'Cinestar Sur', 'Av. los Héroes 240, San Juan de Miraflores 15801', NULL, NULL),
(25, 'Cinépolis', 'Cinépolis Santa Anita', 'Av. Nicolás Ayllón, Santa Anita 15022', NULL, NULL),
(26, 'Cinépolis', 'Cinépolis Centro Lima Norte', 'Plaza Norte, Av. Tomas Valle, Independencia 15311', NULL, NULL),
(27, 'Cinépolis', 'Cinépolis Santa Catalina', 'Carlos Villarán 500, La Victoria 15034', NULL, NULL),
(28, 'Cinerama', 'Cinerama El Pacífico', 'Edificio El Pacífico, Av. José Pardo 121, Miraflores Lima 18', NULL, NULL),
(29, 'Cinerama', 'Cinerama', 'Centro Comercial Minka, Av Argentina 3093, Callao 07001', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacions`
--

CREATE TABLE `clasificacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clasificacions`
--

INSERT INTO `clasificacions` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'G', NULL, NULL),
(2, 'PG', NULL, NULL),
(3, '14A', NULL, NULL),
(4, '18A', NULL, NULL),
(5, 'R', NULL, NULL),
(6, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcions`
--

CREATE TABLE `funcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora` datetime NOT NULL,
  `cartelera_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_11_10_074233_create_notas_table', 1),
(41, '2019_11_22_031055_create_peliculas_table', 1),
(42, '2019_11_22_034210_create_categorias_table', 1),
(43, '2019_11_22_034402_create_carteleras_table', 1),
(44, '2019_11_22_043353_create_clasificacions_table', 1),
(45, '2019_11_22_045035_create_cines_table', 1),
(46, '2019_11_22_053829_create_funcions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reparto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_p` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `duracion`, `descripcion`, `fecha`, `subtitulo`, `director`, `reparto`, `imagen_p`, `trailer`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Joker', '2h 2m', 'La pasión de Arthur Fleck, un hombre ignorado por la sociedad, es hacer reír a la gente. Sin embargo, una serie de trágicos sucesos harán que su visión del mundo se distorsione considerablemente convirtiéndolo en un brillante criminal.', '2002-10-19 05:00:00', 'no', 'Todd Phillips', '', 'img1.jpg', 'https://www.youtube.com/embed/zAGVQLHvwOY', 'cartelera', NULL, NULL),
(2, 'It 2', '2h 50m', 'En el misterioso pueblo de Derry, un malvado payaso llamado Pennywise vuelve 27 años después para atormentar a los ya adultos miembros del Club de los Perdedores, que ahora están más alejados unos de otros.', '2026-08-19 05:00:00', 'no', 'Andrés Muschietti', '', 'img2.jpg', 'https://www.youtube.com/embed/hZeFeYSmBcg', 'cartelera', NULL, NULL),
(3, 'Angry Birds 2', '1h 37m', 'Secuela de la película \"Angry Birds\" en la que Red, Chuck, Bomb y el resto de sus amigos con plumas son abordados por un cerdo verde que les pide que se unan para luchar contra una amenaza común. Las aves agresivas de una isla cubierta de hielo planean usar un arma casera para destruir el modo de vida de las aves y los cerdos. El grupo deberá infiltrarse en la isla y detener el dispositivo.', '2002-08-19 05:00:00', 'si', 'Thurop Van Orman', '', 'img3.jpg', 'https://www.youtube.com/embed/ACRvL49Thb4', 'cartelera', NULL, NULL),
(4, 'Aladdín', '2h 8m', 'Aladdin es un ladronzuelo que se enamora de la hija del Sultán, la princesa Jasmine. Para poder conquistarla aceptará un desafío de Jafar. Aladdín tendrá que entrar en una cueva en mitad del desierto y conseguir una lámpara mágica que contiene al Genio que será el encargado de concederle todos sus deseos.', '2008-05-19 05:00:00', 'no', 'Guy Ritchie', '', 'img4.jpg', 'https://www.youtube.com/embed/foyufD52aog', 'cartelera', NULL, NULL),
(5, 'Malefica', '1h 58m', 'Secuela de \"Maléfica\" que cuenta la vida de Maléfica y Aurora, así como las alianzas que formarán para sobrevivir a las amenazas del mágico mundo en el que habitan.', '2016-10-19 05:00:00', 'no', 'Joachim Rønning', '', 'img5.jpg', 'https://www.youtube.com/embed/n0OFH4xpPr4', 'cartelera', NULL, NULL),
(6, 'Toy Story 4', '1h 40m', 'Woody siempre ha tenido claro cuál es su labor en el mundo: cuidar a su dueño, ya sea Andy o Bonnie. Sin embargo, Woody descubrirá lo grande que puede ser el mundo para un juguete cuando el juguete Forky se convierta en su nuevo compañero de habitación. Los juguetes se embarcarán en una aventura que no olvidarán jamás durante un viaje por carretera.', '2011-06-19 05:00:00', 'si', 'Josh Cooley', '', 'img6.jpg', 'https://www.youtube.com/embed/wmiIUN-7qhE', 'cartelera', NULL, NULL),
(7, 'Los locos Addams', '1h 45m', 'En esta animación, la macabra familia Addams se está preparando para una fiesta brillante mientras espera la llegada de otros miembros del clan familiar.', '2010-10-19 05:00:00', 'si', 'Conrad Vernon, Greg Tiernan\r\n', '', 'img7.jpg', 'https://www.youtube.com/embed/gTbD62dYMQA', 'cartelera', NULL, NULL),
(8, 'Terminator', '2h 8m', 'Sarah Connor une todas sus fuerzas con una mujer cyborg para proteger a una joven de un extremadamente poderoso y nuevo Terminator.', '2023-10-19 05:00:00', 'no', 'Tim Miller', '', 'img8.jpg', 'https://www.youtube.com/embed/oxy8udgWRmo', 'cartelera', NULL, NULL),
(9, 'Doctor Sueño', '2h 32m', 'Seguimos a Danny Torrace, traumatizado y con problemas de ira y alcoholismo. Estos problemas reflejan los de su propio padre, que cuando tiene sus habilidades psíquicas de vuelta, contacta con una niña, Abra Stone, a la que debe de rescatar de un grupo de viajeros que se alimentan de niños.', '2030-10-19 05:00:00', 'no', 'Mike Flanagan', '', 'img2-7.jpg', 'https://www.youtube.com/embed/ohBLtn5FI0E', 'estreno', NULL, NULL),
(10, 'Frozen 2', '1h 43m', 'La reina Elsa, su hermana Anna, Kristoff, Olaf y Sven se embarcan en un nuevo viaje al interior del bosque para descubrir la verdad sobre un antiguo misterio de su reino.', '2002-01-19 05:00:00', 'no', 'Jennifer Lee, Chris Buck', '', 'img2-1.jpg', 'https://www.youtube.com/embed/Zi4LMpSDccc', 'estreno', NULL, NULL),
(11, 'Zombieland 2', '1h 39m', 'Los cazadores de zombis viajan desde la Casa Blanca hasta el corazón de los Estados Unidos, donde tendrán que defenderse de nuevas clases de muertos vivientes que han evolucionado. Mientras intentan salvar el mundo, los miembros de la pandilla también tendrán que aprender a convivir.', '2017-10-19 05:00:00', 'no', 'Ruben Fleischer', '', 'img2-2.jpg', 'https://www.youtube.com/embed/ZlW9yhUKlkQ', 'estreno', NULL, NULL),
(12, 'Star Wars: Episodio IX', '2h 35m', 'La Resistencia sobreviviente se enfrenta a la Primera Orden, y Rey, Finn, Poe y el resto de los héroes encararán nuevos retos y una batalla final con la sabiduría de las generaciones anteriores.', '2001-12-19 05:00:00', 'no', 'J. J. Abrams', '', 'img2-3.jpg', 'https://www.youtube.com/embed/82R2u7OuGOA', 'estreno', NULL, NULL),
(13, 'Dolittle', '', 'El Dr. John Dolittle vive solo detrás de los muros de su exuberante mansión en la Inglaterra del siglo XIX. Su única compañía proviene de una variedad de animales exóticos con los que habla a diario. Pero cuando la joven reina Victoria se enferma gravemente, el médico excéntrico y sus amigos peludos se embarcan en una aventura épica en una isla mítica para encontrar la cura.', '2009-01-20 05:00:00', 'no', 'Stephen Gaghan', '', 'img2-4.jpg', 'https://www.youtube.com/embed/FEf412bSPLs', 'estreno', NULL, NULL),
(14, 'Birds of Prey', '', 'Después de separarse de Joker, Harley Quinn y otras tres heroínas, Canario Negro, Cazadora y Renée Montoya, unen sus fuerzas para salvar a una niña del malvado rey del crimen Máscara Negra.', '2005-02-20 05:00:00', 'no', 'Cathy Yan', '', 'img2-5.jpg', 'https://www.youtube.com/embed/kGM4uYZzfu0', 'estreno', NULL, NULL),
(15, 'Wonder Woman 2', '', 'Diana Prince, conocida como Wonder Woman se enfrenta a Cheetah, una villana que posee fuerza y agilidad sobrehumanas.', '2004-06-20 05:00:00', 'no', 'Patty Jenkins\r\n', '', 'img2-6.jpg', 'https://www.youtube.com/embed/1Q8fG0TtVAY', 'estreno', NULL, NULL),
(16, 'Dedicada a mi ex', '1h 34m', 'Dedicada a mi Ex es una película ecuatoriana dirigida por Jorge Ulloa y protagonizada por Raúl Santana y Nataly Valencia.​ En la película aparecen personalidades de YouTube como Luisito Comunica, Yoseline Hoffman, Kika Nieto y Fernanfloo.', '2007-11-19 05:00:00', 'si', 'Jorge Ulloa', '', 'img2-8.jpg', 'https://www.youtube.com/embed/JOZPRAm99-A', 'estreno', NULL, NULL),
(31, 'yesterday', NULL, 'Jack Malik es un cantautor británico que sueña con la fama y cuenta con el apoyo incondicional de su amiga Ellie. Tras un accidente, Jack se da cuenta que es la única persona que puede recordar a los Beatles.', '2019-10-31 05:00:00', 'no', 'martinez', NULL, '1575839079yesterday.jpg', 'https://www.youtube.com/embed/c-EdfpIRgQU', 'estreno', '2019-12-09 02:04:39', '2019-12-09 02:04:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jmartinez', 'jmartinez@hotmail.com', NULL, '$2y$10$lH4EliYCkThfnVp.xQgXRuwKXn0YDxrfDCodiJiBZTy5ABLh39lem', NULL, '2019-12-03 09:19:38', '2019-12-03 09:19:38'),
(2, 'josue', 'lincoln@hotmail.com', NULL, '$2y$10$f2KMB9lZ9yVNl7VNr7pase7zKrCSDU89PJ/zFvYUIhuLc.BHRmGcO', NULL, '2019-12-05 01:19:27', '2019-12-05 01:19:27'),
(3, 'gustavo', 'gustavo@gmail.com', NULL, '$2y$10$WEcjrIxR5jrdRbPV3OMKiOHumlbcMfViiLJEimRmW9wy6b9pAyFE.', NULL, '2019-12-06 23:17:20', '2019-12-06 23:17:20'),
(4, 'jaime', 'jaime@gmail.com', NULL, '$2y$10$U9IptaryI9YeoRSglXwEp.Fa6UhKygsczfDbk6IHJv4Xl.VEV56uG', NULL, '2019-12-06 23:40:39', '2019-12-06 23:40:39'),
(5, 'Ronald', 'ronald@gmail.com', NULL, '$2y$10$xU1pP4E8Uq8530X04bmBWO8cjRooFGxQUPIr80Yg0oYEO6Z.0jquu', NULL, '2019-12-07 00:38:31', '2019-12-07 00:38:31'),
(6, 'cesar', 'cesar@gmail.com', NULL, '$2y$10$VuxO9kQNOz6eBSZy8NtjRemN4PCiZ2KNS9UMHJDuEwBbaG4EgEkGm', NULL, '2019-12-07 09:05:52', '2019-12-07 09:05:52'),
(7, 'Chung', 'conejito@hotmail.com', NULL, '$2y$10$VJ6IWxS.ZNU8t.burPpMb.2jSmNrihbjWs0TiWkQw1NcajIlegjua', NULL, '2019-12-07 23:42:27', '2019-12-07 23:42:27'),
(8, 'carlos', 'carlos@hotmail.com', NULL, '$2y$10$nM7R8b.jlQXzyNXFBukjmuJl.fgTDI2V7eWPbWy4vBqfXhbunHvKi', NULL, '2019-12-09 02:06:10', '2019-12-09 02:06:10'),
(9, 'Nataly', 'nataly@gmail.com', NULL, '$2y$10$IYfhvH45wnhb1WoEzencn.Lemu5aSTxdHxckG0loP8qe.el6pSQsK', NULL, '2019-12-20 23:37:35', '2019-12-20 23:37:35'),
(10, 'joshua', 'joshua@gmail.com', NULL, '$2y$10$WaTQMx8BUNvyRZtgd0R.JO9j5WRJHCsfbmvE.syqUQN1n5NWjG93u', NULL, '2020-01-08 23:04:59', '2020-01-08 23:04:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carteleras`
--
ALTER TABLE `carteleras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_pelicula_cine` (`pelicula_id`,`cine_id`),
  ADD KEY `FK_id_pelicula` (`pelicula_id`) USING BTREE,
  ADD KEY `FK_id_cine` (`cine_id`) USING BTREE;

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cines`
--
ALTER TABLE `cines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasificacions`
--
ALTER TABLE `clasificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funcions`
--
ALTER TABLE `funcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_cartelera` (`cartelera_id`) USING BTREE;

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
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
-- AUTO_INCREMENT de la tabla `carteleras`
--
ALTER TABLE `carteleras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cines`
--
ALTER TABLE `cines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `clasificacions`
--
ALTER TABLE `clasificacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `funcions`
--
ALTER TABLE `funcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carteleras`
--
ALTER TABLE `carteleras`
  ADD CONSTRAINT `carteleras_ibfk_1` FOREIGN KEY (`pelicula_id`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carteleras_ibfk_2` FOREIGN KEY (`cine_id`) REFERENCES `cines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcions`
--
ALTER TABLE `funcions`
  ADD CONSTRAINT `funcions_ibfk_1` FOREIGN KEY (`cartelera_id`) REFERENCES `carteleras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
