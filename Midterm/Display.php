<?php include 'program1.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Card Game!</title>
    </head>
    <body>
<?php

/*******************************************************************************/
function creatDeck()
{
  //Array with all the cards
  $deck = array();
  
  //Creating the deck
  for ($i = 1; $i <= 39; $i++ )
  {
    $deck[] = $i;
  }
  
  //randomize the deck
  shuffle($deck);
  
  return $deck;
}

function drawCard(&$deck,&$Columns,&$cards)
{
    $j = count($cards);
   
    //pop out one card (get one card of the end of the array)
    $card = array_pop($deck);
    
    //$Suit = $_POST["suit"];
    //$Suit = "clubs";
    //to get the suit
    $suit = array("clubs", "diamonds", "hearts", "spades");
    //array_splice($suit, $Suit, 1);
    //cardSuit is going to be value of the floor((card-1)/13)
    $cardSuit = $suit[floor(($card-1) / 14)];
    
    //cardValue will be the mod of the card by 13
    $cardValue = $card % 13;
    
    //if the cardValue is 0 it means that will be the 13(K)
    if ($cardValue == 0)
    {
        $cardValue = 13;
    }

    $cards[$j]["value"] = $cardValue;
    $cards[$j]["suit"] = $cardSuit;
    
    $Columns = $Columns + $cardValue;
}

/*******************************************************************************/
function getClosest($search, $arr, &$winner) //return array of the winners
{
   $closest = null;
   foreach ($arr as $index => $item)
   {
     if ($item <= 42)
     {
        if ($closest === null || abs($search - $closest) > abs($item - $search))
        {
          $closest = $item;
        }
     }
   }
   
   foreach ($arr as $index => $value)
   {
      if ($value == $closest)
      {
        array_push($winner, $index);
      }
   }
   
   return $winner;
}

/*******************************************************************************
function whoWon(&$Columns,&$winner) //returns a array with the winner / winners
{
  getClosest(42, $Columns, $winner);
  
  if (count($winner) == 1)
  {
    echo "<h1>Player " . ($winner[0] + 1) ." WON!</h1>";
  }
  else
  {
    echo "<h1>";
    for ($i = 0; $i < count($winner); $i++)
    {
      echo "Player " . ($winner[$i] + 1) . " ";
    } 
    echo "WON!</h1>";
  }
}

/*******************************************************************************/
function printCard(&$cards)
{
  $size = count($cards);
  
  for ($i = 0; $i < $size; $i++)
  {
    $cardValue = $cards[$i]["value"];
    $cardSuit = $cards[$i]["suit"];
    echo "<td>";
    echo "<img src='assets/$cardSuit/$cardValue.png'/>";
    echo "</td>";
  }
}

/*******************************************************************************/
function game()
{
  //create and shuffle deck
  $deck = creatDeck();

  $Rows = $_POST["rows"];
  $Columns = $_POST["columns"];
  $Suits = $_POST["suit"];
  $Columns = array();
  
    for($x = 0; $x < $Rows; $x++){
        array_push($Columns, 0);
    }
    
  $winner = [];
  $cards[] = array();
  
  for($t = 0; $t < $Rows; $t++)
  {
    for ($i = 0; $i < $Columns; $i++) //each card for each player
    {
      drawCard($deck,$Columns[$i],$cards[$i]);
    }
  }
  
  echo "<div id=\"field\">";
  echo "<table>";
    for ($i = 0; $i < $Columns; $i++)
    {
        echo "<tr>";
        printCard($cards[$i]);
        echo "<td>";
        $Max = $Columns[$i];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

    if ($Max > 39){
        header('location:Wrong.php');
    }

 /*   
  echo "<div id=\"winner\">";
    whoWon($Columns,$winner);
  echo "</div>";
*/
  unset($deck);
  unset($Columns);
  unset($Rows);
  unset($Suits);
  unset($winner);
}
?>
      <h1>Here is the Game!</h1>
      <?php game(); ?>
    </body>
</html>