<?php
if (isset($_GET['uid'])) {
  $unique_id = $_GET['uid'];

  $sent_by = $controller->checkId($unique_id);

  if (!array_key_exists('sent_by', $sent_by)) {

    ob_start();
    header('Location: ' . base_url('notfound'));
    ob_end_flush();
    die();
  }
} else {
  ob_start();
  header('Location: ' . base_url('notfound'));
  ob_end_flush();
  die();
}


$text = "Hello this is a test for voice api of google";
$text = urlencode($text);
$lang = urldecode("en");
$file  = "audio/" . md5($text) . ".mp3";
if (!file_exists($file) || filesize($file) == 0) {
  $mp3 = file_get_contents('http://translate.google.com/translate_tts?ie=UTF-8&q=' . $text . '&tl=' . $lang . '&total=2&idx=0&textlen=' . strlen($text) . '&prev=input');
  if (file_put_contents($file, $mp3)) {
    echo "Saved<br>";
  } else {
    echo "Wasn't able to save it !<br>";
  }
} else {
  echo "Already exist<br>";
}
?>

<style>
  @media screen and (max-width:650px) {
    .row>* {
      width: auto;
    }

    #videoId {
      max-width: 100%;
    }
  }

  @media screen and (min-width:651px) {
    #videoId {
      max-width: 300px;
    }
  }
</style>

<section style="background:#333; height:100vh; display: flex; align-items:center" id="counts" class="counts">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <video controls id="videoId">
          <source src="<?php echo base_url(); ?>/assets/deeds&seeds.mp4" type="video/mp4">
        </video>
        <br />
        <button class="btn btn-primary speak">Play Video</button>
      </div>
    </div>
    <br />

    <div style="max-width:400px; margin:auto;" class=" d-flex align-items-stretch justify-content-center">

      <input type="text" style="height:50px; width:80%; font-size:16px; padding-left:5px;" class="inputWide" placeholder='Enter Name' />

      <img style="width:15%; max-width:50px; margin:auto; cursor:pointer" class="shoot" src="<?php echo base_url('assets/logo.png'); ?>" alt="" />


    </div>
  </div>
</section>
<script>
  $(document).ready(function() {
    const sent_by = '<?php print_r($sent_by["sent_to"]); ?>';
    const name = $('.inputWide').val();

    $(".speak").click(function() {
      if (!$(this).hasClass('played')) {
        $('#videoId').get(0).play();

        $(this).addClass('played');

        $(this).removeClass('btn-success');
      }

    })

    $(".shoot").click(function() {

      const sent_by = '<?php print_r($sent_by["sent_to"]); ?>';
      const name = $('.inputWide').val();


      $.ajax({
        url: 'Insertlink',
        type: "POST",
        data: {
          sent_by: sent_by,
          sent_to: name

        },
        success: function(data) {
          console.log(data);
          const msg = encodeURI(`Dear ${name},     
            
A message from Bhartiya Janta Party.

Click here to watch - <?php echo base_url(); ?>?uid=${data}
            
Regards,
${sent_by}`);


          const link = `https://wa.me/?text=${msg}`;


          window.open(link, '_blank');
        }
      })



    })
  })
</script>