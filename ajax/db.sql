-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 09 2021 г., 11:15
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ch86859_django`
--

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `CERTIFICATES` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер',
  `uid` int(11) NOT NULL COMMENT 'ID автора',
  `year` smallint(6) NOT NULL COMMENT 'Год выдачи',
  `level` int(11) NOT NULL COMMENT '0 - финалист, 1 - призёр, 2 - победитель',
  `url` tinytext NOT NULL COMMENT 'Cсылка на документ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=392 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `CERTIFICATES`
--


-- --------------------------------------------------------

--
-- Структура таблицы `MESSAGES`
--

CREATE TABLE IF NOT EXISTS `MESSAGES` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `sender` int(11) NOT NULL COMMENT 'ID отправителя',
  `receiver` int(11) NOT NULL COMMENT 'ID получателя',
  `message` tinytext NOT NULL COMMENT 'Сообщение',
  `readed` tinyint(1) NOT NULL COMMENT 'Флаг прочтения',
  `datetime_sent` datetime NOT NULL COMMENT 'Дата отправки',
  `datetime_read` datetime NOT NULL COMMENT 'Дата прочтения',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `PROJECTS`
--

CREATE TABLE IF NOT EXISTS `PROJECTS` (
-- То, что касается проекта
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор проекта',
  `author` int(11) NOT NULL COMMENT 'ID автора',
  `target` tinyint(4) NOT NULL COMMENT '1 - стенд, 2 - доклад с презентацией, 3 - онлайн представление',
  `speciality` int(11) NOT NULL COMMENT 'ID специальности',
  `name` tinytext NOT NULL COMMENT 'Название',
  `description` text NOT NULL COMMENT 'Описание',
  `status` int(11) NOT NULL COMMENT '0 - редактируется, 1 - отправлен, 2 - принят, 3 - отклонён, 4 - перемещается, 5 - удалён пользователем',
  `coauthors` text NOT NULL COMMENT 'Идентификаторы соавторов',
  `data` tinytext NOT NULL COMMENT 'Ссылка на файл с описанием',
  `video` tinytext NOT NULL COMMENT 'Ссылка на видео (для оффлайн)',
-- То, что касается руководителя проекта
  `h_name` tinytext NOT NULL COMMENT 'Имя руководителя',
  `h_patronymic` tinytext NOT NULL COMMENT 'Отчество руководителя',
  `h_surname` tinytext NOT NULL COMMENT 'Фамилия руководителя',
  `h_job_place` tinytext NOT NULL COMMENT 'Мето работы рукодводителя',
  `h_job_name` tinytext NOT NULL COMMENT 'Должность руководителя',
  `h_phone` tinytext NOT NULL COMMENT 'Телефон руководителя',
  `h_email` tinytext NOT NULL COMMENT 'Почта руководителя',
  `date_created` datetime NOT NULL COMMENT 'Дата создания проекта',
  `date_updated` datetime NOT NULL COMMENT 'Дата обновления проекта',
  `date_posted` datetime NOT NULL COMMENT 'Дата опубликования проекта',
-- То, что касается оценки проекта членами жюри
  `comment` text NOT NULL COMMENT 'Комментарий эксперта',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=603 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `SPECIALITIES` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'идентификатор',
  `name` tinytext NOT NULL COMMENT 'название направления',
  `description` tinytext NOT NULL COMMENT 'описание направления',
  `url` tinytext NOT NULL COMMENT 'ссылка на инфу про направление',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `SPECIALITIES`
--

INSERT INTO `SPECIALITIES` (`id`, `name`, `description`, `url`) VALUES
(1, 'Мои первые шаги в науке', '', ''),
(2, 'Математика и экономика', '', ''),
(3, 'Физика', '', ''),
(4, 'Информационные технологии и программирование', '', ''),
(5, 'Электроника и микроэлектроника', '', ''),
(6, 'Цифровые технологии будущего', '', ''),
(7, 'Умный город', '', ''),
(8, 'Медицина и здоровьесберегающие технологии', '', ''),
(9, 'Химия', '', ''),
(10, 'Экология', '', ''),
(11, 'Компьютерная графика и дизайн', '', ''),
(12, 'Лингвистика', '', ''),
(13, 'Робототехника, конструирование и технология электронных средств', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор',
  `surname` tinytext NOT NULL COMMENT 'Фамилия',
  `name` tinytext NOT NULL COMMENT 'Имя',
  `patronymic` tinytext NOT NULL COMMENT 'Отчество',
  `sex` tinyint(4) NOT NULL COMMENT '1 - женский, 2 - мужской',
  `birthday` date NOT NULL COMMENT 'день рождения',
  `email` tinytext NOT NULL COMMENT 'Адрес почты / Логин',
  `md5password` tinytext NOT NULL COMMENT 'MD5 Пароля',
  `status` tinyint(4) NOT NULL COMMENT '0 - админ, 2 - член жюри, 3 - школьник, 4 - студент вуза, 5 - студент ссуза',
  `pubstatus` tinyint(4) NOT NULL COMMENT '0 - нет проекта, 1 - автор, 2 - соавтор, 3 - автор и соавтор',
  `phone` tinytext NOT NULL COMMENT 'Телефон',
  `avatar` tinytext NOT NULL COMMENT 'Путь до картинки с аватаром',
  `city` tinytext NOT NULL COMMENT 'Город',
  `edu` tinytext NOT NULL COMMENT 'Место обучения / работы',
  `grade` tinyint(4) NOT NULL COMMENT 'Класс / курс',
  `city_lat` tinytext NOT NULL COMMENT 'Коррдинаты города',
  `city_lon` tinytext NOT NULL COMMENT 'Координаты города',
  `edu_lat` tinytext NOT NULL COMMENT 'Координаты школы',
  `edu_lon` tinytext NOT NULL COMMENT 'Координаты школы',
  `date_reg` datetime NOT NULL COMMENT 'Дата и время регистрации',
  `date_login` datetime NOT NULL COMMENT 'Дата и время последнего логина',
  `verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Подтвердил ли пользователь пароль',
  `password_token` tinytext NOT NULL COMMENT 'Если был запрошен сброс пароля',
  `remarks` tinytext NOT NULL COMMENT 'Примечания',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=707 DEFAULT CHARSET=utf8 COMMENT='Пользователь системы';

