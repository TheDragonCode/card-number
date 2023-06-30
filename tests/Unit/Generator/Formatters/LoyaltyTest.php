<?php

declare(strict_types=1);

use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

it('must be valid up to 99', function () {
    $formatter = new LoyaltyFormatter();

    generatedEquals(1, '0018', $formatter);
    generatedEquals(2, '0026', $formatter);
    generatedEquals(3, '0034', $formatter);
    generatedEquals(4, '0042', $formatter);
    generatedEquals(5, '0059', $formatter);
    generatedEquals(6, '0067', $formatter);
    generatedEquals(7, '0075', $formatter);
    generatedEquals(8, '0083', $formatter);
    generatedEquals(9, '0091', $formatter);

    generatedEquals(10, '0109', $formatter);
    generatedEquals(11, '0117', $formatter);
    generatedEquals(12, '0125', $formatter);
    generatedEquals(13, '0133', $formatter);
    generatedEquals(14, '0141', $formatter);
    generatedEquals(15, '0158', $formatter);
    generatedEquals(16, '0166', $formatter);
    generatedEquals(17, '0174', $formatter);
    generatedEquals(18, '0182', $formatter);
    generatedEquals(19, '0190', $formatter);

    generatedEquals(20, '0208', $formatter);
    generatedEquals(21, '0216', $formatter);
    generatedEquals(22, '0224', $formatter);
    generatedEquals(23, '0232', $formatter);
    generatedEquals(24, '0240', $formatter);
    generatedEquals(25, '0257', $formatter);
    generatedEquals(26, '0265', $formatter);
    generatedEquals(27, '0273', $formatter);
    generatedEquals(28, '0281', $formatter);
    generatedEquals(29, '0299', $formatter);

    generatedEquals(30, '0307', $formatter);
    generatedEquals(31, '0315', $formatter);
    generatedEquals(32, '0323', $formatter);
    generatedEquals(33, '0331', $formatter);
    generatedEquals(34, '0349', $formatter);
    generatedEquals(35, '0356', $formatter);
    generatedEquals(36, '0364', $formatter);
    generatedEquals(37, '0372', $formatter);
    generatedEquals(38, '0380', $formatter);
    generatedEquals(39, '0398', $formatter);

    generatedEquals(40, '0406', $formatter);
    generatedEquals(41, '0414', $formatter);
    generatedEquals(42, '0422', $formatter);
    generatedEquals(43, '0430', $formatter);
    generatedEquals(44, '0448', $formatter);
    generatedEquals(45, '0455', $formatter);
    generatedEquals(46, '0463', $formatter);
    generatedEquals(47, '0471', $formatter);
    generatedEquals(48, '0489', $formatter);
    generatedEquals(49, '0497', $formatter);

    generatedEquals(50, '0505', $formatter);
    generatedEquals(51, '0513', $formatter);
    generatedEquals(52, '0521', $formatter);
    generatedEquals(53, '0539', $formatter);
    generatedEquals(54, '0547', $formatter);
    generatedEquals(55, '0554', $formatter);
    generatedEquals(56, '0562', $formatter);
    generatedEquals(57, '0570', $formatter);
    generatedEquals(58, '0588', $formatter);
    generatedEquals(59, '0596', $formatter);

    generatedEquals(60, '0604', $formatter);
    generatedEquals(61, '0612', $formatter);
    generatedEquals(62, '0620', $formatter);
    generatedEquals(63, '0638', $formatter);
    generatedEquals(64, '0646', $formatter);
    generatedEquals(65, '0653', $formatter);
    generatedEquals(66, '0661', $formatter);
    generatedEquals(67, '0679', $formatter);
    generatedEquals(68, '0687', $formatter);
    generatedEquals(69, '0695', $formatter);

    generatedEquals(70, '0703', $formatter);
    generatedEquals(71, '0711', $formatter);
    generatedEquals(72, '0729', $formatter);
    generatedEquals(73, '0737', $formatter);
    generatedEquals(74, '0745', $formatter);
    generatedEquals(75, '0752', $formatter);
    generatedEquals(76, '0760', $formatter);
    generatedEquals(77, '0778', $formatter);
    generatedEquals(78, '0786', $formatter);
    generatedEquals(79, '0794', $formatter);

    generatedEquals(80, '0802', $formatter);
    generatedEquals(81, '0810', $formatter);
    generatedEquals(82, '0828', $formatter);
    generatedEquals(83, '0836', $formatter);
    generatedEquals(84, '0844', $formatter);
    generatedEquals(85, '0851', $formatter);
    generatedEquals(86, '0869', $formatter);
    generatedEquals(87, '0877', $formatter);
    generatedEquals(88, '0885', $formatter);
    generatedEquals(89, '0893', $formatter);

    generatedEquals(90, '0901', $formatter);
    generatedEquals(91, '0919', $formatter);
    generatedEquals(92, '0927', $formatter);
    generatedEquals(93, '0935', $formatter);
    generatedEquals(94, '0943', $formatter);
    generatedEquals(95, '0950', $formatter);
    generatedEquals(96, '0968', $formatter);
    generatedEquals(97, '0976', $formatter);
    generatedEquals(98, '0984', $formatter);
    generatedEquals(99, '0992', $formatter);
});

