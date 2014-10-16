<?php
        $name = $_POST['name'];
        $tel = $_POST['phone'];
        $age = $_POST['age'];
        $addr = $_POST['addr'];
        
        echo '<table style="border:1px solid black;dispaly:inline-block;margin-right:50px;border-spacing:0;">';
            echo '<tr>';
            echo '<td style="border:1px solid black;padding:5px 8px;font-weight:bold;background-color:orange;width:150px;">'."Name".'</td>';
            echo '<td style="border:1px solid black;width:150px;padding:5px 8px;">'.$name.'</td>';
            echo '</tr>';

                        echo '<tr>';
            echo '<td style="border:1px solid black;padding:5px 8px;font-weight:bold;background-color:orange;width:150px;">'."Phone Number".'</td>';
            echo '<td style="border:1px solid black;width:150px;padding:5px 8px;">'.$tel.'</td>';
            echo '</tr>';
            
                        echo '<tr>';
            echo '<td style="border:1px solid black;padding:5px 8px;font-weight:bold;background-color:orange;width:150px;">'."Age".'</td>';
            echo '<td style="border:1px solid black;width:150px;padding:5px 8px;">'.$age.'</td>';
            echo '</tr>';
            
                        echo '<tr>';
            echo '<td style="border:1px solid black;padding:5px 8px;font-weight:bold;background-color:orange;width:150px;">'."Address".'</td>';
            echo '<td style="border:1px solid black;width:150px;padding:5px 8px;">'.$addr.'</td>';
            echo '</tr>';
        echo '</table>';

?>
