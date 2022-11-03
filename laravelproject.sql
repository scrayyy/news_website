-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 07:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(111) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(6, 'პილიტიკა'),
(7, 'შემთხვევები'),
(8, 'ჯანმრთელობა'),
(11, 'სპორტი'),
(13, 'განათლება'),
(15, 'ეკონომიკა'),
(16, 'ბიზნესი');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(111) NOT NULL,
  `category_id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc_ka` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `upload_date` varchar(255) NOT NULL,
  `visitors` int(111) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `desc_ka`, `image`, `upload_date`, `visitors`) VALUES
(169, 7, 'ამ წუთებში ქარხანასთან ძლიერი ხანძარია - ნახეთ ფოტოები შემთხვევის ადგილიდან', '<p><strong>ხანძარია ამ წუთებში აფრიკის დასახლებაში.</strong></p>\r\n\r\n<p>ცეცხლი 31-ე ქარხნის მიმდებარე ტერიტორიაზე მდებარე ნაგებობას უკიდია. ხანძრის გამომწვევი მიზეზი ჯერჯერობით უცნობია. უცნობია ასევე, დაიწყეს თუ არა ხანძრის ადგილას მუშაობა მეხანძრე მაშველებმა.</p>', 'news/3bpZHWcEhyeazK7cqk88xpMGyJ12gXrzNERgW5aq.jpg', '2021-05-12', 1),
(170, 7, '\'\'დიდი ტრაგედია დატრიალდა\'\' - მანქანა ხევში გადაიჩეხა და ორი ადამიანი გარდაიცვალა', '<p><strong>ავტოსაგზაო შემთხვევა ქედაში&nbsp;</strong>- სოფელ წონიარისთან ავტომობილი მდინარე აჭარისწყლის ხევში გადავარდა. გავრცელებული ინფორმაციით, შემთხვევის შედეგად ორი ადამიანი გარდაიცვალა.</p>\r\n\r\n<p>თვითმხილველთა თქმით, ავტომობილში მათ გარდა კიდევ იყვნენ სხვა მგზავრებიც, რომლებიც სასწრაფო დახმარების ბრიგადებმა კლინიკაში გადაიყვანეს. სოფელ წონიარისში მერის წარმომადგენლის ინფორმაციით, ავტომანქანაში 7 ადამიანი იმყოფებოდა, მათ შორის, 2 მცირეწლოვანი. ისინი საავადმყოფოში გადაიყვანეს. მისივე ინფორმაციით მცირეწლოვნები თავს კარგად გრძნობენ.</p>', 'news/utIhsypvXIxjumk3vmdMxmwgPPM9lK3i1d0MR88n.png', '2021-05-12', 0),
(171, 11, '\"ფსიქოლოგიურად უმნიშვნელოვანესი გამარჯვება მოაპოვებინა\" - გორის გორმა ლიგა 3-ში პირველი გამარჯვება მოიპოვა', '<p><strong>გორის გორმა ლიგა 3-ში პირველი გამარჯვება დრამატულ ბრძოლაში მოიპოვა</strong></p>\r\n\r\n<p>დღეს ქართლის სტადიონზე მე-6 ტურის შეხვედრა გაიმართა სადაც დავით შუბითიძის გუნდი გურიას უპირისპირდებოდა.</p>\r\n\r\n<blockquote>\r\n<p>შეხვედრის მე-3 წუთზე ანკობოს გოლით დავწინაურდით და ბიჭებიც პირველი გამარჯვების მოლოდინში იყვნენ უკვე თუმცა 45 და 48 წუთებზე გურიამ ცივი შხაპი გადაგვავლო და მატჩის ბედი 180 გრადუსით შემოატრიალეს. შეხვედრის 64&#39;ე წუთზე ანკობომ ლიდერობა კვლავ თავის თავზე აიღო და დუბლი გაიფორმა. მატჩის კულმინაციამ კი ბოლო წუთებზე მოხდა, როდესაც მსაჯის მიერ დამატებულ მე-3 წუთზე იოსებ მოლაშვილმა გამარჯვების მომტანი გოლი გაიტანა და გუნდის პირველი 3 ქულა მოუტანა და ფსიქოლოგიურად უმნიშვნელოვანესი გამარჯვება მოაპოვებინა &quot;- წერს გორის ,,გორის&quot; ადმინისტრაცია.</p>\r\n</blockquote>', 'news/5nq5lDRgtWwYnfKuiMRHtL7ugTnufcR4VWSDcUFh.jpg', '2021-05-12', 0),
(172, 7, '\"დიდი ტრაგედია დატრიალდა, სკოლის მოსწავლეები დაიღუპნენ\" - ქვეყანაში გლოვის დღეა გამოცხადებული, ნახეთ ამბის დეტალები (ყაზანი)', '<p><strong>ყაზანში სკოლაზე თავდასხმის დროს დაღუპულები დაკრძალეს.</strong></p>\r\n\r\n<p>დღეს თათრეთში გლოვის დღეა გამოცხადებული. სკოლაზე თავდასხმას, რომელიც 11 მაისს განხორციელდა, 9 ადამიანი, მათ შორის 7 ბავშვი ემსხვერპლა. დაშავდა 20-ზე მეტი ადამიანი. ცეცხლი ამავე სკოლის ყოფილმა მოსაწვლემ, 19 წლის ილნაზ გალიაევმა გახსნა. ის სპეცრაზმმა დააკავა.</p>', 'news/pxjDbmAo405f9uf8k2Br6yEwmaXoJxvJvHdvj8cJ.png', '2021-05-12', 0),
(173, 6, ',,მიზეზი არ თქმულა რატომ და რისთვის\" - გორის მერიის თანამშრომლები თანამდებობებს ტოვებენ', '<p>გორის მერიას თანამშრომლები კვლავ ტოვებენ - უწყების ქონების მართვის განყოფილების უფროსმა თანამდებობა საკუთარი განცხადების საფუძველზე, მერთან საუბრის შემდეგ დატოვა. გიორგი პაპიტაშვილის განცხადებით, გაუგებარია რატომ მიიღო კონსტანტინე თავზარაშვილმა მისი სამსახურიდან გათავისუფლების გადაწყვეტილება.</p>\r\n\r\n<blockquote>\r\n<p>&quot;განვთავისუფლდი გუშინ, 1998 წლიდან ვმუშაობდი, გუშინ მერთან საუბრის შემდეგ დავწერე განცხადება. მერმა მითხრა, რომ ასეთი აზრი არის, რომ თანამდებობა დამეტოვებინა, მიზეზი არ თქმულა რატომ და რისთვის. სამართლებრივ დავას ჯერჯერჯობით არ ვაპირებ, სანამ მიზეზსს არ გავარკვევ&quot;, - განაცხადა გიორგი პაპიტაშვილმა.</p>\r\n</blockquote>', 'news/Ue5OaI2PFQrKMXsoU5rudq6vX0NzF1mdjBLTQADF.jpg', '2021-05-12', 1),
(174, 6, '„ერთ შემთხვევაში დავთანხმდები\" - ნახეთ რა შემთხვევაში მიიღებს მონაწილეობას ნიკა მელია მერობის არჩევნებში', '<p>სხვა გეგმები მაქვს, მათ შორის პოლიტიკური, ვიდრე თბილისის მერობის კანდიდატობაა&rdquo;, &ndash; ამის შესახებ &bdquo;ნაციონალური მოძრაობის&rdquo; თავმჯდომარემ, ნიკა მელიამ ჟურნალისტებთან განაცხადა.&bdquo;ერთ შემთხვევაში დავთანხმდები, თუ ოპოზიციური კოლეგები ჩათვლიან, რომ ეს არის გარდაუვალი აუცილებლობა. მე მზად ვარ, მეგობრულად, კოლეგიალურად მათ სამსახური გავუწიო და მათთან ერთად საზოგადოებას&hellip; მე არცერთ ოპოზიციურ ლიდერთან კონსულტაციას არ გავმართავ იმასთან დაკავშირებით, მე უნდა ვიყო თუ არა მერობის კანდიდატი. რატომ იცით? ეს რომ ვაკეთო, მინიმუმ ამის ინტერესი უნდა მქონდეს.&rdquo;, &ndash; განაცხადა ნიკა მელიამ.</p>\r\n\r\n<p>ოპოზიციის ნაწილი მიიჩნევს, რომ თბილისის მერობის არჩევნებზე ოპოზიციას საერთო კანდიდატი უნდა ჰყავდეს და ეს ნიკა მელია უნდა იყოს. ხოლო ნაწილი კი ამბობს, რომ ეს &bdquo;ქართული ოცნების&rdquo; დამარცხებას გაართულებს.</p>', 'news/jil7TnpBGd9y5zZ1YVvbBeGiiQLgpUApBYoiB5zv.jpg', '2021-05-12', 1),
(176, 15, 'ლარის ახალი კურსი ცნობილია', '<p>ეროვნული ბანკის მიერ გამოქვეყნებული მონაცემების თანახმად, 1 აშშ დოლარის ოფიციალური ღირებულება 3.4174 ლარი გახდა და მისმა ცვლილებამ ეროვნულ ვალუტასთან მიმართებაში 0.0150 შეადგინა, რადგან დღეს მოქმედი კურსი 3.4324 ლარი იყო.</p>\r\n\r\n<p>რაც შეეხება ევროს, მისი კურსი 4.1590 ლარია.</p>', 'news/0TKmw4fkHjkxY73y5jQdeYkFrIVzZrRlYgtWe4lh.png', '2021-05-12', 0),
(177, 15, 'საქართველოს ეროვნულმა ბანკმა ლარის ახალი გაცვლითი კურსი დაადგინა', '<p>საქართველოს ეროვნული ბანკის ინფორმაციით, ლარი დოლართან მიმართებაში მცირედით გამყარდა და ხვალ 1 აშშ დოლარის ფასი 3.4324 ლარი იქნება, მაშინ როცა დღეს ერთი დოლარი 3.4430 ლარს შეადგენდა.</p>\r\n\r\n<p>ლარის მცირედი გამყარება შეინიშნება ევროსთანაც. დღეს საქართველოს ეროვნული ბანკის ინფორმაციით ერთი ევროს ფასი 4.1474 ლარს შეადგენდა, ხოლო ხვალ მისი ღირებულება 4.1450 ლარი იქნება.</p>', 'news/HoM2LBmo7rISTKh67D94cJd1skfI5xGAjMAvsrBr.jpg', '2021-05-12', 0),
(178, 16, 'ქართულმა ღვინოებმა იაპონიაში 13 ოქროსა და ერთი ვერცხლის მედალი მოიპოვა', '<p><strong>სხვადასხვა დასახელების ქართულმა ღვინოებმა, პრესტიჟულ საერთაშორისო კონკურსზე &bdquo;საკურა&ldquo; 13 ოქროსა და ერთი ვერცხლის მედალი დაიმსახურა.</strong></p>\r\n\r\n<p><strong>საერთაშორისო კონკურსი Sakura Award-ი მასშტაბური ღონისძიებაა, რომელიც წელს მერვედ ჩატარდა. მასში 32 ქვეყნის 4 ათასზე მეტი სხვადასხვა დასახელების ღვინო იყო წარმოდგენილი.</strong></p>\r\n\r\n<p><strong>კონკურსის ჟიური დაკომპლექტებულია იაპონიაში ღვინის სფეროში მოღვაწე ქალბატონებით - სომელიეებით, ღვინის მწერლებითა და ჟურნალისტებით.</strong></p>\r\n\r\n<p><strong>წელს საკონკურსო ღვინოები186-მა იაპონელმა ქალმა შეაფასა.</strong></p>\r\n\r\n<p><strong>2021 წლის მსგავსად, გასულ წლებში,&nbsp;</strong></p>', 'news/kFGQ6JrgPYaVzY9rt6g1RpjfDt2IPNNnNQBthYIQ.jpg', '2021-05-12', 1),
(179, 16, '8 ბიზნეს ასოციაცია საქართველოს მთავრობას ერთობლივი განცხადებით მიმართავს', '<p><em><strong>8 ბიზნეს ასოციაცია საქართველოს მთავრობას ერთობლივი განცხადებით მიმართავს.როგორც განცხადებაშია ნათქვამი, არსებული პოლიტიკურ-ეკონომიკური კრიზისიდან გამომდინარე ბიზნეს გაერთიანებები ერთობლივი განცხადებით მიმართავენ საქართველოს მთავრობას.ზემოხსენებულიდან გამომდინარე ხელისმომწერი ორგანიზაციები მიმართავენ საქართველოს მთავრობას, უმოკლეს ვადებში მიიღოს გადაწყვეტილებები, რათა:ვეყნის პოლიტიკური კრიზისიდან გამოყვანის მიზნით, გამოინახოს ხელისუფლების ხელთ არსებული ყველა საშუალება, მთავრობასა და ოპოზიციურ პარტიებს შორის დიალოგის გაგრძელებისათვის, რამაც ხელი უნდა შეუწყოს ბიზნესის განვითარებისთვის უმნიშვნელოვანეს - პროგოზირებად და სტაბილურ გარემოს შექმნას.</strong></em></p>', 'news/IYkCP2Wc1Dfu9QxJrdwMDqvXjfBdrJ1BdQwUR11A.png', '2021-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Levani & Kote', 'admin@admin.ge', NULL, '$2y$12$FPSdh5fSFcF/b/eJFQNhYO6sGz6PmRJfhDks8zc13JUduWyamp6eO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(111) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `news_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `news_id`) VALUES
(1, '::1', 24),
(2, '::1', 27),
(3, '::1', 179),
(4, '::1', 178),
(5, '::1', 179),
(6, '::1', 179),
(7, '::1', 179),
(8, '::1', 179),
(9, '::1', 174),
(10, '::1', 174),
(11, '::1', 173),
(12, '::1', 169),
(13, '::1', 169),
(14, '::1', 179),
(15, '::1', 169),
(16, '::1', 178),
(17, '::1', 178),
(18, '::1', 178);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
