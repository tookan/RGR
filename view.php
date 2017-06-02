<HTML>
<h3><font size="4"><font face="Arial, Helvetica, sans-serif"><code>Add new hero</code></font></font></h3>

<p>&nbsp;</p>
<form action="uploadGOT.php" method="post" name="upload" target="_self">
    <p><samp><input maxlength="25" name="name_person" type="text" value="Name"></samp></p>
    <p><input maxlength="1000" name="inf_person" type="text" value="Information"></p>
    <p><input maxlength="5" name="age_person" type="text" value="Age"></p>
    <p><input maxlength="120" name="br_sist" type="text" value="Bro`s and sisters"></p>
    <p><input name="submit" type="submit" value="Submit"></p>
</form>
<p>&nbsp;</p>
<h3><font size="4"><font face="Arial, Helvetica, sans-serif"><code>Game_of_trone_table</code></font></font></h3>
<table>
    <tr><td>Id</td><td>Name</td> <td>Information</td> <td>Age</td> <td>Bro`s and sisters</td></tr>
    <?php
    $outGOT= new Game_of_troneMapper();
    $outGOT=$outGOT->download();
    foreach ($outGOT as $got){
        echo "<tr><td>$got->id</td><td>$got->name_person</td> <td>$got->inf_person</td> <td>$got->age_person</td> <td>$got->br_sist</td> </tr>";
    }
    ?>
</table>
<h3><font size="4"><font face="Arial, Helvetica, sans-serif"><code>George R. R. Martin mode (delete from Game_of_trone table )</code></font></font></h3>

<form action="deleteGOT.php" method="post" name="upload" target="_self">
    <p><samp><input maxlength="25" name="id" type="text" value="Id of hero"></samp></p>
    <p><input name="submit" type="submit" value="Submit"></p>
</form>

<h3><font size="4"><font face="Arial, Helvetica, sans-serif"><code>About table</code></font></font></h3>
<table>
    <tr><td>Id</td><td>Name</td> <td>Facts</td>  <td>Before the events</td></tr>
    <?php
    $outabout= new aboutMapper();
    $outabout=$outabout->download();
    foreach ($outabout as $got){
        echo "<tr><td>$got->id</td><td>$got->name_pers</td> <td>$got->before_the_events</td> <td>$got->interest_facts</td>  </tr>";
    }
    ?>
</table>
<h3><font size="4"><font face="Arial, Helvetica, sans-serif"><code>Update Before the events in table about</code></font></font></h3>
<form action="updateAbout.php" method="post" name="update" >
    <p><input maxlength="25" name="id" type="text" value="Id of fact"></p>
    <p><input maxlength="1000" name="interest_facts" type="text" value="Before the events"></p>
    <p><input name="submitA" type="submit" value="Update"></p>
</form>

</HTML>
