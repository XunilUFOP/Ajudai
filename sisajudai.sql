-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2016 at 08:35 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisajudai`
--
CREATE DATABASE IF NOT EXISTS `sisajudai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sisajudai`;

CREATE USER 'sisajudai'@'localhost' IDENTIFIED BY '123456';

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Sistemas de Informação', '2016-03-06 00:03:46', '2016-03-07 17:41:16'),
(2, 'Engenharia de Produção', '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(3, 'Engenharia de Computação', '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(4, 'Engenharia Elétrica', '2016-03-06 00:03:46', '2016-03-06 00:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_05_001720_create_userType', 1),
('2016_03_05_001721_create_categories', 1),
('2016_03_05_001722_create_users', 1),
('2016_03_05_001723_create_post', 1),
('2016_03_05_001724_create_reply', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `closed` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `body`, `tags`, `closed`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Qui et qui suscipit expedita.', 'Et dolorem impedit quo praesentium est quis vero aut accusantium sapiente facere voluptatem voluptas vel quibusdam in dolore.', 'Linguagens', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(2, 2, 3, 'A est velit ipsum excepturi quae nihil.', 'Reiciendis dicta quam quidem natus explicabo aut iure ut quae.', 'Prog', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(3, 7, 4, 'Corporis quas quo et iusto unde.', 'Vel iusto minima modi magni soluta molestias nam quaerat hic repellendus recusandae quia cum reprehenderit architecto minus.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(4, 4, 4, 'Et consequatur qui et dignissimos.', 'Sint corrupti ea quos ea consequatur magni eos similique laudantium optio est sit non voluptatem.', 'Linguagens', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(5, 1, 1, 'Aut dicta eaque neque molestiae.', 'Eum facilis minus aliquam delectus repellat rerum eaque cumque ipsum minus repellat id fuga ut praesentium totam molestiae.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(6, 9, 2, 'Laboriosam minima natus aut nobis vero eum.', 'Nobis aut corrupti incidunt iusto omnis quo dolorem et quos aliquam at eligendi ratione qui.', 'Linguagens', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(7, 3, 4, 'Iste ut eum qui aut rerum.', 'In eveniet velit consectetur aperiam temporibus placeat ut fugiat voluptas quasi quas maxime qui et magnam sint et aperiam.', 'BD', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(8, 4, 1, 'Libero ducimus iusto labore quod maiores cumque qui.', 'Consequatur dolore quidem optio sed illum omnis itaque sunt qui eligendi sed doloribus vel ab deserunt harum.', 'Web', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(9, 10, 3, 'Dolores laboriosam sunt voluptate enim quam atque porro', 'Dolore recusandae veniam quisquam quo aut voluptates cumque repellendus eveniet.', 'Linguagens', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(10, 2, 3, 'Nulla magni natus reiciendis ab.', 'Ducimus sapiente aliquid aspernatur quidem perspiciatis laborum cumque provident nam corporis quaerat et a laborum saepe.', 'Prog', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(11, 5, 1, 'Dicta aut voluptas rem deleniti natus voluptatem occaec', 'Rerum necessitatibus illo neque doloribus non quod maiores ut voluptates officia et amet.', 'Maquinas', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(12, 9, 1, 'Et nihil tempore ea iste similique distinctio.', 'Blanditiis enim cum at voluptate aut quibusdam at ut et est ea nobis sit sunt aliquid explicabo facere et ut.', 'BD', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(13, 2, 2, 'Aliquid numquam voluptas aperiam suscipit consectetur.', 'Aut dolore at in consequuntur corporis vero tenetur voluptatem corporis suscipit quibusdam doloremque quia aut et.', 'Fisica', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(14, 2, 3, 'Totam nisi nihil reiciendis ducimus nemo quod rerum.', 'Molestias distinctio ad fugit amet similique odit omnis quae quo id ducimus in voluptatem.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(15, 9, 2, 'Doloremque ab eum tempora.', 'Consequuntur doloribus non delectus est in quam odit debitis quia quidem dolorem placeat dolores quis earum quam id et et adipisci.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(16, 9, 4, 'Provident occaecati ea qui temporibus nesciunt ratione.', 'Impedit molestiae maxime quaerat et vel corrupti numquam atque sed sed natus est.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(17, 12, 4, 'Impedit tempore voluptatem facere laboriosam similique ', 'Ducimus quisquam voluptatem quo fugiat voluptatem dolores voluptates qui officia atque molestiae quam doloremque molestiae.', 'Calculo', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(18, 6, 2, 'Exercitationem provident dolor ducimus consequatur eum.', 'Omnis deleniti temporibus et ea porro sunt autem cumque veniam est consequatur in odio.', 'BD', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(19, 1, 4, 'Necessitatibus asperiores corporis veritatis.', 'Quaerat recusandae in consequuntur vero commodi velit asperiores repellendus voluptatibus eum aspernatur est dignissimos consectetur voluptatem incidunt sit aut est.', 'Prog', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(20, 9, 1, 'Est ex accusantium id blanditiis ut facere.', 'Nostrum nisi nam culpa qui nesciunt et mollitia consequuntur nam et voluptas qui hic deserunt repudiandae asperiores.', 'Maquinas', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(21, 9, 4, 'Nihil reiciendis ducimus et ut dolor sit mollitia ab.', 'Aperiam laudantium vel in et aperiam eius quod distinctio est a numquam aperiam asperiores repellendus velit sint omnis aspernatur ut sunt.', 'BD', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(22, 8, 1, 'Neque sunt dolorum in repellendus aut qui.', 'Itaque quo perferendis blanditiis quia porro qui itaque ipsum culpa aspernatur.', 'Linguagens', 0, '2016-03-06 00:03:48', '2016-03-06 00:03:48'),
(23, 2, 4, 'Minus quia a consequatur facere voluptas praesentium.', 'Qui explicabo voluptates distinctio pariatur natus magnam accusantium reiciendis soluta consequatur.', 'Linguagens', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(24, 12, 1, 'Officia tempore commodi nulla molestias aut et neque re', 'Magni provident molestiae ex ea quia optio suscipit quisquam eaque harum ex ipsa.', 'IA', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(25, 10, 3, 'Modi alias assumenda odio corrupti commodi voluptatem.', 'Asperiores earum ut ut officiis maxime vitae eaque iste ipsam minima sit tenetur at est repellat fugit.', 'BD', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(26, 4, 3, 'Delectus maiores qui ipsum voluptatem.', 'Perferendis minus magni necessitatibus dolores commodi et iste sed nemo corrupti ab voluptatem blanditiis repellat vero et et unde natus molestiae.', 'Linguagens', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(27, 5, 2, 'Sint voluptatem doloremque voluptatem amet incidunt.', 'Blanditiis qui quis et officiis qui magni eum est rerum optio corporis et.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(28, 1, 3, 'Eaque eligendi omnis quo ad corrupti omnis quae.', 'Vel neque et velit unde et id dolores modi ut cupiditate.', 'Prog', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(29, 8, 2, 'Aspernatur officiis ratione ut.', 'Est rerum quis quam autem molestiae ab autem deserunt corrupti eos quo.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(30, 4, 3, 'Nemo illo vel non deleniti.', 'Molestiae id ea architecto hic consequatur qui molestiae iusto nobis et at qui ut distinctio animi esse error velit eveniet quia.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(31, 10, 2, 'Consequatur ad nostrum cupiditate alias et.', 'Velit doloremque qui modi sed voluptatibus illo neque laborum consequuntur beatae.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(32, 12, 2, 'Cum ut ratione cumque modi temporibus magnam reiciendis', 'Reprehenderit aut et laudantium illo consequuntur dignissimos nihil pariatur illo eligendi natus modi ut laborum.', 'Linguagens', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(33, 12, 2, 'Et sed numquam voluptatibus harum.', 'Nostrum nesciunt itaque qui consequatur placeat ipsa perferendis omnis odit quos cupiditate facilis at hic.', 'Calculo', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(34, 10, 4, 'In et et nostrum incidunt est.', 'Dolorem earum ducimus sunt nemo eum qui provident nostrum asperiores eum.', 'BD', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(35, 5, 2, 'Rerum in recusandae explicabo molestiae ut.', 'Consequatur placeat reprehenderit quis qui aperiam est numquam totam minima dicta voluptate molestiae expedita ipsam est quo quos quis.', 'Prog', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(36, 5, 2, 'Aut porro et quo aut consequuntur qui.', 'Et porro eos libero amet repellat consectetur voluptas quidem aliquid voluptatum necessitatibus illo aliquam placeat iste voluptate corporis amet laborum.', 'IA', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(37, 10, 2, 'Similique aliquid dolores velit commodi sed dicta iste.', 'Impedit sint provident dolor ea est incidunt natus ab deleniti nemo iusto omnis sed dolorem.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(38, 5, 3, 'Fugiat nesciunt occaecati explicabo molestias accusanti', 'Quasi culpa sit nobis autem minus earum vero excepturi quia autem sint.', 'Web', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(39, 9, 4, 'Accusamus qui neque cumque qui.', 'Dolorum voluptatem quae iure animi voluptatem nam veniam beatae fugit nobis ea aperiam adipisci.', 'Fisica', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(40, 5, 2, 'Enim asperiores ab consectetur perspiciatis minima cumq', 'Impedit labore est sunt voluptas in voluptatem saepe nemo et.', 'Calculo', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(41, 3, 2, 'Molestiae eaque nemo deleniti ut.', 'Rerum voluptas id saepe fuga ab dolorem nihil illo nam veritatis commodi quis ea in ex vel doloremque.', 'Web', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(42, 10, 1, 'Sed sint voluptas architecto maxime eaque laboriosam.', 'Accusamus sint cupiditate error iste quos nostrum et et dolores beatae dolor autem eum rem et aut sed.', 'IA', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(43, 3, 1, 'Consequatur nisi distinctio est.', 'Quasi quos et amet unde accusamus voluptates voluptatibus qui ut hic sequi nesciunt quis.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(44, 10, 1, 'Qui neque voluptatibus dignissimos tenetur ullam rerum ', 'Eos sed eaque atque dicta et et nobis similique fugit minima ipsum distinctio debitis molestiae eaque aut ea tenetur quia quia est.', 'Linguagens', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(45, 7, 2, 'Nemo laudantium esse aut dolorum nisi.', 'Ea voluptatem hic officia quo praesentium sit rerum doloribus ipsum.', 'Maquinas', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(46, 12, 1, 'Perferendis eum quae dolorum aut fuga.', 'Deleniti corrupti atque fugit dolores iste alias quia eos aliquam quis.', 'IA', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(47, 2, 2, 'Quia consectetur autem sit labore nostrum recusandae is', 'Consequatur accusantium quo dicta sit occaecati soluta illum aut ratione optio consequatur.', 'BD', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(48, 6, 1, 'Architecto voluptates et rerum earum veniam.', 'Neque nam illo ut consequatur magni voluptatem ut dicta deserunt consequuntur et similique ex aperiam corporis inventore necessitatibus est aut.', 'Fisica', 0, '2016-03-06 00:03:49', '2016-03-06 00:03:49'),
(49, 12, 1, 'Quae veritatis numquam excepturi dolore nihil.', 'Minus sit alias perferendis sed est et aut atque consequatur et ut sed et laudantium sunt atque.', 'Maquinas', 0, '2016-03-06 00:03:50', '2016-03-06 00:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `author_id`, `body`, `votes`, `created_at`, `updated_at`) VALUES
(1, 36, 8, 'Consectetur praesentium ea qui aut sunt facilis eveniet dolor sit suscipit optio deserunt nisi illum sint distinctio repellendus.', -15, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(2, 30, 9, 'Ut earum quod ullam exercitationem sequi culpa accusamus quasi culpa cum quos dignissimos consequuntur sequi quis tempore nostrum ea ipsam dolores accusantium.', -13, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(3, 2, 9, 'Illo dolorem dicta cupiditate ea consequuntur error error quasi qui ut laudantium nihil neque hic.', -1, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(4, 8, 3, 'Nemo et et ullam ut ex vitae unde deleniti eum non sequi quae natus odit eos repellendus suscipit qui provident.', 3, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(5, 3, 11, 'Rerum voluptas nisi cum esse voluptatem corporis et debitis vero earum doloremque qui aut amet quod dolorem reiciendis accusamus ut pariatur.', 12, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(6, 43, 1, 'Non sapiente deserunt ut repudiandae voluptate voluptatem voluptatem repudiandae quia.', 11, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(7, 39, 12, 'Sequi non dolorem et beatae impedit praesentium pariatur rem ab adipisci explicabo.', -6, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(8, 8, 2, 'Totam excepturi amet et sapiente aut aspernatur aut ad praesentium.', 12, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(9, 33, 2, 'Sit et illum et sed quisquam dolor aut et architecto vero minus molestias ab pariatur eaque optio.', 12, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(10, 10, 5, 'Aut praesentium impedit ut veniam quas doloremque ex ratione explicabo fuga ut molestiae.', 11, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(11, 46, 9, 'Minus incidunt repudiandae et architecto eos animi similique omnis et facilis dolore nesciunt sunt amet repudiandae et.', -15, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(12, 39, 2, 'Aliquid vero quia officia voluptatem eligendi adipisci doloremque sapiente quia est.', 5, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(13, 39, 6, 'Soluta quas voluptatem mollitia et enim provident voluptas quia dolorum impedit quisquam dolorem asperiores consequatur aut quis ratione enim nisi voluptatibus.', -2, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(14, 8, 11, 'Vel omnis distinctio quibusdam aut qui qui quod eligendi omnis sed enim tempore.', -3, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(15, 32, 7, 'Fuga ratione reiciendis est placeat tempore repudiandae sed qui officiis odit sit voluptatem voluptas non placeat officia laborum quia voluptas.', -9, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(16, 23, 7, 'Magnam dolorem laudantium doloribus quam ut blanditiis sed dolorum et totam qui harum accusamus quia.', 10, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(17, 5, 12, 'Laboriosam et perferendis sint odit non alias molestias asperiores veniam sunt et incidunt.', 3, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(18, 10, 9, 'Ut quo quod excepturi nesciunt repudiandae quia facere sit fugiat quas consequatur commodi magni iusto.', -10, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(19, 46, 9, 'Culpa alias ut odio nostrum odit quaerat voluptatibus dicta ad rerum fugiat qui.', -7, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(20, 28, 1, 'Illo reiciendis sed quo et in odio consequatur quisquam recusandae molestias magnam quis.', 6, '2016-03-06 00:03:50', '2016-03-07 21:00:45'),
(21, 16, 6, 'Numquam doloribus optio adipisci odit provident soluta qui repellat vero odit fuga quasi voluptatem labore pariatur et quia cum.', -18, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(22, 8, 3, 'Quisquam quod molestiae dolorum tenetur rerum impedit id a in voluptatibus.', -16, '2016-03-06 00:03:50', '2016-03-07 19:54:25'),
(23, 3, 12, 'Repellat distinctio quia et facere voluptas unde incidunt est soluta repudiandae in placeat minima dolorem ducimus doloremque quidem incidunt.', -17, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(24, 29, 9, 'Voluptatum repellat id tempore hic laborum odio ipsa soluta natus voluptas veniam saepe ut quo blanditiis.', 5, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(25, 28, 9, 'Ut omnis unde id vel quia qui excepturi earum omnis iste doloribus numquam reiciendis blanditiis enim.', 3, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(26, 19, 3, 'Et in sapiente eos id at quam ex et vel non.', -13, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(27, 25, 4, 'Dolorem ratione et consequatur delectus sit et ut ut nobis ea amet aut accusamus quia qui qui.', 12, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(28, 1, 12, 'Ad praesentium omnis fugiat tenetur occaecati labore non quidem consequuntur distinctio aspernatur vel dolores quia sed quis.', 10, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(29, 41, 1, 'Voluptatem expedita rerum natus minima in ut excepturi recusandae quaerat deleniti ea hic ipsam voluptatem velit dolor culpa.', 6, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(30, 24, 9, 'Magni voluptas aut similique quod illum a omnis perferendis nihil.', 1, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(31, 48, 9, 'Aut nemo quia eligendi incidunt ipsam natus harum quidem illum saepe ex et iste possimus id et.', 2, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(32, 46, 2, 'Officiis culpa nam omnis dolorem in temporibus dolorem et non error omnis ipsam sit qui et.', -2, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(33, 12, 8, 'Nam inventore sint in distinctio aut ipsum nobis aut sit sunt reprehenderit recusandae voluptatem culpa doloremque.', -13, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(34, 10, 6, 'Vitae illo cum qui architecto suscipit quo est fugit eum.', -6, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(35, 26, 12, 'Itaque sit magni occaecati est accusamus non eligendi necessitatibus praesentium commodi dolores exercitationem voluptate error repellat culpa expedita.', 4, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(37, 43, 10, 'Animi deserunt voluptatem quam nihil molestias beatae et aut beatae dolorem repudiandae.', -11, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(38, 5, 7, 'Tempora dolorum error voluptatem labore dolorum voluptatem aut dolorum quod laboriosam nihil maiores impedit veritatis ipsa ut occaecati rem laborum.', 6, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(39, 30, 12, 'Animi deleniti sed nisi omnis fuga explicabo sed eos inventore ut tempore autem a architecto.', -13, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(40, 49, 5, 'Sapiente nemo unde quod delectus deleniti laudantium magnam assumenda nihil fugit blanditiis ea omnis consequuntur beatae amet voluptatum corrupti.', 8, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(41, 43, 9, 'Unde dignissimos quia modi enim facilis distinctio quod nam nihil suscipit.', -13, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(42, 13, 8, 'Esse ipsum enim voluptates minima eaque unde cumque sit libero debitis nostrum natus enim saepe sed hic perferendis ratione tenetur facere aliquid.', -12, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(43, 8, 10, 'Possimus odit omnis est dolorem et voluptatem voluptatem eos similique iure quod quo aut.', -12, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(44, 3, 2, 'Deleniti amet corrupti accusantium ut expedita qui quibusdam odit ratione.', 5, '2016-03-06 00:03:51', '2016-03-07 19:54:25'),
(45, 18, 7, 'Suscipit alias quam deleniti numquam dolor quam accusamus quidem illo explicabo eveniet consequatur.', 8, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(46, 44, 5, 'Optio exercitationem consequuntur nihil exercitationem vel quia autem est beatae sed odit debitis quis.', -4, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(47, 7, 3, 'Maxime corporis sint sequi voluptas beatae placeat molestias a ut dolorum ea vitae.', 4, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(48, 29, 10, 'Quidem minima quo fugiat eum impedit sequi nihil culpa qui numquam voluptas nesciunt alias voluptas.', -9, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(49, 23, 6, 'Et dolores accusamus et et dolore sunt accusantium dolor quas rerum distinctio ipsa architecto.', -2, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(50, 3, 12, 'Resposta editada', -11, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(51, 11, 6, 'Earum aut illo cum nihil qui voluptatibus non nisi fugiat unde quia vel mollitia et minus.', -9, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(52, 31, 5, 'Porro labore delectus earum et recusandae recusandae ipsum voluptas eos voluptatem ullam et libero repellat voluptatem voluptate velit enim voluptas.', -10, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(53, 29, 10, 'Et rerum maxime rem sint velit officia explicabo iure nisi.', 1, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(54, 1, 6, 'Aspernatur porro aperiam facere recusandae voluptatum tempore saepe praesentium alias nesciunt laborum.', 8, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(55, 24, 12, 'Nesciunt ipsum quis velit et vel excepturi harum inventore perferendis.', -15, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(56, 44, 4, 'Voluptatum atque repellat et doloremque eum laudantium sunt quia autem quia.', -8, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(57, 32, 4, 'Consequatur eos autem consequatur fugit consectetur aut dolorum iste qui quia quod voluptas veritatis voluptatem.', -8, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(58, 26, 12, 'Doloremque et architecto iusto voluptatibus voluptatibus voluptate sint non enim ab officia quo vel velit quo.', -11, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(59, 15, 9, 'Minus tenetur quasi voluptate ullam facere ipsum est qui quis culpa vel sed asperiores in et.', -1, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(60, 20, 12, 'Et recusandae reprehenderit et voluptatum facere minima sequi assumenda natus dignissimos praesentium iusto laborum quisquam distinctio.', -12, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(61, 33, 10, 'Similique numquam qui eos in labore dolore consequuntur optio ut qui.', 5, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(62, 16, 10, 'Ex quam magni et quam ut sunt ratione ipsum nihil porro est optio animi soluta.', -11, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(63, 31, 2, 'Nihil ut assumenda voluptate ad recusandae consequuntur recusandae corporis reiciendis dicta numquam qui non ipsa distinctio nihil omnis qui a nam.', 7, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(64, 22, 12, 'Iure ut aut molestiae magnam tempora impedit eum et aut et quidem tempore soluta.', -15, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(65, 9, 10, 'Nulla amet vel ut ad ipsa quo nihil corrupti et possimus quidem aut quaerat aut consectetur unde aliquam sit.', -8, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(66, 30, 6, 'Rerum laudantium non veniam doloremque alias ut neque velit quia atque.', 12, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(67, 7, 9, 'Voluptatibus sunt rerum sint repellat quo ut voluptatem sint perferendis ratione beatae at rerum doloribus fugiat voluptatibus qui recusandae et.', -14, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(68, 41, 9, 'Ducimus ut reprehenderit eos consequatur quod sunt dolor quis laborum sit perferendis et iusto nihil magnam qui asperiores distinctio.', 3, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(69, 26, 7, 'Exercitationem quidem dolorem soluta vitae libero nemo impedit illum rerum.', -2, '2016-03-06 00:03:52', '2016-03-07 19:54:25'),
(70, 40, 1, 'Explicabo aut commodi nesciunt ipsam reiciendis recusandae a laborum laudantium aut quis mollitia consequatur dolorum sit illo quod.', -15, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(71, 41, 1, 'Adipisci at esse iusto placeat rerum quas est beatae dolores vel officia dolor id sed est ex.', -9, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(72, 6, 6, 'Sapiente ab consequatur id quis aut ad amet id enim iste quos eum aut qui dolores blanditiis recusandae amet.', -8, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(73, 3, 3, 'Praesentium molestias sint fuga ea impedit adipisci voluptatum suscipit consequuntur et voluptatum.', -18, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(74, 49, 10, 'Molestiae laudantium eligendi qui autem voluptas labore laboriosam nostrum asperiores expedita ut corporis veritatis libero non.', -11, '2016-03-06 00:03:53', '2016-03-07 21:21:56'),
(75, 17, 6, 'Minus earum esse rerum laudantium dolorum quia doloribus eaque quisquam quia non est assumenda non distinctio commodi.', -4, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(76, 22, 5, 'Beatae eos quis voluptatum voluptatem sequi voluptatum sit non eaque ipsa qui consequuntur vero blanditiis non qui in.', -17, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(77, 39, 7, 'Et ea alias deserunt doloremque reprehenderit ratione vel suscipit aut quasi deserunt molestias aut.', -10, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(78, 5, 6, 'Quia voluptas non magnam minus possimus quibusdam commodi est eveniet.', -14, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(79, 13, 8, 'Quod incidunt est dicta eveniet sunt quia et perferendis voluptatem nihil.', -7, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(80, 18, 3, 'Optio accusamus tempore sunt voluptatem officiis iusto sint ipsum nostrum ea.', -18, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(81, 33, 2, 'Ea rem quaerat laudantium suscipit reiciendis et quia aperiam quia maiores dolore maiores repellendus aliquid sunt libero.', -12, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(82, 30, 6, 'Sit voluptatem ipsum vel magnam in ut aliquid itaque quaerat aliquam sunt asperiores doloribus voluptas ut.', -12, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(83, 5, 10, 'Mollitia provident vero quas odio quo eos maiores molestias sed reprehenderit omnis nobis rerum aliquid vel a deserunt.', 0, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(84, 33, 1, 'Omnis velit vel blanditiis porro minus autem sunt ipsum id velit est est molestias voluptatem et sunt delectus rerum nesciunt.', -14, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(85, 6, 5, 'Sit quas ut similique iure in corrupti natus velit odit ut earum reprehenderit cumque quo adipisci sapiente doloribus ipsam adipisci.', -13, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(86, 43, 6, 'Fuga quae neque possimus praesentium modi et voluptas commodi corrupti dolorem minima nihil molestiae omnis adipisci praesentium aut eaque.', -11, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(87, 39, 3, 'Aliquam est est quia ut accusantium veritatis ab quas rerum quos vel numquam reiciendis ut accusantium unde asperiores culpa dolorem cumque.', -18, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(88, 48, 10, 'Amet possimus quia quo similique aliquid qui sint amet cupiditate eos minima et architecto rerum et.', 6, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(89, 6, 8, 'Dolor voluptates ut cupiditate expedita omnis veniam quasi libero tempora in amet iste optio qui voluptas nisi vel eveniet nisi quas.', 9, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(90, 40, 2, 'Voluptatem nesciunt voluptas ut sequi accusantium architecto aut unde rerum non et excepturi perferendis laudantium voluptatem omnis id qui libero.', -6, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(91, 19, 4, 'Eaque aspernatur architecto natus eum omnis sapiente labore aliquid est est eos.', 7, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(92, 2, 9, 'Dicta inventore fugiat qui dicta reiciendis quia minus dicta praesentium ab sunt.', -9, '2016-03-06 00:03:53', '2016-03-07 19:54:25'),
(93, 39, 5, 'A facere dolorum sint laborum laudantium ea impedit consequatur et quia temporibus eaque qui architecto dolor vel qui sit eveniet.', 7, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(94, 7, 7, 'Vero consequatur aut non alias nihil sed quos consequatur consequatur modi inventore soluta laboriosam qui voluptas id.', 2, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(95, 26, 11, 'Culpa itaque autem et et id error fugiat necessitatibus nulla culpa explicabo reiciendis sunt sit.', -9, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(96, 12, 1, 'Veniam ea rerum facere earum est odio reiciendis qui praesentium fugit dignissimos nam eum assumenda eos nihil ad.', 10, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(97, 27, 5, 'A ullam magnam illum repellendus dolores omnis dicta id vero perferendis.', -4, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(98, 47, 3, 'Mollitia tempora maxime dolor consectetur dolores sint repellendus optio necessitatibus sunt repudiandae quod praesentium nostrum rerum debitis.', -1, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(99, 23, 1, 'Ipsa vero et natus officia voluptatem quo maiores esse impedit eos totam saepe aliquid libero voluptas sit velit quam possimus natus.', -2, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(100, 11, 9, 'Dolor sed voluptatem aspernatur culpa ullam consequatur eligendi ad quidem.', -11, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(101, 40, 6, 'Eum magnam error iusto occaecati deserunt delectus natus est placeat qui et quidem quia deleniti in aperiam qui.', -8, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(102, 16, 6, 'Quia error cumque dolore assumenda qui perferendis nam nihil quia aut consectetur aut voluptatem voluptatem dignissimos reiciendis.', 6, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(103, 17, 1, 'Itaque sapiente cum aut id temporibus quaerat itaque molestiae aut repellat delectus quibusdam fugit veniam vel suscipit qui magni natus.', -6, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(104, 17, 2, 'Commodi qui deserunt nulla velit iusto impedit quia et veniam doloremque consequatur aliquid officiis eligendi aut.', -17, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(105, 1, 1, 'Aut tempora nesciunt recusandae eum pariatur dolores velit enim dolorem iure eum eligendi qui quis.', 11, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(106, 33, 3, 'Temporibus mollitia nam aliquam ab maxime dolorem minima facere omnis officiis autem consequatur ipsa sapiente qui omnis nihil voluptas sequi eum.', 10, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(107, 2, 3, 'Est dolor dolores molestiae natus qui modi earum rerum quod sequi itaque illum labore aut optio sed modi qui id.', -17, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(108, 6, 10, 'Cum quod et quae quas et rerum aliquid ipsa et dolorem deserunt distinctio.', 8, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(109, 22, 11, 'Enim quod enim et magni corporis dolorem et sit laboriosam quia provident numquam nihil.', -9, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(110, 40, 3, 'Et error laudantium rerum sed et nam quae cupiditate explicabo blanditiis est sed et ipsa officiis.', -6, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(111, 11, 3, 'Aliquid odit necessitatibus itaque rerum suscipit accusantium sit sit hic.', -5, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(112, 37, 12, 'Perferendis ducimus animi modi nam dolore velit porro qui accusamus ducimus qui alias temporibus alias voluptatem.', 4, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(113, 41, 6, 'Est quibusdam dolore assumenda cumque odit velit accusamus optio libero corporis minima est voluptatem deserunt.', -16, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(114, 17, 10, 'Est et autem qui recusandae eius sequi suscipit impedit consequatur quia dignissimos.', 7, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(116, 9, 7, 'Praesentium adipisci sit at et sed aut qui minus commodi et placeat ullam nobis perferendis quo et voluptates dolor voluptatem.', -14, '2016-03-06 00:03:54', '2016-03-07 19:54:25'),
(117, 2, 8, 'Autem odio et repellendus soluta nihil sunt ea sunt quae rerum aut nihil explicabo.', -7, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(118, 5, 1, 'Dolore ut dolore sunt alias eum eos eaque veritatis et cumque vero est.', -4, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(119, 25, 5, 'Quisquam id temporibus tenetur sunt eligendi voluptatibus soluta non nostrum dolorum consequuntur ab doloribus.', -4, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(120, 1, 5, 'Molestias maxime expedita et aut sunt consequatur ut reiciendis laboriosam voluptatum saepe rerum.', -18, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(121, 11, 7, 'Eos nesciunt maxime nisi sit aut aut facilis quaerat consequatur numquam officiis quidem earum.', 9, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(122, 20, 12, 'Aut aliquid ullam provident ipsa quae et eveniet laboriosam rerum rerum iste voluptatem.', 5, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(123, 27, 4, 'Iusto rem dignissimos voluptates quas et labore in qui vel id quos sapiente possimus est aliquam voluptatem recusandae tempore rerum.', 6, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(124, 15, 8, 'Sunt quidem deleniti architecto consequatur qui error perspiciatis ab nostrum eaque voluptatem nostrum ratione aliquam corporis qui repellendus.', 10, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(125, 33, 4, 'Totam eveniet laudantium ut quisquam aperiam earum sapiente vel doloribus odio natus quisquam provident provident sed culpa consectetur quos a quia.', 11, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(126, 29, 7, 'Voluptas vitae aspernatur ad nostrum nisi dolor qui voluptatibus doloremque qui nisi error eos consequatur voluptate quo.', -13, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(127, 19, 7, 'Quo aut quae eveniet quo at quo libero aut dolores mollitia officia sunt.', -9, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(128, 23, 7, 'Velit enim id quia quasi eum est odit voluptas aut doloremque ad aut deleniti omnis dolores tempore praesentium magni dolores.', 2, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(129, 30, 10, 'Voluptate et consequatur sit voluptatibus dolor voluptatem soluta dolor sapiente atque eveniet asperiores assumenda rerum distinctio consectetur et.', 10, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(130, 34, 1, 'Reiciendis esse non laudantium soluta possimus sit omnis facilis id ipsa esse iste quia quod et magnam optio non.', -9, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(131, 11, 7, 'Similique minus nihil ipsam aut et quae natus et nulla quia molestiae ut sit voluptas beatae soluta temporibus et voluptates quia.', -14, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(132, 43, 3, 'Accusamus quia voluptatibus velit nulla necessitatibus consequatur laborum debitis libero dicta quo exercitationem molestias.', 0, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(133, 21, 5, 'Voluptatem quod eos harum expedita perspiciatis explicabo facere commodi cum possimus magni et sunt nulla sunt consequuntur.', 3, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(134, 33, 10, 'Eos dolorum et et magnam libero autem voluptatem a doloribus alias inventore nesciunt provident rerum temporibus debitis.', -18, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(135, 20, 8, 'Cumque in amet et voluptas occaecati accusantium consectetur consequatur earum dicta.', 4, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(136, 12, 5, 'Est ducimus impedit aut omnis sequi magnam sunt itaque voluptatum repellat vitae aspernatur dolor quo assumenda.', 11, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(137, 17, 4, 'Minima aut voluptatem dolores id architecto dicta sit quas architecto quidem.', -9, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(138, 7, 2, 'Consequatur atque voluptate corporis repellat amet qui quo perspiciatis aut culpa voluptatem deserunt qui quae ut corporis officiis doloremque numquam repellendus praesentium.', -13, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(139, 3, 2, 'Optio omnis non eum suscipit aspernatur quos quo fugit qui sed nam fugit optio suscipit adipisci sunt.', -15, '2016-03-06 00:03:55', '2016-03-07 19:54:25'),
(140, 30, 2, 'Quisquam reiciendis magni voluptas quia molestiae dolores aut eveniet optio fugiat.', 7, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(141, 1, 8, 'Itaque assumenda voluptatem sed maiores impedit architecto sit laboriosam sint molestiae aut perspiciatis qui beatae earum qui.', -17, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(142, 49, 6, 'Vel hic et placeat nihil pariatur corrupti asperiores earum quae vitae iure voluptatem enim laudantium sint enim sit a.', -17, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(143, 26, 5, 'Autem voluptas itaque voluptate iusto hic praesentium non explicabo voluptatem rerum.', -16, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(144, 12, 1, 'Architecto repudiandae necessitatibus enim consequatur magni quae dolorem qui ea nihil dolores consequatur facilis et deserunt qui natus.', -6, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(145, 28, 2, 'Ipsum amet culpa fugiat a ipsum velit animi rerum eos facilis.', -16, '2016-03-06 00:03:56', '2016-03-07 21:00:55'),
(146, 20, 9, 'Illum veniam a ratione minus voluptas dolorum non fugiat ipsa ipsam necessitatibus ipsum facilis harum omnis qui nemo enim quam.', -13, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(147, 26, 4, 'Ut ut nulla voluptas inventore porro natus dolorem magni ut deserunt provident tempora ad perferendis maxime hic est delectus.', -1, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(149, 12, 12, 'Minima culpa assumenda exercitationem provident harum nemo ratione ab earum expedita magni corrupti ex.', 10, '2016-03-06 00:03:56', '2016-03-07 19:54:25'),
(150, 44, 8, 'Qui sit ea voluptate doloremque ipsam dolores deserunt et aut.', -10, '2016-03-06 00:03:56', '2016-03-07 19:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(2, 'Operador', '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(3, 'Usuario', '2016-03-06 00:03:46', '2016-03-06 00:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', 'admin@ajudai.dev', '$2y$10$090HtdNq.B1CJlij0OZHtOm3/4aFnafsGNuTXCNmojD8Oml0AiOXq', 1, '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(2, 'Moderador teste se mudou o tipo', 'Moderador', 'moderador@ajudai.dev', '$2y$10$kS5umR2DtIIoZaW2drmzSOsJSUWaedvOiHuIoD3/GBmsEXCmxHBZ6', 3, '2016-03-06 00:03:46', '2016-03-08 04:31:47'),
(3, 'Agostinho Delgado', 'iWilliamson', 'mCronin@example.com', '$2y$10$zDPhNEe8FjNH7Nn8z5g0..aCuT0BHI1ki8pYvMqXCeGz8fz.zPkV.', 3, '2016-03-06 00:03:46', '2016-03-06 00:03:46'),
(4, 'Dr. Jorge Giovane Maldonado', 'dr.jorge', 'dr.jorge@gmail.com', '$2y$10$BFeQFf91eq.CuV3jUWe/..zKNVRE02s5TNtCkXwaHt73OSiO1cc6a', 3, '2016-03-06 00:03:47', '2016-03-07 04:11:34'),
(5, 'Dr. Leandro Felipe Ávila', 'Alessia.Schamberger', 'Ezekiel20@example.net', '$2y$10$6WZdz0fp3QOJg4n2empUa.uljMyNcbm9DEs.CZ6irb3VXUaW9u0OG', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(6, 'Sra. Nicole Micaela Quintana Sobrinho', 'Daniel.Aida', 'Damion.Botsford@example.net', '$2y$10$VlmvXAVscFkzAe6SYagR..SxiZPHnSNYFlzvPqO0hxQ4VsMwVQIMO', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(7, 'Sra. Malena Paulina Leal Neto', 'malena.paulina', 'Conor40@example.com', '$2y$10$VAjYLgvWxxjhXyrPNLjDROPPp1Is0/KCFazJPuuShYaIta8ITRgvi', 1, '2016-03-06 00:03:47', '2016-03-07 16:39:57'),
(8, 'Christopher Leon', 'zHansen', 'Christ.Weimann@example.org', '$2y$10$cQuyU1UVP5/7a04T6DQmeeHXyaZA1jY7XEpMxM5g.IoJNIf4bJtFG', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(9, 'Camila Salazar Sobrinho', 'Marvin.Michaela', 'Ziemann.Keira@example.org', '$2y$10$rIOfqOjy8ulo97Xow76qp.0EOAdJHKPhDzazmyZEOqS26jYBJpGj2', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(10, 'Dr. Amanda Faria Medina Filho', 'vRosenbaum', 'yLubowitz@example.com', '$2y$10$5pWOEzEW.PLvs/tF4uxWY.TmNw5KiTfEFnNeQjd3fhmA8GQpj1io2', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(11, 'Srta. Gabriela Pereira Jr.', 'tLeuschke', 'Litzy22@example.com', '$2y$10$r2HnE9nwSesRtlN3RovobuWEQNThr9FBZH/65uqqzePAJF2iEoKxW', 3, '2016-03-06 00:03:47', '2016-03-06 00:03:47'),
(12, 'Dr. Elias Campos Beltrão', 'iHerman', 'Demetris.Torp@example.com', '$2y$10$EOq0aWAe7J3nIn3IrvOqLeQhPmYhtpjDe9foGBf9qTVt.UIjXugPW', 3, '2016-03-06 00:03:48', '2016-03-06 00:03:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_author_id_foreign` (`author_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_author_id_foreign` (`author_id`),
  ADD KEY `replies_post_id_foreign` (`post_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_foreign` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replies_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_foreign` FOREIGN KEY (`type`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
