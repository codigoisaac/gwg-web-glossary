<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Types</title>
</head>

<body>
	<h1>Intro</h1>
	<h3>PHP supports ten primitive types.</h3>

	<h4>Four scalar types:</h4>
	<ul>
		<li>bool</li>
		<li>int</li>
		<li>float (floating-point number, aka double)</li>
		<li>string</li>
	</ul>

	<h4>Four compound types:</h4>
	<ul>
		<li>array</li>
		<li>object</li>
		<li>callable</li>
		<li>iterable</li>
	</ul>

	<h4>And finally two special types:</h4>
	<ul>
		<li>resource</li>
		<li>NULL</li>
	</ul>

	<b>The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used.</b>

	<h2>Checking the value of Expressions</h2>
	<?php
	$a_bool = TRUE;   // a boolean
	$a_str  = "foo";  // a string
	$a_str2 = 'foo';  // a string
	$an_int = 12;     // an integer

	echo '$a_bool: ' . gettype($a_bool); // prints out:  boolean
	echo '<br>';
	echo '$a_str: ' . gettype($a_str);  // prints out:  string
	echo '<br>';
	echo '$an_int: ' . gettype($an_int);  // prints out: integer
	echo '<br>';
	echo '$an_int value: ' . $an_int;  // prints out var value
	echo '<br>';

	// If this is an integer, increment it by four
	echo 'now $an_int will be incremented by 4 if it is an int.';
	if (is_int($an_int)) {
		$an_int += 4;
	}
	echo '<br>';
	echo '$an_int value: ' . $an_int;  // prints out var value

	// If $a_bool is a string, print it out
	echo '<br>';
	echo 'now #a_bool will be printed if it is a string.';
	// (does not print out anything)
	if (is_string($a_bool)) {
		echo "String: $a_bool";
	}
	?>

	<br><br><br>

	<b>
		To forcibly convert a variable to a certain type, either cast the variable or use the settype() function on it.
		<br>
		Note that a variable may be evaluated with different values in certain situations, depending on what type it is at the time.
	</b>

	<hr>
	<h1>Booleans</h1>

	<?php
	$boo = true;
	if ($boo) {
		echo 'boo is a truthfull boolean. <br>';
	}
	?>

	<hr>
	<h1>Integers</h1>
	<p>Numbers that can be writen without a fractional component.</p>
	<?php
	$a = 1234; // decimal number
	$a = 0123; // octal number (equivalent to 83 decimal)
	$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
	$a = 0b11111111; // binary number (equivalent to 255 decimal)
	$a = 1_234_567; // decimal number (as of PHP 7.4.0)
	?>

	<hr>
	<h1>Floating Point Numbers</h1>
	<p>Numbers with a fractional component.</p>
	<?php
	$a = 1.234;
	$b = 1.2e3;
	$c = 7E-10;
	$d = 1_234.567; // as of PHP 7.4.0
	?>

	<?= $c ?>

	<hr>
	<h1>Strings</h1>
	<p>A serie of characters.</p>
	A string literal can be specified in four different ways:
	<ul>
		<li>single quoted</li>
		<li>double quoted</li>
		<li>heredoc syntax</li>
		<li>nowdoc syntax</li>
	</ul>

	<?php
	echo 'this is a simple string';
	echo '<br>';

	echo 'You can also have embedded newlines in
strings this way as it is
okay to do';
	echo '<br>';

	// Outputs: Arnold once said: "I'll be back"
	echo 'Arnold once said: "I\'ll be back"';
	echo '<br>';

	// Outputs: You deleted C:\*.*?
	echo 'You deleted C:\\*.*?';
	echo '<br>';

	// Outputs: You deleted C:\*.*?
	echo 'You deleted C:\*.*?';
	echo '<br>';

	// Outputs: This will not expand: \n a newline
	echo 'This will not expand: \n a newline';
	echo '<br>';

	// Outputs: Variables do not $expand $either
	echo 'Variables do not $expand $either';
	?>

	<br><br>
	<p><b>Double-quote strings</b> expand variables and read escape characters.</p>

	<br><br>

	<?php
	class foo
	{
		public $bar = <<<EOT
bar
EOT;
	}
	?>

	<h2>heredoc</h2>
	<?php
	$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

	/* More complex example, with variables. */
	class fooo
	{
		var $fooo;
		var $bar;

		function __construct()
		{
			$this->fooo = 'Fooo';
			$this->bar = array('Bar1', 'Bar2', 'Bar3');
		}
	}

	$fooo = new fooo();
	$name = 'MyName';

	echo <<<EOT
