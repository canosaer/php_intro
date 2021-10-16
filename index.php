<?php

$exampleVariable = "a";
const MY_CONSTANT = "b";

$array1 = array(1,2,3,4);

function printArrayAsList($array) {
    //traditional for loop
    echo '<ul>';
    for($i = 0; $i < count($array); $i++) {
        echo '<li>' . $i . '+' . $array[$i];
    }
    echo '</ul>';
}

function printArrayAsListAlt($array) {
    //traditional for loop
    echo '<ul>';
    // foreach($array as => $el){
    foreach($array as $i => $el){
        ?>
            <li>
                <?php echo $i; ?> = <?php echo $el; ?>
            </li>
        <?php

    }
    echo '</ul>';
}

function exampleFunction() {
    return "b";
}

//syntax a
if($exampleVariable) {
    exampleFunction();
}

//syntax b
if ($exampleVariable) :
    exampleFunction();
endif;

function addNums($a, $b) {
    return $a + $b;
}

function addStrings($a, $b) {
    return $a . $b;
}

$title = "Intro Title";
?>


<?php include('header.php'); ?>

        <h1><?php echo $title; ?></h1>
        <p> Is it true? <?php echo $exampleVariable; ?> </p>
        <p>1 + 2 = <?php echo addNums(1,2); ?></p>
        <p> "a" . "1a2" = <?php echo addStrings("a", "1a2"); ?> </p>


    <div class="array1-list">
        <?php $array1 = array(1,2,3,4); ?>
        <hr />
        <?php printArrayAsListAlt($array1); ?>
        <hr />
        <?php $array2 = ["a", "b", "c"]; ?>
        <?php printArrayAsList($array2); ?>
        <hr />
        <?php $array1 = array("k1" => "some value", "k2" => "another value"); ?>
    </div>

    <script>
        var myArray2 = <?php echo json_encode($array2); ?>
    </script>

<?php include('footer.php'); ?>