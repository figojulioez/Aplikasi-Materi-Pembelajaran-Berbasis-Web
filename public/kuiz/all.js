// creating an array and passing the number, questions, options, and answers
let questions = [
{
  numb: 1,
  question: "Hasil dari fungsi tersebut ialah? <br> <img src='http://127.0.0.1:8000/img/koding/soal1.png' height='120'>",
  answer: "Halo nama Saya Figo",
  options: [
    "Halo nama Saya Figo",
    "Halo nama Saya Devon",
    "Halo nama Saya Bayu",
    ]
},
{
  numb: 2,
  question: "Hasil dari fungsi tersebut ialah? <br> <img src='http://127.0.0.1:8000/img/koding/soal2.png' height='120'>",
  answer: "Halo nama Saya Figo",
  options: [
    "Halo nama Saya Figo",
    "Halo nama Saya Devon",
    "Halo nama Saya Bayu",
    ]
},
{
  numb: 3,
  question: "Hasil dari fungsi tersebut ialah? <br> <img src='http://127.0.0.1:8000/img/koding/soal3.png' height='120'>",
  answer: "22",
  options: [
    "10",
    "12",
    "22",
    ]
},

{
  numb: 4,
  question: "Hasil dari fungsi tersebut ialah? <br> <img src='http://127.0.0.1:8000/img/koding/soal4.png' height='120'>",
  answer: "120",
  options: [
    "12",
    "101",
    "120",
    ]
},
{
  numb: 5,
  question: "Hasil dari fungsi tersebut ialah? <br> <img src='http://127.0.0.1:8000/img/koding/soal5.png' height='120'>",
  answer: "1.2",
  options: [
    "1.2",
    "12",
    "13",
    ]
},
    {
    numb: 6,
    question: "sekumpulan kode yang akan dijalankan berulang kali sampai batas yang ditentukan disebut?",
    answer: "loop",
    options: [
      "loop",
      "kondisi",
      "fungsi",
    ]
  },
    {
    numb: 7,
    question: "Berikut ini yang tidak termasuk kedalam jenis loop ialah?",
    answer: "if else",
    options: [
      "for",
      "while",
      "if else",
    ]
  },
    {
    numb: 8,
    question: "Pada kode di bawah, perulangan akan dimulai dari angka? <br> <img src='http://127.0.0.1:8000/img/koding/forLoop2.png' height='120'>",
    answer: "1",
    options: [
      "1",
      "10",
      "i++",
    ]
  },
    
    {
    numb: 9,
    question: "Pada kode di bawah, perulangan akan diakhiri dengan angka? <br> <img src='http://127.0.0.1:8000/img/koding/forLoop2.png' height='120'>",
    answer: "10",
    options: [
      "1",
      "10",
      "i++",
    ]
  },
    {
    numb: 10,
    question: "Pada kode di bawah, arti dari i++ adalah? <br> <img src='http://127.0.0.1:8000/img/koding/forLoop2.png' height='120'>",
    answer: "setiap melakukan satu perulangan, maka tambahkan nilai i dengan angka 1.",
    options: [
      "setiap melakukan satu perulangan, maka dikurangkan nilai i dengan angka 1.",
      "setiap melakukan satu perulangan, maka tambahkan nilai i dengan angka 1.",
      "setiap melakukan satu perulangan, maka dikalikan nilai i dengan angka 1.",
    ]
  },
      {
    numb: 11,
    question: "Hasil dari kondisi tersebut, apabila variabel hari memiliki nilai jumat? <br> <img src='http://127.0.0.1:8000/img/koding/switch3.png' height='120'>",
    answer: "baju pramuka",
    options: [
      "baju pramuka",
      "kemeja putih bawahan merah",
      "baju bebas",
    ]
  },
    {
    numb: 12,
    question: "Hasil dari kondisi tersebut, apabila variabel hari memiliki nilai sabtu? <br> <img src='http://127.0.0.1:8000/img/koding/switch3.png' height='120'>",
    answer: "baju bebas",
    options: [
      "baju pramuka",
      "kemeja putih bawahan merah",
      "baju bebas",
    ]
  },
    {
    numb: 13,
    question: "Hasil dari kondisi tersebut, apabila variabel hari memiliki nilai selasa? <br> <img src='http://127.0.0.1:8000/img/koding/switch2.png' height='120'>",
    answer: "kemeja hijau bawahan hitam",
    options: [
      "kemeja putih bawahan merah",
      "kemeja hijau bawahan hitam",
      "kemeja batik merah bawahan hitam",
    ]
  },
    
    {
    numb: 14,
    question: "Hasil dari kondisi tersebut, apabila variabel hari memiliki nilai kamis? <br> <img src='http://127.0.0.1:8000/img/koding/switch2.png' height='120'>",
    answer: "kemeja batik merah bawahan hitam",
    options: [
      "kemeja putih bawahan merah",
      "kemeja hijau bawahan hitam",
      "kemeja batik merah bawahan hitam",
    ]
  },
    {
    numb: 15,
    question: "Hasil dari kondisi tersebut, apabila variabel nilaiAndi memiliki nilai 50? <br> <img src='http://127.0.0.1:8000/img/koding/kondisi.png' height='120'>",
    answer: "JANGAN MENYERAH, COBA LAGI!",
    options: [
      "MEMUASKAN",
      "JANGAN MENYERAH, COBA LAGI!",
      "SANGAT MEMUASKAN",
    ]
  },
      {
    numb: 16,
    question: "Apa itu Internal JavaScript?",
    answer: "yaitu menyisipkan kode JavaScript langsung di dalam file HTML.",
    options: [
      "yaitu menyisipkan kode JavaScript langsung di dalam file HTML.",
      "yaitu membuat file JavaScript sendiri dan menyambungkannya dengan file HTML.",
      "Hypertext Preprogramming",
    ]
  },
    {
    numb: 17,
    question: "Di dalam element apa sajakah kita bisa meletakkan element &lt;script&gt; di dalam file HTML?",
    answer: "<head> & <body>",
    options: [
      "&lthead&gt & &ltbody&gt",
      "&lthead&gt saja",
      "&ltbody&gt saja",
    ]
  },
    {
    numb: 18,
    question: "Lengkapi element script berikut agar bisa mengenali file eksternal script.js <br> &ltscript ...='script.js'&gt&lt/...&gt",
    answer: "src & script",
    options: [
      "href & script",
      "src & script",
      "rel & script",
    ]
  },
    
    {
    numb: 19,
    question: "Apa itu Eksternal JavaScript?",
    answer: "yaitu membuat file JavaScript sendiri dan menyambungkannya dengan file HTML.",
    options: [
      "yaitu membuat file JavaScript sendiri dan menyambungkannya dengan file HTML.",
      "yaitu membuat file JavaScript sendiri dan menyambungkannya dengan file HTML.",
      "Hypertext Preprogramming",
    ]
  },
    {
    numb: 20,
    question: "Apabila ingin membuat comment di JavaScript harus menggunakan?",
    answer: "//",
    options: [
      "//",
      "%%",
      "$$",
    ]
  },
      {
    numb: 21,
    question: "Symbol dari operator penjumlahan yaitu?",
    answer: "+",
    options: [
      "+",
      "-",
      "&",
    ]
  },
    {
    numb: 22,
    question: "Symbol dari operator assignment yaitu?",
    answer: "+=",
    options: [
      "%",
      "&",
      "+=",
    ]
  },
    {
    numb: 23,
    question: "Symbol dari operator string yaitu, kecuali?",
    answer: ".",
    options: [
      "+",
      ".",
      "+=",
    ]
  },
    
    {
    numb: 24,
    question: "Symbol dari operator perbandingan yaitu",
    answer: "==",
    options: [
      "+",
      "-",
      "==",
    ]
  },
    {
    numb: 25,
    question: "Symbol dari operator logika yaitu?",
    answer: "&&",
    options: [
      "//",
      "%%",
      "&&",
    ]
  },    {
    numb: 26,
    question: "Dalam mendeklarasikan variabel tidak boleh menggunakan character?",
    answer: "@",
    options: [
      "-",
      "$",
      "@",
    ]
  },
    {
    numb: 27,
    question: "Tipe data boleean memiliki nilai?",
    answer: "true & false",
    options: [
      "true & false",
      "integer",
      "float",
    ]
  },
    {
    numb: 28,
    question: "Deretan karakter yang diapit oleh sepasang tanda kutip?",
    answer: "string",
    options: [
      "string",
      "integer",
      "boolean",
    ]
  },
    
    {
    numb: 29,
    question: "1.5 merupakan nilai dari tipe data?",
    answer: "float",
    options: [
      "float",
      "number",
      "boolean",
    ]
  },
    {
    numb: 30,
    question: "Sebuah nilai yang berarti kosong atau menunjuk pada nilai yang tidak ada?",
    answer: "null",
    options: [
      "string",
      "null",
      "boolean",
    ]
  },
  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];