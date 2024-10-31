-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(11) NOT NULL,
  `AppointmentDate` date DEFAULT NULL,
  `AppointmentTime` time DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `ServiceID` int(11) DEFAULT NULL,
  `ClientID` int(11) DEFAULT NULL,
  `DentistID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppointmentID`, `AppointmentDate`, `AppointmentTime`, `Status`, `ServiceID`, `ClientID`, `DentistID`) VALUES
(1, '2024-01-02', '09:00:00', 'Pending', 1, 1, 1),
(2, '2024-01-05', '10:30:00', 'Approved', 2, 2, 2),
(3, '2024-01-08', '14:00:00', 'Pending', 3, 3, 3),
(4, '2024-01-10', '11:00:00', 'Approved', 4, 4, 4),
(5, '2024-01-15', '15:30:00', 'Pending', 5, 5, 5),
(6, '2024-01-18', '08:45:00', 'Approved', 6, 6, 6),
(7, '2024-01-22', '13:15:00', 'Pending', 7, 7, 7),
(8, '2024-01-25', '16:00:00', 'Approved', 8, 8, 8),
(9, '2024-01-28', '09:30:00', 'Pending', 9, 9, 9),
(10, '2024-01-30', '11:45:00', 'Approved', 10, 10, 10),
(11, '2024-02-02', '14:30:00', 'Pending', 11, 11, 11),
(12, '2024-02-05', '10:00:00', 'Approved', 12, 12, 12),
(13, '2024-02-08', '12:45:00', 'Pending', 13, 13, 13),
(14, '2024-02-12', '15:15:00', 'Approved', 14, 14, 14),
(15, '2024-02-15', '09:20:00', 'Pending', 15, 15, 15),
(16, '2024-02-18', '11:30:00', 'Approved', 16, 16, 16),
(17, '2024-02-20', '13:00:00', 'Pending', 17, 17, 17),
(18, '2024-02-25', '16:30:00', 'Approved', 18, 18, 18),
(19, '2024-02-28', '10:45:00', 'Pending', 19, 19, 19),
(20, '2024-03-03', '12:15:00', 'Approved', 20, 20, 20),
(21, '2024-03-06', '15:45:00', 'Pending', 21, 21, 21),
(22, '2024-03-10', '09:10:00', 'Approved', 22, 22, 22),
(23, '2024-03-14', '11:20:00', 'Pending', 23, 23, 23),
(24, '2024-03-18', '13:30:00', 'Approved', 24, 24, 24),
(25, '2024-03-22', '16:40:00', 'Pending', 25, 25, 25),
(26, '2024-03-25', '10:50:00', 'Approved', 26, 26, 26),
(27, '2024-03-28', '12:00:00', 'Pending', 27, 27, 27),
(28, '2024-04-02', '14:20:00', 'Approved', 28, 28, 28),
(29, '2024-04-05', '09:40:00', 'Pending', 29, 29, 29),
(30, '2024-04-08', '11:10:00', 'Approved', 30, 30, 30),
(31, '2024-04-12', '13:50:00', 'Pending', 31, 31, 31),
(32, '2024-04-15', '15:00:00', 'Approved', 32, 32, 32),
(33, '2024-04-18', '09:25:00', 'Pending', 33, 33, 33),
(34, '2024-04-22', '11:35:00', 'Approved', 34, 34, 34),
(35, '2024-04-26', '13:05:00', 'Pending', 35, 35, 35),
(36, '2024-04-29', '16:15:00', 'Approved', 36, 36, 36),
(37, '2024-05-02', '10:55:00', 'Pending', 37, 37, 37),
(38, '2024-05-05', '12:25:00', 'Approved', 38, 38, 38),
(39, '2024-05-09', '14:55:00', 'Pending', 39, 39, 39),
(40, '2024-05-12', '09:15:00', 'Approved', 40, 40, 40),
(41, '2024-05-15', '11:40:00', 'Pending', 41, 41, 41),
(42, '2024-05-18', '13:20:00', 'Approved', 42, 42, 42),
(43, '2024-05-21', '10:00:00', 'Pending', 43, 43, 43),
(44, '2024-05-24', '11:30:00', 'Approved', 44, 44, 44),
(45, '2024-05-28', '14:00:00', 'Pending', 45, 45, 45),
(46, '2024-06-01', '16:45:00', 'Approved', 46, 46, 46),
(47, '2024-06-05', '09:20:00', 'Pending', 47, 47, 47),
(48, '2024-06-09', '11:00:00', 'Approved', 48, 48, 48),
(49, '2024-06-13', '13:45:00', 'Pending', 49, 49, 49),
(50, '2024-06-17', '15:30:00', 'Approved', 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `clientrecord`
--

CREATE TABLE `clientrecord` (
  `ClientID` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(100) DEFAULT NULL,
  `EmailAdd` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientrecord`
--

INSERT INTO `clientrecord` (`ClientID`, `FullName`, `DateOfBirth`, `Age`, `Gender`, `ContactNo`, `EmailAdd`, `Address`) VALUES
(1, 'Juan Dela Cruz', '1980-05-15', 44, 'Male', '0917-1234567', 'juan.delacruz@example.com', 'Brgy. Poblacion, Lipa City, Batangas'),
(2, 'Maria Santos', '1990-07-20', 33, 'Female', '0917-2345678', 'maria.santos@example.com', 'Brgy. San Jose, Lipa City, Batangas'),
(3, 'Jose Garcia', '1975-09-10', 48, 'Male', '0917-3456789', 'jose.garcia@example.com', 'Brgy. Balintawak, Lipa City, Batangas'),
(4, 'Ana Reyes', '1985-03-25', 39, 'Female', '0917-4567890', 'ana.reyes@example.com', 'Brgy. Pinagtongulan, Lipa City, Batangas'),
(5, 'Carlos Bautista', '1995-11-12', 28, 'Male', '0917-5678901', 'carlos.bautista@example.com', 'Brgy. Marauoy, Lipa City, Batangas'),
(6, 'Luisa Torres', '2000-02-05', 24, 'Female', '0917-6789012', 'luisa.torres@example.com', 'Brgy. Tambo, Lipa City, Batangas'),
(7, 'Ramon Mendoza', '1988-04-18', 36, 'Male', '0917-7890123', 'ramon.mendoza@example.com', 'Brgy. Lodlod, Lipa City, Batangas'),
(8, 'Gloria Cruz', '1992-06-30', 31, 'Female', '0917-8901234', 'gloria.cruz@example.com', 'Brgy. Mataas na Lupa, Lipa City, Batangas'),
(9, 'Pedro Alvarez', '1983-08-14', 41, 'Male', '0917-9012345', 'pedro.alvarez@example.com', 'Brgy. Antipolo del Norte, Lipa City, Batangas'),
(10, 'Rosa Diaz', '1998-01-22', 26, 'Female', '0917-0123456', 'rosa.diaz@example.com', 'Brgy. Antipolo del Sur, Lipa City, Batangas'),
(11, 'Vicente Ramos', '1978-10-10', 45, 'Male', '0918-1234567', 'vicente.ramos@example.com', 'Brgy. San Isidro, Santo Tomas, Batangas'),
(12, 'Teresa Flores', '1987-12-03', 36, 'Female', '0918-2345678', 'teresa.flores@example.com', 'Brgy. San Vicente, Santo Tomas, Batangas'),
(13, 'Andres Villanueva', '1996-08-15', 27, 'Male', '0918-3456789', 'andres.villanueva@example.com', 'Brgy. San Pedro, Santo Tomas, Batangas'),
(14, 'Elena Cruz', '1991-03-09', 33, 'Female', '0918-4567890', 'elena.cruz@example.com', 'Brgy. San Pablo, Santo Tomas, Batangas'),
(15, 'Manuel Morales', '1982-11-25', 41, 'Male', '0918-5678901', 'manuel.morales@example.com', 'Brgy. San Roque, Santo Tomas, Batangas'),
(16, 'Carmen Santos', '1994-07-07', 29, 'Female', '0918-6789012', 'carmen.santos@example.com', 'Brgy. Tulo, Santo Tomas, Batangas'),
(17, 'Felipe Navarro', '1979-06-18', 44, 'Male', '0918-7890123', 'felipe.navarro@example.com', 'Brgy. San Antonio, Santo Tomas, Batangas'),
(18, 'Isabel Reyes', '1983-09-20', 41, 'Female', '0918-8901234', 'isabel.reyes@example.com', 'Brgy. San Bartolome, Tanauan City, Batangas'),
(19, 'Roberto Diaz', '1986-01-30', 38, 'Male', '0919-0123456', 'roberto.diaz@example.com', 'Brgy. Poblacion, Tanauan City, Batangas'),
(20, 'Maricel Cruz', '1993-04-12', 31, 'Female', '0919-1234567', 'maricel.cruz@example.com', 'Brgy. Balele, Tanauan City, Batangas'),
(21, 'Antonio Mendoza', '1981-07-19', 42, 'Male', '0919-2345678', 'antonio.mendoza@example.com', 'Brgy. Darasa, Tanauan City, Batangas'),
(22, 'Luisa Torres', '1995-11-22', 28, 'Female', '0919-3456789', 'luisa.torres@example.com', 'Brgy. Sambat, Tanauan City, Batangas'),
(23, 'Renato Santos', '1978-03-17', 46, 'Male', '0919-4567890', 'renato.santos@example.com', 'Brgy. Talisay, Tanauan City, Batangas'),
(24, 'Margarita Villanueva', '1989-09-01', 34, 'Female', '0919-5678901', 'margarita.villanueva@example.com', 'Brgy. Malvar, Tanauan City, Batangas'),
(25, 'Alfredo Navarro', '1982-05-12', 42, 'Male', '0919-6789012', 'alfredo.navarro@example.com', 'Brgy. Pantay Bata, Tanauan City, Batangas'),
(26, 'Rosa Cruz', '1994-02-27', 30, 'Female', '0919-7890123', 'rosa.cruz@example.com', 'Brgy. Pantay Matanda, Tanauan City, Batangas'),
(27, 'Julio Reyes', '1983-10-15', 40, 'Male', '0919-8901234', 'julio.reyes@example.com', 'Brgy. Wawa, Tanauan City, Batangas'),
(28, 'Nina Diaz', '1987-12-09', 36, 'Female', '0920-0123456', 'nina.diaz@example.com', 'Brgy. Sta. Maria, Santo Tomas, Batangas'),
(29, 'Alberto Santos', '1990-03-23', 34, 'Male', '0920-1234567', 'alberto.santos@example.com', 'Brgy. Sto. Tomas, Sto. Tomas, Batangas'),
(30, 'Clarita Mendoza', '1996-07-11', 27, 'Female', '0920-2345678', 'clarita.mendoza@example.com', 'Brgy. Sta. Anastacia, Sto. Tomas, Batangas'),
(31, 'Emilio Villanueva', '1985-11-06', 38, 'Male', '0920-3456789', 'emilio.villanueva@example.com', 'Brgy. Sta. Teresita, Sto. Tomas, Batangas'),
(32, 'Isabel Ramos', '1992-04-18', 32, 'Female', '0920-4567890', 'isabel.ramos@example.com', 'Brgy. Sto. Cristo, Sto. Tomas, Batangas'),
(33, 'Gregorio Cruz', '1983-08-25', 41, 'Male', '0920-5678901', 'gregorio.cruz@example.com', 'Brgy. San Fernando, Sto. Tomas, Batangas'),
(34, 'Luz Santos', '1994-10-19', 29, 'Female', '0920-6789012', 'luz.santos@example.com', 'Brgy. San Gabriel, Sto. Tomas, Batangas'),
(35, 'Santiago Mendoza', '1979-06-30', 44, 'Male', '0920-7890123', 'santiago.mendoza@example.com', 'Brgy. San Juan, Sto. Tomas, Batangas'),
(36, 'Marilyn Villanueva', '1987-01-10', 37, 'Female', '0920-8901234', 'marilyn.villanueva@example.com', 'Brgy. San Miguel, Sto. Tomas, Batangas'),
(37, 'Ernesto Navarro', '1984-03-22', 40, 'Male', '0921-0123456', 'ernesto.navarro@example.com', 'Brgy. San Rafael, Sto. Tomas, Batangas'),
(38, 'Aurora Cruz', '1991-05-14', 33, 'Female', '0921-1234567', 'aurora.cruz@example.com', 'Brgy. San Roque, Lipa City, Batangas'),
(39, 'Gabriel Reyes', '1980-09-27', 43, 'Male', '0921-2345678', 'gabriel.reyes@example.com', 'Brgy. San Isidro, Lipa City, Batangas'),
(40, 'Cristina Santos', '1996-03-08', 28, 'Female', '0921-3456789', 'cristina.santos@example.com', 'Brgy. San Jose, Lipa City, Batangas'),
(41, 'Fernando Garcia', '1988-07-21', 35, 'Male', '0921-4567890', 'fernando.garcia@example.com', 'Brgy. San Miguel, Lipa City, Batangas'),
(42, 'Angelica Mendoza', '1983-11-04', 40, 'Female', '0921-5678901', 'angelica.mendoza@example.com', 'Brgy. San Rafael, Lipa City, Batangas'),
(43, 'Rodrigo Torres', '1990-02-16', 32, 'Male', '0921-6789012', 'rodrigo.torres@example.com', 'Brgy. San Antonio, Lipa City, Batangas'),
(44, 'Diana Reyes', '1985-12-29', 37, 'Female', '0921-7890123', 'diana.reyes@example.com', 'Brgy. San Vicente, Lipa City, Batangas'),
(45, 'Mario Cruz', '1977-08-11', 46, 'Male', '0921-8901234', 'mario.cruz@example.com', 'Brgy. San Pablo, Lipa City, Batangas'),
(46, 'Lorena Santos', '1993-06-23', 28, 'Female', '0922-0123456', 'lorena.santos@example.com', 'Brgy. San Juan, Lipa City, Batangas'),
(47, 'Victor Navarro', '1981-01-07', 41, 'Male', '0922-1234567', 'victor.navarro@example.com', 'Brgy. San Pedro, Lipa City, Batangas'),
(48, 'Esther Garcia', '1987-04-30', 34, 'Female', '0922-2345678', 'esther.garcia@example.com', 'Brgy. San Antonio, Lipa City, Batangas'),
(49, 'Arnold Mendoza', '1980-10-18', 43, 'Male', '0922-3456789', 'arnold.mendoza@example.com', 'Brgy. San Francisco, Lipa City, Batangas'),
(50, 'Regina Reyes', '1997-07-02', 26, 'Female', '0922-4567890', 'regina.reyes@example.com', 'Brgy. San Roque, Lipa City, Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `dentist`
--

CREATE TABLE `dentist` (
  `DentistID` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Specialization` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dentist`
--

INSERT INTO `dentist` (`DentistID`, `FullName`, `Specialization`, `ContactNo`, `Email`) VALUES
(1, 'Dr. Anne Karla Gelline G. Holgado', 'General Dentistry', '0912-3456789', 'karlaholgado@sample.com'),
(2, 'Dr. Juanito Dela Cruz', 'Orthodontist', '0917-1234567', 'dr.juanito@gmail.com'),
(3, 'Dr. Maria Santos', 'Pediatric Dentist', '0917-2345678', 'dr.maria@gmail.com'),
(4, 'Dr. Jose Garcia', 'Endodontist', '0917-3456789', 'dr.jose@gmail.com'),
(5, 'Dr. Ana Reyes', 'Oral Surgeon', '0917-4567890', 'dr.ana@gmail.com'),
(6, 'Dr. Carlos Bautista', 'Periodontist', '0917-5678901', 'dr.carlos@gmail.com'),
(7, 'Dr. Luisa Torres', 'Prosthodontist', '0917-6789012', 'dr.luisa@gmail.com'),
(8, 'Dr. Ramon Mendoza', 'Dental Public Health Specialist', '0917-7890123', 'dr.ramon@gmail.com'),
(9, 'Dr. Gloria Cruz', 'Pediatric Dentist', '0917-8901234', 'dr.gloria@gmail.com'),
(10, 'Dr. Pedro Alvarez', 'Orthodontist', '0917-9012345', 'dr.pedro@gmail.com'),
(11, 'Dr. Rosa Diaz', 'Endodontist', '0917-0123456', 'dr.rosa@gmail.com'),
(12, 'Dr. Vicente Ramos', 'Oral Surgeon', '0918-1234567', 'dr.vicente@gmail.com'),
(13, 'Dr. Teresa Flores', 'Periodontist', '0918-2345678', 'dr.teresa@gmail.com'),
(14, 'Dr. Andres Villanueva', 'Prosthodontist', '0918-3456789', 'dr.andres@gmail.com'),
(15, 'Dr. Elena Cruz', 'Dental Public Health Specialist', '0918-4567890', 'dr.elena@gmail.com'),
(16, 'Dr. Manuel Morales', 'Orthodontist', '0918-5678901', 'dr.manuel@gmail.com'),
(17, 'Dr. Carmen Santos', 'Pediatric Dentist', '0918-6789012', 'dr.carmen@gmail.com'),
(18, 'Dr. Felipe Navarro', 'Endodontist', '0918-7890123', 'dr.felipe@gmail.com'),
(19, 'Dr. Isabel Reyes', 'Oral Surgeon', '0918-8901234', 'dr.isabel@gmail.com'),
(20, 'Dr. Roberto Diaz', 'Periodontist', '0919-0123456', 'dr.roberto@gmail.com'),
(21, 'Dr. Maricel Cruz', 'Prosthodontist', '0919-1234567', 'dr.maricel@gmail.com'),
(22, 'Dr. Antonio Mendoza', 'Dental Public Health Specialist', '0919-2345678', 'dr.antonio@gmail.com'),
(23, 'Dr. Luisa Torres', 'Orthodontist', '0919-3456789', 'dr.luisa2@gmail.com'),
(24, 'Dr. Renato Santos', 'Pediatric Dentist', '0919-4567890', 'dr.renato@gmail.com'),
(25, 'Dr. Margarita Villanueva', 'Endodontist', '0919-5678901', 'dr.margarita@gmail.com'),
(26, 'Dr. Alfredo Navarro', 'Oral Surgeon', '0919-6789012', 'dr.alfredo@gmail.com'),
(27, 'Dr. Rosa Cruz', 'Periodontist', '0919-7890123', 'dr.rosa2@gmail.com'),
(28, 'Dr. Julio Reyes', 'Prosthodontist', '0919-8901234', 'dr.julio@gmail.com'),
(29, 'Dr. Nina Diaz', 'Dental Public Health Specialist', '0920-0123456', 'dr.nina@gmail.com'),
(30, 'Dr. Alberto Santos', 'Orthodontist', '0920-1234567', 'dr.alberto@gmail.com'),
(31, 'Dr. Clarita Mendoza', 'Pediatric Dentist', '0920-2345678', 'dr.clarita@gmail.com'),
(32, 'Dr. Emilio Villanueva', 'Endodontist', '0920-3456789', 'dr.emilio@gmail.com'),
(33, 'Dr. Isabel Ramos', 'Oral Surgeon', '0920-4567890', 'dr.isabel2@gmail.com'),
(34, 'Dr. Gregorio Cruz', 'Periodontist', '0920-5678901', 'dr.gregorio@gmail.com'),
(35, 'Dr. Luz Santos', 'Prosthodontist', '0920-6789012', 'dr.luz@gmail.com'),
(36, 'Dr. Santiago Mendoza', 'Dental Public Health Specialist', '0920-7890123', 'dr.santiago@gmail.com'),
(37, 'Dr. Marilyn Villanueva', 'Orthodontist', '0920-8901234', 'dr.marilyn@gmail.com'),
(38, 'Dr. Ernesto Navarro', 'Pediatric Dentist', '0921-0123456', 'dr.ernesto@gmail.com'),
(39, 'Dr. Aurora Cruz', 'Endodontist', '0921-1234567', 'dr.aurora@gmail.com'),
(40, 'Dr. Gabriel Reyes', 'Oral Surgeon', '0921-2345678', 'dr.gabriel@gmail.com'),
(41, 'Dr. Cristina Santos', 'Periodontist', '0921-3456789', 'dr.cristina@gmail.com'),
(42, 'Dr. Fernando Garcia', 'Prosthodontist', '0921-4567890', 'dr.fernando@gmail.com'),
(43, 'Dr. Angelica Mendoza', 'Dental Public Health Specialist', '0921-5678901', 'dr.angelica@gmail.com'),
(44, 'Dr. Rodrigo Torres', 'Orthodontist', '0921-6789012', 'dr.rodrigo@gmail.com'),
(45, 'Dr. Diana Reyes', 'Pediatric Dentist', '0921-7890123', 'dr.diana@gmail.com'),
(46, 'Dr. Mario Cruz', 'Endodontist', '0921-8901234', 'dr.mario@gmail.com'),
(47, 'Dr. Lorena Santos', 'Oral Surgeon', '0922-0123456', 'dr.lorena@gmail.com'),
(48, 'Dr. Victor Navarro', 'Periodontist', '0922-1234567', 'dr.victor@gmail.com'),
(49, 'Dr. Esther Garcia', 'Prosthodontist', '0922-2345678', 'dr.esther@gmail.com'),
(50, 'Dr. Genevie Cruz', 'General Dentistry', '0998-7654321', 'dr.genevie@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `ServName` varchar(100) DEFAULT NULL,
  `ServDescription` text DEFAULT NULL,
  `ServCategory` varchar(100) DEFAULT NULL,
  `ServFee` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `ServName`, `ServDescription`, `ServCategory`, `ServFee`) VALUES
(1, 'Oral Prophylaxis', 'Oral prophylaxis is a thorough examination of your oral health combined with a scale and clean and can be conducted by a dentist or a dental hygienist.', 'Preventive Dentistry', 450.00),
(2, 'Consultation', 'Dental consultation is the very first step of every dental treatment. It is the first interaction between you and your dentist where you may describe your oral problems, symptoms, and the severity of discomfort and pain.', 'General Dentistry', 200.00),
(3, 'Tooth Filling', 'Dental filling is used to repair minor fractures or decay in the teeth, as a form of restorative dental treatment', 'Restorative Dentistry', 300.00),
(4, 'Tooth Extraction', 'Tooth extraction may be necessary for many reasons, including severe damage or decay. One of the most common dental procedures, a tooth extraction can eliminate bacteria and improve your overall oral health.', 'Oral Surgery', 400.00),
(5, 'Dentures', 'Dentures are prosthetic devices constructed to replace missing teeth, supported by the surrounding soft and hard tissues of the oral cavity. Conventional dentures are removable.', 'Prosthodontics', 500.00),
(6, 'Crowns and Bridges', 'Bridges are cemented to the natural teeth or implants surrounding the empty space. These teeth, called abutments, serve as anchors for the bridge.', 'Prosthodontics', 600.00),
(7, 'Orthodontic Treatment', 'Orthodontic treatments are dental procedures that help to straighten your teeth and correct problems with your bite. You might need orthodontic treatment for many reasons. The orthodontist will examine your mouth and face, and take x-rays, or make plaster or digital models of your teeth.', 'Orthodontics', 700.00),
(8, 'Oral Surgery', 'Oral surgery is a surgical procedure performed in or around your mouth and jaw, usually by a dental specialist who\'s trained to perform certain kinds of oral surgeries.', 'Oral Surgery', 800.00),
(9, 'Bleaching Teeth Whitening', 'Teeth whitening involves bleaching your teeth to lighten the colour of the enamel.', 'Cosmetic Dentistry', 900.00),
(10, 'Veneers', 'Veneer is a layer of material placed over a tooth. Veneers can improve the aesthetics and function of a smile and protect the tooth\'s surface from damage.', 'Cosmetic Dentistry', 1000.00),
(11, 'Dental Cleaning', 'Removal of plaque and tartar from teeth surfaces', 'Preventive Dentistry', 800.00),
(12, 'X-Ray Examination', 'Diagnostic imaging for dental conditions', 'General Dentistry', 1000.00),
(13, 'Composite Filling', 'Tooth-colored filling material for cavities', 'Restorative Dentistry', 1500.00),
(14, 'Simple Extraction', 'Removal of a tooth without surgical intervention', 'Oral Surgery', 2000.00),
(15, 'Complete Dentures', 'Removable prosthetic devices for edentulous patients', 'Prosthodontics', 10000.00),
(16, 'Porcelain Crown', 'Artificial tooth cap made from porcelain material', 'Prosthodontics', 5000.00),
(17, 'Fixed Bridge', 'Fixed prosthetic device to replace missing teeth', 'Prosthodontics', 8000.00),
(18, 'Braces Installation', 'Placement of orthodontic braces to straighten teeth', 'Orthodontics', 25000.00),
(19, 'Wisdom Tooth Extraction', 'Surgical removal of impacted wisdom teeth', 'Oral Surgery', 3000.00),
(20, 'Teeth Whitening Treatment', 'Professional teeth bleaching for whiter smile', 'Cosmetic Dentistry', 5000.00),
(21, 'Dental Implant Surgery', 'Surgical procedure to place dental implants', 'Oral Surgery', 35000.00),
(22, 'Root Canal Therapy', 'Treatment to remove infected pulp from tooth', 'Endodontics', 7000.00),
(23, 'Partial Dentures', 'Removable prosthetic devices for partial tooth loss', 'Prosthodontics', 8000.00),
(24, 'Porcelain Veneers', 'Thin shells of porcelain to cover tooth imperfections', 'Cosmetic Dentistry', 6000.00),
(25, 'Gum Disease Treatment', 'Treatment for periodontal disease and gingivitis', 'Periodontics', 3000.00),
(26, 'Night Guard Fabrication', 'Custom-made oral appliance to prevent teeth grinding', 'General Dentistry', 3000.00),
(27, 'Dental Sealants', 'Protective coating applied to chewing surfaces of teeth', 'Preventive Dentistry', 1500.00),
(28, 'Cavity Restoration', 'Filling material used to restore decayed tooth structure', 'Restorative Dentistry', 2000.00),
(29, 'Dental Crown Repair', 'Restoration of damaged or broken dental crowns', 'Restorative Dentistry', 2500.00),
(30, 'Dental Bridge Repair', 'Repair of damaged or broken dental bridges', 'Restorative Dentistry', 3000.00),
(31, 'Invisalign Treatment', 'Clear aligner therapy for teeth straightening', 'Orthodontics', 35000.00),
(32, 'Tooth Reshaping', 'Contouring and reshaping of tooth structure', 'Cosmetic Dentistry', 2500.00),
(33, 'Teeth Cleaning and Polishing', 'Professional cleaning and polishing of teeth surfaces', 'Preventive Dentistry', 1000.00),
(34, 'Dental Exam and Consultation', 'Comprehensive dental examination and consultation', 'General Dentistry', 1500.00),
(35, 'Dental Implant Restoration', 'Restoration of dental implants with prosthetic components', 'Prosthodontics', 5000.00),
(36, 'Gingivectomy', 'Surgical removal of gum tissue for treatment of gum disease', 'Periodontics', 4000.00),
(37, 'Tooth Bonding', 'Application of tooth-colored composite resin for cosmetic purposes', 'Cosmetic Dentistry', 3000.00),
(38, 'Root Canal Retreatment', 'Retreatment of a previous root canal therapy', 'Endodontics', 8000.00),
(39, 'Fluoride Treatment', 'Application of fluoride varnish to strengthen tooth enamel', 'Preventive Dentistry', 1500.00),
(40, 'Dental Crown Lengthening', 'Surgical procedure to expose more tooth structure for crown placement', 'Cosmetic Dentistry', 5000.00),
(41, 'Dental Implant Crown', 'Placement of crown on top of dental implant', 'Prosthodontics', 6000.00),
(42, 'Tooth Extrusion', 'Orthodontic procedure to move a tooth out of its socket', 'Orthodontics', 3000.00),
(43, 'Dental Bridge Fabrication', 'Fabrication of dental bridge to replace missing teeth', 'Prosthodontics', 10000.00),
(44, 'Tooth Re-implantation', 'Surgical re-insertion of a tooth back into its socket', 'Oral Surgery', 4000.00),
(45, 'Dental Bone Grafting', 'Surgical procedure to augment bone volume for dental implants', 'Oral Surgery', 12000.00),
(46, 'Apicoectomy', 'Surgical removal of the tip of a tooth root', 'Endodontics', 8000.00),
(47, 'Dental Inlay', 'Custom-made restoration fitted into the tooth cavity', 'Restorative Dentistry', 4000.00),
(48, 'Dental Onlay', 'Custom-made restoration covering one or more tooth cusps', 'Restorative Dentistry', 5000.00),
(49, 'Laser Dentistry Treatment', 'Dental procedures performed using laser technology', 'General Dentistry', 3000.00),
(50, 'Tooth Contouring', 'Reshaping of tooth enamel for cosmetic enhancement', 'Cosmetic Dentistry', 2000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `ClientID` (`ClientID`),
  ADD KEY `DentistID` (`DentistID`);

--
-- Indexes for table `clientrecord`
--
ALTER TABLE `clientrecord`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `dentist`
--
ALTER TABLE `dentist`
  ADD PRIMARY KEY (`DentistID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `clientrecord`
--
ALTER TABLE `clientrecord`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `dentist`
--
ALTER TABLE `dentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`ServiceID`) REFERENCES `services` (`ServiceID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`ClientID`) REFERENCES `clientrecord` (`ClientID`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`DentistID`) REFERENCES `dentist` (`DentistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
