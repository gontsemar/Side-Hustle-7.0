<?php
    $voterage = 18;
    $voterpvc = true;
    $voterward = "020";
    
    if($voterage >= 18 && $voterpvc == true && $voterward == "020")
    {
        echo "Voter eligible to vote";
    }
    else
    {
        if($voterage < 18)
        {
            echo "Voter is too young to vote <br/>";
        }
        if($voterpvc == false)
        {
        echo "Voter does not have a PCV in order to vote <br/>";
        }
        if($voterward != "020")
        {
        echo "Voter does not belong to the correct ward in order to vote <br/>";
        }
    }
?>