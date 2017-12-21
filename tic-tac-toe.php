
<!DOCTYPE html>
<html>
<head>
  <title>Tic-Toc Game</title>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<style type="text/css">
body {
  font-family:"Roboto", Arial, sans-serif;
  margin:0 auto;
  text-align:center;
  margin-top:50px;
  color:#FFF;
  text-shadow:-1px -1px #333;
  background:#333;
  h1 {
    font-weight:normal;
  }
  .turn {
    margin-bottom:10px;
  }
  table {
    border-collapse:collapse;
    width:150px;
    margin:0 auto;
    td {
      width:50px;
      height:50px;
      border:1px solid #555;
      cursor:pointer;
      &:before {
        font-size:1.5em;
        line-height:1;
      }
      &.cross:before {
        content:"x";
        color:lightblue;
      }
      &.circle:before {
        content:"o";
        color:pink;
      }
    }
  }
  .reset {
    background:#555;
    border:1px solid #333;
    padding:5px 10px;
    color:#FFF;
    cursor:pointer;
    font-family:"Roboto", Arial, sans-serif;
    text-transform:uppercase;
    &:hover {
      opacity:0.8;
    }
  }
}
</style>

<script type="text/javascript">
$(document).ready(function(){

          $(function() {
            
            var player = 1;
            var table = $('table');
            var messages = $('.messages');
            var turn = $('.turn');
            displayNextPlayer(turn, player);
            
            $('td').click(function() {
              td = $(this);
              var state = getState(td);
              if(!state) {
                var pattern = definePatternForCurrentPlayer(player);
                changeState(td, pattern);
                if(checkIfPlayerWon(table, pattern)) {
                  messages.html('Player '+player+' has won.');
                  turn.html('');
                } else {
                  player = setNextPlayer(player);
                  displayNextPlayer(turn, player);
                }
              } else {
                messages.html('This box is already checked.');
              }
            });
            
            $('.reset').click(function() {
              player = 1;
              messages.html('');
              reset(table);
              displayNextPlayer(turn, player);
            });
            
          });

          function getState(td) {
            if(td.hasClass('cross') || td.hasClass('circle')) {
              return 1;
            } else {
              return 0;
            }
          }

          function changeState(td, pattern) {
            return td.addClass(pattern);
          }

          function definePatternForCurrentPlayer(player) {
            if(player == 1) {
              return 'cross';
            } else {
              return 'circle';
            }
          }

          function setNextPlayer(player) {
            if(player == 1) {
              return player = 2;
            } else {
              return player = 1;
            }
          }

          function displayNextPlayer(turn, player) {
            turn.html('Player turn : '+player);
          }

          function checkIfPlayerWon(table, pattern) {
            var won = 0;
            if(table.find('.item1').hasClass(pattern) && table.find('.item2').hasClass(pattern) && table.find('.item3').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item1').hasClass(pattern) && table.find('.item4').hasClass(pattern) && table.find('.item7').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item1').hasClass(pattern) && table.find('.item5').hasClass(pattern) && table.find('.item9').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item4').hasClass(pattern) && table.find('.item5').hasClass(pattern) && table.find('.item6').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item7').hasClass(pattern) && table.find('.item8').hasClass(pattern) && table.find('.item9').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item2').hasClass(pattern) && table.find('.item5').hasClass(pattern) && table.find('.item8').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item3').hasClass(pattern) && table.find('.item6').hasClass(pattern) && table.find('.item9').hasClass(pattern)) {
              won = 1;
            } else if (table.find('.item3').hasClass(pattern) && table.find('.item5').hasClass(pattern) && table.find('.item7').hasClass(pattern)) {
              won = 1;
            }
            return won;
          }

          function reset(table) {
            table.find('td').each(function() {
              $(this).removeClass('circle').removeClass('cross');
            });
          }

});
</script>   

</head>
<body>
h1 Very simple jQuery Tic Tac Toe
div.messages
div.turn
table
  tr
    td.item1
    td.item2
    td.item3
  tr
    td.item4
    td.item5
    td.item6
  tr
    td.item7
    td.item8
    td.item9

br
input.reset type="button" value="Reset"

</body>
</html>