it('must be valid between 100 and 999', function () {
    $formatter = new LoyaltyFormatter();

    generatedEquals(100, '1008', $formatter);
    generatedEquals(101, '1016', $formatter);
    generatedEquals(102, '1024', $formatter);
    generatedEquals(103, '1032', $formatter);
    generatedEquals(104, '1040', $formatter);
    generatedEquals(105, '1057', $formatter);
    generatedEquals(106, '1065', $formatter);
    generatedEquals(107, '1073', $formatter);
    generatedEquals(108, '1081', $formatter);
    generatedEquals(109, '1099', $formatter);

    generatedEquals(200, '2006', $formatter);
    generatedEquals(201, '2014', $formatter);
    generatedEquals(202, '2022', $formatter);
    generatedEquals(203, '2030', $formatter);
    generatedEquals(204, '2048', $formatter);
    generatedEquals(205, '2055', $formatter);
    generatedEquals(206, '2063', $formatter);
    generatedEquals(207, '2071', $formatter);
    generatedEquals(208, '2089', $formatter);
    generatedEquals(209, '2097', $formatter);

    generatedEquals(300, '3004', $formatter);
    generatedEquals(301, '3012', $formatter);
    generatedEquals(302, '3020', $formatter);
    generatedEquals(303, '3038', $formatter);
    generatedEquals(304, '3046', $formatter);
    generatedEquals(305, '3053', $formatter);
    generatedEquals(306, '3061', $formatter);
    generatedEquals(307, '3079', $formatter);
    generatedEquals(308, '3087', $formatter);
    generatedEquals(309, '3095', $formatter);

    generatedEquals(400, '4002', $formatter);
    generatedEquals(401, '4010', $formatter);
    generatedEquals(402, '4028', $formatter);
    generatedEquals(403, '4036', $formatter);
    generatedEquals(404, '4044', $formatter);
    generatedEquals(405, '4051', $formatter);
    generatedEquals(406, '4069', $formatter);
    generatedEquals(407, '4077', $formatter);
    generatedEquals(408, '4085', $formatter);
    generatedEquals(409, '4093', $formatter);

    generatedEquals(500, '5009', $formatter);
    generatedEquals(501, '5017', $formatter);
    generatedEquals(502, '5025', $formatter);
    generatedEquals(503, '5033', $formatter);
    generatedEquals(504, '5041', $formatter);
    generatedEquals(505, '5058', $formatter);
    generatedEquals(506, '5066', $formatter);
    generatedEquals(507, '5074', $formatter);
    generatedEquals(508, '5082', $formatter);
    generatedEquals(509, '5090', $formatter);

    generatedEquals(600, '6007', $formatter);
    generatedEquals(601, '6015', $formatter);
    generatedEquals(602, '6023', $formatter);
    generatedEquals(603, '6031', $formatter);
    generatedEquals(604, '6049', $formatter);
    generatedEquals(605, '6056', $formatter);
    generatedEquals(606, '6064', $formatter);
    generatedEquals(607, '6072', $formatter);
    generatedEquals(608, '6080', $formatter);
    generatedEquals(609, '6098', $formatter);

    generatedEquals(700, '7005', $formatter);
    generatedEquals(701, '7013', $formatter);
    generatedEquals(702, '7021', $formatter);
    generatedEquals(703, '7039', $formatter);
    generatedEquals(704, '7047', $formatter);
    generatedEquals(705, '7054', $formatter);
    generatedEquals(706, '7062', $formatter);
    generatedEquals(707, '7070', $formatter);
    generatedEquals(708, '7088', $formatter);
    generatedEquals(709, '7096', $formatter);

    generatedEquals(800, '8003', $formatter);
    generatedEquals(801, '8011', $formatter);
    generatedEquals(802, '8029', $formatter);
    generatedEquals(803, '8037', $formatter);
    generatedEquals(804, '8045', $formatter);
    generatedEquals(805, '8052', $formatter);
    generatedEquals(806, '8060', $formatter);
    generatedEquals(807, '8078', $formatter);
    generatedEquals(808, '8086', $formatter);
    generatedEquals(809, '8094', $formatter);

    generatedEquals(900, '9001', $formatter);
    generatedEquals(901, '9019', $formatter);
    generatedEquals(902, '9027', $formatter);
    generatedEquals(903, '9035', $formatter);
    generatedEquals(904, '9043', $formatter);
    generatedEquals(905, '9050', $formatter);
    generatedEquals(906, '9068', $formatter);
    generatedEquals(907, '9076', $formatter);
    generatedEquals(908, '9084', $formatter);
    generatedEquals(909, '9092', $formatter);
});

