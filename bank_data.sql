
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Krishana', 'krishana@gmail.com', 650000),
(2, 'Arjun', 'arjun@gmail.com', 500000),
(3, 'Rohitha', 'rohitha@gmail.com', 700000),
(4, 'Lakshmi', 'lakshmi@gmail.com', 800000),
(5, 'Charan', 'charan@gmail.com', 10000),
(6, 'SubbaRao', 'subbarao@gmail.com', 950000),
(7, 'Ram', 'ram@gmail.com', 480000),
(8, 'Abella', 'abella@gmail.com', 65000),
(9, 'Cristal', 'cristal@gmail.com', 955000),
(10, 'Gokul', 'gokul@gmail.com', 905000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;