My name is "$name". I am printing some $fooo->fooo.
Now, I am printing some {$fooo->bar[1]}.
This should print a capital 'A': \x41
EOT;
	?>

	<h2>nowdoc</h2>
	<?php
	echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;
	?>

	<br><br>

	<?php
	class foooo
	{
		public $foooo;
		public $bar;

		function __construct()
		{
			$this->foooo = 'Foooo';
			$this->bar = array('Bar1', 'Bar2', 'Bar3');
		}
	}

	$foooo = new foooo();
	$name = 'MyName';

	echo <<<'EOT'
My name is "$name". I am printing some $foooo->foooo.
Now, I am printing some {$foooo->bar[1]}.
This should not print a capital 'A': \x41
EOT;
	?>

	<br><br>

	<h2>Variable Parsing</h2>
	<h3>Simple syntax</h3>
	<?php
	$juice = "apple";

	echo "He drank some $juice juice." . PHP_EOL;
	echo '<br>';
	// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
	echo "He drank some juice made of $juices.";
	echo '<br>';
	// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
	echo "He drank some juice made of ${juice}s.";
	?>

	<h3>Complex (curly) syntax</h3>
	<?php
	// Show all errors
	error_reporting(E_ALL);

	$great = 'fantastic';

	// Won't work, outputs: This is { fantastic}
	echo "This is { $great}";
	echo '<br>';

	// Works, outputs: This is fantastic
	echo "This is {$great}";
	?>

	<br>
	<h2>String access and modification</h2>
	<?php
	// Get the lfirst and then the last character of a string
	$s = 'hello';
	echo $s[-1] . '<br>';
	echo $s[0] . '<br>';
	?>

	<hr>
	<h1>Numeric Strings</h1>
	<p>A PHP string is considered numeric if it can be interpreted as an int or a float.</p>

	<hr>
	<h1>Arrays</h1>
	<p>An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.</p>

	<h2>Specifying with 'array()'</h2>
	<p>Arrays can be created by using the 'array()' function.</p>
	<p>Arrays in PHP can have key-value pairs, like objects.</p>
	<?php
	array(
		'k0' => 'v0',
		'k1' => 'v1',
		'k2' => 'v2',
	);

	$arr0 = array(0, 1, 2, 3, 4);
	?>

	<h2>Specifying with '[ ]'</h2>
	<p>Arrays can also be specified using the most commom in other langagues square brackets.</p>

	<?php
	$arr1 = [0, 2, 4];
	$arr2 = ['zero' => 0, 'one' => 1, 'two' => 2];
	echo $arr2['zero'];
	?>

	<h2>Type casting and Overwriting</h2>
	<?php
	$arr3 = array(
		1    => "a",
		"1"  => "b",
		1.5  => "c",
		true => "d",
	);
	var_dump($arr3);
	// As all the keys in the above example are cast to 1, the value will be overwritten on every new element and the last assigned value "d" is the only one left over.
	?>
	<p>The key in arrays are optional. You can include it for some items but not for other, include it for all items or not include it at all.</p>

	<?php
	$arr4 = array(
		"a",
		"b",
		6 => "c",
		"d",
	);
	var_dump($arr4);
	?>

	<h2>Adding, changing and removing elements... </h2>
	<?php
	$arr5 = array(5 => 11, 8 => 42);
	$arr5[] = 12; // added as key 9
	$arr5['x'] = 'y'; // added 'x' key with value 'y'
	var_dump($arr5);
	echo '<br>';
	unset($arr5[5]); // remove item 
	var_dump($arr5);
	echo '<br>';
	unset($arr5); // delete array
	var_dump($arr5);
	?>




</body>

</html>