it('should separate 6 digits', function () {
    $formatter = new LoyaltyFormatter();

    generatedEquals(12345, '123-455', $formatter);
    generatedEquals(23456, '234-567', $formatter);
    generatedEquals(34567, '345-678', $formatter);
    generatedEquals(45678, '456-780', $formatter);
    generatedEquals(56789, '567-891', $formatter);
    generatedEquals(67890, '678-904', $formatter);
    generatedEquals(78901, '789-016', $formatter);
    generatedEquals(89012, '890-129', $formatter);
    generatedEquals(90123, '901-231', $formatter);
});

it('should separate 7 digits', function () {
    $formatter = new LoyaltyFormatter();

    generatedEquals(123456, '123-4566', $formatter);
    generatedEquals(234567, '234-5676', $formatter);
    generatedEquals(345678, '345-6787', $formatter);
    generatedEquals(456789, '456-7897', $formatter);
    generatedEquals(567890, '567-8909', $formatter);
    generatedEquals(678901, '678-9010', $formatter);
    generatedEquals(789012, '789-0122', $formatter);
    generatedEquals(890123, '890-1233', $formatter);
    generatedEquals(901234, '901-2345', $formatter);
});

it('should separate 10 digits', function () {
    $formatter = new LoyaltyFormatter();

    generatedEquals(123456123, '12-3456-1239', $formatter);
    generatedEquals(234567123, '23-4567-1230', $formatter);
    generatedEquals(345678123, '34-5678-1230', $formatter);
    generatedEquals(456789123, '45-6789-1231', $formatter);
    generatedEquals(567890123, '56-7890-1231', $formatter);
    generatedEquals(678901123, '67-8901-1233', $formatter);
    generatedEquals(789012123, '78-9012-1234', $formatter);
    generatedEquals(890123123, '89-0123-1236', $formatter);
    generatedEquals(901234123, '90-1234-1237', $formatter);
});
