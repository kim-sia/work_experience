-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-02-24 19:49
-- 서버 버전: 5.6.42
-- PHP 버전: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sothecodehome`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `contact_info`
--

CREATE TABLE `contact_info` (
  `EMAIL_NO` int(11) NOT NULL,
  `EMAIL_ID` varchar(45) DEFAULT NULL,
  `RECEIVE_EMAIL_ID` varchar(45) DEFAULT NULL,
  `PASSWORD` varchar(45) DEFAULT NULL,
  `COP_ADDRESS` varchar(100) DEFAULT NULL,
  `COP_PHONE` varchar(15) DEFAULT NULL,
  `YOUTUBE_ID` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `contact_info`
--

INSERT INTO `contact_info` (`EMAIL_NO`, `EMAIL_ID`, `RECEIVE_EMAIL_ID`, `PASSWORD`, `COP_ADDRESS`, `COP_PHONE`, `YOUTUBE_ID`) VALUES
(1, 'kimj4359@gmail.com', 'help@sothecode.com', 'qazplm1029!', '전라북도 전주시 완산구 효자동\r\n천잠로 303 전주대학교 본관 114호', '070-4077-0327', 'SO THE CODE');

-- --------------------------------------------------------

--
-- 테이블 구조 `project_info`
--

CREATE TABLE `project_info` (
  `PROJECT_NO` int(11) NOT NULL,
  `PROJECT_KIND` varchar(10) NOT NULL,
  `PROJECT_TITLE` varchar(20) NOT NULL,
  `PROJECT_CONTENTS` varchar(100) NOT NULL,
  `PROJECT_YEAR` int(11) NOT NULL,
  `PROJECT_IMG` varchar(100) NOT NULL,
  `PROJECT_IMG1` varchar(100) DEFAULT NULL,
  `PROJECT_IMG2` varchar(100) DEFAULT NULL,
  `PROJECT_IMG3` varchar(100) DEFAULT NULL,
  `PROJECT_IMG4` varchar(100) DEFAULT NULL,
  `PROJECT_IMG5` varchar(100) DEFAULT NULL,
  `PROJECT_IMG6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `project_info`
--

INSERT INTO `project_info` (`PROJECT_NO`, `PROJECT_KIND`, `PROJECT_TITLE`, `PROJECT_CONTENTS`, `PROJECT_YEAR`, `PROJECT_IMG`, `PROJECT_IMG1`, `PROJECT_IMG2`, `PROJECT_IMG3`, `PROJECT_IMG4`, `PROJECT_IMG5`, `PROJECT_IMG6`) VALUES
(1, 'IoT', 'pH Meter', '물에 띄워서 사용 가능한 pH측정기 발효식품공장, 수영장, 하수처리시설 등 다양한 용도로 사용이 가능합니다.', 2018, 'project_pH_meter_img.png', 'Image@3x.png', '', '', '', '', ''),
(2, 'IoT', 'Rooby Light', '스마트폰으로 조작하는 무드등 블루투스 연동으로 간편하게 자유롭게 색상 조절이 가능합니다.', 2017, 'project_roobt_light_img.png', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `youtube_info`
--

CREATE TABLE `youtube_info` (
  `YOUTUBE_NO` int(11) NOT NULL,
  `YOUTUBE_ADDRESS` varchar(45) DEFAULT NULL,
  `YOUTUBE_NM` varchar(45) DEFAULT NULL,
  `YOUTUBE_YEAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `youtube_info`
--

INSERT INTO `youtube_info` (`YOUTUBE_NO`, `YOUTUBE_ADDRESS`, `YOUTUBE_NM`, `YOUTUBE_YEAR`) VALUES
(1, 'https://www.youtube.com/embed/3qCm0H91XQ4', 'pH Meter', 2018);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`EMAIL_NO`);

--
-- 테이블의 인덱스 `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`PROJECT_NO`);

--
-- 테이블의 인덱스 `youtube_info`
--
ALTER TABLE `youtube_info`
  ADD PRIMARY KEY (`YOUTUBE_NO`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `EMAIL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `project_info`
--
ALTER TABLE `project_info`
  MODIFY `PROJECT_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `youtube_info`
--
ALTER TABLE `youtube_info`
  MODIFY `YOUTUBE_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
