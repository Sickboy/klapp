-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 29 Cze 2017, 11:48
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ewid_czlonkowie`
--

CREATE TABLE `ewid_czlonkowie` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nazwisko` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ewid_czlonkowie`
--

INSERT INTO `ewid_czlonkowie` (`id`, `imie`, `nazwisko`) VALUES
(1, 'John', 'Doe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_plan`
--

CREATE TABLE `gosp_plan` (
  `id` int(11) NOT NULL,
  `rok` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `utworzony` date NOT NULL,
  `przez` int(11) NOT NULL,
  `stan` int(11) NOT NULL,
  `planowane` int(11) NOT NULL,
  `upadki` int(11) NOT NULL,
  `pozyskano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `gosp_plan`
--

INSERT INTO `gosp_plan` (`id`, `rok`, `utworzony`, `przez`, `stan`, `planowane`, `upadki`, `pozyskano`) VALUES
(1, '2017/2018', '2017-03-31', 1, 2, 1, 3, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_prace`
--

CREATE TABLE `gosp_prace` (
  `id` int(11) NOT NULL,
  `kiedy` date NOT NULL,
  `prowadzil` int(11) NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uczestnicy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poczatek` datetime NOT NULL,
  `koniec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_upadki`
--

CREATE TABLE `gosp_upadki` (
  `id` int(11) NOT NULL,
  `rok` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `utworzony` date NOT NULL,
  `przez` int(11) NOT NULL,
  `upadek` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_urzadzenia`
--

CREATE TABLE `gosp_urzadzenia` (
  `id` int(11) NOT NULL,
  `numer` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `typ` int(11) NOT NULL,
  `rokBudowy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opiekun` int(11) NOT NULL,
  `gps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zdjecie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskId` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `gosp_urzadzenia`
--

INSERT INTO `gosp_urzadzenia` (`id`, `numer`, `nazwa`, `typ`, `rokBudowy`, `opiekun`, `gps`, `zdjecie`, `taskId`) VALUES
(1, 13, 'Świerczynki', 1, '1990', 1, '[53.10,12.30]', 'default-image.jpg', '-');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_urzadzenia_typ`
--

CREATE TABLE `gosp_urzadzenia_typ` (
  `id` int(11) NOT NULL,
  `typ` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicjal` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `gosp_urzadzenia_typ`
--

INSERT INTO `gosp_urzadzenia_typ` (`id`, `typ`, `inicjal`) VALUES
(1, 'Ambona', 'AMB'),
(2, 'Zwyżka', 'ZWY');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_zadania`
--

CREATE TABLE `gosp_zadania` (
  `id` int(11) NOT NULL,
  `utworzony` date NOT NULL,
  `przez` int(11) NOT NULL,
  `dla` int(11) NOT NULL,
  `zakonczony` date NOT NULL,
  `status` int(11) NOT NULL,
  `tytul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tresc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urzadzenie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_zadania_status`
--

CREATE TABLE `gosp_zadania_status` (
  `id` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gosp_zwierzyna`
--

CREATE TABLE `gosp_zwierzyna` (
  `id` int(11) NOT NULL,
  `jelenByk` int(11) NOT NULL,
  `jelenLania` int(11) NOT NULL,
  `jelenCielak` int(11) NOT NULL,
  `sarnaKoziol` int(11) NOT NULL,
  `sarnaKoza` int(11) NOT NULL,
  `sarnaKozle` int(11) NOT NULL,
  `Dzik` int(11) NOT NULL,
  `Lis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `gosp_zwierzyna`
--

INSERT INTO `gosp_zwierzyna` (`id`, `jelenByk`, `jelenLania`, `jelenCielak`, `sarnaKoziol`, `sarnaKoza`, `sarnaKozle`, `Dzik`, `Lis`) VALUES
(1, 10, 15, 12, 12, 16, 9, 180, 50),
(2, 26, 31, 19, 38, 41, 22, 320, 100),
(3, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, 2, 1, 0, 6, 2, 45, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` text COLLATE utf8_unicode_ci,
  `role` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `last_name`, `role`) VALUES
(1, 'John', 'root@root.pl', '$2y$10$Y7mul/iUpU4qpaCDc2mVbO7AuXS3krHim1EnkiAsXKyNF2jdDzJVu', '99QQwANxpJhIjXtPAjLK8eqzqQrazozU9SEb9bV6WF92uw7iKcQuFC0zmBwi', '2017-06-21 05:21:57', '2017-06-21 05:21:57', 'Doe', 'S'),
(11, 'Billy', 'asd@asd.pl', '$2y$10$NH3QR5K08y7l0Uik6ksIbupWGU0HBNnuxdxNp80H1fOCavhyK.zHy', 'X8Bb45h1s9UxFCzrFCqVlAeA4VHl83HpZPly79my7djNHbWPmvgE2fgIsvEr', '2017-06-29 05:14:10', '2017-06-29 05:14:10', 'Joe', 'A');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ewid_czlonkowie`
--
ALTER TABLE `ewid_czlonkowie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gosp_plan`
--
ALTER TABLE `gosp_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosp_plan_fk0` (`przez`),
  ADD KEY `gosp_plan_fk1` (`stan`),
  ADD KEY `gosp_plan_fk2` (`planowane`),
  ADD KEY `gosp_plan_fk3` (`upadki`),
  ADD KEY `gosp_plan_fk4` (`pozyskano`);

--
-- Indexes for table `gosp_prace`
--
ALTER TABLE `gosp_prace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosp_prace_fk0` (`prowadzil`);

--
-- Indexes for table `gosp_upadki`
--
ALTER TABLE `gosp_upadki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosp_upadki_fk0` (`przez`);

--
-- Indexes for table `gosp_urzadzenia`
--
ALTER TABLE `gosp_urzadzenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosp_urzadzenia_fk1` (`opiekun`),
  ADD KEY `gosp_urzadzenia_fk3` (`typ`);

--
-- Indexes for table `gosp_urzadzenia_typ`
--
ALTER TABLE `gosp_urzadzenia_typ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gosp_zadania`
--
ALTER TABLE `gosp_zadania`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosp_zadania_fk0` (`przez`),
  ADD KEY `gosp_zadania_fk1` (`dla`),
  ADD KEY `gosp_zadania_fk2` (`status`),
  ADD KEY `gosp_zadania_fk3` (`urzadzenie`);

--
-- Indexes for table `gosp_zadania_status`
--
ALTER TABLE `gosp_zadania_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gosp_zwierzyna`
--
ALTER TABLE `gosp_zwierzyna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ewid_czlonkowie`
--
ALTER TABLE `ewid_czlonkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `gosp_plan`
--
ALTER TABLE `gosp_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `gosp_prace`
--
ALTER TABLE `gosp_prace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `gosp_upadki`
--
ALTER TABLE `gosp_upadki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `gosp_urzadzenia`
--
ALTER TABLE `gosp_urzadzenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `gosp_zadania`
--
ALTER TABLE `gosp_zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `gosp_zadania_status`
--
ALTER TABLE `gosp_zadania_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `gosp_zwierzyna`
--
ALTER TABLE `gosp_zwierzyna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `gosp_plan`
--
ALTER TABLE `gosp_plan`
  ADD CONSTRAINT `gosp_plan_fk0` FOREIGN KEY (`przez`) REFERENCES `ewid_czlonkowie` (`id`),
  ADD CONSTRAINT `gosp_plan_fk1` FOREIGN KEY (`stan`) REFERENCES `gosp_zwierzyna` (`id`),
  ADD CONSTRAINT `gosp_plan_fk2` FOREIGN KEY (`planowane`) REFERENCES `gosp_zwierzyna` (`id`),
  ADD CONSTRAINT `gosp_plan_fk3` FOREIGN KEY (`upadki`) REFERENCES `gosp_zwierzyna` (`id`),
  ADD CONSTRAINT `gosp_plan_fk4` FOREIGN KEY (`pozyskano`) REFERENCES `gosp_zwierzyna` (`id`);

--
-- Ograniczenia dla tabeli `gosp_prace`
--
ALTER TABLE `gosp_prace`
  ADD CONSTRAINT `gosp_prace_fk0` FOREIGN KEY (`prowadzil`) REFERENCES `ewid_czlonkowie` (`id`);

--
-- Ograniczenia dla tabeli `gosp_upadki`
--
ALTER TABLE `gosp_upadki`
  ADD CONSTRAINT `gosp_upadki_fk0` FOREIGN KEY (`przez`) REFERENCES `ewid_czlonkowie` (`id`);

--
-- Ograniczenia dla tabeli `gosp_urzadzenia`
--
ALTER TABLE `gosp_urzadzenia`
  ADD CONSTRAINT `gosp_urzadzenia_fk0` FOREIGN KEY (`typ`) REFERENCES `gosp_urzadzenia_typ` (`id`),
  ADD CONSTRAINT `gosp_urzadzenia_fk1` FOREIGN KEY (`opiekun`) REFERENCES `ewid_czlonkowie` (`id`),
  ADD CONSTRAINT `gosp_urzadzenia_fk3` FOREIGN KEY (`typ`) REFERENCES `gosp_urzadzenia_typ` (`id`);

--
-- Ograniczenia dla tabeli `gosp_zadania`
--
ALTER TABLE `gosp_zadania`
  ADD CONSTRAINT `gosp_zadania_fk0` FOREIGN KEY (`przez`) REFERENCES `ewid_czlonkowie` (`id`),
  ADD CONSTRAINT `gosp_zadania_fk1` FOREIGN KEY (`dla`) REFERENCES `ewid_czlonkowie` (`id`),
  ADD CONSTRAINT `gosp_zadania_fk2` FOREIGN KEY (`status`) REFERENCES `gosp_zadania_status` (`id`),
  ADD CONSTRAINT `gosp_zadania_fk3` FOREIGN KEY (`urzadzenie`) REFERENCES `gosp_urzadzenia` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
