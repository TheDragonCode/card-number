<?php

declare(strict_types=1);

it('is like a id', function () {
    isInvalid(11);
    isInvalid(21);
    isInvalid(31);
    isInvalid(41);
    isInvalid(51);
    isInvalid(61);
    isInvalid(71);
    isInvalid(81);
    isInvalid(90);

    isInvalid(101);
    isInvalid(111);
    isInvalid(121);
    isInvalid(131);
    isInvalid(140);
    isInvalid(151);
    isInvalid(161);
    isInvalid(171);
    isInvalid(181);
    isInvalid(191);

    isInvalid(201);
    isInvalid(211);
    isInvalid(221);
    isInvalid(231);
    isInvalid(241);
    isInvalid(251);
    isInvalid(261);
    isInvalid(271);
    isInvalid(280);
    isInvalid(291);

    isInvalid(301);
    isInvalid(311);
    isInvalid(321);
    isInvalid(330);
    isInvalid(341);
    isInvalid(351);
    isInvalid(361);
    isInvalid(371);
    isInvalid(381);
    isInvalid(391);

    isInvalid(401);
    isInvalid(411);
    isInvalid(421);
    isInvalid(431);
    isInvalid(441);
    isInvalid(451);
    isInvalid(461);
    isInvalid(470);
    isInvalid(481);
    isInvalid(491);

    isInvalid(501);
    isInvalid(511);
    isInvalid(520);
    isInvalid(531);
    isInvalid(541);
    isInvalid(551);
    isInvalid(561);
    isInvalid(571);
    isInvalid(581);
    isInvalid(591);

    isInvalid(601);
    isInvalid(611);
    isInvalid(621);
    isInvalid(631);
    isInvalid(641);
    isInvalid(651);
    isInvalid(660);
    isInvalid(671);
    isInvalid(681);
    isInvalid(691);

    isInvalid(701);
    isInvalid(710);
    isInvalid(721);
    isInvalid(731);
    isInvalid(741);
    isInvalid(751);
    isInvalid(761);
    isInvalid(771);
    isInvalid(781);
    isInvalid(791);

    isInvalid(801);
    isInvalid(811);
    isInvalid(821);
    isInvalid(831);
    isInvalid(841);
    isInvalid(850);
    isInvalid(861);
    isInvalid(871);
    isInvalid(881);
    isInvalid(891);

    isInvalid(900);
    isInvalid(911);
    isInvalid(921);
    isInvalid(931);
    isInvalid(941);
    isInvalid(951);
    isInvalid(961);
    isInvalid(971);
    isInvalid(981);
    isInvalid(991);

    isInvalid(1001);
    isInvalid(1011);
    isInvalid(1021);
    isInvalid(1031);
    isInvalid(1041);
    isInvalid(1051);
    isInvalid(1061);
    isInvalid(1071);
    isInvalid(1080);
    isInvalid(1091);

    isInvalid(2001);
    isInvalid(2011);
    isInvalid(2021);
    isInvalid(2031);
    isInvalid(2041);
    isInvalid(2051);
    isInvalid(2061);
    isInvalid(2070);
    isInvalid(2081);
    isInvalid(2091);

    isInvalid(3001);
    isInvalid(3011);
    isInvalid(3021);
    isInvalid(3031);
    isInvalid(3041);
    isInvalid(3051);
    isInvalid(3060);
    isInvalid(3071);
    isInvalid(3081);
    isInvalid(3091);

    isInvalid(4001);
    isInvalid(4011);
    isInvalid(4021);
    isInvalid(4031);
    isInvalid(4041);
    isInvalid(4050);
    isInvalid(4061);
    isInvalid(4071);
    isInvalid(4081);
    isInvalid(4091);

    isInvalid(5001);
    isInvalid(5011);
    isInvalid(5021);
    isInvalid(5031);
    isInvalid(5040);
    isInvalid(5051);
    isInvalid(5061);
    isInvalid(5071);
    isInvalid(5081);
    isInvalid(5091);

    isInvalid(6001);
    isInvalid(6011);
    isInvalid(6021);
    isInvalid(6030);
    isInvalid(6041);
    isInvalid(6051);
    isInvalid(6061);
    isInvalid(6071);
    isInvalid(6081);
    isInvalid(6091);

    isInvalid(7001);
    isInvalid(7011);
    isInvalid(7020);
    isInvalid(7031);
    isInvalid(7041);
    isInvalid(7051);
    isInvalid(7061);
    isInvalid(7071);
    isInvalid(7081);
    isInvalid(7091);

    isInvalid(8001);
    isInvalid(8010);
    isInvalid(8021);
    isInvalid(8031);
    isInvalid(8041);
    isInvalid(8051);
    isInvalid(8061);
    isInvalid(8071);
    isInvalid(8081);
    isInvalid(8091);

    isInvalid(9000);
    isInvalid(9011);
    isInvalid(9021);
    isInvalid(9031);
    isInvalid(9041);
    isInvalid(9051);
    isInvalid(9061);
    isInvalid(9071);
    isInvalid(9081);
    isInvalid(9091);
});

