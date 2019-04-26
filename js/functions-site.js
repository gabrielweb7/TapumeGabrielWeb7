/**
* ▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄
*                   Criado por Gabriel Azuaga Barbosa
*                  E-mail: gabrielbarbosaweb7@gmail.com
*  `•.¸¸.•´´¯`••._.• [ http://gabrieldaluz7.co.nf/ ] •._.••`¯´´•.¸¸.•`
* ▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄
*/

var BooksModule = (function($) {
  "use strict";

  var books = ["Eloquent JavaScript", "Learning JavaScript Design Patterns"],
      // Public methods
      init = function() {
        _book.get();

        $(".btn-add").click(function() {
          _book.add($("#book-name").val());
        });
      },
      myOtherMethod = function() {
        console.log( 'my other method' );
      },
      // Private Methods
      _book = {
        add: function(book) {
          books.push(book);
          this.get();
        },
        remove: function(book) {
          var index = books.indexOf(book);
          books.splice(index, 1);
        },
        get: function() {
          $(".books").html(books.join("<br>"));
        }
      };
  return {
    init: init
  };
})(jQuery);

$(window).load(BooksModule.init);

console.log("**************************************************************************************************************************");
console.log("%cUma pessoa feliz não precisa de religião, não precisa de nenhum templo. Para ela, todo o universo é um templo. %c- %cOsho ", "color:green;", "color:black;", "color:red;");
console.log("Created By %cGabriel A. Barbosa %c<http://gabrieldaluz7.co.nf>", "color:blue;","color:black;");
console.log("**************************************************************************************************************************");