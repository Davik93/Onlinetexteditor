<style>
    .structure{
        border: black solid 1px;
        width: 142px;
        float: left;
        height: 20px;
    }
    .inp{
        width: 143px;
    }
</style>

    

<?php
$number = $_POST['numbers'];
echo '<div class="structure">Name</div> <div class="structure">Type</div> <div class="structure">Length/Values</div> '
. '<div class="structure">Default</div><div class="structure">Collation</div><div class="structure">Attributes</div>'
        . '<div class="structure">Null</div><div class="structure">Index</div><div class="structure">A_I</div><br><br>';
 echo      '<form action="Tablecreated.php" method="post">';
for ($i = 0; $i < $number; $i++) {

    echo  "<input class='inp' type='text' name='field_name($i)'>" ."<select class='inp' name='field_type($i)'>
                                                    <optgroup>
                                                        <option>INT</option>
                                                        <option>VARCHAR</option>
                                                        <option>TEXT</option>
                                                        <option>DATE</option>
                                                    </optgroup>
                                                    <optgroup label='Numeric'>
                                                        <option>TINYINT</option>
                                                        <option>SMALLINT</option>
                                                        <option>MEDIUMINT</option>
                                                        <option>INT</option>
                                                        <option>BIGINT</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>DECIMAL</option>
                                                        <option>FLOAT</option>
                                                        <option>DOUBLE</option>
                                                        <option>REAL</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>BIT</option>
                                                        <option>BOOLEAN</option>
                                                        <option>SERIAL</option>
                                                    </optgroup>
                                                    <optgroup label='Date and Time'>
                                                        <option>DATE</option>
                                                        <option>DATETIME</option>
                                                        <option>TIMESTAMP</option>
                                                        <option>TIME</option>
                                                        <option>YEAR</option>
                                                    </optgroup>
                                                    <optgroup label='String'>
                                                        <option>CHAR</option>
                                                        <option>VARCHAR</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>TINYTEXT</option>
                                                        <option>TEXT</option>
                                                        <option>MEDIUMTEXT</option>
                                                        <option>LONGTEXT</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>BINARY</option>
                                                        <option>VARBINARY</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>TINYBLOB</option>
                                                        <option>MEDIUMBLOB</option>
                                                        <option>BLOB</option>
                                                        <option>LONGBLOB</option>
                                                    </optgroup>
                                                    <optgroup label='-'>
                                                        <option>ENUM</option>
                                                        <option>SET</option>
                                                    </optgroup>
                                                    <optgroup label='Spatial'>
                                                        <option>GEOMETRY</option>
                                                        <option>POINT</option>
                                                        <option>LINESTRING</option>
                                                        <option>POLYGON</option>
                                                        <option>MULTIPOINT</option>
                                                        <option>MULTILINESTRING</option>
                                                        <option>MULTIPOLYGON</option>
                                                        <option>GEOMETRYCOLLECTION</option>
                                                    </optgroup>
                                              </select>" . "<input class='inp' type='text' name='field_lenght($i)'>"
                                                . "  <select class='inp' name='field_default($i)'>".
                                                        "<optgroup>
                                                        <option>None</option>
                                                        <option>NULL</option>
                                                        <option>CURRENT_TIMESTAMP</option>
                                                    </optgroup>"
                                                  . "</select> <select class='inp' name='field_collation($i)'>".
                                                        "<option>utf8_bin</option>"
                                                    ."</select>"
                                                       . "<select class='inp' name='field_attri($i)'>
                                                            <option></option>
                                                            <option>BINARY</option>
                                                            <option>UNSIGNED</option>
                                                            <option>UNSIGNED ZEROFILL</option>
                                                            <option>on update CURRENT_TIMESTAMP</option>
                                                            </select>"
                                                    . "<select class='inp' name='field_null($i)'>
                                                        <option></option>
                                                        <option>NOT NULL</option>
                                                       </select>"
                                                    . "<select class='inp' name='field_index($i)'>
                                                        <option></option>
                                                        <option>PRIMARY</option>
                                                        <option>UNIQUE</option>
                                                        <option>INDEX</option>
                                                        <option>FULLTEXT</option>
                                                       </select>"
                                                    . "<select class='inp' name='field_AI($i)'>
                                                        <option></option>
                                                        <option>AUTO_INCREMENT</option>
                                                     </select>     <br><br>";
    
}
echo '<input type="submit" value="GO">
</form>';
?>
