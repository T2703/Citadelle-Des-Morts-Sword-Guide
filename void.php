<?php
    include 'things/general.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Citadelle Des Morts Sword Guide </title>
    <link rel="stylesheet" href="styles/void.css">
</head>
<body>
    <header>
        <h1> Balmung </h1>
    </header>
    <div>
        <ul>
            <li>
                <?php echo $message; ?>
            </li>
            <li>
                Step 1: Get the raven sword from the raven knight.
                <img src="images/ravenknight.png" alt="raven">
            </li>
            <li>
                Step 2: Go to the alchemy room and look for a bone artifact and collect it. <br>
                For example, the jaws bone spawned it will be different each match.
                <img src="images/jaws.png" alt="jaws">
            </li>
            <li>
                Step 3: Go to the pub basement and insert the sword here:
                <img src="images/symbolinserter.png" alt="symbols">
            </li>
            <li>
                Step 4: Input the proper symbols depending on the bone you got. <br>
                Here's a table of the corresponding combos and image of the symbols:
            </li>
            <table>
                <tr>
                    <th>Middle Symbol</th>
                    <th>Inner Symbol</th>
                    <th>Outer Symbol</th>

                </tr>
                <tr>
                    <td>Horns</td>
                    <td>Fire</td>
                    <td>Aries</td>
                </tr>
                <tr>
                    <td>Raven</td>
                    <td>Air</td>
                    <td>Gemini</td>
                </tr>
                <tr>
                    <td>Jaw</td>
                    <td>Fire</td>
                    <td>Leo</td>
                </tr>
                <tr>
                    <td>Scorpion</td>
                    <td>Water</td>
                    <td>Scorpio</td>
                </tr>
                <tr>
                    <td>Fish</td>
                    <td>Water</td>
                    <td>Pisces</td>
                </tr>
                </table>
                <img src="images/symbols.png" alt="symbols">
                <p>Here's how to insert the symbols: </p>
                <img src="images/symbolinserter2.png" alt="symbols2">
                <p>The cirlce shows where they should be inserted. <br> Since I have jaws, the symbols will be leo and fire. </p>
            <li>
                Step 5: Then orbs should follow you and you should lead those orbs to the holes it, 
                it takes three orbs for the hole to close. Do this three times they
                are located within the pub. Here are the locations:

                <div class="image-container">
                    <div>
                        <strong>Location: Basemnet of the pub.</strong><br>
                        <img src="images/orbhole1.png" alt="orbhole1">
                    </div>
                    <div>
                        <strong>Location: First floor of the pub (where the bar area is).</strong><br>
                        <img src="images/orbhole2.png" alt="orbhole2">
                    </div>
                    <div>
                        <strong>Location: Second floor of the pub (where the pool table is).</strong><br>
                        <img src="images/orbhole3.png" alt="orbhole3">
                    </div>
                </div>
                After that then one single orb should go back where you placed the sword.
            </li>
            <li>
                Now you can wield the Balmung!
            </li>
        </ul>
    </div>
</body>
</html>