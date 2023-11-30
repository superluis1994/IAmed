<script>
    function cargarContenido(contenedor,contenido){
        $('#'+contenedor).load(contenido);
    }
    // para llamarlo hay q poner un a y un onclik
</script>

<? 




array(1) {
    [0]=>
    array(3) {
      ["_id"]=>
      object(MongoDB\BSON\ObjectId)#38 (1) {
        ["oid"]=>
        string(24) "655a3fe10c0782b5f9d7c9a7"
      }
      ["messages"]=>
      object(MongoDB\Model\BSONArray)#33 (1) {
        ["storage":"ArrayObject":private]=>
        array(3) {
          [0]=>
          object(MongoDB\Model\BSONDocument)#17 (1) {
            ["storage":"ArrayObject":private]=>
            array(3) {
              ["senderId"]=>
              string(24) "96OgMGl41uwTp3BgnNqEoQ=="
              ["message"]=>
              string(4) "Hola"
              ["timestamp"]=>
              object(MongoDB\BSON\UTCDateTime)#28 (1) {
                ["milliseconds"]=>
                string(10) "1671160540"
              }
            }
          }
          [1]=>
          object(MongoDB\Model\BSONDocument)#19 (1) {
            ["storage":"ArrayObject":private]=>
            array(3) {
              ["senderId"]=>
              string(24) "80EG7ydy/LtNLxI9AOPuVw=="
              ["message"]=>
              string(15) "¿Cómo estás?"
              ["timestamp"]=>
              object(MongoDB\BSON\UTCDateTime)#37 (1) {
                ["milliseconds"]=>
                string(10) "1671160632"
              }
            }
          }
          [2]=>
          object(MongoDB\Model\BSONDocument)#31 (1) {
            ["storage":"ArrayObject":private]=>
            array(3) {
              ["senderId"]=>
              string(24) "96OgMGl41uwTp3BgnNqEoQ=="
              ["message"]=>
              string(13) "Bien, gracias"
              ["timestamp"]=>
              object(MongoDB\BSON\UTCDateTime)#30 (1) {
                ["milliseconds"]=>
                string(10) "1671160724"
              }
            }
          }
        }
      }
      ["participants"]=>
      object(MongoDB\Model\BSONArray)#36 (1) {
        ["storage":"ArrayObject":private]=>
        array(2) {
          [0]=>
          object(MongoDB\Model\BSONDocument)#34 (1) {
            ["storage":"ArrayObject":private]=>
            array(2) {
              ["username"]=>
              string(6) "Melvin"
              ["doctorId"]=>
              string(24) "80EG7ydy/LtNLxI9AOPuVw=="
            }
          }
          [1]=>
          object(MongoDB\Model\BSONDocument)#35 (1) {
            ["storage":"ArrayObject":private]=>
            array(2) {
              ["userId"]=>
              string(24) "96OgMGl41uwTp3BgnNqEoQ=="
              ["username"]=>
              string(12) "emmanuel2000"
            }
          }
        }
      }
    }
  }