it('is like a number', function () {
    isInvalid(5580473372024734);
    isInvalid(5293911436785558);
    isInvalid(5423567624690027);
    isInvalid(5267630933267660);
    isInvalid(5583400525059736);
    isInvalid(5222683807202630);
    isInvalid(5283061965333347);
    isInvalid(5466875184434134);
    isInvalid(5268234205041959);
    isInvalid(5489490943903792);
    isInvalid(5172179202570473);
    isInvalid(5167817362045151);
    isInvalid(5448620009618385);
    isInvalid(5592660911726557);
    isInvalid(5357480274096887);
    isInvalid(5306780111805162);
    isInvalid(5327216952691739);
    isInvalid(5420231329880838);
    isInvalid(5229611330387050);
    isInvalid(5512393585553381);
    isInvalid(5333435711061503);
    isInvalid(5438741593414502);
    isInvalid(5356260194033189);
    isInvalid(5254107359532989);
    isInvalid(5260601197796469);
    isInvalid(5584287091673571);

    isInvalid(5584073372024733);
    isInvalid(5299311436785557);
    isInvalid(5425367624690026);
    isInvalid(5266730933267669);
    isInvalid(5584300525059735);
    isInvalid(5226283807202639);
    isInvalid(5280361965333346);
    isInvalid(5468675184434133);
    isInvalid(5262834205041958);
    isInvalid(5484990943903791);
    isInvalid(5171279202570472);
    isInvalid(5168717362045150);
    isInvalid(5446820009618384);
    isInvalid(5596260911726556);
    isInvalid(5354780274096884);
    isInvalid(5307680111805161);
    isInvalid(5322716952691738);
    isInvalid(5422031329880837);
    isInvalid(5226911330387059);
    isInvalid(5513293585553380);
    isInvalid(5334335711061502);
    isInvalid(5437841593414501);
    isInvalid(5352660194033188);
    isInvalid(5251407359532988);
    isInvalid(5266001197796468);
    isInvalid(5582487091673570);
});

it('is like a string number', function () {
    isInvalid('00');

    isInvalid('5580-4733x7202_47 34');
    isInvalid('5293-9114x3678_55 58');
    isInvalid('5423-5676x2469_00 27');
    isInvalid('5267-6309x3326_76 60');
    isInvalid('5583-4005x2505_97 36');
    isInvalid('5222-6838x0720_26 30');
    isInvalid('5283-0619x6533_33 47');
    isInvalid('5466-8751x8443_41 34');
    isInvalid('5268-2342x0504_19 59');
    isInvalid('5489-4909x4390_37 92');
    isInvalid('5172-1792x0257_04 73');
    isInvalid('5167-8173x6204_51 51');
    isInvalid('5448-6200x0961_83 85');
    isInvalid('5592-6609x1172_65 57');
    isInvalid('5357-4802x7409_68 87');
    isInvalid('5306-7801x1180_51 62');
    isInvalid('5327-2169x5269_17 39');
    isInvalid('5420-2313x2988_08 38');
    isInvalid('5229-6113x3038_70 50');
    isInvalid('5512-3935x8555_33 81');
    isInvalid('5333-4357x1106_15 03');
    isInvalid('5438-7415x9341_45 02');
    isInvalid('5356-2601x9403_31 89');
    isInvalid('5254-1073x5953_29 89');
    isInvalid('5260-6011x9779_64 69');
    isInvalid('5584-2870x9167_35 71');

    isInvalid('5584-0733x7202_47 33');
    isInvalid('5299-3114x3678_55 57');
    isInvalid('5425-3676x2469_00 26');
    isInvalid('5266-7309x3326_76 69');
    isInvalid('5584-3005x2505_97 35');
    isInvalid('5226-2838x0720_26 39');
    isInvalid('5280-3619x6533_33 46');
    isInvalid('5468-6751x8443_41 33');
    isInvalid('5262-8342x0504_19 58');
    isInvalid('5484-9909x4390_37 91');
    isInvalid('5171-2792x0257_04 72');
    isInvalid('5168-7173x6204_51 50');
    isInvalid('5446-8200x0961_83 84');
    isInvalid('5596-2609x1172_65 56');
    isInvalid('5354-7802x7409_68 84');
    isInvalid('5307-6801x1180_51 61');
    isInvalid('5322-7169x5269_17 38');
    isInvalid('5422-0313x2988_08 37');
    isInvalid('5226-9113x3038_70 59');
    isInvalid('5513-2935x8555_33 80');
    isInvalid('5334-3357x1106_15 02');
    isInvalid('5437-8415x9341_45 01');
    isInvalid('5352-6601x9403_31 88');
    isInvalid('5251-4073x5953_29 88');
    isInvalid('5266-0011x9779_64 68');
    isInvalid('5582-4870x9167_35 70');
});
