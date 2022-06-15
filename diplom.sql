-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2022 г., 14:39
-- Версия сервера: 8.0.19
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Mr.groomy -  доступное и качественное решение для владельцев собак и кошек, живущих в современном ритме и не желающих тратить много времени и сил для ухода за любимой собакой или кошкой.\r\nМы работаем только с профессиональной косметикой и профессиональным оборудованием.\r\nМы экономим Ваше время: прием ведется по предварительной записи - отсутствие очередей, удобная парковка и часы приема.\r\nМы любим животных и знаем все об их повадках и настроении. Мы умеем найти подход к самым сложным и характерным представителям пород.\r\n* Никаких успокоительных средств – только внимание, ласка и ловкость.\r\n* Никаких очередей – четкое соблюдение оговоренного времени.\r\n* Система видеонаблюдения – весь процесс груминга Вы можете увидеть сами.', NULL, '2022-05-27 14:15:55');

-- --------------------------------------------------------

--
-- Структура таблицы `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `date1`, `date2`, `rooms`, `number`, `created_at`, `updated_at`) VALUES
(14, 'Анастасия Геннадьевна Бухтоярова', '2022-05-14', '2022-05-21', '«Стандарт» для кошек,«Комфорт» для кошек', '+7 (919) 258-95-25', '2022-05-31 11:49:30', '2022-05-31 11:49:30');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_work` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `number`, `email`, `adres`, `time_work`, `created_at`, `updated_at`) VALUES
(1, '+7 990 256 21 00', 'mr.groomy@mail.ru', 'г. Челябинск, улица Ленина, д.53', 'ПН-ВС с 9:00 до 21:00', NULL, '2022-03-22 04:59:24');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'img/galery/da-emp-1.jpg', NULL, '2022-04-08 00:47:14'),
(2, 'img/galery/2.jpg', NULL, NULL),
(3, 'img/galery/3.jpg', NULL, NULL),
(4, 'img/galery/8.jpg', NULL, NULL),
(5, 'img/galery/6.jpg', NULL, NULL),
(6, 'img/galery/7.jpg', NULL, NULL),
(7, 'img/galery/4.jpg', NULL, NULL),
(8, 'img/galery/9.jpg', NULL, NULL),
(9, 'img/galery/10.jpg', NULL, NULL),
(10, 'img/galery/11.jpg', NULL, NULL),
(11, 'img/galery/12.jpg', NULL, NULL),
(12, 'img/galery/13.jpg', NULL, NULL),
(13, 'img/galery/14.jpg', NULL, NULL),
(14, 'img/galery/15.jpg', NULL, NULL),
(15, 'img/galery/16.jpg', NULL, NULL),
(16, 'img/galery/5.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `kind_animals`
--

CREATE TABLE `kind_animals` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kind_animals`
--

INSERT INTO `kind_animals` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Собака до 10кг', NULL, NULL),
(2, 'Собака 10-30 кг', NULL, NULL),
(3, 'Собака от 30кг', NULL, NULL),
(4, 'Кошка длинношёрстная', NULL, NULL),
(5, 'Кошка короткошёрстная', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`id`, `name`, `time_work`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Денис', 'ПН-СР и ВС', 'img/worker/1.png', NULL, NULL),
(2, 'Марина', 'ПН-СР и ВС', 'img/worker/3.png', NULL, NULL),
(3, 'Надежда', 'ПН-СР', 'img/worker/2.png', NULL, NULL),
(4, 'Ксения', 'ЧТ-ВС', 'img/worker/4.png', NULL, NULL),
(5, 'Даниил', 'ЧТ-СБ', 'img/worker/9.png', NULL, NULL),
(6, 'Дмитрий', 'ЧТ-СБ', 'img/worker/8.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_13_163041_create_services_cats_table', 2),
(6, '2022_03_13_163118_create_services_dog_shorts_table', 2),
(7, '2022_03_13_163148_create_services_dog_longs_table', 3),
(8, '2022_03_13_163224_create_abouts_table', 3),
(9, '2022_03_13_163241_create_contacts_table', 3),
(10, '2022_03_13_163259_create_stocks_table', 3),
(11, '2022_03_13_163312_create_recs_table', 3),
(12, '2022_03_13_163325_create_admins_table', 3),
(13, '2022_03_16_151922_create_galleries_table', 4),
(14, '2022_04_25_152515_create_kind_animals_table', 5),
(15, '2022_04_25_152921_create_services_dogs_table', 5),
(16, '2022_05_22_143918_create_masters_table', 6),
(17, '2022_05_29_111708_create_rooms_table', 7),
(18, '2022_05_29_115733_create_rooms_table', 8),
(19, '2022_05_31_144259_create_bookings_table', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `recs`
--

CREATE TABLE `recs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int DEFAULT NULL,
  `breed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `recs`
--

INSERT INTO `recs` (`id`, `name`, `weight`, `breed`, `date`, `services`, `number`, `created_at`, `updated_at`) VALUES
(115, 'Анастасия', 41, 'Собака от 30кг', '2022-06-04', 'Гигиеническая стрижка,Креативная стрижка', '+7 (990) 256-21-00', '2022-05-27 14:08:31', '2022-05-27 14:08:31'),
(116, 'Анастасия', 39, 'Кошка длинношёрстная', '2022-06-23', 'Стрижка,Стрижка + купание', '+7 (995) 426-58', '2022-06-04 06:04:41', '2022-06-04 06:04:41');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `description`, `description2`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(1, '«Стандарт» для кошек', 'Уютный одноместный номер со стеклянной полкой общей площадью 2 кв.м. В этом номере Ваш питомец будет чувствовать себя комфортно и защищенно.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВсегда чистая фильтрованная питьевая вода.', 'img/hotel/room/стандартКошек.jpg', 500, NULL, NULL),
(2, '«Комфорт» для кошек', 'Одноместный номер с окном и полкой общей площадью 2 кв.м. Всем известно, что кошки очень любят смотреть в окно. Этот номер даёт возможность постоянно любоваться природой и наблюдать за окружающим миром.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВсегда чистая фильтрованная питьевая вода.', 'img/hotel/room/комфортКошек.jpg', 650, NULL, NULL),
(3, '«Люкс» для кошек', 'Номер Люкс является самым роскошным в нашей гостинице, т.к. он значительно превосходит обычный стандартный номер в размерах. Его общая площадь составляет 3,7 кв.м. Номер оснащён двумя стеклянными полками, на которых очень любят лежать кошки.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nВозможность подселения кошки из одной семьи.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВсегда чистая фильтрованная питьевая вода.\r\n', 'img/hotel/room/люксКошек.jpg', 1100, NULL, NULL),
(4, '«Стандарт» для собаки', 'Однокомнатный номер общей площадью 2 кв.м. Это уютный дом для Вашей собаки на то время, пока вы находитесь вдали от нее.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВыгул 3 раза в день.\r\nМытьё лап после прогулки.\r\nВсегда чистая фильтрованная питьевая вода.', 'img/hotel/room/стандартСобак.jpg', 700, NULL, NULL),
(5, '«Комфорт» для собак', 'Однокомнатный номер общей площадью 2 кв.м. Через окно у Вашего питомца появится возможность познавать мир, наблюдать за происходящим на улице и радоваться солнышку.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВыгул 3 раза в день.\r\nМытьё лап после прогулки.\r\nВсегда чистая фильтрованная питьевая вода.', 'img/hotel/room/комфортСобак.jpg', 850, NULL, NULL),
(6, '«Люкс» для собак', 'Двухкомнатный номер общей площадью около 4 кв.м. Если в Вашей семье две собаки - этот номер даст Вам возможность не разлучать Ваших любимцев на время проживания в гостинице, тем самым практически избежать периода адаптации питомца к новому месту.', 'Индивидуальное круглосуточное видеонаблюдение на экране Вашего смартфона, компьютера или планшета.\r\nСистема очистки воздуха.\r\nИндивидуальный подход к каждому животному.\r\nСоблюдение привычного ритма жизни Вашего питомца.\r\nЕжедневные игры в общей зоне с зооняней.\r\nВыгул 3 раза в день.\r\nМытьё лап после прогулки.\r\nВсегда чистая фильтрованная питьевая вода.', 'img/hotel/room/люксСобак.jpg', 1500, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services_cats`
--

CREATE TABLE `services_cats` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_short` int NOT NULL,
  `price_long` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services_cats`
--

INSERT INTO `services_cats` (`id`, `title`, `price_short`, `price_long`, `created_at`, `updated_at`) VALUES
(1, 'Подрезание когтей, чистка ушей', 200, 200, NULL, '2022-05-27 13:34:25'),
(2, 'Наклейка антицарапок на 4 лапы', 300, 300, NULL, NULL),
(3, 'Стрижка', 1000, 1600, NULL, NULL),
(4, 'Стрижка + купание', 1900, 2700, NULL, NULL),
(5, 'Купание', 900, 1600, NULL, NULL),
(6, 'Вычёсывание', 800, 900, NULL, NULL),
(7, 'Чистка зубов', 500, 500, NULL, NULL),
(8, 'Комплекс *', 2300, 2900, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services_dogs`
--

CREATE TABLE `services_dogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price10` int NOT NULL,
  `price10_30` int NOT NULL,
  `price30` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services_dogs`
--

INSERT INTO `services_dogs` (`id`, `title`, `price10`, `price10_30`, `price30`, `created_at`, `updated_at`) VALUES
(1, 'Подрезание когтей, чистка ушей', 700, 700, 700, NULL, NULL),
(2, 'Чистка зубов', 800, 800, 900, NULL, NULL),
(3, 'Купание, вычёсывание', 2000, 2400, 2800, NULL, NULL),
(5, 'Гигиеническая стрижка', 2800, 3200, 3800, NULL, NULL),
(6, 'Креативная стрижка', 3400, 3800, 4200, NULL, NULL),
(7, 'Комплекс «На выставку» ', 7500, 8600, 8900, NULL, NULL),
(8, 'Комплекс «Домашний»', 7000, 8100, 8700, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stocks`
--

INSERT INTO `stocks` (`id`, `title`, `text`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Для щенков', 'Скидка 30% на комплекс для щенков до 6 месяцев\r\nВ комплекс входит: гигиеническая стрижка, стрижка когтей и чистка ушей.\r\n*акция действует 01.10.2022', 'img/stock/щенок2.jpg', NULL, NULL),
(2, 'Для кошек', 'Скидка 20% каждый понедельник и среду для кошек.\r\nВ комплекс входит: стрижка когтей, чистка ушей и зубов.\r\n*акция действует до 01.06.2022', 'img/stock/кошка.jpg', NULL, NULL),
(3, 'Для собак', 'Скидка 5% каждый будний день до 13:00 на стрижку крупных пород.\r\n*акция распространяется на породы от 50кг\r\n*акция действует бессрочно', 'img/stock/большая.jpg', NULL, NULL),
(4, 'Для кошек', 'Скидка 8% на каждую 5 стрижку любой кошки.\r\n*акция действует бессрочно\r\n*скидка распространяется только на стрижку', 'img/stock/мейнкун.jpg', NULL, NULL),
(10, 'Акция тест', 'Акция тест', 'img/stock/кошка2.jpg', '2022-06-04 06:33:08', '2022-06-04 06:33:08');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kind_animals`
--
ALTER TABLE `kind_animals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `recs`
--
ALTER TABLE `recs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_cats`
--
ALTER TABLE `services_cats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_dogs`
--
ALTER TABLE `services_dogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `kind_animals`
--
ALTER TABLE `kind_animals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `recs`
--
ALTER TABLE `recs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `services_cats`
--
ALTER TABLE `services_cats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `services_dogs`
--
ALTER TABLE `services_dogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
