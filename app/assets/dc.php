<?php

  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');


  // Список потенциально опасных терминов в запросах
  // WARNING: рекомендуется дополнять на регулярной основе.
  return (object) [
    '<script','</script','<?','<?php','?>','src=',
    'src =','SELECT', 'FROM', 'WHERE','Select', 'From', 'Where',
    'select','$', 'from', 'where', '_id', '__id', 'MongoDB',
    'BSON', 'mongodb', 'zips', 'Object', '->', '=>', 'INSERT', '</script>',
    'dba_insert', 'insertOne', 'insertMany', 'updateOne', 'updateMany', 'db',
    'mogno', 'update', 'insert', 'remove', 'delete', 'object', 'bson', 'select'
  ];

?>