--
-- Дамп данных таблицы `USERS`
--

INSERT INTO `USERS` (`id`, `surname`, `name`, `patronymic`, `sex`, `birthday`, `email`, `md5password`, `status`, `pubstatus`, `phone`, `avatar`, `city`, `edu`, `grade`, `city_lat`, `city_lon`, `edu_lat`, `edu_lon`, `date_reg`, `date_login`, `verified`, `password_token`, `remarks`) VALUES
(1,   'Булах',          'Дмитрий',    'Александрович',  0, '2020-02-24', 'dima@pkims.ru',             '66d161bf084b53928dffc98d21dc93b7', 0, 0, '+7 (916) 911-48-45', '', '', '42', 5, '', '', '', '', '2020-02-24 20:50:37', '2020-02-24 20:50:37', 0, '053afc4551800d325e3b8eac9694ff36', ''),
(2,   'Шараева',        'Валерия',    'Павловна',       0, '2035-10-24', 'sharaevalera@mail.ru',      'd20160cfcbf7a42935f6ea7c38eb6ea4', 0, 0, '+7 (999) 613-79-70', '', 'Ковров, Россия', 'МБОУ СОШ №24', 11, '56.356769', '41.32263109999999', '56.362468867722356', '41.31039619445801', '2020-02-26 12:11:14', '2020-02-26 12:11:14', 0, '', ''),
(3,   'Пьянов',         'Иван',       'Владимирович',   0, '2020-02-24', 'ivan-pyanov@yandex.ru',     '83d634317da9e6facbb206b52937abc3', 1, 0, '+7 (903) 972-22-50', '', '', '42', 8, '', '', '', '', '2020-02-25 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(4,   'Манилова',       'Галина',     'Васильевна',     1, '2020-02-24', 'consafe@yandex.ru',         '3395b381e770968fdd162d1f81cffacb', 1, 0, '+7 (967) 126-49-24', '', '', '42', 3, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(5,   'Лупин',          'Сергей',     'Сергеевич',      0, '2020-02-24', 'sergeylupin.jr@gmail.com',  'd6f5c3d76db9f904a744a6c63667b4f4', 1, 0, '+7 (903) 255-50-54', '', '', '42', 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(6,   'Шепелев',        'Станислав',  'Олегович',       0, '2020-02-24', 'sshepelev@yandex.ru',       '90954349a0e42d8e4426a4672bde16b9', 1, 0, '+7 (903) 217-43-89', '', '', '42', 13, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(7,   'Бардушкин',      'Владимир',   'Валентинович',   0, '2020-02-24', 'bardushkin@mail.ru',        '691706247789fc016cbc717834aab8e9', 1, 0, '+7 (917) 587-66-02', '', '', '42', 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(8,   'Красильщикова',  'Мария',      'Алексеевна',     0, '2020-02-24', 'kramaria@yandex.ru',        '2f5221b02894fecaa8de9fcb0128a938', 1, 0, '+7 (916) 673-35-78', '', '', '42', 12, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(9,   'Гундырев',       'Вадим',      'Борисович',      0, '2020-02-24', 'vadim_gundirev@mail.ru',    'f6806d81c7d2e8f0714db629f60f6cac', 1, 0, '+7 (903) 778-51-37', '', '', '42', 3, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(10,  'Волкова',        'Елена',      'Анатольевна',    0, '2020-02-24', 'eavolkova2015@mail.ru',     '9d8570dcf3d8e753cac53efbd516bce5', 1, 0, '+7 (916) 254-00-65', '', '', '42', 9, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(11,  'Русакевич',      'Юрий',       'Владимирович',   0, '2020-02-24', 'rusakevich_1971@mail.ru',   '9311a4e990261a30b4f164e441db2708', 1, 0, '+7 (903) 972-22-50', '', '', '42', 10, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(12,  'Волков',         'Алексей',    'Станиславович',  0, '2020-02-24', 'leshvol@mail.ru',           'b7657805d26b58f77c12f7eddb2d3059', 1, 0, '+7 (916) 254-20-05', '', '', '42', 6, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(13,  'Севрюкова',      'Елена',      'Александровна',  0, '2020-02-24', 'melaly@mail.ru',            '4ce0af3059215548b87ce2c42e46308d', 1, 0, '+7 (926) 714-33-38', '', '', '42', 9, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(14,  'Кокин',          'Виталий',    'Владимирович',   0, '2020-02-24', 'kokinvv@gmail.com',         'd28283263be08a9aa5e7909b385b6b38', 1, 0, '+7 (926) 100-91-00', '', '', '42', 4, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'c81e728d9d4c2f636f067f89cc14862c', ''),
(15,  'Горбатый ',      'Игорь',      'Натанович',      0, '2020-02-24', 'i_n_gorbatyi@mail.ru',      '7f7bca1d80e772c6a4940a85ca259707', 1, 0, '+7 (916) 390-71-25', '', '', '42', 3, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(16,  'Шерченков',      'Алексей',    'Анатольевич',    0, '2020-02-24', 'aa_sherchenkov@rambler.ru', '8a8f90c63988c0627f112de9534886eb', 1, 0, '+7 (906) 065-19-02', '', '', '42', 10, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(17,  'Попов',          'Михаил',     'Геннадиевич',    0, '0000-00-00', 'popov@org.miet.ru',         '92940750163a969e92c0c8e916db22d3', 1, 0, '+7 (985) 976-78-52', '', '', '42', 7, '', '', '', '', '2020-03-23 22:09:33', '2020-03-23 22:09:33', 0, '9b4fcddbab500cf6eb631a726bb833f2', ''),
(18,  'Лазаренко',      'Петр',       'Иванович',       0, '0000-00-00', 'lpi@org.miet.ru',           '6451eb7ed6c6e7ce84cb71664ed0e714', 1, 0, '+7 (925) 205-22-26', '', '', '42', 10, '', '', '', '', '2020-03-27 14:45:02', '2020-03-27 14:45:02', 0, '', ''),
(19,  'Бабич',          'Алексей',    'Вальтерович',    0, '0000-00-00', 'drent@yandex.ru',           '6d5c0ab7a33fd32d5d5e197d24abc25b', 1, 0, '+7 (916) 508-34-23', '', '', '42', 10, '', '', '', '', '2020-03-27 17:19:49', '2020-03-27 17:19:49', 0, '', ''),
(20,  'Евграфова',      'Екатерина',  'Евгеньевна',     0, '0000-00-00', 'kiranovas@mail.ru',         '2c7cce2132b97d61bb615e389843b2a7', 1, 0, '+7 (916) 817-61-50', '', '', '42', 11, '', '', '', '', '2020-04-02 17:10:41', '2020-04-02 17:10:41', 0, '', ''),
(21,  'Тимошенко',      'Александр',  'Геннадиевич',    0, '2020-04-03', 'afrokz@mail.ru',            'c4abc344b1aa8a0961d616ec0d0e9705', 1, 0, '+7 (926) 847-56-67', '', '', '42', 6, '', '', '', '', '2020-04-03 21:43:14', '2020-04-03 21:43:14', 0, '', ''),
(24,  'Бобков',         'Владислав',  'Дмитриевич',     0, '1996-11-01', 'kens6991@gmail.com',        'd20160cfcbf7a42935f6ea7c38eb6ea4', 0, 0, '+7 (977) 755-79-95', '', 'Зеленоград, Москва, Россия', 'МБОУ СОШ № 37 города Волжского', 11, '55.98715259999999', '37.2021514', '', '', '2021-02-03 14:07:29', '2021-02-03 14:07:29', 0, '', ''),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
