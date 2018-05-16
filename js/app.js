var muniArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10927],
    [4451, "Uttwil", 1852],
    [4426, "Kesswil", 999],
    [4441, "Salmsach", 1411],
    [4411, "Egnach", 1692],
    [4401, "Arbon", 14430],
    [4421, "Horn", 2737],
    [4431, "Roggwil", 3056],
    [4461, "Amriswil", 13382],
    [4406, "Dozwil", 704],
    [4416, "Hefenhofen", 1187],
    [4446, "Sommeri", 565],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 1604],
    [4641, "Altnau", 2206],
    [4691, "Münsterlingen", 3444],
    [4643, "Bottighofen", 2164],
    [4671, "Kreuzlingen", 21795],
    [4681, "Langrickenbach", 1307],
    [4683, "Lengwil", 1709],
    [4666, "Kemmental", 2482],
    [4696, "Tägerwilen", 4602],
    [4651, "Gottlieben", 348],
    [4646, "Ermatingen", 3371],
    [4851, "Salenstein", 1271],
    [4846, "Raperswilen", 394],
    [4701, "Wäldi", 1049],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 1938],
    [4511, "Zihlschlacht-Sitterdorf", 2357],
    [4471, "Bischofszell", 5974],
    [4495, "Hohen-Tannen", 602],
    [4476, "Erlen", 3664],
    [4501, "Kradolf-Schönenberg", 3559],
    [4506, "Sulgen", 3744],
    [4911, "Bürglen", 3775],
    [4901, "Birwinken", 1350],
    [4891, "Berg", 3321],
    [4791, "Wuppenau", 1127],
    [4756, "Schönholzerswilen", 848],
    [4921, "Bussnang", 2313],
    [4946, "Weinfelden", 11338],
    [4941, "Märstetten", 2808],
    [4711, "Affeltrangen", 2558],
    [4881, "Amlikon-Bissegg",1328],
    [4951, "Wigoltingen", 2429],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 1213],
    [4591, "Matzingen", 2840],
    [4611, "Thundorf", 1451],
    [4566, "Frauenfeld", 25297],
    [4571, "Gachnang", 4269],
    [4590, "Hüttlingen", 834],
    [4561, "Felben-Wellhausen", 2790],
    [4831, "Müllheim", 2964],
    [4841, "Pfyn", 1992],
    [4621, "Warth-Weiningen", 1311],
    [4616, "Uessingen-Buch", 1092],
    [4601, "Neunforn", 1004],
    [4816, "Homburg", 1531],
    [4811, "Herdern", 1028],
    [4821, "Hüttwilen", 1709],
    [4801, "Berlingen", 907],
    [4864, "Steckborn", 3765],
    [4826, "Mammern", 648],
    [4806, "Eschenz", 1754],
    [4871, "Wagenhausen", 1647],
    [4545, "Diessenhofen", 3889],
    [4536, "Basadingen-Schlattingen", 1807],
    [4546, "Schlatt (TG)", 1669],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 2690],
    [4751, "Rickenbach (TG)", 2771],
    [4786, "Wilen (TG)", 2496],
    [4761, "Sirnach", 7703],
    [4724, "Eschlikon", 4300],
    [4721, "Bichelsee-Balterswil (Bi.)", 2835],
    [4746, "Münchwilen (TG)", 5538],
    [4781, "Wängi", 4648],
    [4551, "Aadorf", 8843],
    [4723, "Braunau", 770],
    [4776, "Tobel-Tägerschen", 1592],
    [4716, "Bettwiesen", 1239],
    [4741, "Lommis", 1223]
];
var sechArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10000],
    [4451, "Uttwil", 10000],
    [4426, "Kesswil", 10000],
    [4441, "Salmsach", 10000],
    [4411, "Egnach", 10000],
    [4401, "Arbon", 10000],
    [4421, "Horn", 10000],
    [4431, "Roggwil", 10000],
    [4461, "Amriswil", 10000],
    [4406, "Dozwil", 10000],
    [4416, "Hefenhofen", 10000],
    [4446, "Sommeri", 10000],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 5000],
    [4641, "Altnau", 4000],
    [4691, "Münsterlingen", 3000],
    [4643, "Bottighofen", 2000],
    [4671, "Kreuzlingen", 1000],
    [4681, "Langrickenbach", 8000],
    [4683, "Lengwil", 7000],
    [4666, "Kemmental", 6000],
    [4696, "Tägerwilen", 5000],
    [4651, "Gottlieben", 4000],
    [4646, "Ermatingen", 3000],
    [4851, "Salenstein", 2000],
    [4846, "Raperswilen", 1000],
    [4701, "Wäldi", 8000],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 100],
    [4511, "Zihlschlacht-Sitterdorf", 100],
    [4471, "Bischofszell", 100],
    [4495, "Hohen-Tannen", 100],
    [4476, "Erlen", 10000],
    [4501, "Kradolf-Schönenberg", 100],
    [4506, "Sulgen", 100],
    [4911, "Bürglen", 100],
    [4901, "Birwinken", 100],
    [4891, "Berg", 100],
    [4791, "Wuppenau", 100],
    [4756, "Schönholzerswilen", 100],
    [4921, "Bussnang", 100],
    [4946, "Weinfelden", 100],
    [4941, "Märstetten", 100],
    [4711, "Affeltrangen", 100],
    [4881, "Amlikon-Bissegg", 100],
    [4951, "Wigoltingen", 100],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 10],
    [4591, "Matzingen", 10],
    [4611, "Thundorf", 10],
    [4566, "Frauenfeld", 10],
    [4571, "Gachnang", 10],
    [4590, "Hüttlingen", 10],
    [4561, "Felben-Wellhausen", 10],
    [4831, "Müllheim", 10],
    [4841, "Pfyn", 10],
    [4621, "Warth-Weiningen", 10],
    [4616, "Uessingen-Buch", 10],
    [4601, "Neunforn", 10],
    [4816, "Homburg", 10],
    [4811, "Herdern", 10],
    [4821, "Hüttwilen", 10],
    [4801, "Berlingen", 10],
    [4864, "Steckborn", 10],
    [4826, "Mammern", 10],
    [4806, "Eschenz", 10],
    [4871, "Wagenhausen", 10],
    [4545, "Diessenhofen", 10],
    [4536, "Basadingen-Schlattingen", 10],
    [4546, "Schlatt (TG)", 10],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 1],
    [4751, "Rickenbach (TG)", 1],
    [4786, "Wilen (TG)", 1],
    [4761, "Sirnach", 1],
    [4724, "Eschlikon", 1],
    [4721, "Bichelsee-Balterswil (Bi.)", 1],
    [4746, "Münchwilen (TG)", 2],
    [4781, "Wängi", 1],
    [4551, "Aadorf", 1],
    [4723, "Braunau", 1],
    [4776, "Tobel-Tägerschen", 1],
    [4716, "Bettwiesen", 1],
    [4741, "Lommis", 1]
];
var fuenfArr = [
    //Bezirk Arbon, 11 Gemeinden
    [4436, "Romanshorn", 10000],
    [4451, "Uttwil", 10000],
    [4426, "Kesswil", 10000],
    [4441, "Salmsach", 10000],
    [4411, "Egnach", 10000],
    [4401, "Arbon", 10000],
    [4421, "Horn", 10000],
    [4431, "Roggwil", 10000],
    [4461, "Amriswil", 10000],
    [4406, "Dozwil", 10000],
    [4416, "Hefenhofen", 10000],
    [4446, "Sommeri", 10000],

    //Bezirk Kreuzlingen, 13 Gemeinden
    [4656, "Güttingen", 5000],
    [4641, "Altnau", 4000],
    [4691, "Münsterlingen", 3000],
    [4643, "Bottighofen", 2000],
    [4671, "Kreuzlingen", 1000],
    [4681, "Langrickenbach", 8000],
    [4683, "Lengwil", 7000],
    [4666, "Kemmental", 6000],
    [4696, "Tägerwilen", 5000],
    [4651, "Gottlieben", 4000],
    [4646, "Ermatingen", 3000],
    [4851, "Salenstein", 2000],
    [4846, "Raperswilen", 1000],
    [4701, "Wäldi", 8000],

    //Bezirk Weinfelden, 17 Gemeinden
    [4486, "Hauptwilen-Gottshaus", 100],
    [4511, "Zihlschlacht-Sitterdorf", 100],
    [4471, "Bischofszell", 100],
    [4495, "Hohen-Tannen", 100],
    [4476, "Erlen", 10000],
    [4501, "Kradolf-Schönenberg", 100],
    [4506, "Sulgen", 100],
    [4911, "Bürglen", 100],
    [4901, "Birwinken", 100],
    [4891, "Berg", 100],
    [4791, "Wuppenau", 100],
    [4756, "Schönholzerswilen", 100],
    [4921, "Bussnang", 100],
    [4946, "Weinfelden", 100],
    [4941, "Märstetten", 100],
    [4711, "Affeltrangen", 100],
    [4881, "Amlikon-Bissegg", 100],
    [4951, "Wigoltingen", 100],

    //Bezirk Frauenfeld, 22 Gemeinden
    [4606, "Stettfurt", 10],
    [4591, "Matzingen", 10],
    [4611, "Thundorf", 10],
    [4566, "Frauenfeld", 10],
    [4571, "Gachnang", 10],
    [4590, "Hüttlingen", 10],
    [4561, "Felben-Wellhausen", 10],
    [4831, "Müllheim", 10],
    [4841, "Pfyn", 10],
    [4621, "Warth-Weiningen", 10],
    [4616, "Uessingen-Buch", 10],
    [4601, "Neunforn", 10],
    [4816, "Homburg", 10],
    [4811, "Herdern", 10],
    [4821, "Hüttwilen", 10],
    [4801, "Berlingen", 10],
    [4864, "Steckborn", 10],
    [4826, "Mammern", 10],
    [4806, "Eschenz", 10],
    [4871, "Wagenhausen", 10],
    [4545, "Diessenhofen", 10],
    [4536, "Basadingen-Schlattingen", 10],
    [4546, "Schlatt (TG)", 10],

    //Bezirk Münchwilen (TG), 12 Gemeinden
    [4726, "Fischingen", 1],
    [4751, "Rickenbach (TG)", 1],
    [4786, "Wilen (TG)", 1],
    [4761, "Sirnach", 1],
    [4724, "Eschlikon", 1],
    [4721, "Bichelsee-Balterswil (Bi.)", 1],
    [4746, "Münchwilen (TG)", 2],
    [4781, "Wängi", 1],
    [4551, "Aadorf", 1],
    [4723, "Braunau", 1],
    [4776, "Tobel-Tägerschen", 1],
    [4716, "Bettwiesen", 1],
    [4741, "Lommis", 1]
];

var color = [
    [1, "#cffae3", "#f9d9cc" ],
    [2, "#b7f8d6", "#f6c7b2"],
    [3, "#9ff6c8", "#f3b499"],
    [4, "#87f4bb", "#f1a27f"],
    [5,  "#6ff2ad", "#ee8f66"],
    [6, "#57f09f", "#eb7c4c"],
    [7, "#3fee92", "#e86a32"],
    [8,  "#27ec84", "#e55719"],
    [9, "#10ea77", "#e34500"],
    [10, "#0ed26b", "#cc3e00" ],
    [11, "#0cbb5f", "#b53700",]
];

var btnP = null;

var max = 0;
for (i = 0; i < muniArr.length; i++) {
    if (max < muniArr[i][2]) {
        max = muniArr[i][2];
    }
}

init();

$("button").click(function () {
    switch (this.id) {
        case "btn1":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn2":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn3":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn4":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        case "btn5":
            $('#graph').empty();
            btnP = this.id;
            init();
            break;
        default:
            $('#graph').empty();
            btnP = null;
            init();
            break;
    }
});
