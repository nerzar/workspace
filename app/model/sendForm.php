<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');

  final class SendForm
  {
    // Telegram
    private $token = '2079238821:AAHoc_UZqdlpGQkKuS4tbUuVEyPzzh31WNE';
    private $chat_id = '-640869876';
    private $br = ' %0A';
    private $mono = '`';
    private $message = "<b>Новая заявка!</b> %0A";

    private $log_path;
    private $data;
    function __construct(object $post_data, bool $err)
    {
      if (!$err) {
        $this->log_path = DIR_APP . 'assets' . DSE . 'forms' . DSE . date('Y-m-d') . '-' . sha1(rand(10000, 99999) . date('YMd') . sha1(rand(10000, 99999) . md5(rand(10000, 99999)))) . '.json';
        $this->data = json_encode($post_data);
        $this->createLogFile();
        $this->message .= $this->assemblyMessage($post_data);
        $result = $this->sendToTelegram();
        ($result)
        ? exit(json_encode(
            ['answer' => '<div class="success">Данные успешно отправлены!</div>', 'status' => true]
          ))
        : exit(json_encode(
            [
              'answer' => '<div class="problem">Ошибка! Повторите корректность введенных данных.</div>', 'status' => false,
              'request_data' => json_encode($post_data),
              'tg_result' => $result,
              'tg_msg' => $this->message
            ]
          ));
      }else {
        exit(json_encode(
          ['answer' => '<div class="problem">Ошибка! Повторите корректность введенных данных.</div>', 'status' => false]
        ));
      }
    }

    private function sendToTelegram()
    {
      return file_get_contents("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$this->message}");
    }


    private function assemblyMessage($data)
    {
      foreach ($data as $key => $value) {
        $message .= "$key: <b><code>$value</code></b> $this->br";
      }
      return $message;
    }

    private function createLogFile()
    {
      $handle = fopen($this->log_path, 'w');
      fwrite($handle, $this->data);
      fclose($handle);
    }


  }

?>
