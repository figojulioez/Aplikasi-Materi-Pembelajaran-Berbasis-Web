<?php 

namespace config;

class templateString {
  public static function kode1 () {
    return "Untuk menyisipkan kode JavaScript di dalam file HTML, kita bisa menuliskan kode JavaScript di dalam tag <script>. Tag <script> sendiri bisa ditulis di dalam <head> maupun di dalam bagian akhir dari <body>.";
  }


  public static function kode2 () {
    return "
     Cara menyambungkannya sama seperti internal JavaScript, yaitu menggunakan tag <script> di dalam element <body>, hanya saja, kita menambahkan attribute src di dalam <script> untuk menyambungkan dengan file eksternal JavaScript kita.
    ";
  }

  public static function kode3 () {
    return "Pada file HTML, kita akan sambungkan file JavaScript menggunakan element <script>, seperti ini:";
  }

  public static function kode4 () {
    return "Itu adalah cara untuk membuat comment di file JavaScript . Sama fungsinya dengan <!-- --> di dalam file HTML.";
  }
} 