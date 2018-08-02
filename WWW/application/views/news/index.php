<h2><?php echo 'User list'; ?></h2>

<style type="text/css">
table {
	width: 750px;
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
	text-align: center;
	margin-left: auto;
    margin-right: auto;
}
table th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

h2 {
	width: 100px;
	margin-left: auto;
    margin-right: auto;
	}
</style>
<?php
$query = $this->db->query('SELECT * FROM user');
$template = array(
    'thead_open'        => '<thead>',
    'thead_close'       => '</thead>',

    'heading_row_start' => '<tr>',
    'heading_row_end'   => '</tr>',
    'heading_cell_start'    => '<th>',
    'heading_cell_end'  => '</th>',

    'tbody_open'        => '<tbody>',
    'tbody_close'       => '</tbody>',

    'row_start'     => '<tr>',
    'row_end'       => '</tr>',
    'cell_start'        => '<td>',
    'cell_end'      => '</td>',

    'row_alt_start'     => '<tr>',
    'row_alt_end'       => '</tr>',
    'cell_alt_start'    => '<td>',
    'cell_alt_end'      => '</td>',

    'table_close'       => '</table>'
);

$this->table->set_template($template);
echo $this->table->generate($query);
