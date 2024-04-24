SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `posts` (
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `text` mediumtext NOT NULL,
  `author` tinytext NOT NULL,
  `created` date NOT NULL,
  `time-to-read` smallint(6) NOT NULL,
  `img-url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `posts` (`title`, `description`, `text`, `author`, `created`, `time-to-read`, `img-url`) VALUES
('10 способов улучшить свои навыки программирования', 'Узнайте, как стать более эффективным программистом', 'Существует множество способов улучшить свои навыки программирования. В этой статье мы рассмотрим 10 самых эффективных.', 'John Doe', '2024-04-24', 10, 'https://example.com/image1.jpg'),
('Как начать свой бизнес в интернете', 'Получите советы по созданию успешного онлайн-бизнеса', 'Хотите начать свой бизнес в интернете, но не знаете с чего начать? Эта статья поможет вам разобраться с основами и даст практические советы.', 'Jane Smith', '2024-04-25', 15, 'https://example.com/image2.jpg'),
('Лучшие места для отдыха летом', 'Откройте для себя самые красивые места на отдых в летний период', 'Лето - отличное время для путешествий! Узнайте о лучших местах, куда можно отправиться отдохнуть этим летом.', 'Alice Johnson', '2024-04-26', 12, 'https://example.com/image3.jpg'),
('5 лучших книг по развитию навыков лидерства', 'Узнайте, как стать лучшим лидером с помощью этих книг', 'Хороший лидер не рождается, он становится. В этой статье мы поделимся с вами списком книг, которые помогут вам развить навыки лидерства и достичь успеха в карьере.', 'Mark Johnson', '2024-04-27', 8, 'https://example.com/image4.jpg'),
('10 советов по улучшению сна', 'Получите качественный сон с этими простыми советами', 'Качественный сон играет важную роль в нашем здоровье и благополучии. В этой статье мы расскажем вам о 10 советах, которые помогут вам улучшить качество своего сна и проснуться бодрым и отдохнувшим.', 'Emily Brown', '2024-04-28', 7, 'https://example.com/image5.jpg'),
('Как подготовиться к собеседованию на работу', 'Узнайте, какие шаги помогут вам успешно пройти собеседование', 'Собеседование на работу может быть стрессовым моментом, но правильная подготовка поможет вам преодолеть все трудности. В этой статье мы поделимся с вами советами, которые помогут вам подготовиться к собеседованию и получить желаемую работу.', 'Alexandra Smith', '2024-04-29', 9, 'https://example.com/image6.jpg');

