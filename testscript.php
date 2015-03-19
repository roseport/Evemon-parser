<html>
<table>

	<thead>
        <tr>
            <th>Skill ID</th>
            <th>Skill</th>
            <th>Level</th>
        </tr>
    </thead>

	<tbody>
	
	<?php
	
	$xml = simplexml_load_file("testskills.xml") or die ("Error: Cannot create object");
	
	foreach($xml as $items):
		echo("<tr>");
		echo("<td>" . $items["skillID"] . "</td>");
		echo("<td>" . $items["skill"] . "</td>");
		echo("<td>" . $items["level"] . "</td>");
		echo("</tr>");
	endforeach;
	?>
	
	</tbody>
	
</table>
</html>