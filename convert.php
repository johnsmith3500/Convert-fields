<?php
// convert fields of associative array into multidimensional array

	// start array
	$data1=[
		'parent.child.field' => 1,
		'parent.child.field2' => 2,
		'parent2.child.name' => 'test',
		'parent2.child2.name' => 'test',
		'parent2.child2.position' => 10,
		'parent3.child3.position' => 10,
		];

	$data=[];	// final array
	foreach($data1 as $key => $value)	// go through all elements of start array
	{
		$temp=explode('.', $key);	// make from key an array
		$temp=array_reverse($temp);	// put it in backward order for convenience
		foreach($temp as $v)	// go through the key-array
		{
			$value=[$v => $value];	// $value is a stack
		}
		$data=array_merge_recursive($data, $value);	// merging 
	}

	print "INITIAL ARRAY:\n";
	print_r($data1);
	print "FINAL ARRAY:\n";
	print_r($data);



