<?php
/**
 * PHP Version 8.0.2
 *
 * A PHP code to generate 200 airtime pins for a telecommunication company
 * 
 * @category Airtime
 * @package  Airtime_Gen
 * @author   Favour Olusayo <fsticks8187@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * Displays <a href="https://internship.sidehustle.ng/dashboard">https://internship.sidehustle.ng/dashboard</a>
 * @link     https://internship.sidehustle.ng/dashboard
 */

 // Making a switch
$active = true;
// Amount of Airtime pins to be generated
$num_of_pin = 200;
// A count to show the amount of pins generated
$count = 0;
// The loop to generate the pin
while ($active) {
    // Generating an array with 16 random numbers
    $digits = array();
    for ($i=0; $i < 16; $i++) { 
        // code...
        $random = rand(0, 9);
        array_push($digits, $random);
    }

    // Breaking the array into chunks of 4
    $grouped_pin = array_chunk($digits, 4);
    // An empty array to contain each grouped array
    $pin = array();
    // Grouping each chunk of array
    $pin1 = join("", $grouped_pin[0]);
    $pin2 = join("", $grouped_pin[1]);
    $pin3 = join("", $grouped_pin[2]);
    $pin4 = join("", $grouped_pin[3]);

    // Appending the grouped chunks too the empty $pin array
    array_push($pin, $pin1, $pin2, $pin3, $pin4);
    // Joining the items in the array with a '-' seperator
    $airtime_pin = join("-", $pin);
    $count++;
    // Printing the complete airtime pin with the count
    echo "[$count] $airtime_pin <br>";
    $num_of_pin--;
    
    // To turn off switch after 2000 complete cycles
    if ($num_of_pin==0) {
        $active = false;
    }
}
?>