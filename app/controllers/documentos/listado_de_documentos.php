<?php

$sql_documento = "SELECT doc.id_documento, doc.descripcion_doc
FROM documentos doc";
$query_documento = $pdo->prepare($sql_documento);
$query_documento ->execute();
$documento_datos = $query_documento->fetchAll(PDO::FETCH_ASSOC);