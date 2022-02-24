<!-- https://raw.githubusercontent.com/risan/quran-json/main/data/quran.json -->
<!-- https://raw.githubusercontent.com/risan/quran-json/main/data/editions/en.json -->

<?php

// $arabic_data = file_get_contents("https://raw.githubusercontent.com/risan/quran-json/main/data/quran.json");


$arabic_data = 

'{
  "chapters": [
    {
      "id": 1,
      "verses": 7,
      "name": "Al-Fatihah",
      "arabic_name": "الفاتحة",
      "complex_name": "Al-Fātiĥah",
      "translated_name": "The Opener",
      "prefix_bismillah": false,
      "revelation_place": "makkah",
      "revelation_order": 5,
      "pages": [
        1,
        1
      ]
    },
    {
      "id": 2,
      "verses": 286,
      "name": "Al-Baqarah",
      "arabic_name": "البقرة",
      "complex_name": "Al-Baqarah",
      "translated_name": "The Cow",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 87,
      "pages": [
        2,
        49
      ]
    },
    {
      "id": 3,
      "verses": 200,
      "name": "Ali Imran",
      "arabic_name": "آل عمران",
      "complex_name": "Āli `Imrān",
      "translated_name": "Family of Imran",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 89,
      "pages": [
        50,
        76
      ]
    },
    {
      "id": 4,
      "verses": 176,
      "name": "An-Nisa",
      "arabic_name": "النساء",
      "complex_name": "An-Nisā",
      "translated_name": "The Women",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 92,
      "pages": [
        77,
        106
      ]
    },
    {
      "id": 5,
      "verses": 120,
      "name": "Al-Maidah",
      "arabic_name": "المائدة",
      "complex_name": "Al-Māidah",
      "translated_name": "The Table Spread",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 112,
      "pages": [
        106,
        127
      ]
    },
    {
      "id": 6,
      "verses": 165,
      "name": "Al-Anam",
      "arabic_name": "الأنعام",
      "complex_name": "Al-An`ām",
      "translated_name": "The Cattle",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 55,
      "pages": [
        128,
        150
      ]
    },
    {
      "id": 7,
      "verses": 206,
      "name": "Al-Araf",
      "arabic_name": "الأعراف",
      "complex_name": "Al-A`rāf",
      "translated_name": "The Heights",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 39,
      "pages": [
        151,
        176
      ]
    },
    {
      "id": 8,
      "verses": 75,
      "name": "Al-Anfal",
      "arabic_name": "الأنفال",
      "complex_name": "Al-Anfāl",
      "translated_name": "The Spoils of War",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 88,
      "pages": [
        177,
        186
      ]
    },
    {
      "id": 9,
      "verses": 129,
      "name": "At-Tawbah",
      "arabic_name": "التوبة",
      "complex_name": "At-Tawbah",
      "translated_name": "The Repentance",
      "prefix_bismillah": false,
      "revelation_place": "madinah",
      "revelation_order": 113,
      "pages": [
        187,
        207
      ]
    },
    {
      "id": 10,
      "verses": 109,
      "name": "Yunus",
      "arabic_name": "يونس",
      "complex_name": "Yūnus",
      "translated_name": "Jonah",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 51,
      "pages": [
        208,
        221
      ]
    },
    {
      "id": 11,
      "verses": 123,
      "name": "Hud",
      "arabic_name": "هود",
      "complex_name": "Hūd",
      "translated_name": "Hud",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 52,
      "pages": [
        221,
        235
      ]
    },
    {
      "id": 12,
      "verses": 111,
      "name": "Yusuf",
      "arabic_name": "يوسف",
      "complex_name": "Yūsuf",
      "translated_name": "Joseph",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 53,
      "pages": [
        235,
        248
      ]
    },
    {
      "id": 13,
      "verses": 43,
      "name": "Ar-Rd",
      "arabic_name": "الرعد",
      "complex_name": "Ar-Ra`d",
      "translated_name": "The Thunder",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 96,
      "pages": [
        249,
        255
      ]
    },
    {
      "id": 14,
      "verses": 52,
      "name": "Ibrahim",
      "arabic_name": "ابراهيم",
      "complex_name": "Ibrāhīm",
      "translated_name": "Abraham",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 72,
      "pages": [
        255,
        261
      ]
    },
    {
      "id": 15,
      "verses": 99,
      "name": "Al-Hijr",
      "arabic_name": "الحجر",
      "complex_name": "Al-Ĥijr",
      "translated_name": "The Rocky Tract",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 54,
      "pages": [
        262,
        267
      ]
    },
    {
      "id": 16,
      "verses": 128,
      "name": "An-Nahl",
      "arabic_name": "النحل",
      "complex_name": "An-Naĥl",
      "translated_name": "The Bee",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 70,
      "pages": [
        267,
        281
      ]
    },
    {
      "id": 17,
      "verses": 111,
      "name": "Al-Isra",
      "arabic_name": "الإسراء",
      "complex_name": "Al-Isrā",
      "translated_name": "The Night Journey",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 50,
      "pages": [
        282,
        293
      ]
    },
    {
      "id": 18,
      "verses": 110,
      "name": "Al-Kahf",
      "arabic_name": "الكهف",
      "complex_name": "Al-Kahf",
      "translated_name": "The Cave",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 69,
      "pages": [
        293,
        304
      ]
    },
    {
      "id": 19,
      "verses": 98,
      "name": "Maryam",
      "arabic_name": "مريم",
      "complex_name": "Maryam",
      "translated_name": "Mary",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 44,
      "pages": [
        305,
        312
      ]
    },
    {
      "id": 20,
      "verses": 135,
      "name": "Taha",
      "arabic_name": "طه",
      "complex_name": "Ţāhā",
      "translated_name": "Ta-Ha",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 45,
      "pages": [
        312,
        321
      ]
    },
    {
      "id": 21,
      "verses": 112,
      "name": "Al-Anbya",
      "arabic_name": "الأنبياء",
      "complex_name": "Al-Anbyā",
      "translated_name": "The Prophets",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 73,
      "pages": [
        322,
        331
      ]
    },
    {
      "id": 22,
      "verses": 78,
      "name": "Al-Hajj",
      "arabic_name": "الحج",
      "complex_name": "Al-Ĥajj",
      "translated_name": "The Pilgrimage",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 103,
      "pages": [
        332,
        341
      ]
    },
    {
      "id": 23,
      "verses": 118,
      "name": "Al-Muminun",
      "arabic_name": "المؤمنون",
      "complex_name": "Al-Muminūn",
      "translated_name": "The Believers",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 74,
      "pages": [
        342,
        349
      ]
    },
    {
      "id": 24,
      "verses": 64,
      "name": "An-Nur",
      "arabic_name": "النور",
      "complex_name": "An-Nūr",
      "translated_name": "The Light",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 102,
      "pages": [
        350,
        359
      ]
    },
    {
      "id": 25,
      "verses": 77,
      "name": "Al-Furqan",
      "arabic_name": "الفرقان",
      "complex_name": "Al-Furqān",
      "translated_name": "The Criterion",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 42,
      "pages": [
        359,
        366
      ]
    },
    {
      "id": 26,
      "verses": 227,
      "name": "Ash-Shuara",
      "arabic_name": "الشعراء",
      "complex_name": "Ash-Shu`arā",
      "translated_name": "The Poets",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 47,
      "pages": [
        367,
        376
      ]
    },
    {
      "id": 27,
      "verses": 93,
      "name": "An-Naml",
      "arabic_name": "النمل",
      "complex_name": "An-Naml",
      "translated_name": "The Ant",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 48,
      "pages": [
        377,
        385
      ]
    },
    {
      "id": 28,
      "verses": 88,
      "name": "Al-Qasas",
      "arabic_name": "القصص",
      "complex_name": "Al-Qaşaş",
      "translated_name": "The Stories",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 49,
      "pages": [
        385,
        396
      ]
    },
    {
      "id": 29,
      "verses": 69,
      "name": "Al-Ankabut",
      "arabic_name": "العنكبوت",
      "complex_name": "Al-`Ankabūt",
      "translated_name": "The Spider",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 85,
      "pages": [
        396,
        404
      ]
    },
    {
      "id": 30,
      "verses": 60,
      "name": "Ar-Rum",
      "arabic_name": "الروم",
      "complex_name": "Ar-Rūm",
      "translated_name": "The Romans",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 84,
      "pages": [
        404,
        410
      ]
    },
    {
      "id": 31,
      "verses": 34,
      "name": "Luqman",
      "arabic_name": "لقمان",
      "complex_name": "Luqmān",
      "translated_name": "Luqman",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 57,
      "pages": [
        411,
        414
      ]
    },
    {
      "id": 32,
      "verses": 30,
      "name": "As-Sajdah",
      "arabic_name": "السجدة",
      "complex_name": "As-Sajdah",
      "translated_name": "The Prostration",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 75,
      "pages": [
        415,
        417
      ]
    },
    {
      "id": 33,
      "verses": 73,
      "name": "Al-Ahzab",
      "arabic_name": "الأحزاب",
      "complex_name": "Al-Aĥzāb",
      "translated_name": "The Combined Forces",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 90,
      "pages": [
        418,
        427
      ]
    },
    {
      "id": 34,
      "verses": 54,
      "name": "Saba",
      "arabic_name": "سبإ",
      "complex_name": "Saba",
      "translated_name": "Sheba",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 58,
      "pages": [
        428,
        434
      ]
    },
    {
      "id": 35,
      "verses": 45,
      "name": "Fatir",
      "arabic_name": "فاطر",
      "complex_name": "Fāţir",
      "translated_name": "Originator",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 43,
      "pages": [
        434,
        440
      ]
    },
    {
      "id": 36,
      "verses": 83,
      "name": "Ya-Sin",
      "arabic_name": "يس",
      "complex_name": "Yā-Sīn",
      "translated_name": "Ya Sin",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 41,
      "pages": [
        440,
        445
      ]
    },
    {
      "id": 37,
      "verses": 182,
      "name": "As-Saffat",
      "arabic_name": "الصافات",
      "complex_name": "Aş-Şāffāt",
      "translated_name": "Those who set the Ranks",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 56,
      "pages": [
        446,
        452
      ]
    },
    {
      "id": 38,
      "verses": 88,
      "name": "Sad",
      "arabic_name": "ص",
      "complex_name": "Şād",
      "translated_name": "The Letter \"Saad\"",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 38,
      "pages": [
        453,
        458
      ]
    },
    {
      "id": 39,
      "verses": 75,
      "name": "Az-Zumar",
      "arabic_name": "الزمر",
      "complex_name": "Az-Zumar",
      "translated_name": "The Troops",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 59,
      "pages": [
        458,
        467
      ]
    },
    {
      "id": 40,
      "verses": 85,
      "name": "Ghafir",
      "arabic_name": "غافر",
      "complex_name": "Ghāfir",
      "translated_name": "The Forgiver",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 60,
      "pages": [
        467,
        476
      ]
    },
    {
      "id": 41,
      "verses": 54,
      "name": "Fussilat",
      "arabic_name": "فصلت",
      "complex_name": "Fuşşilat",
      "translated_name": "Explained in Detail",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 61,
      "pages": [
        477,
        482
      ]
    },
    {
      "id": 42,
      "verses": 53,
      "name": "Ash-Shuraa",
      "arabic_name": "الشورى",
      "complex_name": "Ash-Shūraá",
      "translated_name": "The Consultation",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 62,
      "pages": [
        483,
        489
      ]
    },
    {
      "id": 43,
      "verses": 89,
      "name": "Az-Zukhruf",
      "arabic_name": "الزخرف",
      "complex_name": "Az-Zukhruf",
      "translated_name": "The Ornaments of Gold",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 63,
      "pages": [
        489,
        495
      ]
    },
    {
      "id": 44,
      "verses": 59,
      "name": "Ad-Dukhan",
      "arabic_name": "الدخان",
      "complex_name": "Ad-Dukhān",
      "translated_name": "The Smoke",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 64,
      "pages": [
        496,
        498
      ]
    },
    {
      "id": 45,
      "verses": 37,
      "name": "Al-Jathiyah",
      "arabic_name": "الجاثية",
      "complex_name": "Al-Jāthiyah",
      "translated_name": "The Crouching",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 65,
      "pages": [
        499,
        502
      ]
    },
    {
      "id": 46,
      "verses": 35,
      "name": "Al-Ahqaf",
      "arabic_name": "الأحقاف",
      "complex_name": "Al-Aĥqāf",
      "translated_name": "The Wind-Curved Sandhills",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 66,
      "pages": [
        502,
        506
      ]
    },
    {
      "id": 47,
      "verses": 38,
      "name": "Muhammad",
      "arabic_name": "محمد",
      "complex_name": "Muĥammad",
      "translated_name": "Muhammad",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 95,
      "pages": [
        507,
        510
      ]
    },
    {
      "id": 48,
      "verses": 29,
      "name": "Al-Fath",
      "arabic_name": "الفتح",
      "complex_name": "Al-Fatĥ",
      "translated_name": "The Victory",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 111,
      "pages": [
        511,
        515
      ]
    },
    {
      "id": 49,
      "verses": 18,
      "name": "Al-Hujurat",
      "arabic_name": "الحجرات",
      "complex_name": "Al-Ĥujurāt",
      "translated_name": "The Rooms",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 106,
      "pages": [
        515,
        517
      ]
    },
    {
      "id": 50,
      "verses": 45,
      "name": "Qaf",
      "arabic_name": "ق",
      "complex_name": "Qāf",
      "translated_name": "The Letter \"Qaf\"",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 34,
      "pages": [
        518,
        520
      ]
    },
    {
      "id": 51,
      "verses": 60,
      "name": "Adh-Dhariyat",
      "arabic_name": "الذاريات",
      "complex_name": "Adh-Dhāriyāt",
      "translated_name": "The Winnowing Winds",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 67,
      "pages": [
        520,
        523
      ]
    },
    {
      "id": 52,
      "verses": 49,
      "name": "At-Tur",
      "arabic_name": "الطور",
      "complex_name": "Aţ-Ţūr",
      "translated_name": "The Mount",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 76,
      "pages": [
        523,
        525
      ]
    },
    {
      "id": 53,
      "verses": 62,
      "name": "An-Najm",
      "arabic_name": "النجم",
      "complex_name": "An-Najm",
      "translated_name": "The Star",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 23,
      "pages": [
        526,
        528
      ]
    },
    {
      "id": 54,
      "verses": 55,
      "name": "Al-Qamar",
      "arabic_name": "القمر",
      "complex_name": "Al-Qamar",
      "translated_name": "The Moon",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 37,
      "pages": [
        528,
        531
      ]
    },
    {
      "id": 55,
      "verses": 78,
      "name": "Ar-Rahman",
      "arabic_name": "الرحمن",
      "complex_name": "Ar-Raĥmān",
      "translated_name": "The Beneficent",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 97,
      "pages": [
        531,
        534
      ]
    },
    {
      "id": 56,
      "verses": 96,
      "name": "Al-Waqiah",
      "arabic_name": "الواقعة",
      "complex_name": "Al-Wāqi`ah",
      "translated_name": "The Inevitable",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 46,
      "pages": [
        534,
        537
      ]
    },
    {
      "id": 57,
      "verses": 29,
      "name": "Al-Hadid",
      "arabic_name": "الحديد",
      "complex_name": "Al-Ĥadīd",
      "translated_name": "The Iron",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 94,
      "pages": [
        537,
        541
      ]
    },
    {
      "id": 58,
      "verses": 22,
      "name": "Al-Mujadila",
      "arabic_name": "المجادلة",
      "complex_name": "Al-Mujādila",
      "translated_name": "The Pleading Woman",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 105,
      "pages": [
        542,
        545
      ]
    },
    {
      "id": 59,
      "verses": 24,
      "name": "Al-Hashr",
      "arabic_name": "الحشر",
      "complex_name": "Al-Ĥashr",
      "translated_name": "The Exile",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 101,
      "pages": [
        545,
        548
      ]
    },
    {
      "id": 60,
      "verses": 13,
      "name": "Al-Mumtahanah",
      "arabic_name": "الممتحنة",
      "complex_name": "Al-Mumtaĥanah",
      "translated_name": "She that is to be examined",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 91,
      "pages": [
        549,
        551
      ]
    },
    {
      "id": 61,
      "verses": 14,
      "name": "As-Saf",
      "arabic_name": "الصف",
      "complex_name": "Aş-Şaf",
      "translated_name": "The Ranks",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 109,
      "pages": [
        551,
        552
      ]
    },
    {
      "id": 62,
      "verses": 11,
      "name": "Al-Jumuah",
      "arabic_name": "الجمعة",
      "complex_name": "Al-Jumu`ah",
      "translated_name": "The Congregation, Friday",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 110,
      "pages": [
        553,
        554
      ]
    },
    {
      "id": 63,
      "verses": 11,
      "name": "Al-Munafiqun",
      "arabic_name": "المنافقون",
      "complex_name": "Al-Munāfiqūn",
      "translated_name": "The Hypocrites",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 104,
      "pages": [
        554,
        555
      ]
    },
    {
      "id": 64,
      "verses": 18,
      "name": "At-Taghabun",
      "arabic_name": "التغابن",
      "complex_name": "At-Taghābun",
      "translated_name": "The Mutual Disillusion",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 108,
      "pages": [
        556,
        557
      ]
    },
    {
      "id": 65,
      "verses": 12,
      "name": "At-Talaq",
      "arabic_name": "الطلاق",
      "complex_name": "Aţ-Ţalāq",
      "translated_name": "The Divorce",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 99,
      "pages": [
        558,
        559
      ]
    },
    {
      "id": 66,
      "verses": 12,
      "name": "At-Tahrim",
      "arabic_name": "التحريم",
      "complex_name": "At-Taĥrīm",
      "translated_name": "The Prohibition",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 107,
      "pages": [
        560,
        561
      ]
    },
    {
      "id": 67,
      "verses": 30,
      "name": "Al-Mulk",
      "arabic_name": "الملك",
      "complex_name": "Al-Mulk",
      "translated_name": "The Sovereignty",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 77,
      "pages": [
        562,
        564
      ]
    },
    {
      "id": 68,
      "verses": 52,
      "name": "Al-Qalam",
      "arabic_name": "القلم",
      "complex_name": "Al-Qalam",
      "translated_name": "The Pen",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 2,
      "pages": [
        564,
        566
      ]
    },
    {
      "id": 69,
      "verses": 52,
      "name": "Al-Haqqah",
      "arabic_name": "الحاقة",
      "complex_name": "Al-Ĥāqqah",
      "translated_name": "The Reality",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 78,
      "pages": [
        566,
        568
      ]
    },
    {
      "id": 70,
      "verses": 44,
      "name": "Al-Maarij",
      "arabic_name": "المعارج",
      "complex_name": "Al-Ma`ārij",
      "translated_name": "The Ascending Stairways",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 79,
      "pages": [
        568,
        570
      ]
    },
    {
      "id": 71,
      "verses": 28,
      "name": "Nuh",
      "arabic_name": "نوح",
      "complex_name": "Nūĥ",
      "translated_name": "Noah",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 71,
      "pages": [
        570,
        571
      ]
    },
    {
      "id": 72,
      "verses": 28,
      "name": "Al-Jinn",
      "arabic_name": "الجن",
      "complex_name": "Al-Jinn",
      "translated_name": "The Jinn",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 40,
      "pages": [
        572,
        573
      ]
    },
    {
      "id": 73,
      "verses": 20,
      "name": "Al-Muzzammil",
      "arabic_name": "المزمل",
      "complex_name": "Al-Muzzammil",
      "translated_name": "The Enshrouded One",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 3,
      "pages": [
        574,
        575
      ]
    },
    {
      "id": 74,
      "verses": 56,
      "name": "Al-Muddaththir",
      "arabic_name": "المدثر",
      "complex_name": "Al-Muddaththir",
      "translated_name": "The Cloaked One",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 4,
      "pages": [
        575,
        577
      ]
    },
    {
      "id": 75,
      "verses": 40,
      "name": "Al-Qiyamah",
      "arabic_name": "القيامة",
      "complex_name": "Al-Qiyāmah",
      "translated_name": "The Resurrection",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 31,
      "pages": [
        577,
        578
      ]
    },
    {
      "id": 76,
      "verses": 31,
      "name": "Al-Insan",
      "arabic_name": "الانسان",
      "complex_name": "Al-Insān",
      "translated_name": "The Man",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 98,
      "pages": [
        578,
        580
      ]
    },
    {
      "id": 77,
      "verses": 50,
      "name": "Al-Mursalat",
      "arabic_name": "المرسلات",
      "complex_name": "Al-Mursalāt",
      "translated_name": "The Emissaries",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 33,
      "pages": [
        580,
        581
      ]
    },
    {
      "id": 78,
      "verses": 40,
      "name": "An-Naba",
      "arabic_name": "النبإ",
      "complex_name": "An-Naba",
      "translated_name": "The Tidings",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 80,
      "pages": [
        582,
        583
      ]
    },
    {
      "id": 79,
      "verses": 46,
      "name": "An-Naziat",
      "arabic_name": "النازعات",
      "complex_name": "An-Nāzi`āt",
      "translated_name": "Those who drag forth",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 81,
      "pages": [
        583,
        584
      ]
    },
    {
      "id": 80,
      "verses": 42,
      "name": "Abasa",
      "arabic_name": "عبس",
      "complex_name": "`Abasa",
      "translated_name": "He Frowned",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 24,
      "pages": [
        585,
        585
      ]
    },
    {
      "id": 81,
      "verses": 29,
      "name": "At-Takwir",
      "arabic_name": "التكوير",
      "complex_name": "At-Takwīr",
      "translated_name": "The Overthrowing",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 7,
      "pages": [
        586,
        586
      ]
    },
    {
      "id": 82,
      "verses": 19,
      "name": "Al-Infitar",
      "arabic_name": "الإنفطار",
      "complex_name": "Al-Infiţār",
      "translated_name": "The Cleaving",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 82,
      "pages": [
        587,
        587
      ]
    },
    {
      "id": 83,
      "verses": 36,
      "name": "Al-Mutaffifin",
      "arabic_name": "المطففين",
      "complex_name": "Al-Muţaffifīn",
      "translated_name": "The Defrauding",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 86,
      "pages": [
        587,
        589
      ]
    },
    {
      "id": 84,
      "verses": 25,
      "name": "Al-Inshiqaq",
      "arabic_name": "الإنشقاق",
      "complex_name": "Al-Inshiqāq",
      "translated_name": "The Sundering",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 83,
      "pages": [
        589,
        589
      ]
    },
    {
      "id": 85,
      "verses": 22,
      "name": "Al-Buruj",
      "arabic_name": "البروج",
      "complex_name": "Al-Burūj",
      "translated_name": "The Mansions of the Stars",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 27,
      "pages": [
        590,
        590
      ]
    },
    {
      "id": 86,
      "verses": 17,
      "name": "At-Tariq",
      "arabic_name": "الطارق",
      "complex_name": "Aţ-Ţāriq",
      "translated_name": "The Nightcommer",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 36,
      "pages": [
        591,
        591
      ]
    },
    {
      "id": 87,
      "verses": 19,
      "name": "Al-Ala",
      "arabic_name": "الأعلى",
      "complex_name": "Al-A`lá",
      "translated_name": "The Most High",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 8,
      "pages": [
        591,
        592
      ]
    },
    {
      "id": 88,
      "verses": 26,
      "name": "Al-Ghashiyah",
      "arabic_name": "الغاشية",
      "complex_name": "Al-Ghāshiyah",
      "translated_name": "The Overwhelming",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 68,
      "pages": [
        592,
        592
      ]
    },
    {
      "id": 89,
      "verses": 30,
      "name": "Al-Fajr",
      "arabic_name": "الفجر",
      "complex_name": "Al-Fajr",
      "translated_name": "The Dawn",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 10,
      "pages": [
        593,
        594
      ]
    },
    {
      "id": 90,
      "verses": 20,
      "name": "Al-Balad",
      "arabic_name": "البلد",
      "complex_name": "Al-Balad",
      "translated_name": "The City",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 35,
      "pages": [
        594,
        594
      ]
    },
    {
      "id": 91,
      "verses": 15,
      "name": "Ash-Shams",
      "arabic_name": "الشمس",
      "complex_name": "Ash-Shams",
      "translated_name": "The Sun",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 26,
      "pages": [
        595,
        595
      ]
    },
    {
      "id": 92,
      "verses": 21,
      "name": "Al-Layl",
      "arabic_name": "الليل",
      "complex_name": "Al-Layl",
      "translated_name": "The Night",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 9,
      "pages": [
        595,
        596
      ]
    },
    {
      "id": 93,
      "verses": 11,
      "name": "Ad-Duhaa",
      "arabic_name": "الضحى",
      "complex_name": "Ađ-Đuĥaá",
      "translated_name": "The Morning Hours",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 11,
      "pages": [
        596,
        596
      ]
    },
    {
      "id": 94,
      "verses": 8,
      "name": "Ash-Sharh",
      "arabic_name": "الشرح",
      "complex_name": "Ash-Sharĥ",
      "translated_name": "The Relief",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 12,
      "pages": [
        596,
        596
      ]
    },
    {
      "id": 95,
      "verses": 8,
      "name": "At-Tin",
      "arabic_name": "التين",
      "complex_name": "At-Tīn",
      "translated_name": "The Fig",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 28,
      "pages": [
        597,
        597
      ]
    },
    {
      "id": 96,
      "verses": 19,
      "name": "Al-Alaq",
      "arabic_name": "العلق",
      "complex_name": "Al-`Alaq",
      "translated_name": "The Clot",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 1,
      "pages": [
        597,
        597
      ]
    },
    {
      "id": 97,
      "verses": 5,
      "name": "Al-Qadr",
      "arabic_name": "القدر",
      "complex_name": "Al-Qadr",
      "translated_name": "The Power",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 25,
      "pages": [
        598,
        598
      ]
    },
    {
      "id": 98,
      "verses": 8,
      "name": "Al-Bayyinah",
      "arabic_name": "البينة",
      "complex_name": "Al-Bayyinah",
      "translated_name": "The Clear Proof",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 100,
      "pages": [
        598,
        599
      ]
    },
    {
      "id": 99,
      "verses": 8,
      "name": "Az-Zalzalah",
      "arabic_name": "الزلزلة",
      "complex_name": "Az-Zalzalah",
      "translated_name": "The Earthquake",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 93,
      "pages": [
        599,
        599
      ]
    },
    {
      "id": 100,
      "verses": 11,
      "name": "Al-Adiyat",
      "arabic_name": "العاديات",
      "complex_name": "Al-`Ādiyāt",
      "translated_name": "The Courser",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 14,
      "pages": [
        599,
        600
      ]
    },
    {
      "id": 101,
      "verses": 11,
      "name": "Al-Qariah",
      "arabic_name": "القارعة",
      "complex_name": "Al-Qāri`ah",
      "translated_name": "The Calamity",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 30,
      "pages": [
        600,
        600
      ]
    },
    {
      "id": 102,
      "verses": 8,
      "name": "At-Takathur",
      "arabic_name": "التكاثر",
      "complex_name": "At-Takāthur",
      "translated_name": "The Rivalry in world increase",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 16,
      "pages": [
        600,
        600
      ]
    },
    {
      "id": 103,
      "verses": 3,
      "name": "Al-Asr",
      "arabic_name": "العصر",
      "complex_name": "Al-`Aşr",
      "translated_name": "The Declining Day",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 13,
      "pages": [
        601,
        601
      ]
    },
    {
      "id": 104,
      "verses": 9,
      "name": "Al-Humazah",
      "arabic_name": "الهمزة",
      "complex_name": "Al-Humazah",
      "translated_name": "The Traducer",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 32,
      "pages": [
        601,
        601
      ]
    },
    {
      "id": 105,
      "verses": 5,
      "name": "Al-Fil",
      "arabic_name": "الفيل",
      "complex_name": "Al-Fīl",
      "translated_name": "The Elephant",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 19,
      "pages": [
        601,
        601
      ]
    },
    {
      "id": 106,
      "verses": 4,
      "name": "Quraysh",
      "arabic_name": "قريش",
      "complex_name": "Quraysh",
      "translated_name": "Quraysh",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 29,
      "pages": [
        602,
        602
      ]
    },
    {
      "id": 107,
      "verses": 7,
      "name": "Al-Maun",
      "arabic_name": "الماعون",
      "complex_name": "Al-Mā`ūn",
      "translated_name": "The Small kindnesses",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 17,
      "pages": [
        602,
        602
      ]
    },
    {
      "id": 108,
      "verses": 3,
      "name": "Al-Kawthar",
      "arabic_name": "الكوثر",
      "complex_name": "Al-Kawthar",
      "translated_name": "The Abundance",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 15,
      "pages": [
        602,
        602
      ]
    },
    {
      "id": 109,
      "verses": 6,
      "name": "Al-Kafirun",
      "arabic_name": "الكافرون",
      "complex_name": "Al-Kāfirūn",
      "translated_name": "The Disbelievers",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 18,
      "pages": [
        603,
        603
      ]
    },
    {
      "id": 110,
      "verses": 3,
      "name": "An-Nasr",
      "arabic_name": "النصر",
      "complex_name": "An-Naşr",
      "translated_name": "The Divine Support",
      "prefix_bismillah": true,
      "revelation_place": "madinah",
      "revelation_order": 114,
      "pages": [
        603,
        603
      ]
    },
    {
      "id": 111,
      "verses": 5,
      "name": "Al-Masad",
      "arabic_name": "المسد",
      "complex_name": "Al-Masad",
      "translated_name": "The Palm Fiber",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 6,
      "pages": [
        603,
        603
      ]
    },
    {
      "id": 112,
      "verses": 4,
      "name": "Al-Ikhlas",
      "arabic_name": "الإخلاص",
      "complex_name": "Al-Ikhlāş",
      "translated_name": "The Sincerity",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 22,
      "pages": [
        604,
        604
      ]
    },
    {
      "id": 113,
      "verses": 5,
      "name": "Al-Falaq",
      "arabic_name": "الفلق",
      "complex_name": "Al-Falaq",
      "translated_name": "The Daybreak",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 20,
      "pages": [
        604,
        604
      ]
    },
    {
      "id": 114,
      "verses": 6,
      "name": "An-Nas",
      "arabic_name": "الناس",
      "complex_name": "An-Nās",
      "translated_name": "Mankind",
      "prefix_bismillah": true,
      "revelation_place": "makkah",
      "revelation_order": 21,
      "pages": [
        604,
        604
      ]
    }
  ]
}';


$arabic_data_decode = json_decode($arabic_data, true);

// echo "<pre>";
// print_r(json_encode($arabic_data_decode['chapters'][0]['pages'])); exit();




$count = 1;
for ($i=1; $i < 115; $i++) {

	// echo "<pre>";
	// echo $i.'<br>';
	// print_r(count($arabic_data_decode[$i]));
	// print_r($arabic_data_decode[1][0]['verse']);

	
	// for ($b=0; $b < count($arabic_data_decode[$i]); $b++) {

		// echo "INSERT INTO `sorah_details`(`id`, `verse`, `number`, `text`, `transliteration`) VALUES (null,'".$arabic_data_decode[$i][$b]['verse']."','".$arabic_data_decode[$i][$b]['chapter']."',null,'".str_replace(array('\'', '"'), '', $arabic_data_decode[$i][$b]['text'])."');<br>";


		echo "UPDATE `list_of_sorah` SET `pages`='".json_encode($arabic_data_decode['chapters'][$i-1]['pages'])."' WHERE `id` = ".$count.";<br>";
	$count++;


	// }

	

}