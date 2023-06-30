<?php

declare(strict_types=1);

it('must be valid up to 99', function () {
    generatedEquals(1, '18');
    generatedEquals(2, '26');
    generatedEquals(3, '34');
    generatedEquals(4, '42');
    generatedEquals(5, '59');
    generatedEquals(6, '67');
    generatedEquals(7, '75');
    generatedEquals(8, '83');
    generatedEquals(9, '91');

    generatedEquals(10, '109');
    generatedEquals(11, '117');
    generatedEquals(12, '125');
    generatedEquals(13, '133');
    generatedEquals(14, '141');
    generatedEquals(15, '158');
    generatedEquals(16, '166');
    generatedEquals(17, '174');
    generatedEquals(18, '182');
    generatedEquals(19, '190');

    generatedEquals(20, '208');
    generatedEquals(21, '216');
    generatedEquals(22, '224');
    generatedEquals(23, '232');
    generatedEquals(24, '240');
    generatedEquals(25, '257');
    generatedEquals(26, '265');
    generatedEquals(27, '273');
    generatedEquals(28, '281');
    generatedEquals(29, '299');

    generatedEquals(30, '307');
    generatedEquals(31, '315');
    generatedEquals(32, '323');
    generatedEquals(33, '331');
    generatedEquals(34, '349');
    generatedEquals(35, '356');
    generatedEquals(36, '364');
    generatedEquals(37, '372');
    generatedEquals(38, '380');
    generatedEquals(39, '398');

    generatedEquals(40, '406');
    generatedEquals(41, '414');
    generatedEquals(42, '422');
    generatedEquals(43, '430');
    generatedEquals(44, '448');
    generatedEquals(45, '455');
    generatedEquals(46, '463');
    generatedEquals(47, '471');
    generatedEquals(48, '489');
    generatedEquals(49, '497');

    generatedEquals(50, '505');
    generatedEquals(51, '513');
    generatedEquals(52, '521');
    generatedEquals(53, '539');
    generatedEquals(54, '547');
    generatedEquals(55, '554');
    generatedEquals(56, '562');
    generatedEquals(57, '570');
    generatedEquals(58, '588');
    generatedEquals(59, '596');

    generatedEquals(60, '604');
    generatedEquals(61, '612');
    generatedEquals(62, '620');
    generatedEquals(63, '638');
    generatedEquals(64, '646');
    generatedEquals(65, '653');
    generatedEquals(66, '661');
    generatedEquals(67, '679');
    generatedEquals(68, '687');
    generatedEquals(69, '695');

    generatedEquals(70, '703');
    generatedEquals(71, '711');
    generatedEquals(72, '729');
    generatedEquals(73, '737');
    generatedEquals(74, '745');
    generatedEquals(75, '752');
    generatedEquals(76, '760');
    generatedEquals(77, '778');
    generatedEquals(78, '786');
    generatedEquals(79, '794');

    generatedEquals(80, '802');
    generatedEquals(81, '810');
    generatedEquals(82, '828');
    generatedEquals(83, '836');
    generatedEquals(84, '844');
    generatedEquals(85, '851');
    generatedEquals(86, '869');
    generatedEquals(87, '877');
    generatedEquals(88, '885');
    generatedEquals(89, '893');

    generatedEquals(90, '901');
    generatedEquals(91, '919');
    generatedEquals(92, '927');
    generatedEquals(93, '935');
    generatedEquals(94, '943');
    generatedEquals(95, '950');
    generatedEquals(96, '968');
    generatedEquals(97, '976');
    generatedEquals(98, '984');
    generatedEquals(99, '992');
});

it('must be valid between 100 and 999', function () {
    generatedEquals(100, '1008');
    generatedEquals(101, '1016');
    generatedEquals(102, '1024');
    generatedEquals(103, '1032');
    generatedEquals(104, '1040');
    generatedEquals(105, '1057');
    generatedEquals(106, '1065');
    generatedEquals(107, '1073');
    generatedEquals(108, '1081');
    generatedEquals(109, '1099');

    generatedEquals(200, '2006');
    generatedEquals(201, '2014');
    generatedEquals(202, '2022');
    generatedEquals(203, '2030');
    generatedEquals(204, '2048');
    generatedEquals(205, '2055');
    generatedEquals(206, '2063');
    generatedEquals(207, '2071');
    generatedEquals(208, '2089');
    generatedEquals(209, '2097');

    generatedEquals(300, '3004');
    generatedEquals(301, '3012');
    generatedEquals(302, '3020');
    generatedEquals(303, '3038');
    generatedEquals(304, '3046');
    generatedEquals(305, '3053');
    generatedEquals(306, '3061');
    generatedEquals(307, '3079');
    generatedEquals(308, '3087');
    generatedEquals(309, '3095');

    generatedEquals(400, '4002');
    generatedEquals(401, '4010');
    generatedEquals(402, '4028');
    generatedEquals(403, '4036');
    generatedEquals(404, '4044');
    generatedEquals(405, '4051');
    generatedEquals(406, '4069');
    generatedEquals(407, '4077');
    generatedEquals(408, '4085');
    generatedEquals(409, '4093');

    generatedEquals(500, '5009');
    generatedEquals(501, '5017');
    generatedEquals(502, '5025');
    generatedEquals(503, '5033');
    generatedEquals(504, '5041');
    generatedEquals(505, '5058');
    generatedEquals(506, '5066');
    generatedEquals(507, '5074');
    generatedEquals(508, '5082');
    generatedEquals(509, '5090');

    generatedEquals(600, '6007');
    generatedEquals(601, '6015');
    generatedEquals(602, '6023');
    generatedEquals(603, '6031');
    generatedEquals(604, '6049');
    generatedEquals(605, '6056');
    generatedEquals(606, '6064');
    generatedEquals(607, '6072');
    generatedEquals(608, '6080');
    generatedEquals(609, '6098');

    generatedEquals(700, '7005');
    generatedEquals(701, '7013');
    generatedEquals(702, '7021');
    generatedEquals(703, '7039');
    generatedEquals(704, '7047');
    generatedEquals(705, '7054');
    generatedEquals(706, '7062');
    generatedEquals(707, '7070');
    generatedEquals(708, '7088');
    generatedEquals(709, '7096');

    generatedEquals(800, '8003');
    generatedEquals(801, '8011');
    generatedEquals(802, '8029');
    generatedEquals(803, '8037');
    generatedEquals(804, '8045');
    generatedEquals(805, '8052');
    generatedEquals(806, '8060');
    generatedEquals(807, '8078');
    generatedEquals(808, '8086');
    generatedEquals(809, '8094');

    generatedEquals(900, '9001');
    generatedEquals(901, '9019');
    generatedEquals(902, '9027');
    generatedEquals(903, '9035');
    generatedEquals(904, '9043');
    generatedEquals(905, '9050');
    generatedEquals(906, '9068');
    generatedEquals(907, '9076');
    generatedEquals(908, '9084');
    generatedEquals(909, '9092');
});

it('must be valid in the loop', function () {
    $min = 1;
    $max = 9999;

    for ($i = $min; $i <= $max; $i++) {
        isValidGenerated($i);
    }
});
